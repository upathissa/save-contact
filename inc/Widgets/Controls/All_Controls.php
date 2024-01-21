<?php

namespace AmilaUpathissa_SaveContact\Widgets\Controls;

use AmilaUpathissa_SaveContact\Widgets\Controls\Content_Section\Contact_List;
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

        Contact_List::section($widget);

        
        /**
         * ****************************** *
         * *****    Style Section ***** *
         * ****************************** *
         */
        Theme_Style::section($widget);
        Profile_Style::section($widget);
    }
}
