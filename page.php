<?php get_header(); ?>

<?php

	// Start the loop.
	while ( have_posts() ) : the_post();

?>
    <!-- page title -->
    <section class="page-title parallax2 parallax-fix wow fadeIn">
        <?php echo get_the_post_thumbnail( $_post->ID, 'blog-thumb-big', array( 'alt' => get_the_title(), 'class' => 'parallax-background-img' )); ?>
        <div class="opacity-full bg-deep-blue3"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="alt-font white-text font-weight-600 xs-title-extra-large"><?php the_title(); ?></h2>
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
    <section class="wow fadeIn border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 blog-listing">
                    <article>
                        <div class="margin-ten no-margin-lr">
                            <!-- text -->
                                <?php the_content(); ?>
                            <!-- end text -->
                        </div>
                        <!-- social media icon -->
                        <div class="text-center">
                            <a class="" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook dark-gray-text title-medium"></i></a>
                            <a class="margin-ten no-margin-top no-margin-bottom no-margin-right" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter dark-gray-text title-medium"></i></a>
                            <a class="margin-ten no-margin-top no-margin-bottom no-margin-right" href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus dark-gray-text title-medium"></i></a>
                            <a class="margin-ten no-margin-top no-margin-bottom no-margin-right" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin dark-gray-text title-medium"></i></a>
                        </div>
                        <!-- end social media icon -->
                        <div class="bg-golden-yellow separator-line-thick-full no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                    </article>
                </div>

                <?php endwhile; ?>

                <?php get_sidebar(); ?>

            </div>
        </div>
		<?php get_template_part('layouts/start-project');?>
    </section>

    <?php get_footer(); ?>