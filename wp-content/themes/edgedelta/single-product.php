<?php get_header('three'); ?>

<style>
    .navbar_container .gradient-btn {
        padding: 0.563rem 1.06rem;
        font-size: 1rem;
        font-weight: 600;
        border: 0;
    }

    .gradient-btn {
        display: inline-block;
        border-radius: 8px;
        border-color: transparent;
        text-decoration: none;
        position: relative;
        z-index: 1;
        background: linear-gradient(90deg, #ff5d00, #00e546, #ff5d00);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: background-position 0.6s ease;
    }

    .gradient-btn::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 8px;
        padding: 1.6px;
        background: linear-gradient(90deg, #ff5d00, #00e546, #ff5d00);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
        transition: background-position 0.6s ease;
        z-index: -1;
    }

    .gradient-btn:hover,
    .gradient-btn:hover::before {
        background-position: 100% 0;
    }

    .gradient-btn.green-blue,
    .gradient-btn.green-blue::before {
        background-image: linear-gradient(90deg, #01DA63 0%, #27A1FF 100%);
    }
</style>

<?php while (have_posts()) : the_post(); ?>
    <style>
        <?php the_field('custom_css') ?>
    </style>

    <?php if (get_field('design')) : ?>

        <div class="section_observability_hero">
            <div class="padding-global">
                <div class="container-large is-lines background-color-primary">
                    <div class="padding-section-hero is-observability">
                        <div class="observability_hero_grid">
                            <div id="w-node-_61bdff69-b756-75a7-eaa8-e7d60a162180-262bc542">
                                <h1 id="w-node-_5569bbbd-f2e1-0c9a-5bc8-9925207c189d-e06d6e9e" class="heading-style-h1-s"><?php the_title(); ?></h1>
                            </div>
                            <div id="w-node-_8bd7723a-60fd-4861-4ddb-1b672adc5f49-e06d6e9e">
                                <?php if (get_field('description_head')) : ?>
                                    <div class="padding-bottom padding-custom2">
                                        <div class="text-size-medium text-weight-medium text-color-neutral-lighter"><?php the_field('description_head') ?></div>
                                    </div>
                                <?php endif ?>

                                <?php if (get_field('paywall_modall_head') == true) : ?>
                                    <button class="button w-inline-block gradient-btn green-blue" onclick="openDemoPaywall()"><?php the_field('btn_text_head') ?></button>
                                <?php else : ?>
                                    <?php if (get_field('btn_text_head')) : ?>
                                        <div class="button-group">
                                            <a href="<?php the_field('btn_url_head') ?>" class="button w-inline-block">
                                                <div class="button-text"><?php the_field('btn_text_head') ?></div>
                                                <div class="overlay-gradient-1"></div>
                                                <div class="overlay-gradient-2"></div>
                                            </a>
                                        </div>
                                    <?php endif ?>
                                <?php endif ?>

                            </div>
                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="product_hero_image-wrapper is-observability">
                                <?php the_post_thumbnail('1536x1536', array('class' => 'product_hero_image w-100 h-100')); ?>
                                <div class="product_hero_image-bg is-right"></div>
                                <div class="product_hero_image-bg"></div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="section_hero-bg">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" loading="eager" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" loading="eager" alt="" class="section_hero-bg-gradient">
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

    <?php else : ?>

        <div class="section_home_hero">
            <div class="padding-global">
                <div class="container-large is-lines lines-vertical">
                    <div class="padding-section-hero">
                        <div class="max-width-custom1 align-center text-align-center">
                            <?php
                            if (get_field('title_head')) {
                                $title_head = get_field('title_head');
                            } else {
                                $title_head = get_the_title();
                            }
                            ?>
                            <div class="padding-bottom padding-medium">
                                <h1 class="heading-style-h1-home"><?php echo $title_head ?></h1>
                            </div>
                        </div>

                        <div class="max-width-52rem align-center text-align-center">
                            <?php if (get_field('description_head')) : ?>
                                <div class="padding-bottom padding-large">
                                    <div class="text-size-xlarge">
                                        <?php the_field('description_head') ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <div class="padding-bottom padding-huge">
                                <div fade-children="" class="button-group align-center test">

                                    <?php if (get_field('btn_text_head')) : ?>
                                        <a href="<?php the_field('btn_url_head') ?>" class="button w-inline-block">
                                            <div class="button-text"><?php the_field('btn_text_head') ?></div>
                                            <div class="overlay-gradient-1"></div>
                                            <div class="overlay-gradient-2"></div>
                                        </a>
                                    <?php endif ?>

                                    <?php if (get_field('btn_text_head_two')) : ?>
                                        <a href="<?php the_field('btn_url_head_two') ?>" class="button is-secondary w-inline-block">
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
                                        </a>
                                    <?php endif ?>
                                </div>
                            </div>

                        </div>

                        <?php $img_hero = get_field('img_hero'); ?>
                        <?php if ($img_hero) : ?>
                            <div class="img_hero text-align-center" style="--bg-url: url('<?php echo esc_url($img_hero['sizes']['2048x2048']); ?>');"></div>
                        <?php endif ?>

                        <?php get_template_part('templates/slider/logo') ?>

                    </div>

                    <div fade-down-children="" class="section_hero-bg">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
                    </div>
                </div>
            </div>
        </div>

        <?php if (get_field('lottie_section')) : ?>
            <div class="section_home_lottie">
                <div class="padding-global">
                    <div class="container-large is-dashes background-color-primary">
                        <div class="dots_wrapper">
                            <div class="dot is-bot-left"></div>
                            <div class="dot is-bot-right"></div>
                            <div class="dot is-top-right"></div>
                            <div class="dot is-top-left"></div>
                        </div>

                        <div class="padding-section-small z-index-2">

                            <?php if (get_field('description_lottie')) : ?>

                                <div class="max-width-large align-center text-align-center">
                                    <div class="text-size-large">
                                        <?php the_field('description_lottie') ?>
                                    </div>
                                </div>

                                <div class="is-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 741 756" fill="none" class="home_graph-bg">
                                        <g opacity="0.4">
                                            <g filter="url(#filter0_f_14897_86728)">
                                                <ellipse cx="335.4" cy="378" rx="104.4" ry="147" fill="#21835E" fill-opacity="0.4"></ellipse>
                                            </g>
                                            <g filter="url(#filter1_f_14897_86728)">
                                                <ellipse cx="474.6" cy="378" rx="104.4" ry="147" fill="#509FF8" fill-opacity="0.4"></ellipse>
                                            </g>
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_14897_86728" x="0.765594" y="0.765594" width="669.269" height="754.469" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feGaussianBlur stdDeviation="115.117" result="effect1_foregroundBlur_14897_86728"></feGaussianBlur>
                                            </filter>
                                            <filter id="filter1_f_14897_86728" x="208.366" y="69.1656" width="532.469" height="617.669" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feGaussianBlur stdDeviation="80.9172" result="effect1_foregroundBlur_14897_86728"></feGaussianBlur>
                                            </filter>
                                        </defs>
                                    </svg>
                                    <div data-w-id="ad058daa-6250-c615-f38c-4dcc2dd1e19c" data-animation-type="lottie" data-src="<?php echo get_template_directory_uri() ?>/assets/edge-delta-hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="0" data-duration="13.616666666666667">
                                    </div>
                                </div>

                            <?php endif ?>

                            <?php if (have_rows('bullets_pipelines')) : ?>
                                <div class="padding-bottom padding-small">
                                    <div class="home_bullets">
                                        <?php while (have_rows('bullets_pipelines')) : the_row(); ?>
                                            <div class="home_bullet">
                                                <div class="icon-product_large w-embed">
                                                    <?php echo get_sub_field('icon_svg') ?>
                                                </div>
                                                <div>
                                                    <div class="padding-bottom padding-xsmall">
                                                        <h3 class="home-bullet-heading text-size-xlarge"><?php the_sub_field('title') ?></h3>
                                                    </div>
                                                    <div class="text-size-medium text-color-neutral-lighter text-weight-medium"><?php the_sub_field('description') ?></div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif ?>

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
        <?php endif ?>

    <?php endif ?>





    <!-- Observation analysis -->
    <?php
    // get_template_part('templates/solutions-product/observation-analysis') 
    ?>

    <?php if (have_rows('observation_analysis')) : ?>

        <div class="section_observation_analyze">
            <div class="padding-global">
                <div class="container-large">
                    <?php $s = 0 ?>
                    <?php while (have_rows('observation_analysis')) : the_row(); ?>
                        <?php $s++ ?>

                        <div class="padding-section-medium z-index-2 <?php if ($s > 1) echo 'padding-bottom'; ?>">
                            <div class="align-center text-align-center">

                                <?php if (get_sub_field('subtitle_analysis')) : ?>
                                    <div class="padding-bottom padding-medium">
                                        <div class="tag"><?php the_sub_field('subtitle_analysis') ?></div>
                                    </div>
                                <?php endif; ?>

                                <div class="padding-bottom padding-large">
                                    <?php if (get_sub_field('title_analysis')) : ?>
                                        <div class="max-width-large align-center text-align-center padding-bottom padding-small">
                                            <h2><?php the_sub_field('title_analysis') ?></h2>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('desc_analysis')) : ?>
                                        <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_sub_field('desc_analysis') ?></div>
                                    <?php endif; ?>
                                </div>

                                <?php $image_analysis = get_sub_field('image_analysis') ?>

                                <div class="padding-bottom padding-large">
                                    <div class="pipelines_image-wrapper">
                                        <img src="<?php echo $image_analysis['sizes']['2048x2048'] ?>" sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 93vw" srcset="<?php echo $image_analysis['sizes']['medium_large'] ?> 800w, <?php echo $image_analysis['sizes']['large'] ?> 1080w, <?php echo $image_analysis['sizes']['1536x1536'] ?> 1600w, <?php echo $image_analysis['sizes']['2048x2048'] ?> 2518w" alt="<?php the_field('title_analysis') ?>" class="cover-img">
                                    </div>
                                </div>

                                <div class="padding-bottom padding-custom3">
                                    <?php if (have_rows('analysis')) : ?>
                                        <div class="home_bullets">
                                            <?php while (have_rows('analysis')) : the_row(); ?>
                                                <div id="w-node-c414b0c9-5d25-5824-59ec-6106823343b7-e06d6e9e" class="home_bullet">
                                                    <div class="icon-product_large w-embed">
                                                        <?php the_sub_field('svg') ?>
                                                    </div>
                                                    <div>
                                                        <div class="padding-bottom padding-xsmall">
                                                            <h3 class="home-bullet-heading"><?php the_sub_field('title') ?></h3>
                                                        </div>
                                                        <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('description') ?></div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php if (get_sub_field('btn_text_analysis')) : ?>
                                    <div class="display-inline">
                                        <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_sub_field('btn_url_analysis') ?>" class="button is-secondary w-inline-block">
                                            <div class="text-size-medium"><?php the_sub_field('btn_text_analysis') ?></div>
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
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
                </div>
            </div>
        </div>

    <?php endif; ?>
    <!-- Observation analysis -->




    <!-- Solution -->
    <?php get_template_part('templates/solutions-product/solution-left-right') ?>
    <!-- Solution -->


    <?php if (get_field('cta_product_black') === 'general') : ?>
        <!-- CTA Option-->
        <?php get_template_part('templates/cta/cta-modern') ?>
        <!-- CTA Option-->
    <?php elseif (get_field('cta_product_black') === 'new') : ?>
        <!-- CTA -->
        <?php get_template_part('templates/solutions-product/cta-modern') ?>
        <!-- CTA -->
    <?php endif ?>


    <!-- Solution -->
    <?php get_template_part('templates/solutions-product/solution-left-right-two') ?>
    <!-- Solution -->


    <!-- Observation -->
    <?php get_template_part('templates/solutions-product/observation') ?>
    <!-- Observation -->


    <!-- Additional -->
    <?php get_template_part('templates/solutions-product/additional') ?>
    <!-- Additional -->


    <!-- Resources -->
    <?php get_template_part('templates/solutions-product/resources') ?>
    <!-- Resources -->



    <?php $industry_adoption = get_field('industry_adoption_group') ?>
    <?php if ($industry_adoption) : ?>
        <div class="section_telemetry_pipelines">
            <div class="padding-global">
                <div class="container-large no-padding">
                    <div class="padding-section-medium">
                        <?php if ($industry_adoption['title']) : ?>
                            <div class="padding-bottom padding-large text-align-center">
                                <h2><?php echo $industry_adoption['title'] ?></h2>
                            </div>
                        <?php endif ?>

                        <?php if ($industry_adoption['industry_adoption']) : ?>
                            <div class="telemetry_pipelines">

                                <?php foreach ($industry_adoption['industry_adoption'] as $value) : ?>
                                    <div class="telemetry_item">
                                        <?php if ($value['title']) : ?>
                                            <h3><?php echo $value['title'] ?></h3>
                                        <?php endif ?>
                                        <?php if ($value['description']) : ?>
                                            <p><?php echo $value['description'] ?></p>
                                        <?php endif ?>
                                    </div>
                                <?php endforeach ?>

                            </div>
                        <?php endif ?>

                        <?php if ($industry_adoption['image']) : ?>
                            <div class="pipelines_image-wrapper">
                                <img class="cover-img" src="<?php echo $industry_adoption['image']['sizes']['1536x1536'] ?>" alt="<?php echo $industry_adoption['image']['alt'] ?>">
                            </div>
                        <?php endif ?>

                        <?php if ($industry_adoption['bullets_adoption']) : ?>
                            <div class="home_bullets">
                                <?php foreach ($industry_adoption['bullets_adoption'] as $value) : ?>
                                    <div class="home_bullet">
                                        <?php if ($value['logo']) : ?>
                                            <div class="">
                                                <img src="<?php echo $value['logo']['url'] ?>" alt="<?php echo $value['logo']['alt'] ?>">
                                            </div>
                                        <?php endif ?>
                                        <?php if ($value['description']) : ?>
                                            <p><?php echo $value['description'] ?></p>
                                        <?php endif ?>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>



    <?php if (get_field('add_globe')) : ?>
        <!-- Globe Section -->
        <div class="section_home_globe">
            <div class="padding-global">
                <div class="container-large no-padding">
                    <div class="globe_image-wrapper">
                        <div class="globe_text">
                            <div class="padding-section-small">
                                <div class="max-width-large align-center text-align-center">
                                    <h2 class="heading-style-h3"><?php the_field('title_globe') ?></h2>
                                </div>
                            </div>
                        </div>
                        <div id="edge-delta-globe"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1228 820" fill="none" class="globe_bg">
                            <g filter="url(#filter0_f_14897_82399)">
                                <ellipse cx="614.062" cy="485.852" rx="355.012" ry="226.938" fill="#21835E" fill-opacity="0.3"></ellipse>
                            </g>
                            <defs>
                                <filter id="filter0_f_14897_82399" x="0.391296" y="0.255157" width="1227.34" height="971.193" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                    <feGaussianBlur stdDeviation="129.329" result="effect1_foregroundBlur_14897_82399"></feGaussianBlur>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (document.getElementById('edge-delta-globe')) {
                    var script = document.createElement('script');
                    script.src = '<?php echo get_template_directory_uri() ?>/assets/js/edge-delta-globe.js';
                    document.body.appendChild(script);
                }
            });
        </script>
    <?php endif ?>




    <?php if (get_field('cta_bottom') == false) : ?>
        <!-- CTA Option-->
        <?php get_template_part('templates/cta/cta') ?>
        <!-- CTA Option-->
    <?php else : ?>
        <!-- CTA -->
        <?php get_template_part('templates/solutions-product/cta') ?>
        <!-- CTA -->
    <?php endif ?>


    <?php if (get_field('title_dive')) : ?>
        <div class="section_grid-2col is-relative">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-medium z-index-2">
                        <div class="padding-bottom padding-medium">
                            <div class="grid_2col">
                                <div class="grid_content">
                                    <?php if (get_field('subtitle_dive')) : ?>
                                        <div class="tag"><?php the_field('subtitle_dive') ?></div>
                                    <?php endif ?>
                                    <div>
                                        <?php if (get_field('title_dive')) : ?>
                                            <div class="padding-bottom padding-small">
                                                <h2 class="heading-style-h3"><?php the_field('title_dive') ?></h2>
                                            </div>
                                        <?php endif ?>

                                        <?php if (get_field('descripton_dive')) : ?>
                                            <div class="padding-bottom padding-small">
                                                <div class="text-rich-text w-richtext">
                                                    <?php the_field('descripton_dive') ?>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <?php if (get_field('btn_text_dive')) : ?>
                                        <a aria-label="Download Resource" href="<?php the_field('btn_url_dive') ?>" target="_blank" class="button is-resource w-inline-block">
                                            <div class="button-text"> <?php the_field('btn_text_dive') ?></div>
                                            <div class="overlay-gradient-1"></div>
                                            <div class="overlay-gradient-2"></div>
                                        </a>
                                    <?php endif ?>
                                </div>
                                <div>
                                    <?php $image_dive = get_field('image_dive') ?>
                                    <img src="<?php echo $image_dive['sizes']['1536x1536'] ?>" alt="<?php the_sub_field('title_dive') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section_cta-bg">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                        <div class="section_cta-gradient"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

<?php endwhile; ?>

<?php get_footer(); ?>