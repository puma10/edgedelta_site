<?php if (have_rows('solution')) : ?>
    <?php $j = 0; ?>
    <?php $totalSolution = count(get_field('solution')) ?>
    <?php while (have_rows('solution')) : the_row(); ?>
        <?php $j++; ?>
        <div class="section_use-case_challenge">
            <?php if ($j == 1) : ?>
                <div class="use-case_divider"></div>
            <?php endif ?>
            <div class="padding-global overflow-clip">
                <div class="container-large">
                    <div class="padding-bottom padding-section-large">
                        <div class="challenge_wrapper z-index-2">
                            <div class="align-center text-align-center">

                                <?php if ($j == 1) : ?>
                                    <div class="padding-bottom padding-large">
                                        <div class="tag">The Solution</div>
                                    </div>
                                <?php endif ?>

                                <div class="padding-bottom padding-large">
                                    <div class="max-width-xlarge align-center">

                                        <div class="padding-bottom padding-small">
                                            <h2><?php the_sub_field('title') ?></h2>
                                        </div>

                                        <div class="padding-bottom padding-medium">
                                            <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_sub_field('desciption') ?></div>
                                        </div>

                                        <div class="padding-bottom padding-custom3">
                                            <div class="grid_image-wrapper">
                                                <?php $image_solution = get_sub_field('image') ?>
                                                <img src="<?php echo $image_solution['sizes']['1536x1536'] ?>" alt="<?php the_sub_field('title') ?>" class="use-case_solution_image">
                                                <div class="grid_gradient"></div>
                                            </div>
                                        </div>

                                        <?php if (have_rows('bullets')) : ?>
                                            <div class="home_bullets">
                                                <?php while (have_rows('bullets')) : the_row(); ?>
                                                    <div class="home_bullet">
                                                        <div class="icon w-embed">
                                                            <?php the_sub_field('svg') ?>
                                                        </div>
                                                        <div>
                                                            <div class="text-size-large text-weight-medium text-color-alternate"><?php the_sub_field('deciption') ?></div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($j === $totalSolution) : ?>
                        <div class="section_cta-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                            <div class="section_cta-gradient"></div>
                        </div>
                    <?php endif ?>

                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>