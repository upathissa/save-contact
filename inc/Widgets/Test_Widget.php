<?php

namespace AmilaUpathissa_SaveContact\Widgets;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Test_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'icons_test_widget';
	}

	public function get_title() {
		return esc_html__( 'Icons Test Widget', 'textdomain' );
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="my-icon-wrapper">
			<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
		</div>
		<?php
	}

	protected function content_template() {
		?>
		<#
		var iconHTML = elementor.helpers.renderIcon( view, settings.icon, { 'aria-hidden': true }, 'i' , 'object' );
		#>
		<div class="my-icon-wrapper">
			{{{ iconHTML.value }}}
		</div>
		<?php
	}

}