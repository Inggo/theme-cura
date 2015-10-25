<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraBoxShortcode
{
    public function __construct()
    {
        add_shortcode('cura_box', array($this, 'output'));
    }

    public function output($atts, $content = null)
    {
        return '<div class="cura-box">' . do_shortcode($content) . '</div>';
    }
}
