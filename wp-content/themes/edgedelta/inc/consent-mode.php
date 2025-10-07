<?php
/**
 * Google Consent Mode v2 Implementation
 * 
 * @package EdgeDelta
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Initialize Google Consent Mode with regional defaults
 */
function init_google_consent_mode() {
    ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    
    const REGION_WAIT_TIME = 2000;
    
    // Default: Grant all consent for global (non-regulated regions)
    window.dataLayer.push(['consent', 'default', {
        'ad_storage': 'granted',
        'ad_user_data': 'granted', 
        'ad_personalization': 'granted',
        'analytics_storage': 'granted',
        'functionality_storage': 'granted',
        'personalization_storage': 'granted',
        'security_storage': 'granted',
        'wait_for_update': REGION_WAIT_TIME
    }]);
    
    // EU/EEA/UK: Require explicit consent (GDPR)
    window.dataLayer.push(['consent', 'default', {
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied', 
        'analytics_storage': 'denied',
        'functionality_storage': 'granted',
        'personalization_storage': 'denied',
        'security_storage': 'granted',
        'wait_for_update': REGION_WAIT_TIME,
        'region': ['AT', 'BE', 'BG', 'HR', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE', 'GB', 'CH', 'IS', 'LI', 'NO']
    }]);
    
    // California: Allow with redaction (CCPA)
    window.dataLayer.push(['consent', 'default', {
        'ad_storage': 'granted',
        'ad_user_data': 'granted',
        'ad_personalization': 'granted',
        'analytics_storage': 'granted',
        'functionality_storage': 'granted',
        'personalization_storage': 'granted', 
        'security_storage': 'granted',
        'wait_for_update': REGION_WAIT_TIME,
        'ads_data_redaction': true,
        'region': ['US-CA']
    }]);
    
    // Simplified consent state
    window.edgeConsent = {
        hasUserConsented: false
    };
    
    // Suppress Calendly cookie banner
    window.Calendly = window.Calendly || {};
    window.Calendly.config = {
        cookieBanner: false
    };
    </script>
    <?php
}
add_action('wp_head', 'init_google_consent_mode', 1);

/**
 * Add Google Tag Manager
 */
function add_google_tag_manager() {
    ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KZTD3JV');</script>
    <!-- End Google Tag Manager -->
    <?php
}
add_action('wp_head', 'add_google_tag_manager', 5);

/**
 * Add GTM noscript fallback
 */
function add_gtm_noscript() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZTD3JV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
add_action('wp_body_open', 'add_gtm_noscript');

/**
 * Cookie Consent Banner
 */
function add_eu_cookie_banner() {
    ?>
    <script>
    (function() {
        'use strict';
        
        // Initialize banner logic - Google Consent Mode handles region detection
        window.addEventListener('load', function() {
            // Small delay to ensure GTM is loaded
            setTimeout(function() {
                showBannerIfNeeded();
            }, 100);
        });
        
        function showBannerIfNeeded() {
            // Check if user already made a choice
            const hasConsent = localStorage.getItem('edgeDeltaCookieConsent');
            if (hasConsent) {
                window.edgeConsent.hasUserConsented = true;
                return;
            }
            
            // Show banner for everyone (Google handles regional defaults)
            showConsentBanner();
        }
        
        function showConsentBanner() {
            if (document.getElementById('cookieBanner')) {
                return;
            }
            
            if (localStorage.getItem('edgeDeltaCookieConsent')) {
                return;
            }
            
            // Add styles
            const style = document.createElement('style');
            style.textContent = `
                .cookie-consent-banner {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background: rgba(10, 15, 10, 0.95);
                    backdrop-filter: blur(12px);
                    border-top: 1px solid rgba(95, 186, 125, 0.15);
                    color: #ffffff;
                    padding: 12px 16px;
                    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
                    z-index: 9999;
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                }
                .banner-content {
                    max-width: 1200px;
                    margin: 0 auto;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 20px;
                }
                .banner-text {
                    flex: 1;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                }
                .banner-text p {
                    margin: 0;
                    font-size: 13px;
                    line-height: 1.4;
                    color: rgba(255, 255, 255, 0.9);
                }
                .banner-actions {
                    display: flex;
                    gap: 8px;
                    align-items: center;
                    flex-shrink: 0;
                }
                .consent-btn {
                    padding: 6px 16px;
                    border: none;
                    border-radius: 6px;
                    cursor: pointer;
                    font-size: 13px;
                    font-weight: 500;
                    transition: all 0.2s ease;
                    text-decoration: none;
                    display: inline-block;
                    white-space: nowrap;
                }
                .btn-accept {
                    background: #5fba7d;
                    color: #ffffff;
                }
                .btn-accept:hover {
                    background: #4a9960;
                }
                .btn-settings {
                    background: transparent;
                    color: rgba(255, 255, 255, 0.8);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                }
                .btn-settings:hover {
                    background: rgba(255, 255, 255, 0.1);
                    color: #ffffff;
                }
                .btn-reject {
                    background: transparent;
                    color: rgba(255, 255, 255, 0.8);
                }
                .btn-reject:hover {
                    background: rgba(255, 255, 255, 0.05);
                    color: #ffffff;
                }
                
                /* Modal styles */
                .consent-modal {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: rgba(10, 26, 13, 0.8);
                    backdrop-filter: blur(8px);
                    z-index: 10000;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }
                .consent-modal.show {
                    opacity: 1;
                    visibility: visible;
                }
                .modal-content {
                    background: linear-gradient(135deg, #1a2b1d 0%, #0a1a0d 100%);
                    border-radius: 12px;
                    padding: 32px;
                    max-width: 600px;
                    width: 90%;
                    max-height: 80vh;
                    overflow-y: auto;
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
                    border: 1px solid rgba(95, 186, 125, 0.2);
                    transform: scale(0.9) translateY(20px);
                    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }
                .consent-modal.show .modal-content {
                    transform: scale(1) translateY(0);
                }
                .modal-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 24px;
                }
                .modal-close {
                    background: none;
                    border: none;
                    color: #ffffff;
                    font-size: 24px;
                    cursor: pointer;
                    padding: 0;
                    width: 32px;
                    height: 32px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 4px;
                    transition: background 0.2s;
                }
                .modal-close:hover {
                    background: rgba(255, 255, 255, 0.1);
                }
                .cookie-category {
                    margin-bottom: 24px;
                    padding: 20px;
                    background: rgba(255, 255, 255, 0.05);
                    border-radius: 8px;
                    border: 1px solid rgba(95, 186, 125, 0.1);
                }
                .category-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 8px;
                }
                .category-title {
                    font-size: 16px;
                    font-weight: 600;
                    color: #ffffff;
                }
                .category-description {
                    font-size: 14px;
                    color: #e0e6e1;
                    opacity: 0.8;
                    line-height: 1.5;
                }
                .toggle-switch {
                    position: relative;
                    width: 48px;
                    height: 24px;
                }
                .toggle-switch input {
                    opacity: 0;
                    width: 0;
                    height: 0;
                }
                .toggle-slider {
                    position: absolute;
                    cursor: pointer;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: rgba(255, 255, 255, 0.2);
                    transition: all 0.3s;
                    border-radius: 24px;
                }
                .toggle-slider:before {
                    position: absolute;
                    content: "";
                    height: 18px;
                    width: 18px;
                    left: 3px;
                    bottom: 3px;
                    background-color: white;
                    transition: all 0.3s;
                    border-radius: 50%;
                }
                input:checked + .toggle-slider {
                    background-color: #5fba7d;
                }
                input:checked + .toggle-slider:before {
                    transform: translateX(24px);
                }
                input:disabled + .toggle-slider {
                    opacity: 0.5;
                    cursor: not-allowed;
                }
                .modal-actions {
                    display: flex;
                    gap: 12px;
                    margin-top: 32px;
                    justify-content: flex-end;
                }
                
                @media (max-width: 768px) {
                    .cookie-consent-banner {
                        padding: 10px 12px;
                    }
                    .banner-content {
                        gap: 12px;
                    }
                    .banner-text p {
                        font-size: 12px;
                    }
                    .banner-actions {
                        gap: 6px;
                    }
                    .consent-btn {
                        padding: 5px 12px;
                        font-size: 12px;
                    }
                    .btn-settings {
                        display: none;
                    }
                }
            `;
            document.head.appendChild(style);
            
            // Create banner HTML
            const banner = document.createElement('div');
            banner.innerHTML = `
                <div id="cookieBanner" class="cookie-consent-banner">
                    <div class="banner-content">
                        <div class="banner-text">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0; opacity: 0.7;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                            </svg>
                            <p>We use cookies to analyze site usage and improve your experience. By continuing to use our site, you agree to our cookie use. <a href="https://edgedelta.com/privacy-policy/" target="_blank" rel="noopener noreferrer" style="color: #5fba7d; text-decoration: none;">Learn more</a></p>
                        </div>
                        <div class="banner-actions">
                            <button class="consent-btn btn-settings" onclick="showCookieSettings()">Settings</button>
                            <button class="consent-btn btn-reject" onclick="rejectAllCookies()">Reject All</button>
                            <button class="consent-btn btn-accept" onclick="acceptAllCookies()">Accept All</button>
                        </div>
                    </div>
                </div>
                
                <!-- Cookie Settings Modal -->
                <div id="settingsModal" class="consent-modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 style="margin: 0; color: #ffffff; font-size: 24px;">Cookie Settings</h2>
                            <button class="modal-close" onclick="closeSettingsModal()">&times;</button>
                        </div>
                        
                        <div class="cookie-category">
                            <div class="category-header">
                                <div>
                                    <h3 class="category-title">Essential Cookies</h3>
                                    <p class="category-description">Required for the website to function. Cannot be disabled.</p>
                                </div>
                                <label class="toggle-switch">
                                    <input type="checkbox" checked disabled>
                                    <span class="toggle-slider"></span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="cookie-category">
                            <div class="category-header">
                                <div>
                                    <h3 class="category-title">Analytics Cookies</h3>
                                    <p class="category-description">Help us understand how visitors interact with our website.</p>
                                </div>
                                <label class="toggle-switch">
                                    <input type="checkbox" id="analyticsToggle">
                                    <span class="toggle-slider"></span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="cookie-category">
                            <div class="category-header">
                                <div>
                                    <h3 class="category-title">Marketing Cookies</h3>
                                    <p class="category-description">Used to track visitors across websites for marketing purposes.</p>
                                </div>
                                <label class="toggle-switch">
                                    <input type="checkbox" id="marketingToggle">
                                    <span class="toggle-slider"></span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="modal-actions">
                            <button class="consent-btn btn-reject" onclick="rejectAllFromSettings()">Reject All</button>
                            <button class="consent-btn btn-accept" onclick="savePreferences()">Save Preferences</button>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(banner);
            
            // Add click outside to close modal
            document.addEventListener('click', function(e) {
                const modal = document.getElementById('settingsModal');
                if (modal && e.target === modal) {
                    closeSettingsModal();
                }
            });
        }
        
        // Cookie management functions
        window.acceptAllCookies = function() {
            window.dataLayer.push(['consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'analytics_storage': 'granted',
                'personalization_storage': 'granted'
            }]);
            
            localStorage.setItem('edgeDeltaCookieConsent', JSON.stringify({
                analytics: true,
                marketing: true,
                personalization: true,
                timestamp: new Date().toISOString()
            }));
            
            window.dispatchEvent(new CustomEvent('edgeConsentUpdated', { 
                detail: { analytics: true, marketing: true } 
            }));
            
            removeBanner();
        }

        window.rejectAllCookies = function() {
            window.dataLayer.push(['consent', 'update', {
                'ad_storage': 'denied',
                'ad_user_data': 'denied', 
                'ad_personalization': 'denied',
                'analytics_storage': 'denied',
                'personalization_storage': 'denied'
            }]);
            
            localStorage.setItem('edgeDeltaCookieConsent', JSON.stringify({
                analytics: false,
                marketing: false,
                personalization: false,
                timestamp: new Date().toISOString()
            }));
            
            window.dispatchEvent(new CustomEvent('edgeConsentUpdated', { 
                detail: { analytics: false, marketing: false } 
            }));
            
            removeBanner();
        }
        
        function removeBanner() {
            const banner = document.getElementById('cookieBanner');
            if (banner) {
                banner.remove();
            }
        }
        
        // Global function for footer cookie settings link
        window.openCookieSettings = function() {
            let modal = document.getElementById('settingsModal');
            
            if (!modal) {
                showConsentBanner();
                const banner = document.getElementById('cookieBanner');
                if (banner) banner.style.display = 'none';
            }
            
            const settingsModal = document.getElementById('settingsModal');
            if (settingsModal) {
                settingsModal.classList.add('show');
                
                setTimeout(() => {
                    const consent = JSON.parse(localStorage.getItem('edgeDeltaCookieConsent') || '{}');
                    const analyticsToggle = document.getElementById('analyticsToggle');
                    const marketingToggle = document.getElementById('marketingToggle');
                    
                    if (analyticsToggle && marketingToggle) {
                        if (consent.analytics !== undefined) {
                            analyticsToggle.checked = consent.analytics;
                            marketingToggle.checked = consent.marketing;
                        } else {
                            // Default to unchecked (let user choose)
                            analyticsToggle.checked = false;
                            marketingToggle.checked = false;
                        }
                    }
                }, 100);
            }
        }
        
        // Modal control functions
        window.showCookieSettings = function() {
            const modal = document.getElementById('settingsModal');
            if (modal) {
                modal.classList.add('show');
                loadCurrentSettings();
            }
        }
        
        window.closeSettingsModal = function() {
            const modal = document.getElementById('settingsModal');
            if (modal) {
                modal.classList.remove('show');
            }
        }
        
        window.savePreferences = function() {
            const analyticsToggle = document.getElementById('analyticsToggle');
            const marketingToggle = document.getElementById('marketingToggle');
            
            const analyticsGranted = analyticsToggle?.checked || false;
            const marketingGranted = marketingToggle?.checked || false;
            
            window.dataLayer.push(['consent', 'update', {
                'analytics_storage': analyticsGranted ? 'granted' : 'denied',
                'ad_storage': marketingGranted ? 'granted' : 'denied',
                'ad_user_data': marketingGranted ? 'granted' : 'denied',
                'ad_personalization': marketingGranted ? 'granted' : 'denied',
                'personalization_storage': marketingGranted ? 'granted' : 'denied'
            }]);
            
            localStorage.setItem('edgeDeltaCookieConsent', JSON.stringify({
                analytics: analyticsGranted,
                marketing: marketingGranted,
                personalization: marketingGranted,
                timestamp: new Date().toISOString()
            }));
            
            window.dispatchEvent(new CustomEvent('edgeConsentUpdated', { 
                detail: { analytics: analyticsGranted, marketing: marketingGranted } 
            }));
            
            closeSettingsModal();
            removeBanner();
        }
        
        window.rejectAllFromSettings = function() {
            rejectAllCookies();
            closeSettingsModal();
        }
        
        function loadCurrentSettings() {
            const consent = JSON.parse(localStorage.getItem('edgeDeltaCookieConsent') || '{}');
            const analyticsToggle = document.getElementById('analyticsToggle');
            const marketingToggle = document.getElementById('marketingToggle');
            
            if (analyticsToggle && marketingToggle) {
                if (consent.analytics !== undefined) {
                    analyticsToggle.checked = consent.analytics;
                    marketingToggle.checked = consent.marketing;
                } else {
                    // Default to unchecked (let user choose)
                    analyticsToggle.checked = false;
                    marketingToggle.checked = false;
                }
            }
        }
        
    })();
    </script>
    <?php
}
add_action('wp_footer', 'add_eu_cookie_banner');