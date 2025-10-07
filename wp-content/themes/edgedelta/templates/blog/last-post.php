<?php

$cat = get_the_category();

$args = array(
    'category_name'  => $cat[0]->slug,
    'posts_per_page' => 1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>

        <div id="elementToHide" class="blogs_component">
            <div class="blogs_featured-list-wrapper w-dyn-list">
                <div role="list" class="blogs_featured-list w-dyn-items">
                    <div role="listitem" class="blogs_featured-item w-dyn-item">

                        <a href="<?php the_permalink(); ?>" class="blogs_featured-image-link w-inline-block">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="blogs_featured-image-wrapper">
                                    <?php the_post_thumbnail(array(600, 600), array('class' => 'blog_featured-image')); ?>
                                </div>
                            <?php endif ?>
                        </a>
                        
                        <div class="blogs_featured-item-content">

                            <?php
                            $taxonomy = 'subcategory';
                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                            ?>

                            <?php if ($terms) : ?>
                                <div class="blog1_category-link">
                                    <div class="text-size-medium">
                                        <?php foreach ($terms as $term) {
                                            echo esc_html($term->name);
                                        } ?>

                                    </div>
                                </div>
                            <?php endif ?>


                            <a href="<?php the_permalink(); ?>" class="blogs_featured-title-link w-inline-block">
                                <h3 fs-cmsfilter-field="name" class="heading-style-h6"><?php the_title(); ?></h3>
                            </a>

                            <div fs-cmsfilter-field="desc" class="text-size-medium text-color-neutral-lighter"><?php echo has_excerpt() ? get_the_excerpt() : custom_excerpt(); ?></div>

                            <div fs-cmsload-element="scroll-anchor" class="padding-bottom padding-small">
                                <div class="blog1_date-wrapper">
                                    <?php
                                    $post_date = get_the_date('M j, Y');
                                    $reading_time = get_reading_time(get_the_ID());
                                    ?>
                                    <div><?php echo esc_html($post_date); ?></div>
                                    <div class="blog1_text-divider">•</div>
                                    <div><?php echo esc_html($reading_time); ?> minutes</div>
                                </div>
                            </div>

                            <div class="display-inline">
                                <a data-w-id="979c967a-5e5b-ae25-ddbf-91efbcd566a4" href="<?php the_permalink(); ?>" class="button is-secondary w-inline-block">
                                    <?php 
                                    // Check if we're on the videos category page
                                    $current_cat = get_queried_object();
                                    $button_text = ($current_cat && $current_cat->slug === 'videos') ? 'Watch Video' : 'Read more';
                                    ?>
                                    <div class="text-size-medium"><?php echo $button_text; ?></div>
                                    <div class="icon w-embed" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
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
<?php endwhile;
    wp_reset_postdata();
endif;
?>