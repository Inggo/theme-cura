<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ThemeHelper;
use Inggo\WordPress\CustomizerInterface;
use Inggo\WordPress\ThemeCura\CustomPostsRegistrar;
use Inggo\WordPress\ThemeCura\CustomFieldsRegistrar;
use Inggo\WordPress\ThemeCura\ShortcodesRegistrar;

class ThemeCura
{
    private $theme_data;
    public $helper;
    public $customizer;
    public $cpt_registrar;
    public $cf_registrar;
    public $sc_registrar;

    public function __construct(ThemeHelper $helper, CustomizerInterface $customizer)
    {
        // Set theme variables
        $this->theme_data = \wp_get_theme();
        $this->helper = $helper;
        $this->customizer = $customizer;
        
        // Add theme hooks
        \add_action('after_setup_theme', array($this, 'setup'));
        \add_action('after_setup_theme', array($this, 'disableAdminBar'));
        
        \add_action('wp_enqueue_scripts', array($this, 'enqueueStyles'));
        \add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
        
        \add_action('init', array($this, 'registerStyles'));
        \add_action('init', array($this, 'registerScripts'));
        \add_action('init', array($this, 'registerPostTypes'));
        \add_action('init', array($this, 'registerCustomFields'));
        \add_action('init', array($this, 'registerShortcodes'));

        \add_action('admin_notices', array($this, 'checkDependencies'));
        
        \add_action('customize_register', array($this->customizer, 'register'));
        
        \add_filter('the_content', array($this, 'cleanShortcodes'));

        \add_filter('pre_get_posts', array($this, 'searchFilter'));
    }

    public function searchFilter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }

    /**
     * Clean the surrounding <p> tags on our shortcodes
     * @param  string  $content  Contents of the_content()
     * @return string            Cleaned up contents
     */
    public function cleanShortcodes($content) {
        $array = array(
            // List all possible opening shortcodes
            '<p>[cura_properties' => '[cura_properties',
            '<p>[cura_processes'  => '[cura_processes',
            '<p>[cura_video'      => '[cura_video',
            // Fix for closing </p>
            ']</p>'   => ']',
            ']<br />' => ']',
        );
        return strtr($content, $array);
    }

    /**
     * Set-up the theme features
     */
    public function setup()
    {
        // Add custom header support
        \add_theme_support('custom-header', array(
            'flex-width'    => true,
            'width'         => 120,
            'flex-height'   => true,
            'height'        => 120,
            'uploads'       => true,
            'default-image' => \get_template_directory_uri() . '/images/logo.png',
        ));

        // Add thumbnail support
        \add_theme_support('post-thumbnails', array('post', 'cura_property', 'cura_video', 'cura_process'));

        // Set the thumbnail size
        \set_post_thumbnail_size(396, 190);

        // Add menus support
        \add_theme_support('menus');

        // Register the nav menus
        \register_nav_menus(array(
            'main_menu' => 'Main Menu',
        ));
    }

    /**
     * Register Custom Post Types
     */
    public function registerPostTypes()
    {
        $this->cpt_registrar = new CustomPostsRegistrar();
        $this->cpt_registrar->register();
    }

    /**
     * Register Custom Fields
     */
    public function registerCustomFields()
    {
        $this->cf_registrar = new CustomFieldsRegistrar();
        $this->cf_registrar->register();
    }

    /**
     * Register Shortcodes
     */
    public function registerShortcodes()
    {
        $this->sc_registrar = new ShortcodesRegistrar();
        $this->sc_registrar->register();
    }

    /**
     * Show a plugin error
     * @param  string
     * @return string
     */
    private function __pluginError($plugin)
    {
        return '<div class="error"><p>' .
            \__('Warning: The theme needs <strong>' . $plugin . '</strong> to function', 'theme-cura' ) .
            '</p></div>';
    }

    /**
     * Check for theme plugin dependencies
     */
    public function checkDependencies()
    {
        if (!function_exists('get_field')) {
            echo $this->__pluginError('Advanced Custom Fields');
        }
    }

    /**
     * Disable the admin bar
     */
    public function disableAdminBar()
    {
        \show_admin_bar(false);
    }

    /**
     * Register theme stylesheet
     */
    public function registerStyles()
    {
        \wp_register_style('theme-cura', \get_stylesheet_uri(), array(), $this->theme_data->Version);
    }

    /**
     * Register theme scripts
     */
    public function registerScripts()
    {
        \wp_register_script('modernizr', \get_template_directory_uri() . '/js/modernizr.min.js', array(), '3.1.0');
        \wp_register_script('placeholders', \get_template_directory_uri() . '/js/placeholders.min.js', array(), '3.1.0');
        \wp_register_script('jquery', \get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3', true);
        \wp_register_script('bootstrap', \get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true);
        \wp_register_script('theme-cura', \get_template_directory_uri() . '/js/theme-cura.js', array('modernizr', 'bootstrap'), $this->theme_data->Version, true);
    }

    /**
     * Enqueue theme stylesheet
     */
    public function enqueueStyles()
    {
        \wp_enqueue_style('theme-cura');
    }

    /**
     * Enqueue theme scripts
     */
    public function enqueueScripts()
    {
        \wp_enqueue_script('modernizr');
        \wp_enqueue_script('placeholders');
        \wp_enqueue_script('bootstrap');
        \wp_enqueue_script('theme-cura');
    }
}
