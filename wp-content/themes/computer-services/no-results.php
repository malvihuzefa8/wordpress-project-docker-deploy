<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package computer-repair-services-pro
 */
?>
<header>
	<h3 class="entry-title"><?php _e( 'Nothing Found', 'computer-repair-services-pro' ); ?></h3>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'computer-repair-services-pro' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'computer-repair-services-pro' ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php _e( 'Don\'t worry &hellip; it happens to the best of us.', 'computer-repair-services-pro' ); ?></p>
	<br />
	<div class="read-moresec">
		<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button hvr-sweep-to-right"><?php _e( 'Back to Home Page', 'computer-repair-services-pro' ); ?></a></div>
	</div>
<?php endif; ?>