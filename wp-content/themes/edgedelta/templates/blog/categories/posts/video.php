<?php
// Check if HubSpot form is available for this video
$hubspot_form_script = get_field('hubspot_form_script');
$hasHubspotForm = !empty($hubspot_form_script);
?>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-case-study">

                <?php if ($hasHubspotForm) : ?>
                    <!-- Gated Video Layout - Events Page Style -->
                    <div class="case-study_grid">
                        <!-- Left content section -->
                        <div class="case-study_hero-content">
                            <?php
                            $taxonomy = 'subcategory';
                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                            ?>
                            <?php if ($terms) : ?>
                                <div class="padding-bottom padding-small">
                                    <div class="text-style-allcaps text-size-medium text-weight-medium text-color-green">
                                        <?php foreach ($terms as $term) {
                                            echo esc_html($term->name);
                                        } ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <div class="padding-bottom padding-small">
                                <h1 class="heading-style-h3" style="font-weight: 800;"><?php the_title() ?></h1>
                            </div>

                            <?php if (get_field('date_of_event') || get_field('time_of_event')) : ?>
                            <div class="padding-bottom padding-medium">
                                <div class="events_info" style="display: flex; flex-direction: column; gap: 8px;">
                                    <?php if (get_field('date_of_event')) : ?>
                                        <div class="events_info-item">
                                            <div class="icon w-embed">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.66667 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.3333 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M2.91667 8.07483H17.0833" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.5 7.58317V14.6665C17.5 17.1665 16.25 18.8332 13.3333 18.8332H6.66667C3.75 18.8332 2.5 17.1665 2.5 14.6665V7.58317C2.5 5.08317 3.75 3.4165 6.66667 3.4165H13.3333C16.25 3.4165 17.5 5.08317 17.5 7.58317Z" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.0789 11.9165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.0789 14.4165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.99624 11.9165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.99624 14.4165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.91193 11.9165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.91193 14.4165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="text-size-medium text-color-green"><?php the_field('date_of_event') ?></div>
                                        </div>
                                    <?php endif ?>

                                    <?php if (get_field('time_of_event')) : ?>
                                        <div class="events_info-item">
                                            <div class="icon w-embed">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0001 18.8332C14.6025 18.8332 18.3334 15.1022 18.3334 10.4998C18.3334 5.89746 14.6025 2.1665 10.0001 2.1665C5.39771 2.1665 1.66675 5.89746 1.66675 10.4998C1.66675 15.1022 5.39771 18.8332 10.0001 18.8332Z" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.0917 13.2582L10.5083 11.7499C10.0583 11.4915 9.69165 10.8415 9.69165 10.3165V6.8999" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="text-size-medium text-color-green"><?php the_field('time_of_event') ?></div>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php
                            // Video Host Information (similar to blog author section)
                            $author_id = get_the_author_meta('ID');
                            $author_name = get_the_author_meta('display_name', $author_id);
                            $author_bio = get_the_author_meta('description', $author_id);
                            $author_avatar = get_avatar($author_id, $size = '48', $default = '', $alt = '', $args = array('class' => 'blog_author_image'));
                            ?>
                            <div class="padding-bottom padding-medium">
                                <div class="w-dyn-list">
                                    <div role="list" class="w-dyn-items">
                                        <div role="listitem" class="blog_author-item w-dyn-item">
                                            <div class="blog_author_image-wrap">
                                                <?php echo $author_avatar; ?>
                                            </div>
                                            <div>
                                                <div class="text-size-medium text-weight-medium"><?php echo esc_html($author_name); ?></div>
                                                <?php if ($author_bio) : ?>
                                                    <div class="text-color-neutral-lighter"><?php echo esc_html($author_bio); ?></div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            // Check if featured image exists and date/time fields don't exist
                            if (has_post_thumbnail() && !get_field('date_of_event') && !get_field('time_of_event')) : ?>
                                <div class="padding-bottom padding-medium">
                                    <div class="video-featured-image">
                                        <?php the_post_thumbnail('large', ['class' => 'video-featured-img']); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Mobile-only form container - placed after image -->
                            <div class="video-form-mobile-only" style="display: none;">
                                <div id="video-gate-form-mobile" class="video-gate-form-container">
                                    <div class="request-demo_form-wrap video-form-wrap">
                                        <div class="request-demo_form video-form w-embed w-script">
                                            <?php if ($hubspot_form_script) : ?>
                                                <?php if (strpos($hubspot_form_script, '<script') === false) : ?>
                                                    <!-- HubSpot form script doesn't include script tags -->
                                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                                    <script>
                                                    <?php echo $hubspot_form_script; ?>
                                                    </script>
                                                <?php else : ?>
                                                    <!-- HubSpot form script already includes script tags -->
                                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                                    <?php echo $hubspot_form_script; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="dots_wrapper">
                                            <div class="dot is-bot-left"></div>
                                            <div class="dot is-bot-right"></div>
                                            <div class="dot is-top-right"></div>
                                            <div class="dot is-top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-size-large text-color-neutral-lighter video-description-content"><?php the_content() ?></div>
                        </div>
                        
                        <!-- Right section - Form always visible -->
                        <div id="video-right-column" class="video_right-column desktop-only-form">
                            <!-- Video Gate Form (always visible) -->
                            <div id="video-gate-form" class="video-gate-form-container">
                                <div class="request-demo_form-wrap video-form-wrap">
                                    <div class="request-demo_form video-form w-embed w-script">
                                        <?php if ($hubspot_form_script && strpos($hubspot_form_script, '<script') === false) : ?>
                                            <!-- HubSpot form script doesn't include script tags -->
                                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                            <script>
                                            <?php echo $hubspot_form_script; ?>
                                            </script>
                                        <?php else : ?>
                                            <!-- HubSpot form script already includes script tags -->
                                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                            <?php echo $hubspot_form_script; ?>
                                        <?php endif; ?>
                                        <style>
                                            /* Form styling based on Events page */
                                            .video-form-wrap {
                                                background: rgba(0, 0, 0, 0.2);
                                                border-radius: 8px;
                                                border: 1px solid rgba(255, 255, 255, 0.08);
                                                padding: 20px;
                                                position: relative;
                                                overflow: hidden;
                                                backdrop-filter: blur(5px);
                                            }
                                            
                                            .video_right-column {
                                                width: 100%;
                                                position: sticky;
                                                top: 100px;
                                                align-self: flex-start;
                                            }
                                            
                                            .request-demo_form {
                                                position: relative;
                                                z-index: 5;
                                                display: flex;
                                                flex-direction: column;
                                                height: 100%;
                                                padding: 25px;
                                            }
                                            
                                            input, .hs-input {
                                                line-height: normal;
                                                display: flex;
                                                height: 50px;
                                                width: 100%;
                                                padding: 12px 15px;
                                                align-items: center;
                                                align-self: stretch;
                                                border: 1px solid rgba(255, 255, 255, 0.14);
                                                background: #0C120D;
                                                color: #E6E7E7;
                                                border-radius: 4px;
                                                margin-bottom: 15px;
                                                font-size: 16px;
                                            }

                                            label {
                                                margin-bottom: 8px;
                                                margin-top: 8px;
                                                font-weight: 500;
                                                color: #E6E7E7;
                                                font-size: 16px;
                                                line-height: 1.5;
                                                display: block;
                                            }

                                            input.hs-button.primary.large, .hs-button {
                                                display: inline-flex;
                                                padding: 12px 25px;
                                                margin-top: 10px;
                                                width: auto;
                                                justify-content: center;
                                                align-items: center;
                                                color: #FFF;
                                                text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.15);
                                                font-size: 16px;
                                                cursor: pointer;
                                                font-weight: 600;
                                                line-height: 24px;
                                                border-radius: 6px;
                                                border: 1px solid rgba(255, 255, 255, 0.30);
                                                background: #166251;
                                                height: auto;
                                                transition: background 0.3s ease;
                                            }

                                            input.hs-button.primary.large:hover, .hs-button:hover {
                                                background: #1a7762;
                                            }

                                            label.hs-error-msg {
                                                font-size: 14px;
                                                color: #ff6b6b;
                                                margin-top: 0;
                                                margin-bottom: 15px;
                                                display: block;
                                            }
                                            
                                            /* Override HubSpot error message styling */
                                            .hs-error-msgs,
                                            ul.hs-error-msgs,
                                            .hs-form ul.hs-error-msgs {
                                                padding-left: 0 !important;
                                                margin-left: 0 !important;
                                                list-style-type: none !important;
                                                margin-top: -10px !important;
                                                margin-bottom: 15px !important;
                                            }
                                            
                                            .hs-error-msgs li,
                                            ul.hs-error-msgs li,
                                            .hs-form ul.hs-error-msgs li {
                                                margin-left: 0 !important;
                                                margin-bottom: 0 !important;
                                                list-style-type: none !important;
                                                list-style-image: none !important;
                                                list-style-position: outside !important;
                                                display: block !important;
                                            }
                                            
                                            /* Form field focus states */
                                            input:focus, .hs-input:focus {
                                                outline: none;
                                                border-color: #166251;
                                                box-shadow: 0 0 0 1px #166251;
                                            }
                                            
                                            .desktop-only-form {
                                                margin-top: -20px;
                                            }
                                            
                                            /* Mobile responsiveness styles */
                                            @media screen and (max-width: 991px) {
                                                .case-study_grid {
                                                    display: block;
                                                }
                                                
                                                .padding-section-hero.is-case-study {
                                                    padding-bottom: 40px;
                                                }
                                                
                                                .desktop-only-form {
                                                    display: none !important;
                                                }
                                                
                                                .video-form-mobile-only {
                                                    display: block !important;
                                                }
                                                
                                                .video-form-wrap {
                                                    width: 100%;
                                                    max-width: 100%;
                                                    margin-top: 1rem;
                                                    display: block;
                                                }
                                            }
                                            
                                            @media screen and (max-width: 767px) {
                                                .video-form-wrap {
                                                    padding: 10px;
                                                    margin-top: 0.5rem;
                                                }
                                                
                                                .request-demo_form {
                                                    padding: 15px;
                                                }
                                            }
                                            
                                            @media screen and (max-width: 479px) {
                                                .video-form-wrap {
                                                    padding: 8px;
                                                }
                                                
                                                .request-demo_form {
                                                    padding: 12px;
                                                }
                                                
                                                input, .hs-input {
                                                    height: 45px;
                                                    font-size: 14px;
                                                }
                                            }
                                            
                                            /* Featured Image Styles */
                                            .video-featured-image {
                                                border-radius: 8px;
                                                overflow: hidden;
                                                background: #0C120D;
                                            }
                                            
                                            .video-featured-img {
                                                width: 100%;
                                                height: auto;
                                                display: block;
                                                object-fit: cover;
                                            }
                                            
                                            /* Ensure grid supports sticky positioning */
                                            .case-study_grid {
                                                align-items: flex-start;
                                            }
                                            
                                            /* Padding for description content */
                                            .video-description-content {
                                                padding-top: 1rem;
                                            }
                                            
                                            /* Mobile padding for description content only */
                                            @media screen and (max-width: 991px) {
                                                .video-description-content {
                                                    padding: 2.5rem 16px 0;
                                                }
                                            }
                                            
                                            @media screen and (max-width: 479px) {
                                                .video-description-content {
                                                    padding: 2.5rem 12px 0;
                                                }
                                            }
                                        </style>
                                        
                                        
                                        <!-- HubSpot form event handler -->
                                        <script>
                                        // Ensure HubSpot forms are loaded
                                        window.addEventListener('load', function() {
                                            // Check if HubSpot forms are available
                                            if (window.hbspt && window.hbspt.forms) {
                                                console.log('HubSpot forms loaded');
                                            }
                                        });
                                        
                                        // HubSpot form submission handling
                                        window.addEventListener('message', function(event) {
                                            // Listen for HubSpot form submission events
                                            if (event.data && event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmitted') {
                                                // Form submitted successfully - HubSpot will handle redirect
                                                console.log('Form submitted successfully');
                                                
                                                // If HubSpot doesn't redirect, you can add a fallback here:
                                                // setTimeout(function() {
                                                //     window.location.href = '/thank-you-page-url';
                                                // }, 1000);
                                            }
                                        });
                                        </script>
                                    </div>
                                    <!-- Dots wrapper -->
                                    <div class="dots_wrapper">
                                        <div class="dot is-bot-left"></div>
                                        <div class="dot is-bot-right"></div>
                                        <div class="dot is-top-right"></div>
                                        <div class="dot is-top-left"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>
                    <!-- Default Video Layout (no gating) -->
                    <?php 
                    $video_url = get_field('video_url');
                    if ($video_url) : 
                        // Check if it's a Vimeo URL and extract video ID
                        if (strpos($video_url, 'vimeo.com') !== false) {
                            // Extract video ID from URL
                            preg_match('/video\/(\d+)/', $video_url, $matches);
                            $video_id = isset($matches[1]) ? $matches[1] : '';
                            
                            if ($video_id) {
                                // Use Vimeo embed URL format
                                $embed_url = "https://player.vimeo.com/video/{$video_id}";
                            } else {
                                $embed_url = $video_url;
                            }
                        } else {
                            $embed_url = $video_url;
                        }
                    ?>
                        <div class="video_wrapper">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe src="<?php echo esc_url($embed_url); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen webkitallowfullscreen mozallowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Video"></iframe>
                            </div>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    <?php endif ?>

                    <div class="video_grid">
                        <div class="case-study_hero-content">
                            <?php
                            $taxonomy = 'subcategory';
                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                            ?>
                            <?php if ($terms) : ?>
                                <div class="padding-bottom padding-small">
                                    <div class="text-style-allcaps text-size-medium text-weight-medium text-color-green">
                                        <?php foreach ($terms as $term) {
                                            echo esc_html($term->name);
                                        } ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <div class="padding-bottom padding-small">
                                <h1 class="heading-style-h3" style="font-weight: 800;"><?php the_title() ?></h1>
                            </div>

                            <?php if (get_field('date_of_event') || get_field('time_of_event')) : ?>
                            <div class="padding-bottom padding-medium">
                                <div class="events_info" style="display: flex; flex-direction: column; gap: 8px;">
                                    <?php if (get_field('date_of_event')) : ?>
                                        <div class="events_info-item">
                                            <div class="icon w-embed">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.66667 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.3333 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M2.91667 8.07483H17.0833" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.5 7.58317V14.6665C17.5 17.1665 16.25 18.8332 13.3333 18.8332H6.66667C3.75 18.8332 2.5 17.1665 2.5 14.6665V7.58317C2.5 5.08317 3.75 3.4165 6.66667 3.4165H13.3333C16.25 3.4165 17.5 5.08317 17.5 7.58317Z" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.0789 11.9165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.0789 14.4165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.99624 11.9165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.99624 14.4165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.91193 11.9165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.91193 14.4165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="text-size-medium text-color-green"><?php the_field('date_of_event') ?></div>
                                        </div>
                                    <?php endif ?>

                                    <?php if (get_field('time_of_event')) : ?>
                                        <div class="events_info-item">
                                            <div class="icon w-embed">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0001 18.8332C14.6025 18.8332 18.3334 15.1022 18.3334 10.4998C18.3334 5.89746 14.6025 2.1665 10.0001 2.1665C5.39771 2.1665 1.66675 5.89746 1.66675 10.4998C1.66675 15.1022 5.39771 18.8332 10.0001 18.8332Z" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13.0917 13.2582L10.5083 11.7499C10.0583 11.4915 9.69165 10.8415 9.69165 10.3165V6.8999" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="text-size-medium text-color-green"><?php the_field('time_of_event') ?></div>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php
                            // Video Host Information (similar to blog author section)
                            $author_id = get_the_author_meta('ID');
                            $author_name = get_the_author_meta('display_name', $author_id);
                            $author_bio = get_the_author_meta('description', $author_id);
                            $author_avatar = get_avatar($author_id, $size = '48', $default = '', $alt = '', $args = array('class' => 'blog_author_image'));
                            ?>
                            <div class="padding-bottom padding-medium">
                                <div class="w-dyn-list">
                                    <div role="list" class="w-dyn-items">
                                        <div role="listitem" class="blog_author-item w-dyn-item">
                                            <div class="blog_author_image-wrap">
                                                <?php echo $author_avatar; ?>
                                            </div>
                                            <div>
                                                <div class="text-size-medium text-weight-medium"><?php echo esc_html($author_name); ?></div>
                                                <?php if ($author_bio) : ?>
                                                    <div class="text-color-neutral-lighter"><?php echo esc_html($author_bio); ?></div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="padding-bottom padding-small">
                                <div class="text-size-large text-weight-medium"><?php echo get_the_date('M j, Y') ?></div>
                            </div>

                            <div class="text-size-large text-color-neutral-lighter video-description-content"><?php the_content() ?></div>
                        </div>

                        <div id="w-node-_7fabb0ea-67a8-dfef-e485-377ee4d34784-8c0c685b" class="case-study_cta">
                            <div>
                                <div class="padding-bottom padding-xsmall">
                                    <div class="text-font-sora text-size-large text-weight-semibold text-color-alternate">Find us on</div>
                                </div>
                                <div class="videos_find">
                                    <a data-w-id="06bf9a34-e2e7-9729-7ce5-a97f09b28648" href="https://vimeo.com/edgedelta" target="_blank" class="button is-secondary is-small w-inline-block">
                                        <div class="icon w-embed">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 0H17C18.6569 0 20 1.34315 20 3V17C20 18.6569 18.6569 20 17 20H3C1.34315 20 0 18.6569 0 17V3C0 1.34315 1.34315 0 3 0ZM10.0391 15.9375C11.3281 15.1172 15.5859 11.4844 16.3281 7.22656C17.0703 2.96875 11.25 3.86719 10.5859 7.57812C12.1484 6.64062 13.0078 7.96875 12.1875 9.41406C11.4062 10.9375 10.6641 11.875 10.2734 11.875C9.92188 11.875 9.64844 10.8984 9.21875 9.14062C9.11214 8.74085 9.02978 8.26429 8.94455 7.77115C8.65504 6.09598 8.33245 4.22946 6.91406 4.53125C5.15625 4.84375 2.85156 7.61719 2.85156 7.61719L3.35938 8.35938C3.35938 8.35938 4.53125 7.42187 4.88281 7.89062C5.09967 8.15085 5.64156 9.92791 6.16096 11.6313C6.57719 12.9962 6.97897 14.3138 7.1875 14.7656C7.61719 15.5859 8.78906 16.7578 10.0391 15.9375Z" fill="#818582"></path>
                                            </svg>
                                        </div>
                                        <div class="text-size-medium">Vimeo</div>
                                    </a>
                                    <a data-w-id="06bf9a34-e2e7-9729-7ce5-a97f09b2864c" href="https://www.youtube.com/@EdgeDelta" target="_blank" class="button is-secondary is-small w-inline-block">
                                        <div class="icon w-embed">
                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.7868 0.954312C18.842 1.2365 19.665 2.06274 19.9504 3.11785C20.6968 6.12802 20.6481 11.8191 19.9661 14.8763C19.6839 15.9313 18.8576 16.7545 17.8026 17.0399C14.8237 17.7766 5.4817 17.6858 2.67534 17.0399C1.62021 16.7577 0.79711 15.9313 0.511768 14.8763C-0.192177 12.0072 -0.143575 5.93988 0.496091 3.13353C0.778284 2.07841 1.60453 1.25533 2.65966 0.969988C6.64188 0.139051 16.3695 0.407142 17.7868 0.954312ZM7.87171 5.32712V12.6643L14.2684 8.99574L7.87171 5.32712Z" fill="#818582"></path>
                                            </svg>
                                        </div>
                                        <div class="text-size-medium">YouTube</div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog_info_divider"></div>
                            <div>
                                <div class="padding-bottom padding-xsmall">
                                    <div class="text-font-sora text-size-large text-weight-semibold text-color-alternate">Share</div>
                                </div>
                                <div class="toc_social">
                                    <div class="toc_social-items">
                                        <?php echo social_sharing_buttons() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
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

<!-- Video Preview Styles -->
<style>
/* Video Preview Styles */
.video-preview-container {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    background: #000;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.video-preview-container:hover {
    transform: translateY(-2px);
}

.video-preview-wrapper {
    position: relative;
    display: block;
}

.video-preview-image {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    aspect-ratio: 16/9;
}

.video-preview-wrapper.fallback {
    aspect-ratio: 16/9;
    background: linear-gradient(135deg, #0a0f0b, #1a2420);
    display: flex;
    align-items: center;
    justify-content: center;
}

.video-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.video-placeholder-fallback {
    display: none;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #0a0f0b, #1a2420);
}

.video-preview-wrapper.fallback .video-placeholder-fallback {
    display: flex;
}

.video-preview-wrapper.fallback .video-preview-overlay {
    display: none;
}

.video-preview-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease;
}

.video-preview-overlay:hover {
    background: rgba(0, 0, 0, 0.5);
}

.watch-video-button {
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    color: white;
    transition: transform 0.3s ease;
}

.watch-video-button:hover {
    transform: scale(1.05);
}

.play-icon {
    filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.3));
}

.watch-text {
    font-size: 18px;
    font-weight: 600;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.video-container {
    border-radius: 8px;
    overflow: hidden;
}

/* Dots styling */
.dots_wrapper {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 1;
}

.dot {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
}

.dot.is-bot-left {
    bottom: 15px;
    left: 15px;
}

.dot.is-bot-right {
    bottom: 15px;
    right: 15px;
}

.dot.is-top-right {
    top: 15px;
    right: 15px;
}

.dot.is-top-left {
    top: 15px;
    left: 15px;
}

@media screen and (max-width: 767px) {
    .watch-text {
        font-size: 16px;
    }
}
</style>

<!-- Video JavaScript -->
<script>
// Form is always visible, no need for click handlers
</script>

<?php if (!$hasHubspotForm) : ?>
    <?php get_template_part('templates/blog/more') ?>
<?php endif ?>