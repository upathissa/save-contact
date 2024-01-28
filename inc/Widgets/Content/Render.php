<?php

namespace AmilaUpathissa_SaveContact\Widgets\Content;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Render
{
    public function __construct()
    {
    }
 
    

    public static function content($widget)
    {
        $settings = $widget->get_settings_for_display();

        $contact_list_items = $settings['main_contact_list'];
        $phone_numbers = [];
        $emails = [];
        $websites = [];
        $addresses = [];

        foreach ($contact_list_items as $contacts) {
            if($contacts['main_contact_type'] == 'phone' || $contacts['main_contact_type'] == 'whatsapp'){
                $phone_numbers[] = [
                    'phone_number' => preg_replace('/[^0-9]/', '', $contacts['main_display_text']) ?? '',
                    'type' => $contacts['main_contact_category'] ?? '',
                ];
            }
            if($contacts['main_contact_type'] == 'email'){
                $emails[] = $contacts['main_display_text'];
            }
            if($contacts['main_contact_type'] == 'website'){
                $websites[] = $contacts['main_contact_link']['url'];
            }
            if($contacts['main_contact_type'] == 'address'){
                $addresses[] = $contacts['main_display_text'];
            }
        }

        $img_url = $settings['profile_image']['url'];


        $vcard = [
            'first_name' => $settings['first_name'] ?? '',
            'last_name' => $settings['last_name'] ?? '',
            'company' => $settings['profile_company'] ?? '',
            'job_title' => $settings['profile_job_title'] ?? '',
            'phones' => !empty($phone_numbers) ? $phone_numbers : '',
            'emails' => !empty($emails) ? $emails : '',
            'websites' => !empty($websites) ? $websites : '',
            'addresses' => !empty($addresses) ? $addresses : '',
            'profile_url' => $img_url
        ];

        echo '<script> var amila_save_contact_vcard = '.json_encode($vcard).';</script>';

?>

        <div class="container top-container amilaupathissa_save_contact">
            <div class="profile-card">
                <div class="image">
                    <!-- <img src="profile-image.jpg" alt="" class="profile-img"> -->
                    <img src="<?php echo esc_url($settings['profile_image']['url']); ?>" alt="" width="100px" height="100px" id="amilaupathissa-sc-provile-image" class="profile-img">
                </div>

                <div class="text-data">
                    <h2 class="name"><?php echo $settings['first_name'] . ' ' . $settings['last_name']; ?></h2>
                    <span class="job"><?php 
                        echo $settings['profile_job_title']. $settings['job_company_separator'] .$settings['profile_company'];
                    ?></span>
                </div>
                <div class="save-contact">
                    <button onclick="downloadVCardFromAmilaUpathissaSaveContact()" id="amilaupathissa-sc-btn" class="save-contact-btn card-theme-color">

                        <span class="plus-icon">
                            <?php \Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'false']); ?>
                        </span>
                        <div class="btn-text">
                            <?php echo $settings['btn_text']; ?>

                        </div>
                    </button>
                </div>
            </div>
            <div class="content_box">
                <div class="content active">
                    <div class="contact-box">
                    <?php 
                        if ( $settings['main_contact_list'] ) {
                            foreach ( $settings['main_contact_list'] as $item ) {
                                echo '<div class="items">';
                                echo '    <div class="icon">';
                                \Elementor\Icons_Manager::render_icon( $item['main_contact_icon'], [ 
                                                'aria-hidden' => 'true',
                                                'class' => 'icon',
                                                'width' => "24",
                                                'height' => "24"
                                            ]);
                                echo '    </div>';
                                echo '    <div class="link">';
                                echo '        <a href="' . $item['main_contact_link']['url'] . '" class="contact_links">' . $item['main_display_text'] . '</a>';
                                echo '    </div>';
                                echo '</div>';
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
<?php

    }
}
