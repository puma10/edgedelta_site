<div slider-duration="800" loop-mode="true" class="slider-main_component">
    <div class="slider-main_inner-wrapper">

        <a href="#" class="slider-main_arrow swiper-prev w-inline-block" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5ded9e921103eec11">
            <div class="slider-main_button-icon w-embed">
                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_i_14897_109044)">
                        <path d="M14.75 2.91547C14.75 0.972239 12.6301 -0.228044 10.9638 0.771743L1.65622 6.35627C0.0378704 7.32728 0.0378714 9.67272 1.65622 10.6437L10.9638 16.2283C12.6301 17.228 14.75 16.0278 14.75 14.0845V2.91547Z" fill="white" fill-opacity="0.1"></path>
                    </g>
                    <path d="M14.25 2.91547C14.25 1.36089 12.5541 0.40066 11.221 1.20049L1.91347 6.78502C0.618788 7.56182 0.618789 9.43818 1.91347 10.215L11.221 15.7995C12.5541 16.5993 14.25 15.6391 14.25 14.0845V2.91547Z" stroke="white" stroke-opacity="0.3"></path>
                    <defs>
                        <filter id="filter0_i_14897_109044" x="0.442459" y="-2.08838" width="14.3075" height="18.6768" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="-2.5"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.22 0"></feColorMatrix>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14897_109044"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </div>
        </a>

        <a href="#" class="slider-main_arrow swiper-next w-inline-block" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5ded9e921103eec11">
            <div class="slider-main_button-icon w-embed">
                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_i_14897_126611)">
                        <path d="M0.25 2.91547C0.25 0.972239 2.36993 -0.228044 4.03624 0.771743L13.3438 6.35627C14.9621 7.32728 14.9621 9.67272 13.3438 10.6437L4.03624 16.2283C2.36993 17.228 0.25 16.0278 0.25 14.0845V2.91547Z" fill="white" fill-opacity="0.1"></path>
                    </g>
                    <path d="M0.75 2.91547C0.75 1.36089 2.44594 0.40066 3.77899 1.20049L13.0865 6.78502C14.3812 7.56182 14.3812 9.43818 13.0865 10.215L3.77899 15.7995C2.44594 16.5993 0.75 15.6391 0.75 14.0845V2.91547Z" stroke="white" stroke-opacity="0.3"></path>
                    <defs>
                        <filter id="filter0_i_14897_126611" x="0.25" y="-2.08838" width="14.3075" height="18.6768" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dy="-2.5"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.22 0"></feColorMatrix>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_14897_126611"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </div>
        </a>

        <div class="swiper is-slider-main w-dyn-list swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div role="list" class="swiper-wrapper is-slider-main w-dyn-items" id="swiper-wrapper-5ded9e921103eec11" aria-live="polite">

                <?php if (have_rows('reviews_swiper', 'option')) : ?>
                    <?php while (have_rows('reviews_swiper', 'option')) : the_row(); ?>
                        <div role="listitem" class="swiper-slide is-slider-main w-dyn-item">
                            <div class="testimonial-slide">
                                <div id="w-node-_0079bea3-b013-b616-f178-723270567690-70567686" class="testimonial_left">
                                    <div class="testimonial_logo-wrapper">
                                        <?php $logo = get_sub_field('company_logo'); ?>
                                        <img src="<?php echo $logo['url'] ?>" alt="company logo">
                                    </div>
                                    <div id="w-node-_0079bea3-b013-b616-f178-723270567693-70567686" class="testimonial_text-wrapper">
                                        <div class="text-size-xxlarge text-weight-medium">
                                            "<?php the_sub_field('author_review'); ?>"
                                        </div>
                                        <div fade-right-children="" class="testimonial_author-wrapper">
                                            <?php $author_avatar = get_sub_field('author_avatar'); ?>
                                            <?php if ($author_avatar) : ?>
                                                <div class="testimonial_author-image-wrapper">
                                                    <img src="<?php echo $author_avatar['sizes']['thumbnail'] ?>" alt="<?php the_sub_field('author_name'); ?>">
                                                </div>
                                            <?php endif ?>
                                            <div>
                                                <div class="text-size-medium text-weight-medium"><?php the_sub_field('author_name'); ?></div>
                                                <div class="text-weight-medium text-color-neutral-lighter"><?php the_sub_field('author_position'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $image_rebv = get_sub_field('image'); ?>
                                <?php if ($image_rebv) : ?>
                                    <div id="w-node-_0079bea3-b013-b616-f178-72327056769b-70567686" class="testimonial_image-wrapper">
                                        <img src="<?php echo $image_rebv['sizes']['medium_large'] ?>" alt="dashboard image" class="testimonial_image">
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>

    </div>
</div>