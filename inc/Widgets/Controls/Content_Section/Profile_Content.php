<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section;


if (!defined('ABSPATH')) {
    exit; 
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

        $widget->add_control(
            'hr_image_name',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
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

        $widget->add_control(
            'hr_name_title',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
                'label' => esc_html__('Company info', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
            ]
        );

        // Company 
        $widget->add_control(
            'profile_company',
            [
                'label' => esc_html__('Company', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Company', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'default' => esc_html__('coder.lk', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        // Separator 
        $widget->add_control(
			'job_company_separator',
			[
				'label' => esc_html__( 'Separator', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => ' | ',
				'options' => [
					' | ' => esc_html__( 'Default', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					' | ' => esc_html__( '|', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					' @ '  => esc_html__( '@', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					' - ' => esc_html__( '-', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					' || ' => esc_html__( '||', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					' -- ' => esc_html__( '--', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
				],
				
			]
		);

        // Job Title 
        $widget->add_control(
            'profile_job_title',
            [
                'label' => esc_html__('Job Title', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Job Title', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'default' => esc_html__('Developer', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $widget->add_control(
            'hr_title_occupation',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        // Button Icon
        $widget->add_control(
            'btn_icon',
            [
                'label' => esc_html__('Button Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa fa-plus',
                    'library' => 'fa-solid',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'plus',
                        'plus-circle',
                        'download',
                    ],
                    'fa-regular' => [
                        'bookmark',
                        'address-card',
                        'sign-in',
                    ],
                ],
            ]
        );


        // Button text
        $widget->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Button Text', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'default' => esc_html__('Save Contact', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'ai' => [
                    'active' => false,
                ],
            ]
        );



        $widget->end_controls_section();
    }
}
