<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Style_Section;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Theme_Style
{
    public static function section($widget)
    {
        $widget->start_controls_section(
            'theme_style',
            [
                'label' => esc_html__('Theme Styles', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Theme Color
        $widget->add_control(
            'theme_color',
            [
                'label' => esc_html__('Theme Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#7360ff',
                'selectors' => [
                    '{{WRAPPER}} .card-theme-color' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .image' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .line' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .tab_btn.active' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Font
        $widget->add_control(
            'font_family',
            [
                'label' => esc_html__('Font Family', 'textdomain'),
                'type' => \Elementor\Controls_Manager::FONT,
                'default' => "poppins",
                'selectors' => [
                    '{{WRAPPER}} .amilaupathissa_save_contact' => 'font-family: {{VALUE}}',
                ],
            ]
        );

        // // Theme Color
        // $widget->add_control(
        //     'text_color',
        //     [
        //         'label' => esc_html__('Text Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
        //         'type' => \Elementor\Controls_Manager::COLOR,
        //         'default' => '#fff',
        //         'selectors' => [
        //             '{{WRAPPER}} .contact_links' => 'color: {{VALUE}}',

        //         ],
        //     ]
        // );

        $widget->end_controls_section();
    }
}
