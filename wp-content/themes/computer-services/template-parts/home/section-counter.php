<?php 
$about_section = get_theme_mod( 'computer_repair_services_pro_counter_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_counter_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_counter_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_counter_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_counter_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="activity" class="py-5" style="<?php echo esc_attr($about_backg); ?>">
  	<div class="container">
	    <div class="heading text-center wow slideInDown delay-2000" data-wow-duration="2s">
	    	<?php if(get_theme_mod('computer_repair_services_pro_counter_main_heading')!=''){ ?>
		        <h3 class="main_heading mb-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_counter_main_heading')); ?>
		        </h3>
		    <?php } ?>
	    	<?php if(get_theme_mod('computer_repair_services_pro_counter_main_text')!=''){ ?>
	        <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_counter_main_text')); ?>
	        </p>
	      <?php } ?>
	    </div>
	    <div class="counter mt-4">
      <div class="owl-carousel">
        <?php $counter = get_theme_mod('computer_repair_services_pro_counter_increase');
        for($i=1 ; $i<=$counter; $i++) { ?>
          <div class="counter_box text-center wow zoomInUp delay-2000 animated" data-wow-duration="2s">
            <div class="counter-content">
              <?php if( get_theme_mod('computer_repair_services_pro_counter_icon'.$i, true) != ''){ ?>
              <div class="counter-img mb-3">
               <i class="<?php echo esc_attr(get_theme_mod('computer_repair_services_pro_counter_icon'.$i));?>" aria-hidden="true"></i>
              </div>
              <?php }?>
              <?php if(get_theme_mod('computer_repair_services_pro_counter_number'.$i)!=''){ ?>
                <h6 class="number mb-0 pb-0"><span class="count"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_counter_number'.$i)); ?></span><?php echo esc_html(get_theme_mod('computer_repair_services_pro_counter_plus'.$i)); ?></h6>
              <?php }?>
              <?php if(get_theme_mod('computer_repair_services_pro_counter_text'.$i)!=''){ ?>
                <p class="title mb-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_counter_text'.$i)); ?></p>
              <?php }?>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  	</div>
</section>