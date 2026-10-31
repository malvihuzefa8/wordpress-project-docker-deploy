<?php
if ( get_theme_mod( 'computer_repair_services_pro_footer_copy_bgcolor' ) ) {
	$about_backg = 'background-color:' . esc_attr( get_theme_mod( 'computer_repair_services_pro_footer_copy_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'computer_repair_services_pro_footer_copy_bgimage' ) ) {
	$about_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'computer_repair_services_pro_footer_copy_bgimage' ) ) . '\')';
} else {
	$about_backg = '';
}
?>
<div class="copyright" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="copy-text wow slideInDown delay-1000 animated" data-wow-duration="2s">
			<div class="col-lg-12 col-md-12">
				<p><?php echo esc_html( get_theme_mod( 'computer_repair_services_pro_footer_copy' ) ); ?><span class="credit_link"><?php echo esc_html( computer_repair_services_pro_credit_link() ); ?></span></p>
			</div>
			<a href="javascript:" id="return-to-top"></a>
		</div>
	</div>
</div>