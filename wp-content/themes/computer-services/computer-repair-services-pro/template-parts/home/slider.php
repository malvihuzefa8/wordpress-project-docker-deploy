<?php 
$section_hide = get_theme_mod( 'computer_repair_services_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}

$number = get_theme_mod('computer_repair_services_pro_slide_number');
?>
<section id="slider">
  <div class="owl-carousel">
    <?php for ($i=1; $i<=$number; $i++) { ?>     
      <div class="main-slider">
        <div class="slider-image">
          <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_slide_image'.$i)); ?>" alt="<?php echo esc_attr(get_theme_mod('computer_repair_services_pro_slide_title'.$i, true)); ?>">
        </div>
        <div class="slider-content p-0 wow slideInDown delay-2000 "  data-wow-duration="2s">
          <h1 class="m-0 p-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_slide_main_heading'.$i)); ?></h1>
          <h2 class="m-0 p-0 mt-3"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_slide_text'.$i)); ?></h2>
           <?php if( get_theme_mod('computer_repair_services_pro_slide_btn_url'.$i, true) != '' || get_theme_mod('computer_repair_services_pro_slide_btn'.$i, true) != ''){ ?>
          <div class="slide_btn">
            <a class="btn" href="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_slide_btn_url'.$i)); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_slide_btn'.$i)); ?></a>
          </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</section>