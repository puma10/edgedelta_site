<?php get_header(); ?>
<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-blog-section">
                <div class="max-width-large align-center text-align-center">
                    <div>
                        <h1 class="heading-style-h1-s"><?php the_title() ?></h1>
                    </div>
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="section_cta">
            <div class="padding-global z-index-2">
                <div class="container-medium">
                    <div class="padding-section-large">
                        <div class="blog_rt w-richtext">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>