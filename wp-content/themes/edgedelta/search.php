<?php get_header(); ?>
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog-section text-align-center">
                <div class="max-width-large align-center">
                    <div class="padding-bottom padding-custom1">
                        <h1 class="heading-style-h1-s">
                            <?php
                            printf(
                                esc_html__('Results for "%s"', 'twentytwentyone'),
                                '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
                            );
                            ?>
                        </h1>
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

<div class="section_cta">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="z-index-2" style="margin: 0 0 15px;">
                    <?php if (have_posts()) : ?>
                        <div class="blog1_component">
                            <div class="blog1_list-wrapper w-dyn-list">
                                <div class="blog1_list w-dyn-items post-list">
                                    <!-- Posts-->
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php get_template_part('templates/blog/post') ?>
                                    <?php endwhile; ?>
                                    <!-- Posts-->
                                </div>
                                <!-- Pagination -->
                                <?php custom_pagination(); ?>
                                <!-- Pagination -->
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="no-posts">
                            <div class="integrations_empty">
                                <div class="text-size-xlarge text-weight-medium"><?php esc_html_e('No posts found.', 'edgedelta'); ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
            </div>
        </div>
    </div>
</div>

<!-- News Form-->
<?php get_template_part('templates/blog/news-form') ?>
<!-- News Form-->


<?php get_footer(); ?>