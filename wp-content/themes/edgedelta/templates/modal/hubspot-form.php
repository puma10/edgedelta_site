<div class="modal_wrapper">
    <div class="modal_bg"></div>
    <div class="modal_component is-smaller">

        <div class="modal_close">
            <div class="icon w-embed">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10 2" stroke="currentColor" stroke-width="2.12014" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 10L2 2" stroke="currentColor" stroke-width="2.12014" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>

        <?php 
        // First check for the global variable set in resources.php
        if (isset($GLOBALS['current_hubspot_script']) && !empty($GLOBALS['current_hubspot_script'])) {
            // Output the full custom HubSpot script from the global variable
            echo $GLOBALS['current_hubspot_script'];
        } 
        // Fallback to checking the current page
        else if (function_exists('get_field') && get_field('hubspot_script')) {
            // Output the full custom HubSpot script from the current page
            echo get_field('hubspot_script');
        }
        ?>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".dw-resource");
        const modal = document.querySelector(".modal_wrapper");
        const closeButton = document.querySelector(".modal_close");

        if (!modal) return;

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                modal.style.display = "flex";
                modal.style.opacity = "1";
            });
        });

        if (closeButton) {
            closeButton.addEventListener("click", function() {
                closeModal();
            });
        }

        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        function closeModal() {
            modal.style.opacity = "0";
            setTimeout(() => {
                modal.style.display = "none";
            }, 300);
        }
    });
</script>