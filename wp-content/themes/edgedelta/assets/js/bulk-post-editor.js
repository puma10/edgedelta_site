/**
 * Bulk Post Editor Scripts
 */
jQuery(document).ready(function($) {
    // Initialize datepickers
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });

    // Select all checkboxes
    $('#cb-select-all-1, #cb-select-all-2').on('click', function() {
        $('input[name="post_ids[]"]').prop('checked', this.checked);
    });

    // Handle individual checkbox clicks
    $('input[name="post_ids[]"]').on('click', function() {
        var allChecked = $('input[name="post_ids[]"]:checked').length === $('input[name="post_ids[]"]').length;
        $('#cb-select-all-1, #cb-select-all-2').prop('checked', allChecked);
    });

    // Form submission validation
    $('#bulk-edit-form').on('submit', function(e) {
        if ($('input[name="post_ids[]"]:checked').length === 0) {
            e.preventDefault();
            alert('Please select at least one post to edit.');
            return false;
        }
        return true;
    });
});
