<?php get_header(); ?>

<?php
while (have_posts()) : the_post(); ?>
    <style>
        <?php the_field('custom_css') ?>
    </style>

    <div class="section_observability_hero">
        <div class="padding-global">
            <div class="container-large is-lines background-color-primary">
                <div class="padding-section-hero">
                    <div class="padding-bottom padding-xxlarge">
                        <div class="use-case_hero-grid">
                            <div id="w-node-_17295c7f-313b-4ee6-9fac-850393b8c09c-78eaf37c">
                                <div class="padding-bottom padding-custom1">
                                    <a href="/use-cases" class="text-style-allcaps text-size-medium text-weight-medium text-color-neutral-lighter">use case</a>
                                </div>
                                <div id="w-node-_290997cc-9cda-58e7-1729-bef4eb04073e-78eaf37c" class="padding-bottom padding-custom1">
                                    <h1 id="w-node-_17295c7f-313b-4ee6-9fac-850393b8c09d-78eaf37c" class="heading-style-h2 text-weight-normal"><?php the_title(); ?></h1>
                                </div>
                                <?php if (get_field('description_head')) : ?>
                                    <div class="padding-bottom padding-custom2">
                                        <div class="text-size-large text-weight-medium"><?php the_field('description_head') ?></div>
                                    </div>
                                <?php endif ?>

                                <?php if (get_field('btn_text_head')) : ?>
                                    <div class="button-group">
                                        <a href="<?php the_field('btn_url_head') ?>" class="button w-inline-block">
                                            <div class="button-text"><?php the_field('btn_text_head') ?></div>
                                            <div class="overlay-gradient-1"></div>
                                            <div class="overlay-gradient-2"></div>
                                        </a>
                                    </div>
                                <?php endif ?>

                            </div>
                            <?php if (has_post_thumbnail()) : ?>
                                <div id="w-node-_17295c7f-313b-4ee6-9fac-850393b8c09f-78eaf37c" class="use-case_hero_image-wrapper">
                                    <?php the_post_thumbnail('medium-large', array('class' => 'use-case_hero_image')); ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="case-study_images">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/webscale.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/media-king.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/fama.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/agi.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/inter.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/box.svg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/redfin.svg" alt="">

                    </div>
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

    
    <div class="section_home_trusted is-relative">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-medium z-index-2">
                    <!-- Reviews Swiper -->
                    <?php get_template_part('templates/slider/swiper') ?>
                    <!-- Reviews Swiper -->
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
                </div>
            </div>
        </div>
    </div>


    <!-- Challenge -->
    <?php get_template_part('templates/solutions-product/challenge') ?>
    <!-- Challenge -->


    <!-- Solution -->
    <?php get_template_part('templates/solutions-product/solution') ?>
    <!-- Solution -->


    <!-- Solution LR -->
    <?php get_template_part('templates/solutions-product/solution-left-right-lr') ?>
    <!-- Solution LR -->


    <?php if (get_field('cta_black') == 'general') : ?>
        <!-- CTA Option-->
        <?php get_template_part('templates/cta/cta-modern') ?>
        <!-- CTA Option-->
    <?php elseif (get_field('cta_black') == 'new') : ?>
        <!-- CTA -->
        <?php get_template_part('templates/solutions-product/cta-modern') ?>
        <!-- CTA -->
    <?php endif ?>


    <!-- Solution -->
    <?php get_template_part('templates/solutions-product/solution-left-right-three') ?>
    <!-- Solution -->


    <?php $solutionAdditionally = get_field('solution_additionally');
    if ($solutionAdditionally) {
        $solutionClass = 'is-lines';
    } else {
        $solutionClass = 'is-lines-horizontal';
    }
    ?>

    <div class="section_observation_trusted is-relative">
        <div class="padding-global">
            <div class="container-large <?php echo $solutionClass ?>">
                <div class="padding-top padding-xhuge z-index-2">
                    <div class="max-width-large align-center text-align-center">
                        <?php if (get_field('title_observation')) : ?>
                            <div class="padding-bottom padding-large">
                                <h2 class="heading-style-h3"><?php the_field('title_observation') ?></h2>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="observability_trusted_content-wrapper">
                                    <div id="w-node-f09ac38f-78a7-68db-734e-9c5321a3f330-78eaf37c" class="trusted_text-wrapper">
                                        <div class="padding-bottom padding-small">
                                            <h3 class="heading-style-h6-s">“This is not just about doing what you used to do in the past, and doing it a little bit better. This is a new way to see this world of how we collect and manage our observability pipelines.”</h3>
                                        </div>
                                        <div class="padding-bottom padding-xlarge">
                                            <div data-w-id="f09ac38f-78a7-68db-734e-9c5321a3f335" class="text-size-large text-color-neutral-lighter">Ben Kus, CTO, Box</div>
                                        </div>
                                        <a href="/company/case-studies/box" class="button is-secondary w-inline-block">
                                            <div class="text-size-medium">Read Case Study</div>
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
                                    <div class="dots_wrapper">
                                        <div class="dot is-bot-left"></div>
                                        <div class="dot is-bot-right"></div>
                                        <div class="dot is-top-right"></div>
                                        <div class="dot is-top-left"></div>
                                    </div>
                                    <div class="trusted_video_wrapper">
                                        <div style="padding-top:56.25%" class="trusted_video w-video w-embed">
                                            <iframe class="embedly-embed" src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F923103883%3Fapp_id%3D122963&amp;dntp=1&amp;display_name=Vimeo&amp;url=https%3A%2F%2Fvimeo.com%2F923103883&amp;image=https%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F1825848886-02e64023b477b317647e5956ab65d78af184567d88a6417428be2c09d54f2fbb-d_1280&amp;key=96f1f04c5f4143bcb0f2e68c87d65feb&amp;type=text%2Fhtml&amp;schema=vimeo" width="1920" height="1080" scrolling="no" title="Vimeo embed" frameborder="0" allow="autoplay; fullscreen; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
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

<?php endwhile; ?>

<?php get_footer(); ?>