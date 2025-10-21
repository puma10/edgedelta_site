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

    <?php $cta_black = get_field('new_cta_bleck'); ?>

    <div class="padding-global">
        <div class="container-large background-color-primary">
            <div class="padding-section-large cta-line-top is-relative">
                <div class="home_cta_logo-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/cta-edge-delta.avif" data-w-id="8204c9fb-e5ef-4d29-936e-4fbbb5ae63a2" alt="" class="home_cta_logo">
                </div>
                <div class="max-width-large align-center text-align-center">
                    <?php if ($cta_black['title']) : ?>
                        <div class="padding-bottom padding-small">
                            <h2 data-w-id="8204c9fb-e5ef-4d29-936e-4fbbb5ae63a5" class="heading-style-h3"><?php echo $cta_black['title']; ?></h2>
                        </div>
                    <?php endif ?>
                    <div class="max-width-large align-center">
                        <?php if ($cta_black['description']) : ?>
                            <div class="padding-bottom padding-custom3">
                                <div class="text-color-neutral-lighter text-size-large"><?php echo $cta_black['description']; ?></div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div fade-down-children="" class="button-group align-center">
     
                        <?php if ($cta_black['paywall_modall_cta_black'] == true) : ?>
                            <button class="button w-inline-block gradient-btn green-blue" onclick="openDemoPaywall()"><?php echo $cta_black['free_trial_btn']; ?></button>
                        <?php else : ?>

                            <?php if ($cta_black['free_trial_btn']) : ?>
                                <a href="<?php echo $cta_black['free_trial_btn_url']; ?>" class="button w-inline-block">
                                    <div class="button-text"><?php echo $cta_black['free_trial_btn']; ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>

                            <?php if ($cta_black['request_demo_btn']) : ?>
                                <a href="<?php echo $cta_black['request_demo_btn_url']; ?>" class="button w-inline-block">
                                    <div class="button-text"><?php echo $cta_black['request_demo_btn']; ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>

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