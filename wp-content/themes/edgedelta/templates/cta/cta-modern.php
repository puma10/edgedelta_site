<div class="section_home_cta-trapeze">
    <div class="trapeze-divider-wrapper is-top">
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
    <div class="padding-global">
        <div class="container-large background-color-primary">
            <div class="padding-section-large cta-line-top is-relative">
                <div class="home_cta_logo-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cta-edge-delta.avif" data-w-id="8204c9fb-e5ef-4d29-936e-4fbbb5ae63a2" alt="" class="home_cta_logo">
                </div>
                <div class="max-width-large align-center text-align-center">
                    <?php if (get_field('title_cta_modern', 'option')) : ?>
                        <div class="padding-bottom padding-small">
                            <h2 data-w-id="8204c9fb-e5ef-4d29-936e-4fbbb5ae63a5" class="heading-style-h3"><?php the_field('title_cta_modern', 'option') ?></h2>
                        </div>
                    <?php endif ?>
                    <div class="max-width-large align-center">
                        <?php if (get_field('description_cta_modern', 'option')) : ?>
                            <div class="padding-bottom padding-custom3">
                                <div class="text-color-neutral-lighter text-size-large"><?php the_field('description_cta_modern', 'option') ?></div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div fade-down-children="" class="button-group align-center">
                        <?php if (is_page_template('page-templates/leading.php')) : ?>
                            <a href="<?php the_field('free_trial_btn_url_modern', 'option') ?>" class="button w-inline-block gradient-btn"><?php the_field('free_trial_btn_modern', 'option') ?></a>
                        <?php else : ?>
                            <?php if (get_field('free_trial_btn_modern', 'option')) : ?>
                                <a href="<?php the_field('free_trial_btn_url_modern', 'option') ?>" class="button w-inline-block">
                                    <div class="button-text"><?php the_field('free_trial_btn_modern', 'option') ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>
                        <?php endif ?>

                        <?php if (get_field('request_demo_btn_modern', 'option')) : ?>
                            <a href="<?php the_field('request_demo_btn_url_modern', 'option') ?>" class="button w-inline-block">
                                <div class="button-text"><?php the_field('request_demo_btn_modern', 'option') ?></div>
                                <div class="overlay-gradient-1"></div>
                                <div class="overlay-gradient-2"></div>
                            </a>
                        <?php endif ?>
                    </div>
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