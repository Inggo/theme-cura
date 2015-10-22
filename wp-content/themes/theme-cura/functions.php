<?php

/**
 * Set-up the theme features
 */
function theme_cura_setup()
{
    add_theme_support('custom-header', array(
        'flex-width'    => true,
        'width'         => 120,
        'flex-height'   => true,
        'height'        => 120,
        'uploads'       => true,
        'default-image' => get_tempalte_directory_uri() . '/images/logo.png',
    ));
}
add_action('after_theme_setup', 'theme_cura_setup');
