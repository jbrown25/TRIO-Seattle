<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trio-v1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>
		#masthead {
			background-image: url("<?php header_image(); ?>");
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site <?php echo is_front_page() ? 'front_page' : '' ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'trio-v1' ); ?></a>
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">TRIO Seattle</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <?php
	          if(has_nav_menu('main-menu')){
	          	wp_nav_menu(array(
	          		'theme_location' => 'main-menu',
	          		'container_class' => 'nav_container_class',
	          		'menu_class' => 'nav navbar-nav',
	          		'menu_id' => 'primary_nav',
	          		'container' => 'ul'
	          	));
	          }else{
	          	wp_nav_menu(array(
	          		'container_class' => 'nav_container_class',
	          		'menu_class' => 'nav navbar-nav',
	          		'menu_id' => 'primary_nav',
	          		'container' => 'ul'
	          	));
	          }
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 <?php echo !is_front_page() ? 'col-md-offset-3' : '' ?>">
					<div class="masthead_content">
						<h1><?php bloginfo('name'); ?></h1>
						<?php if(is_front_page()) : ?>
								<p class="masthead_sub_text"><?php echo get_theme_mod('trio_front_page_text'); ?></p>
						<?php endif; ?>
						<a href="<?php echo get_theme_mod('trio_header_button_link'); ?>" class="btn btn-primary btn-lg" role="button" id="header_button_link">DONATE TO TRIO</a>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
