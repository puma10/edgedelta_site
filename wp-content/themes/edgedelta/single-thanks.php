<?php get_header(); ?>

<style>
.video-embed-container {
    max-width: 1200px;
    margin: 0 auto;
    border-radius: 8px;
    overflow: hidden;
    background: #000;
}

.video-embed-container iframe {
    width: 100%;
    height: 100%;
}

/* Responsive video wrapper */
.video-embed-container > div[style*="padding"] {
    width: 100%;
}

@media (max-width: 991px) {
    .video-embed-container {
        max-width: 100%;
    }
}

.thank-you-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
    font-size: 18px;
    /* Let WordPress editor formatting take precedence */
}
</style>

<?php
while (have_posts()) : the_post(); ?>
    <div class="section_product_hero">
        <div class="padding-global">
            <div class="container-large is-lines background-color-primary">
                <div class="padding-section-hero">
                    <div class="align-center text-align-center">
                        <?php if (get_field('title')) : ?>
                            <div class="padding-bottom padding-small">
                                <h1 class="heading-style-h1-s"><?php the_field('title'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('description')) : ?>
                            <div class="padding-bottom padding-large">
                                <?php the_field('description'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php
                        // Check if embed_video field has content
                        $embed_video = get_field('embed_video');
                        if ($embed_video) : 
                            // Only add padding if there's title or description above
                            $has_content_above = get_field('title') || get_field('description');
                            $padding_class = $has_content_above ? 'padding-bottom padding-large' : '';
                        ?>
                            <div class="<?php echo $padding_class; ?>">
                                <div class="video-embed-container">
                                    <?php
                                    // Check if it's a script tag or iframe
                                    if (strpos($embed_video, '<script') !== false || strpos($embed_video, '<iframe') !== false) {
                                        // Output the embed code directly
                                        echo $embed_video;
                                    } else {
                                        // If it's just a URL, create an iframe
                                        ?>
                                        <div style="padding:56.25% 0 0 0;position:relative;">
                                            <iframe 
                                                src="<?php echo esc_url($embed_video); ?>" 
                                                style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                                frameborder="0" 
                                                allow="autoplay; fullscreen; picture-in-picture" 
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php
                        // Add post content under the video - always show if there's any content
                        $post_content = get_post_field('post_content', get_the_ID());
                        if ($post_content) : ?>
                            <div class="padding-bottom padding-large">
                                <div class="thank-you-content">
                                    <?php
                                    // Apply content filters to handle shortcodes, etc.
                                    echo apply_filters('the_content', $post_content);
                                    ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <!-- Debug: No content found -->
                            <div style="display: none;">No content: <?php echo htmlspecialchars($post_content); ?></div>
                        <?php endif; ?>
                        
                        <?php if (get_field('text_btn')) : ?>
                            <div class="button-group align-center padding-bottom padding-medium">
                                <a aria-label="Download Whitepaper" 
                                   href="<?php the_field('text_url'); ?>" 
                                   target="_blank" 
                                   class="button w-inline-block">
                                    <div class="button-text"><?php the_field('text_btn'); ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="section_hero-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.avif"
                         sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw"
                         srcset="<?php echo get_template_directory_uri(); ?>/assets/images/stars-500.png 500w,
                                 <?php echo get_template_directory_uri(); ?>/assets/images/stars-800.png 800w,
                                 <?php echo get_template_directory_uri(); ?>/assets/images/stars-1080.png 1080w,
                                 <?php echo get_template_directory_uri(); ?>/assets/images/stars.avif 1517w"
                         alt="" class="section_hero-bg-stars">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-gradient.avif" 
                         alt="" class="section_hero-bg-gradient">
                </div>
            </div>
        </div>
        <div class="trapeze-divider-wrapper">
            <div class="trapeze-bg">
                <div class="trapeze-bg-inside">
                    <div class="trapeze-triangle is-bot-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-62777.svg" alt="">
                    </div>
                    <div class="trapeze-triangle is-bot-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame-62777.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (have_rows('ready_for_more')) : ?>
        <div class="section_product_resources">
            <div class="padding-global">
                <div class="container-large is-lines lines-vertical">
                    <div class="padding-section-medium z-index-2">
                        <div class="align-center text-align-center">
                            <div class="padding-bottom padding-small">
                                <h2 class="text-color-gradient heading-style-h4">Ready for more?</h2>
                            </div>
                            <div class="padding-bottom padding-xlarge">
                                <p class="text-size-medium">Check out these additional resources:</p>
                            </div>
                        </div>
                        <div class="resources_grid">
                            <?php while (have_rows('ready_for_more')) : the_row(); ?>
                                <div class="resources_grid-item ready-more-th">
                                    <?php $post_id = get_sub_field('post'); ?>
                                    <?php if (get_the_post_thumbnail($post_id)) : ?>
                                        <div class="resources_image-wrapper">
                                            <?php echo get_the_post_thumbnail($post_id, array(768, 768), array('class' => 'cover-img')); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="resources_text-wrapper">
                                        <div class="resources_text">
                                            <?php
                                            $taxonomy = 'subcategory';
                                            $terms = get_the_terms($post_id, $taxonomy);
                                            ?>
                                            <?php if ($terms) : ?>
                                                <div class="blog1_category-link">
                                                    <div fs-cmsfilter-field="category" class="text-size-medium">
                                                        <?php foreach ($terms as $term) : ?>
                                                            <div class="resources_category-tag"><?php echo $term->name; ?></div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="heading-style-h6-s"><?php echo get_the_title($post_id); ?></div>
                                        </div>
                                        <a href="<?php echo get_permalink($post_id); ?>" 
                                           class="button is-secondary is-small w-inline-block">
                                            <div class="text-size-medium"><?php the_sub_field('text_btn'); ?></div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>

<?php get_footer(); ?>