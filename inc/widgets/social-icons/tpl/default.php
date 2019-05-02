<?php
/**
 * SOCIAL ICONS
 * @var array $instance
 * @var string $facebook_link
 * @var string $instagram_link
 * @var string $twitter_link
 */
?>

<?php
	//get links
	$facebook_link = $instance["facebook_link"];
	$instagram_link = $instance["instagram_link"];
	$twitter_link = $instance["twitter_link"];
?>

<div class="social_links_container">
	<ul class="social_links">
		<?php if($facebook_link): ?>
		<li>
			<a href="<?php echo 'https://facebook.com/' . $facebook_link; ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
		</li>
		<?php endif; ?>

		<?php if($instagram_link): ?>
		<li>
			<a href="<?php echo 'https://instagram.com/' . $instagram_link; ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
		</li>
		<?php endif; ?>

		<?php if($twitter_link): ?>
		<li>
			<a href="<?php echo 'https://twitter.com/' . $twitter_link; ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
		</li>
		<?php endif; ?>
	</ul>
</div>