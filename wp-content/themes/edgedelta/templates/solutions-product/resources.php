<?php if (get_field('title_resources')) :  ?>
    <div class="section_product_resources">
        <div class="padding-global">
            <div class="container-large is-lines lines-vertical">
                <div class="padding-section-medium z-index-2">
                    <div class="align-center text-align-center">
                        <div class="padding-bottom padding-xlarge">
                            <h2 class="text-color-gradient heading-style-h4"><?php the_field('title_resources') ?></h2>
                        </div>
                    </div>
                    <div class="resources_grid">
                        <?php if (have_rows('resources')) : ?>
                            <?php while (have_rows('resources')) : the_row(); ?>
                                <?php $resource = get_sub_field('resource') ?>
                                <div id="w-node-_3e1c5b37-0991-f8a2-7f9f-47045aeb494b-5aeb4942" class="resources_grid-item">
                                    <div class="resources_image-wrapper">
                                        <?php echo get_the_post_thumbnail($resource->ID, 'large', array('class' => 'cover-img')); ?>
                                    </div>
                                    <div class="resources_text-wrapper">
                                        <div class="resources_text">
                                            <?php $categories = get_the_category($resource->ID); ?>
                                            <div class="resources_category-tag"><?php echo $categories[0]->name ?></div>
                                            <div class="heading-style-h6-s"><?php echo $resource->post_title ?></div>
                                            <div class="text-size-medium text-sm"><?php echo custom_excerpt($resource->ID); ?></div>
                                        </div>
                                        <a data-w-id="c5c73200-5f70-3286-563b-aabc971e16a9" href="<?php echo $resource->guid ?>" class="button is-secondary is-small w-inline-block">
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
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>