<?php
$footer_section = get_theme_mod( 'computer_repair_services_pro_footer_widgets_enable');
if ( 'Disable' == $footer_section ) {
	return;
}

if( get_theme_mod('computer_repair_services_pro_footer_widget_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_footer_widget_bgcolor')).';';
}elseif( get_theme_mod('computer_repair_services_pro_footer_widget_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_footer_widget_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
	<div id="footer">	
		<div id="footer_box" class="darkbox" style="<?php echo esc_attr($about_backg); ?>">
			<div class="container ">
				<?php
				$count = 1;
				if ( is_active_sidebar('footer-1') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-2') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-3') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-4') != '' ) {
					$count++;
				}
				if ( $count == 1 ) {
					$colmd = 'col-lg-12 col-sm-6';
				} elseif ( $count == 2 ) {
					$colmd = 'col-lg-6 col-sm-6';
				} elseif ( $count == 3 ){
					$colmd = 'col-lg-4 col-sm-6';
				}else{
					$colmd = 'col-lg-3 col-sm-6';
				}
				?>
				<?php
				if ( is_active_sidebar('footer-1') != '' || is_active_sidebar('footer-2') != '' || is_active_sidebar('footer-3') != '' || is_active_sidebar('footer-4') != '' ) {
				?>
					<div class="row py-5">
						<div class="<?php if ( is_active_sidebar('footer-1') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> footer1 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-2') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> footer2 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-3') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> footer3 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-4') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> footer4 wow zoomInUp delay-2000 animated" data-wow-duration="2s">
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
					</div>
				<?php } ?>
			</div><!-- .container -->
			<?php get_template_part( 'template-parts/footer/copyright' ); ?>
		</div><!-- #footer_box -->
	</div>