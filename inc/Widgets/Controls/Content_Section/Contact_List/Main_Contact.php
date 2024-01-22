<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Contact_List;


if (!defined('ABSPATH')) {
    exit; 
}

class Main_Contact {
    public static function init($widget){
        

		$repeater = new \Elementor\Repeater();

        // Contact Type
        $repeater->add_control(
			'main_contact_type',
			[
				'label' => esc_html__( 'Contact Type', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'phone',
				'options' => [
					'' => esc_html__( 'Default', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					'address' => esc_html__( 'Address', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					'phone'  => esc_html__( 'Phone', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					'email' => esc_html__( 'Email', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					'website' => esc_html__( 'Website', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
					'whatsapp' => esc_html__( 'Whatsapp', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
				],
				
			]
		);

		// Option selector
		$repeater->add_control(
			'main_contact_category',
			[
				'label' => esc_html__( 'Category', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'home' => [
						'title' => esc_html__( 'Home', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
						'icon' => 'fa fa-home',
					],
					'work' => [
						'title' => esc_html__( 'Work', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
						'icon' => 'fa fa-briefcase',
					],
				],
				'default' => 'home',
				'toggle' => true,
			]
		);

        // Contact Text
		$repeater->add_control(
			'main_display_text',
			[
				'label' => esc_html__( 'Display Text', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '(+94) 70 643 2833' , AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'label_block' => true,
				'ai' => [
                    'active' => false,
                ],
			]
		);

        // Contact Link
		$repeater->add_control(
			'main_contact_link',
			[
				'label' => esc_html__( 'Link', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url'],
				'default' => [
					'url' => '',
				],
				'label_block' => true,
			]
		);

        // Contact Icon
		$repeater->add_control(
			'main_contact_icon',
			[
				'label' => esc_html__( 'Icon', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-envelope',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'phone',
						'envelope',
						'map-marker-alt',
                        'globe'
					],
					'fa-brands' => [
						'whatsapp',
						'facebook-messenger',
						
					],
				],
			]
		);

		$widget->add_control(
			'main_contact_list',
			[
				'label' => esc_html__( 'Contact List', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
                        'main_contact_type' => 'phone',
						'main_contact_category' => 'home',
						'main_display_text' => esc_html__( '94 70 643 2833', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
						'main_contact_link' => [
                            'url' => 'tel:+94706432833', 
                        ],
                        'main_contact_icon' => [
                            'value' => 'fas fa-phone', 
                            'library' => 'fa-solid',
                        ],
					],
					[
                        'main_contact_type' => 'email',
						'main_contact_category' => 'home',
						'main_display_text' => esc_html__( 'contact@amila.info', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
						'main_contact_link' => [
                            'url' => 'mailto:contact@amila.info',
                        ],
                        'main_contact_icon' => [
                            'value' => 'fas fa-envelope', 
                            'library' => 'fa-solid',
                        ],
					],
					[
                        'main_contact_type' => 'address',
						'main_contact_category' => 'home',
						'main_display_text' => esc_html__( 'Kandy, Sri Lanka', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
						'main_contact_link' => [
                            'url' => 'https://maps.app.goo.gl/xcE4FFiEMZu5hDcm9', 
                        ],
                        'main_contact_icon' => [
                            'value' => 'fas fa-location-dot',
                            'library' => 'fa-solid',
                        ],
					],
					
				],
				'title_field' => '{{{ main_contact_type }}}',
			]
		);

		
    }
}