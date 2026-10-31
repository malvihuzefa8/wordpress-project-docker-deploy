<?php
/**
 *
 * @package computer_repair_services_pro_
 */ 
$best_section = get_theme_mod( 'computer_repair_services_pro_best_service_enable' );
if ( 'Disable' == $best_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_best_service_bgcolor') ) {
  $best_section_bg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_best_service_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_best_service_bgimage') ){
  $best_section_bg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_best_service_bgimage')).'\')';
}else{
  $best_section_bg = '';
}
?>
<section id="best_service" style="<?php echo esc_attr($best_section_bg); ?>">
  <div class="container">
    <div class="best_service_text text-center">
      <?php if(get_theme_mod('computer_repair_services_pro_best_service_main_heading')!=''){ ?>
         <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_main_heading')); ?>
         </h3>
        <?php } ?>
        <?php if(get_theme_mod('computer_repair_services_pro_best_service_main_title')!=''){ ?>
          <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_main_title')); ?>
          </p>
      <?php } ?>
    </div>
    <div class="center_image mt-5">
     <figure class="cd-image-container">
      <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_best_image2')); ?>">
      <span class="cd-image-label" data-type="original"></span>
      <div class="cd-resize-img"> <!-- the resizable image on top -->
        <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_best_iamge1')); ?>">
        <span class="cd-image-label" data-type="modified"></span>
      </div>
      <span class="cd-handle"></span>
     </figure>
    </div>
    <div class="before_text my-5 row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_before_text')); ?></span></div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6"><div class="text_icon"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_after_text')); ?></div> </div>
    </div>
    <div class="center_text text-center">
      <?php if(get_theme_mod('computer_repair_services_pro_best_service_center_heading')!=''){ ?>
         <h4 class="center_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_center_heading')); ?>
         </h4>
      <?php } ?>
      <?php if(get_theme_mod('computer_repair_services_pro_best_service_center_title')!=''){ ?>
          <p class="center_title"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_center_title')); ?>
          </p>
      <?php } ?>
      <?php if( get_theme_mod('computer_repair_services_pro_best_service_btn_url', true) != '' || get_theme_mod('computer_repair_services_pro_best_service_btn', true) != ''){ ?>
    <div class="best_btn mb-5 ">
      <a class="best_btnn" href="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_best_service_btn_url')); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_best_service_btn')); ?></a>
    </div>
    <?php } ?>
    </div>
        
  </div>
</section>