<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trio-v1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<!--<?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
							<?php dynamic_sidebar( 'footer_column_1' ); ?>
					<?php endif; ?>-->
					<?php
	          // if(has_nav_menu('main-menu')){
	          // 	wp_nav_menu(array(
	          // 		'theme_location' => 'main-menu',
	          // 		'container_class' => 'nav_container_class',
	          // 		'menu_class' => 'nav navbar-nav',
	          // 		'menu_id' => 'primary_nav',
	          // 		'container' => 'ul',
	          // 		'depth' => 2
	          // 	));
	          // }else{
	          // 	wp_nav_menu(array(
	          // 		'container_class' => 'nav_container_class',
	          // 		'menu_class' => 'nav navbar-nav',
	          // 		'menu_id' => 'primary_nav',
	          // 		'container' => 'ul',
	          // 		'depth' => 2
	          // 	));
	          // }
					if(has_nav_menu('footer-menu')){
						wp_nav_menu(array(
							'theme_location' => 'footer-menu',
							'container_class' => 'footer_menu'
						));
					}
					?>
				</div>
				<div class="col-sm-4">
					<?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
						<?php dynamic_sidebar( 'footer_column_1' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-4">
					<?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
						<?php dynamic_sidebar( 'footer_column_2' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="copyright-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'trio-v1' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'trio-v1' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'trio-v1' ), 'trio-v1', '<a href="http://underscores.me/">Underscores.me</a>' );
							?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
