<?php 

//get variables

$slider = get_field ('slider', option);
$about = get_field ('about', option);
$services = get_field ('services', option);
$latest_w = get_field ('latest_w', option);
$work_with_us = get_field ('work_with_us', option);
$offers = get_field ('offers', option);
$blog = get_field ('blog', option);


//header

get_header(); 

    if ($slider == true) { 
        get_template_part('layouts/slider');
    }

    if ($about == true) {
        get_template_part('layouts/about-us');
    }

    if ($services == true) {
        get_template_part('layouts/services');
    }

?>
    <!-- counter section -->
    <section class="border-bottom border-transperent-white-light wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- counter item -->
                <div class="col-md-3 col-sm-6 counter-style1 text-center border-right border-transperent-white-light sm-margin-seven sm-no-margin-lr sm-no-margin-top xs-no-border xs-margin-nineteen xs-no-margin-lr xs-no-margin-top">
                    <span class="timer counter-number alt-font font-weight-500 light-gray-text" data-to="780" data-speed="7000"></span>
                    <span class="text-small font-weight-200 letter-spacing-2 text-uppercase margin-one no-margin-lr display-block alt-font no-margin-bottom">Tours</span>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-6 counter-style1 text-center border-right border-transperent-white-light sm-margin-seven sm-no-margin-lr sm-no-margin-top sm-no-border xs-margin-nineteen xs-no-margin-lr xs-no-margin-top">
                    <span class="timer counter-number alt-font font-weight-500 light-gray-text" data-to="987" data-speed="7000"></span>
                    <span class="text-small font-weight-200 letter-spacing-2 text-uppercase margin-one no-margin-lr display-block alt-font no-margin-bottom">Tourists</span>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-6 counter-style1 text-center border-right border-transperent-white-light xs-no-border xs-margin-nineteen xs-no-margin-lr xs-no-margin-top">
                    <span class="timer counter-number alt-font font-weight-500 light-gray-text" data-to="350" data-speed="7000"></span>
                    <span class="text-small font-weight-200 letter-spacing-2 text-uppercase margin-one no-margin-lr display-block alt-font no-margin-bottom">Destinations</span>
                </div>
                <!-- end counter item -->
                <!-- counter item -->
                <div class="col-md-3 col-sm-6 counter-style1 text-center">
                    <span class="timer counter-number alt-font font-weight-500 light-gray-text" data-to="166" data-speed="7000"></span>
                    <span class="text-small font-weight-200 letter-spacing-2 text-uppercase margin-one no-margin-lr display-block alt-font no-margin-bottom">Hotels</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end counter section -->


<?php
    if ($latest_w == true) {
        get_template_part('layouts/latest-work');
    }

    if ($work_with_us == true) {
        get_template_part('layouts/want-to-work');
    }

    if ($offers == true) {
        get_template_part('layouts/offers');
    }   

    if ($blog == true) {
        get_template_part('layouts/latest-blog');
    }   

    // blog
    get_template_part('layouts/contact-us');
    
    // blog
    get_template_part('layouts/popup-images');
    // footer
get_footer(); 

?>