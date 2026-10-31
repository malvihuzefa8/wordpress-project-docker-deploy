<?php
/**
 * The Template for displaying all single posts.
 *
 * @package computer-repair-services-pro
 */
get_header();
get_template_part( 'template-parts/banner' );

$postcol1="";
$postcol2="";

if(get_theme_mod('computer_repair_services_pro_post_general_settings_post_sidebar',true)=='1')
{
	$postcol1="col-lg-8 col-md-7";
	$postcol2="col-lg-4 col-md-5";
	
}else
{
	$postcol1="col-lg-12 col-md-12";
	$postcol2="";
}

?>
<div class="container">
	<div class="row">
		<div class="content_page <?php echo esc_html($postcol1); ?>">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="feature-box">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<div class="metabox mt-4">
					<?php if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_date',true) == "1" ) { ?>
					<span class="entry-date pe-3">
						<i class="far fa-calendar-alt pe-2"></i>
						<?php echo esc_html( get_the_date() ); ?>
					</span>
					<?php } ?>
					
					<?php if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_author',true) == "1" ) { ?>
					<span class="entry-author pe-3"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
						<i class="fas fa-user pe-2"></i>
						<?php the_author(); ?></a></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_comments',true) == "1" ) { ?>
					<span class="entry-comments">
						<i class="far fa-comments pe-2"></i>
						<?php comments_number( __( '0 Comments','computer-repair-services-pro' ) ); ?></span>
					<?php } ?>
				</div>
				<div class="single-post-content mt-3">
					<?php the_content();?>
				</div>
				<?php if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_share',true) == "1" ) { ?>
				<?php do_action('computer_repair_services_pro_before_blog_sharing'); ?>
				<div class="share_icon row p-0 m-0"> 
                    <p class="social_share col-md-12 p-0 mb-0">
                    	<?php if(get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_googleplus',true)==1 || get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_twitter',true)==1){ ?>
                    		<b class="me-2"><?php _e('Share:','computer-repair-services-pro'); ?></b>

                    	<?php } if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
                    		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    	<?php } if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
                    		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    	<?php }if ( get_theme_mod('computer_repair_services_pro_post_general_settings_post_share_twitter',true) == "1" ) { ?>
                    		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    	<?php } ?>
                	</p>
                    <p class="col-md-6 post_tag">
                    	<?php
                        if( $tags = get_the_tags() ) {
                            echo '<span class="meta-sep"></span>';
                            foreach( $tags as $tag ) {
                              $sep = ( $tag === end( $tags ) ) ? '' : ' ';
                              echo '<a href="' . esc_url(get_term_link( $tag, $tag->taxonomy )) . '">#' . esc_html($tag->name) . '</a>' . esc_html($sep);
                            }
	                    } ?>
	                </p>
                </div>
                <?php } ?>
                <?php if(get_theme_mod('computer_repair_services_pro_post_general_settings_post_category',true)=="1"){ ?>
	                <div class="post_ctg font-weight-bold"><span><?php _e('Categories: ','computer-repair-services-pro'); ?></span><?php the_category();?></div>
		
					<?php } ?>

				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}?>
				<div class="clearfix"></div>
			<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'computer-repair-services-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'computer-repair-services-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'computer-repair-services-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'computer-repair-services-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if(get_theme_mod('computer_repair_services_pro_post_general_settings_post_sidebar',true)=='1'){ ?>
			<div class="<?php echo esc_html($postcol2); ?>" id="sidebar">
	          <?php dynamic_sidebar('sidebar-1'); ?>
	        </div>
	    <?php } ?>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>