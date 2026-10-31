<?php 
$our_news_section_section = get_theme_mod( 'computer_repair_services_pro_our_news_section_enable' );
if ( 'Disable' == $our_news_section_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_our_news_section_bgcolor') ) {
  $news_section_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_our_news_section_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_our_news_section_bgimage') ){
  $news_section_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_our_news_section_bgimage')).'\')';
}else{
  $news_section_backg = '';
}

?>
<section id="our_news" class="py-5" style="<?php echo esc_attr($news_section_backg); ?>">
  <div class="container">
    <div class="news_section_text text-center wow slideInDown delay-1000 animated" data-wow-duration="2s">
      <?php if(get_theme_mod('computer_repair_services_pro_our_news_section_main_heading')!=''){ ?>
         <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_our_news_section_main_heading')); ?>
         </h3>
        <?php } ?>
        <?php if(get_theme_mod('computer_repair_services_pro_our_news_section_main_title')!=''){ ?>
          <p class="main_sub_heading mb-5"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_our_news_section_main_title')); ?>
          </p>
      <?php } ?>
    </div>

    <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => get_theme_mod('computer_repair_services_pro_our_news_category'),
        'posts_per_page' =>  3
      );
      $new = new WP_Query($args); 
      $loop_index = 0; $i=1;
        while ( $new->have_posts() ){
          $new->the_post();  ?>
          <div class="postbox row m-0 mb-5 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
            <?php 
            if ($i % 2 != 0) { ?>            
            <div class="col-md-6 pl-0 ">
              <div class="postpic">
                <?php if (has_post_thumbnail()){ ?>
                  <?php the_post_thumbnail(); ?>
                <?php } ?>                
              </div>
            </div>
            <?php } ?>
            <div class="col-md-6 align-self-center">
              <div class="postbox-content">
                <span class="post_date">
                <i class="<?php echo esc_html('far fa-calendar-alt')?>"></i> <?php the_time(get_option('date_format')); ?>
                </span>
                <h3 class="posttitle"><?php the_title(); ?></h3>                
                  <p class="newpost mb-4">
                   <?php echo wp_trim_words( get_the_excerpt(), get_theme_mod('computer_repair_services_pro_news_content_lenght', 200)); ?>
                  </p>
                  <?php if( get_theme_mod('computer_repair_services_pro_our_news_btn', true) != ''){ ?>
                  <div class="ornews_btn pt-3 mb-4">
                    <a class="newsbtnn" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_our_news_btn')); ?></a>
                 </div>
                 <?php } ?>
              </div>
            </div>
           <?php if ($i % 2 == 0) { ?>  
              <div class="col-md-6 pr-0">
                <div class="postpic">
                  <?php if (has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail(); ?>
                  <?php } ?>                  
                </div>
              </div>
            <?php } ?>
          </div>
          <?php $i++; }
        wp_reset_query(); ?>
  </div>
</section>
