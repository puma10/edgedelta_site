<?php
$app_url = 'https://app.edgedelta.com';
$register_path = '/auth/register';
$login_path = '/auth/login';
?>

<style>
  /* Checkbox styling */
  #demo-consent {
    appearance: none;
    width: 16px;
    height: 16px;
    border: 2px solid #888;
    border-radius: 4px;
    display: inline-block;
    position: relative;
    cursor: pointer;
    background: transparent;
  }
  #demo-consent:checked {
    background-color: #1A7F64;
    border-color: #1A7F64;
  }
  #demo-consent:checked::after {
    content: '';
    position: absolute;
    left: 3px;
    top: 0px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
  }

  /* Primary button */
  .btn-primary {
    padding: 12px;
    border: none;
    border-radius: 6px;
    font-weight: 600;
    font-size: 1em;
    color: #fff;
    cursor: pointer;
    background-color: #1A7F64;
    transition: background 0.2s ease;
  }
  .btn-primary:disabled {
    background-color: #444;
    cursor: not-allowed;
  }
  .btn-primary:not(:disabled):hover {
    background-color: #166650;
  }

  /* Outline buttons */
  .btn-outline {
    padding: 12px;
    border: 1px solid #888;
    border-radius: 6px;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-weight: 500;
    font-size: 1em;
    cursor: pointer;
    transition: border-color 0.2s ease;
  }
  .btn-outline:disabled {
    border-color: #555;
    color: #777;
    cursor: not-allowed;
  }
  .btn-outline:not(:disabled):hover {
    border-color: #1A7F64;
  }

  /* Divider */
  .divider {
    display: flex;
    align-items: center;
    text-align: center;
    color: #aaa;
    margin: 12px 0;
  }
  .divider::before,
  .divider::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #444;
  }
  .divider:not(:empty)::before {
    margin-right: .75em;
  }
  .divider:not(:empty)::after {
    margin-left: .75em;
  }

  /* Agreement links (inherit color, underline only) */
  .agreement-links a {
    color: inherit;
    text-decoration: underline;
    text-decoration-color: #888;
  }
  .agreement-links a:hover {
    text-decoration: underline;
    text-decoration-color: #fff;
  }

  /* Log In link stays custom blue */
  .login-link {
    color: #4fcaff;
    text-decoration: none;
  }
  .login-link:hover {
    text-decoration: underline;
  }

  /* Modal header */
  .modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 40px;
    margin-top: -24px;
    margin-bottom: 0;
  }
  .modal-title {
    font-size: 1.3em;
    font-weight: 600;
    line-height: 1;
  }
  .modal_close {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
	position: inherit;
  }
</style>

<div class="modal_wrapper" id="demo-paywall" style="display: none;">
  <div class="modal_bg" style="backdrop-filter: blur(2px)"></div>
  <div class="modal_component" style="width: 600px; min-width: 0; max-width: 90vw;">
    
    <!-- Header with title and close -->
    <div class="modal-header">
      <div class="modal-title">Start Your Free Trial</div>
      <div class="modal_close" onclick="closeDemoPaywall()">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 10L10 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
          <path d="M10 10L2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      </div>
    </div>

    <form id="demo-paywall-form" style="display: flex; flex-direction: column; gap: 16px;">
      <label for="demo-email" style="font-weight: 600; margin-bottom: 0;">Email</label>
      <input type="email" id="demo-email" name="email" required style="padding: 10px; font-size: 1em; border-radius: 6px; border: 1px solid #555; background: #111; color: #fff;" />

      <label class="agreement-links" style="display: flex; gap: 8px; align-items: center; font-size: 0.9em; line-height: 1.4;">
        <input type="checkbox" id="demo-consent" required />
        <span>
          I agree to the
          <a href="https://edgedelta.com/free-trial-agreement" target="_blank">Free Trial Agreement</a>,
          <a href="https://edgedelta.com/privacy-policy" target="_blank">Privacy Policy</a> and
          <a href="https://edgedelta.com/terms-of-service" target="_blank">Terms of Service</a>.
        </span>
      </label>

      <button type="submit" id="demo-submit" class="btn-primary" disabled>
        Sign up
      </button>

      <div class="divider">OR</div>

      <button type="button" id="demo-google" class="btn-outline" disabled>
        <img src="https://media.edgedelta.com/Google__G__Logo.svg" alt="Google" width="20" /> Sign up with Google
      </button>

      <button type="button" id="demo-github" class="btn-outline" disabled>
        <img src="https://media.edgedelta.com/connectors/github.svg" alt="GitHub" width="24" /> Sign up with GitHub
      </button>

      <div style="text-align: center; margin-top: 12px; font-size: 0.9em;">
        Already have an account? <a href="<?php echo $app_url . $login_path; ?>" class="login-link">Log In</a>
      </div>
    </form>
  </div>
</div>

<script>
(function() {
  var modal = document.getElementById('demo-paywall');
  var emailInput = document.getElementById('demo-email');
  var consent = document.getElementById('demo-consent');
  var submitBtn = document.getElementById('demo-submit');
  var googleBtn = document.getElementById('demo-google');
  var githubBtn = document.getElementById('demo-github');

  function toggleButtons(enabled) {
    submitBtn.disabled = !enabled;
    googleBtn.disabled = !enabled;
    githubBtn.disabled = !enabled;
  }

  consent.addEventListener('change', function() {
    toggleButtons(consent.checked);
  });

  document.getElementById('demo-paywall-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var email = emailInput.value.trim();
    if (email) {
      window?.analytics?.track?.('DemoSignUpModalClicked', { method: 'email' });
      window.location.href = "<?php echo $app_url . $register_path; ?>?email=" + encodeURIComponent(email);
    }
  });

  googleBtn.addEventListener('click', function() {
    window?.analytics?.track?.('DemoSignUpModalClicked', { method: 'google' });
    window.location.href = "<?php echo $app_url . $register_path; ?>?social=google";
  });

  githubBtn.addEventListener('click', function() {
    window?.analytics?.track?.('DemoSignUpModalClicked', { method: 'github' });
    window.location.href = "<?php echo $app_url . $register_path; ?>?social=github";
  });

  window.openDemoPaywall = function() {
    modal.style.display = 'flex';
    window?.analytics?.track?.('Demo-Signup-Modal-Opened');
  }
  window.closeDemoPaywall = function() {
    modal.style.display = 'none';
    window?.analytics?.track?.('Demo-Signup-Modal-Clicked');
  }

  window.addEventListener('message', function(event) {
    if (event.data?.type === 'edgedelta:demo-paywall:open') {
      event.source?.postMessage({ type: 'edgedelta:demo-paywall:opened' }, '*');
      openDemoPaywall();
    }
    if (event.data?.type === 'edgedelta:demo-paywall:close') {
      closeDemoPaywall();
    }
  });
})();
</script>
