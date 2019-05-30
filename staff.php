<?php
/**
 * The template for displaying staff
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trio-v1
 */

get_header();
?>

	<div id="primary" class="content-area single_post">
		<main id="main" class="site-main">
			<?php trio_breadcrumbs(); ?>

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
