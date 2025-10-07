<?php if (get_field('title_challenge')) : ?>
    <div class="section_use-case_challenge">
        <div class="use-case_divider"></div>
        <div class="padding-global">
            <div class="container-large">
                <div class="challenge_wrapper z-index-2">
                    <div class="align-center text-align-center">

                        <div class="padding-bottom padding-custom3">
                            <div class="tag">The Challenge</div>
                        </div>

                        <div class="padding-bottom padding-large">
                            <div class="max-width-xlarge align-center">
                                <div class="padding-bottom padding-small">
                                    <h2><?php the_field('title_challenge') ?></h2>
                                </div>
                                <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_field('desc_challenge') ?></div>
                            </div>
                        </div>

                        <div class="padding-bottom padding-huge">
                            <div class="use-case_challenge_grid">
                                <?php if (have_rows('challenge')) : ?>
                                    <?php $i = 0; ?>
                                    <?php while (have_rows('challenge')) : the_row(); ?>
                                        <?php $i++; ?>
                                        <div id="w-node-_0a10e34b-6677-81f7-ae5c-1bfea3a57744-78eaf37c" class="challenge_grid_item">
                                            <div class="challenge_grid_item-heading">
                                                <div class="use-case_icon-wrapper">
                                                    <div class="icon w-embed">
                                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.33666 15.3299L14.9967 9.66992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M14.9967 15.3299L9.33666 9.66992" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M9.16666 22.5H15.1667C20.1667 22.5 22.1667 20.5 22.1667 15.5V9.5C22.1667 4.5 20.1667 2.5 15.1667 2.5H9.16666C4.16666 2.5 2.16666 4.5 2.16666 9.5V15.5C2.16666 20.5 4.16666 22.5 9.16666 22.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h3 class="home-bullet-heading"><?php the_sub_field('title') ?></h3>
                                            </div>
                                            <div>
                                                <div class="text-weight-medium text-color-neutral-lighter text-size-medium"><?php the_sub_field('description') ?></div>
                                            </div>
                                        </div>

                                        <?php if ($i == 1 || $i == 2) : ?>
                                            <div id="w-node-_172843f0-8548-e476-b64c-7c32e9a61e29-78eaf37c" class="challenge_grid_divider"></div>
                                        <?php endif ?>

                                    <?php endwhile; ?>
                                <?php endif; ?>


                                <?php if (get_field('additional_item')) : ?>
                                    <div id="w-node-_216b2ffa-1ff9-3609-7eca-0e599003e8f2-08d984e2" class="challenge_grid_item is-last">
                                        <div class="max-width-medium align-center">
                                            <div class="text-size-large text-weight-semibold"><?php the_field('additional_item') ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>