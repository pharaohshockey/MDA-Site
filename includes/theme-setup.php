<?php
	/*
		Adds support for the theme's features.
	*/

	if (!function_exists('pgg_setup')) {
		function pgg_setup () {

			// Make theme available for translation
			load_theme_textdomain('pgg', get_template_directory() . '/languages');

			// Add default posts and comments RSS feed links to head.
			add_theme_support('automatic-feed-links');

			// Let WordPress manage the document title.
			add_theme_support('title-tag');

			// Enable Post Thumbnail support
			add_theme_support('post-thumbnails');
			include 'post-thumbnail-options.php';

			// Menus
			register_nav_menus(array(
				'primary' => __('Primary Menu',      'pgg'),
				'social'  => __('Social Links Menu', 'pgg'),
			));

			// HTML5 support
			add_theme_support('html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			));

			// Post Formats
			add_theme_support('post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat'
			));
		}
	}
	
	add_action('after_setup_theme', 'pgg_setup');
?>
