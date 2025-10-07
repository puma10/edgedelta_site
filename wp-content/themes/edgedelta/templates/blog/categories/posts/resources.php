<?php
// Get resource links
$bookLink = get_field('download_file_url') ? get_field('download_file_url') : "#";
$thanksPageUrl = get_field('thanks_page') ? get_field('thanks_page') : "";

// Get HubSpot form script for this resource
global $post;
if ($post) {
    $post_id = $post->ID;
    $GLOBALS['current_hubspot_script'] = get_field('hubspot_script', $post_id);
}

// Check if HubSpot form is available
$hasHubspotForm = isset($GLOBALS['current_hubspot_script']) && !empty($GLOBALS['current_hubspot_script']);
?>

<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-case-study" style="position: relative;">
                <!-- Two column layout -->
                <div style="display: flex; flex-direction: row; gap: 40px; position: relative; z-index: 5;">
                    <!-- Left content column -->
                    <div style="flex: 1; text-align: left;">
                        <?php
                        $taxonomy = 'subcategory';
                        $terms = get_the_terms(get_the_ID(), $taxonomy);
                        ?>
                        <?php if ($terms) : ?>
                            <div class="padding-bottom padding-custom1">
                                <div class="text-size-medium text-weight-medium text-color-neutral-lighter text-style-allcaps">
                                    <?php foreach ($terms as $term) {
                                        echo esc_html($term->name);
                                    } ?>
                                </div>
                            </div>
                        <?php endif ?>

                        <div class="padding-bottom padding-custom1">
                            <h1 class="heading-style-h2"><?php the_title() ?></h1>
                        </div>

                        <?php if (get_field('description_resources')) : ?>
                            <div style="max-width: 100%;">
                                <div class="padding-bottom padding-large">
                                    <div class="text-size-large text-color-neutral-lighter"><?php the_field('description_resources') ?></div>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>

                    <!-- Right column - Form or Featured Image -->
                    <?php if ($hasHubspotForm) : ?>
                    <div id="resource-download-form" style="flex: 1;">
                        <div class="resource-page-form-wrap" style="margin-top: 90px; display: block; width: 100%; background: #ffffff0a; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.08); padding: 20px; position: relative; overflow: hidden; backdrop-filter: blur(5px);">
                            <div style="position: relative; z-index: 5; padding: 25px;">
                                <?php
                                // Set a default heading
                                $formHeading = "Download the Resource";
                                
                                // Check for specific subcategories
                                if ($terms) {
                                    foreach ($terms as $term) {
                                        $termName = strtolower($term->name);
                                        if (strpos($termName, 'whitepaper') !== false || strpos($termName, 'white paper') !== false) {
                                            $formHeading = "Download the Whitepaper";
                                            break;
                                        } elseif (strpos($termName, 'ebook') !== false || strpos($termName, 'e-book') !== false) {
                                            $formHeading = "Download the Ebook";
                                            break;
                                        } elseif (strpos($termName, 'guide') !== false) {
                                            $formHeading = "Download the Guide";
                                            break;
                                        } elseif (strpos($termName, 'report') !== false) {
                                            $formHeading = "Download the Report";
                                            break;
                                        }
                                    }
                                }
                                ?>
                                <h3 style="color: #fff; margin-top: 0; margin-bottom: 20px; font-size: 24px; font-weight: 600;"><?php echo $formHeading; ?></h3>
                                
                                <!-- Hidden download button that will be triggered by JavaScript -->
                                <a id="resource-download-button" href="<?php echo esc_url($bookLink); ?>" target="_blank" style="display: none;">Download Resource</a>
                                
                                <!-- HubSpot form event handler - must be added BEFORE the form -->  
                                <script>
                                // Store the download link URL
                                const downloadLink = '<?php echo esc_js($bookLink); ?>';
                                
                                // This function only opens the download in a new tab
                                // HubSpot will handle the thank you page redirect
                                function openDownloadInNewTab() {
                                    console.log('Opening download in new tab');
                                    
                                    if (downloadLink && downloadLink !== "#") {
                                        // Open the download link in a new tab
                                        window.open(downloadLink, '_blank');
                                        
                                        // Don't redirect - let HubSpot handle that
                                        console.log('Leaving thank you page redirect to HubSpot');
                                    } else {
                                        console.log('No download link available');
                                    }
                                }
                                
                                // This is the HubSpot event listener - will run when form is ready
                                window.addEventListener('message', function(event) {
                                    if (event.data.type === 'hsFormSubmit' || 
                                        (event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmit')) {
                                        console.log('HubSpot form submit detected via message event');
                                        openDownloadInNewTab();
                                    }
                                });
                                
                                // If the form creates a global onFormSubmitted callback
                                window.hbsptOnFormSubmit = function(form) {
                                    console.log('HubSpot form submitted via callback');
                                    openDownloadInNewTab();
                                    return true; // Let HubSpot continue normal processing
                                };
                                
                                // Our fallback method if the above doesn't trigger
                                window.openResourceDownload = function() {
                                    openDownloadInNewTab();
                                };
                                </script>
                                
                                <?php echo $GLOBALS['current_hubspot_script']; ?>
                            </div>
                            <!-- Dots wrapper with corner dots like request-demo page -->
                            <div class="dots_wrapper">
                                <div class="dot is-bot-left"></div>
                                <div class="dot is-bot-right"></div>
                                <div class="dot is-top-right"></div>
                                <div class="dot is-top-left"></div>
                            </div>
                        </div>
                    </div>
                    <?php elseif (has_post_thumbnail()) : ?>
                    <!-- Right column - Featured image if no form -->
                    <div style="flex: 1; display: flex; align-items: center; justify-content: center;">
                        <?php the_post_thumbnail(array(600, 600)); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Background elements -->
                <div fade-down-children="" class="section_hero-bg" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
                </div>
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

<div class="section_grid-2col is-relative">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-medium z-index-2">
                <div class="padding-bottom padding-medium">
                    <div class="grid_2col">
                        <div class="grid_content">
                            <?php if (get_field('subtitle_resources')) : ?>
                                <div class="tag"><?php the_field('subtitle_resources') ?></div>
                            <?php endif ?>

                            <div>
                                <div class="padding-bottom padding-small">
                                    <div class="text-rich-text w-richtext h2-cs">
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            </div>

                            <?php if (get_field('download_btn_text') && !$hasHubspotForm) : ?>
                                <!-- Download button (only shown in content area if no HubSpot form) -->
                                <a aria-label="Download Resource" href="<?php echo $bookLink ?>" target="_blank" class="button is-resource thanks w-inline-block">
                                    <div class="button-text"><?php the_field('download_btn_text') ?></div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                </a>
                            <?php endif ?>
                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div>
                                <?php the_post_thumbnail(array(600, 600)); ?>
                            </div>
                        <?php elseif ($hasHubspotForm) : ?>
                            <!-- Mobile-only form container -->
                            <div class="resource-form-mobile-only" style="display: none;">
                                <div style="background: rgba(0, 0, 0, 0.2); border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.08); padding: 20px; position: relative; overflow: hidden;">
                                    <div style="position: relative; z-index: 5; padding: 25px;">
                                        <?php echo $GLOBALS['current_hubspot_script']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="section_cta-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_cta_bg-stars">
                <div class="section_cta-gradient"></div>
            </div>
        </div>
    </div>
</div>

<!-- Add responsive styling for mobile -->
<style>
/* Form styling from request-demo page */
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

/* Enhanced submit button styling */
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

/* Resource page form wrapper styling */
.resource-page-form-wrap {
    position: relative;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

/* Dots wrapper and dots styling */
.dots_wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.dot {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.12);
}

.dot.is-top-left {
    top: 10px;
    left: 10px;
}

.dot.is-top-right {
    top: 10px;
    right: 10px;
}

.dot.is-bot-left {
    bottom: 10px;
    left: 10px;
}

.dot.is-bot-right {
    bottom: 10px;
    right: 10px;
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

/* Mobile responsiveness */
@media screen and (max-width: 991px) {
    /* Switch to single column layout on mobile */
    .padding-section-hero.is-case-study > div:first-child {
        flex-direction: column;
    }
    
    /* Hide desktop form and show mobile form on small screens */
    #resource-download-form {
        display: none;
    }
    
    .resource-form-mobile-only {
        display: block !important;
    }
    
    /* Resource page form wrap responsive styling */
    .resource-page-form-wrap {
        width: 100%;
        max-width: 100%;
        margin-top: 1rem;
        display: block;
    }
}

@media screen and (max-width: 767px) {
    .resource-page-form-wrap {
        padding: 1rem;
        margin-top: 0.5rem;
        position: static !important;
        top: auto !important;
    }
}

@media screen and (max-width: 479px) {
    .resource-page-form-wrap {
        padding: 0.75rem;
    }
}
</style>

<!-- Direct download implementation using iframe approach -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get resource URLs
        const downloadUrl = "<?php echo esc_js(get_field('download_file_url')); ?>";
        const thankYouUrl = "<?php echo esc_js(get_field('thanks_page')); ?>";
        
        console.log("Resource download URL:", downloadUrl);
        
        // Create a function that will insert a download button after form submission
        window.triggerDownload = function() {
            if (downloadUrl && downloadUrl !== "#" && downloadUrl !== "") {
                console.log("Form submitted - adding download button");
                
                // Create a prominent download button
                const downloadSection = document.createElement('div');
                downloadSection.className = 'download-button-container';
                downloadSection.innerHTML = `
                    <div style="background: #166251; margin-top: 20px; text-align: center; padding: 15px; border-radius: 6px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <p style="color: white; font-size: 16px; margin: 0 0 10px 0;">Your resource is ready!</p>
                        <a href="${downloadUrl}" target="_blank" class="download-resource-btn" style="color: white; background: rgba(255,255,255,0.2); text-decoration: none; display: inline-block; padding: 10px 20px; border-radius: 4px; font-weight: bold; border: 1px solid rgba(255,255,255,0.3);">
                            <span style="display: inline-block; vertical-align: middle;">Download Now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-left: 8px; display: inline-block; vertical-align: middle;">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                        </a>
                    </div>
                `;
                
                // Find a place to add the download button
                const formContainer = document.querySelector('.resource-page-form-wrap');
                const submittedMsg = document.querySelector('.submitted-message');
                
                if (submittedMsg) {
                    // Add button to thank you message
                    submittedMsg.appendChild(downloadSection);
                    
                    // Add download trigger to button
                    setTimeout(function() {
                        const downloadBtn = document.querySelector('.download-resource-btn');
                        if (downloadBtn) {
                            downloadBtn.addEventListener('click', function(e) {
                                console.log('Download button clicked');
                                // We let the link handle the download with target="_blank"
                            });
                        }
                    }, 100);
                } else if (formContainer) {
                    formContainer.appendChild(downloadSection);
                }
            } else {
                console.error("No valid download URL found");
            }
        };
        
        // Handle direct download buttons
        document.querySelectorAll(".thanks").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                window.triggerDownload();
                if (thankYouUrl) {
                    setTimeout(function() {
                        window.location.href = thankYouUrl;
                    }, 500);
                }
            });
        });
        
        // Scroll to form functionality
        document.querySelectorAll(".dw-resource").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById('resource-download-form').scrollIntoView({ 
                    behavior: 'smooth' 
                });
            });
        });
        
        // Monitor for HubSpot form submission
        function watchForFormSubmission() {
            // Create a MutationObserver to watch for form submission
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    // Check if any added nodes contain the submission message
                    if (mutation.addedNodes && mutation.addedNodes.length > 0) {
                        for (let i = 0; i < mutation.addedNodes.length; i++) {
                            const node = mutation.addedNodes[i];
                            
                            // Check for thank you message
                            if (node.nodeType === 1 && (
                                (node.classList && node.classList.contains('submitted-message')) ||
                                (node.innerHTML && node.innerHTML.includes('Thank you'))
                            )) {
                                console.log('Form submission detected!');
                                window.triggerDownload();
                                return;
                            }
                            
                            // Also check children of added nodes
                            const thankYouElem = node.querySelector && node.querySelector('.submitted-message, .hs-form-success');
                            if (thankYouElem) {
                                console.log('Form submission detected in child element!');
                                window.triggerDownload();
                                return;
                            }
                        }
                    }
                    
                    // Also check for attribute changes that might indicate form submission
                    if (mutation.type === 'attributes' && mutation.target.classList && 
                        (mutation.target.classList.contains('submitted') || 
                         mutation.target.classList.contains('hs-form-success'))) {
                        console.log('Form submission detected via attribute change!');
                        window.triggerDownload();
                    }
                });
            });
            
            // Start observing the entire document for changes
            observer.observe(document.body, {
                childList: true,
                subtree: true,
                attributes: true,
                characterData: false,
                attributeFilter: ['class']
            });
            
            console.log('Form submission observer set up');
            
            // As a backup, also check periodically for submission indications
            const formCheckInterval = setInterval(function() {
                const submittedMsg = document.querySelector('.submitted-message, .hs-form-success');
                if (submittedMsg) {
                    console.log('Form submission detected via interval check!');
                    window.triggerDownload();
                    clearInterval(formCheckInterval);
                }
            }, 1000);
        }
        
        // Start watching for form submission
        watchForFormSubmission();
    });
</script>