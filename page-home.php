<?php
	/**
	 * Template Name: Home
	 *
	 * The template for the home page.
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
			<section class="container-overview col-9">
				<?php
					// The main content for the front page.
					if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
				?>
			</section>
			<section class="col-3 container-sidebar">
				<h2>Sponsors</h2>
				<div class="sidebar">
					<?php
						$sponsors_args = array(
							'post_type' => 'sponsors',
							'orderby'   => 'date',
							'order'     => 'DESC',
						);

						$sponsors = new WP_Query($sponsors_args);

						// Make sure we have sponsors to list.
						if ($sponsors->have_posts()) :
					?>
						<ul>
							<?php
								// List 'em
								while ($sponsors->have_posts()) : $sponsors->the_post();
							?>
								<li>
									<?php
										// The 'sponsor' custom post type uses a 'partner_url' custom field to collect the link to the partner's website.
										// Let's grab the value of that field and create the link.
										$sponsor_url = get_post_custom_values('partner_url');
										foreach ($sponsor_url as $key => $value) {
									?>
									<a class="external" href="<?php echo $value; ?>">
										<?php
											// We know the sponsors will have a featured image, so we'll get right to it.
											// Use the 'thumbnail' name to get a consistent width
											the_post_thumbnail('thumbnail');
										?>
									</a>
									<?php } ?>
								</li>
							<?php
								endwhile;
							?>
						</ul>
					<?php
						else:
					?>
						<p>Sponsorship opportunities available.</p>
					<?php
						endif;
					?>
				</div>
			</section>
			<section class="container-listing clearfix">
				<div class="listing">
					<h2>News</h2>
					<?php
						$feed_args = array (
							'post_type'      => 'post',
							'orderby'        => 'date',
							'order'          => 'DESC',
							'posts_per_page' => 5);

						$feed = new WP_Query($feed_args);

						while ($feed->have_posts()) : $feed->the_post();
					?>

							<div class="news-item">

								<?php
									// If the post has a thumbnail, add it to the left.
									if (has_post_thumbnail()) :
								?>
									<div class="col-3 thumbnail-listing">
										<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
									</div>
									<div class="col-9">
										<h3 class="heading-entry"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>

										<?php the_excerpt(); ?>
									</div>
								<?php
									// If it doesn't have a thumbnail, don't sweat it.
									else :
								?>
									<h3 class="heading-entry"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
								<?php
										the_excerpt();
									endif;
								?>
							</div>

					<?php
						endwhile;
					?>
				</div>
			</section>
		</div>
	</main>

<?php
	get_footer();
	wp_footer();
?>
