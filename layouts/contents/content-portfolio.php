<!-- details popup -->
<div class="popup-info">
    <div class="popup-main bg-white">
        <!-- slider item-->
        <div class="owl-slider-full owl-carousel owl-theme light-pagination square-pagination dark-pagination-without-next-prev-arrow main-slider">
            <div class="item padding-thirteen no-padding-lr sm-padding-twenty-nine sm-no-padding-lr xs-padding-seven xs-no-padding-lr half-project-bg owl-bg-img" style="background-image:url('<?php the_field('header_img');?>');">
                <div class="opacity-full bg-dark-gray"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center z-index-1 margin-thirteen no-margin-lr no-margin-bottom xs-margin-nineteen xs-no-margin-bottom xs-no-margin-lr">
                            <div class="slider-typographi-text">
                                <span class="alt-font font-weight-600 white-text title-extra-large letter-spacing-2 text-uppercase display-block xs-title-medium"><?php the_title(); ?></span>
                                <div class="bg-deep-orange separator-line-thick-long margin-seven margin-lr-auto xs-margin-eleven xs-margin-lr-auto"></div>
                                <?php 
                                $field = get_field_object('portfolio_features');
                                $colors = $field['value'];
                                    if( $colors ): 
                                ?>
                                <ul class="features-icon">
                                    <?php foreach( $colors as $color ): ?>
                                        <li><?php echo $field['choices'][ $color ]; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end slider item -->
        <!-- popup text -->
        <section class="no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-10 text-center center-col cursor-default">
                        <span class="title-small letter-spacing-2 text-uppercase alt-font black-text margin-ten no-margin-lr no-margin-top display-block">Project Description</span>
                        <p class="text-medium"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end popup text -->
        <?php $images_top = get_field('portfolio_gallery');
		if( $images_top ): ?>
            <section>
                    <div>
                        <!-- popup thumb images -->
                        <div class="row">
                            <?php foreach( $images_top as $image ): ?>
                                <div class="col-md-12 col-sm-12"><img class="project-img-gallery no-padding-top" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>"></div>
                            <?php endforeach; ?>                   
                        </div>
                        <!-- end popup thumb images -->
                    </div>
        </section>
        <?php endif; ?>
        <section class="no-padding-top">
            <div class="container">
                <div class="row">
                    <!-- call to action button -->
                    <div class="col-md-12 text-center">
                        <span class="alt-font display-block text-uppercase"><?php the_field('before_btn_text'); ?></span>
                        <a class="btn highlight-button-black-border btn-medium margin-three no-margin-bottom no-margin-lr" href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a>
                    </div>
                    <!-- end call to action button -->
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end details popup -->