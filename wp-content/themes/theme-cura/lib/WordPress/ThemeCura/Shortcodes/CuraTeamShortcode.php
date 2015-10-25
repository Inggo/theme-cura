<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class CuraTeamShortcode extends GenericShortcode
{
    protected $subview = 'team';

    public function __construct()
    {
        add_shortcode('cura_team', array($this, 'output'));
        add_action('cura_team_shortcode_pre', array($this, 'pre'), 10, 2);
        add_action('cura_team_shortcode_loop', array($this, 'loop'), 10, 2);
        add_action('cura_team_shortcode_post', array($this, 'post'), 10, 2);
    }

    public function output($atts)
    {
        $a = \shortcode_atts(array(
            'limit'   => -1,
            'offset'  => 0,
            'orderby' => 'date',
            'order'   => 'DESC',
        ), $atts, 'cura_team');

        $team_members = \get_posts(array(
            'posts_per_page' => $a['limit'],
            'offset'         => $a['offset'],
            'orderby'        => $a['orderby'],
            'order'          => $a['desc'],
            'post_type'      => 'cura_team_member',
        ));

        // Start output buffer
        ob_start();

        do_action('cura_team_shortcode_pre', $team_members, $a);
        do_action('cura_team_shortcode_loop', $team_members, $a);
        do_action('cura_team_shortcode_post', $team_members, $a);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
