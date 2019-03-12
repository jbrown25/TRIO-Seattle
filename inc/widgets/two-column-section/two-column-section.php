<?php

/*
Widget Name: Two Column Section
Description: Column with heading, paragraph, and button, smaller column with image
Author: Justin
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class Two_Column_Section extends SiteOrigin_Widget {

	function __construct() {
	    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

	    //Call the parent constructor with the required arguments.
	    parent::__construct(
	        // The unique id for your widget.
	        'two-column-section',

	        // The name of the widget for display purposes.
	        __('Two Column Section', 'trio-v1'),

	        // The $widget_options array, which is passed through to WP_Widget.
	        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
	        array(
	            'description' => __('Section with two columns, link and image', 'trio-v1'),
	            'help'        => 'http://example.com/hello-world-widget-docs',
	        ),

	        //The $control_options array, which is passed through to WP_Widget
	        array(
	        ),

	        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
	      	false,

	        //The $base_folder path string.
	        plugin_dir_path(__FILE__)
	    );
	}
	
	function get_widget_form(){

		return array(
		    'section_heading' => array(
		        'type' => 'text',
		        'label' => __('Section heading', 'trio-v1'),
		        'default' => 'Default Heading'
		    ),
		    'section_content' => array(
		        'type' => 'tinymce',
		        'label' => __( 'Visually edit, richly.', 'trio-v1' ),
		        'default' => 'An example of a long message.</br>It is even possible to add a few html tags.</br><a href="siteorigin.com" target="_blank"">Links!</a>',
		        'rows' => 10,
		        'default_editor' => 'html',
		        'button_filters' => array(
		            'mce_buttons' => array( $this, 'filter_mce_buttons' ),
		            'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
		            'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
		            'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
		            'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
		        )
		    ),
		    'button_text' => array(
		        'type' => 'text',
		        'label' => __('Text for link button', 'trio-v1'),
		        'default' => 'CONTINUE READING'
		    ),
		    'button_link' => array(
		        'type' => 'text',
		        'label' => __('Button link, where you want to go. If page or post, find permalink and paste it here', 'trio-v1'),
		        'default' => 'http://trioseattle.org'
		    ),
		        'section_image' => array(
		        'type' => 'media',
		        'label' => __( 'Choose an image', 'trio-v1' ),
		        'choose' => __( 'Choose image', 'trio-v1' ),
		        'update' => __( 'Set image', 'trio-v1' ),
		        'library' => 'image',
		        'fallback' => true
		    ),
		    'section_image_size' => array(
		        'type' => 'image-size',
		        'label' => __( 'Size of section image', 'widget-form-fields-text-domain' ),
		    ),
		    'section_align' => array(
		        'type' => 'radio',
		        'label' => __( 'Choose alignment, image left or image right', 'widget-form-fields-text-domain' ),
		        'default' => 'image_left',
		        'options' => array(
		            'image_left' => __( 'Image Left', 'trio-v1' ),
		            'image_right' => __( 'Image Right', 'trio-v1' )
		        )
		    )
		);
	}
}

siteorigin_widget_register('two-column-section', __FILE__, 'Two_Column_Section');