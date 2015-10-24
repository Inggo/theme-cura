<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomFieldsRegistrarInterface;

class CustomFieldsRegistrar implements CustomFieldsRegistrarInterface
{
    /**
     * Do the registrations here
     */
    public function register()
    {
        $this->registerFrontPageFields();
    }

    /**
     * Register the Front-Page custom fields
     */
    private function registerFrontPageFields()
    {
        if (function_exists("register_field_group")) {
            register_field_group(array (
                'id' => 'acf_front-page',
                'title' => 'Front-Page',
                'fields' => array (
                    array (
                        'key' => 'field_562b0524b5eae',
                        'label' => 'Hero Background',
                        'name' => 'hero_background',
                        'type' => 'image',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array (
                        'key' => 'field_562b0c913a7b8',
                        'label' => 'Video Link',
                        'name' => 'video_link',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_562b0e903a7b9',
                        'label' => 'Heading',
                        'name' => 'heading',
                        'type' => 'wysiwyg',
                        'default_value' => '',
                        'toolbar' => 'basic',
                        'media_upload' => 'no',
                    ),
                    array (
                        'key' => 'field_562b0ea63a7ba',
                        'label' => 'Subheading',
                        'name' => 'subheading',
                        'type' => 'wysiwyg',
                        'default_value' => '',
                        'toolbar' => 'basic',
                        'media_upload' => 'no',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'page_type',
                            'operator' => '==',
                            'value' => 'front_page',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'acf_after_title',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
        }
    }
}
