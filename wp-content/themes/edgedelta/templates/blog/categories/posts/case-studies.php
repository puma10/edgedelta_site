<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-case-study">
                <div class="case-study_grid">
                    <div class="case-study_hero-content">
                        <?php $cat = get_the_category() ?>

                        <?php if ($cat) : ?>
                            <div class="padding-bottom padding-small">
                                <div class="text-style-allcaps text-size-medium text-weight-medium text-color-neutral-lighter"><?php echo $cat[0]->name ?></div>
                            </div>
                        <?php endif ?>

                        <div class="padding-bottom padding-small">
                            <h1 class="heading-style-h3 text-weight-normal"><?php the_title() ?></h1>
                        </div>

                        <?php if (get_field('description')) : ?>
                            <div class="padding-bottom padding-medium">
                                <div class="text-size-large text-color-neutral-lighter"><?php the_field('description') ?></div>
                            </div>
                        <?php endif ?>

                        <?php $percentage_section = get_field('percentage_section') ?>

                        <?php if (!empty(array_filter($percentage_section))) : ?>
                            <div class="case-study_percent-wrap">
                                <?php
                                $percent = $percentage_section['rate'];
                                $radius = 28;
                                $circumference = 2 * M_PI * $radius;
                                $offset = $circumference - ($circumference * $percent / 100);
                                ?>
                                <svg width="66" height="66" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="33" cy="33" r="<?php echo $radius; ?>" fill="none" stroke="#252a26" stroke-width="8" />
                                    <circle cx="33" cy="33" r="<?php echo $radius; ?>" fill="none" stroke="#07b656" stroke-width="8" stroke-dasharray="<?php echo $circumference; ?>" stroke-dashoffset="<?php echo $offset; ?>" transform="rotate(-90 33 33)" />
                                </svg>

                                <div>
                                    <div class="w-embed">
                                        <div class="heading-style-h5 text-color-alternate"><?php echo $percentage_section['rate'] ?>%</div>
                                    </div>
                                    <div class="text-size-medium text-color-neutral-lighter"><?php echo $percentage_section['description'] ?></div>
                                </div>
                            </div>
                        <?php endif ?>

                        <div class="case-study_info-grid">
                            <?php if (get_field('employees')) : ?>
                                <div class="case-study_info-item">
                                    <div class="case-study_info-head">EMPLOYEES</div>
                                    <div class="text-color-alternate text-size-large"><?php the_field('employees') ?></div>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('headquarters')) : ?>
                                <div id="w-node-f225f197-440d-470b-8419-cee292cd4f9b-4a399f5f" class="case-study_info-item">
                                    <div class="case-study_info-head">HEADQUARTERS</div>
                                    <div class="text-color-alternate text-size-large"><?php the_field('headquarters') ?></div>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('solution')) : ?>
                                <div id="w-node-fb131083-4a09-789d-aa77-e0de9609517a-4a399f5f" class="case-study_info-item">
                                    <div class="case-study_info-head">SOLUTION</div>
                                    <div class="text-color-alternate text-size-large"><?php the_field('solution') ?></div>
                                </div>
                            <?php endif ?>
                            <?php if (get_field('industry')) : ?>
                                <div id="w-node-b61a1e20-06f1-54e5-9284-b87bcf83d5b8-4a399f5f" class="case-study_info-item">
                                    <div class="case-study_info-head">Industry</div>
                                    <div class="text-color-alternate text-size-large"><?php the_field('industry') ?></div>
                                </div>
                            <?php endif ?>
                        </div>

                    </div>

                    <div class="case-study-image-wrapper-copy">
                        <?php if (get_field('videolink')) : ?>
                            <div style="padding-top:56.25%;" class="w-video w-embed">
                                <iframe class="embedly-embed" src="<?php the_field('videolink') ?>" width="1920" height="1080" scrolling="no" title="Vimeo embed" frameborder="0" allow="autoplay; fullscreen; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe>
                            </div>
                        <?php else : ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(array(270, 270), array('class' => 'case-studies_logo-copy')); ?>
                                <?php if (get_field('background_logo_svg')) : ?>
                                    <div class="case-study_bg w-embed">
                                        <?php the_field('background_logo_svg') ?>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>
                        <?php endif ?>
                    </div>

                </div>
            </div>
            <div fade-down-children="" class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
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


<div class="section_cta is-relative">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="case-study_content_grid">

                    <div id="w-node-_52745488-47a1-8928-58b2-f1be4dacb6a0-4a399f5f" class="rt-wrap">
                        <div class="case-study_rt w-richtext">
                            <?php the_content() ?>
                        </div>
                    </div>

                    <div id="w-node-_17cd3560-f424-2ec1-4a74-16fb7c664739-4a399f5f" class="case-study_cta">
                        <h3 class="text-size-xlarge">Get Up and Running in Minutes</h3>
                        <div class="grid_bullets case-study">
                            <div class="grid_bullet">
                                <div class="grid_bullet-header">
                                    <div class="icon w-embed"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.9889 15.1604L2.46891 13.6404C1.84891 13.0204 1.84891 12.0004 2.46891 11.3804L3.9889 9.86039C4.2489 9.60039 4.4589 9.09038 4.4589 8.73038V6.58036C4.4589 5.70036 5.1789 4.98038 6.0589 4.98038H8.2089C8.5689 4.98038 9.0789 4.77041 9.3389 4.51041L10.8589 2.99039C11.4789 2.37039 12.4989 2.37039 13.1189 2.99039L14.6389 4.51041C14.8989 4.77041 15.4089 4.98038 15.7689 4.98038H17.9189C18.7989 4.98038 19.5189 5.70036 19.5189 6.58036V8.73038C19.5189 9.09038 19.7289 9.60039 19.9889 9.86039L21.5089 11.3804C22.1289 12.0004 22.1289 13.0204 21.5089 13.6404L19.9889 15.1604C19.7289 15.4204 19.5189 15.9304 19.5189 16.2904V18.4403C19.5189 19.3203 18.7989 20.0404 17.9189 20.0404H15.7689C15.4089 20.0404 14.8989 20.2504 14.6389 20.5104L13.1189 22.0304C12.4989 22.6504 11.4789 22.6504 10.8589 22.0304L9.3389 20.5104C9.0789 20.2504 8.5689 20.0404 8.2089 20.0404H6.0589C5.1789 20.0404 4.4589 19.3203 4.4589 18.4403V16.2904C4.4589 15.9204 4.2489 15.4104 3.9889 15.1604Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9 15.5L15 9.5" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14.4946 15H14.5036" stroke="#E6E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.49451 10H9.50349" stroke="#E6E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <div class="text-size-large text-weight-medium">Reduce Costs and Improve Insights</div>
                                </div>
                            </div>
                            <div class="grid_bullet">
                                <div class="grid_bullet-header">
                                    <div class="icon w-embed"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 14.5001C21.1046 14.5001 22 13.6047 22 12.5001C22 11.3956 21.1046 10.5001 20 10.5001C18.8954 10.5001 18 11.3956 18 12.5001C18 13.6047 18.8954 14.5001 20 14.5001Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20 6.49988C21.1046 6.49988 22 5.60445 22 4.49988C22 3.39531 21.1046 2.49988 20 2.49988C18.8954 2.49988 18 3.39531 18 4.49988C18 5.60445 18.8954 6.49988 20 6.49988Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20 22.5C21.1046 22.5 22 21.6046 22 20.5C22 19.3954 21.1046 18.5 20 18.5C18.8954 18.5 18 19.3954 18 20.5C18 21.6046 18.8954 22.5 20 22.5Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M4.00006 14.5001C5.10463 14.5001 6.00006 13.6047 6.00006 12.5001C6.00006 11.3956 5.10463 10.5001 4.00006 10.5001C2.89549 10.5001 2.00006 11.3956 2.00006 12.5001C2.00006 13.6047 2.89549 14.5001 4.00006 14.5001Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M6 12.5H18" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M18.0001 4.50012H14.0001C12.0001 4.50012 11.0001 5.50012 11.0001 7.50012V17.5001C11.0001 19.5001 12.0001 20.5001 14.0001 20.5001H18.0001" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <div class="text-size-large text-weight-medium">Improve Data Quality and Usability</div>
                                </div>
                            </div>
                            <div class="grid_bullet">
                                <div class="grid_bullet-header">
                                    <div class="icon w-embed"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.96 18.34L19.33 18.89C18.88 19.04 18.52 19.39 18.37 19.85L17.82 21.48C17.35 22.89 15.37 22.86 14.93 21.45L13.08 15.5C12.72 14.32 13.81 13.22 14.98 13.59L20.94 15.44C22.34 15.88 22.36 17.87 20.96 18.34Z" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M22 12.5C22 6.98 17.52 2.5 12 2.5C6.48 2.5 2 6.98 2 12.5C2 18.02 6.48 22.5 12 22.5" stroke="#E6E7E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <div class="text-size-large text-weight-medium">Build and Manage Pipelines Visually</div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-top padding-small">
                            <a box-shadow="" data-w-id="1bb820b8-c698-f3d4-5e52-c6185cdfaea5" href="https://id.edgedelta.com/signin/register?fromURI=https://app.edgedelta.com" target="_blank" class="button is-small w-inline-block">
                                <div class="text-size-medium">Start Free Trial</div>
                                <div class="overlay-gradient-1"></div>
                                <div class="overlay-gradient-2"></div>
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

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('templates/blog/more') ?>