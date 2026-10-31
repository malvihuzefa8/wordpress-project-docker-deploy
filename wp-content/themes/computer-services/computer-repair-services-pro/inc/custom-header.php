<?php
/**
 * @package computer-repair-services-pro
 * @uses computer_repair_services_pro_header_style()
*/

function computer_repair_services_pro_custom_header_setup() {
    add_theme_support( 'custom-header', apply_filters( 'computer_repair_services_pro_custom_header_args', array(
		'default-image' => get_parent_theme_file_uri( '/assets/images/banner-image.jpg' ),
		'default-text-color' => 'fff',
		'header-text' => false,
		'width' => 1600,
		'height' => 250,
		'wp-head-callback' => 'computer_repair_services_pro_header_style',
 	) ) );

	register_default_headers( array(
		'default-image' => array(
		'url' => '/assets/images/gallery/gallery3.png',
		'thumbnail_url' => '/assets/images/banner-image.jpg',
		'description' => __( 'Default Header Image', 'computer-repair-services-pro' ),
	),
	) );
}
add_action( 'after_setup_theme', 'computer_repair_services_pro_custom_header_setup' );

if ( ! function_exists( 'computer_repair_services_pro_header_style' ) ) :
	add_action( 'wp_enqueue_scripts', 'computer_repair_services_pro_header_style' );
	function computer_repair_services_pro_header_style() {

	if ( get_header_image() ) :
		$computer_repair_services_pro_custom_css = "
			.title-box {
				background-image:url('".esc_url(get_header_image())."');
				background-position: center top;
			}";
		wp_add_inline_style( 'header-footer-style', $computer_repair_services_pro_custom_css );
		endif;
	}
endif;