<?php
/**
 * Template Name: AI Teammates - Flip
 */

get_header();
?>

<style>
  .animation-selector {
    position: fixed;
    top: 80px;
    right: 20px;
    z-index: 1000;
    background: rgba(15, 21, 32, 0.95);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 12px 16px;
    backdrop-filter: blur(10px);
  }
  
  .animation-selector label {
    color: #a7b0c0;
    font-size: 0.875rem;
    margin-right: 8px;
    font-weight: 500;
  }
  
  .animation-selector select {
    appearance: none;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #e8eef7;
    padding: 8px 32px 8px 12px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L5 5L9 1' stroke='%23a7b0c0' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    transition: all 0.2s ease;
  }

  .hero-subtitle {
    font-size: clamp(2rem, 5vw, 3.5rem);
    line-height: 1.2;
    font-weight: 700;
    margin: 20px 0 30px;
    letter-spacing: -0.01em;
    color: #e8eef7;
  }
  
  .rotator {
    display: inline-flex;
    align-items: baseline;
    min-height: 1.2em;
  }
  
  /* Override hero section text hiding */
  .section_home_hero .hero-subtitle,
  .section_home_hero .rotator,
  .section_home_hero .flip-wrap,
  .section_home_hero .flip-word {
    isolation: isolate !important;
    z-index: 999999 !important;
    position: relative !important;
  }

  /* Flip animation styles */
  .flip-wrap {
    display: inline-block !important;
    perspective: 800px !important;
    font-size: inherit !important;
    color: #e8eef7 !important;
    font-weight: 700 !important;
    line-height: 1.2 !important;
    visibility: visible !important;
    opacity: 1 !important;
    z-index: 999999 !important;
    position: relative !important;
    font-family: Arial, sans-serif !important;
    isolation: isolate !important;
    min-height: 1.2em !important;
    min-width: 200px !important;
    text-align: center !important;
  }
  
  .flip-word {
    display: inline-block !important;
    transform-origin: 50% 100% !important;
    font-size: inherit !important;
    color: #e8eef7 !important;
    font-weight: 700 !important;
    line-height: 1.2 !important;
    visibility: visible !important;
    opacity: 1 !important;
    font-family: Arial, sans-serif !important;
    isolation: isolate !important;
    z-index: 999999 !important;
    position: relative !important;
  }
  
  .flip-word.enter {
    animation: flipIn 500ms ease both;
  }
  
  .flip-word.leave {
    animation: flipOut 500ms ease both;
    position: absolute;
  }
  
  @keyframes flipIn {
    from {
      transform: rotateX(-90deg);
      opacity: 0;
    }
    to {
      transform: rotateX(0deg);
      opacity: 1;
    }
  }
  
  @keyframes flipOut {
    from {
      transform: rotateX(0deg);
      opacity: 1;
    }
    to {
      transform: rotateX(90deg);
      opacity: 0;
    }
  }
  
  .heading-style-h1-home .gradient-ai {
    background: linear-gradient(90deg, #4ade80, #ec4899);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    display: inline-block;
  }
  
  .hero-image-placeholder {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    background: linear-gradient(135deg, rgba(74, 222, 128, 0.1), rgba(236, 72, 153, 0.1));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a7b0c0;
    font-size: 1.25rem;
    text-align: center;
  }
</style>


<!-- Animation Selector Dropdown -->
<div class="animation-selector">
  <label for="effectSelect">Animation Effect:</label>
  <select id="effectSelect" aria-label="Choose animation effect">
    <option value="typing">Typing</option>
    <option value="rotate" selected>Rotate/Flip</option>
    <option value="fade">Fade</option>
    <option value="slide">Slide Up</option>
  </select>
</div>

<div class="section_home_hero">
  <div class="padding-global">
    <div class="container-large is-lines lines-vertical">
      <div class="padding-section-hero">
        <div class="max-width-custom1 align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <h1 class="heading-style-h1-home">
              <span class="gradient-ai">AI</span> Teammates
            </h1>
            <div style="font-size: clamp(2rem, 5vw, 3.5rem); color: #e8eef7; font-weight: 700; margin: 20px 0 30px; font-family: Arial, sans-serif; line-height: 1.2; letter-spacing: -0.01em; isolation: isolate; z-index: 999999; position: relative; min-height: 1.2em; display: flex; align-items: center; justify-content: center;">
              <span id="animWrap" class="flip-wrap"></span>
            </div>
          </div>
        </div>

        <div class="max-width-52rem align-center text-align-center">
          <div class="padding-bottom padding-large">
            <div class="text-size-xlarge">
              AI teammates that detect suspicious authentication patterns, alert on security incidents, 
              and help your team respond faster. Never miss a critical signal in the noise.
            </div>
          </div>

          <div class="padding-bottom padding-huge">
            <div fade-children="" class="button-group align-center test">
              <a href="/demo" class="button w-inline-block">
                <div class="button-text">Schedule Demo</div>
                <div class="overlay-gradient-1"></div>
                <div class="overlay-gradient-2"></div>
              </a>
              <a href="/login" class="button is-secondary w-inline-block">
                <div class="text-size-medium">Login</div>
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
            </div>
          </div>
        </div>

        <!-- Placeholder for hero image -->
        <div class="hero-image-placeholder">
          <div>
            <p>Hero Image Placeholder</p>
            <p style="font-size: 0.875rem; margin-top: 10px;">Replace with your AI Teammates interface image</p>
          </div>
        </div>

        <?php get_template_part('templates/slider/logo') ?>

      </div>

      <div fade-down-children="" class="section_hero-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
      </div>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="section_home_lottie">
  <div class="padding-global">
    <div class="container-large is-dashes background-color-primary">
      <div class="dots_wrapper">
        <div class="dot is-bot-left"></div>
        <div class="dot is-bot-right"></div>
        <div class="dot is-top-right"></div>
        <div class="dot is-top-left"></div>
      </div>

      <div class="padding-section-small z-index-2">
        <div class="padding-bottom padding-small">
          <div class="home_bullets">
            <div class="home_bullet">
              <div class="icon-product_large w-embed">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="20" fill="#4ade80" fill-opacity="0.1"/>
                  <path d="M24 14V34M14 24H34" stroke="#4ade80" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <div class="padding-bottom padding-xsmall">
                  <h3 class="home-bullet-heading text-size-xlarge">24/7 Monitoring</h3>
                </div>
                <div class="text-size-medium text-color-neutral-lighter text-weight-medium">
                  AI teammates work across all timezones, never missing critical signals
                </div>
              </div>
            </div>
            
            <div class="home_bullet">
              <div class="icon-product_large w-embed">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="20" fill="#ec4899" fill-opacity="0.1"/>
                  <path d="M24 14L26.09 20.26L32.82 21.27L28.41 25.56L29.54 32.26L24 29L18.46 32.26L19.59 25.56L15.18 21.27L21.91 20.26L24 14Z" fill="#ec4899"/>
                </svg>
              </div>
              <div>
                <div class="padding-bottom padding-xsmall">
                  <h3 class="home-bullet-heading text-size-xlarge">Intelligent Triage</h3>
                </div>
                <div class="text-size-medium text-color-neutral-lighter text-weight-medium">
                  Automatically detect, correlate, and escalate incidents without waiting
                </div>
              </div>
            </div>
            
            <div class="home_bullet">
              <div class="icon-product_large w-embed">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="20" fill="#3b82f6" fill-opacity="0.1"/>
                  <rect x="14" y="18" width="20" height="12" rx="2" stroke="#3b82f6" stroke-width="2"/>
                  <circle cx="20" cy="24" r="2" fill="#3b82f6"/>
                  <circle cx="28" cy="24" r="2" fill="#3b82f6"/>
                </svg>
              </div>
              <div>
                <div class="padding-bottom padding-xsmall">
                  <h3 class="home-bullet-heading text-size-xlarge">Multi-Model Support</h3>
                </div>
                <div class="text-size-medium text-color-neutral-lighter text-weight-medium">
                  Leverage multiple AI models with MCP support for comprehensive coverage
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const words = ["Your experts deserve","Are multi-model","Are managed by you","Support MCP","Don't stress during outages","Are always OnCall","Detect, correlate, and escalate","Don't wait for a JIRA ticket","Make your team feel 10x bigger","Start to triage first everytime","Help teams ship more and stress less","Run 100x faster with you","Your boss is currently asking for","Detect threats and explains them","Work every timezone 24/7","Never miss a signal"];
  
  const animWrap = document.getElementById('animWrap');
  const effectSelect = document.getElementById('effectSelect');
  
  if (!animWrap) return;

  const hold = 1500; // Hold time

  // Flip animation controller
  let i = 0;
  let timer = null;

  function mountFirst() {
    console.log('FLIP: mountFirst called, word:', words[i]);
    animWrap.textContent = '';
    const el = document.createElement('span');
    el.className = 'flip-word enter';
    el.textContent = words[i] || 'Your experts deserve';
    el.style.cssText = 'font-family: Arial, sans-serif !important; color: #e8eef7 !important; display: inline-block !important;';
    animWrap.appendChild(el);
    console.log('FLIP: Element added:', el, 'Parent:', animWrap);
  }

  function start() {
    if (!animWrap.firstChild) mountFirst();

    timer = setInterval(() => {
      const current = animWrap.firstChild;
      if (!current) return;

      current.classList.remove('enter');
      current.classList.add('leave');

      i = (i + 1) % words.length;
      const next = document.createElement('span');
      next.className = 'flip-word enter';
      next.textContent = words[i] || '';
      next.style.cssText = 'font-family: Arial, sans-serif !important; color: #e8eef7 !important; display: inline-block !important;';
      animWrap.appendChild(next);

      setTimeout(() => { 
        if (current && current.parentNode) current.parentNode.removeChild(current); 
      }, 480);
    }, hold + 500 + 40);
  }

  function stop() { 
    clearInterval(timer); 
  }

  // Handle dropdown changes
  effectSelect.addEventListener('change', (e) => {
    const mode = e.target.value;
    if (mode !== 'rotate') {
      stop();
      const templateMap = {
        'typing': '/ai-teammates-typing/',
        'fade': '/ai-teammates-fade/',
        'slide': '/ai-teammates-slide/'
      };
      if (templateMap[mode]) {
        window.location.href = templateMap[mode];
      }
    }
  });

  // Start flip animation
  start();
});
</script>

<?php get_footer(); ?>