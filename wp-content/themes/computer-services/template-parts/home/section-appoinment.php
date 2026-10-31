<?php 
$appoinment_section = get_theme_mod( 'computer_repair_services_pro_appoinment_enable' );
if ( 'Disable' == $appoinment_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_appoinment_bgcolor') ) {
  $appoinment_section = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_appoinment_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_appoinment_bgimage') ){
  $appoinment_section = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_appoinment_bgimage')).'\')';
}else{
  $appoinment_section = '';
}

?>
<section id="appoinment" class="pb-5" style="<?php echo esc_attr($appoinment_section); ?>">
  <div class="container">
    <div class="row newsbox m-0">
      <div class="col-lg-8 col-md-12 col-sm-12 wow slideInDown delay-2000" data-wow-duration="2s">
        <div class="appoinment_text">
          <?php if(get_theme_mod('computer_repair_services_pro_appoinment_main_heading')!=''){ ?>
           <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_appoinment_main_heading')); ?>
           </h3>
          <?php } ?>
          <?php if(get_theme_mod('computer_repair_services_pro_appoinment_main_title')!=''){ ?>
            <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_appoinment_main_title')); ?>
            </p>
          <?php } ?>
       </div>
        <div class="service_box">
        <div class="row">

          <?php
              $i=1;
                $args = array(
                  'post_type' => 'service',
                  'post_status' => 'publish',
                  'posts_per_page' => get_theme_mod('computer_repair_services_pro_service_box_increase'),
                  'category_name' =>  get_theme_mod('computer_repair_services_pro_service_box_category'),
                  'order' => 'ASC'
                );
                $new = new WP_Query($args); 
                $loop_index = 0;
                while ( $new->have_posts() ){
                  $new->the_post(); 
              ?>

          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <div class="row sersinglebox ">
            <div class="col-lg-5 col-md-5 col-sm-4 col-5 ser_icon align-self-center">
               <i class="<?php echo esc_html(get_post_meta($post->ID,'meta-service-icon',true)); ?>"></i>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-8 col-7 align-self-center">
              <a href="<?php the_permalink(); ?>"><h4 class="service_text mb-0"><?php the_title(); ?></h4></a>
            </div>
          </div>
          </div>
         <?php } ?>
       </div>         
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 ">
        <div class="apponment-box wow fadeInUpBig delay-1000 animated" data-wow-duration="3s">
          <?php if(get_theme_mod('computer_repair_services_pro_apponment_main_text')!=''){ ?>
            <h3 class="appoinment_main_heading mb-4"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_apponment_main_text')); ?>
            </h3>
          <?php } ?>
          <div class="contact-form">
            <?php if(get_theme_mod('computer_repair_services_pro_apponment_shortcode')!=""){ ?>
            <?php echo do_shortcode(get_theme_mod('computer_repair_services_pro_apponment_shortcode')); ?>
          <?php } ?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="repairing_box wow zoomInDown delay-2000 animated" data-wow-duration="2s">
        <?php if(get_theme_mod('computer_repair_services_pro_reparing_main_heading')!=''){ ?>
           <h5 class="heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_reparing_main_heading')); ?>
           </h5>
        <?php } ?>
        <div class="owl-carousel mb-4">
           <?php $repair_box = get_theme_mod('computer_repair_services_pro_repair_box_increase');
         for($i=1; $i<=$repair_box; $i++) { ?>
           <div class=" mb-4">
             <div class="rep_mainbox">
              <h6><?php echo esc_html(get_theme_mod('computer_repair_services_pro_reparing_box_heading'.$i)); ?></h6> 
              <p><?php echo esc_html(get_theme_mod('computer_repair_services_pro_reparing_box_content'.$i)); ?></p>
              <h5 class="repnumber"><?php if($i <=9 ) { echo esc_html(0); } echo esc_html($i); ?></h5> 
             </div>
           </div>
          <?php } ?> 
        </div>
    </div>
</div>
</section>