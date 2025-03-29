<?php
/**
 * Plugin Name: Basic Style Widget
 * Description: Develop a basic style widget in WordPress Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Rajvinder Singh
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-basic-widget
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

//	require_once( __DIR__ . '/widgets/oembed-widget-two.php' );



function register_oembed_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/oembed-widget.php' );
	 
	$widgets_manager->register( new \Elementor_oEmbed_Widget() );
 

}
add_action( 'elementor/widgets/register', 'register_oembed_widget' );