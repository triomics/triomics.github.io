<?php get_header(); ?>
    <!-- page title -->
        <section class="page-title parallax2 parallax-fix wow fadeIn">
            <img class="parallax-background-img" src="https://images.unsplash.com/photo-1416339684178-3a239570f315?dpr=1&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" alt="" />
            <div class="opacity-full-dark bg-deep-blue3"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="alt-font white-text font-weight-600 xs-title-extra-large">LATEST WORK</h2>
                        <span class="alt-font title-small xs-text-large white-text text-uppercase margin-one no-margin-bottom no-margin-lr display-block">Our works, our children.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
    <!-- work section -->
    <section id="work" class="no-padding-bottom work-4col wow fadeIn ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center display-inline md-text-center md-margin-five md-no-margin-lr md-no-margin-bottom ">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs no-border portfolio-filter-tab alt-font text-uppercase letter-spacing-1 margin-seven no-margin-lr no-margin-bottom xs-margin-one-half xs-no-margin-bottom xs-no-margin-lr">
                    <li class="nav active xs-display-inline "><a href="#" data-filter="*" class="xs-display-inline">All</a></li>
                    <?php 
                        $categories = get_terms( 'portfolio-cat', array('hide_empty' => false));
                        foreach( $categories as $key => $cats){					
                    ?>
                        <li class="nav xs-display-inline "><a href="#" data-filter=".<?php echo $cats->slug; ?>" class="xs-display-inline"><?php echo $cats->name;?></a></li>
                    <?php } ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>

                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="container-fluid margin-thirteen no-margin-bottom no-margin-lr md-margin-five md-no-margin-bottom md-no-margin-lr xs-margin-one-half xs-no-margin-bottom xs-no-margin-lr">
            <div class="row">
                <div class="grid-gallery grid-style1 overflow-hidden">
                    <div class="tab-content">
                        <ul class="masonry-items grid">
                        <?php 
                        
                            $args = array(
                                'post_type' => 'portfolio',
                            
                            );
                            $query = new WP_Query( $args );

                            while ($query -> have_posts()) : $query -> the_post(); 
                        
                        ?>
                            <!-- portfolio item -->
                            <li class="<?php get_term_lists ($_post->ID); ?>">
                                <figure>
                                    <?php 

                                    if ( has_post_thumbnail( $_post->ID ) ) { ?>
                                        <div class="gallery-img">
                                            <a class="work-details-popup"><?php echo get_the_post_thumbnail( $_post->ID, 'portfolio-thumb', array( 'alt' => get_the_title() )); ?></a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="gallery-img">
                                            <a class="work-details-popup"><img src="http://placehold.it/800x800" alt=""></a>
                                        </div>
                                    <?php } ?>

                                    <figcaption>
                                        <h3 class="alt-font text-uppercase letter-spacing-2 xs-no-padding-lr"><?php the_title(); ?></h3>
                                        <div class="grid-style1-border"></div>
                                    </figcaption>
                                </figure>
                                <?php get_template_part('layouts/contents/content','portfolio'); ?>
                            </li>
                            <?php          
                                endwhile;                  
                            ?>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end work section -->
<?php get_footer(); ?>
