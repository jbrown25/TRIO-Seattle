<?php
/**
 * Template part for displaying story content in story.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trio-v1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php trio_v1_post_thumbnail(); ?>
	<div class="story_content">
		<header class="entry-header text-center">
			<h2><?php the_title(); ?></h2>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			//display content
			if(is_archive() || is_home()){
				the_excerpt();
			}else{
				the_content();
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trio-v1' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
			<footer class="entry-footer">
				<a href="<?php echo get_post_permalink(); ?>" class="btn btn-primary post_link">CONTINUE READING</a>
				<?php if ( get_edit_post_link() ) : ?>
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'trio-v1' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
				<?php endif; ?>
			</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
