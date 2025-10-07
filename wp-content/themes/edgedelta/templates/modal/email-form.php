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
        <form>
            <div class="hs_email hs-email hs-fieldtype-text field hs-form-field">
                <label id="label-email-a02fd06c-2322-4cff-8f35-9803de9c2a7d" class="" placeholder="Enter your Work Email" for="email-a02fd06c-2322-4cff-8f35-9803de9c2a7d"><span>Work Email</span><span class="hs-form-required">*</span></label>
                <legend class="hs-field-desc" style="display: none;"></legend>
                <div class="input"><input id="email-a02fd06c-2322-4cff-8f35-9803de9c2a7d" name="email" required="" placeholder="" type="email" class="hs-input invalid error" inputmode="email" autocomplete="email" value=""></div>
                <ul class="no-list hs-error-msgs inputs-list" role="alert">
                    <li>
                        <label class="hs-error-msg hs-main-font-element">Please complete this required field.</label>
                    </li>
                </ul>
            </div>

            <div class="hs_submit hs-submit">
                <div class="hs-field-desc" style="display: none;"></div>
                <div class="actions">
                    <input type="submit" class="hs-button primary large" value="Download">
                </div>
            </div>
        </form>
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