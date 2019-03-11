<?php

/*
Widget Name: News Widget
Description: Should show a excerpt from news post. Should be able to select from posts.
Author: Justin
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class News_Widget extends SiteOrigin_Widget {

	function __construct() {
	    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

	    //Call the parent constructor with the required arguments.
	    parent::__construct(
	        // The unique id for your widget.
	        'news-widget',

	        // The name of the widget for display purposes.
	        __('News Widget', 'trio-v1'),

	        // The $widget_options array, which is passed through to WP_Widget.
	        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
	        array(
	            'description' => __('News widget', 'trio-v1'),
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
		$news_posts = get_posts(array(
			'numberposts' => -1,
			'post_type' => 'post'
		));

		$select_options = array();

		foreach($news_posts as $this_post){
			$post_id = $this_post->ID;
			$post_title = $this_post->post_title;
			$select_options[$post_id] = __($post_title, 'trio-v1');
		}

		return array(
		    'news_post_id' => array(
		        'type' => 'select',
		        'label' => __( 'Select a news post for the front page', 'trio-v1' ),
		        'default' => null,
		        'options' => $select_options
		    )
		);
	}
}

siteorigin_widget_register('news-widget', __FILE__, 'News_Widget');