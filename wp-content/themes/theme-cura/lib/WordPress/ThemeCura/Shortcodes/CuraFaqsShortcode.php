<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraFaqsShortcode extends GenericShortcode
{
    protected $subview = 'faqs';

    public function __construct()
    {
        add_shortcode('cura_faqs', array($this, 'output'));
        add_action('cura_faqs_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_faqs_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_faqs_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => -1,
            'offset'  => 0,
            'topic'   => '',
            'orderby' => 'menu_order date',
            'order'   => 'DESC',
        ), $atts, 'cura_faqs');

        $args = array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_faq',
        );

        // Add topic if set
        if ($a['topic'] !== '') {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'cura_topic',
                    'field'    => 'slug',
                    'terms'    => $a['topic'],
                ),
            );
        }

        $faqs = \get_posts($args);

        // Start output buffer
        ob_start();

        do_action('cura_faqs_shortcode_pre', $faqs, $a);
        do_action('cura_faqs_shortcode_loop', $faqs, $a);
        do_action('cura_faqs_shortcode_post', $faqs, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
