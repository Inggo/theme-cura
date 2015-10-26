<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraPropertiesShortcode extends GenericShortcode
{
    protected $subview = 'properties';

    public function __construct()
    {
        add_shortcode('cura_properties', array($this, 'output'));
        add_action('cura_properties_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_properties_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_properties_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => 6,
            'offset'  => 0,
            'orderby' => 'menu_order date',
            'order'   => 'DESC',
        ), $atts, 'cura_properties');

        $properties = \get_posts(array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_property',
        ));

        // Start output buffer
        ob_start();

        do_action('cura_properties_shortcode_pre', $properties, $a);
        do_action('cura_properties_shortcode_loop', $properties, $a);
        do_action('cura_properties_shortcode_post', $properties, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
