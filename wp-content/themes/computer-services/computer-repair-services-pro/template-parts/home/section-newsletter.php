<?php 
$news_section_section = get_theme_mod( 'computer_repair_services_pro_newsletter_section_enable' );
if ( 'Disable' == $news_section_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_newsletter_section_bgcolor') ) {
  $news_section_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_newsletter_section_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_newsletter_section_bgimage') ){
  $news_section_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_newsletter_section_bgimage')).'\')';
}else{
  $news_section_backg = '';
}

?>
<section id="newsletter" class="py-5" style="<?php echo esc_attr($news_section_backg); ?>">
  <div class="container">
    <div class="news_bg wow fadeInUpBig delay-1000 animated" data-wow-duration="3s">
      <div class="row ">
        <div class="col-lg-5 col-md-5 col-sm-12 col-12 newleft_image">
            <img src="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_newsletter_left_image')); ?>">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-12 news_section_text">
          <?php if(get_theme_mod('computer_repair_services_pro_newsletter_section_main_heading')!=''){ ?>
             <h3 class="main_heading m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_newsletter_section_main_heading')); ?>
             </h3>
            <?php } ?>
            <?php if(get_theme_mod('computer_repair_services_pro_newsletter_section_main_title')!=''){ ?>
              <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_newsletter_section_main_title')); ?>
              </p>
          <?php } ?>
             <div class="newsform">
               <?php if(get_theme_mod('computer_repair_services_pro_newsletter_shortcode')!=""){ ?>
               <?php echo do_shortcode(get_theme_mod('computer_repair_services_pro_newsletter_shortcode')); ?>
               <?php } ?>
             </div>
        </div>
      </div> 
    </div>    
  </div>
</section>