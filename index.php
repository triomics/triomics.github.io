<?php get_header(); ?>
    <!-- page title -->
        <section class="page-title parallax2 parallax-fix wow fadeIn">
            <img class="parallax-background-img" src="https://images.unsplash.com/photo-1455651264681-40d634a35ce4?dpr=1&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="" />
            <div class="opacity-full-dark bg-deep-blue3"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="alt-font white-text font-weight-600 xs-title-extra-large">Latest Blog</h2>
                        <span class="alt-font title-small xs-text-large white-text text-uppercase margin-one no-margin-bottom no-margin-lr display-block">Our thoughts in one place</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- breadcrumb -->

        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
        <div class="breadcrumb alt-font"><div class="container">','</div></div>
            ');
            }
        ?>

        <!-- end breadcrumb -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 blog-listing">
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
                            <article>
                                <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                    <div class="post-date xs-margin-lr-auto xs-no-margin-top"><span><?php echo get_the_date('d'); ?></span><?php echo get_the_date('M Y'); ?></div>
                                </div>
                                <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                    <h2 class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                    <?php if ( has_post_thumbnail( $_post->ID ) ) { ?>
                                        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $_post->ID, 'blog-thumb', array( 'alt' => get_the_title() )); ?></a>
                                    <?php } else { ?>
                                         <a href="<?php the_permalink() ?>"><img src="http://placehold.it/800x549" alt=""/></a>
                                    <?php } ?>
                                    
                                    <p class="margin-eight no-margin-lr xs-margin-four xs-no-margin-lr"><?php the_excerpt(); ?></p>
                                    <!-- social icon 
                                    <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                        <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                    </div>
                                    end social icon -->
                                    <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                        <a href="<?php the_permalink() ?>" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 no-padding">
                                        <div class="bg-golden-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                    </div>
                                </div>
                            </article>

                        <?php
                            endwhile; 
                        ?>
                        <!-- end blog item -->
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
        <!-- pagination 
        <section class=" wow fadeIn bg-black padding-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 pagination text-center no-padding">
                        <a href="#"><i class="fa fa-angle-left title-medium font-weight-600 fast-yellow-text no-border"></i></a>
                        <a href="#" class="alt-font">1</a>
                        <a href="#" class="alt-font active">2</a>
                        <a href="#" class="alt-font">3</a>
                        <a href="#" class="alt-font">4</a>
                        <a href="#" class="alt-font">5</a>
                        <a href="#"><i class="fa fa-angle-right title-medium font-weight-600 fast-yellow-text"></i></a>
                    </div>
                </div>
            </div>
        </section>
        end pagination -->
<?php get_footer(); ?>
