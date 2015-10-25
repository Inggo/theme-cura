<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraTestimonialsShortcode extends GenericShortcode
{
    protected $subview = 'testimonials';

    public function __construct()
    {
        add_shortcode('cura_testimonials', array($this, 'output'));
        add_action('cura_testimonials_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_testimonials_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_testimonials_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => 6,
            'offset'  => 0,
            'orderby' => 'date',
            'order'   => 'DESC',
        ), $atts, 'cura_testimonials');

        $testimonials = \get_posts(array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_testimonial',
        ));

        // Start output buffer
        ob_start();

        do_action('cura_testimonials_shortcode_pre', $testimonials, $a);
        do_action('cura_testimonials_shortcode_loop', $testimonials, $a);
        do_action('cura_testimonials_shortcode_post', $testimonials, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
