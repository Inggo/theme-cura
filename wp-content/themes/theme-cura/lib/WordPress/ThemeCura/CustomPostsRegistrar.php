<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomPostsRegistrarInterface;

class CustomPostsRegistrar implements CustomPostsRegistrarInterface
{
    /**
     * Do the registrations here
     */
    public function register()
    {
        // Register Taxonomies
        $this->registerTypeTaxonomy();
        $this->registerTopicTaxonomy();

        // Register CPTs
        $this->registerPropertyCPT();
        $this->registerVideoCPT();
        $this->registerProcessCPT();
        $this->registerTeamMemberCPT();
        $this->registerTestimonialCPT();
        $this->registerReasonCPT();
        $this->registerFaqCPT();
    }

    /**
     * Register the cura_type taxonomy
     */
    private function registerTypeTaxonomy()
    {
        $labels = array(
            "name" => "Types",
            "label" => "Types",
        );

        $args = array(
            "labels" => $labels,
            "hierarchical" => false,
            "label" => "Types",
            "show_ui" => true,
            "query_var" => true,
            "rewrite" => array( 'slug' => 'cura_type', 'with_front' => false ),
            "show_admin_column" => true,
        );

        \register_taxonomy("cura_type", '', $args);
    }

    /**
     * Register the cura_topic taxonomy
     */
    private function registerTopicTaxonomy()
    {
        $labels = array(
            "name" => "Topics",
            "label" => "Topics",
        );

        $args = array(
            "labels" => $labels,
            "hierarchical" => false,
            "label" => "Types",
            "show_ui" => true,
            "query_var" => true,
            "rewrite" => array( 'slug' => 'cura_topic', 'with_front' => false ),
            "show_admin_column" => true,
        );

        \register_taxonomy("cura_topic", '', $args);
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
            "menu_position"       => 24,
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
            "menu_position"       => 21,
            "menu_icon"           => "dashicons-controls-repeat",
            "supports"            => array("title", "editor", "thumbnail"),
        );

        \register_post_type('cura_process', $args);
    }

    /**
     * Register the cura_team_member CPT
     */
    private function registerTeamMemberCPT()
    {
        $labels = array(
            "all_items"     => "All Team Members",
            "name"          => "Team",
            "singular_name" => "Team Member",
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
            "menu_icon"           => "dashicons-groups",
            "supports"            => array("title", "editor", "thumbnail", "page-attributes"),
        );

        \register_post_type('cura_team_member', $args);
    }

    /**
     * Register the cura_testimonial CPT
     */
    private function registerTestimonialCPT()
    {
        $labels = array(
            "all_items"     => "All Testimonials",
            "name"          => "Testimonials",
            "singular_name" => "Testimonial",
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
            "menu_position"       => 23,
            "menu_icon"           => "dashicons-format-quote",
            "supports"            => array("title", "editor", "thumbnail", "page-attributes"),
        );

        \register_post_type('cura_testimonial', $args);
    }

    /**
     * Register the cura_reason CPT
     */
    private function registerReasonCPT()
    {
        $labels = array(
            "all_items"     => "All Reasons",
            "name"          => "Reasons",
            "singular_name" => "Reason",
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
            "menu_position"       => 25,
            "menu_icon"           => "dashicons-format-status",
            "supports"            => array("title", "thumbnail", "page-attributes"),
            "taxonomies"          => array("cura_type"),
        );

        \register_post_type('cura_reason', $args);
    }

    /**
     * Register the cura_reason CPT
     */
    private function registerFaqCPT()
    {
        $labels = array(
            "all_items"     => "All FAQs",
            "name"          => "FAQs",
            "singular_name" => "FAQ",
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
            "menu_position"       => 26,
            "menu_icon"           => "dashicons-editor-help",
            "supports"            => array("title", "page-attributes"),
            "taxonomies"          => array("cura_topic"),
        );

        \register_post_type('cura_faq', $args);
    }
}
