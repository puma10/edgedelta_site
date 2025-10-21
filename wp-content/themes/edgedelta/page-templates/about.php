<?php

/**
 * Template Name: About
 */

get_header();
?>

<style>
    .heading-style-h1-s{
        font-size: 4rem;
        font-weight: 600;
    }
</style>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines lines-vertical">
            <div class="padding-section-hero is-about">
                <div class="padding-top padding-medium">
                    <div class="max-width-large align-center text-align-center">
                        <?php if (get_field('title')) : ?>
                            <div class="padding-bottom padding-custom1">
                                <h1 class="heading-style-h1-s"><?php the_field('title') ?></h1>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('description')) : ?>
                            <div>
                                <div class="text-size-large text-color-neutral-lighter"><?php the_field('description') ?></div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-gradient">
            </div>
        </div>
    </div>
</div>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary padding-0">
            <div class="about_grid">
                <div class="about_grid_text-wrapper is-top">
                    <div>
                        <?php if (get_field('mission_title')) : ?>
                            <div class="padding-bottom padding-small">
                                <h2 class="heading-style-h6"><?php the_field('mission_title') ?></h2>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('mission_subdescription')) : ?>
                            <div class="text-size-large text-weight-semibold"><?php the_field('mission_subdescription') ?></div>
                        <?php endif ?>
                    </div>
                    <?php if (get_field('mission_description')) : ?>
                        <div class="text-size-large text-color-neutral-lighter"><?php the_field('mission_description') ?></div>
                    <?php endif ?>
                </div>

                <div id="w-node-b725f0d1-c43f-3bb0-1832-b556d8404cfc-10ae9c04" class="about_grid_divider-v"></div>

                <div id="w-node-_11d45b04-caf2-5314-3abf-0fafb01d1817-10ae9c04" class="about_grid_text-wrapper is-bullets">
                    <?php if (have_rows('info_bullets')) : ?>
                        <div class="about_grid_bullets">
                            <?php while (have_rows('info_bullets')) : the_row(); ?>
                                <div class="about_grid_bullet">
                                    <div class="about_grid_bullet-icon">
                                        <?php if (get_sub_field('svg')) : ?>
                                            <div class="icon z-index-1 w-embed">
                                                <?php echo get_sub_field('svg') ?>
                                            </div>
                                        <?php endif ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/star-sm.avif" alt="star-sm" class="about_grid_bullet-stars">
                                    </div>
                                    <div>
                                        <?php if (get_sub_field('title')) : ?>
                                            <div class="text-size-large text-weight-semibold text-color-ultralight"><?php the_sub_field('title') ?></div>
                                        <?php endif ?>
                                        <?php if (get_sub_field('description')) : ?>
                                            <div class="text-color-neutral-lighter"><?php the_sub_field('description') ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif ?>
                    <?php if (have_rows('investors_logo')) : ?>
                        <div class="about_grid_investors">
                            <div class="padding-bottom padding-custom2">
                                <h4 class="text-size-large text-color-ultralight">Our Investors</h4>
                            </div>
                            <div class="about_grid_investors-wrapper">
                                <?php while (have_rows('investors_logo')) : the_row(); ?>
                                    <?php $investors_logo = get_sub_field('logo') ?>
                                    <img src="<?php echo $investors_logo['sizes']['thumbnail'] ?>" alt="<?php echo $investors_logo['title'] ?>">
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>

                <div id="w-node-f0879743-d520-f550-21a0-f7a7262050af-10ae9c04" class="about_grid_divider-h"></div>

                <div id="w-node-_59000032-0e2e-997d-1816-23eb57c2d2ec-10ae9c04" class="about_grid_text-wrapper is-bot">
                    <div>
                        <?php if (get_field('vision_title')) : ?>
                            <div class="padding-bottom padding-small">
                                <h3 class="heading-style-h6"><?php the_field('vision_title') ?></h3>
                            </div>
                        <?php endif ?>
                        <?php if (get_field('vision_subdescription')) : ?>
                            <div class="text-size-large text-weight-semibold"><?php the_field('vision_subdescription') ?></div>
                        <?php endif ?>
                    </div>
                    <?php if (get_field('vision_description')) : ?>
                        <div class="text-size-large text-color-neutral-lighter"><?php the_field('vision_description') ?></div>
                    <?php endif ?>
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
        <div class="container-medium">
            <div class="padding-section-large z-index-2">
                <?php if (get_field('title_team')) : ?>
                    <div class="align-center text-align-center">
                        <div class="max-width-large align-center text-align-center">
                            <div class="padding-bottom padding-xxlarge">
                                <h2 class="heading-style-h3"><?php the_field('title_team') ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (have_rows('team')) : ?>
                    <div class="about_team">
                        <?php while (have_rows('team')) : the_row(); ?>
                            <div class="about_team_item">
                                <?php $photo = get_sub_field('photo') ?>
                                <?php if ($photo) : ?>
                                    <div class="about_team_image">
                                        <img src="<?php echo $photo['sizes']['medium_large']  ?>" alt="<?php the_sub_field('name') ?>" class="cover-img">
                                    </div>
                                <?php endif ?>
                                <div class="about_team_text">
                                    <?php if (get_sub_field('name')) : ?>
                                        <div class="text-size-xlarge text-weight-semibold"><?php the_sub_field('name') ?></div>
                                    <?php endif ?>
                                    <?php if (get_sub_field('position')) : ?>
                                        <div class="text-color-green text-size-medium text-weight-medium"><?php the_sub_field('position') ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
        </div>
    </div>
</div>


<?php if (get_field('cta_product_black') == 'general') : ?>
    <!-- CTA Option-->
    <?php get_template_part('templates/cta/cta-modern') ?>
    <!-- CTA Option-->
<?php elseif (get_field('cta_product_black') == 'new') : ?>
    <!-- CTA -->
    <?php get_template_part('templates/solutions-product/cta-modern') ?>
    <!-- CTA -->
<?php endif ?>



<div class="section_about_values">
    <div class="padding-global">
        <?php if (get_field('title_values')) : ?>
            <div class="container-large is-lines lines-vertical">
                <div class="padding-section-medium z-index-2" style="padding: 0rem 0rem 2rem;">
                    <div class="align-center text-align-center">
                        <div class="max-width-large align-center text-align-center">
                            <div class="padding-top padding-medium">
                                <h2 class="heading-style-h3"><?php the_field('title_values') ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
            </div>
        <?php endif ?>
        <?php if (have_rows('values')) : ?>
            <div class="container-large is-dashes">
                <div class="about_values_grid">
                    <?php $j = 0 ?>
                    <?php while (have_rows('values')) : the_row(); ?>
                        <?php $j++ ?>
                        <div class="values_grid_item">
                            <?php if (get_sub_field('svg')) : ?>
                                <div class="icon w-embed">
                                    <?php echo get_sub_field('svg') ?>
                                </div>
                            <?php endif ?>
                            <div>
                                <?php if (get_sub_field('title')) : ?>
                                    <div class="padding-bottom padding-xxsmall">
                                        <div class="text-size-large text-weight-medium text-color-alternate"><?php the_sub_field('title') ?></div>
                                    </div>
                                <?php endif ?>
                                <?php if (get_sub_field('description')) : ?>
                                    <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('description') ?></div>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php if ($j == 1 || $j == 2) : ?>
                            <div class="values_grid_divider"></div>
                        <?php endif ?>
                    <?php endwhile; ?>
                </div>
                <div class="dots_wrapper">
                    <div class="dot is-bot-left"></div>
                    <div class="dot is-bot-right"></div>
                    <div class="dot is-top-right"></div>
                    <div class="dot is-top-left"></div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>


<div class="section_about_values">
    <div class="padding-global">
        <div class="container-large is-lines line-bottom-0">
            <div class="padding-section-medium">
                <div class="about_exp_grid">
                    <div id="w-node-_038c4e71-5e36-dd18-85ef-e8ca4e33a208-10ae9c04" class="about_exp_text-wrapper">
                        <div>
                            <?php if (get_field('title_founding')) : ?>
                                <div class="padding-bottom padding-small">
                                    <h3><?php the_field('title_founding') ?></h3>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('description_founding')) : ?>
                                <div class="text-size-medium text-weight-medium"><?php the_field('description_founding') ?></div>
                            <?php endif ?>
                        </div>
                        <div>
                            <?php if (get_field('title_experience')) : ?>
                                <div class="padding-bottom padding-small">
                                    <h3><?php the_field('title_experience') ?></h3>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('description_experience')) : ?>
                                <div class="text-size-medium text-weight-medium"><?php the_field('description_experience') ?></div>
                            <?php endif ?>
                        </div>
                    </div>

                    <?php $img = get_field('img') ?>
                    <?php if ($img) : ?>
                        <div class="about_exp_image-wrapper">
                            <img src="<?php echo $img['sizes']['large'] ?>" alt="<?php echo $img['title'] ?>" class="about_exp_image">
                        </div>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>