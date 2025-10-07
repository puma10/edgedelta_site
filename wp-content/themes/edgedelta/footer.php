 <!-- footer -->
 <footer class="section_footer">

     <div class="trapeze-divider-wrapper is-top">
         <div class="trapeze-bg">
             <div class="trapeze-bg-inside">
                 <div class="trapeze-triangle is-bot-left"><img src="<?php echo get_template_directory_uri() ?>/assets/images/dd_Frame.svg" alt=""></div>
                 <div class="trapeze-triangle is-bot-right"><img src="<?php echo get_template_directory_uri() ?>/assets/images/dd_Frame.svg" alt=""></div>
             </div>
         </div>
     </div>

     <div class="padding-global">
         <div class="container-large background-color-primary">
             <div class="padding-section-footer">

                 <div class="padding-bottom padding-xxlarge">
                     <div class="footer_top">

                         <div class="footer_logos">
                             <a href="<?php echo home_url(); ?>" aria-label="home" class="footer5_logo-link w-nav-brand">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/images/edge-delta-wordmark.svg" alt="Edge Delta">
                             </a>
                             <div>
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/images/edge-delta-icon-gray.svg" alt="Edge Delta">
                             </div>
                         </div>

                         <div class="w-layout-grid footer_links">

                             <div class="footer5_link-list">
                                 <div class="margin-bottom margin-xsmall">
                                     <div class="text-size-medium">Product</div>
                                 </div>
                                 <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footmenu_one',
                                        'walker' => new Footer_Menu_Walker(),
                                        'container' => false,
                                        'items_wrap' => '%3$s',
                                    ]);
                                    ?>
                             </div>

                             <div class="footer5_link-list">
                                 <div class="margin-bottom margin-xsmall">
                                     <div class="text-size-medium">Solutions</div>
                                 </div>
                                 <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footmenu_two',
                                        'walker' => new Footer_Menu_Walker(),
                                        'container' => false,
                                        'items_wrap' => '%3$s',
                                    ]);
                                    ?>
                             </div>

                             <div class="footer5_link-list">
                                 <div class="margin-bottom margin-xsmall">
                                     <div class="text-size-medium">Company</div>
                                 </div>
                                 <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footmenu_three',
                                        'walker' => new Footer_Menu_Walker(),
                                        'container' => false,
                                        'items_wrap' => '%3$s',
                                    ]);
                                    ?>
                             </div>

                             <div class="footer5_link-list">
                                 <div class="margin-bottom margin-xsmall">
                                     <div class="text-size-medium">Legal</div>
                                 </div>
                                 <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footmenu_four',
                                        'walker' => new Footer_Menu_Walker(),
                                        'container' => false,
                                        'items_wrap' => '%3$s',
                                    ]);
                                    ?>
                             </div>

                         </div>
                     </div>
                 </div>

                 <div class="footer5_bottom-wrapper">

                     <div class="w-layout-grid footer5_social-icons">
                         <a aria-label="YouTube" href="https://www.youtube.com/@EdgeDelta" class="footer_link w-inline-block">
                             <div class="icon-1x1-medium w-embed">
                                 <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5686 4.77345C21.5163 5.02692 22.2555 5.76903 22.5118 6.71673C23.1821 9.42042 23.1385 14.5321 22.5259 17.278C22.2724 18.2257 21.5303 18.965 20.5826 19.2213C17.9071 19.8831 5.92356 19.8015 3.40294 19.2213C2.45524 18.9678 1.71595 18.2257 1.45966 17.278C0.827391 14.7011 0.871044 9.25144 1.44558 6.73081C1.69905 5.78311 2.44116 5.04382 3.38886 4.78753C6.96561 4.0412 19.2956 4.282 20.5686 4.77345ZM9.86682 8.70227L15.6122 11.9974L9.86682 15.2925V8.70227Z" fill="CurrentColor"></path>
                                 </svg>
                             </div>
                         </a>
                         <a aria-label="LinkedIn" href="https://www.linkedin.com/company/edgedelta" target="_blank" class="footer_link w-inline-block">
                             <div class="icon-1x1-medium w-embed">
                                 <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 3C3.67157 3 3 3.67157 3 4.5V19.5C3 20.3284 3.67157 21 4.5 21H19.5C20.3284 21 21 20.3284 21 19.5V4.5C21 3.67157 20.3284 3 19.5 3H4.5ZM8.52076 7.00272C8.52639 7.95897 7.81061 8.54819 6.96123 8.54397C6.16107 8.53975 5.46357 7.90272 5.46779 7.00413C5.47201 6.15897 6.13998 5.47975 7.00764 5.49944C7.88795 5.51913 8.52639 6.1646 8.52076 7.00272ZM12.2797 9.76176H9.75971H9.7583V18.3216H12.4217V18.1219C12.4217 17.742 12.4214 17.362 12.4211 16.9819V16.9818V16.9816V16.9815V16.9812C12.4203 15.9674 12.4194 14.9532 12.4246 13.9397C12.426 13.6936 12.4372 13.4377 12.5005 13.2028C12.7381 12.3253 13.5271 11.7586 14.4074 11.8979C14.9727 11.9864 15.3467 12.3141 15.5042 12.8471C15.6013 13.1803 15.6449 13.5389 15.6491 13.8863C15.6605 14.9339 15.6589 15.9815 15.6573 17.0292V17.0294C15.6567 17.3992 15.6561 17.769 15.6561 18.1388V18.3202H18.328V18.1149C18.328 17.6629 18.3278 17.211 18.3275 16.7591V16.759V16.7588C18.327 15.6293 18.3264 14.5001 18.3294 13.3702C18.3308 12.8597 18.276 12.3563 18.1508 11.8627C17.9638 11.1286 17.5771 10.5211 16.9485 10.0824C16.5027 9.77019 16.0133 9.5691 15.4663 9.5466C15.404 9.54401 15.3412 9.54062 15.2781 9.53721L15.2781 9.53721L15.2781 9.53721C14.9984 9.52209 14.7141 9.50673 14.4467 9.56066C13.6817 9.71394 13.0096 10.0641 12.5019 10.6814C12.4429 10.7522 12.3852 10.8241 12.2991 10.9314L12.2991 10.9315L12.2797 10.9557V9.76176ZM5.68164 18.3244H8.33242V9.76733H5.68164V18.3244Z" fill="CurrentColor"></path>
                                 </svg>
                             </div>
                         </a>
                         <a aria-label="Our X Profile" href="https://x.com/edge_delta" class="footer_link w-inline-block">
                             <div class="icon-1x1-medium w-embed">
                                 <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M17.1761 4H19.9362L13.9061 10.7774L21 20H15.4456L11.0951 14.4066L6.11723 20H3.35544L9.80517 12.7508L3 4H8.69545L12.6279 9.11262L17.1761 4ZM16.2073 18.3754H17.7368L7.86441 5.53928H6.2232L16.2073 18.3754Z" fill="CurrentColor"></path>
                                 </svg>
                             </div>
                         </a>
                     </div>

                     <div class="w-layout-grid footer5_legal-list">
                         <div class="footer_smalltext">© <?php echo date('Y'); ?> Edge Delta</div>
                        <button onclick="openCookieSettings()" class="footer_smalltext footer_cookie-settings" style="background: none; border: none; color: inherit; text-decoration: underline; cursor: pointer; padding: 0; font-family: inherit; font-size: inherit;">Cookie Settings</button>
                     </div>

                 </div>

             </div>
         </div>
     </div>
 </footer>
 <!-- / footer -->


 </main>
 <!--/ main -->


 <?php $cat = get_the_category() ?>

 <?php if ($cat && $cat[0]->slug === 'resources') : ?>
     <?php if (!get_field('download_file_url')) : ?>
         <?php get_template_part('templates/modal/hubspot-form') ?>
     <?php endif ?>
 <?php endif ?>

 </div>
 <?php wp_footer() ?>



 <?php if (is_page_template('page-templates/front-page.php')) : ?>
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const observer = new IntersectionObserver((entries) => {
                 entries.forEach(entry => {
                     if (entry.isIntersecting) {
                         const script = document.createElement('script');
                         script.src = '<?php echo get_template_directory_uri() ?>/assets/js/edge-delta-globe.js';
                         script.onload = function() {
                             // If the globe script has an initialization function, call it here
                             if (typeof initGlobe === 'function') {
                                 initGlobe();
                             }
                         };
                         document.body.appendChild(script);
                         observer.unobserve(entry.target);
                     }
                 });
             });

             const globeContainer = document.getElementById('edge-delta-globe');
             if (globeContainer) {
                 observer.observe(globeContainer);
             }
         });
     </script>
 <?php endif ?>

 <?php if (is_page_template('page-templates/front-page.php') || is_page_template('page-templates/product.php') || is_singular('solutions')) : ?>
     <script>
         $(".slider-main_component").each(function(index) {
             let loopMode = true;
             if ($(this).attr("loop-mode") === "true") {
                 loopMode = true;
             }
             let sliderDuration = 300;
             if ($(this).attr("slider-duration") !== undefined) {
                 sliderDuration = +$(this).attr("slider-duration");
             }
             const swiper = new Swiper($(this).find(".swiper")[0], {
                 speed: sliderDuration,
                 loop: true,
                 autoHeight: false,
                 centeredSlides: loopMode,
                 followFinger: true,
                 freeMode: false,
                 slideToClickedSlide: false,
                 slidesPerView: 1,
                 spaceBetween: "50%",
                 rewind: true,
                 mousewheel: {
                     forceToAxis: true,
                 },
                 keyboard: {
                     enabled: true,
                     onlyInViewport: true,
                 },
                 breakpoints: {
                     // mobile landscape
                     480: {
                         slidesPerView: 1,
                         spaceBetween: "50%",
                     },
                     // tablet
                     768: {
                         slidesPerView: 1,
                         spaceBetween: "50%",
                     },
                     // desktop
                     992: {
                         slidesPerView: 1,
                         spaceBetween: "50%",
                     },
                 },
                 pagination: {
                     el: $(this).find(".swiper-bullet-wrapper")[0],
                     bulletActiveClass: "is-active",
                     bulletClass: "swiper-bullet",
                     bulletElement: "button",
                     clickable: true,
                 },
                 a11y: {
                     enabled: true,
                     prevSlideMessage: "Previous slide",
                     nextSlideMessage: "Next slide",
                     firstSlideMessage: "This is the first slide",
                     lastSlideMessage: "This is the last slide",
                     paginationBulletMessage: "Go to slide {{index}}",
                 },
                 navigation: {
                     nextEl: $(this).find(".swiper-next")[0],
                     prevEl: $(this).find(".swiper-prev")[0],
                     disabledClass: "is-disabled",
                 },
                 scrollbar: {
                     el: $(this).find(".swiper-drag-wrapper")[0],
                     draggable: true,
                     dragClass: "swiper-drag",
                     snapOnRelease: true,
                 },
                 slideActiveClass: "is-active",
                 slideDuplicateActiveClass: "is-active",
             });
         });
     </script>
 <?php endif ?>
 </body>
 </html>