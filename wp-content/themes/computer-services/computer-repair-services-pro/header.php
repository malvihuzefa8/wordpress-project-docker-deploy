<?php
/**
 * The Header for our theme.
 *
 * @package computer-repair-services-pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php if( get_theme_mod('computer_repair_services_pro_theme_loader') == 1 ) { ?>
    <div class="preloader">
      <div class="loading-dot"></div>
    </div>
  <?php }?>
  <header id="masthead" class="site-header">
          <?php
            get_template_part('template-parts/header/topbar');
            get_template_part('template-parts/header/content-header'); 
          ?>
  </header>