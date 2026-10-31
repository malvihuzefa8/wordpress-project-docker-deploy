<?php
//about theme info
add_action( 'admin_menu', 'computer_repair_services_pro_gettingstarted' );
function computer_repair_services_pro_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'computer-repair-services-pro'), esc_html__('Get Started', 'computer-repair-services-pro'), 'edit_theme_options', 'computer_repair_services_pro_guide', 'computer_repair_services_pro_mostrar_guide');   
}

function computer_repair_services_pro_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php _e( 'Thanks for installing Computer Repair Services Pro, you rock!', 'computer-repair-services-pro' ) ?> </h2>
			<p><?php _e( 'Computer Repair Services Pro now supports colors, typography custom links for custom post types. Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional website', 'computer-repair-services-pro' ) ?></p>
			<p><?php _e( "Please Click on the link below to know the theme setup information", 'computer-repair-services-pro' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=computer_repair_services_pro_guide' ) ); ?>" class="button button-primary"><?php _e( 'Getting Started With Computer Repair Services Pro', 'computer-repair-services-pro' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'computer_repair_services_pro_notice');


// Add a Custom CSS file to WP Admin Area
function computer_repair_services_pro_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getstarted/getstart.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'computer_repair_services_pro_admin_theme_style');

//guidline for about theme
function computer_repair_services_pro_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'computer-repair-services-pro' );
?>

	<div class="wrapper-info">
		<h2><?php esc_html_e( 'Welcome to Computer Repair Services Pro', 'computer-repair-services-pro' ); ?> <span class="version"><?php esc_html_e( 'Version', 'computer-repair-services-pro' ); ?>: <?php echo esc_html($theme['Version']);?></span></h2>
		<p><?php esc_html_e('Upload and Activate Contact Form 7 and Woocommerce plugin then click on demo importer button to import all the demo contents.','computer-repair-services-pro'); ?></p>
		<?php require get_parent_theme_file_path( '/inc/getstarted/demo-importer.php' ); ?>
	</div>

<?php } ?>