<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomPostRegistrarInterface;

class CustomPostRegistrar implements CustomPostRegistrarInterface
{
    /**
     * Do the registrations here
     */
    public function register()
    {
        $this->registerPropertyCPT();
    }

    /**
     * Register the "cura_property" CPT
     */
    private function registerPropertyCPT()
    {
        $labels = array(
            "name" => "Properties",
            "singular_name" => "Property",
        );

        $args = array(
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "show_ui" => true,
            "has_archive" => false,
            "show_in_menu" => true,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "rewrite" => false,
            "query_var" => true,
            "menu_position" => 20,
            "menu_icon" => "dashicons-admin-multisite",
        );

        \register_post_type('cura_property', $args);
    }
}
