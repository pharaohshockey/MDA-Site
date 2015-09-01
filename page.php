<?php
	/**
	 * The template for pages
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
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		<?php
			endif;
		?>
		<div class="container">
			<section class="container-overview">
				<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
							if (!is_front_page()) :
								the_title('<h2 class="heading-entry">', '</h2>'); 
							endif;

							the_content();
						endwhile;
					endif;
				?>
			</section>
		</div>
	</main>

<?php
	get_footer();
	wp_footer();
?>