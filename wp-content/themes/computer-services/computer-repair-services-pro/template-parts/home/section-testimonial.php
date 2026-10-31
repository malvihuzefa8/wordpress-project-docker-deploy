<?php 
$testimonial_section_section = get_theme_mod( 'computer_repair_services_pro_testimonial_section_enable' );
if ( 'Disable' == $testimonial_section_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_testimonial_section_bgcolor') ) {
  $testimonial_section_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_testimonial_section_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_testimonial_section_bgimage') ){
  $testimonial_section_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_testimonial_section_bgimage')).'\')';
}else{
  $testimonial_section_backg = '';
}

?>
<section id="testimonial" style="<?php echo esc_attr($testimonial_section_backg); ?>">
  <div class="container">
    <div class="testimonial_section_text text-center">
      <?php if(get_theme_mod('computer_repair_services_pro_testimonial_section_main_heading')!=''){ ?>
         <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_testimonial_section_main_heading')); ?>
         </h3>
        <?php } ?>
        <?php if(get_theme_mod('computer_repair_services_pro_testimonial_section_main_title')!=''){ ?>
          <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_testimonial_section_main_title')); ?>
          </p>
      <?php } ?>
    </div>
     <div class="testimonial mt-5 pb-5">
      <div class="owl-carousel">
        <?php
              $i=1;
                $args = array(
                  'post_type' => 'testimonial',
                  'post_status' => 'publish',
                  'posts_per_page' => get_theme_mod('computer_repair_services_pro_testimonial_increase'),
                  'category_name' =>  get_theme_mod('computer_repair_services_pro_testimonial_category'),
                  'order' => 'ASC'
                );
                $new = new WP_Query($args); 
                $loop_index = 0;
                while ( $new->have_posts() ){
                  $new->the_post(); 
              ?>
          <div class="testimonial_box wow zoomInDown delay-3000 animated" data-wow-duration="2s">   
            <div class="testimonial-content row mb-2">
              <div class="col-lg-4 col-md-4 col-sm-4 col-4 align-self-center">
                <div class="testimonial-img">
                  <?php if(has_post_thumbnail()){ ?>
                      <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="" >
                    <?php } ?>
                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-8 align-self-center">
                 <h4 class="name mb-0 p-0"><?php echo esc_html(get_post_meta($post->ID,'meta-testimonial-name',true)); ?></h4>
              </div>
            </div>
              <a href="<?php the_permalink(); ?>"><h5 class="test_heading "><?php the_title(); ?></h5></a>
              <p class="title m-0 "><?php echo wp_trim_words( get_the_excerpt(), get_theme_mod('computer_repair_services_pro_testimonial_content_lenght', 100)); ?></p>
                 <hr>
              <div class="rating_box">
                <p>
                  <span><?php echo esc_html(get_post_meta($post->ID,'meta-testimonial-num',true)); ?></span>
                  <?php echo esc_html(get_post_meta($post->ID,'meta-testimonial-tex',true)); ?>
              </p>
              </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</section>