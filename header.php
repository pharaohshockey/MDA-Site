<?php
	/**
	 * Header template holds the `head` element and the `header` elements.
	 *
	 * @package WordPress
	 * @subpackage Pharaoh_A_Go_Go
	 * @since Pharaoh A-Go-Go 1.0
	*/
?>
<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-68345434-1', 'auto');
			ga('send', 'pageview');
		</script>

		<a class="access skip-link" href="#main-content">Skip to content</a>

		<header class="header-main" role="banner">
			<div class="container">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/lib/img/logo.png" alt="Pharaohs Hockey logo" width="125" height="109">
					<h1 class="heading-site-title"><?php bloginfo('name'); ?></h1>
				</a>
			</div>
			<nav class="nav-primary clearfix" role="navigation">
				<div class="container container-nav-primary">
					<?php
						// Primary nav
						wp_nav_menu(array(
							'menu_class'     => 'nav nav-primary-list',
							'theme-location' => 'primray',
						));
					?>
				</div>
			</nav>
		</header>
