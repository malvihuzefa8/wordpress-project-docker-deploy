<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package computer-repair-services-pro
 */
get_header(); ?>
<div class="container">
	<?php the_archive_title( '<h1>', '</h1>' ); ?>
</div>
<div class="feature-box">
	<div class="container">
		<div class="col-md-12">
			<div class="bradcrumbs">
				<?php computer_repair_services_pro_the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation_pagination">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'computer-repair-services-pro' ),
			                'next_text'  => __( 'Next page', 'computer-repair-services-pro' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'computer-repair-services-pro' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>
		<div id="sidebar" class="col-lg-4 col-md-12">
			<?php get_sidebar( 'page' ); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>