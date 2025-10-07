<?php
// Get HubSpot form script for this video
global $post;
if ($post) {
    $post_id = $post->ID;
    $GLOBALS['current_hubspot_script'] = get_field('hubspot_form_script', $post_id);
}

// Check if HubSpot form is available
$hasHubspotForm = isset($GLOBALS['current_hubspot_script']) && !empty($GLOBALS['current_hubspot_script']);
?>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero">

                <?php if ($hasHubspotForm) : ?>
                    <!-- Gated Video Layout with Form -->
                    <div class="video_grid gated-video-layout">
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
                                <h1 class="heading-style-h3 text-weight-normal"><?php the_title() ?></h1>
                            </div>

                            <div class="padding-bottom padding-small">
                                <div class="text-size-large text-weight-medium"><?php echo get_the_date('M j, Y') ?></div>
                            </div>

                            <div class="text-size-large text-color-neutral-lighter"><?php the_content() ?></div>
                        </div>

                        <!-- Video Preview with Gated Form -->
                        <div id="w-node-_7fabb0ea-67a8-dfef-e485-377ee4d34784-8c0c685b" class="gated-video-preview">
                            <!-- Video Preview Image -->
                            <div id="video-preview" class="video-preview-container">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="video-preview-wrapper">
                                        <?php the_post_thumbnail('large', array('class' => 'video-preview-image')); ?>
                                        <div class="video-preview-overlay">
                                            <button id="watch-video-btn" class="watch-video-button">
                                                <div class="play-icon">
                                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="24" cy="24" r="24" fill="rgba(22, 98, 81, 0.9)"/>
                                                        <path d="M18 16L32 24L18 32V16Z" fill="white"/>
                                                    </svg>
                                                </div>
                                                <span class="watch-text">Watch Video</span>
                                            </button>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <!-- Fallback if no featured image -->
                                    <div class="video-preview-wrapper fallback">
                                        <div class="video-placeholder">
                                            <button id="watch-video-btn" class="watch-video-button">
                                                <div class="play-icon">
                                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="24" cy="24" r="24" fill="rgba(22, 98, 81, 0.9)"/>
                                                        <path d="M18 16L32 24L18 32V16Z" fill="white"/>
                                                    </svg>
                                                </div>
                                                <span class="watch-text">Watch Video</span>
                                            </button>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>

                            <!-- Gated Form Modal -->
                            <div id="video-gate-modal" class="video-gate-modal" style="display: none;">
                                <div class="video-gate-content">
                                    <div class="video-gate-header">
                                        <h3>Watch This Video</h3>
                                        <button id="close-gate-modal" class="close-modal-btn">&times;</button>
                                    </div>
                                    <div class="video-gate-form">
                                        <p>Please fill out the form below to watch this video:</p>
                                        
                                        <!-- HubSpot form event handler -->
                                        <script>
                                        // Function to unlock video after form submission
                                        function unlockVideo() {
                                            console.log('Video unlocked - showing video player');
                                            
                                            // Hide the modal
                                            document.getElementById('video-gate-modal').style.display = 'none';
                                            
                                            // Show the actual video
                                            const videoContainer = document.getElementById('video-container');
                                            const videoPreview = document.getElementById('video-preview');
                                            
                                            if (videoContainer && videoPreview) {
                                                videoPreview.style.display = 'none';
                                                videoContainer.style.display = 'block';
                                            }
                                        }
                                        
                                        // HubSpot event listeners
                                        window.addEventListener('message', function(event) {
                                            if (event.data.type === 'hsFormSubmit' || 
                                                (event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmit')) {
                                                console.log('HubSpot form submit detected via message event');
                                                unlockVideo();
                                            }
                                        });
                                        
                                        window.hbsptOnFormSubmit = function(form) {
                                            console.log('HubSpot form submitted via callback');
                                            unlockVideo();
                                            return true;
                                        };
                                        </script>
                                        
                                        <?php echo $GLOBALS['current_hubspot_script']; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Actual Video Container (initially hidden) -->
                            <div id="video-container" class="video-container" style="display: none;">
                                <?php if (get_field('video_url')) : ?>
                                    <div class="video_wrapper">
                                        <div style="padding-top:56.20608899297424%" class="w-video w-embed">
                                            <iframe class="embedly-embed" src="<?php echo the_field('video_url') ?>" width="854" height="480" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                <?php else : ?>
                    <!-- Default Video Layout (no gating) -->
                    <?php if (get_field('video_url')) : ?>
                        <div class="video_wrapper">
                            <div style="padding-top:56.20608899297424%" class="w-video w-embed">
                                <iframe class="embedly-embed" src="<?php echo the_field('video_url') ?>" width="854" height="480" scrolling="no" title="YouTube embed" frameborder="0" allow="autoplay; fullscreen; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe>
                            </div>
                        </div>
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
                                <h1 class="heading-style-h3 text-weight-normal"><?php the_title() ?></h1>
                            </div>

                            <div class="padding-bottom padding-small">
                                <div class="text-size-large text-weight-medium"><?php echo get_the_date('M j, Y') ?></div>
                            </div>

                            <div class="text-size-large text-color-neutral-lighter"><?php the_content() ?></div>
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

<!-- Gated Video Styles -->
<style>
/* Gated Video Layout */
.gated-video-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: start;
}

/* Video Preview Styles */
.video-preview-container {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    background: #000;
}

.video-preview-wrapper {
    position: relative;
    display: block;
}

.video-preview-image {
    width: 100%;
    height: auto;
    display: block;
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

/* Modal Styles */
.video-gate-modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.video-gate-content {
    background: #0C120D;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
}

.video-gate-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 24px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin-bottom: 24px;
}

.video-gate-header h3 {
    color: white;
    margin: 0;
    font-size: 24px;
    font-weight: 600;
}

.close-modal-btn {
    background: none;
    border: none;
    color: #ccc;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease, color 0.3s ease;
}

.close-modal-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
}

.video-gate-form {
    padding: 0 24px 24px;
}

.video-gate-form p {
    color: #E6E7E7;
    font-size: 16px;
    margin-bottom: 20px;
}

/* Video Container */
.video-container {
    border-radius: 8px;
    overflow: hidden;
}

/* Form styling (inherited from resources template) */
input, .hs-input {
    line-height: normal;
    display: flex;
    height: 40px;
    width: 100%;
    padding: 12px;
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
    margin-bottom: .5rem;
    margin-top: 1rem;
    font-weight: 500;
    color: #E6E7E7;
    font-size: 18px;
    line-height: 150%;
    display: block;
}

/* Submit button styling */
input.hs-button.primary.large, 
.hs-button.primary.large, 
.hs-form .hs-button.primary.large, 
.hs-form input[type="submit"], 
.hs-submit .actions input, 
.hs-button {
    display: flex !important;
    padding: 12px 20px !important;
    margin-top: 1rem !important;
    width: auto !important;
    justify-content: center !important;
    align-items: center !important;
    color: #FFF !important;
    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.15) !important;
    font-size: 18px !important;
    cursor: pointer !important;
    font-weight: 600 !important;
    line-height: 24px !important;
    border-radius: 8px !important;
    border: 1px solid rgba(255, 255, 255, 0.30) !important;
    background: #16625187 !important;
    height: auto !important;
    transition: background 0.3s ease !important;
}

input.hs-button.primary.large:hover, 
.hs-button.primary.large:hover, 
.hs-form .hs-button.primary.large:hover, 
.hs-form input[type="submit"]:hover, 
.hs-submit .actions input:hover, 
.hs-button:hover {
    background: #166251 !important;
}

/* Error message styling */
label.hs-error-msg {
    font-size: 14px;
    margin-top: 0;
    margin-bottom: 10px;
}

.hs-error-msgs {
    padding-left: 0 !important;
    margin-left: 0 !important;
    list-style-type: none !important;
    margin-top: -10px !important;
    margin-bottom: 15px !important;
}

.hs-error-msgs li {
    margin-left: 0 !important;
    margin-bottom: 0 !important;
    list-style-type: none !important;
}

/* Mobile Responsive */
@media screen and (max-width: 991px) {
    .gated-video-layout {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .video-gate-content {
        margin: 0 10px;
        max-width: calc(100vw - 20px);
    }
}

@media screen and (max-width: 767px) {
    .video-gate-header {
        padding: 20px 20px 0;
        margin-bottom: 20px;
    }
    
    .video-gate-header h3 {
        font-size: 20px;
    }
    
    .video-gate-form {
        padding: 0 20px 20px;
    }
    
    .watch-text {
        font-size: 16px;
    }
}
</style>

<!-- Gated Video JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const watchVideoBtn = document.getElementById('watch-video-btn');
    const gateModal = document.getElementById('video-gate-modal');
    const closeModalBtn = document.getElementById('close-gate-modal');
    
    // Open modal when watch video button is clicked
    if (watchVideoBtn && gateModal) {
        watchVideoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            gateModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });
    }
    
    // Close modal functionality
    if (closeModalBtn && gateModal) {
        closeModalBtn.addEventListener('click', function() {
            gateModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        });
        
        // Close modal when clicking outside the content
        gateModal.addEventListener('click', function(e) {
            if (e.target === gateModal) {
                gateModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && gateModal && gateModal.style.display === 'flex') {
            gateModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});
</script>

<?php get_template_part('templates/blog/more') ?>