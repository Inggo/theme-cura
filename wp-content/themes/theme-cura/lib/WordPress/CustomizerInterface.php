<?php namespace Inggo\WordPress;

interface CustomizerInterface
{
    public function register(\WP_Customize_Manager $wp_customize);
}
