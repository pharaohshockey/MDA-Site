<?php
	// Register all custom post types here.

	function pgg_post_types () {
		register_post_type('sponsors', array (
			'labels' => array (
				'name'          => __('Sponsors'),
				'singular_name' => __('Sponsor')
				),
			'description'   => 'A place to recognize our great sponsors!',
			'public'        => true,
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-nametag',
			'has_archive'   => true,
			'supports'      => array (
				'title',
				'editor',
				'thumbnail',
				'page-attributes',
				'custom-fields'
				)
			)
		);
	}

	add_action('init', 'pgg_post_types');
?>
