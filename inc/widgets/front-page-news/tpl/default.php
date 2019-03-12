<?php
/**
 * @var array $instance
 * @var number $news_post_id
 */
?>

<?php
	$post_id = $instance['news_post_id'];
	$front_page_post = get_post($post_id);
	$image_url = get_the_post_thumbnail_url($front_page_post);
?>

<section class="news_article_widget">
	<div class="row">
		<div class="col-sm-7">
			<?php if($image_url) : ?>
				<img src="<?php echo $image_url; ?>" alt="news image" class="news_img_phone" />
			<?php endif; ?>
			<h2>Recent News</h2>
			<p class="fp_section_subheading"><?php echo $front_page_post->post_title; ?></p>
			<p>
				<?php
					if ( empty( $front_page_post->post_excerpt ) ) {
					    echo wp_kses_post( wp_trim_words( $front_page_post->post_content, 50 ) );
					} else {
					    echo wp_kses_post( $front_page_post->post_excerpt ); 
					}
				?>
			</p>
			<a class="btn btn-primary" href="<?php echo get_permalink($post_id); ?>">CONTINUE READING</a>
		</div>
		<div class="col-sm-5">
			<?php if($image_url) : ?>
				<img src="<?php echo $image_url; ?>" alt="news image" class="news_img_desktop" />
			<?php endif; ?>
		</div>
	</div>
</section>