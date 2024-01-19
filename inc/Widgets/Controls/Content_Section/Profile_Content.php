<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Profile_Content
{
    public static function section($widget)
    {
        $widget->start_controls_section(
            'profile_section_content',
            [
                'label' => esc_html__('Profile Section', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        // Profile Image
        $widget->add_control(
            'profile_image',
            [
                'label' => esc_html__('Choose Image', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // First Name 
        $widget->add_control(
            'first_name',
            [
                'label' => esc_html__('First Name', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('First Name', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'default' => esc_html__('Amila', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        // Last Name 
        $widget->add_control(
            'last_name',
            [
                'label' => esc_html__('Last Name', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Last Name', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'default' => esc_html__('Upathissa', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'ai' => [
                    'active' => false,
                ],
            ]
        );


        $widget->end_controls_section();
    }
}
