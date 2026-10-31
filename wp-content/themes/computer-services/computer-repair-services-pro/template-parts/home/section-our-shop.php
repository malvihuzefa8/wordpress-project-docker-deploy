<?php 
$product_section_section = get_theme_mod( 'computer_repair_services_pro_product_section_enable' );
if ( 'Disable' == $product_section_section ) {
  return;
}
if( get_theme_mod('computer_repair_services_pro_product_section_bgcolor') ) {
  $product_section_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_product_section_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_product_section_bgimage') ){
  $product_section_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_product_section_bgimage')).'\')';
}else{
  $product_section_backg = '';
}

?>
<?php if ( class_exists( 'WooCommerce' ) ) { ?>
<section id="shop" class="py-5"style="<?php echo esc_attr($product_section_backg); ?>">
  <div class="container">
    <div class="product_section_text text-center wow slideInDown delay-1000 animated" data-wow-duration="2s">
      <?php if(get_theme_mod('computer_repair_services_pro_product_section_main_heading')!=''){ ?>
         <h3 class="main_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_product_section_main_heading')); ?>
         </h3>
        <?php } ?>
        <?php if(get_theme_mod('computer_repair_services_pro_product_section_main_title')!=''){ ?>
          <p class="main_sub_heading"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_product_section_main_title')); ?>
          </p>
      <?php } ?>
    </div>
    <div class="owl-carousel my-5">
      <?php 
        $args = array( 
          'post_type' => 'product',
          'posts_per_page' => get_theme_mod('computer_repair_services_pro_product_count'),
          'product_cat' => get_theme_mod('computer_repair_services_pro_products_category'),
          );
          $loop = new WP_Query( $args );
          $loop_index = 0;               
           while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="inner_trending align-self-center">               
        <div class="product-trending wow zoomInDown delay-3000 animated" data-wow-duration="2s">
          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_trending'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; ?> 
          <?php if( get_theme_mod('computer_repair_services_pro_product_hover_btn', true) != ''){ ?>
            <div class="trenhover_btn ">
              <a class="trnhover_btnn" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_product_hover_btn')); ?></a>
            </div>
            <?php } ?>             
        <div class="product-text ">  
              <div class="product-content m-0 p-0">
                <h5 class="product_heading p-0 m-0 "><?php the_title(); ?></h5>
              </div>
              <div class="custom-product-price p-0">
                  <?php echo $product->get_price_html(); ?>
              </div>
              <span class="wishlist"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></span>
        </div>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <?php if( get_theme_mod('computer_repair_services_pro_product_btn_url', true) != '' || get_theme_mod('computer_repair_services_pro_product_btn', true) != ''){ ?>
    <div class="product_btn mb-5 wow zoomInLeft delay-2000 animated" data-wow-duration="2s">
      <a class="trn_btnn" href="<?php echo esc_url(get_theme_mod('computer_repair_services_pro_product_btn_url')); ?>"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_product_btn')); ?></a>
    </div>
    <?php } ?>
  </div>
</section>
<?php }else{ ?>
  <?php if( current_user_can('administrator') ) { ?>
  <h5 class="woo-smg text-center">
    <?php esc_html_e('Install WooCommerce plugin to display this section','computer-repair-services-pro'); ?>
  </h5>
  <?php } ?>
<?php } ?>
