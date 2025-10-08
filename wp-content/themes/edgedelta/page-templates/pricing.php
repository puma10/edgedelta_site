<?php

/**
 * Template Name: Pricing
 */

get_header();
?>
<?php $products = get_field('products') ?>

<div class="section_pricing_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero">
                <div class="max-width-large align-center text-align-center">
                    <?php if (get_field('title')) : ?>
                        <div class="padding-bottom padding-medium">
                            <h1 data-w-id="51341778-dadf-f583-4874-aeef7f89f0e9" class="heading-style-h1 no-graident"><?php the_field('title') ?></h1>
                        </div>
                    <?php endif ?>
                    <div class="padding-bottom padding-xlarge">
                        <div class="max-width-medium align-center">
                            <?php if (get_field('description')) : ?>
                                <div class="padding-bottom padding-large">
                                    <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_field('description') ?></div>
                                </div>
                            <?php endif ?>
                            <div class="button-group align-center">
                                <?php if (get_field('btn_text')) : ?>
                                    <a href="<?php the_field('btn_url') ?>" target="_blank" class="button w-inline-block">
                                        <div class="button-text"><?php the_field('btn_text') ?></div>
                                        <div class="overlay-gradient-1"></div>
                                        <div class="overlay-gradient-2"></div>

                                    </a>
                                <?php endif ?>
                                <?php if (get_field('btn_text_two')) : ?>
                                    <a href="<?php the_field('btn_url_two') ?>" class="button is-secondary w-inline-block">
                                        <div class="text-size-medium"><?php the_field('btn_text_two') ?></div>

                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($products) : ?>
                    <div class="pricing_blocks is-pipelines">
                        <?php foreach ($products as $product) : ?>
                            <?php if (isset($product['display_hero_section'][0]) && $product['display_hero_section'][0] === 'show') : ?>
                                <div class="pricing_block">
                                    <div class="pricing_tag">
                                        <div><?php echo $product['product_name'] ?></div>
                                    </div>
                                    <div class="padding-bottom padding-small">
                                        <h2 class="heading-style-h3">
                                            <?php if (!empty($product['show_dollar_sign'])) : ?>$<?php endif ?><strong><?php echo $product['price'] ?></strong> <?php if (!empty($product['show_per_gb'])) : ?><span class="text-font-sora text-size-xlarge text-weight-normal">per GB</span><?php endif ?>
                                        </h2>
                                    </div>
                                    <div class="padding-bottom padding-custom1">
                                        <div class="text-weight-medium text-size-medium text-color-neutral-lighter"><?php echo $product['desciption'] ?></div>
                                    </div>
                                    <div class="pricing_divider"></div>
                                    <?php if ($product['features']) : ?>
                                        <div class="pricing_bullets">
                                            <?php foreach ($product['features'] as $feature) : ?>
                                                <div class="pricing_bullet">
                                                    <div class="icon w-embed">
                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g filter="url(#filter0_i_14688_144020)">
                                                                <rect y="0.5" width="20" height="20" rx="10" fill="white" fill-opacity="0.1"></rect>
                                                                <rect y="0.5" width="20" height="20" rx="10" fill="#00DA63" fill-opacity="0.05"></rect>
                                                                <rect x="0.35" y="0.85" width="19.3" height="19.3" rx="9.65" stroke="white" stroke-opacity="0.1" stroke-width="0.7"></rect>
                                                                <path d="M13.75 7.75L8.59372 12.9063L6.24997 10.5625" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <defs>
                                                                <filter id="filter0_i_14688_144020" x="0" y="0.5" width="20" height="22.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                                    <feOffset dy="2.5"></feOffset>
                                                                    <feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
                                                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.15 0"></feColorMatrix>
                                                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14688_144020"></feBlend>
                                                                </filter>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="text-size-medium text-weight-medium text-color-alternate"><?php echo $feature['feature'] ?></div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <?php if (have_rows('hero_images')) : ?>
                    <div class="home_hero_images">
                        <?php while (have_rows('hero_images')) : the_row(); ?>
                            <?php $img = get_sub_field('img') ?>
                            <img src="<?php echo $img['sizes']['medium'] ?>" alt="<?php echo $img['title'] ?>">
                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
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


<div class="section_observation_trusted is-relative">
    <div class="padding-global">
        <div class="container-large is-lines-horizontal">
            <div class="padding-top padding-xhuge z-index-2">
                <div class="max-width-large align-center text-align-center">
                    <?php if (get_field('title_ps')) : ?>
                        <div class="padding-bottom padding-small">
                            <h2 class="heading-style-h3"><?php the_field('title_ps') ?></h2>
                        </div>
                    <?php endif ?>
                    <div class="padding-bottom padding-large">
                        <div class="max-width-medium align-center">
                            <?php if (get_field('description_ps')) : ?>
                                <div class="padding-bottom padding-large">
                                    <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_field('description_ps') ?></div>
                                </div>
                            <?php endif ?>
                            <div class="button-group align-center">
                                <?php if (get_field('btn_text_ps')) : ?>
                                    <a href="<?php the_field('btn_url_ps') ?>" target="_blank" class="button w-inline-block">
                                        <div class="button-text"><?php the_field('btn_text_ps') ?></div>
                                        <div class="overlay-gradient-1"></div>
                                        <div class="overlay-gradient-2"></div>

                                    </a>
                                <?php endif ?>
                                <?php if (get_field('btn_text_ps_two')) : ?>
                                    <a href="<?php the_field('btn_url_ps_two') ?>" class="button is-secondary w-inline-block">
                                        <div class="text-size-medium"><?php the_field('btn_text_ps_two') ?></div>

                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($products) : ?>
                    <div class="pricing_blocks">
                        <?php $i = 0 ?>
                        <?php foreach ($products as $product) : ?>
                            <?php if (!isset($product['display_hero_section'][0]) || $product['display_hero_section'][0] !== 'show') : ?>
                                <?php $i++ ?>
                                <?php if ($i == 2) {
                                    $classCard = 'is-metrics';
                                } elseif ($i == 3) {
                                    $classCard = 'is-enterprise';
                                } else {
                                    $classCard = '';
                                }  ?>
                                <div class="pricing_block <?php echo $classCard ?>">
                                    <div class="pricing_tag">
                                        <div><?php echo $product['product_name'] ?></div>
                                    </div>
                                    <div class="padding-bottom padding-small">
                                        <h2 class="heading-style-h3">
                                            <?php if (!empty($product['show_dollar_sign'])) : ?>$<?php endif ?><?php echo $product['price'] ?> <?php if (!empty($product['show_per_gb'])) : ?><span class="text-font-sora text-size-xlarge text-weight-normal">per GB</span><?php endif ?>
                                        </h2>
                                    </div>
                                    <div class="padding-bottom padding-custom1">
                                        <div class="text-weight-medium text-size-medium text-color-neutral-lighter"><?php echo $product['desciption'] ?></div>
                                    </div>
                                    <div class="pricing_divider"></div>
                                    <?php if ($product['features']) : ?>
                                        <div class="pricing_bullets">
                                            <?php foreach ($product['features'] as $feature) : ?>
                                                <div class="pricing_bullet">
                                                    <div class="icon w-embed">
                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g filter="url(#filter0_i_14688_144020)">
                                                                <rect y="0.5" width="20" height="20" rx="10" fill="white" fill-opacity="0.1"></rect>
                                                                <rect y="0.5" width="20" height="20" rx="10" fill="#00DA63" fill-opacity="0.05"></rect>
                                                                <rect x="0.35" y="0.85" width="19.3" height="19.3" rx="9.65" stroke="white" stroke-opacity="0.1" stroke-width="0.7"></rect>
                                                                <path d="M13.75 7.75L8.59372 12.9063L6.24997 10.5625" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <defs>
                                                                <filter id="filter0_i_14688_144020" x="0" y="0.5" width="20" height="22.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                                    <feOffset dy="2.5"></feOffset>
                                                                    <feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
                                                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.15 0"></feColorMatrix>
                                                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14688_144020"></feBlend>
                                                                </filter>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <div class="text-size-medium text-weight-medium text-color-alternate"><?php echo $feature['feature'] ?></div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
        </div>
    </div>
</div>


<?php if (get_field('title_cta')) : ?>
    <div class="section_cta is-relative overflow-auto">
        <div class="padding-global">
            <div class="container-large is-lines line-bottom-0">
                <div class="padding-section-large z-index-2">
                    <div class="align-center text-align-center">
                        <div class="padding-bottom padding-small">
                            <div class="max-width-large align-center text-align-center">
                                <h2 class="heading-style-h3"><?php the_field('title_cta') ?></h2>
                            </div>
                        </div>
                        <?php if (get_field('title_cta')) : ?>
                            <div class="max-width-large align-center">
                                <div class="padding-bottom padding-large">
                                    <div class="text-size-large text-color-neutral-lighter"><?php the_field('description_cta') ?></div>
                                </div>
                            </div>
                        <?php endif ?>
                        <div class="button-group align-center">
                            <?php if (get_field('btn_text_cta')) : ?>
                                <a href="<?php the_field('btn_url_cta') ?>" target="_blank" class="button w-inline-block">
                                    <div class="button-text"><?php the_field('btn_text_cta') ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>
                            <?php if (get_field('btn_text_cta_two')) : ?>
                                <a href="<?php the_field('btn_url_cta_two') ?>" class="button is-secondary w-inline-block">
                                    <div class="text-size-medium"><?php the_field('btn_text_cta_two') ?></div>
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
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="section_cta-bg">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" alt="" class="section_cta_bg-stars">
                    <div class="section_cta-gradient"></div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>


<?php get_footer(); ?>