<?php
	// Post thumbnails
	if (!function_exists(ppg_post_thumbnail)) {
		function ppg_post_thumbnail() {
			if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
				return;
			}

			the_post_thumbnail();
		}
	}

	// Entry meta
	function pgg_entry_meta() {
		if (is_sticky() && is_home() && !is_paged()) {
			printf('<span class="sticky">%s</span>', __('Featured!', 'pgg'));
		}

		$format = get_post_format();

		if (current_theme_supports('post-formats', $format)) {
			printf('<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
				sprintf('<span class="access">%s</span>', _x('Format', 'Used before post format', 'pgg')),
				esc_url(get_post_format_link($format)),
				get_post_format_string($format));
		}

		if (in_array(get_post_type(), array('post', 'attachment'))) {
			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

			if (get_the_time('U') !== get_the_modified_time('U')) {
				$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
			}

			$time_string = sprintf($time_string, 
				esc_attr(get_the_date('c')),
				get_the_date(),
				esc_attr(get_the_modified_date('c')),
				get_the_modified_date()
			);

			printf('<span class="posted-on">Posted on <span class="access">%1$s</span><a href="%2$s" rel="bookmark">%3$s</a> by ' . get_the_author() . '</span>',
				_x('Posted on', 'Used before publish date', 'pgg'),
				esc_url(get_permalink()),
				$time_string
			);
		}
	}
?>
