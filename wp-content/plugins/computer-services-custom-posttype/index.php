    <?php
    /*
      Plugin Name: Computer Repair Services Pro Custom Posttype
      Plugin URI: 
      Description:
      Version: 0.0.1
      Author URI: https://www.themagnifico.net/
    */

    define( 'computer_repair_services_pro_custom_posttype_VERSION', '0.0.1' );
    add_action( 'init', 'computer_repair_services_pro_custom_posttype_create_post_type' );
    add_action( 'init', 'computer_repair_services_pro_custom_posttype_create_post_testimonial' );

    function computer_repair_services_pro_custom_posttype_create_post_type() {

      register_post_type( 'Service',
        array(
            'labels' => array(
              'name' => __( 'Service','computer-repair-services-pro-custom-posttype' ),
              'singular_name' => __( 'Service','computer-repair-services-pro-custom-posttype' )
            ),

            'taxonomies'      => array( 'category' ),
            'capability_type' =>  'post',
            'menu_icon'  => 'dashicons-calendar-alt',
            'public' => true,
            'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',
            'comments'
            )
        )
      ); 
    }

    function computer_repair_services_pro_custom_posttype_create_post_testimonial() {

      register_post_type( 'Testimonial',
        array(
            'labels' => array(
              'name' => __( 'Testimonial','computer-repair-services-pro-custom-posttype' ),
              'singular_name' => __( 'Testimonial','computer-repair-services-pro-custom-posttype' )
            ),

            'taxonomies'      => array( 'category' ),
            'capability_type' =>  'post',
            'menu_icon'  => 'dashicons-admin-users',
            'public' => true,
            'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',
            'comments'
            )
        )
      ); 
    }

    // ---------------- our Services ---------------

    // Services  Meta
    function computer_repair_services_pro_custom_posttype_bn_custom_meta_service() {

      add_meta_box( 'bn_meta', __( 'Service Meta', 'computer-repair-services-pro-custom-posttype' ), 'computer_repair_services_pro_custom_posttype_bn_meta_callback_service', 'service', 'normal', 'high' );
    }
    /* Hook things in for admin*/
    if (is_admin()){
      add_action('admin_menu', 'computer_repair_services_pro_custom_posttype_bn_custom_meta_service');
    }

    function computer_repair_services_pro_custom_posttype_bn_meta_callback_service( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'bn_nonce' );
        $bn_stored_meta = get_post_meta( $post->ID );
        $service_icon = get_post_meta( $post->ID, 'meta-service-icon', true );
        ?>
      <div id="property_stuff">
        <table id="list-table">     
          <tbody id="the-list" data-wp-lists="list:meta">
            <tr id="meta-1">
                <td class="left">
                  <?php _e( 'Service Icon', 'computer-repair-services-pro-custom-posttype' )?>
                </td>
                <td class="left" >
                  <input type="text" name="meta-service-icon" id="meta-service-icon" value="<?php echo esc_html($service_icon); ?>" />
                </td>
              </tr>
          </tbody>
        </table>
      </div>
      <?php
    }

    function computer_repair_services_pro_custom_posttype_bn_meta_save_service( $post_id ) {

      if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
        return;
      }

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }

      if( isset( $_POST[ 'meta-service-icon' ] ) ) {
        update_post_meta( $post_id, 'meta-service-icon', sanitize_text_field($_POST[ 'meta-service-icon' ]) );
      }

      if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
      } 
      
    }
    add_action( 'save_post', 'computer_repair_services_pro_custom_posttype_bn_meta_save_service' );

    /* event shortcode */
    function computer_repair_services_pro_custom_posttype_event_func( $atts ) {
      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
      $thumb_url="";
      $projects = '';
      $projects = '<div class="row " id="service">';
      $query = new WP_Query( array( 'post_type' => 'service') );

        if ( $query->have_posts() ) :

      $k=1;
      $new = new WP_Query('post_type=service');
      while ($new->have_posts()) : $new->the_post();
            $post_id = get_the_ID();
            $event_date= get_the_date('d');
            $event_month= get_the_date('M');
            $event_year= get_the_date('Y');
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
            if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
            $url = $thumb['0'];
            $custom_url ='';
            $excerpt = wp_trim_words(get_the_excerpt(),30);
            $custom_url = get_permalink();
            $service_icon= esc_html(get_theme_mod('computer_repair_services_pro_service_time_icon',true));
            $projects .= '
            <div class="row mb-5 services">
              <div class="col-lg-6 col-md-6 px-md-0 px-0">
                <img class="test-image" src="'.esc_url($thumb_url).'" />
              </div>
              <div class="col-lg-6 col-md-6 text-left service-box pl-lg-0 mt-3 mt-lg-0 mt-lg-0 px-md-0">
                <div class="px-xl-5 py-xl-5 px-lg-4 py-lg-2 px-md-3 py-md-2 py-4 ">
                  <div class="cat-name mb-md-3 mt-md-2 mt-3">

                  </div>
                  <div class="py-3 ">
                    <span class="post-date text-center">
                      <i class="far fa-calendar-alt mr-2"></i><span class="date-day">'. $event_date .'</span> <span class="date-month">'. $event_month.'</span> <span class="date-year">'. $event_year.'</span>
                    </span>
                  </div>
                  
                      <h5 class="post-title "><a href="'.esc_url($custom_url).'">'.esc_html(get_the_title()) .'</a></h5>
                      <p class="content">'.$excerpt.'</p>
                </div>
              </div>
            </div>';
        if($k%2 == 0){
          $projects.= '<div class="clearfix"></div>';
        }
          $k++;
      endwhile;
      else :
        $projects = '<h2 class="center">'.esc_html__('Post Not Found','computer-repair-services-pro-custom-posttype').'</h2>';
      endif;
      return $projects;
    }

    add_shortcode( 'computer-repair-services-pro-service', 'computer_repair_services_pro_custom_posttype_event_func' );


    // ---------------- testimonial meta ---------------

    // testimonial  Meta
    function computer_repair_services_pro_custom_posttype_bn_custom_meta_testimonail() {

      add_meta_box( 'bn_meta', __( 'Testimonial Meta', 'computer-repair-services-pro-custom-posttype' ), 'computer_repair_services_pro_custom_posttype_bn_meta_callback_testimonial', 'testimonial', 'normal', 'high' );
    }
    /* Hook things in for admin*/
    if (is_admin()){
      add_action('admin_menu', 'computer_repair_services_pro_custom_posttype_bn_custom_meta_testimonail');
    }

    function computer_repair_services_pro_custom_posttype_bn_meta_callback_testimonial( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'bn_nonce' );
        $bn_stored_meta = get_post_meta( $post->ID );
        $testimonuial_name = get_post_meta( $post->ID, 'meta-testimonial-name', true );
        $rating_num = get_post_meta( $post->ID, 'meta-testimonial-num', true );
        $rating_text = get_post_meta( $post->ID, 'meta-testimonial-tex', true );
        ?>
      <div id="property_stuff">
        <table id="list-table">     
          <tbody id="the-list" data-wp-lists="list:meta">

            <tr id="meta-1">
                <td class="left">
                  <?php _e( 'Testimonial Name', 'computer-repair-services-pro-custom-posttype' )?>
                </td>
                <td class="left" >
                  <input type="text" name="meta-testimonial-name" id="meta-testimonial-name" value="<?php echo esc_html($testimonuial_name); ?>" />
                </td>
              </tr>
            <tr id="meta-2">
                <td class="left">
                  <?php _e( 'Raiting Number', 'computer-repair-services-pro-custom-posttype' )?>
                </td>
                <td class="left" >
                  <input type="text" name="meta-testimonial-num" id="meta-testimonial-num" value="<?php echo esc_html($rating_num); ?>" />
                </td>
              </tr>
              <tr id="meta-3">
                <td class="left">
                  <?php _e( 'Raiting Text', 'computer-repair-services-pro-custom-posttype' )?>
                </td>
                <td class="left" >
                  <input type="text" name="meta-testimonial-tex" id="meta-testimonial-tex" value="<?php echo esc_html($rating_text); ?>" />
                </td>
              </tr>
            
          </tbody>
        </table>
      </div>
      <?php
    }

    function computer_repair_services_pro_custom_posttype_bn_meta_save_testimonial( $post_id ) {

      if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
        return;
      }

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }

      if( isset( $_POST[ 'meta-testimonial-num' ] ) ) {
        update_post_meta( $post_id, 'meta-testimonial-num', sanitize_text_field($_POST[ 'meta-testimonial-num' ]) );
      }

      if( isset( $_POST[ 'meta-testimonial-tex' ] ) ) {
        update_post_meta( $post_id, 'meta-testimonial-tex', sanitize_text_field($_POST[ 'meta-testimonial-tex' ]) );
      }

      if( isset( $_POST[ 'meta-testimonial-name' ] ) ) {
        update_post_meta( $post_id, 'meta-testimonial-name', sanitize_text_field($_POST[ 'meta-testimonial-name' ]) );
      }

      if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
      } 
      
    }
    add_action( 'save_post', 'computer_repair_services_pro_custom_posttype_bn_meta_save_testimonial' );

    // ---------------- Testimonial---------------



    /* event shortcode */
    function computer_repair_services_pro_custom_posttype_testimonial_func( $atts ) {
      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
      $thumb_url="";
      $testimonial = '';
      $testimonial = '<div class="row " id="testimonial">';
      $query = new WP_Query( array( 'post_type' => 'testimonial') );

        if ( $query->have_posts() ) :

      $k=1;
      $new = new WP_Query('post_type=testimonial');
      while ($new->have_posts()) : $new->the_post();
            $post_id = get_the_ID();
            $event_date= get_the_date('d');
            $event_month= get_the_date('M');
            $event_year= get_the_date('Y');
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
            if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
            $url = $thumb['0'];
            $custom_url ='';
            $excerpt = wp_trim_words(get_the_excerpt(),30);
            $custom_url = get_permalink();
            $events_icon= esc_html(get_theme_mod('computer_repair_services_pro_events_time_icon',true));
            $team .= '
            <div class="row mb-5 eventss">
              <div class="col-lg-6 col-md-6 px-md-0 px-0">
                <img class="test-image" src="'.esc_url($thumb_url).'" />
              </div>
              <div class="col-lg-6 col-md-6 text-left events-box pl-lg-0 mt-3 mt-lg-0 mt-lg-0 px-md-0">
                <div class="px-xl-5 py-xl-5 px-lg-4 py-lg-2 px-md-3 py-md-2 py-4 ">
                  <div class="cat-name mb-md-3 mt-md-2 mt-3">

                  </div>
                  <div class="py-3 ">
                    <span class="post-date text-center">
                      <i class="far fa-calendar-alt mr-2"></i><span class="date-day">'. $event_date .'</span> <span class="date-month">'. $event_month.'</span> <span class="date-year">'. $event_year.'</span>
                    </span>
                  </div>
                  
                      <h5 class="post-title "><a href="'.esc_url($custom_url).'">'.esc_html(get_the_title()) .'</a></h5>
                      <p class="content">'.$excerpt.'</p>
                </div>
              </div>
            </div>';
        if($k%2 == 0){
          $team.= '<div class="clearfix"></div>';
        }
          $k++;
      endwhile;
      else :
        $team = '<h2 class="center">'.esc_html__('Post Not Found','computer-repair-services-pro-custom-posttype').'</h2>';
      endif;
      return $team;
    }

    add_shortcode( 'computer-repair-services-pro-testimonial', 'computer_repair_services_pro_custom_posttype_testimonial_func' );
