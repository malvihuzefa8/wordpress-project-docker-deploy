<div id="topbar" class="py-2">
	<div class="container">
		<div class="row">
		   <div class="col-lg-3 col-md-3 col-sm-12 align-self-center">
		     <div class="logo">
		        <?php 
		          if( has_custom_logo() ){  computer_repair_services_pro_the_custom_logo();  }

		          if( get_theme_mod('computer_repair_services_pro_display_title', true) != ''){ ?>
		            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>
		          <?php }

		          if( get_theme_mod('computer_repair_services_pro_display_tagline', true) != ''){ 
		            $description = get_bloginfo( 'description', 'display' );
		            if ( $description || is_customize_preview() ) : ?>
		              <p><?php echo esc_html($description); ?></p>
		          <?php endif; }
		        ?>
		     </div> 
		   </div>
		   <div class="col-lg-9 col-md-9 col-sm-12 top_contact align-self-center">
		   	<div class="row">
			   	<div class="col-lg-6 col-md-5 col-sm-4 align-self-center">
			   	  <?php if( get_theme_mod('computer_repair_services_pro_topbar_location_heading', true) != '' || get_theme_mod('computer_repair_services_pro_topbar_location_text', true) != ''){ ?> 
				    <p class="location mb-0">
				    <i class="<?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_location_icon'));?>" aria-hidden="true"></i>
				    <span>
				    <?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_location_heading'));?>
				    </span>
		            <?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_location_text'));?>
				    </p>
				  <?php }?>
		        </div>
		   
		   <div class="col-lg-3 col-md-4 col-sm-4 align-self-center">
		   	<?php if( get_theme_mod('computer_repair_services_pro_topbar_email_heading', true) != '' || get_theme_mod('computer_repair_services_pro_topbar_email_text', true) != ''){ ?> 
		         <p class="email mb-0">
			   	<i class="<?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_email_icon'));?>" aria-hidden="true"></i>
			   	<span>
			   		<?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_email_heading'));?>
			   	</span>
	            <?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_email_text'));?>
			   </p>
		         <?php }?>
		   </div>
		   <div class="col-lg-3 col-md-3 col-sm-4 align-self-center">
		     <p class="mb-0 social-icon"><?php echo esc_html(get_theme_mod('computer_repair_services_pro_topbar_social_text'));?>
	          <span> 
	          	<?php get_template_part('template-parts/home/social-icons');  ?>
	          </span>
	         </p>
		   </div>
		   </div>
		  </div>

		</div>	
	</div>
</div>
<hr>