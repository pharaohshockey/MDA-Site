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

	<main id="main-content">
    <?php
        // If the page has a featured image, add the hero to the page.
        if (has_post_thumbnail()) {
    ?>
        <section class="hero home-hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    		<div class="container overview">
				<?php
					// The main content for the front page.
					if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
				?>
            </div>
        </section>
    <?php
        } else {
    ?>
        <section class="container-overview">
            <?php
                // The main content for the front page.
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </section>
    <?php
        }
    ?>
        <section class="container container-listing">
            <div class="listing">
                <h2>News</h2>
                <?php
                    $feed_args = array (
                        'post_type'      => 'post',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'posts_per_page' => 3);

                    $feed = new WP_Query($feed_args);

                    while ($feed->have_posts()) : $feed->the_post();
                ?>

                        <div class="news-item">
                            <h3 class="heading-entry"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                            <?php
                                the_excerpt();
                            ?>
                        </div>

                <?php
                    endwhile;
                ?>
            </div>
        </section>
		<section class="stripe">
            <div class="container">
    			<h2>Sponsors</h2>
    			<div class="flex">
    				<?php
    					$sponsors_args = array(
    						'post_type' => 'sponsors',
    						'orderby'   => 'date',
    						'order'     => 'DESC',
    					);

    					$sponsors = new WP_Query($sponsors_args);

    					// Make sure we have sponsors to list.
    					if ($sponsors->have_posts()) {
    				?>
    						<?php
    							// List 'em
    							while ($sponsors->have_posts()) : $sponsors->the_post();
    						?>
                                <div class="logo">
    								<?php
    									// The 'sponsor' custom post type uses a 'partner_url' custom field to collect the link to the partner's website.
    									// Let's grab the value of that field and create the link.
    									$sponsor_url = get_post_custom_values('partner_url');
    									foreach ($sponsor_url as $sponsor => $url) {
    								?>
    								<a class="external" href="<?php echo $url; ?>">
    									<?php
    										// We know the sponsors will have a featured image, so we'll get right to it.
    										the_post_thumbnail('thumbnail');
    									?>
    								</a>
    								<?php } ?>
                                </div>
    						<?php
    							endwhile;
    						?>
    				<?php
    					} else {
    				?>
    					<p>Sponsorship opportunities available.</p>
    				<?php
    					}
    				?>
    			</div>
            </div>
		</section>
	</main>

<?php
	get_footer();
	wp_footer();
?>
