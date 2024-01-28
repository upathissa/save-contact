<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Style_Section;


if (!defined('ABSPATH')) {
    exit; 
}

class Contact_Style {
    public static function section($widget)
    {
        $widget->start_controls_section(
            'contacts_style',
            [
                'label' => esc_html__('Contacts Styles', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Contact Color
        $widget->add_control(
            'contact_font_color',
            [
                'label' => esc_html__('Contact Font Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgb(54, 54, 54)',
                'selectors' => [
                    '{{WRAPPER}} .contact_links' => 'color: {{VALUE}}',
                ],
            ]
        );

        $widget->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Contact Font', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'name' => 'contact_typography',
                'selector' => '{{WRAPPER}} .contact_links',
            ]
        );

        // Icons Color
        $widget->add_control(
            'contact_icon_color',
            [
                'label' => esc_html__('Icons Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgb(54, 54, 54)',
                'selectors' => [
                    '{{WRAPPER}} .contact-box .items .icon' => 'fill: {{VALUE}}',
                ],
            ]
        );

        

        $widget->end_controls_section();
    }
}