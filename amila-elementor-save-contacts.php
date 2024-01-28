<?php

use AmilaUpathissa_SaveContact\Plugin;

/**
 * Plugin Name: Save Contacts by Amila
 * Description: You can add contact information to the website and it can be saved to the mobile phone directly.
 * Version:     1.1.4
 * Author:      Amila Upathissa
 * Author URI:  https://amila.info
 * Text Domain: amila-elementor-save-contacts
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Global variables 
define('AMILAUPATHISSA_PLUGIN_TEXT_DOMAIN', 'amila-elementor-save-contacts');
require_once(__DIR__ . '/vendor/autoload.php');

function amilaupathissa_save_contacts_plugin()
{
    Plugin::instance();
}

// enqueue script and styles
function amilaupathissa_styles_scripts()
{
    // styles 
    wp_register_style(
        'amilaupathissa-sc-style',
        plugins_url('assets/css/amila-sc.min.css', __FILE__),
        array(), // dependencies
        filemtime(plugin_dir_path(__FILE__) . 'assets/css/amila-sc.min.css') // version number based on file modification time

    );

    // scripts
    wp_register_script(
        'amilaupathissa-sc-script',
        plugins_url('assets/js/amila-sc.js', __FILE__),
        [],
        '1.1.4',
        true
    );
}




add_action('wp_enqueue_scripts', 'amilaupathissa_styles_scripts');
add_action('plugins_loaded', 'amilaupathissa_save_contacts_plugin');
