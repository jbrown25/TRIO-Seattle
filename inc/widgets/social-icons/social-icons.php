<?php

/*
Widget Name: Trio Social Icons
Description: Social icons
Author: Justin
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class Social_Icons extends SiteOrigin_Widget {

	function __construct() {
	    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

	    //Call the parent constructor with the required arguments.
	    parent::__construct(
	        // The unique id for your widget.
	        'social-icons',

	        // The name of the widget for display purposes.
	        __('Social Icons', 'trio-v1'),

	        // The $widget_options array, which is passed through to WP_Widget.
	        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
	        array(
	            'description' => __('Social links', 'trio-v1'),
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
		    'facebook_link' => array(
		        'type' => 'text',
		        'label' => __('Facebook', 'trio-v1'),
		        'default' => ''
		    ),
		    'instagram_link' => array(
		    	'type' => 'text',
		    	'label' => __('Instagram', 'trio-v1'),
		    	'default' => ''
		    ),
		    'twitter_link' => array(
		    	'type' => 'text',
		    	'label' => __('Twitter', 'trio-v1'),
		    	'default' => ''
		    )
		);
	}
}

siteorigin_widget_register('social-icons', __FILE__, 'Social_Icons');