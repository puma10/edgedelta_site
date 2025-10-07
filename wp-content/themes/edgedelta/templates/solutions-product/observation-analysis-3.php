<?php if (get_field('title_analysis_3') || get_field('subtitle_analysis_3') || get_field('desc_analysis_3') || get_field('image_analysis_3')) : ?>
<div class="section_observation_analyze">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="align-center text-align-center">

                    <?php if (get_field('subtitle_analysis_3')) : ?>
                        <div class="padding-bottom padding-medium">
                            <div class="tag"><?php the_field('subtitle_analysis_3') ?></div>
                        </div>
                    <?php endif; ?>

                    <div class="padding-bottom padding-large">
                        <?php if (get_field('title_analysis_3')) : ?>
                            <div class="max-width-large align-center text-align-center padding-bottom padding-small">
                                <h2><?php the_field('title_analysis_3') ?></h2>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('desc_analysis_3')) : ?>
                            <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_field('desc_analysis_3') ?></div>
                        <?php endif; ?>
                    </div>

                    <?php $image_analysis_3 = get_field('image_analysis_3') ?>
                    <?php if ($image_analysis_3) : ?>
                    <div class="padding-bottom padding-large">
                        <div class="pipelines_image-wrapper">
                            <img src="<?php echo $image_analysis_3['sizes']['2048x2048'] ?>" sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 93vw" srcset="<?php echo $image_analysis_3['sizes']['medium_large'] ?> 800w, <?php echo $image_analysis_3['sizes']['large'] ?> 1080w, <?php echo $image_analysis_3['sizes']['1536x1536'] ?> 1600w, <?php echo $image_analysis_3['sizes']['2048x2048'] ?> 2518w" alt="<?php the_field('title_analysis_3') ?>" class="cover-img">
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="padding-bottom padding-custom3">
                        <?php if (have_rows('analysis_3')) : ?>
                            <div class="home_bullets">
                                <?php while (have_rows('analysis_3')) : the_row(); ?>
                                    <div id="w-node-c414b0c9-5d25-5824-59ec-6106823343b7-e06d6e9e" class="home_bullet">
                                        <div class="icon-product_large w-embed">
                                            <?php the_sub_field('svg') ?>
                                        </div>
                                        <div>
                                            <div class="padding-bottom padding-xsmall">
                                                <h3 class="home-bullet-heading"><?php the_sub_field('title') ?></h3>
                                            </div>
                                            <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('description') ?></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (get_field('btn_text_analysis_3')) : ?>
                        <div class="display-inline">
                            <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_field('btn_url_analysis_3') ?>" class="button is-secondary w-inline-block">
                                <div class="text-size-medium"><?php the_field('btn_text_analysis_3') ?></div>
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
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
        </div>
    </div>
</div>
<?php endif; ?>
