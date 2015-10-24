<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomPostsRegistrarInterface;

class CustomPostsRegistrar implements CustomPostsRegistrarInterface
{
    /**
     * Do the registrations here
     */
    public function register()
    {
        $this->registerPropertyCPT();
        $this->registerVideoCPT();
        $this->registerProcessCPT();
    }

    /**
     * Register the "cura_property" CPT
     */
    private function registerPropertyCPT()
    {
        $labels = array(
            "all_items"     => "All Properties",
            "name"          => "Properties",
            "singular_name" => "Property",
        );

        $args = array(
            "labels"              => $labels,
            "description"         => "",
            "public"              => true,
            "show_ui"             => true,
            "has_archive"         => false,
            "show_in_menu"        => true,
            "exclude_from_search" => false,
            "capability_type"     => "post",
            "map_meta_cap"        => true,
            "hierarchical"        => false,
            "rewrite"             => false,
            "query_var"           => true,
            "menu_position"       => 20,
            "menu_icon"           => "dashicons-admin-multisite",
            "supports"            => array("title", "thumbnail", "page-attributes"),
        );

        \register_post_type('cura_property', $args);
    }

    /**
     * Register the cura_video CPT
     */
    private function registerVideoCPT()
    {
        $labels = array(
            "all_items"     => "All Videos",
            "name"          => "Videos",
            "singular_name" => "Video",
        );

        $args = array(
            "labels"              => $labels,
            "description"         => "",
            "public"              => true,
            "show_ui"             => true,
            "has_archive"         => false,
            "show_in_menu"        => true,
            "exclude_from_search" => false,
            "capability_type"     => "post",
            "map_meta_cap"        => true,
            "hierarchical"        => false,
            "rewrite"             => false,
            "query_var"           => true,
            "menu_position"       => 21,
            "menu_icon"           => "dashicons-format-video",
            "supports"            => array("title", "thumbnail"),
        );

        \register_post_type('cura_video', $args);
    }

    /**
     * Register the cura_process CPT
     */
    private function registerProcessCPT()
    {
        $labels = array(
            "all_items"     => "All Processes",
            "name"          => "Processes",
            "singular_name" => "Process",
        );

        $args = array(
            "labels"              => $labels,
            "description"         => "",
            "public"              => true,
            "show_ui"             => true,
            "has_archive"         => false,
            "show_in_menu"        => true,
            "exclude_from_search" => false,
            "capability_type"     => "post",
            "map_meta_cap"        => true,
            "hierarchical"        => false,
            "rewrite"             => false,
            "query_var"           => true,
            "menu_position"       => 22,
            "menu_icon"           => "dashicons-controls-repeat",
            "supports"            => array("title", "editor", "thumbnail"),
        );

        \register_post_type('cura_process', $args);
    }
    
}
