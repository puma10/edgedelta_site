<?php

/**
 * Template Name: Subprocessors
 */

get_header();
?>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog-section">
                <div class="max-width-large align-center text-align-center">
                    <div class="padding-bottom padding-custom1">
                        <h1 class="heading-style-h1-s"><?php the_title() ?></h1>
                    </div>
                    <?php if (get_field('description')) : ?>
                        <div class="padding-bottom padding-large">
                            <div class="text-size-large"><?php the_field('description') ?></div>
                        </div>
                    <?php endif ?>

                    <?php if (get_field('text_btn')) : ?>
                        <div class="display-inline">
                            <a href="<?php the_field('btn_url') ?>" target="_blank" class="button w-inline-block">
                                <div class="button-text"><?php the_field('text_btn') ?></div>
                                <div class="overlay-gradient-1"></div>
                                <div class="overlay-gradient-2"></div>
                            </a>
                        </div>
                    <?php endif ?>

                </div>
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

<?php if (have_rows('subprocessors')) : ?>
    <div class="section_cta">
        <div class="padding-global z-index-2">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="subprocessors_list w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <?php while (have_rows('subprocessors')) : the_row(); ?>
                                <div role="listitem" class="w-dyn-item">
                                    <div class="subprocessors_list-item is-last">
                                        <div class="subprocessors_name">
                                            <div><?php the_sub_field('name') ?></div>
                                        </div>
                                        <div>
                                            <?php if (get_sub_field('description')) : ?>
                                                <div><?php the_sub_field('description') ?></div>
                                            <?php endif ?>
                                        </div>
                                        <div>
                                            <?php if (get_sub_field('location')) : ?>
                                                <div><?php the_sub_field('location') ?></div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php get_footer(); ?>