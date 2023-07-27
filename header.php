<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>
        <?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <div class="super_container">
        <header id="header" class="header">
            <div class="header_content">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_nav_container_outer d-flex flex-row align-items-end justify-content-center trans_400">
                                <nav class="main_nav">
                                    <div class="main_nav_container d-flex flex-row align-items-center justify-content-center">
                                        <?php
                                          $args = array('theme_location' => 'header', 'container'=> 'ul', 'menu_class' => 'd-flex flex-row align-items-end justify-content-end', 'menu_id' => 'header-menu');
                                          wp_nav_menu($args);
                                        ?>
                                    </div>
                                </nav>
                                <div class="logo_mobile"> <img style="transform: translateY(30px);" width="120" height="120" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></div>
                                <div id="burger" class="burger">
                                    <div class="burger_line l1"></div>
                                    <div class="burger_line l2"></div>
                                    <div class="burger_line l3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="burger_menu" class="menu">
            <div class="menu_background">
                <div class="menu_container d-flex flex-column align-items-end justify-content-start">
                    <div id="menu_close" class="menu_close">close</div>
                    <div class="menu_user_area"></div>
                    <nav class="menu_nav">
                        <?php
                          $args = array('theme_location' => 'header', 'container'=> 'ul', 'menu_class' => 'text-right', 'menu_id' => 'header-menu');
                          wp_nav_menu($args);
                        ?>
                    </nav>
                </div>
            </div>
        </div>