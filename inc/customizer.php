<?php
/**
 * trio-v1 Theme Customizer
 *
 * @package trio-v1
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function trio_v1_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'trio_v1_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'trio_v1_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_section(
		'trio_masthead_options',
		array(
			'title' => __('TRIO Masthead Options', 'trio-v1'),
			'priority' => 1
		)
	);

	$wp_customize->add_setting(
		'trio_front_page_text',
		array(
			'default' => 'Masthead Text',
			'transport' => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'trio_front_page_text',
		array(
			'section' => 'trio_masthead_options',
			'label' => __('Masthead Text', 'trio-v1'),
			'description' => __('Text that appears under the main title, but only on the front page.'),
			'type' => 'textarea'
		)
	);

	$wp_customize->add_setting(
		'trio_header_button_link',
		array(
			'default' => 'http://trioseattle.org',
			'transport' => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'trio_header_button_link',
		array(
			'section' => 'trio_masthead_options',
			'label' => __('Masthead Button Link', 'trio-v1'),
			'description' => __('Header button link. Example: if donate button, enter full address of the donate page.'),
			'type' => 'text'
		)
	);
}
add_action( 'customize_register', 'trio_v1_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function trio_v1_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function trio_v1_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function trio_v1_customize_preview_js() {
	wp_enqueue_script( 'trio-v1-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'trio_v1_customize_preview_js' );
