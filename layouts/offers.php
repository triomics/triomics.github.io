<!-- special offer section -->
<section id="special-offer" class="wow fadeIn fix-background fix-background-webkit" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/arc_full.png');">
    <div class="opacity-full bg-dark-blue"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <span class="alt-font text-uppercase title-extra-large deep-orange-text letter-spacing-1">Special Offers</span>
                <span class="text-large letter-spacing-1 margin-one display-block text-uppercase light-gray-text alt-font">Check out our best promotion services</span>
            </div>
        </div>
        <div class="row margin-fifteen no-margin-lr no-margin-bottom blog-post-style2">
  <?php

        $args = array(
            'post_type' => 'offers',
            'posts_per_page' => 4,
        );
        $counter = 0;
                
        $the_querys = new WP_Query($args);
                
        while ($the_querys -> have_posts()) : $the_querys -> the_post(); 
        $counter++;

            
    ?>            
            <!-- special offer item -->
            <article class="col-md-6 col-sm-6 col-xs-12 margin-four no-margin-lr no-margin-top">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding bg-white">
                    <div class="col-md-6 col-sm-6 col-xs-6 no-padding post-thumbnail overflow-hidden">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 no-padding post-details-arrow">
                        <div class="post-details">
                            <span class="text-extra-large text-uppercase display-block alt-font margin-ten no-margin-lr sm-text-small xs-text-small"><?php the_title(); ?></span>
                            <span class="text-medium text-uppercase letter-spacing-2 alt-font light-gray-text sm-text-extra-small">~ <?php the_field('work_time'); ?> / <?php the_field('price_with_sale'); ?>$</span>
                            <div class="separator-line-thick bg-dark-blue margin-fifteen no-margin-bottom margin-lr-auto"></div>
                            <div class="travel-special-off bg-deep-orange position-absolute alt-font black-text sm-text-extra-small"><?php the_field('price_size'); ?>% OFF</div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- end special offer item -->
        <?php
        endwhile; 
    ?>
        </div>
    </div>
</section>
<!-- end special offer section -->
