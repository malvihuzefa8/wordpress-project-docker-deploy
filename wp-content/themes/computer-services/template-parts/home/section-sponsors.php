<?php 
$sponsors_section_section = get_theme_mod( 'computer_repair_services_pro_sponsors_section_enable' );
if ( 'Disable' == $sponsors_section_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_sponsors_section_bgcolor') ) {
  $sponsors_section_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_sponsors_section_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_sponsors_section_bgimage') ){
  $sponsors_section_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_sponsors_section_bgimage')).'\')';
}else{
  $sponsors_section_backg = '';
}

?>
<section id="sponsors" class="py-5" style="<?php echo esc_attr($sponsors_section_backg); ?>">
  <div class="container">
    <div class="sponsors_section_text text-center wow zoomInLeft delay-2000 animated" data-wow-duration="2s">
      <?php if(get_theme_mod('computer_repair_services_pro_sponsors_section_main_heading')!=''){ ?>
         <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_sponsors_section_main_heading')); ?>
         </h3>
        <?php } ?>
        <?php if(get_theme_mod('computer_repair_services_pro_sponsors_section_main_title')!=''){ ?>
          <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_sponsors_section_main_title')); ?>
          </p>
      <?php } ?>
    </div>
    <div class="tab-pane">
      <div class="owl-carousel owl-theme">
        <?php $item = get_theme_mod('computer_repair_services_pro_sponsors_increase');
        for($i=1; $i<=$item; $i++) { ?>    
          <div class="item mt-5 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
            <img class="mb-3 <?php echo('images-').$i ?>" src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_sponsors_image'.$i)); ?>">
          </div>
        <?php } ?>
      </div>
    </div>
  </div> 
</section>