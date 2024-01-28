<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Style_Section;


if (!defined('ABSPATH')) {
    exit; 
}

class Profile_Style
{
    public static function section($widget)
    {
        $widget->start_controls_section(
            'profile_section_style',
            [
                'label' => esc_html__('Profile Styles', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Name Color
        $widget->add_control(
            'name_color',
            [
                'label' => esc_html__('Name Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .name' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Name Font data
        $widget->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'selector' => '{{WRAPPER}} .name',
            ]
        );


        // Occupation Color
        $widget->add_control(
            'occupation_color',
            [
                'label' => esc_html__('Occupation Color', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .job' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Occupation Font data
        $widget->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'occupation_typography',
                'selector' => '{{WRAPPER}} .job',
            ]
        );

        // Background
        $widget->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'profile_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .profile-card',
			]
		);



        $widget->end_controls_section();
    }
}
