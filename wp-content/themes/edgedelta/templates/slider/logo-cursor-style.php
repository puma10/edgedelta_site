<div class="logo-carousel-cursor">
    <div class="logo-carousel-header">
        <h3>TRUSTED BY ENGINEERS AT</h3>
    </div>
    
    <div class="logo-carousel-wrapper">
        <!-- First Row - Scrolling Right -->
        <div class="logo-row logo-row-1">
            <div class="logo-track">
                <!-- First set -->
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/samsung.svg" alt="Samsung" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/datadog.svg" alt="Datadog" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/stripe.svg" alt="Stripe" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/monday.svg" alt="Monday.com" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/rippling.svg" alt="Rippling" class="client-logo-cursor">
                <!-- Duplicate set for seamless loop -->
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/samsung.svg" alt="Samsung" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/datadog.svg" alt="Datadog" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/stripe.svg" alt="Stripe" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/monday.svg" alt="Monday.com" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/rippling.svg" alt="Rippling" class="client-logo-cursor">
            </div>
        </div>
        
        <!-- Second Row - Scrolling Left -->
        <div class="logo-row logo-row-2">
            <div class="logo-track logo-track-reverse">
                <!-- First set -->
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/perplexity.svg" alt="Perplexity" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/ramp.svg" alt="Ramp" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/shopify.svg" alt="Shopify" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/usfoods.svg" alt="US Foods" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/mercadolibre.svg" alt="Mercado Libre" class="client-logo-cursor">
                <!-- Duplicate set for seamless loop -->
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/perplexity.svg" alt="Perplexity" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/ramp.svg" alt="Ramp" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/shopify.svg" alt="Shopify" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/usfoods.svg" alt="US Foods" class="client-logo-cursor">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/slider/mercadolibre.svg" alt="Mercado Libre" class="client-logo-cursor">
            </div>
        </div>
    </div>
    
    <style>
        /* Logo Carousel - Cursor Style */
        .logo-carousel-cursor {
            background: #000000;
            padding: 60px 0;
            overflow: hidden;
            position: relative;
        }
        
        .logo-carousel-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .logo-carousel-header h3 {
            font-size: 0.875rem;
            font-weight: 500;
            color: #6b7280;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "Overused Grotesk", sans-serif;
            margin: 0;
        }
        
        .logo-carousel-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .logo-row {
            position: relative;
            overflow: hidden;
            padding: 0 20px;
        }
        
        .logo-track {
            display: flex;
            gap: 4rem;
            align-items: center;
            animation: scrollRight 30s linear infinite;
            width: fit-content;
        }
        
        .logo-track-reverse {
            animation: scrollLeft 30s linear infinite;
        }
        
        @keyframes scrollRight {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        @keyframes scrollLeft {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(0);
            }
        }
        
        .client-logo-cursor {
            height: 30px;
            width: auto;
            filter: brightness(0) invert(0.5);
            opacity: 0.8;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }
        
        .client-logo-cursor:hover {
            filter: brightness(0) invert(0.8);
            opacity: 1;
            transform: scale(1.1);
        }
        
        /* Gradient masks for smooth edges */
        .logo-carousel-cursor::before,
        .logo-carousel-cursor::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            z-index: 1;
            pointer-events: none;
        }
        
        .logo-carousel-cursor::before {
            left: 0;
            background: linear-gradient(90deg, #000000 0%, transparent 100%);
        }
        
        .logo-carousel-cursor::after {
            right: 0;
            background: linear-gradient(90deg, transparent 0%, #000000 100%);
        }
        
        /* Pause on hover */
        .logo-carousel-wrapper:hover .logo-track {
            animation-play-state: paused;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .logo-carousel-cursor {
                padding: 40px 0;
            }
            
            .logo-carousel-header {
                margin-bottom: 30px;
            }
            
            .logo-carousel-header h3 {
                font-size: 0.75rem;
            }
            
            .logo-carousel-wrapper {
                gap: 1.5rem;
            }
            
            .logo-track {
                gap: 3rem;
                animation-duration: 25s;
            }
            
            .client-logo-cursor {
                height: 24px;
            }
            
            .logo-carousel-cursor::before,
            .logo-carousel-cursor::after {
                width: 50px;
            }
        }
        
        @media (max-width: 480px) {
            .logo-track {
                gap: 2rem;
                animation-duration: 20s;
            }
            
            .client-logo-cursor {
                height: 20px;
            }
        }
    </style>
</div>