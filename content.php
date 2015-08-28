<?php
	/**
	 * Default template for displaying content.
	 * Used for single/index/archive and search.
	 *
	 * @package WordPress
	 * @subpackage Pharaoh_A_Go_Go
	 * @since Pharaoh A-Go-Go 1.0
	*/
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div>
			<?php if (!is_front_page()) : ?>
				<header class="header-entry">
					<?php
						if (is_single()) :
							the_title('<h2 class="heading-entry">', '</h2>');
						else:
							
								// %s = name of current post
								the_title(sprintf('<h3 class="heading-entry"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
						endif;

						if (pgg_entry_meta() !== null) {
							pgg_entry_meta();
							echo "&nbsp;|&nbsp;";
							edit_post_link(__('Edit', 'pgg'));
						}
					?>
				</header> <!-- /header-entry -->
			<?php endif; ?>
			<div class="container-entry">
				<?php
					the_content(sprintf(
						__('Continue reading %s', 'pgg'),
						the_title('<span class="access">', '</span>', false)
					));

					wp_link_pages(array (
						'before'      => '<ul class="nav nav-page-links">',
						'after'       => '</ul>',
						'link_before' => '',
						'link_after'  => '',
						'pagelink'    => '<span class="access">' . __('Page', 'pgg') . '</span>',
						'separator'   => ''
					));
				?>
			</div> <!-- /container-entry -->

			<footer class="footer-entry">
			</footer> <!-- /footer-entry -->
		</div>
	</article>
