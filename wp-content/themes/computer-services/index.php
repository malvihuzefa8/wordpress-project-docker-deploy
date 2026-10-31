<?php
/**
 * The template for displaying index page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package computer-repair-services-pro
 */
get_header();
?>
<?php do_action( 'computer_repair_services_pro_after_defaulttitle' ); ?>
<div class="post-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
				</div>
			  <div class="navigation_pagination">
				<?php // Previous/next page navigation.
				  the_posts_pagination( array(
					  'prev_text'          => __( 'Previous page', 'computer-repair-services-pro' ),
					  'next_text'          => __( 'Next page', 'computer-repair-services-pro' ),
					  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'computer-repair-services-pro' ) . ' </span>',
				  )); ?>
			  </div>
			</div>
			<div class="col-md-4"><?php get_sidebar( 'sidebar-1' ); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>