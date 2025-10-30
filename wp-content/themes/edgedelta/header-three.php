<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en-US"> <![endif]-->
<!--[if IE 9]><html class="ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)] lang="en-US"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#040b05" />
    <!-- Mobile Safari Performance Optimizations -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">

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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 10001;
            text-decoration: none;
            cursor: pointer;
            /* Smooth transitions for hiding/showing */
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(0);
            opacity: 1;
            overflow: hidden;
        }

        .announcement-banner:hover {
            background: #234d3d;
        }

        .announcement-banner.scroll-hidden {
            /* Slide up instead of collapsing */
            transform: translateY(-100%);
            opacity: 0;
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

        /* Push navbar down when banner is visible - MOBILE FIX */
        @media (max-width: 767px) {
            body:not(.banner-hidden) .navbar_component {
                top: 48px !important;
                transition: top 0.3s ease !important;
            }

            body.banner-hidden .navbar_component {
                top: 0 !important;
                transition: top 0.3s ease !important;
            }
        }

        /* Desktop - use default positioning */
        @media (min-width: 768px) {
            .navbar_component {
                top: 48px;
                transition: top 0.3s ease, background 0.3s ease;
            }

            body.banner-hidden .navbar_component {
                top: 0;
            }
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
        <a href="<?php echo home_url('/company/videos/edge-delta-office-hours-exploring-ai-teammates'); ?>" class="announcement-content" style="text-decoration: none; color: white;">
            <span class="announcement-text"> <i>Live Webinar: Edge Delta Office Hours - Exploring AI Teammates - Oct 30th 2:00pm ET</i> - <u>Register</u></span>
        </a>
        <button class="close-banner" onclick="document.getElementById('announcement-banner').style.display='none'; sessionStorage.setItem('bannerDismissed', 'true'); document.body.classList.add('banner-hidden');">×</button>
    </div>

    <script>
        // Simple banner show/hide
        (function() {
            var banner = document.getElementById('announcement-banner');
            if (!banner) return;

            var body = document.body;

            // Show banner if not dismissed
            if (sessionStorage.getItem('bannerDismissed') !== 'true') {
                banner.style.display = 'flex';
                // Remove banner-hidden class from body
                body.classList.remove('banner-hidden');
            } else {
                // Add banner-hidden class if dismissed
                body.classList.add('banner-hidden');
            }

            // Throttle function to prevent excessive scroll event firing
            function throttle(func, wait) {
                var timeout;
                return function executedFunction() {
                    var args = arguments;
                    var later = function() {
                        clearTimeout(timeout);
                        func.apply(this, args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }

            // Hide on scroll - throttled for performance
            var lastScroll = 0;
            var handleScroll = throttle(function() {
                if (sessionStorage.getItem('bannerDismissed') === 'true') return;

                var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                // Only update DOM if state actually changes
                if (currentScroll > 50 && !banner.classList.contains('scroll-hidden')) {
                    banner.classList.add('scroll-hidden');
                    body.classList.add('banner-hidden');
                } else if (currentScroll <= 50 && banner.classList.contains('scroll-hidden')) {
                    banner.classList.remove('scroll-hidden');
                    body.classList.remove('banner-hidden');
                }
                lastScroll = currentScroll;
            }, 100); // Throttle to run max once every 100ms

            // Use passive listener for better scroll performance
            window.addEventListener('scroll', handleScroll, { passive: true });
        })();

        // LOGO FIX: Disable Webflow animations on navbar for mobile
        (function() {
            var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
            if (!isMobile) return;

            var navbar = document.querySelector('.navbar_component');
            var logo = document.querySelector('.navbar_logo');
            var logoLink = document.querySelector('.navbar_logo-link');

            if (navbar) {
                // Remove Webflow animation ID to prevent JS animations
                navbar.removeAttribute('data-w-id');
                // Lock the position
                navbar.style.position = 'fixed';
            }

            if (logo) {
                // Force consistent rendering
                logo.style.transform = 'translate3d(0, 0, 0)';
                logo.style.webkitTransform = 'translate3d(0, 0, 0)';
            }

            if (logoLink) {
                logoLink.style.transform = 'translate3d(0, 0, 0)';
                logoLink.style.webkitTransform = 'translate3d(0, 0, 0)';
            }

            // NUCLEAR OPTION: Completely disable Webflow on mobile Safari
            if (window.Webflow && window.Webflow.destroy) {
                window.Webflow.destroy();
            }

            // Remove ALL data-w-id attributes to prevent Webflow animations
            var allElements = document.querySelectorAll('[data-w-id]');
            for (var i = 0; i < allElements.length; i++) {
                allElements[i].removeAttribute('data-w-id');
            }

            // Limit scroll event listeners globally
            var scrolling = false;
            var originalAddEventListener = window.addEventListener;
            window.addEventListener = function(type, listener, options) {
                if (type === 'scroll') {
                    // Throttle all scroll listeners
                    var throttledListener = function() {
                        if (!scrolling) {
                            scrolling = true;
                            requestAnimationFrame(function() {
                                listener.apply(this, arguments);
                                scrolling = false;
                            });
                        }
                    };
                    return originalAddEventListener.call(this, type, throttledListener, options);
                }
                return originalAddEventListener.call(this, type, listener, options);
            };
        })();
    </script>

    <div class="page-wrapper">
        <div class="w-embed"></div>
        <!-- header -->
        <div data-animation="default" class="navbar_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="da62bf12-0ca5-3a1a-9f7d-52b3f8c5ec49" role="banner" data-duration="400" style="background: linear-gradient(180deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 50%, rgba(0,0,0,0.3) 100%);">
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
                        <button onclick="openDemoPaywall()" class="gradient-btn green-blue">Sign up for free</button>
                    </div>
                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
        <!-- / header -->

        <!-- main -->
        <main class="main-wrapper">