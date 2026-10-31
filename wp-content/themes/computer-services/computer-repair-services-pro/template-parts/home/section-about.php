<?php 
$about_section = get_theme_mod( 'computer_repair_services_pro_about_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_about_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_about_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_about_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_about_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="about" class="pt-5" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="row mt-3">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow slideInLeft delay-1000 animated" data-wow-duration="2s">
        <div class="about_box_img">
          <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_about_left_image')); ?>">
          <?php if( get_theme_mod('computer_repair_services_pro_about_call_text', true) != '' || get_theme_mod('computer_repair_services_pro_about_call_number', true) != ''){ ?>
          <div class="call_text">
            <h5 class="p-0 m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_call_text')); ?></h5>
            <p class="p-0 m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_call_number')); ?></p>
          </div>
          <?php } ?>
          <?php if(get_theme_mod('computer_repair_services_pro_about_aapoinment_content')!=''){ ?>
          <div class="abt_content">
            <p class="p-0 m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_aapoinment_content')); ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow slideInDown delay-1000 animated" data-wow-duration="2s">
         <?php if(get_theme_mod('computer_repair_services_pro_about_main_heading')!=''){ ?>
            <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_main_heading')); ?>
            </h3>
         <?php } ?>
         <?php if(get_theme_mod('computer_repair_services_pro_about_main_title')!=''){ ?>
            <h4 class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_main_title')); ?>
            </h4>
         <?php } ?>
             <p class="main_content"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_main_content_1')); ?></p>
             <p class="main_content"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_main_content_2')); ?> </p>

        <div class="row">
          <?php $abouttext = get_theme_mod('computer_repair_services_pro_about_increase');
        for($i=1; $i<=$abouttext; $i++) { ?>

        <?php if(get_theme_mod('computer_repair_services_pro_about_main_text'.$i)!=''){ ?>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-left pb-4">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-3 right_icon align-self-center">
               <i class="<?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_left_icon'.$i)); ?>"></i>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-9" >
            <?php if(get_theme_mod('computer_repair_services_pro_about_main_text'.$i)!=''){ ?>
              <h4 class="about_main_heading mb-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_about_main_text'.$i)); ?></h4>
            <?php } ?>
            </div>
          </div>
          </div>
        <?php } ?>
         <?php } ?>
       </div>
      </div>
    </div>
  </div>
</section>