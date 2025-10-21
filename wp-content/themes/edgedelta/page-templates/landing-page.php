<?php

/**
 * Template Name: Landing Page
 */

get_header('three');
?>

<div class="section_home_hero" style="z-index: 3;">
    <div class="hero-content">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-hero">
                    <div class="padding-bottom align-center text-align-center mb-cs-4">
                        <?php if (get_field('title_hero')) : ?>
                            <h1 class="heading-style-h1-home mb-cs-2"><?php the_field('title_hero') ?></h1>
                        <?php else : ?>
                            <h1 class="heading-style-h1-home mb-cs-2"><?php the_title() ?></h1>
                        <?php endif ?>
                        <?php if (get_field('description_hero')) : ?>
                            <div class="max-width-custom37 align-center">
                                <p class="roboto-mono"><?php the_field('description_hero') ?></p>
                            </div>
                        <?php endif ?>
                    </div>

                    <!-- AI Demo iframe -->
                    <div class="img_hero text-align-center">
                        <?php
                        $img_hero = get_field('img_hero');
                        ?>
                        <?php if ($img_hero) : ?>
                            <img src="<?php echo esc_url($img_hero['url']); ?>" alt="<?php echo esc_attr($img_hero['alt']); ?>" class="hero-fallback">
                        <?php endif; ?>
                        <iframe class="hero-iframe" 
                            allow="clipboard-read; clipboard-write"
                            src="https://play.edgedelta.com/ai-demo-01K5XR92CK3RENSPPA4PRKJ52Q/ai/chat/01K6N8NBTQCH9D3BF7MRWXPFGE?thread=01K70DCPV69PBCQXDD3K5HEZXJ&message=01K70DDAENP9HAMTJW0R5CHEP9"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php if (get_field('logo_slider')) : ?>
    <div class="section-trusted">
        <div class="padding-global">
            <div class="container-large">
                <?php if (get_field('title_logo_slider')) : ?>
                    <p class="text-align-center"><?php the_field('title_logo_slider') ?></p>
                <?php endif ?>
                <?php get_template_part('templates/slider/logo'); ?>
            </div>
        </div>
    </div>
<?php endif ?>


<?php if (have_rows('features')) : ?>
    <div class="section_features">
        <?php while (have_rows('features')) : the_row(); ?>
            <div class="feature">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="text-align-center mb-cs-4">
                            <?php if (get_sub_field('title')) : ?>
                                <h2 class="h3 mb-cs-2"><?php the_sub_field('title') ?></h2>
                            <?php endif ?>
                            <?php if (get_sub_field('description')) : ?>
                                <div class="max-width-large align-center max-width-custom32">
                                    <p class="text-white"><?php the_sub_field('description') ?></p>
                                </div>
                            <?php endif ?>
                        </div>

                        <?php $feature_video = get_sub_field('video'); ?>
                        <?php $feature_img = get_sub_field('image'); ?>

                        <?php if ($feature_video) : ?>
                            <div class="feature-img">
                                <video poster="<?php echo esc_url($feature_img['sizes']['2048x2048']); ?>" muted playsinline preload="none" loop>
                                    <source src="<?php echo esc_url($feature_video['url']); ?>" type="<?php echo esc_attr($feature_video['mime_type']); ?>">
                                </video>
                            </div>
                        <?php elseif ($feature_img) : ?>
                            <div class="feature-img">
                                <img src="<?php echo esc_url($feature_img['sizes']['2048x2048']); ?>" alt="<?php the_sub_field('title') ?>">
                            </div>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif ?>




<div class="gr_violet">
    <!-- Reviews Section -->
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2" style="padding: 1rem;">
                <div class="margin-top margin-custom2">
                    <div class="padding-bottom padding-xxlarge">
                        <div class="max-width-large align-center text-align-center">
                            <?php if (get_field('title_reviews')) : ?>
                                <h2 class="heading-style-h3 mb-cs-2"><?php the_field('title_reviews') ?></h2>
                            <?php endif ?>
                        </div>
                        <?php if (get_field('description_reviews')) : ?>
                            <div class="max-width-large align-center max-width-custom32 text-align-center">
                                <p class="text-white"><?php the_field('description_reviews') ?></p>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <?php get_template_part('templates/slider/swiper') ?>
            </div>
        </div>
    </div>

    <?php if (get_field('title_pipelines')) : ?>
        <!-- Data Pipelines Feature Section - After Testimonials -->
        <div class="section_features_cursor section_pipeline_feature">
            <div class="padding-global">
                <div class="container-large">
                    <div class="padding-section-large">
                        <div class="cursor_feature_block">
                            <div class="cursor_feature_header text-align-center mb-cs-4">
                                <h2 class="heading-style-h3 mb-cs-2"><?php the_field('title_pipelines') ?></h2>
                                <?php if (get_field('description_pipelines')) : ?>
                                    <div class="max-width-large align-center max-width-custom32">
                                        <p class="text-white"><?php the_field('description_pipelines') ?></p>
                                    </div>
                                <?php endif ?>
                            </div>

                            <?php $image_pipelines = get_field('image_pipelines'); ?>
                            <?php if ($image_pipelines) : ?>
                                <div class="cursor_code_editor feature_gradient_5">
                                    <img src="<?php echo esc_url($image_pipelines['sizes']['2048x2048']); ?>" alt="<?php the_field('title_pipelines') ?>" class="feature_image_display">
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

</div>



<?php if (get_field('title_observability')) : ?>
    <!-- Observability Section - EdgeDelta Style -->
    <div class="section_home_observability is-relative">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-medium z-index-2">
                    <div class="align-center text-align-center">

                        <div class="padding-bottom padding-large">
                            <?php if (get_field('title_observability_copy')) : ?>
                                <div class="padding-bottom padding-medium">
                                    <div class="tag"><?php the_field('title_observability_copy') ?></div>
                                </div>
                            <?php endif ?>

                            <div class="mb-cs-2">
                                <h2><?php the_field('title_observability') ?></h2>
                            </div>

                            <?php if (get_field('description_observability')) : ?>
                                <div class="max-width-large align-center max-width-custom32">
                                    <p class="text-white"><?php the_field('description_observability') ?></p>
                                </div>
                            <?php endif ?>
                        </div>

                        <?php if (have_rows('observability')) : ?>
                            <div class="padding-bottom padding-custom3">
                                <div class="observability_cursor_grid">
                                    <?php $i = 1;  ?>
                                    <?php while (have_rows('observability')) : the_row(); ?>
                                        <div class="observability_cursor_card">
                                            <div class="cursor_card_icon">
                                                <?php if ($i === 1) : ?>
                                                    <div class="cursor_visual_element frontier_visual">
                                                        <svg width="120" height="120" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="animation: float 3s ease-in-out infinite;">
                                                            <!-- Sparkle/Stars AI Icon -->
                                                            <path d="M24 8L26.5 18.5L37 21L26.5 23.5L24 34L21.5 23.5L11 21L21.5 18.5L24 8Z" fill="currentColor" opacity="0.8" />
                                                            <path d="M15 12L16 15L19 16L16 17L15 20L14 17L11 16L14 15L15 12Z" fill="currentColor" opacity="0.6" />
                                                            <path d="M33 28L34 31L37 32L34 33L33 36L32 33L29 32L32 31L33 28Z" fill="currentColor" opacity="0.6" />
                                                            <circle cx="24" cy="21" r="2" fill="currentColor" />
                                                        </svg>
                                                    </div>
                                                <?php elseif ($i === 2) : ?>
                                                    <div class="cursor_visual_element familiar_visual">
                                                        <div class="visual_cubes"></div>
                                                    </div>
                                                <?php elseif ($i === 3) : ?>
                                                    <div class="cursor_visual_element privacy_visual">
                                                        <div class="visual_circle"></div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <?php if (get_sub_field('title')) : ?>
                                                <h3 class="cursor_card_title"><?php the_sub_field('title') ?></h3>
                                            <?php endif ?>

                                            <?php if (get_sub_field('description')) : ?>
                                                <p class="cursor_card_description"><?php the_sub_field('description') ?></p>
                                            <?php endif ?>

                                            <?php if (get_sub_field('btn_text')) : ?>
                                                <div class="cursor_card_link_wrapper">
                                                    <a href="<?php the_sub_field('btn_url') ?>" class="cursor_card_learn_more">
                                                        <?php the_sub_field('btn_text') ?>
                                                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="currentColor" fill-opacity="0.2" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                        <?php $i++ ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif ?>

                    </div>
                </div>

                <div class="section_cta-bg">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" alt="" class="section_cta_bg-stars">
                </div>

            </div>
        </div>
    </div>
<?php endif ?>



<!-- CTA Option-->
<?php get_template_part('templates/cta/cta-modern') ?>
<!-- CTA Option-->





<!-- CTA Black Section -->
<?php if (get_field('cta_black') == 'general') : ?>
    <?php get_template_part('templates/cta/cta-modern') ?>
<?php elseif (get_field('cta_black') == 'new') : ?>
    <?php get_template_part('templates/solutions-product/cta-modern') ?>
<?php endif ?>



<?php if (have_rows('awards')) : ?>
    <!-- Awards Section -->
    <div class="section_home_awards is-relative">
        <div class="padding-global">
            <div class="container-large">
                <div class="home_awards_component z-index-2">
                    <?php $j = 1;  ?>
                    <?php while (have_rows('awards')) : the_row(); ?>
                        <div class="awards_item">
                            <?php $image_awards = get_sub_field('logo') ?>
                            <?php if ($image_awards) : ?>
                                <div class="awards_image-wrapper padding-bottom padding-small">
                                    <img src="<?php echo $image_awards['sizes']['medium'] ?>" alt="<?php the_sub_field('title') ?>" class="awards_image">
                                </div>
                            <?php endif ?>
                            <?php if (get_sub_field('title')) : ?>
                                <div class="padding-bottom padding-xxsmall">
                                    <div class="text-size-large text-color-alternate text-weight-medium"><?php the_sub_field('title') ?></div>
                                </div>
                            <?php endif ?>
                            <?php if (get_sub_field('description')) : ?>
                                <div><?php the_sub_field('description') ?></div>
                            <?php endif ?>
                        </div>
                        <?php if ($j == 1 || $j == 2) : ?>
                            <div class="awards_divider"></div>
                        <?php endif ?>
                        <?php $j++ ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>



<!-- Globe Section -->
<!-- <div class="section_home_globe">
    <div class="padding-global">
        <div class="container-large no-padding">
            <div class="globe_image-wrapper">
                <div class="globe_text">
                    <div class="padding-section-small">
                        <div class="max-width-large align-center text-align-center">
                            <h2 class="heading-style-h3">Working with Companies Around the World</h2>
                        </div>
                    </div>
                </div>
                <div id="edge-delta-globe"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1228 820" fill="none" class="globe_bg">
                    <g filter="url(#filter0_f_14897_82399)">
                        <ellipse cx="614.062" cy="485.852" rx="355.012" ry="226.938" fill="#21835E" fill-opacity="0.3"></ellipse>
                    </g>
                    <defs>
                        <filter id="filter0_f_14897_82399" x="0.391296" y="0.255157" width="1227.34" height="971.193" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                            <feGaussianBlur stdDeviation="129.329" result="effect1_foregroundBlur_14897_82399"></feGaussianBlur>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div> -->



<?php if (get_field('cta_bottom') == false) : ?>
    <!-- CTA Option-->
    <?php get_template_part('templates/cta/cta') ?>
    <!-- CTA Option-->
<?php else : ?>
    <!-- CTA -->
    <?php get_template_part('templates/solutions-product/cta') ?>
    <!-- CTA -->
<?php endif ?>

<!-- Paywall modal -->
<?php get_template_part('templates/modal/paywall') ?>
<!-- Paywall modal -->

<?php get_footer(); ?>

<script>
    function initTestimonialSwiper() {
        if (typeof Swiper !== 'undefined') {
            const testimonialSwiper = new Swiper('.swiper.is-slider-main', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev',
                },
                speed: 800,
            });
        } else {
            // Retry if Swiper not loaded yet
            setTimeout(initTestimonialSwiper, 100);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTestimonialSwiper);
    } else {
        initTestimonialSwiper();
    }
</script>

<script>
    // Load Globe JS if on homepage
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('edge-delta-globe')) {
            var script = document.createElement('script');
            script.src = '<?php echo get_template_directory_uri() ?>/assets/js/edge-delta-globe.js';
            document.body.appendChild(script);
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const videos = document.querySelectorAll('.feature-img video');
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        if (isMobile) {
            videos.forEach(video => {
                video.removeAttribute('autoplay');
                video.load();
            });
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const video = entry.target;

                if (entry.isIntersecting) {
                    const playPromise = video.play();
                    if (playPromise !== undefined) {
                        playPromise.catch(() => {
                            const startPlayback = () => {
                                video.play().catch(() => {});
                                document.removeEventListener('click', startPlayback);
                            };
                            document.addEventListener('click', startPlayback);
                        });
                    }
                } else {
                    video.pause();
                }
            });
        }, {
            threshold: 0.3
        });

        videos.forEach(video => {
            video.muted = true;
            video.loop = true;
            observer.observe(video);
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hero = document.querySelector('.img_hero');
        const iframe = hero.querySelector('.hero-iframe');
        const fallback = hero.querySelector('.hero-fallback');
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        if (isMobile) {
            if (fallback) fallback.style.display = 'block';
        } else {
            iframe.style.display = 'block';
        }
    });
</script>