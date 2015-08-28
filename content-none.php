<?php
	/**
	 * Display a message when posts cannot be found
	 *
	 * @package WordPress
	 * @subpackage Pharaoh_A_Go_Go
	 * @since Pharaoh A-Go-Go 1.0
	*/
?>

	<header class="header-entry">
		<h2 class="heading-entry"><?php _e('Nothing Found', 'pgg'); ?></h2>
	</header> <!-- /header-entry -->

	<div class="container-entry">
		<?php if (is_home() && current_user_can('publish_posts')) : ?>
			<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started!</a>.', 'pgg'), esc_url(admin_url('post-new.php'))); ?></p>
		
		<?php elseif (is_search()) : ?>
			<p><?php _e('Sorry, but we couldn\'t find a match for your search terms. You\'re welcome to try again with different keywords.', 'pgg'); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>
			<p><?php _e('Well, this is embarrassing. It seems we can\'t find what you\'re looking for.'); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div> <!-- /container-entry -->
