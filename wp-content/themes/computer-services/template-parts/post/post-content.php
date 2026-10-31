<div id="single_post" class="col-lg-6 col-md-6 col-sm-12 mt-3 mb-3"> 
  <div class="post-slide">
      <div class="post-img">
        <?php the_post_thumbnail(); ?>
          <?php if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_author',true) == "1" ) { ?>
        <?php } ?>
      </div>
      <div class="post-review">
        <h4 class="post-title mb-0"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 4 ); ?></a></h4>
        <p class="post-description mb-4"><?php $excerpt = get_the_excerpt(); echo esc_html(computer_repair_services_pro_string_limit_words($excerpt,29)); ?></p>
        <div class="post_btn">
          <a class="postbtn" href="<?php the_permalink(); ?>"><?php echo esc_html('Read more');  ?></a>
       </div>
      </div>
  </div>
</div>