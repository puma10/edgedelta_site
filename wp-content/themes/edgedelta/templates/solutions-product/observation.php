<?php if (get_field('title_observation')) : ?>
    <div class="section_observation_trusted is-relative">
        <div class="padding-global">
            <div class="container-large is-lines">
                <div class="padding-top padding-xhuge z-index-2">

                    <div class="max-width-large align-center text-align-center">
                        <div class="padding-bottom padding-large">
                            <h2 class="heading-style-h3"><?php the_field('title_observation') ?></h2>
                        </div>
                    </div>

                    <?php $f = 0; ?>
                    <?php if (have_rows('observation')) : ?>

                        <?php while (have_rows('observation')) : the_row(); ?>
                            <?php $f++; ?>

                            <div class="trusted_content">

                                <?php if ($f % 2 === 0) :  ?>

                                    <div class="trusted_img_wrapper">
                                        <?php if (get_sub_field('video_image') === 'image') : ?>
                                            <?php $image_observation = get_sub_field('image') ?>
                                            <img src="<?php echo $image_observation['sizes']['1536x1536'] ?>" alt="" class="testimonial_logo-image">
                                        <?php else : ?>
                                            <div style="padding-top:56.27659574468085%" class="trusted_video w-video w-embed">
                                                <?php $video_observation = get_sub_field('video') ?>
                                                <iframe class="embedly-embed" src="<?php echo $video_observation ?>" width="940" height="529" scrolling="no" allowfullscreen="" title=""></iframe>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="dots_wrapper">
                                        <div class="dot is-bot-left"></div>
                                        <div class="dot is-bot-right"></div>
                                    </div>

                                    <div id="w-node-_8d2ced5e-68e4-0a80-99bd-12a80f6a6c51-eb797422" class="trusted_text-wrapper">
                                        <div class="padding-bottom padding-small">
                                            <h3 class="heading-style-h6-s">“<?php the_sub_field('deciption') ?>”</h3>
                                        </div>
                                        <?php if (get_sub_field('btn_text')) {
                                            $p = 'class="padding-bottom padding-large"';
                                        }  ?>

                                        <div <?php echo $p ?>>
                                            <div data-w-id="8d2ced5e-68e4-0a80-99bd-12a80f6a6c56" class="text-size-large text-color-neutral-lighter text-style-3lines"><?php the_sub_field('author') ?></div>
                                        </div>

                                        <?php if (get_sub_field('btn_text')) :  ?>
                                            <a data-w-id="51d74240-d3c8-c5e5-43ab-7074d671da2c" href="<?php the_sub_field('btn_url') ?>" class="button is-secondary w-inline-block">
                                                <div class="text-size-medium"><?php the_sub_field('btn_text') ?></div>
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
                                        <?php endif; ?>
                                    </div>

                                <?php else : ?>

                                    <div id="w-node-_8d2ced5e-68e4-0a80-99bd-12a80f6a6c51-eb797422" class="trusted_text-wrapper">
                                        <div class="padding-bottom padding-small">
                                            <h3 class="heading-style-h6-s">“<?php the_sub_field('deciption') ?>”</h3>
                                        </div>
                                        <?php if (get_sub_field('btn_text')) {
                                            $p = 'class="padding-bottom padding-large"';
                                        }  ?>

                                        <div <?php echo $p ?>>
                                            <div data-w-id="8d2ced5e-68e4-0a80-99bd-12a80f6a6c56" class="text-size-large text-color-neutral-lighter text-style-3lines"><?php the_sub_field('author') ?></div>
                                        </div>

                                        <?php if (get_sub_field('btn_text')) :  ?>
                                            <a data-w-id="51d74240-d3c8-c5e5-43ab-7074d671da2c" href="<?php the_sub_field('btn_url') ?>" class="button is-secondary w-inline-block">
                                                <div class="text-size-medium"><?php the_sub_field('btn_text') ?></div>
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
                                        <?php endif; ?>

                                    </div>

                                    <div class="dots_wrapper">
                                        <div class="dot is-bot-left"></div>
                                        <div class="dot is-bot-right"></div>
                                        <div class="dot is-top-right"></div>
                                        <div class="dot is-top-left"></div>
                                    </div>

                                    <div class="trusted_img_wrapper">
                                        <?php if (get_sub_field('video_image') === 'image') : ?>
                                            <?php $image_observation = get_sub_field('image') ?>
                                            <img src="<?php echo $image_observation['sizes']['1536x1536'] ?>" alt="" class="testimonial_logo-image">
                                        <?php else : ?>
                                            <div style="padding-top:56.27659574468085%" class="trusted_video w-video w-embed">
                                                <?php $video_observation = get_sub_field('video') ?>
                                                <iframe class="embedly-embed" src="<?php echo $video_observation ?>" width="940" height="529" scrolling="no" allowfullscreen="" title=""></iframe>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif ?>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php if (!get_field('solution_additionally')) : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
        <?php endif ?>

    </div>
<?php endif; ?>