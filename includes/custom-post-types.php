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

		register_post_type('board', array (
			'labels' => array (
				'name'          => __('Board Members'),
				'singular_name' => __('Board Member')
				),
			'description'   => 'These folks keep the lights on.',
			'public'        => true,
			'menu_position' => 6,
			'menu_icon'     => 'dashicons-groups',
			'has_archive'   => true,
			'supports'      => array (
				'title',
				'editor',
				'thumbnail',
				'page-attributes',
				'custom-fields',
				'excerpt'
				)
			)
		);
	}

	add_action('init', 'pgg_post_types');
?>
