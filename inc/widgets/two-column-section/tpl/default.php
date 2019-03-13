<?php
/**
 * TWO COLUMN SECTION
 * @var array $instance
 * @var string $section_heading
 * @var editor/string $section_content
 * @var string $button_text
 * @var string $button_link
 * @var int $section_image
 * @var string $section_align
 * @var string $section_image_size
 */
?>

<?php
	
	//image
	$image_size = empty($instance["section_image_size"]) ? "full" : $instance["section_image_size"];
	$img_url = wp_get_attachment_image_url($instance["section_image"], $image_size);

	//heading, link, content
	$heading = $instance["section_heading"];
	$section_content = $instance["section_content"];
	$button_text = $instance["button_text"];
	$button_link = $instance["button_link"];
?>

<section class="two_column_section">
	<div class="row">
	<?php if($instance["section_align"] === "image_left"): ?>
		<div class="col-sm-5">
			<img src="<?php echo $img_url ?>" alt="<?php echo $heading; ?> image" class="two_section_image_desktop" />
		</div>
		<div class="col-sm-7">
			<img src="<?php echo $img_url ?>" alt="<?php echo $heading; ?> image" class="two_section_image_phone" />
			<h2><?php echo $instance["section_heading"]; ?></h2>
			<p><?php echo $section_content; ?></p>
			<a class="btn btn-primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
		</div>
	<?php else: ?>
		<div class="col-sm-7">
			<img src="<?php echo $img_url ?>" alt="<?php echo $heading; ?> image" class="two_section_image_phone" />
			<h2><?php echo $instance["section_heading"]; ?></h2>
			<p><?php echo $section_content; ?></p>
			<a class="btn btn-primary" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
		</div>
		<div class="col-sm-5">
			<img src="<?php echo $img_url ?>" alt="<?php echo $heading; ?> image" class="two_section_image_desktop" />
		</div>
	<?php endif; ?>
	</div>
</section>