<!-- blog section -->
<section id="blog" class="wow fadeIn no-padding-bottom">
    <div class="container">
        <!-- section title -->
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <span class="alt-font text-uppercase title-extra-large deep-orange-text letter-spacing-1">Latest Blog</span>
                <span class="text-large letter-spacing-1 margin-one display-block text-uppercase light-gray-text alt-font">Checkout Our Latest Blogs And News</span>
            </div>
        </div>
        <!-- end section title -->
    </div>
    <div class="container-fluid no-padding-left margin-seven no-margin-lr no-margin-bottom ">
        <div class="row no-margin blog-post-style3">
            <!-- blog slider -->
            <div class="blog-slider owl-carousel owl-theme light-pagination">
            <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                );
                $counter = 0;
                
                $the_querys = new WP_Query($args);
                while ($the_querys -> have_posts()) : $the_querys -> the_post(); 
                $counter++;

                if ($counter >= 9) {
                     $counter = '0'.$counter;
                } 
            
            ?>
                <!-- blog item -->
                <article class="item col-md-12 no-padding">
                    <div class="col-md-12 col-sm-12">
                        <!-- blog image -->
                        <?php 

                        if ( has_post_thumbnail( $_post->ID ) ) { ?>
                            <div class="post-thumbnail overflow-hidden position-relative bg-dark-blue">
                                <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $_post->ID, 'blog-thumb', array( 'alt' => get_the_title() )); ?></a>
                                <span class="post-date text-small text-uppercase letter-spacing-2 alt-font light-gray-text position-absolute bg-dark-blue"><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                        <?php } else { ?>
                            <div class="post-thumbnail overflow-hidden position-relative bg-dark-blue">
                                <a href="<?php the_permalink() ?>"><img src="http://placehold.it/800x520" alt="" /></a>
                                <span class="post-date text-small text-uppercase letter-spacing-2 alt-font light-gray-text position-absolute bg-dark-blue"><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                        <?php } ?>
                        <!-- end blog image -->
                        <div class="post-details display-inline-block text-left">
                            <div class="col-md-2 col-sm-2 no-padding">
                                <span class="title-extra-large deep-orange-text md-title-large alt-font margin-one-half no-margin-lr display-block sm-display-none"><?php  echo '0'.$counter; ?>.</span>
                            </div>
                            <div class="col-md-10 col-sm-12 no-padding">
                                <h2 class="text-large text-uppercase md-text-medium display-block alt-font"><a href="<?php the_permalink() ?>" class="light-gray-text"><?php the_title(); ?></a></h2>
                                <span class="text-extra-small text-uppercase display-block alt-font medium-gray-text margin-one-half no-margin-lr no-margin-bottom">Posted by <a href="<?php the_permalink() ?>" class="medium-gray-text"><?php echo get_the_author(); ?></a></span>
                            </div>
                        </div>
                    </div>
                </article>

                <?php
                    endwhile; 
                ?>
                <!-- end blog item -->
            </div>
            <!-- end blog slider -->
        </div>
    </div>
</section>
<!-- end blog section -->