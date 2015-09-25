<?php
	// If the page or post has a featured image, and the hero hasn't been disabled, add the hero to the page.
	if (has_post_thumbnail() && !get_field('disable_hero')) :
?>
	<div class="hero">
		<div class="container container-hero">
			<?php the_post_thumbnail('hero'); ?>
		</div>
	</div>
<?php
	endif;
?>
