<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trio-v1
 */

?>

<!--<div class="news_post">
	<img src="img/face-placeholder.png" class="post_thumb" alt="" />
	<div class="news_post_content">
		<h3>Article Title</h3>
		<p class="post-meta"><span class="post-author">Posted by: <a href="#">Justin</a></span> | <span class="post-date">November 12, 2018</span> | <span class="post-categories"><a href="#">Category 1</a>, <a href="#">Category 2</a></span></p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum placerat dolor sed ornare. Duis mi lacus, ultrices vel porttitor et, porttitor eget augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent sed libero in risus mollis tincidunt eu eget mi.</p>
		<a href="#" class="btn btn-primary post_link">CONTINUE READING</a>
	</div>
</div>-->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php trio_v1_post_thumbnail(); ?>
	<div class="news_post_content">
		<header class="entry-header">
			<a href="<?php echo get_post_permalink(); ?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>
			<p class="post-meta">
				<span class="post-author">Posted by: <?php the_author_posts_link(); ?></span> | <span class="post-date"><?php echo get_the_date(); ?></span> | <span class="post-categories"><?php the_category(', '); ?></span>
			</p>
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
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<a href="<?php echo get_post_permalink(); ?>" class="btn btn-primary post_link">CONTINUE READING</a>
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
			</footer><!-- .entry-footer -->
	</div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
