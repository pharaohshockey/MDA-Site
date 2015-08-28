<?php
	// Create the function that contains the menu code
	function pgg_options_menu () {
		add_options_page('Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'pgg_options');
	}

	// Create the HTML output for the options page
	function pgg_options () {
		// Make sure the current user has permission to edit the options
		if (!current_user_can('manage_options')) {
			wp_die(__('You do not have sufficient permissions to access this page!'));
		} else {
			// HTML for the options form
			?>
				<div class="wrap">
					<h2><?php bloginfo('name'); ?> Options</h2>
					<form method="post" action="options.php">
						<?php 
							settings_fields('pgg_option_group');
							do_settings_sections('pgg_option_group');
							submit_button();
						?>
					</form>
				</div>
			<?php
		} // /HTML options form
	}

	// Register the function with the admin_menu hook
	add_action('admin_menu', 'pgg_options_menu');
	add_action('admin_init', 'pgg_register_settings');

	// Register each option
	function pgg_register_settings () {
		add_settings_section('pgg_option_group', 'Theme Options', 'pgg_upload_logo', 'pgg_option_group');
	}

	function pgg_upload_logo () {
		$options = get_option('pgg_option_group');
		echo '<input id="up-pgg-logo" name="pgg_option_group[pgg_logo" type="file">';
	}
?>
