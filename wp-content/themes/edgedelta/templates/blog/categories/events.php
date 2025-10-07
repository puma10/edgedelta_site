<div role="listitem" class="w-dyn-item">
    <div class="blog1_item">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" class="blog1_image-link w-inline-block">
                <div style="background-color:hsla(0, 0.00%, 100.00%, 1.00)" class="events_image-wrapper">
                    <?php the_post_thumbnail(array(624, 624), array('class' => 'events_image')); ?>
                </div>
            </a>
        <?php endif ?>
        <a href="<?php the_permalink(); ?>" class="blog1_title-link w-inline-block">
            <h3 class="heading-style-h6"><?php the_title(); ?></h3>
        </a>
        <div class="padding-bottom padding-xsmall">
            <div class="events_info">

                <?php if (get_field('date_of_the_event')) : ?>
                    <div class="events_info-item">
                        <div class="icon w-embed">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66667 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.3333 2.1665V4.6665" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2.91667 8.07483H17.0833" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M17.5 7.58317V14.6665C17.5 17.1665 16.25 18.8332 13.3333 18.8332H6.66667C3.75 18.8332 2.5 17.1665 2.5 14.6665V7.58317C2.5 5.08317 3.75 3.4165 6.66667 3.4165H13.3333C16.25 3.4165 17.5 5.08317 17.5 7.58317Z" stroke="#99F0C1" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.0789 11.9165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.0789 14.4165H13.0864" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.99624 11.9165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.99624 14.4165H10.0037" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6.91193 11.9165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6.91193 14.4165H6.91941" stroke="#99F0C1" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="text-size-medium text-color-green"><?php the_field('date_of_the_event') ?></div>
                    </div>
                    <div class="text-size-medium text-color-green text-weight-semibold">·</div>
                <?php endif ?>

                <?php if (get_field('location')) : ?>
                    <div class="events_info-item">
                        <div class="icon w-embed">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 11.6917C11.4359 11.6917 12.6 10.5276 12.6 9.0917C12.6 7.65576 11.4359 6.4917 10 6.4917C8.56406 6.4917 7.40001 7.65576 7.40001 9.0917C7.40001 10.5276 8.56406 11.6917 10 11.6917Z" stroke="#99F0C1" stroke-width="1.25"></path>
                                <path d="M3.01667 7.57484C4.65834 0.358173 15.35 0.366506 16.9833 7.58317C17.9417 11.8165 15.3083 15.3998 13 17.6165C11.325 19.2332 8.675 19.2332 6.99167 17.6165C4.69167 15.3998 2.05834 11.8082 3.01667 7.57484Z" stroke="#99F0C1" stroke-width="1.25"></path>
                            </svg>
                        </div>
                        <div class="text-size-medium text-color-green"><?php the_field('location') ?></div>
                    </div>
                <?php endif ?>

            </div>
        </div>
        <div><?php echo get_field('event_short_description') ? get_field('event_short_description') : custom_excerpt(); ?></div>
    </div>
</div>