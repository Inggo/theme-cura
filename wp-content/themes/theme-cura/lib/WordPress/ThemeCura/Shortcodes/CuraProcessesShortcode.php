<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraProcessesShortcode extends GenericShortcode
{
    protected $subview = 'processes';

    public function __construct()
    {
        add_shortcode('cura_processes', array($this, 'output'));
        add_action('cura_processes_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_processes_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_processes_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => 6,
            'offset'  => 0,
            'orderby' => 'menu_order date',
            'order'   => 'DESC',
        ), $atts, 'cura_processes');

        $processes = \get_posts(array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_process',
        ));

        // Start output buffer
        ob_start();

        do_action('cura_processes_shortcode_pre', $processes, $a);
        do_action('cura_processes_shortcode_loop', $processes, $a);
        do_action('cura_processes_shortcode_post', $processes, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
