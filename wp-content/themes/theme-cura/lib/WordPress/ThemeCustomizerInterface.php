<?php namespace Inggo\WordPress;

interface ThemeCustomizerInterface
{
    public function register(\WP_Customize_Manager $wp_customize);
}
