<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */

function computer_repair_services_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'computer-repair-services-pro' ),
			'slug'             => 'contact-form-7',
			'source'           => 'https://downloads.wordpress.org/plugin/contact-form-7.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'computer-repair-services-pro' ),
			'slug'             => 'woocommerce',
			'source'           => 'https://downloads.wordpress.org/plugin/woocommerce.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
            'name'             => __( 'YITH WooCommerce Wishlist', 'computer-repair-services-pro' ),
            'slug'             => 'yith-woocommerce-wishlist',
            'source'           => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.zip',
            'required'         => true,
            'force_activation' => false,
        ),		
		array(
            'name'             => __( 'Computer Repair Services Pro Custom Posttype', 'computer-repair-services-pro' ),
            'slug'             => 'computer-repair-services-pro-custom-posttype',
            'source'           =>'https://themagnifico.net/eard/themes-uploaded/07_computer-repair-services-pro_10_2022/computer-repair-services-pro-custom-posttype_0.0.1.zip',
            'required'         => true,
            'force_activation' => false,
        ),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'computer_repair_services_pro_register_recommended_plugins' );












// function computer_repair_services_pro_register_recommended_plugins() {
// 	$plugins = array(
// 		array(
// 			'name'             => __( 'Contact Form 7', 'computer-repair-services-pro' ),
// 			'slug'             => 'contact-form-7',
// 			'source'           => 'https://downloads.wordpress.org/plugin/contact-form-7.zip',
// 			'required'         => true,
// 			'force_activation' => false,
// 		)
// 	);
// 	$config = array();
// 	tgmpa( $plugins, $config );
// }
// add_action( 'tgmpa_register', 'computer_repair_services_pro_register_recommended_plugins' );

//  {
// 	$plugins = array(
// 		array(
// 			'name'             => __( 'WooCommerce', 'computer-repair-services-pro' ),
// 			'slug'             => 'woocommerce',
// 			'source'           => 'https://downloads.wordpress.org/plugin/woocommerce.zip',
// 			'required'         => true,
// 			'force_activation' => false,
// 		)	
// 	);
// 	$config = array();
// 	tgmpa( $plugins, $config );
// }
// add_action( 'tgmpa_register', 'computer_repair_services_pro_register_recommended_plugins' );

//     $plugins = array(
//     	 array(
//             'name'             => __( 'YITH WooCommerce Wishlist', 'computer-repair-services-pro' ),
//             'slug'             => 'yith-woocommerce-wishlist',
//             'source'           => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.zip',
//             'required'         => true,
//             'force_activation' => false,
//         ),
//     );

// add_action( 'tgmpa_register', 'computer_repair_services_pro_register_recommended_plugins' );

//     $plugins = array(
//     	 array(
//             'name'             => __( 'Computer Repair Services Pro Custom Posttype', 'computer-repair-services-pro' ),
//             'slug'             => 'computer-repair-services-pro-custom-posttype',
//             'source'           =>'https://themagnifico.net/eard/themes-uploaded/07_computer-repair-services-pro_10_2022/computer-repair-services-pro-custom-posttype_0.0.1.zip',
//             'required'         => true,
//             'force_activation' => false,
//         ),
//     );