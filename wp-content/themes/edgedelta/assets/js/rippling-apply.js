/**
 * Rippling Job Application Tracking
 * 
 * This script enhances the job application experience by:
 * 1. Adding application tracking
 * 2. Providing smooth apply button functionality
 * 3. Supporting direct job application from any "Apply" button
 */

jQuery(document).ready(function($) {
    // Make sure we have the job data
    if (typeof ripplingJobData === 'undefined') {
        return;
    }
    
    // Add apply now button if it doesn't exist
    var $applySection = $('.case-study_cta');
    if ($applySection.length > 0) {
        // Check if there's already an apply button
        if ($applySection.find('a.button').length === 0) {
            $applySection.append(
                '<div class="padding-top padding-medium">'+
                '<a href="' + ripplingJobData.applyUrl + '" target="_blank" class="button w-button apply-now-button">'+
                '<div class="text-size-medium">Apply Now</div>'+
                '</a>'+
                '</div>'
            );
        }
    }
    
    // Find all apply buttons and enhance them
    $('a.button, a.w-button, a:contains("Apply")').each(function() {
        var $btn = $(this);
        var btnText = $btn.text().toLowerCase();
        
        // Only modify buttons that look like apply buttons
        if (btnText.indexOf('apply') !== -1 || $btn.hasClass('apply-now-button')) {
            // If button doesn't already have an href, add the Rippling apply URL
            if (!$btn.attr('href') || $btn.attr('href') === '#' || $btn.attr('href') === '') {
                $btn.attr('href', ripplingJobData.applyUrl);
                $btn.attr('target', '_blank');
            }
        }
    });
    
    // Track application clicks
    $('a[href*="rippling.com"], a[href*="apply"]').on('click', function() {
        // If Google Analytics exists, track the event
        if (typeof gtag !== 'undefined') {
            gtag('event', 'job_application_click', {
                'job_id': ripplingJobData.jobId,
                'job_title': document.title,
                'page_url': window.location.href
            });
        }
    });
});