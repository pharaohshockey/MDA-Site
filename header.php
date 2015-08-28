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
