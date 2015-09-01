<?php
	/**
	 * The main template file.
	 *
	 * @package WordPress
	 * @subpackage Pharaoh_A_Go_Go
	 * @since Pharaoh A-Go-Go 1.0
	*/

	get_header();
?>

	<main id="main-content" role="main">
		<?php
			if (has_post_thumbnail()) :
		?>
			<div class="hero">
				<div class="container container-hero">
					<?php the_post_thumbnail('hero'); ?>
				</div>
			</div>
		<?php
			endif;
		?>

		<div class="container">
			<section class="container-listing">
				<?php 
					if (have_posts()) : 
						// Is this the homepage, but not the front page?
						if (is_home() && !is_front_page()) :
				?>
					<header class="header-page">
						<h2 class="heading-page"><?php single_post_title(); ?></h2>
					</header>
				<?php
						endif; 

						// Start the loop
						while (have_posts()) : the_post();
							// Get the content
							get_template_part('content', get_post_format());
						endwhile;

					// If there's no content, include the 'No posts found' template.
					else:
						get_template_part('content', 'none');

					endif;
				?>
			</section>
		</div>
	</main>

<?php
	get_footer();
	wp_footer();
?>
