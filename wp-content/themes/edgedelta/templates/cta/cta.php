<div class="section_cta is-relative overflow-auto">
    <div class="padding-global">
        <div class="container-large is-lines line-bottom-0">
            <div class="padding-section-large z-index-2">
                <div class="align-center text-align-center">
                    <?php if (get_field('title_cta', 'option')) : ?>
                        <div class="padding-bottom padding-small">
                            <div class="max-width-large align-center text-align-center">
                                <h2 data-w-id="cdeed66d-cb9d-f603-d745-74109435ff82" class="heading-style-h3"><?php the_field('title_cta', 'option') ?></h2>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (get_field('description_cta', 'option')) : ?>
                        <div class="max-width-large align-center">
                            <div class="padding-bottom padding-large">
                                <div class="text-size-large text-color-neutral-lighter"><?php the_field('description_cta', 'option') ?></div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div fade-up-children="" class="button-group align-center">

                        <?php if (is_page_template('page-templates/leading.php')) : ?>
                            <a href="<?php the_field('free_trial_btn_url', 'option') ?>" class="button w-inline-block gradient-btn green-blue"><?php the_field('free_trial_btn', 'option') ?></a>
                        <?php else : ?>
                            <?php if (get_field('free_trial_btn', 'option')) : ?>
                                <a href="<?php the_field('free_trial_btn_url', 'option') ?>" class="button w-inline-block">
                                    <div class="button-text"><?php the_field('free_trial_btn', 'option') ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>
                        <?php endif ?>

                        <?php if (get_field('request_demo_btn', 'option')) : ?>
                            <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_field('request_demo_btn_url', 'option') ?>" class="button is-secondary w-inline-block">
                                <div class="text-size-medium"><?php the_field('request_demo_btn', 'option') ?></div>
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
            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" loading="eager" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
            <div class="dots_wrapper">
                <div class="dot is-bot-left"></div>
                <div class="dot is-bot-right"></div>
                <div class="dot is-top-right"></div>
                <div class="dot is-top-left"></div>
            </div>
        </div>
    </div>
</div>