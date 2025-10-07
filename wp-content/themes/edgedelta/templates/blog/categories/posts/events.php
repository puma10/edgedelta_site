<div class="section_product_hero">
    <div class="padding-global">
        <div class="container-large is-lines background-color-primary">
            <div class="padding-section-hero is-case-study">
                <div class="case-study_grid">
                    <!-- Left content section -->
                    <div class="case-study_hero-content">
                        <?php $cat = get_the_category() ?>

                        <?php if ($cat) : ?>
                            <div class="padding-bottom padding-small">
                                <div class="text-style-allcaps text-size-medium text-weight-medium text-color-neutral-lighter"><?php echo $cat[0]->name ?></div>
                            </div>
                        <?php endif ?>

                        <div class="padding-bottom padding-small">
                            <h1 class="heading-style-h3 text-weight-normal"><?php the_title(); ?></h1>
                        </div>
                        
                        <div class="padding-bottom padding-custom1">
                            <div class="text-size-large text-color-neutral-lighter"><?php the_field('event_short_description') ?></div>
                        </div>
                        
                        <div class="padding-bottom padding-large">
                            <div class="events_info" style="display: flex; flex-direction: column; gap: 8px;">
                                <?php if (get_field('date_of_the_event')) : ?>
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
                                        <div class="text-size-medium text-color-green"><?php the_field('date_of_the_event') ?></div>
                                    </div>
                                <?php endif ?>
                                
                                <?php if (get_field('event_time')) : ?>
                                    <div class="events_info-item">
                                        <div class="icon w-embed">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.0001 18.8332C14.6025 18.8332 18.3334 15.1022 18.3334 10.4998C18.3334 5.89746 14.6025 2.1665 10.0001 2.1665C5.39771 2.1665 1.66675 5.89746 1.66675 10.4998C1.66675 15.1022 5.39771 18.8332 10.0001 18.8332Z" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.0917 13.2582L10.5083 11.7499C10.0583 11.4915 9.69165 10.8415 9.69165 10.3165V6.8999" stroke="#99F0C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="text-size-medium text-color-green"><?php the_field('event_time') ?></div>
                                    </div>
                                <?php endif ?>

                                <?php if (get_field('location')) : ?>
                                    <div class="events_info-item">
                                        <div class="icon w-embed">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 11.6917C11.4359 11.6917 12.6 10.5276 12.6 9.0917C12.6 7.65576 11.4359 6.4917 10 6.4917C8.56406 6.4917 7.40001 7.65576 7.40001 9.0917C7.40001 10.5276 8.56406 11.6917 10 11.6917Z" stroke="#99F0C1" stroke-width="1.25"></path>
                                                <path d="M3.01667 7.57484C4.65834 0.358173 15.35 0.366506 16.9833 7.58317C17.9417 11.8165 15.3083 15.3998 13 17.6165C11.325 19.2332 8.675 19.2332 6.99167 17.6165C4.69167 15.3998 2.05834 11.8082 3.01667 7.57484Z" stroke="#99F0C1" stroke-width="1.25"></path>
                                            </svg>
                                        </div>
                                        <div class="text-size-medium text-color-green"><?php the_field('location') ?></div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>

                        <div class="case-study_info-grid">
                            <?php if (get_field('venue')) : ?>
                                <div class="case-study_info-item">
                                    <div class="case-study_info-head">Address</div>
                                    <div class="text-color-alternate text-size-medium"><?php the_field('venue') ?></div>
                                </div>
                            <?php endif ?>
                            <div class="case-study_info-item">
                                <div class="case-study_info-head">Share</div>
                                <div class="toc_social">
                                    <div class="toc_social-items">
                                        <?php echo social_sharing_buttons() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right section - form and image in separate container -->
                    <div id="event-registration-form" class="event_right-column desktop-only-form">
                        <?php if (get_field('event_hubspot_script')) : ?>
                            <!-- Custom HubSpot script from the event_hubspot_script field -->
                            <div class="request-demo_form-wrap events-form-wrap">
                                <div class="request-demo_form events-form w-embed w-script">
                                <?php the_field('event_hubspot_script'); ?>
                                <style>
                                        /* Form styling based on Schedule Demo page */
                                        .events-form-wrap {
                                            background: rgba(0, 0, 0, 0.2);
                                            border-radius: 8px;
                                            border: 1px solid rgba(255, 255, 255, 0.08);
                                            padding: 20px;
                                            position: relative;
                                            overflow: hidden;
                                        }
                                        
                                        /* Separate styling for the right column */
                                        .event_right-column {
                                            width: 100%;
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
                                    
                                        /* Events form specific styling */
                                        .events-form-wrap {
                                            background: rgba(0, 0, 0, 0.2);
                                            border-radius: 8px;
                                            border: 1px solid rgba(255, 255, 255, 0.08);
                                            padding: 20px;
                                            position: relative;
                                            overflow: hidden;
                                            backdrop-filter: blur(5px);
                                        }
                                        
                                        .events-form {
                                            position: relative;
                                            z-index: 5;
                                            display: flex;
                                            flex-direction: column;
                                            height: 100%;
                                            padding: 25px;
                                        }
                                        
                                        /* Event page specific styling */
                                        .desktop-only-form {
                                            margin-top: 20px;
                                        }
                                        
                                        /* Mobile responsiveness styles */
                                        @media screen and (max-width: 991px) {
                                            /* Switch to single column layout on mobile */
                                            .case-study_grid {
                                                display: block;
                                            }
                                            
                                            .padding-section-hero.is-case-study {
                                                padding-bottom: 40px;
                                            }
                                            
                                            /* Hide desktop form and show mobile form on small screens */
                                            .desktop-only-form {
                                                display: none !important;
                                            }
                                            
                                            .event-form-mobile-only {
                                                display: block !important;
                                                margin-top: 40px;
                                            }
                                            
                                            /* Form responsive styling */
                                            .events-form-wrap {
                                                width: 100%;
                                                max-width: 100%;
                                                margin-top: 1rem;
                                                display: block;
                                            }
                                        }
                                        
                                        @media screen and (max-width: 767px) {
                                            .events-form-wrap {
                                                padding: 10px;
                                                margin-top: 0.5rem;
                                            }
                                            
                                            .request-demo_form {
                                                padding: 15px;
                                            }
                                        }
                                        
                                        @media screen and (max-width: 479px) {
                                            .events-form-wrap {
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
                                         </style>
                                </div>
                                <!-- Add the dots wrapper from the request demo page -->
                                <div class="dots_wrapper">
                                    <div class="dot is-bot-left"></div>
                                    <div class="dot is-bot-right"></div>
                                    <div class="dot is-top-right"></div>
                                    <div class="dot is-top-left"></div>
                                </div>
                            </div>
                            <?php else : ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <!-- Show the featured image if no hubspot script is provided -->
                                    <div class="event_image-wrapper">
                                        <div class="events-image-container">
                                            <?php the_post_thumbnail(array(534, 534), array('class' => 'events_image')); ?>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <!-- Default HubSpot form if no script and no image -->
                                    <div class="request-demo_form-wrap">
                                        <div class="request-demo_form w-embed w-script">
                                        <style>
                                            /* Form styling based on Schedule Demo page */
                                            .request-demo_form-wrap {
                                                background: rgba(0, 0, 0, 0.2);
                                                border-radius: 8px;
                                                border: 1px solid rgba(255, 255, 255, 0.08);
                                                padding: 20px;
                                                position: relative;
                                                overflow: hidden;
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
                                                align-items: flex-start;
                                                align-self: stretch;
                                                border: 1px solid rgba(255, 255, 255, 0.14);
                                                background: #0C120D;
                                                color: #E6E7E7;
                                                border-radius: 4px;
                                                margin-bottom: 15px;
                                                font-size: 16px;
                                                text-align: left;
                                            }

                                            label {
                                                margin-bottom: 8px;
                                                font-weight: 500;
                                                color: #E6E7E7;
                                                font-size: 16px;
                                                line-height: 1.5;
                                                display: block;
                                            }

                                            input.hs-button.primary.large, 
                                            .hs-button,
                                            .button.w-button {
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

                                            input.hs-button.primary.large:hover, 
                                            .hs-button:hover,
                                            .button.w-button:hover {
                                                background: #1a7762;
                                            }
                                            
                                            .cta-text-field.w-input {
                                                line-height: normal;
                                                height: 50px;
                                                width: 100%;
                                                padding: 12px 15px;
                                                margin-bottom: 15px;
                                                border: 1px solid rgba(255, 255, 255, 0.14);
                                                background: #0C120D;
                                                color: #E6E7E7;
                                                border-radius: 4px;
                                                font-size: 16px;
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
                                            input:focus, 
                                            .hs-input:focus,
                                            .cta-text-field.w-input:focus {
                                                outline: none;
                                                border-color: #166251;
                                                box-shadow: 0 0 0 1px #166251;
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
                                            
                                            /* Position form to match screenshot examples */
                                            #hubspot-form {
                                                display: flex;
                                                flex-direction: column;
                                                padding: 10px;
                                                text-align: left;
                                                align-items: flex-start;
                                            }
                                            
                                            /* Simple form field alignment */
                                            .hbspt-form {
                                                text-align: left;
                                            }
                                            
                                            
                                            /* Image styling in case of featured image */
                                            .events-image-container {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                height: 100%;
                                                width: 100%;
                                                text-align: center;
                                            }
                                            
                                            /* Image wrapper specific styling */
                                            .event_image-wrapper {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                            }
                                            

                                            
                                            .events_image {
                                                max-width: 100%;
                                                height: auto;
                                                display: block;
                                                margin: 0 auto;
                                                object-fit: contain;
                                                object-position: center;
                                            }
                                        </style>
                                        <script>
                                            // Instant scroll function (no animation delay)
                                            function instantScroll(event, targetId) {
                                                event.preventDefault();
                                                const targetElement = document.getElementById(targetId);
                                                if (targetElement) {
                                                    // Use scrollIntoView with instant behavior
                                                    targetElement.scrollIntoView();
                                                }
                                            }
                                            
                                            const embedCode = document.createElement('div');
                                            embedCode.className = 'w-form';
                                            embedCode.id = 'hubspot-form';
                                            document.currentScript.parentElement.appendChild(embedCode);
                                            


                                            const script = document.createElement('script');
                                            script.charset = 'utf-8';
                                            script.type = 'text/javascript';
                                            script.src = '//js.hsforms.net/forms/embed/v2.js';
                                            script.onload = function() {
                                                hbspt.forms.create({
                                                    region: "na1",
                                                    portalId: "20676070",
                                                    formId: "81a91c9b-8274-4ec6-80c4-587c60908a94",
                                                    sfdcCampaignId: "7014W000001Fzi9QAC",
                                                    target: '#hubspot-form',
                                                    onFormReady: function($form) {
                                                        $form.addClass('cta-form');
                                                        
                                                        // Add placeholder and Webflow classes to email field
                                                        const emailInput = $form.find('input[type="email"]');
                                                        emailInput.attr('placeholder', 'Email');
                                                        emailInput.addClass('cta-text-field w-input');

                                                        // Change submit button text and add Webflow classes
                                                        const submitButton = $form.find('.hs-button');
                                                        submitButton.val('Register');
                                                        submitButton.addClass('button w-button');
                                                        


                                                        // Don't remove labels for better accessibility
                                                        
                                                        // Add specific styling to match screenshots
                                                        $form.find('input, select, textarea').css({
                                                            'background': '#0C120D',
                                                            'border': '1px solid rgba(255, 255, 255, 0.14)',
                                                            'color': '#E6E7E7',
                                                            'height': '50px',
                                                            'margin-bottom': '15px',
                                                            'border-radius': '4px',
                                                            'padding': '12px 15px',
                                                            'font-size': '16px'
                                                        });
                                                        
                                                        submitButton.css({
                                                            'background': '#166251',
                                                            'border': '1px solid rgba(255, 255, 255, 0.30)',
                                                            'border-radius': '6px',
                                                            'color': '#FFF',
                                                            'margin-top': '10px',
                                                            'padding': '12px 25px',
                                                            'display': 'inline-flex',
                                                            'width': 'auto',
                                                            'font-weight': '600'
                                                        });
                                                        
                                                        $form.find('label').css({
                                                            'color': '#E6E7E7',
                                                            'font-size': '16px',
                                                            'margin-bottom': '8px',
                                                            'font-weight': '500',
                                                            'display': 'block'
                                                        });
                                                        

                                                    }
                                                });
                                            };
                                            document.head.appendChild(script);
                                        </script>
                                        </div>
                                        
                                        <!-- Add the dots wrapper from the request demo page -->
                                        <div class="dots_wrapper">
                                            <div class="dot is-bot-left"></div>
                                            <div class="dot is-bot-right"></div>
                                            <div class="dot is-top-right"></div>
                                            <div class="dot is-top-left"></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Mobile-only form container that will be shown on smaller screens -->
                    <?php if (get_field('event_hubspot_script')) : ?>
                    <div class="event-form-mobile-only" style="display: none;">
                        <div class="request-demo_form-wrap events-form-wrap">
                            <div class="request-demo_form events-form w-embed w-script">
                                <?php the_field('event_hubspot_script'); ?>
                            </div>
                            <!-- Add the dots wrapper from the request demo page -->
                            <div class="dots_wrapper">
                                <div class="dot is-bot-left"></div>
                                <div class="dot is-bot-right"></div>
                                <div class="dot is-top-right"></div>
                                <div class="dot is-top-left"></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div fade-down-children="" class="section_hero-bg">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
            </div>
        </div>
    </div>
    
    <!-- Adding the trapeze divider from the case study page -->
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

<?php 
// Check if the content is empty
$content = get_the_content();
if (!empty($content)) : 
?>
<!-- CTA section -->
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
                        <h3 class="text-size-xlarge">Reserve Your Seat</h3>
                        <div class="text-size-large text-color-neutral-lighter" style="margin-bottom: 2rem;">
                            Don't miss out on this exclusive event. Secure your spot now and join us for an unforgettable experience.
                        </div>
                        <div class="padding-top padding-small">
                            <?php if (get_field('event_registration_link')) : ?>
                                <a box-shadow="" data-w-id="1bb820b8-c698-f3d4-5e52-c6185cdfaea5" href="<?php the_field('event_registration_link'); ?>" target="_blank" rel="noopener noreferrer" class="button is-small w-inline-block">
                                    <div class="text-size-medium">Reserve Your Seat</div>
                                    <div class="overlay-gradient-1"></div>
                                    <div class="overlay-gradient-2"></div>
                                    <div class="icon w-embed">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.25 7L5.75 9.5L9.75 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
                            <?php else : ?>
                                <a box-shadow="" data-w-id="1bb820b8-c698-f3d4-5e52-c6185cdfaea5" href="#event-registration-form" onclick="instantScroll(event, 'event-registration-form')" class="button is-small w-inline-block">
                                    <div class="text-size-medium">Reserve Your Seat</div>
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
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>