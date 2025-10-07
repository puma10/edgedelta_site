<?php

/**
 * Template Name: Front Page
 */

get_header();
?>

<style>
.heading-style-h1-home {
    letter-spacing: -.3px;
    -webkit-text-fill-color: transparent;
    background-image: linear-gradient(135deg, #fff, #ffffffb3);
    -webkit-background-clip: text;
    background-clip: text;
    font-family: Sora, sans-serif;
    font-size: 5.5rem;
    font-weight: 400;
    line-height: 1.1;
}
</style>

<div class="section_home_hero">
  <div class="padding-global">
    <div class="container-large is-lines lines-vertical">
      <div class="padding-section-hero">
        <div class="max-width-custom1 align-center text-align-center">
          <div class="padding-bottom padding-medium">
            <h1 class="heading-style-h1-home"><?php the_field('title_head') ?></h1>
          </div>
        </div>

        <div class="max-width-52rem align-center text-align-center">
          <?php if (get_field('description_head')) : ?>
            <div class="padding-bottom padding-large">
              <div class="text-size-xlarge">
                <?php the_field('description_head') ?>
              </div>
            </div>
          <?php endif ?>

          <div class="padding-bottom padding-huge">
            <div fade-children="" class="button-group align-center test">

              <?php if (get_field('text_btn_one')) : ?>
                <a href="<?php the_field('url_btn_one') ?>" class="button w-inline-block">
                  <div class="button-text"><?php the_field('text_btn_one') ?></div>
                  <div class="overlay-gradient-1"></div>
                  <div class="overlay-gradient-2"></div>
                </a>
              <?php endif ?>

              <?php if (get_field('text_btn_two')) : ?>
                <a href="<?php the_field('url_btn_two') ?>" class="button is-secondary w-inline-block">
                  <div class="text-size-medium"><?php the_field('text_btn_two') ?></div>
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
              <?php endif ?>
            </div>
          </div>

        </div>

        <?php $img_hero = get_field('img_hero'); ?>
        <?php if ($img_hero) : ?>
          <div class="img_hero text-align-center" style="--bg-url: url('<?php echo esc_url($img_hero['sizes']['2048x2048']); ?>');"></div>
        <?php endif ?>

        <?php get_template_part('templates/slider/logo') ?>

      </div>

      <div fade-down-children="" class="section_hero-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars.avif" sizes="(max-width: 479px) 91vw, (max-width: 767px) 76vw, (max-width: 991px) 92vw, 55vw" srcset="<?php echo get_template_directory_uri() ?>/assets/images/stars-500.png 500w, <?php echo get_template_directory_uri() ?>/assets/images/stars-800.png 800w, <?php echo get_template_directory_uri() ?>/assets/images/stars-1080.png 1080w, <?php echo get_template_directory_uri() ?>/assets/images/stars.avif 1517w" alt="" class="section_hero-bg-stars">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/hero-gradient.avif" alt="" class="section_hero-bg-gradient">
      </div>
    </div>
  </div>
</div>



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

        <?php if (get_field('description_lottie')) : ?>

          <div class="max-width-large align-center text-align-center">
            <div class="text-size-large">
              <?php the_field('description_lottie') ?>
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

        <?php endif ?>

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
          <!-- Reviews Swiper -->
          <?php get_template_part('templates/slider/swiper') ?>
          <!-- Reviews Swiper -->
        </div>
      </div>
    </div>
  </div>
<?php endif ?>


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


<?php if (get_field('cta_black') == 'general') : ?>
  <!-- CTA Option-->
  <?php get_template_part('templates/cta/cta-modern') ?>
  <!-- CTA Option-->
<?php elseif (get_field('cta_black') == 'new') : ?>
  <!-- CTA -->
  <?php get_template_part('templates/solutions-product/cta-modern') ?>
  <!-- CTA -->
<?php endif ?>


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
        <div id="edge-delta-globe">
        </div>
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



<?php if (get_field('cta_bottom') == false) : ?>
  <!-- CTA Option-->
  <?php get_template_part('templates/cta/cta') ?>
  <!-- CTA Option-->
<?php else : ?>
  <!-- CTA -->
  <?php get_template_part('templates/solutions-product/cta') ?>
  <!-- CTA -->
<?php endif ?>


<?php get_footer(); ?>