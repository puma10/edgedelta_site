<?php

/**
 * Template Name: Product
 */

get_header();
?>
<style>
    .section_home_cta-trapeze {
        position: relative;
    }

    .section_grid-2col.is-relative {
        overflow: initial;
    }
</style>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-observability">
                <div class="max-width-large align-center text-align-center">
                    <div class="padding-bottom padding-custom1">
                        <div class="text-size-medium text-weight-medium text-color-neutral-lighter">PRODUCT OVERVIEW</div>
                    </div>

                    <?php if (get_field('title_head')) : ?>
                        <div class="padding-bottom padding-custom1">
                            <h1 class="heading-style-h1-s"><?php the_field('title_head') ?></h1>
                        </div>
                    <?php endif ?>

                    <?php if (get_field('description_head')) : ?>
                        <div class="padding-bottom padding-large">
                            <div class="text-size-large text-color-neutral-lighter"><?php the_field('description_head') ?></div>
                        </div>
                    <?php endif ?>

                    <div>
                        <div class="button-group align-center">

                            <?php if (get_field('btn_text_head')) : ?>
                                <a href="<?php the_field('btn_url_head') ?>" class="button w-inline-block">
                                    <div class="button-text"><?php the_field('btn_text_head') ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>

                            <?php if (get_field('btn_text_head_two')) : ?>
                                <div class="button is-secondary">
                                    <div class="text-size-medium"><?php the_field('btn_text_head_two') ?></div>
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
                                    <a href="#" class="button_watch-video w-inline-block w-lightbox" aria-label="open lightbox" aria-haspopup="dialog">
                                        <script type="application/json" class="w-json">
                                            {
                                                "items": [{
                                                    "width": 940,
                                                    "height": 529,
                                                    "html": "<iframe class=\"embedly-embed\" src=\"<?php the_field('btn_url_head_two') ?>\" width=\"940\" height=\"529\" scrolling=\"no\" title=\"Vimeo embed\" frameborder=\"0\" allow=\"autoplay; fullscreen; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\"></iframe>",
                                                    "type": "video"
                                                }],
                                                "group": ""
                                            }
                                        </script>
                                    </a>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="product_hero_image-wrapper">
                        <?php the_post_thumbnail('1536x1536', array('class' => 'product_hero_image')); ?>
                        <div class="product_hero_image-bg is-right"></div>
                        <div class="product_hero_image-bg"></div>
                    </div>
                <?php endif ?>
            </div>
            <div class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" loading="eager" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-gradient">
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

<div class="section_observation_analyze">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-top padding-xxlarge z-index-2">
                <div class="align-center text-align-center">
                    <?php if (get_field('subtitle_scale')) : ?>
                        <div class="padding-bottom padding-medium">
                            <div class="tag"><?php the_field('subtitle_scale') ?></div>
                        </div>
                    <?php endif ?>
                    <div class="padding-bottom padding-large">
                        <div class="max-width-large align-center text-align-center">
                            <?php if (get_field('title_scale')) : ?>
                                <div class="padding-bottom padding-medium">
                                    <h2><?php the_field('title_scale') ?></h2>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('desc_scale')) : ?>
                                <div class="text-size-large"><?php the_field('desc_scale') ?></div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php $image_scale = get_field('img_scale') ?>
                <div style="text-align: center">
                    <img src="<?php echo $image_scale['sizes']['2048x2048'] ?>" sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 93vw" srcset="<?php echo $image_scale['sizes']['medium_large'] ?> 800w, <?php echo $image_scale['sizes']['large'] ?> 1080w, <?php echo $image_scale['sizes']['1536x1536'] ?> 1600w, <?php echo $image_scale['sizes']['2048x2048'] ?> 2518w" alt="<?php the_field('title_analysis') ?>" class="observability-img">
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
</div>


<?php set_query_var('position', 'one'); ?>
<?php set_query_var('field', 'img_left_right'); ?>
<?php get_template_part('templates/solutions-product/img-left-right') ?>



<?php if (get_field('cta_product_black') == 'general') : ?>
    <!-- CTA Option-->
    <?php get_template_part('templates/cta/cta-modern') ?>
    <!-- CTA Option-->
<?php elseif (get_field('cta_product_black') == 'new') : ?>
    <!-- CTA -->
    <?php get_template_part('templates/solutions-product/cta-modern') ?>
    <!-- CTA -->
<?php endif ?>


<?php set_query_var('position', 'two'); ?>
<?php set_query_var('field', 'img_left_right_two'); ?>
<?php get_template_part('templates/solutions-product/img-left-right') ?>



<?php if (get_field('title_observability')) : ?>
    <div class="section_home_observability is-relative">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-small z-index-2">
                    <div class="align-center text-align-center">

                        <?php if (get_field('subtitle_observability')) : ?>
                            <div class="padding-bottom padding-medium">
                                <div class="tag"><?php the_field('subtitle_observability') ?></div>
                            </div>
                        <?php endif ?>

                        <?php if (get_field('title_observability')) : ?>
                            <div class="padding-bottom padding-large">
                                <h2><?php the_field('title_observability') ?></h2>
                            </div>
                        <?php endif ?>

                        <?php if (have_rows('observability')) : ?>
                            <div class="padding-bottom padding-custom3">
                                <div class="home_observability_component">
                                    <?php while (have_rows('observability')) : the_row(); ?>
                                        <div class="observability_item-wrapper">
                                            <div class="observability_item">
                                                <?php $img_observability = get_sub_field('image') ?>
                                                <?php if ($img_observability) : ?>
                                                    <div class="observability_image-wrapper">
                                                        <img src="<?php echo $img_observability['sizes']['medium_large'] ?>" alt="<?php the_sub_field('title') ?>">
                                                    </div>
                                                <?php endif ?>
                                                <div class="observability_text-wrapper">
                                                    <div>
                                                        <?php if (get_sub_field('title')) : ?>
                                                            <div class="padding-bottom padding-xsmall">
                                                                <h3 class="text-size-large no-graident text-weight-normal text-color-alternate"><?php the_sub_field('title') ?></h3>
                                                            </div>
                                                        <?php endif ?>
                                                        <?php if (get_sub_field('deciption')) : ?>
                                                            <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('deciption') ?></div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(80.9028deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;" class="circular-gradient"></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const circularGradients = document.querySelectorAll(".circular-gradient");

                                    if (circularGradients.length === 0) return;

                                    let angles = [];
                                    const speed = 0.4;
                                    const offset = 100;

                                    circularGradients.forEach((el, index) => {
                                        angles[index] = index * offset;
                                        el.style.transform = `translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(${angles[index]}deg) skew(0deg, 0deg)`;
                                    });

                                    function rotate() {
                                        circularGradients.forEach((el, index) => {
                                            angles[index] += speed;
                                            el.style.transform = `translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(${angles[index]}deg) skew(0deg, 0deg)`;
                                        });
                                        requestAnimationFrame(rotate);
                                    }

                                    rotate();
                                });
                            </script>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>


<?php set_query_var('position', 'three'); ?>
<?php set_query_var('field', 'img_left_right_three'); ?>
<?php set_query_var('bg_img', 'no'); ?>

<?php get_template_part('templates/solutions-product/img-left-right') ?>


<div class="section_home_trusted is-relative">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-small z-index-2">
                <!-- Reviews Swiper -->
                <?php get_template_part('templates/slider/swiper') ?>
                <!-- Reviews Swiper -->
            </div>
        </div>
    </div>
</div>


<?php if (get_field('cta_bottom') == false) : ?>
    <!-- CTA Option-->
    <?php get_template_part('templates/cta/cta') ?>
    <!-- CTA Option-->
<?php else : ?>
    <!-- CTA -->
    <?php get_template_part('templates/solutions-product/cta') ?>
    <!-- CTA -->
<?php endif ?>

<?php get_footer(); ?>