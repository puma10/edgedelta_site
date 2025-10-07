<?php
/**
 * Template Name: Front Page V2
 */

get_header();
?>

<!-- Hero Section - Chat Interface Design -->
<div class="section_home_hero_v2">
  <div class="padding-global">
    <div class="container-large is-lines lines-vertical">
      <div class="padding-section-hero">
        <div class="max-width-custom1 align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <h1 class="heading-style-h1-home"><span>Intelligent</span><br> Telemetry Pipelines</h1>
          </div>
        </div>

        <div class="max-width-52rem align-center text-align-center">
          <div class="padding-bottom padding-large">
            <div class="text-size-xlarge">
              <p class="text-size-xlarge-new">Edge Delta provides the fastest way to get your data connected with your AI tools</p>
            </div>
          </div>
        </div>

        <!-- Chat Interface -->
        <section class="chat-interface-v2">
          <div class="tracer-container">
            <div class="tracer-content">
              <form>
                <div class="input-container">
                  <input class="chat-input-v2" placeholder="Ask OnCallAI to create pipeline..." value="">
                  <div class="input-actions">
                    <button class="action-btn" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                      </svg>
                    </button>
                    <button class="action-btn" type="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                      </svg>
                    </button>
                    <button class="submit-btn" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m5 12 7-7 7 7"></path>
                        <path d="M12 19V5"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
              
              <div class="dropdown-controls">
                <button type="button" class="dropdown-btn">
                  <span>New Pipeline</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>
                <button type="button" class="dropdown-btn">
                  <span>v0-1.5-md</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>
              </div>
              
              <div class="component-buttons">
                <button class="component-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M8 12h8"></path>
                    <path d="M12 8v8"></path>
                  </svg>
                  <span>Add AWS S3 Source</span>
                </button>
                <button class="component-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="8" x="2" y="2" rx="2" ry="2"></rect>
                    <rect width="20" height="8" x="2" y="14" rx="2" ry="2"></rect>
                    <line x1="6" x2="6.01" y1="6" y2="6"></line>
                    <line x1="6" x2="6.01" y1="18" y2="18"></line>
                  </svg>
                  <span>Kubernetes</span>
                </button>
                <button class="component-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 7h-9"></path>
                    <path d="M14 17H5"></path>
                    <circle cx="17" cy="17" r="3"></circle>
                    <circle cx="7" cy="7" r="3"></circle>
                  </svg>
                  <span>Setup Lambda Extension</span>
                </button>
                <button class="component-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="3" height="8" x="13" y="2" rx="1.5"></rect>
                    <path d="M19 8.5V10h1.5A1.5 1.5 0 1 0 19 8.5"></path>
                    <rect width="3" height="8" x="8" y="14" rx="1.5"></rect>
                    <path d="M5 15.5V14H3.5A1.5 1.5 0 1 0 5 15.5"></path>
                    <rect width="8" height="3" x="14" y="13" rx="1.5"></rect>
                    <path d="M15.5 19H14v1.5a1.5 1.5 0 1 0 1.5-1.5"></path>
                    <rect width="8" height="3" x="2" y="8" rx="1.5"></rect>
                    <path d="M8.5 5H10V3.5A1.5 1.5 0 1 0 8.5 5"></path>
                  </svg>
                  <span>Add Slack MCP</span>
                </button>
                <button class="component-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                  </svg>
                  <span>ServiceNow MCP</span>
                </button>
              </div>
            </div>
          </div>
        </section>

        <?php $img_hero = get_field('img_hero'); ?>
        <?php if ($img_hero) : ?>
          <div class="img_hero text-align-center" style="--bg-url: url('<?php echo esc_url($img_hero['sizes']['2048x2048']); ?>');"></div>
        <?php endif ?>

      </div>

      <div fade-down-children="" class="section_hero-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
      </div>
    </div>
  </div>
</div>

<!-- Starter Templates Section - New Design -->
<div class="section_starter_templates">
  <div class="padding-global">
    <div class="container-large is-lines lines-vertical">
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

<!-- Original Sections Below -->

<!-- Logo Carousel -->
<div class="section_logo_carousel_v2">
  <div class="padding-global">
    <div class="container-large">
      <?php get_template_part('templates/slider/logo') ?>
    </div>
  </div>
</div>

<!-- Lottie Animation Section -->
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

<!-- Email Popup Modal -->
<div id="email-popup-overlay" class="popup-overlay" style="display: none;">
  <div class="popup-backdrop"></div>
  <div class="popup-dialog" role="dialog" aria-labelledby="popup-title" aria-describedby="popup-description">
    <div class="popup-header">
      <h2 id="popup-title" class="popup-title">Enter Your Work Email</h2>
      <p id="popup-description" class="popup-description">To proceed with creating a pipeline, please provide your work email address.</p>
    </div>
    <div class="popup-content">
      <input 
        class="popup-input" 
        id="work-email" 
        placeholder="name@company.com" 
        type="email" 
        value=""
      >
    </div>
    <div class="popup-actions">
      <button class="popup-btn popup-btn-cancel" id="popup-cancel">Cancel</button>
      <button class="popup-btn popup-btn-submit" id="popup-submit">Submit</button>
    </div>
    <button type="button" class="popup-close" id="popup-close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 6 6 18"></path>
        <path d="m6 6 12 12"></path>
      </svg>
      <span class="sr-only">Close</span>
    </button>
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

<!-- Observability Section -->
<?php if (get_field('title_observability')) : ?>
  <div class="section_home_observability is-relative">
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
                  <?php endwhile; ?>
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
<?php if (have_rows('awards')) : ?>
  <div class="section_home_awards is-relative">
    <div class="padding-global">
      <div class="container-large is-dashes is-top-0">
        <div>
          <div fade-up-children="" class="home_awards_component z-index-2">
            <?php $j = 0 ?>
            <?php while (have_rows('awards')) : the_row(); ?>
              <?php $j++ ?>
              <div class="awards_item">
                <?php $image_awards = get_sub_field('img') ?>
                <?php if ($image_awards) : ?>
                  <div class="awards_image-wrapper">
                    <img src="<?php echo $image_awards['sizes']['medium'] ?>" alt="<?php the_sub_field('title') ?>" class="awards_image">
                  </div>
                <?php endif ?>
                <div>
                  <div class="padding-bottom padding-xxsmall">
                    <div class="text-size-large text-color-alternate text-weight-medium"><?php the_sub_field('title') ?></div>
                  </div>
                  <div class="text-weight-medium"><?php the_sub_field('description') ?></div>
                </div>
              </div>
              <?php if ($j == 1 || $j == 2) : ?>
                <div class="awards_divider"></div>
              <?php endif ?>
            <?php endwhile; ?>
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
<?php endif ?>

<!-- Industry Adoption Section -->
<?php $industry_adoption = get_field('industry_adoption_group') ?>
<?php if ($industry_adoption) : ?>
  <div class="section_telemetry_pipelines">
    <div class="padding-global">
      <div class="container-large is-lines lines-vertical no-padding">
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
    <div class="container-large is-lines lines-vertical no-padding">
      <div class="globe_image-wrapper">
        <div class="globe_text">
          <div class="padding-section-medium">
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

<!-- V2 Styles -->
<style>
/* Hero Section V2 Styles */
.section_home_hero_v2 {
  background: linear-gradient(135deg, #0a1a0f 0%, #051008 100%);
  position: relative;
  overflow: hidden;
  min-height: 100vh;
}

.hero_v2_content {
  padding: 60px 0 60px;
  text-align: center;
  width: 100%;
}

/* Hero Section Typography & Spacing */
.section_home_hero_v2 .heading-style-h1-home {
  margin-bottom: 1rem;
}

.section_home_hero_v2 .heading-style-h1-home span {
  background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), linear-gradient(70deg, #00FF00 10%, #0099FF 45%, #9933FF 70%, #FF5500 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.section_home_hero_v2 .max-width-custom1 {
  margin-bottom: 0.75rem;
}

.section_home_hero_v2 .max-width-52rem {
  margin-bottom: 2rem;
}

/* Reduce padding classes by half in hero section */
.section_home_hero_v2 .padding-medium {
  padding-bottom: 1rem !important;
}

.section_home_hero_v2 .padding-large {
  padding-bottom: 1.5rem !important;
}

/* New subtitle styling */
.text-size-xlarge-new {
  font-family: "Overused Grotesk", sans-serif;
  color: #e5e7eb;
  font-size: 1.35rem;
  line-height: 1.4;
  margin-left: auto;
  margin-right: auto;
}

/* Chat Interface V2 Styles */
.chat-interface-v2 {
  margin-bottom: 3rem;
  max-width: 48rem;
  margin-left: auto;
  margin-right: auto;
  padding: 0 1rem;
}

.tracer-container {
  padding: 1.5px;
  border-radius: 0.75rem;
  background: linear-gradient(to bottom right, #4CAF50, rgb(50 213 123 / 70%), rgb(28 162 69 / 70%));
}

.tracer-content {
  background: rgba(45, 48, 62, 0.8);
  border-radius: 10px;
  padding: 1.25rem;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(10px);
}

.input-container {
  position: relative;
}

.chat-input-v2 {
  display: flex;
  height: 2.5rem;
  width: 100%;
  background:rgba(4, 11, 5, 0.66);
  border: 1px solid #3A3D4A;
  color: #e5e7eb;
  padding: 1rem 6rem 1rem 1rem;
  border-radius: 0.5rem;
  font-size: 1rem;
  font-family: "Overused Grotesk", sans-serif;
  outline: none;
  transition: all 0.2s ease;
}

.chat-input-v2::placeholder {
  color: #6b7280;
}

.chat-input-v2:focus {
  border-color: #21835E;
  ring: 2px;
  ring-color: #21835E;
  ring-offset: 2px;
  ring-offset-color: #232531;
}

.input-actions {
  position: absolute;
  right: 0.5rem;
  top: 50%;
  transform: translateY(-50%);
  display: flex;
  align-items: center;
  gap: 0.375rem;
}

.action-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 0.375rem;
  font-size: 0.875rem;
  font-weight: 500;
  transition: all 0.2s ease;
  border: none;
  background: transparent;
  color: #9ca3af;
  width: 1.75rem;
  height: 1.75rem;
  cursor: pointer;
}

.action-btn:hover {
  background: rgba(107, 114, 128, 0.2);
  color: #ffffff;
}

.submit-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 0.375rem;
  font-size: 0.875rem;
  font-weight: 500;
  transition: all 0.2s ease;
  background: #21835E;
  color: #ffffff;
  border: none;
  width: 1.75rem;
  height: 1.75rem;
  cursor: pointer;
}

.submit-btn:hover {
  background: #62d27c;
}

.dropdown-controls {
  margin-top: 1rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.5rem;
}

.dropdown-btn {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border: 1px solid #4A4D5A;
  padding: 0.5rem 0.75rem;
  background: rgba(4, 11, 5, 0.66);
  color: #d1d5db;
  font-size: 0.75rem;
  height: 2rem;
  border-radius: 0.375rem;
  min-width: 140px;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: "Overused Grotesk", sans-serif;
}

.dropdown-btn:hover {
  background: #4A4D5A;
}

.dropdown-btn svg {
  width: 1rem;
  height: 1rem;
  opacity: 0.5;
}

.component-buttons {
  margin-top: 0.75rem;
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.component-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  border: 1px solid #4A4D5A;
  background: rgba(4, 11, 5, 0.66);
  color: #d1d5db;
  font-size: 0.75rem;
  height: 2rem;
  padding: 0 0.75rem;
  border-radius: 0.375rem;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: "Overused Grotesk", sans-serif;
}

.component-btn:hover {
  background: #4A4D5A;
  color: #ffffff;
}

.component-btn svg {
  width: 0.875rem;
  height: 0.875rem;
}

/* Responsive Design */
@media (max-width: 991px) {
  .hero_v2_content {
    padding: 40px 0 50px;
  }
  
  .section_home_hero_v2 .max-width-52rem {
    margin-bottom: 1.5rem;
  }
  
  .chat-interface-v2 {
    margin-bottom: 2rem;
    padding: 0 1.5rem;
  }
}

@media (max-width: 767px) {
  .hero_v2_content {
    padding: 30px 0 40px;
  }
  
  .section_home_hero_v2 .heading-style-h1-home {
    margin-bottom: 0.75rem;
  }
  
  .section_home_hero_v2 .max-width-custom1 {
    margin-bottom: 0.5rem;
  }
  
  .section_home_hero_v2 .max-width-52rem {
    margin-bottom: 1.25rem;
  }
  
  .text-size-xlarge-new {
    font-size: 1.2rem;
  }
  
  .chat-interface-v2 {
    margin-bottom: 1.5rem;
    padding: 0 1rem;
  }
  
  .tracer-content {
    padding: 1rem;
  }
  
  .dropdown-controls {
    gap: 0.75rem;
  }
  
  .dropdown-btn {
    min-width: auto;
    width: auto;
  }
}

@media (max-width: 479px) {
  .hero_v2_content {
    padding: 20px 0 30px;
  }
  
  .section_home_hero_v2 .max-width-52rem {
    margin-bottom: 1rem;
  }
  
  .text-size-xlarge-new {
    font-size: 1.1rem;
  }
  
  .chat-interface-v2 {
    margin-bottom: 1rem;
    padding: 0 0.75rem;
  }
}

/* Starter Templates Section */
.section_starter_templates {
  background: var(--background-color--background-secondary);
  border-top: 1px solid var(--border-color--border-primary);
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

/* Logo Carousel V2 */
.section_logo_carousel_v2 {
  background: var(--background-color--background-primary);
  padding: 40px 0;
  border-top: 1px solid var(--border-color--border-primary);
}

/* Responsive */
@media (max-width: 768px) {
  .hero_v2_content {
    padding: 80px 20px 60px;
  }
  
  .starter_templates_grid {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
  }
  
  .template_card {
    padding: 1.5rem;
  }
}

/* Email Popup Modal Styles */
.popup-overlay {
  position: fixed;
  inset: 0;
  z-index: 50;
  display: flex;
  align-items: center;
  justify-content: center;
  pointer-events: auto;
}

.popup-backdrop {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.8);
  opacity: 1;
  transition: opacity 0.2s ease;
}

.popup-dialog {
  position: relative;
  z-index: 51;
  width: 100%;
  max-width: 425px;
  margin: 1rem;
  background: #232531;
  border: 1px solid #3A3D4A;
  border-radius: 0.5rem;
  padding: 1.5rem;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  color: white;
  transform: scale(0.95);
  opacity: 0;
  transition: all 0.2s ease;
}

.popup-overlay[data-state="open"] .popup-dialog {
  transform: scale(1);
  opacity: 1;
}

.popup-header {
  margin-bottom: 1rem;
  text-align: center;
}

.popup-title {
  font-size: 1.125rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #ffffff;
  font-family: "Sora", sans-serif;
}

.popup-description {
  font-size: 0.875rem;
  color: #94a3b8;
  margin: 0;
  font-family: "Overused Grotesk", sans-serif;
}

.popup-content {
  margin-bottom: 1.5rem;
}

.popup-input {
  width: 100%;
  height: 2.5rem;
  padding: 0.5rem 0.75rem;
  background: #2D303E;
  border: 1px solid #4A4D5A;
  border-radius: 0.375rem;
  color: #ffffff;
  font-size: 0.875rem;
  font-family: "Overused Grotesk", sans-serif;
  outline: none;
  transition: border-color 0.2s ease;
}

.popup-input::placeholder {
  color: #64748b;
}

.popup-input:focus {
  border-color: #21835E;
  ring: 2px;
  ring-color: #21835E;
  ring-offset: 2px;
}

.popup-actions {
  display: flex;
  flex-direction: column-reverse;
  gap: 0.5rem;
}

@media (min-width: 640px) {
  .popup-actions {
    flex-direction: row;
    justify-content: flex-end;
  }
}

.popup-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.5rem 1rem;
  border-radius: 0.375rem;
  font-size: 0.875rem;
  font-weight: 500;
  font-family: "Overused Grotesk", sans-serif;
  cursor: pointer;
  transition: all 0.2s ease;
  border: 1px solid transparent;
  outline: none;
}

.popup-btn-cancel {
  background: transparent;
  border-color: #4A4D5A;
  color: #d1d5db;
}

.popup-btn-cancel:hover {
  background: #373A4A;
  color: #ffffff;
}

.popup-btn-submit {
  background: #21835E;
  color: #ffffff;
}

.popup-btn-submit:hover {
  background: #1a6b4f;
}

.popup-close {
  position: absolute;
  top: 1rem;
  right: 1rem;
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  border: none;
  color: #94a3b8;
  cursor: pointer;
  border-radius: 0.25rem;
  transition: all 0.2s ease;
  outline: none;
}

.popup-close:hover {
  color: #ffffff;
  background: rgba(148, 163, 184, 0.1);
}

.popup-close svg {
  width: 1rem;
  height: 1rem;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
</style>

<!-- Load Globe JS if on homepage -->
<script>
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
        
        if (category === 'all' || cardCategories.includes(category)) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });
});

// Email Popup Functionality
document.addEventListener('DOMContentLoaded', function() {
  const popup = document.getElementById('email-popup-overlay');
  const popupClose = document.getElementById('popup-close');
  const popupCancel = document.getElementById('popup-cancel');
  const popupSubmit = document.getElementById('popup-submit');
  const emailInput = document.getElementById('work-email');
  const chatSubmit = document.querySelector('.submit-btn');
  const componentButtons = document.querySelectorAll('.component-btn');
  
  // Function to show popup
  function showPopup() {
    popup.style.display = 'flex';
    popup.setAttribute('data-state', 'open');
    document.body.style.overflow = 'hidden';
    emailInput.focus();
  }
  
  // Function to hide popup
  function hidePopup() {
    popup.setAttribute('data-state', 'closed');
    setTimeout(() => {
      popup.style.display = 'none';
      document.body.style.overflow = 'auto';
    }, 200);
  }
  
  // Event listeners for showing popup
  if (chatSubmit) {
    chatSubmit.addEventListener('click', function(e) {
      e.preventDefault();
      showPopup();
    });
  }
  
  componentButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      showPopup();
    });
  });
  
  // Event listeners for hiding popup
  if (popupClose) {
    popupClose.addEventListener('click', hidePopup);
  }
  
  if (popupCancel) {
    popupCancel.addEventListener('click', hidePopup);
  }
  
  // Close popup when clicking backdrop
  popup.addEventListener('click', function(e) {
    if (e.target === popup || e.target.classList.contains('popup-backdrop')) {
      hidePopup();
    }
  });
  
  // Close popup on Escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && popup.style.display === 'flex') {
      hidePopup();
    }
  });
  
  // Handle form submission
  if (popupSubmit) {
    popupSubmit.addEventListener('click', function(e) {
      e.preventDefault();
      const email = emailInput.value.trim();
      
      if (email && isValidEmail(email)) {
        // Here you can add your form submission logic
        console.log('Email submitted:', email);
        hidePopup();
        emailInput.value = '';
        // You could redirect to a thank you page or show a success message
      } else {
        // Show error styling
        emailInput.style.borderColor = '#ef4444';
        emailInput.focus();
        setTimeout(() => {
          emailInput.style.borderColor = '#4A4D5A';
        }, 3000);
      }
    });
  }
  
  // Email validation function
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  // Handle Enter key in email input
  if (emailInput) {
    emailInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        popupSubmit.click();
      }
    });
  }
});
</script>

<?php get_footer(); ?>