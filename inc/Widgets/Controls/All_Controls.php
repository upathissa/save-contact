<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls;

use AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Profile_Content;
use AmilaUpathissa_SaveContact\Widgets\Controls\Style_Section\Profile_Style;
use AmilaUpathissa_SaveContact\Widgets\Controls\Style_Section\Theme_Style;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class All_Controls
{
    public static function register($widget)
    {
        /**
         * ****************************** *
         * *****    Content Section ***** *
         * ****************************** *
         */
        Profile_Content::section($widget);

        $widget->start_controls_section(
            'section_content',
            [
                'label' => esc_html__('Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $widget->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Enter your title', 'textdomain'),
            ]
        );

        $widget->end_controls_section();
        /**
         * ****************************** *
         * *****    Style Section ***** *
         * ****************************** *
         */
        Theme_Style::section($widget);
        Profile_Style::section($widget);
    }
}
