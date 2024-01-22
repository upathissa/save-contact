<?php

namespace AmilaUpathissa_SaveContact\Widgets\Content;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class ContentTemplate
{
    public static function render()
    {
?>
        <div class="container top-container amilaupathissa_save_contact">
            <div class="profile-card">
                <div class="image">
                    <img src="{{{ settings.profile_image.url }}}" alt="" class="profile-img">
                </div>

                <div class="text-data">
                    <h2 class="name">{{{settings.first_name}}} {{{settings.last_name}}}</h2>
                    <span class="job">{{{settings.profile_job_title}}} {{{settings.job_company_separator}}} {{{settings.profile_company}}}</span>
                </div>
                <div class="save-contact">
                    <button class="save-contact-btn card-theme-color">

                        <span class="plus-icon">
                            <# var iconHTML=elementor.helpers.renderIcon( view, settings.btn_icon, { 'aria-hidden' : true }, 'i' , 'object' ); #>
                                {{{ iconHTML.value }}}
                        </span>
                        <div class="btn-text">
                            {{{settings.btn_text}}}

                        </div>
                    </button>
                </div>
            </div>
            <!-- Main Contact -->
            <div class="content_box">
                <div class="content active">
                    <div class="contact-box">
                        <# if ( settings.main_contact_list.length ) { #>
                            <# _.each( settings.main_contact_list, function( item ) { #>
                    
                                <div class="items">
                                    <span class="icon">
                                    <#
                                        var iconContact = elementor.helpers.renderIcon( view, item.main_contact_icon, { 'aria-hidden': true }, 'i' , 'object' );
                                    #>
                                    {{{iconContact.value}}}
                                    </span>
                                    <div class="link">
                                        <a href="{{{ item.main_contact_link.url }}}" class="contact_links">{{{ item.main_display_text }}}</a>
                                    </div>
                                </div>
                            <# }); #>
                        <# } #>
                        
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
