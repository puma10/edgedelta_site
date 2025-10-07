<div class="section_cta is-relative">
    <div class="padding-global">
        <div class="container-large is-lines bot">
            <div class="padding-section-medium z-index-2">
                <?php $category = get_the_category() ?>
                <div class="padding-bottom padding-large">
                    <div class="videos_more_header">
                        <h2 class="heading-style-h4">More <?php echo $category[0]->name ?></h2>
                        <?php if ($category[0]->slug === 'videos') : ?>
                            <div class="display-inline">
                                <a data-w-id="d617ce2d-bf18-b18b-2c7b-55e47daf1ba1" href="/company/videos" class="button is-secondary is-small w-inline-block">
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
                                    <div class="text-size-medium">All Videos</div>
                                </a>
                            </div>
                        <?php endif ?>

                    </div>
                </div>


                <div class="padding-bottom padding-medium">
                    <div class="blog1_component">
                        <div class="blog1_list-wrapper w-dyn-list">
                            <div fs-cmsfilter-element="list" fs-cmsload-element="list" fs-cmsload-mode="pagination" role="list" class="blog1_list w-dyn-items">
                                <?php
                                $morePosts = get_posts(
                                    array(
                                        'post_type' => 'post',
                                        'category__in' => wp_get_post_categories(get_the_ID()),
                                        'numberposts'  => 3,
                                        'orderby' => 'rand',
                                        'post__not_in' => array(get_the_ID())
                                    )
                                );
                                ?>
                                <?php foreach ($morePosts as $morePost) { ?>

                                    <?php $cat = get_the_category() ?>


                                    <?php if ($cat[0]->slug === 'case-studies') {
                                        $img_class = "case-studies_logo";
                                        $img_block = "case-studies_image-wrapper";
                                    } else {
                                        $img_class = "blog1_image";
                                        $img_block = "blog1_image-wrapper";
                                    }

                                    ?>

                                    <div role="listitem" class="blog1_item w-dyn-item">
                                        <?php if (get_the_post_thumbnail($morePost->ID)) : ?>
                                            <a href="<?php echo get_permalink($morePost->ID) ?>" aria-label="<?php echo get_the_title($morePost) ?>" class="blog1_image-link w-inline-block">
                                                <div class="<?php echo $img_block ?>">
                                                    <?php echo get_the_post_thumbnail($morePost->ID, array(406, 406), array('class' => $img_class)); ?>
                                                    <?php if ($cat[0]->slug === 'case-studies') : ?>
                                                        <?php if (get_field('background_logo_svg', $morePost->ID)) : ?>
                                                            <div class="case-studies_bg w-embed">
                                                                <?php the_field('background_logo_svg', $morePost->ID) ?>
                                                            </div>
                                                        <?php endif ?>
                                                    <?php endif ?>
                                                </div>
                                            </a>
                                        <?php endif ?>
                                        <?php
                                        $taxonomy = 'subcategory';
                                        $terms = get_the_terms($morePost->ID, $taxonomy);
                                        ?>
                                        <?php if ($terms) : ?>
                                            <div class="blog1_category-link">
                                                <div fs-cmsfilter-field="category" class="text-size-medium">
                                                    <?php foreach ($terms as $term) {
                                                        echo esc_html($term->name);
                                                    } ?>
                                                </div>
                                            </div>
                                        <?php endif ?>

                                        <a href="<?php echo get_permalink($morePost->ID) ?>" class="blog1_title-link w-inline-block">
                                            <h3 fs-cmsfilter-field="name" class="heading-style-h6-s"><?php echo get_the_title($morePost) ?></h3>
                                        </a>

                                        <div class="padding-bottom padding-custom1">

                                            <?php if ($cat[0]->slug === 'videos') : ?>

                                                <div class="blog1_date-wrapper text-color-neutral-lighter">
                                                    <div><?php echo get_the_date('M j, Y') ?></div>
                                                    <?php if (get_field('videos_duration', $morePost->ID)) : ?>
                                                        <div class="blog1_text-divider">•</div>
                                                        <div class="videos_duration">
                                                            <div class="icon-1x1-small w-embed"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.6666 8.49992C14.6666 12.1799 11.68 15.1666 7.99998 15.1666C4.31998 15.1666 1.33332 12.1799 1.33332 8.49992C1.33332 4.81992 4.31998 1.83325 7.99998 1.83325C11.68 1.83325 14.6666 4.81992 14.6666 8.49992Z" stroke="#C0C3C1" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M10.4733 10.6198L8.40664 9.38647C8.04664 9.17314 7.7533 8.6598 7.7533 8.2398V5.50647" stroke="#C0C3C1" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg></div>
                                                            <div><?php the_field('videos_duration', $morePost->ID) ?></div>
                                                        </div>
                                                    <?php endif ?>
                                                </div>

                                            <?php else : ?>

                                                <?php if (get_field('description', $morePost->ID)) : ?>
                                                    <?php the_field('description', $morePost->ID) ?>
                                                <?php else : ?>
                                                    <div class="text-style-3lines text-color-neutral-lighter"><?php echo custom_excerpt(); ?></div>
                                                <?php endif ?>

                                            <?php endif ?>

                                        </div>
                                        <div class="display-inline">
                                            <a data-w-id="c5c73200-5f70-3286-563b-aabc971e16a9" href="<?php echo get_permalink($morePost->ID) ?>" class="button is-secondary is-small w-inline-block">
                                                <?php 
                                                // Check if we're showing videos
                                                $post_categories = get_the_category($morePost->ID);
                                                $is_video = false;
                                                foreach ($post_categories as $cat) {
                                                    if ($cat->slug === 'videos') {
                                                        $is_video = true;
                                                        break;
                                                    }
                                                }
                                                $button_text = $is_video ? 'Watch Video' : 'Read more';
                                                ?>
                                                <div class="text-size-medium"><?php echo $button_text; ?></div>
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
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" loading="eager" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
        </div>
    </div>
</div>