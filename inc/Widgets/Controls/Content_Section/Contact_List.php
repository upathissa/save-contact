<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section;

use AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Contact_List\Business_Contact;
use AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Contact_List\Main_Contact;
use AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Contact_List\Social_Contact;

if (!defined('ABSPATH')) {
    exit; 
}

class Contact_List {
    public static function section($widget){
        $widget->start_controls_section(
			'contact_section',
			[
				'label' => esc_html__( 'Contacts', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        /**
         * +++++++++++++++++++++++++++++++++++++++
         * ++++++       MAIN CONTACT        ++++++
         * +++++++++++++++++++++++++++++++++++++++
         */

        Main_Contact::init($widget);

        $widget->add_control(
            'hr_main_business',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        /**
         * +++++++++++++++++++++++++++++++++++++++++++
         * ++++++       BUSINESS CONTACT        ++++++
         * +++++++++++++++++++++++++++++++++++++++++++
         */

        Business_Contact::init($widget);

        $widget->add_control(
            'hr_business_social',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        /**
         * +++++++++++++++++++++++++++++++++++++++++
         * ++++++       SOCIAL CONTACT        ++++++
         * +++++++++++++++++++++++++++++++++++++++++
         */

        Social_Contact::init($widget);

        $widget->end_controls_section();


    }
}