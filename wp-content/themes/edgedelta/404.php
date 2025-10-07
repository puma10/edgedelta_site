<?php get_header(); ?>

<div class="section_404">
    <div class="padding-global">
        <div class="container-large is-lines lines-vertical">
            <div class="padding-section-hero">
                <div class="_404_wrap">
                    <h3 class="_404_heading">404</h3>
                    <div class="padding-bottom padding-large">
                        <div class="text-size-large text-color-neutral-lighter">The page you are looking for can’t be found.</div>
                    </div>
                    <a href="<?php echo home_url(); ?>" class="button w-inline-block">
                        <div class="button-text">Return Home</div>
                        <div class="overlay-gradient-1"></div>
                        <div class="overlay-gradient-2"></div>
                    </a>
                </div>
            </div>
            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
            <div class="dots_wrapper">
                <div class="dot is-bot-left"></div>
                <div class="dot is-bot-right"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>