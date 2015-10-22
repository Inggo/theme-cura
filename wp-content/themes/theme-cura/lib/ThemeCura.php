<?php

class ThemeCura
{
    private $theme_data;

    public function __construct()
    {
        $this->theme_data = wp_get_theme();
        add_action('after_setup_theme', array($this, 'setup'));
        add_action('init', array($this, 'registerStyles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueStyles'));
    }

    /**
     * Set-up the theme features
     */
    public function setup()
    {
        add_theme_support('custom-header', array(
            'flex-width'    => true,
            'width'         => 120,
            'flex-height'   => true,
            'height'        => 120,
            'uploads'       => true,
            'default-image' => get_template_directory_uri() . '/images/logo.png',
        ));
    }

    /**
     * Register theme stylesheet
     */
    public function registerStyles()
    {
        wp_register_style('theme-cura', get_bloginfo('stylesheet_url'), array(), $this->theme_data->Version);
    }

    /**
     * Enqueue theme stylesheet
     */
    public function enqueueStyles()
    {
        wp_enqueue_style('theme-cura');
    }
}
