<?php
	/**
	 * Pharaoh A-Go-Go functions and definitions
	 *
	 * Set up the theme and provide helper functions, which are used in the theme
	 * as custom template tags. Others are attached to action and filter hooks in
	 * WordPress to change core functionality.
	 *
	 * @package WordPress
	 * @subpackage Pharaoh_A_Go_Go
	 * @since Pharaoh A-Go-Go 1.0
	*/

	include 'includes/theme-setup.php';
	include 'includes/fonts.php';
	include 'includes/enqueue-scripts.php';
	// include 'includes/theme-options.php';
	include 'includes/custom-post-types.php';

	require 'includes/template-tags.php';
?>
