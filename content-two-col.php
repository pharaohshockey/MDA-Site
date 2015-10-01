<?php
	/**
	 * A two column layout.
	 * Used for Board Members and Team Members.
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
					?>
						<h3 class="heading-entry"><?php echo get_field('position_held'); ?></h3>
					<?php
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
				<div class="col-4">
					<?php
						if (has_post_thumbnail()) :
							the_post_thumbnail('',array('class'=>'img-responsive'));
						endif;
					?>
				</div>
				<div class="col-8">
					<?php
						the_content();
					?>
				</div>
			</div> <!-- /container-entry -->

			<footer class="footer-entry">
			</footer> <!-- /footer-entry -->
		</div>
	</article>
