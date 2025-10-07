<?php
/**
 * Template Name: Newsletter Signup
 */

get_header();
?>

<style>
.section_newsletter_hero {
    background-color: var(--background-color--background-primary);
    position: relative;
    overflow: hidden;
}

.newsletter-hero-heading {
    font-size: 3.5rem;
    font-weight: 800;
    color: var(--base-color-neutral--white);
    line-height: 1.2;
    margin: 0;
}

.newsletter-hero-description {
    font-size: 1.2rem;
    color: var(--base-color-neutral--neutral-lightest);
    line-height: 1.5;
}

.newsletter-form-wrapper {
    max-width: 600px;
    margin: 0 auto;
    padding: 3rem;
    background-color: var(--background-color--background-secondary);
    border-radius: 12px;
    border: 1px solid var(--border-color--border-primary);
}

/* Form Container Styles */
.newsletter-form-container {
    width: 100%;
    position: relative;
}

/* Hide HubSpot's default elements */
.newsletter-form-container .hs_error_rollup,
.newsletter-form-container .actions {
    padding-top: 1rem;
}

.newsletter-form-container .hs-form-field {
    margin-bottom: 1.5rem;
}

.newsletter-form-container label {
    display: none !important;
}

.newsletter-form-container .hs-form-required {
    color: var(--link-color--link-primary);
}

/* Form Styles */
.newsletter-form-container .hs-form {
    background: transparent !important;
}

/* Input Field Styles */
.newsletter-form-container .hs-input {
    border-radius: 8px !important;
    min-height: 48px !important;
    padding: 0.875rem 1rem !important;
    font-size: 1rem !important;
    background-color: var(--background-color--background-primary) !important;
    border: 1px solid var(--border-color--border-primary) !important;
    color: var(--base-color-neutral--white) !important;
    width: 100% !important;
    outline: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    font-family: "Overused Grotesk", sans-serif;
    transition: all 0.2s ease;
}

.newsletter-form-container .hs-input:focus {
    border-color: var(--link-color--link-primary) !important;
    box-shadow: 0 0 0 3px rgba(98, 210, 124, 0.1) !important;
}

/* Override autofill styles */
.newsletter-form-container .hs-input:-webkit-autofill,
.newsletter-form-container .hs-input:-webkit-autofill:hover,
.newsletter-form-container .hs-input:-webkit-autofill:focus,
.newsletter-form-container .hs-input:-webkit-autofill:active {
    -webkit-box-shadow: 0 0 0 30px var(--background-color--background-primary) inset !important;
    -webkit-text-fill-color: white !important;
    transition: background-color 5000s ease-in-out 0s;
}

/* Placeholder color */
.newsletter-form-container .hs-input::placeholder {
    color: var(--base-color-neutral--neutral-light) !important;
    opacity: 0.7 !important;
}

/* Submit Button Styles */
.newsletter-form-container .hs-button {
    grid-column-gap: .5rem !important;
    grid-row-gap: .5rem !important;
    -webkit-backdrop-filter: blur(20px) !important;
    backdrop-filter: blur(20px) !important;
    color: var(--base-color-neutral--white) !important;
    background-color: #19616080 !important;
    background-image: linear-gradient(#00da630a, #00da631a) !important;
    border: 1px solid #ffffff4d !important;
    border-radius: 8px !important;
    justify-content: flex-start !important;
    align-items: center !important;
    width: 100% !important;
    height: auto !important;
    padding: .75rem 1.25rem !important;
    font-size: 1.125rem !important;
    font-weight: 600 !important;
    text-decoration: none !important;
    transition-property: all !important;
    transition-duration: .3s !important;
    transition-timing-function: ease !important;
    display: flex !important;
    position: relative !important;
    overflow: hidden !important;
    box-shadow: inset 0 3px 3px 1px #ffffff1a, 0 6px 40px #00da6333, 0 0 0 5px #060e0680, 0 0 0 6px #ffffff0a !important;
    font-family: "Overused Grotesk", sans-serif !important;
    cursor: pointer !important;
}

/* Maintain button styles on hover/focus */
.newsletter-form-container .hs-button:hover,
.newsletter-form-container .hs-button:focus,
.newsletter-form-container .hs-button:active {
    background-color: #19616099 !important;
    transform: none !important;
}

/* Success message styling */
.newsletter-form-container .submitted-message {
    color: var(--base-color-neutral--white) !important;
    text-align: center !important;
    padding: 1.5rem !important;
    background-color: var(--background-color--background-success);
    color: var(--text-color--text-success);
    border: 1px solid var(--text-color--text-success);
    border-radius: 8px;
    margin-top: 1rem;
}

/* Error message styling */
.newsletter-form-container .hs-error-msgs {
    margin-top: 0.5rem;
    list-style: none !important;
    padding: 0 !important;
    margin-left: 0 !important;
}

.newsletter-form-container .hs-error-msgs li {
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.newsletter-form-container .hs-error-msg {
    color: var(--base-color-neutral--white) !important;
    font-size: 0.875rem !important;
    display: block !important;
    list-style: none !important;
}

/* Checkbox styling */
.newsletter-form-container input[type="checkbox"] {
    width: 20px;
    height: 20px;
    min-width: 20px;
    margin-right: 0.75rem;
    accent-color: var(--link-color--link-primary);
    cursor: pointer;
}

.newsletter-form-container .hs-form-booleancheckbox label {
    display: flex !important;
    align-items: flex-start !important;
    font-size: 0.875rem !important;
    color: var(--base-color-neutral--neutral-lightest) !important;
    line-height: 1.5 !important;
    margin-bottom: 0 !important;
}


@media (max-width: 768px) {
    .newsletter-form-wrapper {
        padding: 1.5rem;
    }
}
</style>

<div class="section_newsletter_hero">
  <div class="padding-global">
    <div class="container-large is-lines lines-vertical">
      <div class="padding-section-hero">
        <div class="max-width-custom1 align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <h1 class="newsletter-hero-heading">Sign Up for the Edge Delta Newsletter</h1>
          </div>
        </div>

        <div class="max-width-52rem align-center text-align-center">
          <div class="padding-bottom padding-large">
            <div class="newsletter-hero-description">
              Get monthly product updates, thoughtful commentary from industry leaders, and under-the-hood peeks at how we're solving observability and security challenges at scale.
            </div>
          </div>

          <div class="padding-bottom">
            <div class="newsletter-form-wrapper">
              <div class="newsletter-form-container" id="hubspot-form-container">
                <!-- HubSpot form will load here -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Load HubSpot form with better performance
(function() {
  // Option 1: Load immediately on page load
  function loadHubSpotForm() {
    // Create script element
    const script = document.createElement('script');
    script.src = '//js.hsforms.net/forms/embed/v2.js';
    script.charset = 'utf-8';
    script.async = true;
    
    // When script loads, create the form
    script.onload = function() {
      if (window.hbspt) {
        hbspt.forms.create({
          portalId: "20676070",
          formId: "81a91c9b-8274-4ec6-80c4-587c60908a94",
          region: "na1",
          sfdcCampaignId: "7014W000001Fzi9QAC",
          target: "#hubspot-form-container",
          onFormReady: function() {
            // Set placeholder for email field
            const emailInput = document.querySelector('#hubspot-form-container input[type="email"]');
            if (emailInput) {
              emailInput.setAttribute('placeholder', 'Email*');
            }
          }
        });
      }
    };
    
    // Add script to page
    document.head.appendChild(script);
  }
  
  // Option 2: Load on scroll (lazy load)
  // Uncomment this section if you want to load only when user scrolls to form
  /*
  function loadOnScroll() {
    const formContainer = document.getElementById('hubspot-form-container');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          loadHubSpotForm();
          observer.unobserve(entry.target);
        }
      });
    }, {
      rootMargin: '100px' // Start loading 100px before form is visible
    });
    
    if (formContainer) {
      observer.observe(formContainer);
    }
  }
  
  // Use lazy loading
  if ('IntersectionObserver' in window) {
    loadOnScroll();
  } else {
    // Fallback for older browsers
    loadHubSpotForm();
  }
  */
  
  // Currently using immediate load
  // Use DOMContentLoaded to ensure page structure is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadHubSpotForm);
  } else {
    loadHubSpotForm();
  }
})();
</script>

<?php get_footer(); ?>