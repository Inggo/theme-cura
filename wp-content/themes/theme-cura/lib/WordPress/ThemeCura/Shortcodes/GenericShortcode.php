<?php namespace Inggo\WordPress\ThemeCura\Shortcodes;

class GenericShortcode
{
    protected $pre_view = 'pre';
    protected $view = 'loop';
    protected $post_view = 'post';

    public function pre($posts, $atts)
    {
        include(\locate_template("{$this->pre_view}-{$this->subview}.php"));
    }

    public function loop($posts, $atts)
    {
        include(\locate_template("{$this->view}-{$this->subview}.php"));
    }

    public function post($posts, $atts)
    {
        include(\locate_template("{$this->post_view}-{$this->subview}.php"));
    }
}
