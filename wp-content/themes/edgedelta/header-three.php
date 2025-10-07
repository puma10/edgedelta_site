<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9]><html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)] lang="en-US"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#040b05" />

    <title><?php wp_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
        .admin-bar .ed-banner {
            margin-top: 32px;
        }
    </style>
</head>

<body <?php body_class() ?>>
    <div class="page-wrapper">
        <div class="w-embed"></div>
        <!-- header -->
        <div data-animation="default" class="navbar_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="da62bf12-0ca5-3a1a-9f7d-52b3f8c5ec49" role="banner" data-duration="400" style="background: linear-gradient(180deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 50%, rgba(0,0,0,0.3) 100%); backdrop-filter: blur(10px);">
            <div class="navbar_container">

                <a href="<?php echo home_url(); ?>" aria-label="home" aria-current="page" class="navbar_logo-link w-nav-brand">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/edgedeltanavlogo.svg" alt="Edge Delta" class="navbar_logo">
                </a>

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'walker' => new Main_Menu_Walker(),
                    'container' => false,
                    'items_wrap' => '<nav id="%1$s" role="navigation" class="navbar_menu is-page-height-tablet w-nav-menu">%3$s</nav>',
                ]);
                ?>

                <div id="w-node-da62bf12-0ca5-3a1a-9f7d-52b3f8c5ec83-f8c5ec49" class="navbar_button-wrapper">

                    <div class="navbar_menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
                        <div class="menu-icon2">
                            <div class="menu-icon2_line-top"></div>
                            <div class="menu-icon2_line-middle">
                                <div class="menu-icon_line-middle-inner"></div>
                            </div>
                            <div class="menu-icon2_line-bottom"></div>
                        </div>
                    </div>

                    <div class="navbar_button-wrapper hide-tablet">
                        <a href="https://app.edgedelta.com/" target="_blank" class="navbar_link w-nav-link">Login</a>
                        <button class="gradient-btn green-blue" onclick="openDemoPaywall()">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
        <!-- / header -->

        <!-- main -->
        <main class="main-wrapper">