<?php
/**
 *
 * @package computer_repair_services_pro_
 */ 
$about_section = get_theme_mod( 'computer_repair_services_pro_who_we_are_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_who_we_are_bgcolor','') ) {
  $who_we_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_who_we_are_bgcolor','')).';';
}elseif( get_theme_mod('computer_repair_services_pro_who_we_are_bgimage','') ){
  $who_we_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_who_we_are_bgimage')).'\')';
}else{
  $who_we_backg = '';
}
?>
<section id="who_we_are" class="py-5" style="<?php echo esc_attr($who_we_backg); ?>">
  <div class="container">
    <div class="row mt-3">
      <div class="col-lg-6 col-md-6 col-12 align-self-center wow slideInLeft delay-2000" data-wow-duration="2s">
         <?php if(get_theme_mod('computer_repair_services_pro_whowe_main_heading')!=''){ ?>
            <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_main_heading')); ?>
            </h3>
         <?php } ?>
         <?php if(get_theme_mod('computer_repair_services_pro_whowe_main_title')!=''){ ?>
            <h4 class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_main_title')); ?>
            </h4>
         <?php } ?>
            <p class="main_content pb-2"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_main_content_1')); ?></p>
            <p class="main_content pb-2"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_main_content_2')); ?> </p>
         <?php if( get_theme_mod('computer_repair_services_pro_whowe_btn_url', true) != '' || get_theme_mod('computer_repair_services_pro_whowe_btn', true) != ''){ ?>
            <div class="whowe_btn mb-4">
               <a class="who_btnn" href="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_whowe_btn_url')); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_btn')); ?></a>
            </div>
          <?php } ?>
      </div>
      <div class="col-lg-6 col-md-6 col-12 wow slideInRight delay-2000" data-wow-duration="2s">
        <div class="whowe_box_img">
           <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_whowe_left_image')); ?>">
          <div class=" row whowe_box_content">
             <div class="col-lg-4 col-md-4 col-sm-5 col-5 imgicon">
               <i class="<?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_box_icon')); ?>"></i>
             </div>
             <div class="col-lg-8 col-md-8 col-sm-7 col-7 call_text">
               <h5 class="p-0 m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_imagebox_heading')); ?></h5>
               <p class="p-0 m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_whowe_imagebox_text')); ?></p>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
