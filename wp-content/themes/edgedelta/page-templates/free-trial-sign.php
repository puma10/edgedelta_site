<?php

/**
 * Template Name: Free Trial Sign
 */

get_header('two');
?>

<div class="section_register">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="padding-bottom padding-xlarge">
                    <a href="/" class="w-inline-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/edge-delta-wordmark.svg" alt="Edge Delta">
                    </a>
                </div>
                <div class="register_grid">
                    <div class="register_left">
                        <?php if (get_field('title')) : ?>
                            <div class="padding-bottom padding-medium">
                                <h1 class="heading-style-h2"><?php the_field('title') ?></h1>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('subtitle')) : ?>
                            <div class="heading-style-h6-s text-weight-normal"><?php the_field('subtitle') ?></div>
                        <?php endif ?>
                        <?php if (have_rows('features')) : ?>
                            <div class="register_bullets">
                                <?php while (have_rows('features')) : the_row(); ?>
                                    <div class="register_bullet">
                                        <div class="icon-1x1-sm w-embed">
                                            <svg width="100%" height="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22.5C17.5 22.5 22 18 22 12.5C22 7 17.5 2.5 12 2.5C6.5 2.5 2 7 2 12.5C2 18 6.5 22.5 12 22.5Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M7.75 12.5L10.58 15.33L16.25 9.66998" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="text-size-large text-weight-medium"><?php the_sub_field('feature') ?></div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('partners_title')) : ?>
                            <div class="register_startups_wrapper">
                                <div class="padding-bottom padding-custom1">
                                    <div class="text-size-medium text-weight-medium"><?php the_field('partners_title') ?></div>
                                </div>
                                <?php if (have_rows('partners')) : ?>
                                    <div class="request-demo_images">
                                        <?php while (have_rows('partners')) : the_row(); ?>
                                            <?php $partner_logo = get_sub_field('partner_logo') ?>
                                            <img src="<?php echo $partner_logo['sizes']['medium'] ?>" alt="<?php echo $partner_logo['title'] ?>">
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('testimonial')) : ?>
                            <div>
                                <div class="padding-bottom padding-custom1">
                                    <div class="text-size-medium text-weight-medium">"<?php the_field('testimonial') ?>"</div>
                                </div>
                                <div class="testimonial_author-wrapper">
                                    <?php $author_img = get_field('author_img') ?>
                                    <?php if ($author_img) : ?>
                                        <div class="testimonial_author-image-wrapper">
                                            <img src="<?php echo $author_img['sizes']['medium'] ?>" alt="<?php the_field('testimonial_author') ?>">
                                        </div>
                                    <?php endif ?>
                                    <div>
                                        <div class="text-size-medium text-weight-medium"><?php the_field('testimonial_author') ?></div>
                                        <div class="text-weight-medium text-color-neutral-lighter"><?php the_field('author_position') ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="request-demo_form-wrap">
                        <div class="request-demo_form w-embed w-script">
                            <script nonce="" charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/embed/v2.js"></script>
                            <script nonce="" data-hubspot-rendered="true">
                                hbspt.forms.create({
                                    formInstanceId: "",
                                    region: "na1",
                                    portalId: "20676070",
                                    formId: "95e64a9f-7c3b-4177-abe5-59a33305b671",
                                    sfdcCampaignId: "7014W000001FrAoQAK"
                                });
                            </script>
                            <style>
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
                                    margin-bottom: 0;
                                    padding-left: 0rem;
                                }

                                label.hs-error-msg.hs-main-font-element {
                                    font-size: 0.85rem;
                                    color: #d24949;
                                    margin-top: 0.1rem;
                                }

                                label.hs-main-font-element {
                                    font-size: 0.85rem;
                                    color: #d24949;
                                    margin-top: 0.1rem;
                                }

                                li {
                                    margin-bottom: .25rem;
                                    list-style: none;
                                }

                                .hs_recaptcha.hs-recaptcha.field.hs-form-field {
                                    margin-top: 1rem;
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
        </div>
    </div>
    <div class="section_hero-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
    </div>
</div>

<div class="section_register_bot">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-vertical padding-custom1">
                <div class="align-center text-align-center">
                    <div>© Edge Delta,<?php echo date('Y'); ?>.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer('two'); ?>