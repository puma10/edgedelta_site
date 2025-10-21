<?php

/**
 * Template Name: Kubon Event Page
 */

?>

<?php get_header(); ?>

<!-- Preconnect and prefetch to Calendly for faster loading -->
<link rel="preconnect" href="https://calendly.com" crossorigin>
<link rel="preconnect" href="https://assets.calendly.com" crossorigin>
<link rel="dns-prefetch" href="https://calendly.com">
<link rel="dns-prefetch" href="https://assets.calendly.com">
<link rel="prefetch" href="https://assets.calendly.com/assets/external/widget.css" as="style">
<link rel="prefetch" href="https://assets.calendly.com/assets/external/widget.js" as="script">

<div class="section_request-demo">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-xlarge z-index-2">
                <div class="request-demo_grid">
                    <div>
                        <div class="padding-bottom padding-small">
                            <h1 class="heading-style-h1-s"><?php the_title() ?></h1>
                        </div>
                        <div class="padding-bottom padding-large">
                            <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_content() ?></div>
                        </div>
                        <div class="client-logos-section padding-bottom padding-medium">

                            <div class="client-logos-grid">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/fama.svg" loading="lazy" alt="Fama" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/webscale.svg" loading="lazy" alt="Webscale" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/box.svg" loading="lazy" alt="Box" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/dc-gov.svg" loading="lazy" alt="DC Gov" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/snowflake.svg" loading="lazy" alt="Snowflake" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/nvidia.svg" loading="lazy" alt="NVIDIA" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/boeing.svg" loading="lazy" alt="Boeing" class="client-logo">
                                <img src="/wp-content/themes/edgedelta/assets/images/slider/bugcrowd.svg" loading="lazy" alt="bugcrowd" class="client-logo">
                            </div>
                        </div>

                        <div class="request-demo_images">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/AicpaSoc.avif" loading="lazy" alt="" class="request-demo_image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/GoogleCloud.avif" loading="lazy" alt="" class="request-demo_image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/CoolVendor.avif" loading="lazy" alt="" class="request-demo_image">
                        </div>
                    </div>

                    <div class="request-demo_form-wrap">
                        <div class="calendly-inline-widget-container">
                            <!-- Calendly inline widget will be embedded here -->
                            <div
                                class="calendly-inline-widget"
                                data-url="https://calendly.com/edgedelta-kubecon-2025/kubecon-2025-onsite-meetings"
                                style="min-width:320px;height:850px;">
                            </div>
                        </div>

                        <div class="dots_wrapper">
                            <div class="dot is-bot-left"></div>
                            <div class="dot is-bot-right"></div>
                            <div class="dot is-top-right"></div>
                            <div class="dot is-top-left"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
            </div>
        </div>
    </div>
</div>

<!-- Calendly embed script with consent checking -->
<script>
    // IMPORTANT: Set Calendly config BEFORE any Calendly scripts load
    // This suppresses Calendly's own cookie banner
    window.Calendly = window.Calendly || {};
    window.Calendly.config = {
        cookieBanner: false  // Disable Calendly's cookie consent banner
    };

    function loadCalendlyWidget() {
        // Check if user has given marketing consent
        const consent = JSON.parse(localStorage.getItem('edgeDeltaCookieConsent') || '{}');

        // For non-EU users or users who accepted marketing cookies
        const isEUUser = window.edgeConsent && window.edgeConsent.isEURegion;
        const hasMarketingConsent = consent.marketing === true;

        // Load Calendly if: not EU user OR has given marketing consent
        if (!isEUUser || hasMarketingConsent) {
            // Ensure config is set before loading
            window.Calendly = window.Calendly || {};
            window.Calendly.config = window.Calendly.config || {};
            window.Calendly.config.cookieBanner = false;

            // Load Calendly CSS
            const link = document.createElement('link');
            link.href = 'https://assets.calendly.com/assets/external/widget.css';
            link.rel = 'stylesheet';
            document.head.appendChild(link);

            // Load Calendly script
            const script = document.createElement('script');
            script.src = 'https://assets.calendly.com/assets/external/widget.js';
            script.type = 'text/javascript';
            script.async = true;

            // Initialize inline widget after script loads
            script.onload = function() {
                if (window.Calendly && window.Calendly.config) {
                    window.Calendly.config.cookieBanner = false;
                }

                // Initialize the inline widget
                const calendlyWidget = document.querySelector('.calendly-inline-widget');
                if (calendlyWidget && typeof Calendly !== 'undefined') {
                    Calendly.initInlineWidget({
                        url: calendlyWidget.getAttribute('data-url'),
                        parentElement: calendlyWidget
                    });
                }
            };

            document.head.appendChild(script);

            // Set global flag
            window.calendlyLoaded = true;
        } else {
            // Show message for EU users without consent
            const container = document.querySelector('.calendly-inline-widget-container');
            if (container) {
                container.innerHTML = '<div style="padding: 40px; text-align: center; color: #E6E7E7;">' +
                    '<p style="font-size: 18px; margin-bottom: 20px;">Please accept marketing cookies to view the scheduling calendar.</p>' +
                    '<button onclick="openCookieSettings()" style="display: inline-flex; padding: 12px 20px; justify-content: center; align-items: center; color: #FFF; font-size: 18px; cursor: pointer; font-weight: 600; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.30); background: #16625187; transition: ease 0.3s background;">Update Cookie Preferences</button>' +
                    '</div>';
            }
            window.calendlyLoaded = false;
        }
    }

    // Load on page load
    window.addEventListener('load', function() {
        // Reduced timeout for faster loading
        setTimeout(loadCalendlyWidget, 500);
    });

    // Listen for consent updates
    window.addEventListener('edgeConsentUpdated', function(e) {
        if (e.detail.marketing && !window.calendlyLoaded) {
            // User just accepted marketing cookies, reload the page to show Calendly
            location.reload();
        }
    });
</script>

<style>
    /* Client Logos Styling */
    .client-logos-section {
        margin-bottom: 2rem;
    }

    .client-logos-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: #fff;
    }

    .client-logos-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        align-items: center;
        justify-content: center;
        justify-items: center;
    }

    .client-logo {
        height: 40px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%) brightness(1.5);
        opacity: 0.7;
        transition: filter 0.3s ease, opacity 0.3s ease;
    }

    .client-logo:hover {
        filter: grayscale(0%) brightness(1);
        opacity: 1;
    }

    /* H1 Styling */
    .heading-style-h1-s {
        font-size: 4rem;
        font-weight: 550;
        padding-top: 18px;
    }

    /* H4 Styling */
    h4 {
        font-size: 2.0rem;
        font-weight: 600;
    }

    /* Text styling */
    .text-weight-medium.text-color-neutral-lighter {
        color: #d3d9d5;
        font-size: 17px;
        font-weight: normal;
    }

    /* Calendly widget container styling */
    .request-demo_form-wrap {

        display: block;
        width: 100%;
        position: relative;
    }

    .calendly-inline-widget-container {
        width: 100%;
        height: 850px;
        background: #0C120D;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 8px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        transition: box-shadow 0.3s ease;
    }

    .calendly-inline-widget-container:hover {
        box-shadow: 0 6px 30px rgba(22, 98, 81, 0.2);
    }

    /* Override Calendly widget styles to match theme */
    .calendly-inline-widget {
        width: 100% !important;
        height: 100% !important;
    }

   

    /* Fix internal scrolling */
    .calendly-inline-widget iframe {
        border: none !important;
        overflow-y: auto !important;
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
    }

    /* Custom scrollbar for webkit browsers */
    .calendly-inline-widget iframe::-webkit-scrollbar {
        width: 8px;
    }

    .calendly-inline-widget iframe::-webkit-scrollbar-track {
        background: transparent;
    }

    .calendly-inline-widget iframe::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
    }

    .calendly-inline-widget iframe::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    /* Mobile responsiveness fixes */
    @media (max-width: 991px) {
        .request-demo_grid {
            grid-template-columns: 1fr;
            grid-row-gap: 2rem;
        }

        .request-demo_form-wrap {
            width: 100%;
            max-width: 100%;
            margin-top: 1rem;
            display: block;
        }

        .calendly-inline-widget-container {
            height: 800px;
        }
    }

    @media (max-width: 767px) {
        .heading-style-h1-s {
            font-size: 2.5rem;
            padding-top: 10px;
        }

        .client-logos-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .client-logo {
            height: 30px;
        }

        .request-demo_form-wrap {
            margin-top: 0.5rem;
            position: static !important;
            top: auto !important;
        }

        .calendly-inline-widget-container {
            height: 750px;
        }

        .request-demo_grid > div:first-child {
            position: relative;
        }

        .request-demo_grid > div:first-child > .padding-bottom.padding-small {
            margin-bottom: 0;
        }

        .mobile-form-placeholder {
            display: block;
            width: 100%;
            margin-bottom: 2rem;
        }
    }

    @media (max-width: 479px) {
        .client-logos-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .calendly-inline-widget-container {
            height: 700px;
            padding: 0;
        }
    }
</style>

<script>
    // Function to move the Calendly widget directly after the page heading on mobile devices
    function moveCalendlyUnderHeading() {
        // Only run this on mobile devices (screen width <= 767px)
        if (window.innerWidth <= 767) {
            // Get references to key elements
            const heading = document.querySelector('.request-demo_grid > div:first-child > .padding-bottom.padding-small');
            const formWrapper = document.querySelector('.request-demo_form-wrap');
            const contentText = document.querySelector('.request-demo_grid > div:first-child > .padding-bottom.padding-large');

            // Only proceed if we found all necessary elements
            if (heading && formWrapper && contentText) {
                // Insert the form after the heading and before the content text
                heading.after(formWrapper);

                // Add spacing to the form wrapper
                formWrapper.style.marginBottom = '40px';
            }
        }
    }

    // Run when DOM is fully loaded
    document.addEventListener('DOMContentLoaded', moveCalendlyUnderHeading);

    // Also run on resize to handle orientation changes
    window.addEventListener('resize', moveCalendlyUnderHeading);
</script>

<?php get_footer(); ?>