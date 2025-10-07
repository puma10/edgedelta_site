<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog">
                <?php
                $taxonomy = 'subcategory';
                $terms = get_the_terms(get_the_ID(), $taxonomy);
                ?>

                <?php if ($terms) : ?>
                    <div class="padding-bottom padding-custom1">
                        <div class="text-size-medium text-weight-medium text-color-green text-style-allcaps">
                            <?php foreach ($terms as $term) {
                                echo esc_html($term->name);
                            } ?>
                        </div>
                    </div>
                <?php endif ?>


                <div class="blog_hero">
                    <div class="blog_hero-content">
                        <div class="padding-bottom padding-small">
                            <h1 class="heading-style-h3 text-weight-normal"><?php the_title() ?></h1>
                        </div>
                        <div class="text-size-large text-color-neutral-lighter">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <div class="blog_hero_info">

                        <?php
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author_meta('display_name', $author_id);
                        $author_bio = get_the_author_meta('description', $author_id);
                        $author_avatar = get_avatar($author_id, $size = '48', $default = '', $alt = '', $args = array('class' => 'blog_author_image'));
                        ?>
                        <div>
                            <div class="w-dyn-list">
                                <div role="list" class="w-dyn-items">
                                    <div role="listitem" class="blog_author-item w-dyn-item">
                                        <div class="blog_author_image-wrap">
                                            <?php echo $author_avatar; ?>
                                        </div>
                                        <div>
                                            <div class="text-size-medium text-weight-medium"><?php echo esc_html($author_name); ?></div>
                                            <?php if ($author_bio) : ?>
                                                <div class="text-color-neutral-lighter"><?php echo esc_html($author_bio); ?></div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_822331d2-46b1-5c74-488c-3edbf13ada11-5c414c63" class="blog_info_divider"></div>

                        <div class="blog1_date-wrapper">
                            <?php
                            $post_date = get_the_date('M j, Y');
                            $reading_time = get_reading_time(get_the_ID());
                            ?>
                            <div><?php echo esc_html($post_date); ?></div>
                            <div class="blog1_text-divider">•</div>
                            <div><?php echo esc_html($reading_time); ?> minutes</div>
                        </div>
                    </div>

                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="blog_image-wrapper">
                        <?php the_post_thumbnail('large', array('class' => 'blog_author_image')); ?>
                    </div>
                <?php endif ?>

            </div>

            <div class="section_hero-bg">
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

<div class="section_cta is-relative">
    <div class="padding-global">
        <div id="blogContainer" class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="blog_content_grid">
                    <div class="blog_toc blog-sidebar">
                        <?php echo get_kama_contents() ?>
                        <div class="blog_info_divider"></div>
                        <div class="cta-sidebar-form">
                            <style>
                                /* Form Container Styles */
                                .newsletter-form-container {
                                    width: 100%;
                                    position: relative;
                                    background: rgba(35, 35, 35, 0.3);
                                    border-radius: 10px;
                                }

                                /* Hide HubSpot's default elements */
                                .newsletter-form-container .hs-label-container,
                                .newsletter-form-container .hs-error-msgs,
                                .newsletter-form-container label,
                                .newsletter-form-container .hs-form-required {
                                    display: none !important;
                                }

                                /* Form Styles */
                                .newsletter-form-container .hs-form {
                                    background: transparent !important;
                                }

                                /* Input Field Styles */
                                .newsletter-form-container .hs-input {
                                    border-radius: 10px !important;
                                    min-height: 40px !important;
                                    padding-left: 1.1rem !important;
                                    padding-right: 7.5rem !important;
                                    font-size: 1rem !important;
                                    background-color: #ffffff0d !important;
                                    border: 1px solid transparent !important;
                                    color: #ffffff !important;
                                    width: 100% !important;
                                    outline: none !important;
                                    -webkit-appearance: none !important;
                                    -moz-appearance: none !important;
                                    appearance: none !important;
                                    /* -------------------------- */
                                    margin-bottom: 0;
                                    padding: .75rem 1.25rem;
                                    -webkit-backdrop-filter: blur(44px);
                                    backdrop-filter: blur(44px);
                                    /* font-size: 1.125rem; */
                                }
                                .newsletter-form-container .cta-text-field.is-newsletter{
                                    font-size: 1rem !important;
                                }

                                /* Override autofill styles */
                                .newsletter-form-container .hs-input:-webkit-autofill,
                                .newsletter-form-container .hs-input:-webkit-autofill:hover,
                                .newsletter-form-container .hs-input:-webkit-autofill:focus,
                                .newsletter-form-container .hs-input:-webkit-autofill:active {
                                    -webkit-box-shadow: 0 0 0 30px rgba(35, 35, 35, 0.3) inset !important;
                                    -webkit-text-fill-color: white !important;
                                    transition: background-color 5000s ease-in-out 0s;
                                }

                                .newsletter-form-container .hs-input:focus-visible {
                                    outline: -webkit-focus-ring-color auto 1px !important;
                                }

                                /* Placeholder color */
                                .newsletter-form-container .hs-input::placeholder {
                                    color: rgba(255, 255, 255, 0.7) !important;
                                    opacity: 1 !important;
                                }

                                /* Submit Button Styles */
                                .newsletter-form-container .hs-button {
                                    box-shadow: none !important;
                                    background-color: #fff3;
                                    background-image: none !important;
                                    border: 1px solid #ffffff1a;
                                    padding: 0.35rem .75rem !important;
                                    font-size: 1rem !important;
                                    position: absolute !important;
                                    right: 0.25rem !important;
                                    top: 50% !important;
                                    transform: translateY(-50%) !important;
                                    color: #ffffff !important;
                                    cursor: pointer !important;
                                    transition: background-color 0.3s ease !important;
                                    border-radius: 4px !important;
                                }

                                /* Maintain button styles on hover/focus */
                                .newsletter-form-container .hs-button:hover,
                                .newsletter-form-container .hs-button:focus,
                                .newsletter-form-container .hs-button:active {
                                    background-color: rgba(255, 255, 255, 0.3) !important;
                                    color: #ffffff !important;
                                    border: 1px solid rgba(255, 255, 255, 0.1) !important;
                                }

                                /* Success message styling */
                                .newsletter-form-container .submitted-message {
                                    color: #ffffff !important;
                                    text-align: center !important;
                                    padding: 16px !important;
                                }
                            </style>

                            <div class="padding-bottom padding-xsmall">
                                <h3 class="text-size-regular text-weight-semibold" style="font-size: 1rem;">Subscribe to Our Newsletter</h3>
                            </div>
                            <div class="newsletter-form-container">
                                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                <script>
                                    hbspt.forms.create({
                                        portalId: "20676070",
                                        formId: "81a91c9b-8274-4ec6-80c4-587c60908a94",
                                        region: "na1",
                                        sfdcCampaignId: "7014W000001Fzi9QAC"
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="blog_info_divider"></div>
                        <div>
                            <h3 class="text-size-xlarge">See Edge Delta in Action</h3>
                            <div class="padding-top padding-custom1">
                                <div class="display-inline">
                                    <a href="https://play.edgedelta.com" target="_blank" class="button is-small w-inline-block">
                                        <div class="text-size-medium">Try Playground</div>
                                        <div class="overlay-gradient-1"></div>
                                        <div class="overlay-gradient-2"></div>
                                        <div class="icon w-embed">
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_i_14897_86546)">
                                                    <path d="M0.666626 3.09083C0.666626 1.73057 2.15058 0.89037 3.31699 1.59022L9.83227 5.49939C10.9651 6.17909 10.9651 7.82091 9.83227 8.50061L3.31699 12.4098C2.15057 13.1096 0.666626 12.2694 0.666626 10.9092V3.09083Z" fill="white" fill-opacity="0.1"></path>
                                                    <path d="M0.666626 3.09083C0.666626 1.73057 2.15058 0.89037 3.31699 1.59022L9.83227 5.49939C10.9651 6.17909 10.9651 7.82091 9.83227 8.50061L3.31699 12.4098C2.15057 13.1096 0.666626 12.2694 0.666626 10.9092V3.09083Z" fill="#62D37D" fill-opacity="0.05"></path>
                                                </g>
                                                <path d="M1.06663 3.09083C1.06663 2.04149 2.21139 1.39333 3.1112 1.93322L9.62647 5.84238C10.5004 6.36673 10.5004 7.63327 9.62647 8.15761L3.11119 12.0668C2.21139 12.6067 1.06663 11.9585 1.06663 10.9092V3.09083Z" stroke="white" stroke-opacity="0.4" stroke-width="0.8"></path>
                                                <defs>
                                                    <filter id="filter0_i_14897_86546" x="0.666626" y="-0.411865" width="10.0153" height="13.0737" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                        <feOffset dy="-1.75"></feOffset>
                                                        <feGaussianBlur stdDeviation="3.5"></feGaussianBlur>
                                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.22 0"></feColorMatrix>
                                                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14897_86546"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_info_divider"></div>
                        <div>
                            <div class="padding-bottom padding-xsmall">
                                <div class="text-font-sora text-size-large text-weight-semibold text-color-alternate">Share</div>
                            </div>
                            <div class="toc_social">
                                <div class="toc_social-items">
                                    <?php echo social_sharing_buttons() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="rt-wrap">
                                <div id="article" fs-toc-element="contents" fs-toc-offsettop="4rem" fs-toc-hideurlhash="true" fs-richtext-element="rich-text" class="text-rich-text w-richtext">
                                    <!-- ar -->
                                    <?php the_content(); ?>
                                    <!-- ar -->
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('templates/blog/related') ?>

<?php get_template_part('templates/blog/news-form') ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll(".fs-toc_link-4");

        function updateTocStructure() {
            links.forEach((link) => {
                const wrapper = link.closest(".fs-toc_link-wrapper-2");

                if (!wrapper) return;

                const childWrappers = wrapper.querySelectorAll(".fs-toc_link-wrapper-2");

                if (link.classList.contains("w--current")) {
                    childWrappers.forEach((child) => {
                        child.style.willChange = "height, width";
                        child.style.transition = "height 0.2s ease-out, opacity 0.2s ease-out";
                        child.style.opacity = "1";
                        child.style.height = child.scrollHeight + "px";
                    });

                    setTimeout(() => {
                        childWrappers.forEach((child) => {
                            child.style.willChange = "";
                        });
                    }, 200);
                } else {
                    childWrappers.forEach((child) => {
                        child.style.willChange = "height, width";
                        child.style.transition = "height 0.2s ease-in, opacity 0.2s ease-in";
                        child.style.opacity = "0";
                        child.style.height = "0px";

                        setTimeout(() => {
                            child.style.willChange = "";
                        }, 300);
                    });
                }
            });
        }

        const observer = new MutationObserver(updateTocStructure);
        links.forEach((link) => {
            observer.observe(link, {
                attributes: true,
                attributeFilter: ["class"]
            });
        });

        updateTocStructure();
    });
</script>