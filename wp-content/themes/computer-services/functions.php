<?php
/**
 * computer-repair-services-pro functions and definitions
 *
 * @package computer-repair-services-pro
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Computer_Repair_Services_Pro_Loader.php' );

$Computer_Repair_Services_Pro_Loader = new \WPTRT\Autoload\Computer_Repair_Services_Pro_Loader();

$Computer_Repair_Services_Pro_Loader->Computer_Repair_Services_Pro_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$Computer_Repair_Services_Pro_Loader->Computer_Repair_Services_Pro_register();

if ( ! function_exists( 'computer-repair-services-pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function computer_repair_services_pro_setup() {
	define( 'THEME_DIR', dirname( __FILE__ ) );
	$GLOBALS['content_width'] = apply_filters( 'computer_repair_services_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'computer-repair-services-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' ); 
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('computer-repair-services-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'computer-repair-services-pro' ),
		'footer'   => __( 'Footer Menu 1', 'computer-repair-services-pro' ),
		'footer2'   => __( 'Footer Menu 2', 'computer-repair-services-pro' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
	add_action( 'wp_ajax_ive-check-plugin-exists', 'check_plugin_exists' );
	add_action( 'wp_ajax_ive_install_and_activate_plugin', 'mep_install_and_activate_plugin' );
}
endif;
add_action( 'after_setup_theme', 'computer_repair_services_pro_setup' );

function mep_install_and_activate_plugin() {

	$post_plugin_details = $_POST['plugin_details'];
	$plugin_text_domain = $post_plugin_details['plugin_text_domain'];
	$plugin_main_file		=	$post_plugin_details['plugin_main_file'];
	$plugin_url					=	$post_plugin_details['plugin_url'];

	$plugin = array(
		'text_domain'	=> $plugin_text_domain,
		'path' 				=> $plugin_url,
		'install' 		=> $plugin_text_domain . '/' . $plugin_main_file
	);

	wp_cache_flush();

	$plugin_path = plugin_basename( trim( $plugin['install'] ) );


	$activate_plugin = activate_plugin( $plugin_path );

	if($activate_plugin) {

		echo $activate_plugin;

	} else {
		echo $activate_plugin;
	}

	$msg = 'installed';

	$response = array( 'status' => true, 'msg' => $msg );
	wp_send_json( $response );
	exit;
}

function check_plugin_exists() {
		$plugin_text_domain = $_POST['plugin_text_domain'];
		$main_plugin_file 	= $_POST['main_plugin_file'];
		$plugin_path = $plugin_text_domain . '/' . $main_plugin_file;

		$get_plugins					= get_plugins();
		$is_plugin_installed	= false;
		$activation_status 		= false;
		if ( isset( $get_plugins[$plugin_path] ) ) {
		$is_plugin_installed = true;

		$activation_status = is_plugin_active( $plugin_path );
		}
		wp_send_json_success(
		array(
		'install_status'  =>	$is_plugin_installed,
			'active_status'		=>	$activation_status,
			'plugin_path'			=>	$plugin_path,
			'plugin_slug'			=>	$plugin_text_domain
		)
		);
}

/* Theme Widgets Setup */
function computer_repair_services_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'computer-repair-services-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on page sidebar', 'computer-repair-services-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on footer', 'computer-repair-services-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on footer', 'computer-repair-services-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on footer', 'computer-repair-services-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'computer-repair-services-pro' ),
		'description'   => __( 'Appears on footer', 'computer-repair-services-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'computer_repair_services_pro_widgets_init' );

/* Theme Font URL */
function computer_repair_services_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Yesteryear';
	$font_family[] = 'Quicksand:wght@300;400;500;600;700&display=swap';
	$font_family[] = 'Outfit:wght@100;200;300;400;500;600;700;800;900';
	$font_family[] = 'Allison&display=swap';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Noto Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'PT Serif';
	$font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400&display=swap';
	$font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap';
	$font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function computer_repair_services_pro_scripts() {

	if(is_home() || is_front_page()) {
      wp_register_style( 'home-page-style', get_stylesheet_directory_uri() . '/assets/css/homepage.css');
      wp_enqueue_style( 'home-page-style' );
    }
    wp_register_style( 'header-footer-style', get_stylesheet_directory_uri() . '/assets/css/header-footer.css');
    wp_enqueue_style( 'header-footer-style' );

    wp_register_style( 'header-footer-style', get_stylesheet_directory_uri() . '/assets/css/header-footer.css');
    wp_enqueue_style( 'header-footer-style' );

    wp_register_style( 'all-pages-style', get_stylesheet_directory_uri() . '/assets/css/all-pages.css');
    wp_enqueue_style( 'animation-wow', get_template_directory_uri() . '/assets/css/animation.css' );
    wp_enqueue_style( 'all-pages-style' );

    

    wp_register_style( 'media-style', get_stylesheet_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style( 'media-style' );

	wp_enqueue_style( 'computer-repair-services-pro-font', computer_repair_services_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'computer-repair-services-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'computer-repair-services-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'computer-repair-services-pro-basic-style',$custom_css );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_style( 'effect', get_template_directory_uri().'/assets/css/effect.css' );
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'google-font', get_template_directory_uri().'/assets/css/google-font.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.js',array('jquery'),'',true);
	wp_enqueue_script( 'animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
	wp_enqueue_script( 'computer-repair-services-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.min.css' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'),'', true );

	

	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('computer-repair-services-pro-ie', get_template_directory_uri().'/assets/css/ie.css', array('computer-repair-services-pro-basic-style'));
	wp_style_add_data( 'computer-repair-services-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'computer_repair_services_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customizer.php' );
/* TGM. */
require get_parent_theme_file_path( '/inc/tgm.php' );
/* Get Started. */
require get_parent_theme_file_path( '/inc/getstarted/getstart.php' );

/* URL DEFINES */
define('computer_repair_services_pro_SITE_URL','https://www.themagnifico.net/');
/* Theme Credit link */
function computer_repair_services_pro_credit_link() {
	echo esc_html(' Design & Developed by','computer-repair-services-pro'). "<a href=".esc_url(computer_repair_services_pro_SITE_URL)." target='_blank'> Themagnifico</a>";
}
/*Radio Button sanitization*/
function computer_repair_services_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

// Recent post widget with thumbnails
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'computer-repair-services-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; ?>
        <?php if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
	        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
	            <li>
	                <div class="row recent-post-box">
		                <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-md-12 col-sm-12 col-12'; } ?> ">
		                    <?php the_post_thumbnail(); ?>
		                </div>
		                <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-md-12 col-sm-12 col-12 py-2'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
		                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			                <?php if ( $show_date ) : ?>
			                    <p class="post-date m-0"><?php the_time(get_option('date_format')); ?></p>
			                <?php endif; ?>
		                </div>
	                </div>
	            </li>
	        <?php endwhile;
	        wp_reset_postdata(); ?>
        </ul>

        <?php echo $args['after_widget'];

        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');

 /* Breadcrumb Begin */
function computer_repair_services_pro_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(', ');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Excerpt Limit Begin */
function computer_repair_services_pro_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// woocommerce Trim zeros in price decimals
add_filter( 'woocommerce_price_trim_zeros', '__return_true' ); 

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'computer_repair_services_pro_loop_columns', 999);
if (!function_exists('computer_repair_services_pro_loop_columns')) {
    function computer_repair_services_pro_loop_columns() {
        return 3; // 3 products per row
    }
}

//woocommerce plugin skip 
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );


add_filter( 'woocommerce_add_to_cart_fragments', 'computer_repair_services_pro_refresh_mini_cart_count');
function computer_repair_services_pro_refresh_mini_cart_count( $fragments ) {
  ob_start();
  $items_count = WC()->cart->get_cart_total();
  ?>
  	<span class="header-cart-value">
  		<bdi>
  			<?php echo $items_count; ?></bdi>
  		</span>
  <?php
  $fragments['.header-cart-value'] = ob_get_clean();
  return $fragments;
}


function computer_repair_services_pro_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}


function computer_repair_services_pro_max_title_length( $title ) {
$max = 80;
if( strlen( $title ) > $max ) {
return substr( $title, 0, $max ). " &hellip;";
} else {
return $title;
}
}
 

