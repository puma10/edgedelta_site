<div class="section_cta is-relative">
    <div class="padding-global">
        <div class="container-large is-lines bot">
            <div class="padding-section-medium z-index-2">
                <div class="padding-bottom padding-large">
                    <h2 class="heading-style-h4">Related Posts</h2>
                </div>
                <div class="blog1_component">
                    <div class="blog1_list-wrapper w-dyn-list">
                        <div role="list" class="events_list w-dyn-items">
                            <?php
                            $relatedPosts = get_posts(
                                array(
                                    'post_type' => 'post',
                                    'category__in' => wp_get_post_categories(get_the_ID()),
                                    'numberposts'  => 2,
                                    'orderby' => 'rand',
                                    'post__not_in' => array(get_the_ID())
                                )
                            );
                            ?>

                            <?php foreach ($relatedPosts as $relatedPost) { ?>
                                <div role="listitem" class="blog1_item w-dyn-item">
                                    <?php if (get_the_post_thumbnail($relatedPost->ID)) : ?>
                                        <a aria-label="<?php echo get_the_title($relatedPost) ?>" href="<?php echo get_permalink($relatedPost->ID) ?>" class="blog1_image-link w-inline-block">
                                            <div class="blog_more_image-wrapper">
                                                <?php echo get_the_post_thumbnail($relatedPost->ID, array(624, 624), array('class' => 'blog1_image')); ?>
                                            </div>
                                        </a>
                                    <?php endif ?>

                                    <?php
                                    $taxonomy = 'subcategory';
                                    $terms = get_the_terms($relatedPost->ID, $taxonomy);
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

                                    <a aria-label="<?php echo get_the_title($relatedPost) ?>" href="<?php echo get_permalink($relatedPost->ID) ?>" class="blog1_title-link w-inline-block">
                                        <h3 class="heading-style-h6-s"><?php echo get_the_title($relatedPost) ?></h3>
                                    </a>

                                    <div class="blog1_date-wrapper text-color-neutral-lighter">
                                        <?php
                                        $post_date = get_the_date('M j, Y');
                                        $reading_time = get_reading_time($relatedPost->ID);
                                        ?>
                                        <div><?php echo esc_html($post_date); ?></div>
                                        <div class="blog1_text-divider">•</div>
                                        <div><?php echo esc_html($reading_time); ?> minutes</div>
                                    </div>

                                    <div class="padding-top padding-medium">
                                        <div class="display-inline">
                                            <a data-w-id="09a24189-bc5d-9803-bb58-aa5d4adf0f11" href="<?php echo get_permalink($relatedPost->ID) ?>" class="button is-secondary is-small w-inline-block">
                                                <?php 
                                                // Check if the related post is in the videos category
                                                $post_categories = get_the_category($relatedPost->ID);
                                                $is_video = false;
                                                foreach ($post_categories as $category) {
                                                    if ($category->slug === 'videos') {
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

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>