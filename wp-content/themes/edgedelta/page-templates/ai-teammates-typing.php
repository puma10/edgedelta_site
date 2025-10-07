<?php
/**
 * Template Name: AI Teammates - Typing
 */

// Start session before any output
if (!session_id()) {
    session_start();
}

get_header();

// Sequential background image selection with cache busting
$hero_images = array(
  'edge-hero9-fad.avif'
);

// Initialize or increment the counter
if (!isset($_SESSION['hero_image_index'])) {
  $_SESSION['hero_image_index'] = 0;
} else {
  $_SESSION['hero_image_index'] = ($_SESSION['hero_image_index'] + 1) % count($hero_images);
}

$selected_image = $hero_images[$_SESSION['hero_image_index']];
$cache_buster = time(); // Add timestamp to prevent caching
$image_url = get_template_directory_uri() . '/assets/images/' . $selected_image . '?v=' . $cache_buster;

// Use normal cover behavior for edge-hero8.avif (has correct 16:9 dimensions)
$full_image_class = '';

// Rotate text color between white and black on each page load
// Use a combination of time and random to ensure it changes on every refresh
$random_color_index = rand(0, 1); // Randomly choose 0 (white) or 1 (black)

$text_colors = array('#ffffff', '#000000'); // white, black
$selected_text_color = $text_colors[$random_color_index];

// Preload the selected image
echo '<link rel="preload" as="image" href="' . $image_url . '">';
echo '<!-- Current hero image: ' . $selected_image . ' (Index: ' . $_SESSION['hero_image_index'] . ') -->';
?>

<!-- Today's changes:
- Background gradient with 3 browns
- 47 typing phrases, timing: type 65ms, hold 2s, delete 60ms  
- White cursor & h1 gradient text
- Removed stars/gradient images
- Removed all horizontal and vertical lines for full-width clean look
-->

<style>
  .section_home_hero {
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    background-color: #131517;
  }
  
  .hero-background-image {
    position: absolute;
 /* left: 50%;
    top: 50%;
    min-height: 100%;
    min-width: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover;
    object-position: center center;
    z-index: 1;
    max-width: none;
    opacity: 1;
    transition: none;
    will-change: auto; */
    top: 68.8px;
    left: 0;
    width: 100%;
    object-fit: cover;
  }
  
  /* Alternative: Show full image with letterboxing */
  .hero-background-image.full-image {
    object-fit: contain;
    background: #000;
    width: 100%;
    height: 100%;
    min-width: unset;
    min-height: unset;
    left: 0;
    top: 0;
    transform: none;
  }
  
  .hero-background-overlay {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.5) 60%, rgba(0, 0, 0, 0.85) 90%, rgba(0, 0, 0, 1) 100%);
    z-index: 2;
  }
  
  .hero-content {
    position: relative;
    z-index: 3;
  }
  
  .hero-subtitle {
    font-size: clamp(2rem, 5vw, 3.5rem);
    line-height: 1.2;
    font-weight: 550;
    margin: 20px 0 30px;
    letter-spacing: -0.01em;
    color: #000000;
  }
  
  .rotator {
    display: inline-flex;
    align-items: baseline;
    min-height: 1.2em;
    color: <?php echo $selected_text_color; ?> !important;
    font-weight: 550 !important;
    -webkit-text-fill-color: <?php echo $selected_text_color; ?> !important;
    text-fill-color: <?php echo $selected_text_color; ?> !important;
  }
  
  #typed {
    color: <?php echo $selected_text_color; ?> !important;
    font-weight: 400 !important;
    -webkit-text-fill-color: <?php echo $selected_text_color; ?> !important;
    text-fill-color: <?php echo $selected_text_color; ?> !important;
  }
  
  .cursor {
    display: inline-block;
    width: 4px;
    height: 1em;
    background: <?php echo $selected_text_color; ?>;
    margin-left: 3px;
    animation: blink 1.2s steps(1) infinite;
    box-shadow: 0 0 10px <?php echo $selected_text_color === '#ffffff' ? 'rgba(255, 255, 255, 0.4)' : 'rgba(0, 0, 0, 0.4)'; ?>;
    vertical-align: baseline;
    font-weight: 400;
  }
  
  @keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0; }
  }
  
  @keyframes colorChangeToBlack {
    from {
      color: #ffffff !important;
      -webkit-text-fill-color: #ffffff !important;
    }
    to {
      color: #000000 !important;
      -webkit-text-fill-color: #000000 !important;
    }
  }
  
  @keyframes cursorColorChangeToBlack {
    from {
      background: #ffffff;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    }
    to {
      background: #000000;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }
  }
  
  .heading-style-h1-home {
    color: <?php echo $selected_text_color; ?> !important;
    font-size: clamp(3rem, 6vw, 10rem);
    line-height: 1.1;
    font-weight: 500;
    margin: 0 0 20px 0;
  }
  
  .heading-style-h1-home span {
    color: <?php echo $selected_text_color; ?> !important;
    background: none !important;
    -webkit-background-clip: unset !important;
    -webkit-text-fill-color: <?php echo $selected_text_color; ?> !important;
    background-clip: unset !important;
  }
  
  /* Custom img_hero sizing for AI Teammates with animations */
  .img_hero {
    width: 100%;
    max-width: 1280px;
    margin: 60px auto 40px auto;
    padding-top: 20px;
    aspect-ratio: 16 / 9;
    position: relative;
    left: 0 !important;
    top: 0 !important;
    transform-style: preserve-3d;
    perspective: 1000px;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }
  
  .img_hero::before {
    content: "";
    display: block;
    position: absolute;
    inset: 0;
    background-image: var(--bg-url);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 
      0 20px 50px -12px rgba(0, 0, 0, 0.5),
      0 0 0 1px rgba(139, 92, 246, 0.1),
      inset 0 1px 0 rgba(255, 255, 255, 0.1);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    transform: translateZ(0);
	pointer-events: none;
  }
  
  /* Hover effects */
  .img_hero:hover {
    transform: scale(1.02) translateY(-5px);
  }
  
  .img_hero:hover::before {
    box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.6);
  }

  .hero-image-placeholder {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(236, 72, 153, 0.1));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a7b0c0;
    font-size: 1.25rem;
    text-align: center;
  }
  
  /* Responsive container widths to prevent narrow appearance on large screens */
  .container-large {
    max-width: 80rem !important; /* 1280px base width */
  }
  
  /* Cursor-inspired responsive scaling */
  @media (min-width: 1400px) {
    .container-large {
      max-width: 81.25rem !important; /* 1300px */
    }
  }
  
  @media (min-width: 1600px) {
    .container-large {
      max-width: 96.875rem !important; /* 1550px */
    }
  }
  
  @media (min-width: 1920px) {
    .container-large {
      max-width: 100rem !important; /* 1600px */
    }
  }
  
  @media (min-width: 2560px) {
    .container-large {
      max-width: 120rem !important; /* 1920px */
    }
  }
  
  /* Scale feature blocks and hero image proportionally with containers */
  @media (min-width: 1400px) {
    .cursor_feature_block, .img_hero {
      max-width: 1300px !important;
    }
  }
  
  @media (min-width: 1600px) {
    .cursor_feature_block, .img_hero {
      max-width: 1550px !important;
    }
  }
  
  @media (min-width: 1920px) {
    .cursor_feature_block, .img_hero {
      max-width: 1600px !important;
    }
  }
  
  @media (min-width: 2560px) {
    .cursor_feature_block, .img_hero {
      max-width: 1920px !important;
    }
  }
  
  /* Scale text containers proportionally with screen size */
  @media (min-width: 1400px) {
    .max-width-custom1,
    .starter_templates_header,
    .cursor_feature_header,
    .cursor_feature_description,
    .trusted_engineers_header,
    .simple_feature_description,
    .heading-style-h1-home,
    .hero-subtitle {
      max-width: 1300px !important;
      margin-left: auto;
      margin-right: auto;
    }
    
    .starter_templates_wrapper,
    .trusted_engineers_wrapper,
    .features_container {
      max-width: 1300px !important;
    }
  }
  
  @media (min-width: 1600px) {
    .max-width-custom1,
    .starter_templates_header,
    .cursor_feature_header,
    .cursor_feature_description,
    .trusted_engineers_header,
    .simple_feature_description,
    .heading-style-h1-home,
    .hero-subtitle {
      max-width: 1550px !important;
    }
    
    .starter_templates_wrapper,
    .trusted_engineers_wrapper,
    .features_container {
      max-width: 1550px !important;
    }
  }
  
  @media (min-width: 1920px) {
    .max-width-custom1,
    .starter_templates_header,
    .cursor_feature_header,
    .cursor_feature_description,
    .trusted_engineers_header,
    .simple_feature_description,
    .heading-style-h1-home,
    .hero-subtitle {
      max-width: 1600px !important;
    }
    
    .starter_templates_wrapper,
    .trusted_engineers_wrapper,
    .features_container {
      max-width: 1600px !important;
    }
  }
  
  @media (min-width: 2560px) {
    .max-width-custom1,
    .starter_templates_header,
    .cursor_feature_header,
    .cursor_feature_description,
    .trusted_engineers_header,
    .simple_feature_description,
    .heading-style-h1-home,
    .hero-subtitle {
      max-width: 1920px !important;
    }
    
    .starter_templates_wrapper,
    .trusted_engineers_wrapper,
    .features_container {
      max-width: 1920px !important;
    }
  }
  
</style>

<div class="section_home_hero">
  <!-- Responsive background image like Cursor.com -->
  <img alt="Hero Background" 
       class="hero-background-image <?php echo $full_image_class; ?>" 
       style="color:transparent" 
       sizes="100vw" 
       srcset="<?php echo $image_url; ?> 576w, 
               <?php echo $image_url; ?> 768w, 
               <?php echo $image_url; ?> 1024w, 
               <?php echo $image_url; ?> 1152w, 
               <?php echo $image_url; ?> 1440w, 
               <?php echo $image_url; ?> 1536w, 
               <?php echo $image_url; ?> 1920w, 
               <?php echo $image_url; ?> 2048w, 
               <?php echo $image_url; ?> 2880w, 
               <?php echo $image_url; ?> 3840w" 
       src="<?php echo $image_url; ?>">
  
  <!-- Dark overlay -->
  <!--<div class="hero-background-overlay"></div> -->
  
  <!-- Content wrapper -->
  <div class="hero-content">
    <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-hero">
        <div class="max-width-custom1 align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <h1 class="heading-style-h1-home">
              <span>Agentic Teammates</span>
            </h1>
            <h2 class="hero-subtitle">
              <span class="rotator" 
                    data-words='["your experts deserve","are multi-model","managed by you","support MCP","don&apos;t stress during outages","are always OnCall","detect, correlate, escalate","don&apos;t wait for a JIRA ticket","make your team 10x faster","always start to triage first","help teams ship more","run 100x faster with you","your boss is asking for","detect threats and explain","work every timezone 24/7","never miss a signal","sift through all the noise","deliver enriched context","don&apos;t burnout during a sprint","give you operational resilience","ask you for approval on actions","provide solutions not problems","are used by your competitors","are your ticket to the AI era","scale with your ambition","happily handle the grunt work","are tuned for your priorities","are never the bottleneck","don&apos;t complain about toil","eliminate overhead","spot threats you missed","keep your experts focused","improve on manual triage","are helping to drive strategy","spot trends before your tools","replace days by seconds","catch issues before auditors","make real-time compliance real","fill out the RCA doc for you","turn noise into signal","make \"waiting on logs\" the past","help you move faster","let you sleep every night","reduce the number of war rooms","are already streamlining data","predict, before you even react","eliminate on-call burnout"]'
                    data-type-speed="65"
                    data-delete-speed="60"
                    data-hold="2000"
                    data-loop="true">
                <span id="typed"></span><span class="cursor"></span>
              </span>
            </h2>
          </div>
        </div>

        <!-- Hero Image -->
        <?php 
        $img_hero = get_field('img_hero');
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), '2048x2048');
		$iframe = get_field('ai_demo_iframe', false, false);
		$api_origin = get_field('api_origin');
        ?>
		<?php if ($iframe) : ?>
		  <div class="img_hero text-align-center" style="padding-top: 0;">
			  <iframe src="<?php echo esc_url($iframe); ?>" style="border: none; background: none; width: 100%; height: 100%; border-radius: 12px;"></iframe>
		  </div>
		  
		  
		  <div class="modal_wrapper" id="demo-paywall" style="display: none;">
			  <div class="modal_bg" style="backdrop-filter: blur(2px)"></div>
			  <div class="modal_component" style="width: 600px; min-width: 0; max-width: 90vw;">
				  <div class="modal_close">
					  <div class="icon w-embed">
						  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							  <path d="M2 10L10 2" stroke="currentColor" stroke-width="2.12014" stroke-linecap="round" stroke-linejoin="round"></path>
							  <path d="M10 10L2 2" stroke="currentColor" stroke-width="2.12014" stroke-linecap="round" stroke-linejoin="round"></path>
						  </svg>
					  </div>
				  </div>
				  <form style="display: flex; flex-direction: column; gap: 8px;" action="<?php echo esc_url($api_origin); ?>/v1/billing/subscription/checkout?lookup_key=ED_MONTHLY_PRO_CREDIT_VALUE__20" method="POST">
					  <h6 style="font-size: 1.6em">Unlock the power of AI Teammates</h6>
					  
					  <div id="demo-paywall-message"></div>
					  
					  <div style="">
						  Scale your SRE and DevOps operations with our multi-agentic AI system. Get unlimited access to all features for just $19/month.
					  </div>
					  
					  <div style="background: #1d1d1d; padding: 20px; border: 1px solid #424242; border-radius: 6px; display: flex; flex-direction: column; gap: 4px;">
					  	<h6 style="font-size: 1.5em">Professional</h6>
					  	
						 <div style="font-size: 1.2em">
							 $19<span style="color: #9b9b9b; font-size: 0.8em">/month</span>
						  </div>
						  
						  <div>
							  Unlock the full power of AI automation for your SRE and DevOps operations
						  </div>
						  
						  <ul>
							  <li>Unlimited AI agent executions</li>
							  <li>Advanced monitoring & alerting</li>
							  <li>Multi-environment support</li>
							  <li>Custom runbook automation</li>
							  <li>Slack/Teams integrations</li>
							  <li>Priority support</li>
							  <li>Advanced incident management</li>
							  <li>Performance optimization agents</li>
							  <li>Custom integrations & APIs</li>
							  <li>Advanced analytics & reporting</li>
						  </ul>
					  
					  </div>

					  <div class="hs_submit hs-submit">
						  <div class="hs-field-desc" style="display: none;"></div>
						  <div class="actions">
							  <input type="submit" class="hs-button primary large" value="Upgrade to Professional">
						  </div>
					  </div>
				  </form>
			  </div>
		  </div>

		  <script>
			var modal = document.getElementById('demo-paywall');
			var modalClose = modal.querySelector('.modal_close');
			  
			modalClose.addEventListener('click', () => {
				modal.style.display = 'none';
			});
			  
			window.addEventListener('message', event => {
			  if(event.data?.type === 'edgedelta:demo-paywall:open') {
				event.source?.postMessage({ type: 'edgedelta:demo-paywall:opened' }, '*');

				modal.style.display = 'flex';
			  }
									
			  if(event.data?.type === 'edgedelta:demo-paywall:close') {
				modal.style.display = 'none';
			  }
			});
		  </script>
		  
        <?php elseif ($img_hero) : ?>
          <div class="img_hero text-align-center" style="--bg-url: url('<?php echo esc_url($img_hero['sizes']['2048x2048']); ?>');"></div>
        <?php elseif ($featured_image) : ?>
          <div class="img_hero text-align-center" style="--bg-url: url('<?php echo esc_url($featured_image); ?>');"></div>
        <?php else : ?>
          <!-- Using a placeholder image service for demonstration -->
          <div class="img_hero text-align-center" style="--bg-url: url('https://via.placeholder.com/1200x675/1a2332/4ade80?text=Agentic+Teammates+Interface');"></div>
        <?php endif ?>

        <!-- Logo Slider integrated into hero like front page -->
        <?php get_template_part('templates/slider/logo'); ?>

      </div>

      <!--<div fade-down-children="" class="section_hero-bg"></div>-->
    </div>
  </div>
  </div> <!-- Close hero-content -->
</div>

<!-- Starter Templates Section - New Design -->
<div class="section_starter_templates">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-medium">
        <div class="starter_templates_wrapper">
          <div class="starter_templates_header">
            <h2 class="heading-style-h2-v2">Starter Templates</h2>
            <p class="starter_templates_description">Get started instantly with a pre built pipeline or specific integrations of your choice.</p>
          </div>
          
          <!-- Category Filter Buttons -->
          <div class="starter_templates_tabs">
            <button class="starter_tab active" data-category="all">All Sources</button>
            <button class="starter_tab" data-category="cloud">Cloud</button>
            <button class="starter_tab" data-category="containers">Containers</button>
            <button class="starter_tab" data-category="databases">Databases</button>
            <button class="starter_tab" data-category="logging">Logging</button>
            <button class="starter_tab" data-category="metrics">Metrics</button>
            <button class="starter_tab" data-category="network">Network</button>
            <button class="starter_tab" data-category="security">Security</button>
          </div>
          
          <div class="starter_templates_grid">
            <!-- Row 1 -->
            <div class="template_card" data-category="cloud">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 7V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v2"/>
                  <path d="M3 17v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2"/>
                  <path d="M3 12h18"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Amazon S3</h3>
                <p class="template_description">Ingest data from S3 buckets via HTTPS</p>
              </div>
            </div>
            
            <div class="template_card" data-category="cloud metrics">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 3v18h18"/>
                  <path d="M18 17V9l-5 5-5-5v8"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">AWS CloudWatch</h3>
                <p class="template_description">Collect metrics, logs, and events</p>
              </div>
            </div>
            
            <div class="template_card" data-category="cloud logging">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 2L2 7v10c0 5.55 3.84 9.95 9 11 5.16-1.05 9-5.45 9-11V7l-10-5z"/>
                  <path d="M9 12l2 2 4-4"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">AWS Lambda</h3>
                <p class="template_description">Monitor serverless function execution</p>
              </div>
            </div>
            
            <div class="template_card" data-category="cloud">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                  <polyline points="3.27,6.96 12,12.01 20.73,6.96"/>
                  <line x1="12" y1="22.08" x2="12" y2="12"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Azure Blob Storage</h3>
                <p class="template_description">Process data from Azure storage</p>
              </div>
            </div>
            
            <!-- Row 2 -->
            <div class="template_card" data-category="cloud">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 7V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v2"/>
                  <path d="M3 17v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2"/>
                  <path d="M3 12h18"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Google Cloud Storage</h3>
                <p class="template_description">Ingest data from GCS buckets</p>
              </div>
            </div>
            
            <div class="template_card" data-category="containers">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                  <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                  <line x1="6" y1="6" x2="6.01" y2="6"/>
                  <line x1="6" y1="18" x2="6.01" y2="18"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Kubernetes</h3>
                <p class="template_description">Collect container metrics and logs</p>
              </div>
            </div>
            
            <div class="template_card" data-category="containers">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                  <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                  <line x1="6" y1="6" x2="6.01" y2="6"/>
                  <line x1="6" y1="18" x2="6.01" y2="18"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Docker</h3>
                <p class="template_description">Monitor container performance</p>
              </div>
            </div>
            
            <div class="template_card" data-category="containers">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                  <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                  <line x1="6" y1="6" x2="6.01" y2="6"/>
                  <line x1="6" y1="18" x2="6.01" y2="18"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">OpenShift</h3>
                <p class="template_description">Enterprise Kubernetes platform logs</p>
              </div>
            </div>
            
            <!-- Row 3 -->
            <div class="template_card" data-category="databases">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <path d="M7 7h10v4H7z"/>
                  <path d="M7 15h6v2H7z"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">PostgreSQL</h3>
                <p class="template_description">Monitor database performance</p>
              </div>
            </div>
            
            <div class="template_card" data-category="databases">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <path d="M7 7h10v4H7z"/>
                  <path d="M7 15h6v2H7z"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">MySQL</h3>
                <p class="template_description">Track query performance and logs</p>
              </div>
            </div>
            
            <div class="template_card" data-category="databases">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <path d="M7 7h10v4H7z"/>
                  <path d="M7 15h6v2H7z"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">MongoDB</h3>
                <p class="template_description">Monitor NoSQL database metrics</p>
              </div>
            </div>
            
            <div class="template_card" data-category="databases">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <path d="M7 7h10v4H7z"/>
                  <path d="M7 15h6v2H7z"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Redis</h3>
                <p class="template_description">In-memory data store monitoring</p>
              </div>
            </div>
            
            <!-- Row 4 -->
            <div class="template_card">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <path d="M14 2v6h6"/>
                  <path d="M16 13H8"/>
                  <path d="M16 17H8"/>
                  <path d="M10 9H8"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Syslog</h3>
                <p class="template_description">Receive syslog data via TCP or UDP</p>
              </div>
            </div>
            
            <div class="template_card">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <path d="M14 2v6h6"/>
                  <path d="M16 13H8"/>
                  <path d="M16 17H8"/>
                  <path d="M10 9H8"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Fluentd</h3>
                <p class="template_description">Unified logging layer collection</p>
              </div>
            </div>
            
            <div class="template_card">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <path d="M14 2v6h6"/>
                  <path d="M16 13H8"/>
                  <path d="M16 17H8"/>
                  <path d="M10 9H8"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Logstash</h3>
                <p class="template_description">Process logs and events</p>
              </div>
            </div>
            
            <div class="template_card">
              <div class="template_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <path d="M14 2v6h6"/>
                  <path d="M16 13H8"/>
                  <path d="M16 17H8"/>
                  <path d="M10 9H8"/>
                </svg>
              </div>
              <div class="template_content">
                <h3 class="template_title">Windows Event Log</h3>
                <p class="template_description">Collect Windows system events</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Features Section - Cursor Tab Style -->
<div class="section_features_cursor">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-xlarge">
        
        <!-- Feature 1 - Tab, tab, tab style -->
        <div class="cursor_feature_block">
          <div class="cursor_feature_header">
            <h2 class="cursor_feature_title">Your Autonomous AI Team Responds First</h2>
          </div>
          
          <div class="cursor_code_editor feature_gradient_1">
            <?php $feature_image_1 = get_field('feature_image_1'); ?>
            <?php if ($feature_image_1) : ?>
              <img src="<?php echo esc_url($feature_image_1['sizes']['large']); ?>" alt="<?php echo esc_attr($feature_image_1['alt']); ?>" class="feature_image_display">
            <?php else : ?>
              <div class="feature_placeholder">
                <p>Feature Image 1 - Please upload an image in the admin</p>
              </div>
            <?php endif; ?>
          </div>
          
          <div class="cursor_feature_description">
            <p class="cursor_feature_subtitle">Your configurable AI agents filter noise, investigate fast, correlate and enrich data, and instantly enable your human experts with full context.</p>
          </div>
        </div>

        <!-- Feature 2 - Command K style -->
        <div class="cursor_feature_block">
          <div class="cursor_feature_header">
            <h2 class="cursor_feature_title">Your Data and Your AI Agents All Connected</h2>
          </div>
          
          <div class="cursor_code_editor feature_gradient_2">
            <?php $feature_image_2 = get_field('feature_image_2'); ?>
            <?php if ($feature_image_2) : ?>
              <img src="<?php echo esc_url($feature_image_2['sizes']['large']); ?>" alt="<?php echo esc_attr($feature_image_2['alt']); ?>" class="feature_image_display">
            <?php else : ?>
              <div class="feature_placeholder">
                <p>Feature Image 2 - Please upload an image in the admin</p>
              </div>
            <?php endif; ?>
          </div>
          
          <div class="cursor_feature_description">
            <p class="cursor_feature_subtitle">Integrate with your existing services, platforms, and community MCP tooling for a connected fabric that enables continuous curation and inference.</p>
          </div>
        </div>

        <!-- Feature 3 - Natural Language style -->
        <div class="cursor_feature_block">
          <div class="cursor_feature_header">
            <h2 class="cursor_feature_title">Your AI Era Starts with You</h2>
          </div>
          
          <div class="cursor_code_editor feature_gradient_3">
            <?php $feature_image_3 = get_field('feature_image_3'); ?>
            <?php if ($feature_image_3) : ?>
              <img src="<?php echo esc_url($feature_image_3['sizes']['large']); ?>" alt="<?php echo esc_attr($feature_image_3['alt']); ?>" class="feature_image_display">
            <?php else : ?>
              <div class="feature_placeholder">
                <p>Feature Image 3 - Please upload an image in the admin</p>
              </div>
            <?php endif; ?>
          </div>
          
          <div class="cursor_feature_description">
            <p class="cursor_feature_subtitle">Your team is better than you could have ever imagined; get them focused on your company's strategic initiatives, not simple grunt work.</p>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- Lottie Animation Section -->
<div class="section_home_lottie" style="display: none;">
  <div class="padding-global">
    <div class="container-large">
      <div class="dots_wrapper">
        <div class="dot is-bot-left"></div>
        <div class="dot is-bot-right"></div>
        <div class="dot is-top-right"></div>
        <div class="dot is-top-left"></div>
      </div>

      <div class="padding-section-small z-index-2" style="display: none;">
        <div class="max-width-large align-center text-align-center">
          <div class="text-size-large">
            Simplify log analytics and find what matters in your data, fast. No training needed.
          </div>
        </div>

        <div class="is-relative">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 741 756" fill="none" class="home_graph-bg">
            <g opacity="0.4">
              <g filter="url(#filter0_f_14897_86728)">
                <ellipse cx="335.4" cy="378" rx="104.4" ry="147" fill="#21835E" fill-opacity="0.4"></ellipse>
              </g>
              <g filter="url(#filter1_f_14897_86728)">
                <ellipse cx="474.6" cy="378" rx="104.4" ry="147" fill="#509FF8" fill-opacity="0.4"></ellipse>
              </g>
            </g>
            <defs>
              <filter id="filter0_f_14897_86728" x="0.765594" y="0.765594" width="669.269" height="754.469" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                <feGaussianBlur stdDeviation="115.117" result="effect1_foregroundBlur_14897_86728"></feGaussianBlur>
              </filter>
              <filter id="filter1_f_14897_86728" x="208.366" y="69.1656" width="532.469" height="617.669" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                <feGaussianBlur stdDeviation="80.9172" result="effect1_foregroundBlur_14897_86728"></feGaussianBlur>
              </filter>
            </defs>
          </svg>
          <div data-w-id="ad058daa-6250-c615-f38c-4dcc2dd1e19c" data-animation-type="lottie" data-src="<?php echo get_template_directory_uri() ?>/assets/edge-delta-hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="0" data-duration="13.616666666666667">
          </div>
        </div>

        <?php if (have_rows('bullets_pipelines')) : ?>
          <div class="padding-bottom padding-small">
            <div class="home_bullets">
              <?php while (have_rows('bullets_pipelines')) : the_row(); ?>
                <div class="home_bullet">
                  <div class="icon-product_large w-embed">
                    <?php the_sub_field('icon_svg') ?>
                  </div>
                  <div>
                    <div class="padding-bottom padding-xsmall">
                      <h3 class="home-bullet-heading text-size-xlarge"><?php the_sub_field('title') ?></h3>
                    </div>
                    <div class="text-size-medium text-color-neutral-lighter text-weight-medium"><?php the_sub_field('description') ?></div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif ?>

      </div>
    </div>
  </div>
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

<!-- Pipelines Section -->
<div class="section_home_pipelines is-relative">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-medium">
        <div class="align-center text-align-center">
          <?php if (get_field('subtitle_pipelines')) : ?>
            <div class="padding-bottom padding-medium">
              <div class="tag"><?php the_field('subtitle_pipelines') ?></div>
            </div>
          <?php endif ?>

          <?php if (get_field('title_pipelines')) : ?>
            <div class="padding-bottom padding-large">
              <h2><?php the_field('title_pipelines') ?></h2>
            </div>
          <?php endif ?>

          <?php $image_pipelines = get_field('image_pipelines') ?>
          <?php if ($image_pipelines) : ?>
            <div class="padding-bottom padding-large">
              <div class="pipelines_image-wrapper">
                <img src="<?php echo $image_pipelines['sizes']['1536x1536'] ?>" alt="<?php the_field('title_pipelines') ?>" class="cover-img">
              </div>
            </div>
          <?php endif ?>

          <?php if (have_rows('bullets_lottie')) : ?>
            <div class="padding-bottom padding-large">
              <?php $i = 0 ?>
              <div class="home_bullets">
                <?php while (have_rows('bullets_lottie')) : the_row(); ?>
                  <?php $i++ ?>
                  <div class="home_bullet">
                    <div class="lottie_bullet_number">
                      <div><?php echo $i ?></div>
                    </div>
                    <div class="text-size-medium"><?php the_sub_field('description') ?></div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endif ?>

          <?php if (get_field('btn_text_pipelines')) : ?>
            <div class="display-inline">
              <a href="<?php the_field('btn_url_pipelines') ?>" class="button is-secondary w-inline-block">
                <div class="text-size-medium"><?php the_field('btn_text_pipelines') ?></div>
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
          <?php endif ?>
        </div>

        <img src="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif" sizes="100vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/LightsGreenUpper.avif 2880w" alt="" class="lights-green">
      </div>
    </div>
  </div>
</div>

<!-- Reviews Section -->
<?php if (get_field('title_reviews')) : ?>
  <div class="section_home_trusted is-relative">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-medium z-index-2" style="padding: 1rem;">
          <div class="margin-top margin-custom2">
            <div class="padding-bottom padding-xxlarge">
              <div class="max-width-large align-center text-align-center">
                <h2 class="heading-style-h3"><?php the_field('title_reviews') ?></h2>
              </div>
            </div>
          </div>
          <?php get_template_part('templates/slider/swiper') ?>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<!-- Data Pipelines Feature Section - After Testimonials -->
<div class="section_features_cursor section_pipeline_feature">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-large">
        <div class="cursor_feature_block">
          <div class="cursor_feature_header">
            <h2 class="cursor_feature_title">Data Pipelines Enable Secure and Scalable AI</h2>
          </div>
          
          <div class="cursor_code_editor feature_gradient_5">
            <?php $feature_image_4 = get_field('feature_image_4'); ?>
            <?php if ($feature_image_4) : ?>
              <img src="<?php echo esc_url($feature_image_4['sizes']['large']); ?>" alt="<?php echo esc_attr($feature_image_4['alt']); ?>" class="feature_image_display">
            <?php else : ?>
              <div class="feature_placeholder">
                <p>Feature Image 4 - Please upload an image in the admin</p>
              </div>
            <?php endif; ?>
          </div>
          
          <div class="cursor_feature_description">
            <p class="cursor_feature_subtitle">Continuously monitor sensitive data in real time, proactively enforce policies, and secure agentic workflows across all your data.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Observability Section - EdgeDelta Style -->
<div class="section_home_observability is-relative">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-medium z-index-2">
        <div class="align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <div class="tag">end-to-end monitoring</div>
          </div>
          
          <div class="padding-bottom padding-large">
            <h2>Observability That Works at Scale</h2>
          </div>

          <div class="padding-bottom padding-custom3">
            <div class="observability_cursor_grid">
              
              <div class="observability_cursor_card">
                <div class="cursor_card_icon">
                  <div class="cursor_visual_element frontier_visual">
                    <div class="visual_triangle"></div>
                  </div>
                </div>
                <h3 class="cursor_card_title">Log Everything</h3>
                <p class="cursor_card_description">Store and search all your data. Edge Delta's distributed architecture enables cost-effective observability at scale. Now, you can stop sampling and filtering events to contain costs.</p>
                <div class="cursor_card_link_wrapper">
                  <a href="/use-cases/analyze-logs-within-your-environment" class="cursor_card_learn_more">
                    Learn more
                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="currentColor" fill-opacity="0.2"/>
                    </svg>
                  </a>
                </div>
              </div>

              <div class="observability_cursor_card">
                <div class="cursor_card_icon">
                  <div class="cursor_visual_element familiar_visual">
                    <div class="visual_cubes"></div>
                  </div>
                </div>
                <h3 class="cursor_card_title">Resolve Issues Effortlessly</h3>
                <p class="cursor_card_description">Edge Delta summarizes your log data, so you don't have to sift through every event. With each alert, you can see exactly what changed and which resources were affected.</p>
                <div class="cursor_card_link_wrapper">
                  <a href="/use-cases/log-analysis" class="cursor_card_learn_more">
                    Learn more
                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="currentColor" fill-opacity="0.2"/>
                    </svg>
                  </a>
                </div>
              </div>

              <div class="observability_cursor_card">
                <div class="cursor_card_icon">
                  <div class="cursor_visual_element privacy_visual">
                    <div class="visual_circle"></div>
                  </div>
                </div>
                <h3 class="cursor_card_title">Automate Monitoring</h3>
                <p class="cursor_card_description">Edge Delta uses AI to automatically detect and alert on anomalies. Now, you don't have to spend time defining alert thresholds or even predict what conditions to monitor.</p>
                <div class="cursor_card_link_wrapper">
                  <a href="/use-cases/ai-monitoring" class="cursor_card_learn_more">
                    Learn more
                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="currentColor" fill-opacity="0.2"/>
                    </svg>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="section_cta-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" alt="" class="section_cta_bg-stars">
        <div class="section_cta-gradient"></div>
      </div>
    </div>
  </div>
</div>

<!-- Original Observability Section -->
<?php if (get_field('title_observability')) : ?>
  <div class="section_home_observability is-relative" style="display: none;">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-medium z-index-2">
          <div class="align-center text-align-center">
            <?php if (get_field('subtitle_observability')) : ?>
              <div class="padding-bottom padding-medium">
                <div class="tag"><?php the_field('subtitle_observability') ?></div>
              </div>
            <?php endif ?>

            <div class="padding-bottom padding-large">
              <h2><?php the_field('title_observability') ?></h2>
            </div>

            <?php if (have_rows('bullets_observability')) : ?>
              <div class="padding-bottom padding-custom3">
                <div class="home_observability_component">
                  <?php while (have_rows('bullets_observability')) : the_row(); ?>
                    <div class="observability_item">
                      <?php $image_observability = get_sub_field('img') ?>
                      <?php if ($image_observability) : ?>
                        <div class="observability_image-wrapper">
                          <img src="<?php echo $image_observability['sizes']['medium_large'] ?>" sizes="100vw" alt="<?php the_field('title_pipelines') ?>">
                        </div>
                      <?php endif ?>

                      <div class="observability_text-wrapper">
                        <div>
                          <?php if (get_sub_field('title')) : ?>
                            <div class="padding-bottom padding-xsmall">
                              <h3 class="text-size-large no-graident text-weight-normal text-color-alternate"><?php the_sub_field('title') ?></h3>
                            </div>
                          <?php endif ?>

                          <?php if (get_sub_field('descpiption')) : ?>
                            <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('descpiption') ?></div>
                          <?php endif ?>
                        </div>

                        <?php if (get_sub_field('text_btn')) : ?>
                          <div class="display-inline">
                            <a href="<?php the_sub_field('text_url') ?>" class="button is-text w-inline-block">
                              <div><?php the_sub_field('text_btn') ?></div>
                              <div class="icon w-embed">
                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g filter="url(#filter0_i_14897_135747)">
                                    <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="white" fill-opacity="0.1"></path>
                                    <path d="M0.416656 3.59083C0.416656 2.23057 1.90061 1.39037 3.06702 2.09022L9.5823 5.99939C10.7151 6.67909 10.7151 8.32091 9.5823 9.00061L3.06702 12.9098C1.90061 13.6096 0.416656 12.7694 0.416656 11.4092V3.59083Z" fill="#62D37D" fill-opacity="0.05"></path>
                                  </g>
                                  <path d="M0.816657 3.59083C0.816657 2.54149 1.96142 1.89333 2.86123 2.43322L9.3765 6.34238C10.2504 6.86673 10.2504 8.13327 9.3765 8.65761L2.86122 12.5668C1.96142 13.1067 0.816657 12.4585 0.816657 11.4092V3.59083Z" stroke="white" stroke-opacity="0.4" stroke-width="0.8"></path>
                                  <defs>
                                    <filter id="filter0_i_14897_135747" x="0.416656" y="0.0878906" width="10.0153" height="13.0742" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                      <feOffset dy="-1.75"></feOffset>
                                      <feGaussianBlur stdDeviation="3.5"></feGaussianBlur>
                                      <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                      <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.22 0"></feColorMatrix>
                                      <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14897_135747"></feBlend>
                                    </filter>
                                  </defs>
                                </svg>
                              </div>
                            </a>
                          </div>
                        <?php endif ?>
                      </div>
                    </div>
                  <?php endwhile ?>
                </div>
              </div>
            <?php endif ?>
          </div>
        </div>

        <div class="section_cta-bg">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 100vw, (max-width: 767px) 64vw, (max-width: 991px) 80vw, 50vw" alt="" class="section_cta_bg-stars">
          <div class="section_cta-gradient"></div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<!-- CTA Black Section -->
<?php if (get_field('cta_black') == 'general') : ?>
  <?php get_template_part('templates/cta/cta-modern') ?>
<?php elseif (get_field('cta_black') == 'new') : ?>
  <?php get_template_part('templates/solutions-product/cta-modern') ?>
<?php endif ?>

<!-- Awards Section -->
<div class="section_home_awards is-relative">
  <div class="padding-global">
    <div class="container-large">
      <div>
        <div fade-up-children="" class="home_awards_component z-index-2">
          <div class="awards_item">
            <div class="awards_image-wrapper">
              <img src="https://careful-goldfinch-28a46a.instawp.site/wp-content/uploads/2025/08/image-8.webp" alt="Gartner Cool Vendor" class="awards_image">
            </div>
            <div>
              <div class="padding-bottom padding-xxsmall">
                <div class="text-size-large text-color-alternate text-weight-medium">Gartner Cool Vendor</div>
              </div>
              <div class="text-weight-medium">Named as a Cool Vendor in Observability and Monitoring</div>
            </div>
          </div>
          <div class="awards_divider"></div>
          <div class="awards_item">
            <div class="awards_image-wrapper">
              <img src="https://careful-goldfinch-28a46a.instawp.site/wp-content/uploads/2025/08/image-9.webp" alt="SOC 2 Type II" class="awards_image">
            </div>
            <div>
              <div class="padding-bottom padding-xxsmall">
                <div class="text-size-large text-color-alternate text-weight-medium">SOC 2 Type II</div>
              </div>
              <div class="text-weight-medium">Compliant with security and availability standards</div>
            </div>
          </div>
          <div class="awards_divider"></div>
          <div class="awards_item">
            <div class="awards_image-wrapper">
              <img src="https://careful-goldfinch-28a46a.instawp.site/wp-content/uploads/2025/08/Frame-33898-300x139-1.webp" alt="AWS ISV Accelerate Program" class="awards_image">
            </div>
            <div>
              <div class="padding-bottom padding-xxsmall">
                <div class="text-size-large text-color-alternate text-weight-medium">AWS ISV Accelerate Program</div>
              </div>
              <div class="text-weight-medium">Co-sell ready partner providing specialized solutions</div>
            </div>
          </div>
        </div>
      </div>
      <div class="dots_wrapper">
        <div class="dot is-bot-left"></div>
        <div class="dot is-bot-right"></div>
        <div class="dot is-top-right"></div>
        <div class="dot is-top-left"></div>
      </div>
    </div>
  </div>
</div>

<!-- Industry Adoption Section -->
<?php $industry_adoption = get_field('industry_adoption_group') ?>
<?php if ($industry_adoption) : ?>
  <div class="section_telemetry_pipelines">
    <div class="padding-global">
      <div class="container-large no-padding">
        <div class="padding-section-medium">
          <?php if ($industry_adoption['title']) : ?>
            <div class="padding-bottom padding-large text-align-center">
              <h2><?php echo $industry_adoption['title'] ?></h2>
            </div>
          <?php endif ?>

          <?php if ($industry_adoption['industry_adoption']) : ?>
            <div class="telemetry_pipelines">
              <?php foreach ($industry_adoption['industry_adoption'] as $value) : ?>
                <div class="telemetry_item">
                  <?php if ($value['title']) : ?>
                    <h3><?php echo $value['title'] ?></h3>
                  <?php endif ?>
                  <?php if ($value['description']) : ?>
                    <p><?php echo $value['description'] ?></p>
                  <?php endif ?>
                </div>
              <?php endforeach ?>
            </div>
          <?php endif ?>

          <?php if ($industry_adoption['image']) : ?>
            <div class="pipelines_image-wrapper">
              <img class="cover-img" src="<?php echo $industry_adoption['image']['sizes']['1536x1536'] ?>" alt="<?php echo $industry_adoption['image']['alt'] ?>">
            </div>
          <?php endif ?>

          <?php if ($industry_adoption['bullets_adoption']) : ?>
            <div class="home_bullets">
              <?php foreach ($industry_adoption['bullets_adoption'] as $value) : ?>
                <div class="home_bullet">
                  <?php if ($value['logo']) : ?>
                    <div class="">
                      <img src="<?php echo $value['logo']['url'] ?>" alt="<?php echo $value['logo']['alt'] ?>">
                    </div>
                  <?php endif ?>
                  <?php if ($value['description']) : ?>
                    <p><?php echo $value['description'] ?></p>
                  <?php endif ?>
                </div>
              <?php endforeach ?>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<!-- Globe Section -->
<div class="section_home_globe">
  <div class="padding-global">
    <div class="container-large no-padding">
      <div class="globe_image-wrapper">
        <div class="globe_text">
          <div class="padding-section-small">
            <div class="max-width-large align-center text-align-center">
              <h2 class="heading-style-h3">Working with Companies Around the World</h2>
            </div>
          </div>
        </div>
        <div id="edge-delta-globe"></div>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1228 820" fill="none" class="globe_bg">
          <g filter="url(#filter0_f_14897_82399)">
            <ellipse cx="614.062" cy="485.852" rx="355.012" ry="226.938" fill="#21835E" fill-opacity="0.3"></ellipse>
          </g>
          <defs>
            <filter id="filter0_f_14897_82399" x="0.391296" y="0.255157" width="1227.34" height="971.193" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
              <feGaussianBlur stdDeviation="129.329" result="effect1_foregroundBlur_14897_82399"></feGaussianBlur>
            </filter>
          </defs>
        </svg>
      </div>
    </div>
  </div>
</div>

<!-- Bottom CTA Section -->
<?php if (get_field('cta_bottom') == false) : ?>
  <?php get_template_part('templates/cta/cta') ?>
<?php else : ?>
  <?php get_template_part('templates/solutions-product/cta') ?>
<?php endif ?>

<script>

document.addEventListener('DOMContentLoaded', function () {
  const root = document.querySelector('.rotator');
  if (!root) return;

  // Get words and handle HTML entities
  let wordsAttr = (root.getAttribute('data-words') || '[]').replace(/&apos;/g, "'");
  let words;
  try { words = JSON.parse(wordsAttr); } catch { words = ["your experts deserve","are multi-model","are managed by you"]; }

  const typed = document.getElementById('typed');
  if (!typed) return;

  const typeSpeed   = parseInt(root.getAttribute('data-type-speed')  || '55', 10);
  const deleteSpeed = parseInt(root.getAttribute('data-delete-speed')|| '30', 10);
  const hold        = parseInt(root.getAttribute('data-hold')        || '1500',10);

  // Typing animation
  const Typing = {
    i: 0, j: 0, deleting: false, timer: null,
    start() {
      this.step();
    },
    step() {
      const w = words[this.i] || '';
      typed.textContent = this.deleting ? w.slice(0, this.j--) : w.slice(0, this.j++);
      if (!this.deleting && this.j === w.length + 1) {
        setTimeout(() => { this.deleting = true; this.step(); }, hold);
      } else if (this.deleting && this.j === 0) {
        this.deleting = false; this.i = (this.i + 1) % words.length;
        this.timer = setTimeout(() => this.step(), typeSpeed);
      } else {
        this.timer = setTimeout(() => this.step(), this.deleting ? deleteSpeed : typeSpeed);
      }
    },
    stop() { clearTimeout(this.timer); }
  };

  // Start typing animation immediately
  Typing.start();
});

// Hero Image Parallax and Animation Effects
document.addEventListener('DOMContentLoaded', function() {
  const heroImage = document.querySelector('.img_hero');
  if (!heroImage) return;

  // Add parallax class
  heroImage.classList.add('parallax-active');

  // Parallax on scroll
  let ticking = false;
  function updateParallax() {
    const scrolled = window.pageYOffset;
    const maxScroll = 500; // Limit effect to first 500px of scroll
    const effectiveScroll = Math.min(scrolled, maxScroll);
    
    const rate = effectiveScroll * -0.15; // Reduced speed and limited range
    const scale = 1 + (effectiveScroll * 0.00005); // Much subtler scale
    
    heroImage.style.setProperty('--parallax-y', `${rate}px`);
    heroImage.style.setProperty('--parallax-scale', Math.min(scale, 1.025)); // Max scale of 1.025 instead of 1.1
    ticking = false;
  }

  function requestTick() {
    if (!ticking) {
      window.requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }

  window.addEventListener('scroll', requestTick);

  // Mouse movement effect (3D tilt)
  heroImage.addEventListener('mousemove', (e) => {
    const rect = heroImage.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    
    const percentX = (x - centerX) / centerX;
    const percentY = (y - centerY) / centerY;
    
    const rotateX = percentY * 5; // Max 5 degree rotation
    const rotateY = percentX * 5;
    
    heroImage.style.transform = `
      translateY(var(--parallax-y, 0px)) 
      scale(var(--parallax-scale, 1))
      rotateX(${-rotateX}deg) 
      rotateY(${rotateY}deg)
      translateZ(20px)
    `;
  });

  // Reset on mouse leave
  heroImage.addEventListener('mouseleave', () => {
    heroImage.style.transform = `
      translateY(var(--parallax-y, 0px)) 
      scale(var(--parallax-scale, 1))
      rotateX(0deg) 
      rotateY(0deg)
      translateZ(0)
    `;
  });

  // Initial parallax state
  updateParallax();
});

// Load Globe JS if on homepage
document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('edge-delta-globe')) {
    var script = document.createElement('script');
    script.src = '<?php echo get_template_directory_uri() ?>/assets/js/edge-delta-globe.js';
    document.body.appendChild(script);
  }
});


// Starter Templates Filtering
document.addEventListener('DOMContentLoaded', function() {
  const tabs = document.querySelectorAll('.starter_tab');
  const cards = document.querySelectorAll('.template_card');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const category = this.dataset.category;
      
      // Remove active class from all tabs
      tabs.forEach(t => t.classList.remove('active'));
      
      // Add active class to clicked tab
      this.classList.add('active');
      
      // Filter cards
      cards.forEach(card => {
        const cardCategories = card.dataset.category;
        
        if (category === 'all' || (cardCategories && cardCategories.includes(category))) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });
});
</script>

<style>
/* Starter Templates Section */
.section_starter_templates {
  background: var(--background-color--background-secondary);
  border-top: 1px solid var(--border-color--border-primary);
  display: none;
}

.starter_templates_header {
  text-align: center;
  margin-bottom: 3rem;
}

.heading-style-h2-v2 {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 600;
  margin-bottom: 1rem;
  color: #ffffff;
  font-family: "Sora", sans-serif;
  letter-spacing: -0.025em;
  line-height: 1.2;
}

.starter_templates_description {
  font-size: 1.125rem;
  color: #94a3b8;
  margin: 0 auto;
  font-family: "Overused Grotesk", sans-serif;
  font-weight: 400;
  line-height: 1.6;
}

/* Category Filter Buttons */
.starter_templates_tabs {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-bottom: 3rem;
}

.starter_tab {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: rgba(45, 62, 58, 0.41);
  border: 1px solid #3A3D4A;
  color: #d1d5db;
  padding: 0.25rem 0.875rem;
  border-radius: 9999px;
  font-size: 0.875rem;
  font-weight: 400;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: "Overused Grotesk", sans-serif;
  height: 2rem;
  white-space: nowrap;
  letter-spacing: -0.01em;
}

.starter_tab.active {
  background: #62d27c;
  border-color: #62d27c;
  color: #ffffff;
}

.starter_tab:hover {
  background: #373A4A;
  color: #ffffff;
}

/* Template Grid */
.starter_templates_grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.25rem;
  max-width: 1200px;
  margin: 0 auto;
}

.template_card {
  background: rgba(45, 62, 58, 0.41);
  border: 1px solid #2D303E;
  border-radius: 0.5rem;
  transition: all 0.2s ease;
  cursor: pointer;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  padding: 1.5rem;
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
}

.template_card:hover {
  border-color: rgba(98, 210, 124, 0.5);
}

.template_card.hidden {
  display: none;
}

.template_icon {
  padding: 0.375rem;
  background: rgba(71, 85, 105, 0.3);
  border-radius: 0.375rem;
  transition: all 0.2s ease;
  flex-shrink: 0;
  color: #94a3b8;
}

.template_card:hover .template_icon {
  background: rgba(98, 210, 124, 0.2);
}

.template_content {
  flex: 1;
}

.template_title {
  font-size: 1rem;
  font-weight: 600;
  color: #f8fafc;
  margin: 0 0 0.375rem 0;
  font-family: "Sora", sans-serif;
  letter-spacing: -0.02em;
  line-height: 1.3;
}

.template_description {
  font-size: 0.875rem;
  color: #94a3b8;
  margin: 0;
  line-height: 1.5;
  font-family: "Overused Grotesk", sans-serif;
  font-weight: 400;
}

/* Trusted By Engineers Section - Cursor Style */
.section_trusted_engineers {
  background: var(--background-color--background-primary);
  padding: 80px 0;
  border-top: 1px solid var(--border-color--border-primary);
}

.trusted_engineers_wrapper {
  max-width: 1200px;
  margin: 0 auto;
}

.trusted_engineers_header {
  text-align: center;
  margin-bottom: 50px;
}

.trusted_engineers_header h3 {
  font-size: 0.875rem;
  font-weight: 500;
  color: #6b7280;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  font-family: "Overused Grotesk", -apple-system, BlinkMacSystemFont, sans-serif;
  margin: 0;
}

.trusted_engineers_logos {
  display: flex;
  flex-direction: column;
  gap: 2.5rem;
}

.logo_row {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 4rem;
  flex-wrap: wrap;
}

.engineer_logo {
  flex: 0 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.engineer_logo img {
  height: 35px;
  width: auto;
  max-width: 150px;
  filter: brightness(0) invert(0.5);
  opacity: 0.7;
  transition: all 0.3s ease;
  object-fit: contain;
}

.engineer_logo:hover img {
  filter: brightness(0) invert(0.8);
  opacity: 1;
  transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .section_trusted_engineers {
    padding: 60px 0;
  }
  
  .trusted_engineers_header {
    margin-bottom: 40px;
  }
  
  .logo_row {
    gap: 3rem;
  }
  
  .engineer_logo img {
    height: 30px;
  }
}

@media (max-width: 768px) {
  .section_trusted_engineers {
    padding: 50px 0;
  }
  
  .trusted_engineers_header h3 {
    font-size: 0.75rem;
  }
  
  .trusted_engineers_logos {
    gap: 2rem;
  }
  
  .logo_row {
    gap: 2rem;
  }
  
  .engineer_logo img {
    height: 25px;
    max-width: 120px;
  }
}

@media (max-width: 480px) {
  .section_trusted_engineers {
    padding: 40px 0;
  }
  
  .logo_row {
    gap: 1.5rem;
  }
  
  .engineer_logo img {
    height: 22px;
    max-width: 100px;
  }
}

/* Features Section - Cursor Tab Style */
.section_features_cursor {
  background: var(--background-color--background-primary);
  position: relative;
  overflow: hidden;
}

.section_features_cursor .padding-section-xlarge {
  padding-bottom: 0;
  padding-top: 50px; /* Reduced from default 100px to 50px (50% reduction) */
}

.cursor_feature_block {
  margin-bottom: 40px;
  position: relative;
  padding: 40px 0 80px 0;
  width: 100%;
  max-width: 1280px;
  margin-left: auto;
  margin-right: auto;
}

.cursor_feature_header {
  text-align: center;
  margin-bottom: 60px;
}

.cursor_feature_description {
  text-align: center;
  margin-top: 40px;
  padding: 0 20px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.cursor_feature_title {
  font-size: 3rem;
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 20px 0;
  font-family: "Sora", -apple-system, BlinkMacSystemFont, sans-serif;
  letter-spacing: -0.03em;
  line-height: 1.1;
}

.cursor_feature_subtitle {
  font-size: 1.25rem;
  color: #94a3b8;
  margin: 0 auto;
  max-width: 600px;
  font-family: "Overused Grotesk", sans-serif;
  line-height: 1.6;
}

.cursor_feature_description .cursor_feature_subtitle {
  font-size: 1.4rem;
  max-width: 100%;
  line-height: 1.7;
}

/* Code Editor Styles - Cursor.com structure */
.cursor_code_editor {
  position: relative;
  width: 100% !important;
  max-width: 1200px !important;
  height: 675px !important;
  margin: 0 auto;
  overflow: hidden;
  border-radius: 20px;
  background: rgba(15, 15, 15, 0.95);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.15);
}

/* Feature 1 - EdgeDelta Brand Colors - Full coverage */
.feature_gradient_1::before {
  content: "";
  position: absolute;
  inset: -20px;
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
              linear-gradient(70deg, #00FF00 10%, #0099FF 45%, #9933FF 70%, #FF5500 100%);
  transform: rotate(45deg) scale(3);
  transform-origin: center;
  filter: blur(3px);
  z-index: 0;
}

/* Feature 2 - EdgeDelta Brand Colors, different rotation - Full coverage */
.feature_gradient_2::before {
  content: "";
  position: absolute;
  inset: -20px;
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
              linear-gradient(70deg, #0099FF 10%, #9933FF 45%, #FF5500 70%, #00FF00 100%);
  transform: rotate(135deg) scale(3);
  transform-origin: center;
  filter: blur(3px);
  z-index: 0;
}

/* Feature 3 - EdgeDelta Brand Colors, different rotation - Full coverage */
.feature_gradient_3::before {
  content: "";
  position: absolute;
  inset: -20px;
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
              linear-gradient(110deg, #FF5500 10%, #9933FF 45%, #0099FF 70%, #00FF00 100%);
  transform: rotate(225deg) scale(3);
  transform-origin: center;
  filter: blur(3px);
  z-index: 0;
}

/* Feature 4 - EdgeDelta Brand Colors, different rotation - Full coverage */
.feature_gradient_4::before {
  content: "";
  position: absolute;
  inset: -20px;
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
              linear-gradient(110deg, #00FF00 10%, #FF5500 45%, #9933FF 70%, #0099FF 100%);
  transform: rotate(315deg) scale(3);
  transform-origin: center;
  filter: blur(3px);
  z-index: 0;
}

/* Feature 5 - Additional gradient variation */
.feature_gradient_5::before {
  content: "";
  position: absolute;
  inset: -20px;
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)),
              linear-gradient(110deg, #0099FF 10%, #00FF00 45%, #FF5500 70%, #9933FF 100%);
  transform: rotate(180deg) scale(3);
  transform-origin: center;
  filter: blur(3px);
  z-index: 0;
}

/* Noise texture overlay */
.cursor_code_editor::after {
  content: "";
  position: absolute;
  inset: -8px;
  background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI1IiBoZWlnaHQ9IjEyNSIgdmlld0JveD0iMCAwIDEyNSAxMjUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wIDBoMTI1djEyNUgweiIgZmlsbD0idXJsKCNwYWludDBfcmFkaWFsXzEwMF8xMDApIi8+CjxkZWZzPgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50MF9yYWRpYWxfMTAwXzEwMCIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNTAlIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzAwMCIgc3RvcC1vcGFjaXR5PSIwLjA1Ii8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvcmFkaWFsR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+');
  background-size: 125px 125px;
  mix-blend-mode: soft-light;
  z-index: 1;
  pointer-events: none;
}

/* Direct image display in gradient container */

/* Responsive adjustments for gradient containers */
@media (max-width: 1020px) {
  .cursor_code_editor {
    max-width: 95%;
    height: auto;
    aspect-ratio: 1200 / 675;
  }
}

@media (max-width: 1024px) {
  .cursor_code_editor {
    border-radius: 16px;
    padding: 12px 16px 0;
    height: auto;
    aspect-ratio: 1200 / 675;
  }
}

@media (max-width: 768px) {
  .cursor_code_editor {
    border-radius: 12px;
    padding: 8px 12px 0;
    height: auto;
    aspect-ratio: 1200 / 675;
  }
}

/* Feature Image Display Styles - Positioned at bottom with 3-side margins */
.feature_image_display {
  position: absolute;
  bottom: 0;
  left: 50%;
  z-index: 10;
  width: 80%;
  height: 85%;
  transform: translateX(-50%);
  object-fit: cover;
  border-radius: 12px 12px 0 0;
  display: block;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-bottom: none;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6),
              0 0 30px rgba(0, 255, 0, 0.2),
              0 0 60px rgba(0, 255, 0, 0.1);
}

.feature_placeholder {
  position: absolute;
  bottom: 0;
  left: 50%;
  z-index: 10;
  width: 75%;
  height: 85%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(15, 21, 32, 0.95);
  border-radius: 8px 8px 0 0;
  color: #a7b0c0;
  font-size: 1.125rem;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom: none;
  backdrop-filter: blur(10px);
}

.feature_placeholder p {
  margin: 0;
  padding: 20px;
}

/* Responsive adjustments for images */
@media (max-width: 1024px) {
  .feature_image_display,
  .feature_placeholder {
    position: static;
    transform: none;
    width: calc(100% - 40px);
    height: 400px;
    margin: 20px auto;
  }
}

@media (max-width: 768px) {
  .feature_image_display,
  .feature_placeholder {
    width: calc(100% - 30px);
    height: 300px;
    margin: 15px auto;
  }
}

.code_editor_header {
  background: #2a2a2a;
  padding: 12px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.window_controls {
  display: flex;
  gap: 8px;
}

.control_dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  transition: opacity 0.2s;
}

.control_dot.red { background: #ff5f56; }
.control_dot.yellow { background: #ffbd2e; }
.control_dot.green { background: #27c93f; }


.editor_tabs {
  display: flex;
  gap: 20px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.editor_tab {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 4px 12px;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 6px;
  font-size: 0.875rem;
  color: #94a3b8;
  transition: all 0.2s;
}

.editor_tab.active {
  background: rgba(74, 222, 128, 0.15);
  color: #4ade80;
}

.tab_icon {
  font-size: 1rem;
}

.code_editor_content {
  display: flex;
  padding: 20px 0;
  font-family: "Monaco", "Menlo", "Ubuntu Mono", monospace;
  font-size: 14px;
  line-height: 1.6;
  min-height: 400px;
}

.line_numbers {
  display: flex;
  flex-direction: column;
  padding: 0 20px;
  color: #4a5568;
  user-select: none;
}

.code_content {
  flex: 1;
  padding-right: 20px;
  overflow-x: auto;
}

.code_content pre {
  margin: 0;
}

.code_content code {
  display: block;
  color: #e2e8f0;
}

/* Syntax Highlighting */
.keyword { color: #c678dd; }
.type { color: #61afef; }
.function { color: #61afef; }
.property { color: #d19a66; }
.param { color: #e06c75; }
.string { color: #98c379; }
.number { color: #d19a66; }
.attribute { color: #d19a66; }
.text { color: #abb2bf; }
.ai-suggestion { 
  color: #4ade80; 
  font-style: italic;
  opacity: 0.8;
  display: block;
  margin: 8px 0;
  animation: fadeIn 1s ease-in;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-5px); }
  to { opacity: 0.8; transform: translateY(0); }
}

/* Search Interface Styles */
.search_interface {
  padding: 30px;
}

.search_bar {
  display: flex;
  align-items: center;
  gap: 12px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  padding: 12px 16px;
  margin-bottom: 20px;
}

.search_icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 4px 8px;
  background: rgba(74, 222, 128, 0.2);
  color: #4ade80;
  border-radius: 4px;
  font-size: 0.875rem;
  font-weight: 600;
}

.search_input {
  flex: 1;
  background: transparent;
  border: none;
  color: #ffffff;
  font-size: 1rem;
  outline: none;
}

.search_input::placeholder {
  color: #64748b;
}

.search_results {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.result_item {
  display: flex;
  align-items: start;
  gap: 12px;
  padding: 12px;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  transition: all 0.2s;
  cursor: pointer;
}

.result_item:hover {
  background: rgba(255, 255, 255, 0.05);
  border-color: rgba(74, 222, 128, 0.3);
  transform: translateX(4px);
}

.result_icon {
  font-size: 1.25rem;
  margin-top: 2px;
}

.result_content {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.result_content strong {
  color: #ffffff;
  font-weight: 600;
}

.result_meta {
  color: #64748b;
  font-size: 0.875rem;
}

/* Natural Language Interface */
.natural_language_interface {
  padding: 30px;
}

.nl_input {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 16px;
  background: rgba(139, 92, 246, 0.1);
  border: 1px solid rgba(139, 92, 246, 0.3);
  border-radius: 8px;
  margin-bottom: 20px;
}

.nl_prompt {
  font-size: 1.5rem;
}

.nl_text {
  color: #e2e8f0;
  font-size: 1rem;
  font-style: italic;
}

.nl_arrow {
  text-align: center;
  color: #64748b;
  margin: 20px 0;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.generated_query {
  background: #0d0d0d;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  padding: 20px;
}

.generated_query pre {
  margin: 0;
}

.generated_query code {
  color: #e2e8f0;
  font-family: "Monaco", "Menlo", monospace;
  font-size: 14px;
  line-height: 1.6;
}

/* SQL Syntax Highlighting */
.field { color: #56b6c2; }
.table { color: #e5c07b; }

/* Dark Theme Variant */
.dark_theme {
  background: #0a0a0a;
}

.dark_theme .code_editor_header {
  background: #151515;
}

/* Feature Image Styles */
.feature_image_wrapper {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.3);
  border: 1px solid var(--border-color--border-primary);
}

.feature_image_cursor {
  width: 100%;
  height: auto;
  display: block;
}

/* Cursor-style Feature Image Containers */
.pipelines_image-wrapper,
.observability_image-wrapper {
  position: relative;
  overflow: hidden;
  border-radius: 16px;
  background: #1a1a1a;
  padding: 4px;
  max-width: 800px;
  margin: 0 auto;
}

/* Gradient background for feature images */
.pipelines_image-wrapper::before,
.observability_image-wrapper::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, 
    #667eea 0%, 
    #764ba2 25%, 
    #f093fb 50%, 
    #f5576c 75%, 
    #4facfe 100%);
  transform: rotate(180deg) scaleY(-1) scale(1.7);
  transform-origin: 40% 63%;
  filter: blur(2px);
  z-index: 1;
}

/* Noise texture overlay for feature images */
.pipelines_image-wrapper::after,
.observability_image-wrapper::after {
  content: "";
  position: absolute;
  inset: -8px;
  background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI1IiBoZWlnaHQ9IjEyNSIgdmlld0JveD0iMCAwIDEyNSAxMjUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wIDBoMTI1djEyNUgweiIgZmlsbD0idXJsKCNwYWludDBfcmFkaWFsXzEwMF8xMDApIi8+CjxkZWZzPgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50MF9yYWRpYWxfMTAwXzEwMCIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNTAlIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzAwMCIgc3RvcC1vcGFjaXR5PSIwLjA1Ii8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvcmFkaWFsR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+');
  background-size: 125px 125px;
  mix-blend-mode: soft-light;
  z-index: 2;
  pointer-events: none;
}

/* Image styling inside the gradient containers */
.pipelines_image-wrapper img,
.observability_image-wrapper img {
  position: relative;
  z-index: 10;
  width: 100%;
  height: auto;
  border-radius: 12px;
  display: block;
  border: 1px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
}

/* Pipeline Feature Section */
.section_pipeline_feature {
  padding-top: 40px;
  padding-bottom: 80px;
}

.section_pipeline_feature .cursor_feature_block {
  margin-bottom: 0;
}

/* Metrics Grid */
.metrics_grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  padding: 20px;
}

.metric_stat {
  text-align: center;
  padding: 15px;
  background: rgba(74, 222, 128, 0.1);
  border: 1px solid rgba(74, 222, 128, 0.3);
  border-radius: 8px;
  transition: all 0.3s ease;
}

.metric_stat:hover {
  background: rgba(74, 222, 128, 0.15);
  transform: translateY(-2px);
}

.metric_number {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  color: #4ade80;
  margin-bottom: 8px;
  font-family: "Sora", sans-serif;
}

.metric_label {
  display: block;
  font-size: 0.875rem;
  color: #94a3b8;
  font-family: "Overused Grotesk", sans-serif;
}

/* Observability Section Styling */
.section_home_observability {
  border-top: 1px solid var(--border-color--border-primary);
}

.section_home_observability h2 {
  font-size: 3.2rem;
}

/* Observability Cursor-Style Cards */
.observability_cursor_grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.observability_cursor_card {
  background: rgba(20, 20, 20, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  padding: 2.5rem 2rem;
  text-align: center;
  position: relative;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.observability_cursor_card:hover {
  transform: translateY(-4px);
  border-color: var(--color-text--primary-green);
  background: rgba(25, 25, 25, 0.9);
}

.cursor_card_icon {
  display: flex;
  justify-content: center;
  margin-bottom: 2rem;
}

.cursor_visual_element {
  width: 120px;
  height: 120px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 1000px;
}

/* Visual Elements */
.frontier_visual {
  transform-style: preserve-3d;
}

.visual_triangle {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--color-text--primary-green) 0%, #22c55e 100%);
  clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
  position: relative;
  transform-style: preserve-3d;
  animation: float 3s ease-in-out infinite;
}

.visual_triangle::before {
  content: '';
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  background: rgba(255, 255, 255, 0.2);
  clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
}

.familiar_visual .visual_cubes {
  width: 80px;
  height: 80px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.visual_cubes::before,
.visual_cubes::after {
  content: '';
  position: absolute;
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
  border-radius: 8px;
  animation: rotate 4s ease-in-out infinite;
}

.visual_cubes::before {
  transform: translateX(-15px) rotateY(30deg);
}

.visual_cubes::after {
  transform: translateX(15px) rotateY(-30deg);
  background: linear-gradient(135deg, #ec4899 0%, #be185d 100%);
  animation-delay: -2s;
}

.privacy_visual .visual_circle {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
  border-radius: 50%;
  position: relative;
  animation: pulse 2s ease-in-out infinite;
}

.visual_circle::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 50%;
}

.cursor_card_title {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--color-text--white);
  margin: 0 0 1rem 0;
  font-family: "Sora", sans-serif;
}

.cursor_card_description {
  font-size: 1rem;
  color: var(--color-text--neutral-lighter);
  line-height: 1.6;
  margin: 0 0 1.5rem 0;
  font-family: "Overused Grotesk", sans-serif;
}

.cursor_card_link_wrapper {
  margin-top: auto;
}

.cursor_card_learn_more {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--color-text--primary-green);
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 500;
  transition: all 0.2s ease;
  font-family: "Overused Grotesk", sans-serif;
}

.cursor_card_learn_more:hover {
  color: #22c55e;
  transform: translateX(4px);
}

.cursor_card_learn_more svg {
  width: 12px;
  height: 12px;
  transition: transform 0.2s ease;
}

.cursor_card_learn_more:hover svg {
  transform: translateX(2px);
}

/* Animations */
@keyframes float {
  0%, 100% {
    transform: translateY(0px) rotateY(0deg);
  }
  50% {
    transform: translateY(-10px) rotateY(180deg);
  }
}

@keyframes rotate {
  0%, 100% {
    transform: translateX(0) rotateY(0deg);
  }
  50% {
    transform: translateX(0) rotateY(180deg);
  }
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .observability_cursor_grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  
  .observability_cursor_card {
    padding: 2rem 1.5rem;
  }
  
  .cursor_visual_element {
    width: 100px;
    height: 100px;
  }
  
  .visual_triangle,
  .visual_cubes,
  .visual_circle {
    width: 60px;
    height: 60px;
  }
}

/* Responsive */
@media (max-width: 768px) {
  .section_features_cursor {
    padding: 60px 0;
  }
  
  .observability_cursor_grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  
  .observability_cursor_card {
    padding: 2rem 1.5rem;
  }
  
  .cursor_card_visual {
    width: 100px;
    height: 100px;
  }
  
  .visual_element {
    width: 60px;
    height: 60px;
  }
}
  
  .cursor_feature_block {
    margin-bottom: 80px;
  }
  
  .cursor_feature_title {
    font-size: 3rem;
  }
  
  .cursor_feature_subtitle {
    font-size: 1rem;
  }
  
  .code_editor_content {
    min-height: 300px;
    font-size: 12px;
  }
  
  .editor_tabs {
    position: static;
    transform: none;
  }
  
  .code_editor_header {
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
  }
}

/* Features Section - Devin Style */
.section_features_ai {
  background: var(--background-color--background-primary);
  position: relative;
  overflow: hidden;
  padding: 0 0 80px 0;
}


.features_container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Simple Features Design */
.simple_feature {
  text-align: center;
  margin-bottom: 5rem;
  padding-top: 2rem;
}

.simple_feature:first-child {
  padding-top: 0;
}

.simple_feature_title {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 2.5rem 0;
  font-family: "Sora", sans-serif;
  letter-spacing: -0.025em;
  line-height: 1.2;
  background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 50%, #cbd5e1 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: 0 0 40px rgba(255, 255, 255, 0.1);
}

.simple_feature_image {
  max-width: 900px;
  margin: 0 auto 2rem auto;
  background: linear-gradient(135deg, rgba(45, 62, 58, 0.4), rgba(30, 41, 38, 0.6));
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 
    0 20px 40px -12px rgba(0, 0, 0, 0.4),
    0 0 0 1px rgba(255, 255, 255, 0.05),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
}

.feature_image {
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature_image:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.simple_feature_description {
  font-size: 1.125rem;
  color: #94a3b8;
  margin: 0 auto;
  max-width: 800px;
  line-height: 1.7;
  font-family: "Overused Grotesk", sans-serif;
  font-weight: 400;
}

/* Terminal Visual */
.terminal_window {
  width: 100%;
  background: linear-gradient(145deg, #0f1419, #1a1f2e);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 
    0 20px 40px rgba(0, 0, 0, 0.4),
    0 0 0 1px rgba(74, 222, 128, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
  position: relative;
}

.terminal_window::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(74, 222, 128, 0.3), transparent);
}

.terminal_header {
  background: #1a1f2a;
  padding: 0.75rem 1rem;
  display: flex;
  gap: 0.5rem;
}

.terminal_dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.terminal_dot.red { background: #ff5f57; }
.terminal_dot.yellow { background: #ffbd2e; }
.terminal_dot.green { background: #28ca42; }

.terminal_content {
  padding: 1.5rem;
  font-family: "Monaco", "Courier New", monospace;
  font-size: 0.875rem;
}

.code_line {
  margin-bottom: 1rem;
  color: #8b92a0;
  opacity: 0;
  position: relative;
  padding-left: 1rem;
  animation: typeInLoop 8s infinite;
}

.code_line::before {
  content: '▸';
  position: absolute;
  left: 0;
  color: #4ade80;
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { opacity: 0.4; }
  50% { opacity: 1; }
}

.code_line:nth-child(1) { animation-delay: 0s; }
.code_line:nth-child(2) { animation-delay: 0.5s; }
.code_line:nth-child(3) { animation-delay: 1s; }
.code_line:nth-child(4) { animation-delay: 1.5s; }
.code_line:nth-child(5) { animation-delay: 2s; }

/* Integration terminal styling */
.integration_line .code_prompt {
  color: #22c55e;
}

.integration_line {
  animation-delay: 0.3s;
}

.integration_line:nth-child(2) { animation-delay: 0.6s; }
.integration_line:nth-child(3) { animation-delay: 0.9s; }
.integration_line:nth-child(4) { animation-delay: 1.2s; }
.integration_line:nth-child(5) { animation-delay: 1.5s; }

/* Metrics terminal styling */
.metrics_line .code_prompt {
  color: #3b82f6;
}

.metrics_line {
  animation-delay: 0.4s;
}

.metrics_line:nth-child(2) { animation-delay: 0.7s; }
.metrics_line:nth-child(3) { animation-delay: 1.0s; }
.metrics_line:nth-child(4) { animation-delay: 1.3s; }
.metrics_line:nth-child(5) { animation-delay: 1.6s; }

/* Pipeline terminal styling */
.pipeline_line .code_prompt {
  color: #f59e0b;
}

.pipeline_line {
  animation-delay: 0.2s;
}

.pipeline_line:nth-child(2) { animation-delay: 0.5s; }
.pipeline_line:nth-child(3) { animation-delay: 0.8s; }
.pipeline_line:nth-child(4) { animation-delay: 1.1s; }
.pipeline_line:nth-child(5) { animation-delay: 1.4s; }

@keyframes typeInLoop {
  0%, 100% { 
    opacity: 0;
    transform: translateX(-10px);
  }
  10%, 90% { 
    opacity: 1;
    transform: translateX(0);
  }
}

/* Typing cursor animation for terminal */
.terminal_content::after {
  content: '█';
  color: #4ade80;
  animation: terminalBlink 1s infinite;
  font-size: 0.875rem;
  margin-left: 2px;
}

@keyframes terminalBlink {
  0%, 49% { opacity: 1; }
  50%, 100% { opacity: 0; }
}

.code_prompt {
  color: #4ade80;
  font-weight: 600;
}

/* Integration Diagram */
.integration_diagram {
  position: relative;
  width: 300px;
  height: 300px;
  margin: 0 auto;
}

.integration_center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #4ade80, #22c55e);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  font-weight: 600;
  z-index: 2;
  box-shadow: 0 0 30px rgba(74, 222, 128, 0.5);
  animation: centralPulse 2s ease-in-out infinite;
}

@keyframes centralPulse {
  0%, 100% { 
    transform: translate(-50%, -50%) scale(1);
    box-shadow: 0 0 30px rgba(74, 222, 128, 0.5);
  }
  50% { 
    transform: translate(-50%, -50%) scale(1.05);
    box-shadow: 0 0 40px rgba(74, 222, 128, 0.7);
  }
}

.integration_node {
  position: absolute;
  width: 60px;
  height: 60px;
  background: rgba(45, 62, 58, 0.8);
  border: 2px solid rgba(74, 222, 128, 0.3);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #94a3b8;
  font-size: 0.75rem;
  font-weight: 500;
}

.integration_node.top { 
  top: 0; 
  left: 50%; 
  transform: translateX(-50%);
  animation: nodeFloat 3s ease-in-out infinite;
}

.integration_node.right { 
  right: 0; 
  top: 50%; 
  transform: translateY(-50%);
  animation: nodeFloat 3s ease-in-out 0.75s infinite;
}

.integration_node.bottom { 
  bottom: 0; 
  left: 50%; 
  transform: translateX(-50%);
  animation: nodeFloat 3s ease-in-out 1.5s infinite;
}

.integration_node.left { 
  left: 0; 
  top: 50%; 
  transform: translateY(-50%);
  animation: nodeFloat 3s ease-in-out 2.25s infinite;
}

@keyframes nodeFloat {
  0%, 100% { 
    opacity: 0.7;
    transform: translateX(-50%) translateY(0);
  }
  50% { 
    opacity: 1;
    transform: translateX(-50%) translateY(-5px);
  }
}

.integration_node.right,
.integration_node.left {
  animation-name: nodeFloatHorizontal;
}

@keyframes nodeFloatHorizontal {
  0%, 100% { 
    opacity: 0.7;
    transform: translateY(-50%) translateX(0);
  }
  50% { 
    opacity: 1;
    transform: translateY(-50%) translateX(-5px);
  }
}

/* Connection lines animation */
.integration_diagram::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 220px;
  height: 220px;
  transform: translate(-50%, -50%);
  border: 1px dashed rgba(74, 222, 128, 0.2);
  border-radius: 50%;
  animation: rotate 20s linear infinite;
}

@keyframes rotate {
  from { transform: translate(-50%, -50%) rotate(0deg); }
  to { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Metrics Display */
.metrics_display {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
  width: 100%;
}

.metric_card {
  text-align: center;
  padding: 2rem 1.5rem;
  background: linear-gradient(135deg, rgba(74, 222, 128, 0.15), rgba(34, 197, 94, 0.08));
  border-radius: 16px;
  border: 1px solid rgba(74, 222, 128, 0.3);
  backdrop-filter: blur(10px);
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  animation: fadeInUp 0.6s ease forwards;
}

.metric_card:nth-child(1) { animation-delay: 0.2s; }
.metric_card:nth-child(2) { animation-delay: 0.4s; }
.metric_card:nth-child(3) { animation-delay: 0.6s; }

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.metric_card::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #4ade80, transparent);
  animation: shimmer 4s ease-in-out infinite;
}

.metric_card::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 16px;
  background: radial-gradient(circle at center, rgba(74, 222, 128, 0.03), transparent);
  animation: breathe 3s ease-in-out infinite;
}

@keyframes shimmer {
  0% { left: -100%; }
  100% { left: 100%; }
}

@keyframes breathe {
  0%, 100% { 
    opacity: 0.5;
    transform: scale(1);
  }
  50% { 
    opacity: 1;
    transform: scale(1.02);
  }
}

.metric_card:hover {
  transform: translateY(-4px);
  box-shadow: 0 20px 40px rgba(74, 222, 128, 0.2);
  border-color: rgba(74, 222, 128, 0.5);
}

.metric_value {
  font-size: 3rem;
  font-weight: 700;
  background: linear-gradient(135deg, #4ade80, #22c55e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 0.5rem;
  font-family: "Sora", sans-serif;
  text-shadow: 0 0 20px rgba(74, 222, 128, 0.3);
}

.metric_label {
  font-size: 0.875rem;
  color: #94a3b8;
  font-family: "Overused Grotesk", sans-serif;
}

/* Responsive Sliding Tabs */
@media (max-width: 991px) {
  .sliding_tabs_wrapper {
    flex-direction: column;
    height: auto;
    min-height: 600px;
  }
  
  .sliding_tab:not(.active) {
    flex: 0 0 80px;
  }
  
  .sliding_tab.active {
    flex: 1;
  }
  
  .sliding_tab:not(.active) .tab_title {
    writing-mode: horizontal-tb;
    text-orientation: initial;
    transform: none;
    margin-top: 0;
    font-size: 1rem;
  }
  
  .sliding_tab:not(.active) .tab_preview p {
    writing-mode: horizontal-tb;
    text-orientation: initial;
    transform: none;
    font-size: 0.875rem;
    margin-top: 0.5rem;
  }
  
  .content_inner {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .tab_header {
    padding: 1.5rem;
    min-height: 80px;
  }
  
  .tab_content {
    padding: 0 1.5rem 1.5rem;
  }
}

@media (max-width: 768px) {
  .sliding_tabs_wrapper {
    border-radius: 12px;
    min-height: 500px;
  }
  
  .tab_header {
    padding: 1rem;
    min-height: 60px;
  }
  
  .tab_content {
    padding: 0 1rem 1rem;
  }
  
  .content_title {
    font-size: 1.5rem;
  }
  
  .content_description {
    font-size: 0.9rem;
  }
  
  .content_benefits li {
    font-size: 0.85rem;
  }
  
  .metrics_display {
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  
  .metric_card {
    padding: 1rem;
  }
  
  .metric_value {
    font-size: 2rem;
  }
}

/* Responsive */
@media (max-width: 768px) {
  .starter_templates_grid {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
  }
  
  .template_card {
    padding: 1.5rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper !== 'undefined') {
    const testimonialSwiper = new Swiper('.swiper.is-slider-main', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
      speed: 800,
    });
  }
});
</script>

<?php get_footer(); ?>