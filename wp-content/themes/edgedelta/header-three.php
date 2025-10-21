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

        /* Announcement Banner */
        .announcement-banner {
            background: #1a3a2e;
            color: #ffffff;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 10000;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s ease, max-height 0.3s ease, opacity 0.3s ease, padding 0.3s ease;
            max-height: 100px;
            opacity: 1;
            overflow: hidden;
        }

        .announcement-banner:hover {
            background: #234d3d;
        }

        .announcement-banner.scroll-hidden {
            max-height: 0;
            opacity: 0;
            padding: 0 20px;
            pointer-events: none;
        }

        .announcement-banner.hidden {
            display: none;
        }

        .announcement-content {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .announcement-text {
            font-weight: 700;
            color: white;
        }

        .close-banner {
            position: absolute;
            right: 16px;
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 24px;
            cursor: pointer;
            padding: 4px 8px;
            transition: transform 0.2s;
        }

        .close-banner:hover {
            transform: scale(1.2);
        }

        @media (max-width: 640px) {
            .announcement-banner {
                padding: 10px 40px 10px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body <?php body_class() ?>>
    <!-- Announcement Banner -->
    <div id="announcement-banner" class="announcement-banner" style="display: none;">
        <a href="<?php echo home_url('/company/blog/introducing-edge-delta-ai-teammates-collaborative-ai-for-any-workflow'); ?>" class="announcement-content" style="text-decoration: none; color: white;">
            <span class="announcement-text"> <i>Introducing AI Teammates: Collaborative AI for SRE, Security, and DevOps Teams</i> - <u>Learn more</u></span>
        </a>
        <button class="close-banner" onclick="document.getElementById('announcement-banner').style.display='none'; sessionStorage.setItem('bannerDismissed', 'true');">×</button>
    </div>

    <script>
        // Simple banner show/hide
        (function() {
            var banner = document.getElementById('announcement-banner');
            if (!banner) return;

            // Show banner if not dismissed
            if (sessionStorage.getItem('bannerDismissed') !== 'true') {
                banner.style.display = 'flex';
            }

            // Hide on scroll
            var lastScroll = 0;
            window.addEventListener('scroll', function() {
                if (sessionStorage.getItem('bannerDismissed') === 'true') return;

                var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScroll > 50) {
                    banner.classList.add('scroll-hidden');
                } else {
                    banner.classList.remove('scroll-hidden');
                }
                lastScroll = currentScroll;
            });
        })();
    </script>

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

                    <?php if (check_current_url_in_button_head()) : ?>
                        <div class="navbar_button-wrapper hide-tablet">
                            <a href="https://app.edgedelta.com/" target="_blank" class="navbar_link w-nav-link">Login</a>
                            <!-- <button class="gradient-btn green-blue" onclick="openDemoPaywall()"><//?php the_field('text_btn', 'option') ?></button> -->
                            <a href="<?php the_field('url_btn', 'option') ?>" class="gradient-btn green-blue"><?php the_field('text_btn', 'option') ?></a>
                        </div>
                    <?php else : ?>
                        <a href="<?php the_field('request_demo_url', 'option') ?>" class="button is-nav w-inline-block">
                            <div class="button-text"><?php the_field('request_demo_text', 'option') ?></div>
                            <div class="overlay-gradient-1"></div>
                            <div class="overlay-gradient-2"></div>
                        </a>
                    <?php endif ?>

                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
        <!-- / header -->

        <!-- main -->
        <main class="main-wrapper">