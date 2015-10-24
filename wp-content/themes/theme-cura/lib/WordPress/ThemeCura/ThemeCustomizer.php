<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ThemeCustomizerInterface;

class ThemeCustomizer implements ThemeCustomizerInterface
{
    // Reference to the WP_Customize_Manager
    protected $c;
    public $social = array(
        'facebook'  => 'Facebook',
        'twitter'   => 'Twitter',
        'linkedin'  => 'LinkedIn',
        'google'    => 'Google+',
        'instagram' => 'Instagram',
    );

    /**
     * Get social options
     */
    public function getSocialOptions()
    {
        return array_map(function ($media) {
            return "social_{$media}";
        }, array_keys($this->social));
    }

    /**
     * Register the customize controls
     * @param  \WP_Customize_Manager $wp_customize WP_Customize_Manager object
     */
    public function register(\WP_Customize_Manager $wp_customize)
    {
        $this->c = $wp_customize;
        $this->initializeContactDetails();
        $this->initializeSocialMedia();
    }

    /**
     * Initialize Contact Details section and fields
     */
    private function initializeContactDetails()
    {
        $this->addSection('theme_cura_contact_details', 'Contact Details');
        $this->addTextAreaControl('contact_address', 'theme_cura_contact_details', 'Address');
        $this->addTextControl('contact_number', 'theme_cura_contact_details', 'Contact Number');
        $this->addTextControl('contact_email', 'theme_cura_contact_details', 'Email Address');
    }

    /**
     * Initialize Social Media section and fields
     */
    private function initializeSocialMedia()
    {
        $this->addSection('theme_cura_social_media', 'Social Media', 130);
        foreach ($this->social as $media => $label) {
            $this->addTextControl("social_{$media}", 'theme_cura_social_media', $label);
        }
    }

    /**
     * Adds a section to the customizer
     * @param string   $name      Name of the section
     * @param string   $title     Label of the section
     * @param integer  $priority  Priority of the section
     */
    private function addSection($name, $title, $priority = 120)
    {
        $this->c->add_section($name, array(
            'title'      => \__($title, 'theme-cura'),
            'priority'   => $priority,
            'capability' => 'edit_theme_options',
        ));
    }

    /**
     * Adds a text area control to a section
     * @param string  $name         Name of the control
     * @param string  $section      Section where the control will go
     * @param string  $label        Label of the control
     * @param string  $description  Description of the control
     */
    private function addTextAreaControl($name, $section, $label, $description = '')
    {
        $this->addTextControl($name, $section, $label, $description = '', 'textarea');
    }

    /**
     * Adss a text control to a section
     * @param string  $name         Name of the control
     * @param string  $section      Section where the control will go
     * @param string  $label        Label of the control
     * @param string  $description  Description of the control
     * @param string  $type         Type of the control (text|textarea)
     */
    private function addTextControl($name, $section, $label, $description = '', $type = 'text')
    {
        $this->c->add_setting($name, array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));

        $this->c->add_control(new \WP_Customize_Control(
            $this->c,
            $name,
            array(
                'label'       => \__($label, 'theme-cura'),
                'description' => \__($description, 'theme-cura'),
                'section'     => $section,
                'settings'    => $name,
                'type'        => $type,
            )
        ));
    }
}
