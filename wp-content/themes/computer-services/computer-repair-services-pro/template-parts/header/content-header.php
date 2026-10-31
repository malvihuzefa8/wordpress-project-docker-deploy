<?php
/**
 * Template part for displaying header content
 *
 *
 */
?>
<?php
$computer_repair_services_pro_sticky_header = get_theme_mod('computer_repair_services_pro_sticky_header');
    $data_sticky = "true";
    if ($computer_repair_services_pro_sticky_header) {
    $data_sticky = "false";
    }
?>
<div id="header_navigation" data-sticky="<?php echo esc_attr($data_sticky); ?>">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-4 col-sm-4 header-nav align-self-center">
          <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-8 col-12 phone align-self-center ">
          <?php if( get_theme_mod('computer_repair_services_pro_header_phone_text', true) != '' || get_theme_mod('computer_repair_services_pro_header_phone_number', true) != ''){ ?> 
            <p class="phone-icon mb-0">
            <i class="<?php echo esc_html(get_theme_mod('computer_repair_services_pro_header_phone_icon'));?>" aria-hidden="true"></i>
            <span>
            <?php echo esc_html(get_theme_mod('computer_repair_services_pro_header_phone_text'));?>
            </span>
                <?php echo esc_html(get_theme_mod('computer_repair_services_pro_header_phone_number'));?>
            </p>
          <?php }?>
        </div>   
      </div>
  </div>
</div>
