<?php if (get_field('title_additional')) :  ?>
    <div class="section_grid-2col is-relative">
        <div class="padding-global">
            <div class="container-large is-lines-horizontal">
                <div class="padding-section-medium">
                    <div class="grid_2col">
                        <div id="w-node-_0a93be3a-3e30-2c47-ab14-84853d1d300d-e06d6e9e" class="grid_content">
                            <div>
                                <div class="padding-bottom padding-small">
                                    <h3><?php the_field('title_additional') ?></h3>
                                </div>
                                <?php if (get_field('descripton_additional')) :  ?>
                                    <div class="text-size-large text-weight-medium text-color-neutral-lighter"><?php the_field('descripton_additional') ?></div>
                                <?php endif; ?>
                            </div>

                            <?php if (get_field('btn_text_additional')) :  ?>
                                <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_field('btn_url_additional') ?>" class="button is-secondary w-inline-block">
                                    <div class="text-size-medium"><?php the_field('btn_text_additional') ?></div>
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
                        <div class="grid_image is-border-0">
                            <?php $image_additional = get_field('image_additional') ?>
                            <img src="<?php echo $image_additional['sizes']['1536x1536'] ?>" alt="<?php the_field('title_additional') ?>" class="route_img">
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/276.svg" alt="" class="lights-white">
        </div>
    </div>
<?php endif; ?>