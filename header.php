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
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
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

        <header class="header-main">
            <div class="container flex flex-row">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/lib/img/logo.png" alt="Pharaohs Hockey logo" width="125" height="109">
                </a>
                <nav class="nav-primary">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <h1 class="heading-site-title"><?php bloginfo('name'); ?></h1>
                    </a>

                    <label for="nav-mobile" class="nav-mobile">Menu</label>
                    <input type="checkbox" id="nav-mobile" class="nav-mobile-toggle">

                    <?php
                        // Primary nav
                        wp_nav_menu(array(
                            'menu_class'     => 'nav nav-primary-list',
                            'theme-location' => 'primray',
                        ));
                    ?>

                </nav>
            </div>
        </header>
