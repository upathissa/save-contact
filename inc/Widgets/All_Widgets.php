<?php

namespace AmilaUpathissa_SaveContact\Widgets;

use AmilaUpathissa_SaveContact\Widgets\Save_Contacts;
use AmilaUpathissa_SaveContact\Widgets\Test_Widget;

if (!defined('ABSPATH')) {
    exit;
}

class All_Widgets
{
    public function __construct()
    {
        // Register new Widget category
        add_action('elementor/elements/categories_registered', [$this, 'add_widget_category']);
    }
    public function register_widgets($widgets_manager)
    {
        $widgets_manager->register(new Save_Contacts());
        // $widgets_manager->register(new Test_Widget());
    }
    public function add_widget_category($elements_manager)
    {
        $elements_manager->add_category(
            'amilaupathissa', // Note: category name
            [
                'title' => esc_html__('Amila\'s Space', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN),
                'icon' => 'fa fa-plug',
            ]
        );
    }
}
