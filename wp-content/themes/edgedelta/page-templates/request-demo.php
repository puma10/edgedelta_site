<?php

/**
 * Template Name: Request Demo
 */

?>

<?php get_header(); ?>

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
                        <div class="request-demo_form w-embed w-script">

                            <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/embed/v2.js"></script>
                            
                            <!-- Load Calendly only after checking consent -->
                            <script>
                                // IMPORTANT: Set Calendly config BEFORE any Calendly scripts load
                                // This suppresses Calendly's own cookie banner
                                window.Calendly = window.Calendly || {};
                                window.Calendly.config = {
                                    cookieBanner: false  // Disable Calendly's cookie consent banner
                                };
                                
                                function loadCalendlyIfConsented() {
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
                                        
                                        // Load Calendly script
                                        const script = document.createElement('script');
                                        script.src = 'https://assets.calendly.com/assets/external/widget.js';
                                        script.type = 'text/javascript';
                                        script.async = true;
                                        
                                        // Ensure config persists after script loads
                                        script.onload = function() {
                                            if (window.Calendly && window.Calendly.config) {
                                                window.Calendly.config.cookieBanner = false;
                                            }
                                        };
                                        
                                        document.head.appendChild(script);
                                        
                                        // Load Calendly CSS
                                        const link = document.createElement('link');
                                        link.href = 'https://assets.calendly.com/assets/external/widget.css';
                                        link.rel = 'stylesheet';
                                        document.head.appendChild(link);
                                        
                                        // Set global flag
                                        window.calendlyLoaded = true;
                                    } else {
                                        window.calendlyLoaded = false;
                                    }
                                }
                                
                                // Load on page load
                                window.addEventListener('load', function() {
                                    // Wait for consent detection to complete
                                    setTimeout(loadCalendlyIfConsented, 1000);
                                });
                                
                                // Listen for consent updates
                                window.addEventListener('edgeConsentUpdated', function(e) {
                                    if (e.detail.marketing && !window.calendlyLoaded) {
                                        // User just accepted marketing cookies, load Calendly
                                        loadCalendlyIfConsented();
                                        
                                        // If there's pending Calendly data from a previous form submission, open it
                                        if (window.pendingCalendlyData) {
                                            setTimeout(function() {
                                                if (window.calendlyLoaded && typeof Calendly !== 'undefined') {
                                                    Calendly.initPopupWidget(window.pendingCalendlyData);
                                                    window.pendingCalendlyData = null;
                                                }
                                            }, 1500);
                                        }
                                    }
                                });
                            </script>

                            <div id="hubspot-form" data-hs-forms-root="true">
                            </div>
                            
                            <!-- Make Calendly popup wider -->
                            <style>
                                /* Calendly popup width customization */
                                .calendly-overlay .calendly-popup {
                                    width: 90% !important;
                                    max-width: 1200px !important;
                                    height: 90% !important;
                                    max-height: 900px !important;
                                    margin: auto !important;
                                }
                                
                                .calendly-overlay .calendly-popup .calendly-popup-content {
                                    height: 100% !important;
                                    width: 100% !important;
                                }
                                
                                .calendly-overlay .calendly-popup iframe {
                                    width: 100% !important;
                                    height: 100% !important;
                                }
                                
                                /* Center the popup */
                                .calendly-overlay {
                                    display: flex !important;
                                    align-items: center !important;
                                    justify-content: center !important;
                                }
                                
                                /* For mobile responsiveness */
                                @media (max-width: 768px) {
                                    .calendly-overlay .calendly-popup {
                                        width: 100% !important;
                                        height: 100% !important;
                                        max-width: none !important;
                                        max-height: none !important;
                                        margin: 0 !important;
                                    }
                                }
                            </style>

                            <script data-hubspot-rendered="true">
                                window.addEventListener('load', function() {
                                    hbspt.forms.create({
                                        region: "na1",
                                        portalId: "20676070",
                                        formId: "95e64a9f-7c3b-4177-abe5-59a33305b671",
                                        sfdcCampaignId: "7014W000001FrAoQAK",
                                        target: '#hubspot-form',
                                        onFormReady: function(form) {
                                            // Move legal consent below submit button
                                            setTimeout(function() {
                                                const legalConsent = document.querySelector('.legal-consent-container');
                                                const submitWrapper = document.querySelector('.hs-submit');
                                                
                                                if (legalConsent && submitWrapper) {
                                                    // Insert legal consent after submit button
                                                    submitWrapper.parentNode.insertBefore(legalConsent, submitWrapper.nextSibling);
                                                }
                                            }, 100);
                                        },
                                        onFormSubmit: function($form) {
                                            // Capture form data before submission
                                            const formData = {};
                                            const formFields = $form[0].elements;
                                            
                                            // Extract form values
                                            for (let field of formFields) {
                                                if (field.name && field.value) {
                                                    // Map HubSpot field names to Calendly parameters
                                                    switch(field.name) {
                                                        case 'firstname':
                                                            formData.firstName = field.value;
                                                            break;
                                                        case 'lastname':
                                                            formData.lastName = field.value;
                                                            break;
                                                        case 'email':
                                                            formData.email = field.value;
                                                            break;
                                                        case 'phone':
                                                            formData.phone = field.value;
                                                            break;
                                                        case 'company':
                                                            formData.company = field.value;
                                                            break;
                                                        case 'jobtitle':
                                                            formData.jobTitle = field.value;
                                                            break;
                                                        default:
                                                            // Store other fields as custom answers
                                                            formData[field.name] = field.value;
                                                    }
                                                }
                                            }
                                            
                                            // Build Calendly URL with prefilled data
                                            let calendlyUrl = 'https://calendly.com/edge-delta-sales-engineering-team/schedule-a-demo';
                                            const prefillParams = [];
                                            
                                            // Add prefill parameters
                                            if (formData.firstName && formData.lastName) {
                                                prefillParams.push(`name=${encodeURIComponent(formData.firstName + ' ' + formData.lastName)}`);
                                            }
                                            if (formData.email) {
                                                prefillParams.push(`email=${encodeURIComponent(formData.email)}`);
                                            }
                                            if (formData.phone) {
                                                prefillParams.push(`phone=${encodeURIComponent(formData.phone)}`);
                                            }
                                            
                                            // Combine all parameters
                                            if (prefillParams.length > 0) {
                                                calendlyUrl += '?' + prefillParams.join('&');
                                            }
                                            
                                            // Check if Calendly is loaded and user has consent
                                            if (window.calendlyLoaded && typeof Calendly !== 'undefined') {
                                                Calendly.initPopupWidget({
                                                    url: calendlyUrl,
                                                    prefill: {
                                                        name: formData.firstName && formData.lastName ? formData.firstName + ' ' + formData.lastName : '',
                                                        email: formData.email || ''
                                                    }
                                                });
                                            } else {
                                                // Store form data for later use
                                                window.pendingCalendlyData = {
                                                    url: calendlyUrl,
                                                    prefill: {
                                                        name: formData.firstName && formData.lastName ? formData.firstName + ' ' + formData.lastName : '',
                                                        email: formData.email || ''
                                                    }
                                                };
                                                
                                                // If no consent for Calendly, show a message or redirect
                                                const isEUUser = window.edgeConsent && window.edgeConsent.isEURegion;
                                                if (isEUUser) {
                                                    alert('Please accept marketing cookies to schedule a demo. You can update your preferences in the cookie settings.');
                                                    // Optionally open cookie settings
                                                    if (typeof window.openCookieSettings === 'function') {
                                                        window.openCookieSettings();
                                                    }
                                                } else {
                                                    // For non-EU users, try loading Calendly again
                                                    loadCalendlyIfConsented();
                                                    setTimeout(function() {
                                                        if (window.calendlyLoaded && typeof Calendly !== 'undefined' && window.pendingCalendlyData) {
                                                            Calendly.initPopupWidget(window.pendingCalendlyData);
                                                            window.pendingCalendlyData = null;
                                                        }
                                                    }, 1000);
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>

                            <style>
                                /* Move legal consent below submit button */
                                .hs-form {
                                    display: flex;
                                    flex-direction: column;
                                }
                                
                                .hs-form .legal-consent-container {
                                    order: 100;
                                    margin-top: 1rem;
                                }
                                
                                .hs-form .hs-submit {
                                    order: 99;
                                }
                                
                                .hs-form .hs-richtext.hs-main-font-element {
                                    order: 100;
                                    margin-top: 1rem;
                                }
                                
                                /* Alternative approach using absolute positioning */
                                .hs-form .actions {
                                    position: relative;
                                    padding-bottom: 3rem;
                                }
                                
                                .hs-form .legal-consent-container {
                                    position: absolute;
                                    bottom: 0;
                                    left: 0;
                                    width: 100%;
                                }
                                
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
                                
                                @media (max-width: 767px) {
                                    .client-logos-grid {
                                        grid-template-columns: repeat(3, 1fr);
                                    }
                                    
                                    .client-logo {
                                        height: 30px;
                                    }
                                }
                                
                                @media (max-width: 479px) {
                                    .client-logos-grid {
                                        grid-template-columns: repeat(2, 1fr);
                                    }
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
                                
                                /* Form styling */
                                .request-demo_form-wrap {
                                    margin-top: 20px;
                                    display: block;
                                    width: 100%;
                                }
                                
                                input {
                                    line-height: normal;
                                    display: flex;
                                    height: 40px;
                                    width: 100%;
                                    padding: 12px;
                                    align-items: center;
                                    align-self: stretch;
                                    border: 1px solid rgba(255, 255, 255, 0.14);
                                    background: #0C120D;
                                }

                                label {
                                    margin-bottom: .5rem;
                                    margin-top: 1rem;
                                    font-weight: 500;
                                    color: var(--Color-Neutral-neutral-ultra-light, #E6E7E7);
                                    font-family: "Overused Grotesk";
                                    font-size: 18px;
                                    font-style: normal;
                                    font-weight: 500;
                                    line-height: 150%;
                                }

                                input.hs-button.primary.large {
                                    display: flex;
                                    padding: 12px 20px;
                                    margin-top: 1rem;
                                    width: auto;
                                    justify-content: center;
                                    align-items: center;
                                    color: var(--Color-Neutral-white, #FFF);
                                    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.15);
                                    font-family: "Overused Grotesk";
                                    font-size: 18px;
                                    cursor: pointer;
                                    font-style: normal;
                                    font-weight: 600;
                                    line-height: 24px;
                                    border-radius: 8px;
                                    border: 1px solid rgba(255, 255, 255, 0.30);
                                    background: #16625187;
                                    height: auto;
                                    transition: ease 0.3s background;
                                }

                                input.hs-button.primary.large:hover {
                                    background: #166251;
                                }


                                ul,
                                ol {
                                    margin-bottom: 1rem;
                                    padding-left: 0.5rem;
                                }

                                label.hs-error-msg.hs-main-font-element {
                                    font-size: 0.85rem;
                                    color:rgb(255, 255, 255);
                                    margin-top: 0.1rem;
                                    display: block;
                                }

                                label.hs-main-font-element {
                                    font-size: 0.85rem;
                                    color:rgb(246, 246, 246);
                                    margin-top: 0.1rem;
                                    display: block;
                                }

                                li {
                                    margin-bottom: .5rem;
                                    list-style: decimal;
                                    margin-left: 1.5rem;
                                }
                                
                                /* Override HubSpot error message styling */
                                .hs-error-msgs,
                                ul.hs-error-msgs,
                                .hs-form ul.hs-error-msgs {
                                    padding-left: 0 !important;
                                    margin-left: 0 !important;
                                    list-style-type: none !important;
                                    list-style-image: none !important;
                                    list-style-position: outside !important;
                                }
                                
                                .hs-error-msgs li,
                                ul.hs-error-msgs li,
                                .hs-form ul.hs-error-msgs li {
                                    margin-left: 0 !important;
                                    margin-bottom: 0 !important;
                                    list-style-type: none !important;
                                    list-style-image: none !important;
                                    list-style-position: outside !important;
                                    display: block !important;
                                }
                                
                                /* Add this to override any HubSpot inline styles */
                                #hubspot-form ul {
                                    list-style: none !important;
                                }

                                .hs_recaptcha.hs-recaptcha.field.hs-form-field {
                                    margin-top: 1rem;
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
                                    
                                    .request-demo_form {
                                        width: 100%;
                                        display: block;
                                    }
                                    
                                    #hubspot-form {
                                        width: 100%;
                                        display: block;
                                    }
                                }
                                
                                @media (max-width: 767px) {
                                    .heading-style-h1-s {
                                        font-size: 2.5rem;
                                        padding-top: 10px;
                                    }
                                    
                                    .request-demo_form-wrap {
                                        padding: 1rem;
                                        margin-top: 0.5rem;
                                        /* Disable sticky positioning on mobile */
                                        position: static !important;
                                        top: auto !important;
                                    }

                                    /* For mobile view, the form will be hidden by default and moved via JS */
                                    .request-demo_grid > div:first-child {
                                        position: relative;
                                    }

                                    /* Add space for the moved form */
                                    .request-demo_grid > div:first-child > .padding-bottom.padding-small {
                                        margin-bottom: 0;
                                    }

                                    /* Mobile form placeholder will receive the moved form */
                                    .mobile-form-placeholder {
                                        display: block;
                                        width: 100%;
                                        margin-bottom: 2rem;
                                    }
                                }
                                
                                @media (max-width: 479px) {
                                    .request-demo_form-wrap {
                                        padding: 0.75rem;
                                    }
                                }
                            </style>
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



<script>
    // Function to move the form directly after the page heading on mobile devices
    function moveFormUnderHeading() {
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
    document.addEventListener('DOMContentLoaded', moveFormUnderHeading);
    
    // Also run on resize to handle orientation changes
    window.addEventListener('resize', moveFormUnderHeading);
</script>

<?php get_footer(); ?>