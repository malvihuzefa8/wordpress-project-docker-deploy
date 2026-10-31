<?php
/**
 * computer-repair-services-pro Theme Customizer
 *
 * @package computer-repair-services-pro
 */

use WPTRT\Customize\Section\Computer_Repair_Services_Pro_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Computer_Repair_Services_Pro_Button::class );

    $manager->add_section(
        new Computer_Repair_Services_Pro_Button( $manager, 'computer_repair_services_pro', [
            'title'       => __( 'Theme Bundle', 'computer-repair-services-pro' ),
            'priority'    => 0,
            'button_text' => __( 'Buy Now', 'computer-repair-services-pro' ),
            'button_url'  => esc_url( 'https://www.themagnifico.net/themes/wordpress-theme-pack/', 'computer-repair-services-pro')
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'computer-repair-services-pro-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'computer-repair-services-pro-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Loads custom control for layout settings
 */
function computer_repair_services_pro_custom_controls() {
    require_once get_template_directory() . '/inc/custom-controls.php';

     // Inlcude the Alpha Color Picker control file.
    require_once get_template_directory() . '/inc/alpha-color-picker.php';
    get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
    get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';
    
}
add_action( 'customize_register', 'computer_repair_services_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function computer_repair_services_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );

    $wp_customize->add_setting('computer_repair_services_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('computer_repair_services_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','computer-repair-services-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('computer_repair_services_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('computer_repair_services_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','computer-repair-services-pro'),
        'section' => 'title_tagline',
    ));
    
    //add home page setting pannel
    $wp_customize->add_panel( 'computer_repair_services_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'computer-repair-services-pro' ),
        'description' => __( 'Description of what this panel does.', 'computer-repair-services-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'computer-repair-services-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'computer-repair-services-pro' ),
        'Acme' => __( 'Acme', 'computer-repair-services-pro' ),
        'Anton' => __( 'Anton', 'computer-repair-services-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'computer-repair-services-pro' ),
        'Arimo' => __( 'Arimo', 'computer-repair-services-pro' ),
        'Arsenal' => __( 'Arsenal', 'computer-repair-services-pro' ),
        'Arvo' => __( 'Arvo', 'computer-repair-services-pro' ),
        'Alegreya' => __( 'Alegreya', 'computer-repair-services-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'computer-repair-services-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'computer-repair-services-pro' ),
        'Bangers' => __( 'Bangers', 'computer-repair-services-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'computer-repair-services-pro' ),
        'Bad Script' => __( 'Bad Script', 'computer-repair-services-pro' ),
        'Bitter' => __( 'Bitter', 'computer-repair-services-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'computer-repair-services-pro' ),
        'BenchNine' => __( 'BenchNine', 'computer-repair-services-pro' ),
        'Cabin' => __( 'Cabin', 'computer-repair-services-pro' ),
        'Cardo' => __( 'Cardo', 'computer-repair-services-pro' ),
        'Courgette' => __( 'Courgette', 'computer-repair-services-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'computer-repair-services-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'computer-repair-services-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'computer-repair-services-pro' ),
        'Cuprum' => __( 'Cuprum', 'computer-repair-services-pro' ),
        'Cookie' => __( 'Cookie', 'computer-repair-services-pro' ),
        'Chewy' => __( 'Chewy', 'computer-repair-services-pro' ),
        'Days One' => __( 'Days One', 'computer-repair-services-pro' ),
        'Dosis' => __( 'Dosis', 'computer-repair-services-pro' ),
        'Economica' => __( 'Economica', 'computer-repair-services-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'computer-repair-services-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'computer-repair-services-pro' ),
        'Francois One' => __( 'Francois One', 'computer-repair-services-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'computer-repair-services-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'computer-repair-services-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'computer-repair-services-pro' ),
        'Handlee' => __( 'Handlee', 'computer-repair-services-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'computer-repair-services-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'computer-repair-services-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'computer-repair-services-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'computer-repair-services-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'computer-repair-services-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'computer-repair-services-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'computer-repair-services-pro' ),
        'Kanit' => __( 'Kanit', 'computer-repair-services-pro' ),
        'Lobster' => __( 'Lobster', 'computer-repair-services-pro' ),
        'Lato' => __( 'Lato', 'computer-repair-services-pro' ),
        'Lora' => __( 'Lora', 'computer-repair-services-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'computer-repair-services-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'computer-repair-services-pro' ),
        'Merriweather' => __( 'Merriweather', 'computer-repair-services-pro' ),
        'Monda' => __( 'Monda', 'computer-repair-services-pro' ),
        'Montserrat' => __( 'Montserrat', 'computer-repair-services-pro' ),
        'Muli' => __( 'Muli', 'computer-repair-services-pro' ),
        'Marck Script' => __( 'Marck Script', 'computer-repair-services-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'computer-repair-services-pro' ),
        'Open Sans' => __( 'Open Sans', 'computer-repair-services-pro' ),
        'Overpass' => __( 'Overpass', 'computer-repair-services-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'computer-repair-services-pro' ),
        'Oxygen' => __( 'Oxygen', 'computer-repair-services-pro' ),
        'Orbitron' => __( 'Orbitron', 'computer-repair-services-pro' ),
        'Patua One' => __( 'Patua One', 'computer-repair-services-pro' ),
        'Pacifico' => __( 'Pacifico', 'computer-repair-services-pro' ),
        'Padauk' => __( 'Padauk', 'computer-repair-services-pro' ),
        'Playball' => __( 'Playball', 'computer-repair-services-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'computer-repair-services-pro' ),
        'PT Sans' => __( 'PT Sans', 'computer-repair-services-pro' ),
        'Philosopher' => __( 'Philosopher', 'computer-repair-services-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'computer-repair-services-pro' ),
        'Poiret One' => __( 'Poiret One', 'computer-repair-services-pro' ),
        'Quicksand' => __( 'Quicksand', 'computer-repair-services-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'computer-repair-services-pro' ),
        'Raleway' => __( 'Raleway', 'computer-repair-services-pro' ),
        'Rubik' => __( 'Rubik', 'computer-repair-services-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'computer-repair-services-pro' ),
        'Russo One' => __( 'Russo One', 'computer-repair-services-pro' ),
        'Righteous' => __( 'Righteous', 'computer-repair-services-pro' ),
        'Slabo' => __( 'Slabo', 'computer-repair-services-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'computer-repair-services-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'computer-repair-services-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'computer-repair-services-pro' ),
        'Sacramento' => __( 'Sacramento', 'computer-repair-services-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'computer-repair-services-pro' ),
        'Tangerine' => __( 'Tangerine', 'computer-repair-services-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'computer-repair-services-pro' ),
        'VT323' => __( 'VT323', 'computer-repair-services-pro' ),
        'Varela Round' => __( 'Varela Round', 'computer-repair-services-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'computer-repair-services-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'computer-repair-services-pro' ),
        'Volkhov' => __( 'Volkhov', 'computer-repair-services-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'computer-repair-services-pro' )
    );

    require_once get_template_directory() . '/inc/customizer-seperator/class/customizer-seperator.php';

    require get_template_directory() . '/inc/icon-picker.php';

    
    require get_template_directory() . '/inc/customize-repeater/customize-repeater.php';

    //general Settings
    require get_template_directory() . '/inc/customizer-custom-variables.php';
    //Header
    require get_template_directory() . '/inc/customizer-part-header.php';
    //Slider
    require get_template_directory() . '/inc/customizer-part-slide.php';
    //Home page sections
    require get_template_directory() . '/inc/customizer-part-home.php';
    //Social Icon
    require get_template_directory() . '/inc/customizer-part-social-icons.php';
    //Footer
    require get_template_directory() . '/inc/customizer-part-footer.php';
}
add_action( 'customize_register', 'computer_repair_services_pro_customize_register' );

//Integer
function computer_repair_services_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
