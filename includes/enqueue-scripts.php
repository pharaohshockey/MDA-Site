<?php
	/*
		Enqueue scripts and styles.
	*/

	function pgg_scripts () {
		// Custom fonts
		wp_enqueue_style('pgg-fonts', pgg_fonts_url(), array(), null);

		// Main stylesheet
		wp_register_style('pgg-css', get_template_directory_uri() . '/lib/css/style.css', array(), '20150813', 'all');
		wp_enqueue_style('pgg-css');

		// JavaScript stuff
		wp_enqueue_script('fitvids', get_template_directory_uri() . '/lib/js/vendor/fitvids.min.js', array('jquery'), '', true);
		wp_enqueue_script('pgg-js', get_template_directory_uri() . '/lib/js/pharaohs.js', array('jquery'), '', true);
	}

	add_action('wp_enqueue_scripts', 'pgg_scripts');
?>
