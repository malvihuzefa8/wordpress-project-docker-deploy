<?php
/**
 * Template Name: Contact
*/
if( get_theme_mod('computer_repair_services_pro_contact_bgcolor','') ) {
  $contact_backg = 'background-color:'.esc_attr(get_theme_mod('computer_repair_services_pro_contact_bgcolor','')).';';
}elseif( get_theme_mod('computer_repair_services_pro_contact_bgimage','') ){
  $contact_backg = 'background-image:url(\''.esc_url(get_theme_mod('computer_repair_services_pro_contact_bgimage')).'\')';
}else{
  $contact_backg = '';
}

get_header(); ?>
<?php do_action('computer_repair_services_pro_before_contact_title'); ?>
  <div id="contactus" class="contact-box" style="<?php echo esc_attr($contact_backg); ?>">
  	<div class="contact_bg">
      <div class="container">	
        <div class="contact_details text-center py-5">
  	      <?php if(get_theme_mod('computer_repair_services_pro_contact_heading')!=''){ ?>
	      <h3 class="contact_heading mb-0 pb-5"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contact_heading')); ?>
          </h3>
          <?php } ?>
          <div class="row">
		    <?php if ( get_theme_mod('computer_repair_services_pro_contactpage_email_title') != "" ) { ?>
			<div class="col-lg-4 col-md-4 col-sm-4">
			    <div class="contact-email">
					<div class="inner-cont">
						<i class="far fa-envelope-open"></i>
						<div class="c_content media-small pb-3">
							<span class="font-weight-bold"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_email_title')); ?></span>
							<p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_email_one')); ?></p>
							<p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_email_two')); ?></p>
						</div>
					</div>
				</div>
			</div>
				<?php }?>
				<?php if ( get_theme_mod('computer_repair_services_pro_address_title') != "" ) { ?>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="contact-address">
							<div class="inner-cont">
								<i class="fas fa-map-marker-alt"></i>
								<div class="c_content media-small pb-3">
									<span class="font-weight-bold "><?php echo esc_html(get_theme_mod('computer_repair_services_pro_address_title')); ?></span>
									<p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_address')); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php }?>		
				<?php if ( get_theme_mod('computer_repair_services_pro_contactpage_phone_title') != "" ) { ?>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="contact-phone">
							<div class="inner-cont">
								<i class="fas fa-phone"></i>
								<div class="c_content media-small pb-3">
					 				<span class="font-weight-bold "><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_phone_title')); ?></span>
					 				<p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_phone_one')); ?></p>
					 				<p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_contactpage_phone_two')); ?></p>
					 			</div>
					 		</div>
			 			</div>
			 		</div>
	 			<?php }?>
			</div> 	
        </div>
      </div>
    </div>
	    <div class="ccontact_form py-5">
	       <div class="container">
		       <div class="row pt-5">
		          <div class="col-lg-6 col-md-6">
		            <div class="contact_content">
			          <h3 class=""><?php echo esc_html(get_theme_mod('computer_repair_services_pro_ccform_heading')); ?>
			          </h3>
			           <p class="m-0"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_ccform_text')); ?></p>
		       	    </div>
		          </div>
		          <div class="col-lg-6 col-md-6">
		          	<?php if(get_theme_mod('computer_repair_services_pro_contact_page_shortcode')!=""){ ?>
		          		<div class="cont_form">
						  <?php echo do_shortcode(get_theme_mod('computer_repair_services_pro_contact_page_shortcode')); ?>
						</div>
					<?php } ?>	       	
		          </div>
		       </div>
	       </div>
	    </div>
				<?php do_action('computer_repair_services_pro_before_map'); ?>
					<div class="google-map p-0" id="map">
						<?php if ( get_theme_mod('computer_repair_services_pro_address_latitude',true) != "" && get_theme_mod('computer_repair_services_pro_address_longitude',true) != "" ) {?>
						  	<embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('computer_repair_services_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('computer_repair_services_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
						<?php }?>
					</div>
				<?php do_action('computer_repair_services_pro_after_map'); ?>
</div>

<?php do_action('computer_repair_services_pro_before_footer'); ?>

<?php get_footer(); ?>