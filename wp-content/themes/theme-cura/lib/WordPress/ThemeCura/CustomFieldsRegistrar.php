<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomFieldsRegistrarInterface;

class CustomFieldsRegistrar implements CustomFieldsRegistrarInterface
{
    /**
     * Do the registrations here
     */
    public function register()
    {
        if (function_exists("register_field_group")) {
            register_field_group(array (
                'id' => 'acf_blog-page',
                'title' => 'Blog Page',
                'fields' => array (
                    array (
                        'key' => 'field_562bcf884b9b5',
                        'label' => 'Subheading',
                        'name' => 'subheading',
                        'type' => 'wysiwyg',
                        'default_value' => '',
                        'toolbar' => 'full',
                        'media_upload' => 'yes',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'page_type',
                            'operator' => '==',
                            'value' => 'posts_page',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
            register_field_group(array (
                'id' => 'acf_contact-page',
                'title' => 'Contact Page',
                'fields' => array (
                    array (
                        'key' => 'field_562cf150df8bd',
                        'label' => 'Contact Background',
                        'name' => 'contact_background',
                        'type' => 'image',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array (
                        'key' => 'field_562cf176df8be',
                        'label' => 'Contact Address',
                        'name' => 'contact_address',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_562cf188df8c0',
                        'label' => 'Contact Number',
                        'name' => 'contact_number',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_562cf193df8c1',
                        'label' => 'Contact Email',
                        'name' => 'contact_email',
                        'type' => 'email',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array (
                        'key' => 'field_562cf1a2df8c2',
                        'label' => 'Contact Website',
                        'name' => 'contact_website',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'page_template',
                            'operator' => '==',
                            'value' => 'template-contact.php',
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
            register_field_group(array (
                'id' => 'acf_faqs',
                'title' => 'FAQs',
                'fields' => array (
                    array (
                        'key' => 'field_562e0b23d8569',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'textarea',
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => 2,
                        'formatting' => 'br',
                    ),
                    array (
                        'key' => 'field_562e0b35d856a',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'wysiwyg',
                        'default_value' => '',
                        'toolbar' => 'full',
                        'media_upload' => 'yes',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'cura_faq',
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
            register_field_group(array (
                'id' => 'acf_featured-video',
                'title' => 'Featured Video',
                'fields' => array (
                    array (
                        'key' => 'field_562ba566d921b',
                        'label' => 'Featured Video',
                        'name' => 'featured_video',
                        'type' => 'post_object',
                        'post_type' => array (
                            0 => 'cura_video',
                        ),
                        'taxonomy' => array (
                            0 => 'all',
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'page_template',
                            'operator' => '==',
                            'value' => 'template-video.php',
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
            register_field_group(array (
                'id' => 'acf_front-page',
                'title' => 'Front Page',
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
                        'label' => 'Featured Video',
                        'name' => 'featured_video',
                        'type' => 'post_object',
                        'post_type' => array (
                            0 => 'cura_video',
                        ),
                        'taxonomy' => array (
                            0 => 'all',
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array (
                        'key' => 'field_562b0e903a7b9',
                        'label' => 'Heading',
                        'name' => 'heading',
                        'type' => 'wysiwyg',
                        'default_value' => '',
                        'toolbar' => 'full',
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
            register_field_group(array (
                'id' => 'acf_page-options',
                'title' => 'Page Options',
                'fields' => array (
                    array (
                        'key' => 'field_562b979a1b54e',
                        'label' => 'Show Title',
                        'name' => 'show_title',
                        'type' => 'true_false',
                        'message' => '',
                        'default_value' => 1,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                        array (
                            'param' => 'page_type',
                            'operator' => '!=',
                            'value' => 'front_page',
                            'order_no' => 1,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'side',
                    'layout' => 'default',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
            register_field_group(array (
                'id' => 'acf_properties',
                'title' => 'Properties',
                'fields' => array (
                    array (
                        'key' => 'field_562b82a70aa9c',
                        'label' => 'Bed',
                        'name' => 'property_bed',
                        'type' => 'number',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array (
                        'key' => 'field_562b82c80aa9d',
                        'label' => 'Bath',
                        'name' => 'property_bath',
                        'type' => 'number',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array (
                        'key' => 'field_562b82ce0aa9e',
                        'label' => 'Parking',
                        'name' => 'property_parking',
                        'type' => 'number',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array (
                        'key' => 'field_562b83450aa9f',
                        'label' => 'Agent',
                        'name' => 'property_agent',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'cura_property',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
            register_field_group(array (
                'id' => 'acf_testimonials',
                'title' => 'Testimonials',
                'fields' => array (
                    array (
                        'key' => 'field_562ce22578037',
                        'label' => 'Testimonial Video',
                        'name' => 'testimonial_video',
                        'type' => 'post_object',
                        'post_type' => array (
                            0 => 'cura_video',
                        ),
                        'taxonomy' => array (
                            0 => 'all',
                        ),
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'cura_testimonial',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
            register_field_group(array (
                'id' => 'acf_videos',
                'title' => 'Videos',
                'fields' => array (
                    array (
                        'key' => 'field_562b9ddc49910',
                        'label' => 'Video URL',
                        'name' => 'video_url',
                        'type' => 'text',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'cura_video',
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
            register_field_group(array (
                'id' => 'acf_subpage-options',
                'title' => 'Subpage Options',
                'fields' => array (
                    array (
                        'key' => 'field_562b97f8e16c7',
                        'label' => 'Use Parent Title',
                        'name' => 'use_parent_title',
                        'type' => 'true_false',
                        'message' => '',
                        'default_value' => 0,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                        array (
                            'param' => 'page_type',
                            'operator' => '==',
                            'value' => 'child',
                            'order_no' => 1,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'side',
                    'layout' => 'default',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 10,
            ));
        }
    }
}
