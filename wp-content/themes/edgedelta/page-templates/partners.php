<?php

/**
 * Template Name: Partners
 */

get_header();
?>
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-xlarge z-index-2">
                <div class="padding-top padding-medium">
                    <div class="max-width-large align-center text-align-center z-index-2">
                        <div class="padding-bottom padding-custom1">
                            <h1 class="heading-style-h1 no-graident">Edge Delta <br>Partner Program</h1>
                        </div>
                        <div class="padding-bottom padding-large">
                            <div class="text-size-large text-color-neutral-lighter">Unlock new revenue streams with intelligent Telemetry Pipelines for observability and security data.</div>
                        </div>
                        <div class="padding-bottom padding-medium text-align-center">
                            <a href="#contact-partner" class="button w-button" style="width: 245px; display: inline-block;">Contact Partner Program</a>
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
    <div class="trapeze-divider-wrapper">
        <div class="trapeze-bg">
            <div class="trapeze-bg-inside">
                <div class="trapeze-triangle is-bot-left">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/frame-62777.svg" alt="">
                </div>
                <div class="trapeze-triangle is-bot-right">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/frame-62777.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partner Value Propositions Section -->
<div class="section_about_values">
    <div class="padding-global">
        <div class="container-large is-lines line-bottom-0">
            <div class="padding-section-medium">
                <div class="partners_hero_content">
                    <div class="partners_hero_text">
                        <div class="padding-bottom padding-medium">
                            <h2 class="heading-style-h2">Deliver More Value to Your Customers</h2>
                        </div>
                        <div class="text-size-large text-color-neutral-lighter">
                            <p>As environments become more complex, organizations face growing volumes of observability and security data. By choosing Edge Delta, your customers can process and optimize their telemetry data pre-index, gaining control of their logs, metrics, traces, and events.</p>
                        </div>
                    </div>
                    <div class="partners_hero_image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/img/DataTieringStrategyImage.png" alt="Edge Delta Partners" class="partners_image">
                    </div>
                </div>
                
                <div class="partners_values_grid">
                    <!-- Value Proposition 1 -->
                    <div class="partners_value_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Seamless Integration with Any Stack</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>Edge Delta is vendor-neutral by design. Our pipelines integrate easily with your customers' existing tools and workflows, supporting data transformation, enrichment, and routing to any destination — from legacy observability and security platforms to long-term storage solutions.</p>
                        </div>
                    </div>
                    
                    <!-- Value Proposition 2 -->
                    <div class="partners_value_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Built for Scale, Designed for Usability</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>Edge Delta's intuitive UI, granular RBAC, and automated integrations simplify the complexity of managing telemetry data at scale — helping your customers streamline operations and reduce MTTR.</p>
                        </div>
                    </div>
                    
                    <!-- Value Proposition 3 -->
                    <div class="partners_value_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Drive Innovation without Limitations</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>Enable your customers to optimize performance with AI-powered insights while reducing costs — all without sacrificing visibility, efficiency, or control.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partner Logos Section -->
<div class="section_partner_logos">
    <div class="padding-global">
        <div class="container-large is-lines">
            <div class="padding-section-medium">
                <div class="text-align-center padding-bottom padding-medium">
                    <h2 class="heading-style-h2">Our Partners</h2>
                </div>
                <?php 
                    // Count the number of logos to determine grid layout
                    $logo_count = 0;
                    if(have_rows('partners_logos')) {
                        while(have_rows('partners_logos')) { the_row();
                            if(get_sub_field('partners_showcase')) {
                                $logo_count++;
                            }
                        }
                        // Reset the repeater to use it again below
                        reset_rows('partners_logos');
                    }
                ?>
                <style>
                    .client-logos-grid.partners-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                        gap: 2rem;
                        align-items: center;
                        justify-content: center;
                        justify-items: center;
                        text-align: center;
                        max-width: 1200px;
                        margin: 0 auto;
                    }
                    .client-logo {
                        margin: 0 auto;
                        display: block;
                        max-width: 100%;
                        height: auto;
                    }
                    @media (max-width: 991px) {
                        .client-logos-grid.partners-grid {
                            gap: 1.5rem;
                        }
                    }
                    @media (max-width: 767px) {
                        .client-logos-grid.partners-grid {
                            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                            gap: 1rem;
                        }
                    }
                </style>
                <div class="client-logos-grid partners-grid">
                    <?php if(have_rows('partners_logos')): ?>
                        <?php while(have_rows('partners_logos')): the_row(); 
                            $logo = get_sub_field('partners_showcase'); // Getting the image from partners_showcase field
                            if($logo): ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($logo['alt']); ?>" class="client-logo">
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <!-- Fallback logos if no repeater entries exist -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/fama.svg" loading="lazy" alt="Partner Logo" class="client-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/webscale.svg" loading="lazy" alt="Partner Logo" class="client-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/box.svg" loading="lazy" alt="Partner Logo" class="client-logo">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partner Benefits Section -->
<div class="section_observation_analyze">
    <div class="padding-global">
        <div class="container-large is-lines">
            <div class="padding-section-medium">
                <div class="text-align-center padding-bottom padding-medium">
                    <h2 class="heading-style-h2">Partner Benefits</h2>
                </div>
                <div class="partners_benefits_grid">
                    <!-- Benefit 1 -->
                    <div class="partners_benefit_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Dedicated Support</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>Gain access to technical enablement, sales training, and go-to-market resources to help you succeed.</p>
                        </div>
                    </div>
                    
                    <!-- Benefit 2 -->
                    <div class="partners_benefit_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Joint GTM and Co-Marketing</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>Collaborate on joint solutions, webinars, and case studies to drive engagement, conversations, and leads.</p>
                        </div>
                    </div>
                    
                    <!-- Benefit 3 -->
                    <div class="partners_benefit_item">
                        <div class="padding-bottom padding-small">
                            <h3 class="heading-style-h3">Flexible Commercial Models</h3>
                        </div>
                        <div class="text-size-medium text-color-neutral-lighter">
                            <p>From referral partnerships to OEM integrations and resale agreements, we offer partner-friendly terms to align with your GTM strategy.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Quote Section -->
                <div class="partners_quote_section">
                    <div class="partners_quote">
                        <blockquote class="text-size-xlarge text-weight-medium text-color-alternate">
                            "By 2026, 40% of log telemetry will be processed through a telemetry pipeline product."
                        </blockquote>
                        <div class="text-size-medium text-weight-medium">- Gartner</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact-partner" class="section_request-demo">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-xlarge z-index-2">
                <div class="request-demo_grid">
                    <div class="request-demo_info">
                        <div class="padding-bottom padding-small">
                            <h2 class="heading-style-h2">Contact Our Partner Team</h2>
                        </div>
                        <div class="padding-bottom padding-medium">
                            <div class="text-size-large text-weight-medium text-color-neutral-lighter">
                                <p>Ready to join the Edge Delta Partner Program? Fill out the form and our team will get back to you shortly.</p>
                            </div>
                        </div>
                        <!-- Moved logos here, directly below the intro text -->
                        <div class="request-demo_images">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/AicpaSoc.avif" loading="lazy" alt="AICPA SOC" class="request-demo_image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/GoogleCloud.avif" loading="lazy" alt="Google Cloud" class="request-demo_image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/CoolVendor.avif" loading="lazy" alt="Cool Vendor" class="request-demo_image">
                        </div>
                    </div>
                    <div class="request-demo_form-wrap">
                        <div class="request-demo_form w-embed w-script">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                              hbspt.forms.create({
                                portalId: "20676070",
                                formId: "7fe6f1f4-d25d-4fb8-b1d4-62fd5a561244",
                                region: "na1",
                                sfdcCampaignId: "701RP00000U9XhsYAF"
                              });
                            </script>
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

                            <style>
                                /* Partners hero section styling */
                                .partners_hero_content {
                                    display: grid;
                                    grid-template-columns: 1fr 1fr;
                                    gap: 3rem;
                                    align-items: center;
                                }
                                
                                .partners_hero_text {
                                    max-width: 100%;
                                }
                                
                                .partners_hero_image {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                                
                                .partners_image {
                                    max-width: 100%;
                                    height: auto;
                                    border-radius: 8px;
                                    border: 1px solid rgba(255, 255, 255, 0.1);
                                }
                                
                                @media (max-width: 991px) {
                                    .partners_hero_content {
                                        grid-template-columns: 1fr;
                                        gap: 2rem;
                                    }
                                    
                                    .partners_hero_image {
                                        order: -1;
                                    }
                                }
                                
                                /* Custom heading styles */
                                .heading-style-h1.no-graident {
                                    font-size: 4.5rem;
                                    font-weight: 800;
                                }
                                
                                .heading-style-h3 {
                                    font-size: 2rem;
                                    font-weight: 500;
                                }
                                
                                /* Button styling */
                                .button.w-button {
                                    width: 245px;
                                    text-align: center;
                                    margin: 0 auto;
                                    display: block;
                                }
                                
                                /* Client Logos Styling */
                                .client-logos-section {
                                    margin-bottom: 2rem;
                                }
                                
                                .client-logos-grid {
                                    display: grid;
                                    grid-template-columns: repeat(6, 1fr);
                                    gap: 2rem;
                                    align-items: center;
                                    justify-content: center;
                                    justify-items: center;
                                }
                                
                                .client-logo {
                                    height: 40px;
                                    width: auto;
                                    object-fit: contain;
                                }
                                
                                /* Partners specific styling */
                                .partners_values_grid,
                                .partners_benefits_grid {
                                    display: grid;
                                    grid-template-columns: repeat(3, 1fr);
                                    gap: 2rem;
                                    margin-top: 3rem;
                                }
                                
                                .partners_value_item,
                                .partners_benefit_item {
                                    padding: 2rem;
                                    background-color: rgba(22, 98, 81, 0.1);
                                    border-radius: 8px;
                                    border: 1px solid rgba(255, 255, 255, 0.1);
                                }
                                
                                .partners_quote_section {
                                    margin-top: 4rem;
                                    display: flex;
                                    justify-content: center;
                                }
                                
                                .partners_quote {
                                    max-width: 800px;
                                    text-align: center;
                                    padding: 3rem;
                                    background-color: rgba(22, 98, 81, 0.1);
                                    border-radius: 8px;
                                    border: 1px solid rgba(255, 255, 255, 0.1);
                                }
                                
                                .partners-grid {
                                    margin-top: 2rem;
                                }
                                
                                @media (max-width: 991px) {
                                    .partners_values_grid,
                                    .partners_benefits_grid {
                                        grid-template-columns: repeat(2, 1fr);
                                    }
                                    
                                    .client-logos-grid {
                                        grid-template-columns: repeat(3, 1fr);
                                    }
                                }
                                
                                @media (max-width: 767px) {
                                    .partners_values_grid,
                                    .partners_benefits_grid {
                                        grid-template-columns: 1fr;
                                    }
                                    
                                    .client-logos-grid {
                                        grid-template-columns: repeat(2, 1fr);
                                    }
                                }
                                
                                /* Form styling */
                                .request-demo_form-wrap {
                                    margin-top: 20px;
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
                                    color: var(--Color-Neutral-white, #FFF);
                                    font-family: "Overused Grotesk";
                                    font-size: 18px;
                                    font-style: normal;
                                    font-weight: 500;
                                    line-height: 150%;
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
                                
                                /* Add this to override any HubSpot inline styles */
                                #hubspot-form ul {
                                    list-style: none !important;
                                /* Updated Contact Form Layout */
                                .request-demo_grid {
                                    display: grid;
                                    grid-template-columns: 1fr 1fr;
                                    gap: 3rem;
                                    align-items: flex-start;
                                }

                                .request-demo_info {
                                    display: flex;
                                    flex-direction: column;
                                }

                                .request-demo_images {
                                    display: flex;
                                    flex-wrap: wrap;
                                    gap: 1.5rem;
                                    margin-top: 1rem;
                                    justify-content: flex-start;
                                }

                                .request-demo_image {
                                    height: 50px;
                                    width: auto;
                                    object-fit: contain;
                                }

                                @media (max-width: 991px) {
                                    .request-demo_grid {
                                        grid-template-columns: 1fr;
                                        gap: 2rem;
                                    }
                                    
                                    .request-demo_form-wrap {
                                        max-width: 100%;
                                    }
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

<?php get_footer(); ?>
