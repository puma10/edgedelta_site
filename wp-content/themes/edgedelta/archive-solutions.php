<?php get_header(); ?>
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog-section">
                <div class="max-width-large align-center text-align-center">
                    <h1 class="heading-style-h1-s">Use Cases</h1>
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

<div class="section_cta">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <?php if (have_posts()) : ?>
                    <div class="use-cases_grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="blog1_item w-inline-block">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="blog1_image-link">
                                        <div class="use-case_image-wrapper">
                                            <?php the_post_thumbnail(array(600, 600), array('class' => 'blog1_image', 'style' => 'filter: brightness(95%)')); ?>
                                        </div>
                                    </div>
                                <?php endif ?>

                                <div class="blog1_title-link">
                                    <h3 class="heading-style-h6-s"><?php the_title() ?></h3>
                                </div>
                                <?php if (get_field('description_head')) : ?>
                                    <div class="text-style-2lines text-size-medium"><?php the_field('description_head') ?></div>
                                <?php endif ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                    <?php custom_pagination(); ?>
                <?php else : ?>
                    <div class="no-posts">
                        <p><?php esc_html_e('No posts found.', 'edgedelta'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- News Form-->
<?php get_template_part('templates/blog/news-form') ?>
<!-- News Form-->


<?php get_footer(); ?>