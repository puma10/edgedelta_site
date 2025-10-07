<?php if (have_rows('solution')) : ?>

    <?php $k = 0; ?>
    <?php $totalSolution = count(get_field('solution')) ?>

    <?php while (have_rows('solution')) : the_row(); ?>
        <?php $k++; ?>
        <?php $image_position = get_sub_field('image_position') ? get_sub_field('image_position') : 'left'; ?>

        <div class="section_grid-2col <?php if ($k === $totalSolution) : echo 'is-relative';
                                        endif ?>">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-medium">

                        <?php if ($k === $totalSolution) : ?>
                            <div class="padding-bottom padding-large">
                            <?php endif ?>

                            <?php if ($image_position === 'center') : ?>
                                <!-- Center Layout - Full Width Image -->
                                <div class="align-center text-align-center">
                                    <?php if (get_sub_field('subtitle')) : ?>
                                        <div class="padding-bottom padding-medium">
                                            <div class="tag"><?php the_sub_field('subtitle') ?></div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('title')) : ?>
                                        <div class="padding-bottom padding-large">
                                            <div class="max-width-large align-center">
                                                <h2><?php the_sub_field('title') ?></h2>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php $image_solution = get_sub_field('image') ?>
                                    <?php if ($image_solution) : ?>
                                        <div class="padding-bottom padding-large">
                                            <img src="<?php echo $image_solution['sizes']['2048x2048'] ?>" sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 93vw" srcset="<?php echo $image_solution['sizes']['medium_large'] ?> 800w, <?php echo $image_solution['sizes']['large'] ?> 1080w, <?php echo $image_solution['sizes']['1536x1536'] ?> 1600w, <?php echo $image_solution['sizes']['2048x2048'] ?> 2518w" alt="<?php the_sub_field('title') ?>" class="cover-img">
                                        </div>
                                    <?php endif; ?>

                                    <?php if (have_rows('bullets')) : ?>
                                        <div class="padding-bottom padding-large">
                                            <div class="max-width-large align-center">
                                                <div class="grid_bullets">
                                                    <?php while (have_rows('bullets')) : the_row(); ?>
                                                        <div class="grid_bullet">
                                                            <div class="grid_bullet-header">
                                                                <div class="icon w-embed">
                                                                    <?php the_sub_field('svg') ?>
                                                                </div>
                                                                <h4 class="text-size-large text-weight-medium text-font-grotesk"><?php the_sub_field('title') ?></h4>
                                                            </div>
                                                            <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('deciption') ?></div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('btn_text')) : ?>
                                        <a href="<?php the_sub_field('btn_url') ?>" class="button is-secondary w-inline-block">
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
                                <!-- Two Column Layout (Left or Right) -->
                                <div class="grid_2col">

                                <?php if ($image_position === 'left') : ?>

                                    <div id="w-node-_86244ec1-1007-8d72-244f-d344669b5b34-e06d6e9e" class="grid_image-wrapper">
                                        <?php $image_solution = get_sub_field('image') ?>
                                        <img src="<?php echo $image_solution['sizes']['1536x1536'] ?>" alt="<?php the_sub_field('title') ?>" class="grid_image-cover-left">
                                        <div class="grid_gradient"></div>
                                    </div>

                                    <div id="w-node-_824bf2d4-f725-d47a-ff3b-88008819e874-e06d6e9e" class="grid_content">
                                        <div id="w-node-_1ce0fb48-e32a-b772-e3fd-5999c76a7644-e06d6e9e" class="tag"><?php the_sub_field('subtitle') ?></div>
                                        <div>
                                            <h3><?php the_sub_field('title') ?></h3>
                                        </div>
                                        <?php if (have_rows('bullets')) : ?>
                                            <div class="grid_bullets">
                                                <?php while (have_rows('bullets')) : the_row(); ?>
                                                    <div class="grid_bullet">
                                                        <div class="grid_bullet-header">
                                                            <div class="icon w-embed">
                                                                <?php the_sub_field('svg') ?>
                                                            </div>
                                                            <h4 class="text-size-large text-weight-medium text-font-grotesk"><?php the_sub_field('title') ?></h4>
                                                        </div>
                                                        <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('deciption') ?></div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('btn_text')) :  ?>
                                            <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_sub_field('btn_url') ?>" class="button is-secondary w-inline-block">
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

                                    <div id="w-node-_824bf2d4-f725-d47a-ff3b-88008819e874-e06d6e9e" class="grid_content">
                                        <div id="w-node-_1ce0fb48-e32a-b772-e3fd-5999c76a7644-e06d6e9e" class="tag"><?php the_sub_field('subtitle') ?></div>
                                        <div>
                                            <h3><?php the_sub_field('title') ?></h3>
                                        </div>
                                        <?php if (have_rows('bullets')) : ?>
                                            <div class="grid_bullets">
                                                <?php while (have_rows('bullets')) : the_row(); ?>
                                                    <div class="grid_bullet">
                                                        <div class="grid_bullet-header">
                                                            <div class="icon w-embed">
                                                                <?php the_sub_field('svg') ?>
                                                            </div>
                                                            <h4 class="text-size-large text-weight-medium text-font-grotesk"><?php the_sub_field('title') ?></h4>
                                                        </div>
                                                        <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('deciption') ?></div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('btn_text')) :  ?>
                                            <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_sub_field('btn_url') ?>" class="button is-secondary w-inline-block">
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

                                    <div id="w-node-_86244ec1-1007-8d72-244f-d344669b5b34-e06d6e9e" class="grid_image-wrapper">
                                        <?php $image_solution = get_sub_field('image') ?>
                                        <img src="<?php echo $image_solution['sizes']['1536x1536'] ?>" alt="<?php the_sub_field('title') ?>" class="grid_image-cover-left">
                                        <div class="grid_gradient"></div>
                                    </div>

                                <?php endif; ?>

                                </div>
                            <?php endif; ?>
                            <!-- End Layout Conditional -->

                            <?php if ($k === $totalSolution) : ?>
                            </div>
                        <?php endif ?>

                    </div>

                    <?php if (get_field('cta_product_black') !== 'disable' && $k === $totalSolution) : ?>
                        <div class="section_cta-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" loading="eager" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                            <div class="section_cta-gradient"></div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>