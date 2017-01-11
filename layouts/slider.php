<!-- slider -->
<section id="home" class="travel-top-slider">
    <div class="owl-slider-full owl-carousel owl-theme light-pagination dark-pagination-without-next-prev-arrow main-slider">
        
  <?php

        $args = array(
            'post_type' => 'slider',
            'posts_per_page' => 4,
        );
        $counter = 0;
                
        $the_querys = new WP_Query($args);
                
        while ($the_querys -> have_posts()) : $the_querys -> the_post(); 
        $counter++;

            
    ?>
        <!-- slider item -->
        <div class="item owl-bg-img">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-6 no-padding travel-slider cover-background" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); background-size: <?php the_field('background_size'); ?>; background-color: <?php the_field('left_side_color'); ?>"></div>
                        <div class="col-md-6 col-sm-6 no-padding travel-slider cover-background" style="background-color: <?php the_field('right_side_color'); ?>;">
                            <!-- slider text -->
                            <div class="slider-typography text-left padding-twenty-seven xs-padding-thirteen">
                                <div class="slider-text-middle-main">
                                    <div class="slider-text-middle slider-typography-option2 xs-display-block">
                                        <span class="white-text font-weight-800 letter-spacing-3 alt-font text-uppercase"><?php the_title(); ?></span><br>
                                        <div class="bg-white separator-line-extra-thick no-margin-lr margin-twenty-two xs-margin-thirteen xs-no-margin-lr xs-width-20"></div>
                                        <p class="white-text text-uppercase letter-spacing-2 alt-font width-90 xs-text-small"><?php echo strip_tags(get_the_content()); ?></p>
                                        <a class="highlight-button-transparent-border btn btn-medium margin-thirteen no-margin-lr no-margin-bottom inner-link" href="<?php the_field('button_link'); ?>"><?php the_field('button'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider item -->

    <?php
        endwhile; 
    ?>
    </div>
</section>
<!-- end slider -->