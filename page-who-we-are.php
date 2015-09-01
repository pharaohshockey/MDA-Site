<?php
	/**
	 * Template Name: Who We Are
	 *
	 * The template for the Who We Are page displays posts with a post-type of "Board"
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
			<section class="container-listing">
				<?php
					// Let's get the posts in 'board' and order them by menu_order
					$args          = array(
										'post_type' => 'board',
										'order'     => 'ASC',
										'orderby'   => 'menu_order');
					$board_members = new WP_Query($args);

					// Get custom "position_held" field values
					function get_position_held () {
						$position_value = get_post_custom_values('position_held');
						foreach ($position_value as $key => $value) {
							echo "$value";
						}
					}

					if ($board_members->have_posts()) :
				?>

					<h3 class="heading-entry">Board of Directors</h3>
					<ul class="listing-cards">

					<?php
						while ($board_members->have_posts()) : $board_members->the_post();
					?>
						<li class="container-card">
							<?php if (has_post_thumbnail()) : ?>
								<div class="card with-img">
									<?php
										the_post_thumbnail('medium');
									?>
									<div class="details">
										<h4>
											<?php the_title(); ?>
											<span class="position">
												<?php 
													get_position_held();
												?>
											</span>
										</h4>
										<?php the_excerpt(); ?>
									</div>
								</div>
							<?php else : ?>
								<div class="card">
									<h4>
										<?php the_title(); ?>
										<span class="position">
											<?php 
												get_position_held();
											?>
										</span>
									</h4>
									<?php the_excerpt(); ?>
								</div>
							<?php endif; ?>
						</li>
					<?php 
						endwhile; // We're done with the board
					?>
				</ul> <!-- /list of board members -->
				<?php
					endif;
				?>
			</section>
		</div>
	</main>

<?php
	get_footer();
	wp_footer();
?>
