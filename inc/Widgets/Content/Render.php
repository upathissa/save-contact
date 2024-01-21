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

?>
    <div id="amilaupathissa_vcf_generator" style="display: none;">
        <span id="full_name">Amila Upathissa</span>
    </div>

        <div class="container top-container amilaupathissa_save_contact">
            <div class="profile-card">
                <div class="image">
                    <!-- <img src="profile-image.jpg" alt="" class="profile-img"> -->
                    <img src="<?php echo esc_url($settings['profile_image']['url']); ?>" alt="" width="100px" height="100px" class="profile-img">
                </div>

                <div class="text-data">
                    <h2 class="name"><?php echo $settings['first_name'] . ' ' . $settings['last_name']; ?></h2>
                    <span class="job"><?php echo $settings['profile_occupation'] ;?></span>
                </div>
                <div class="save-contact">
                    <button class="save-contact-btn card-theme-color">

                        <span class="plus-icon">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                                <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
                            </svg> -->
                            <?php \Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'false']); ?>
                        </span>
                        <div class="btn-text">
                            <?php echo $settings['btn_text']; ?>

                        </div>
                    </button>
                </div>
            </div>
            <div class="tab_box">
                <button class="tab_btn active">Contact</button>
                <button class="tab_btn">Business</button>
                <button class="tab_btn">Socials</button>
                <div class="line"></div>
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

            <div class="content_box">
                <div class="content">
                    <div class="contact-box">
                        <?php 
                            if ( $settings['business_contact_list'] ) {
                                foreach ( $settings['business_contact_list'] as $item ) {
                                    echo '<div class="items">';
                                    echo '    <div class="icon">';
                                    \Elementor\Icons_Manager::render_icon( $item['business_contact_icon'], [ 
                                                    'aria-hidden' => 'true',
                                                    'class' => 'icon',
                                                    'width' => "24",
                                                    'height' => "24"
                                                ]);
                                    echo '    </div>';
                                    echo '    <div class="link">';
                                    echo '        <a href="' . $item['business_contact_link']['url'] . '" class="contact_links">' . $item['business_display_text'] . '</a>';
                                    echo '    </div>';
                                    echo '</div>';
                                }
                            }
                        ?>  
                
                    </div>
                </div> 
            </div>

            <div class="content_box">
                <div class="content">
                    <div class="contact-box">
                        <?php 
                            if ( $settings['social_contact_list'] ) {
                                foreach ( $settings['social_contact_list'] as $item ) {
                                    echo '<div class="items">';
                                    echo '    <div class="icon">';
                                    \Elementor\Icons_Manager::render_icon( $item['social_contact_icon'], [ 
                                                    'aria-hidden' => 'true',
                                                    'class' => 'icon',
                                                    'width' => "24",
                                                    'height' => "24"
                                                ]);
                                    echo '    </div>';
                                    echo '    <div class="link">';
                                    echo '        <a href="' . $item['social_contact_link']['url'] . '" class="contact_links">' . $item['social_display_text'] . '</a>';
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
