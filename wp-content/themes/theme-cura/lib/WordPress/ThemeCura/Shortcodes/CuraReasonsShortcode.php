<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraReasonsShortcode extends GenericShortcode
{
    protected $subview = 'reasons';

    public function __construct()
    {
        add_shortcode('cura_reasons', array($this, 'output'));
        add_action('cura_reasons_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_reasons_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_reasons_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => 5,
            'offset'  => 0,
            'type'    => '',
            'orderby' => 'date',
            'order'   => 'DESC',
        ), $atts, 'cura_reasons');

        $args = array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_reason',
        );

        // Add type if set
        if ($a['type'] !== '') {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'cura_type',
                    'field'    => 'slug',
                    'terms'    => $a['type'],
                ),
            );
        }

        $reasons = \get_posts($args);

        // Start output buffer
        ob_start();

        do_action('cura_reasons_shortcode_pre', $reasons, $a);
        do_action('cura_reasons_shortcode_loop', $reasons, $a);
        do_action('cura_reasons_shortcode_post', $reasons, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
