<?php

namespace AmilaUpathissa_SaveContact\Widgets;

use AmilaUpathissa_SaveContact\Widgets\Content\ContentTemplate;
use AmilaUpathissa_SaveContact\Widgets\Content\Render;
use AmilaUpathissa_SaveContact\Widgets\Controls\All_Controls;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Save_Contacts extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'amilaupathissa_save_contacts';
    }

    public function get_title()
    {
        return esc_html__('Save Contacts', AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN);
    }

    public function get_icon()
    {
        return 'eicon-save';
    }

    public function get_custom_help_url()
    {
        return 'https://go.elementor.com/widget-name';
    }

    public function get_categories()
    {
        return ['amilaupathissa']; // Note: category name from category registration options
    }

    public function get_keywords()
    {
        return ['save', 'contacts', 'mobile'];
    }

    // Dependencies
    public function get_script_depends()
    {
        return ['amilaupathissa-sc-script'];
    }

    public function get_style_depends()
    {
        return ['amilaupathissa-sc-style'];
    }
    // Controls
    protected function register_controls()
    {
        All_Controls::register($this);
    }
    // content
    protected function render()
    {
        Render::content($this);
    }

    protected function content_template()
    {
        ContentTemplate::render($this);
    }
}
