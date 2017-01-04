<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Triomics - Creative Agency</title>
        <!-- description -->
        <meta name="description" content="A great collection of creative, responsive, elegant onepage templates for different industries.">
        <!-- keywords -->
        <meta name="keywords" content="creative, css3, html5, onepage, multipurpose, bootstrap, responsive, agency, architecture, resume, blog, photography, restaurant, portfolio, spa, travel, wedding, coming soon">
        <meta charset="utf-8">
        <meta name="author" content="Triomics">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon//apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>//css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>//css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>//css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
        <!-- style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
        <!--[if IE]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <![endif]-->
		<?php wp_head(); ?>
        
    </head>
	<body class="js-preloader <?php if (is_front_page()) { ?> front-page <?php } else { ?> inner-page <?php } ?>" <?php if (is_front_page()) { ?>style="background:url('<?php echo get_template_directory_uri(); ?>/images/image1.png') top #1e2126 no-repeat;"<?php } ?>>
		<div class="bg-color"></div>
		<div class="preloader">
		  <div class="rel-pos">
			<div class="square-1"></div>
			<div class="letter">T</div>
			<div class="square-2"></div>
		  </div>
		</div>
        <!-- navigation -->
        <nav class="navbar no-margin-bottom no-border navbar-height alt-font">
            <div class="container navigation-menu">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-lg-2 col-md-2 navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand inner-link" href="<?php bloginfo('url'); ?>#home"><img src="<?php echo get_template_directory_uri(); ?>/images/triomics-logo4.svg" alt=""/></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-9 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
						if( has_nav_menu( "header-menu" )) {                                                               
                            wp_nav_menu( 
                                array( 
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav',
                                    'menu' => 'header-menu'
                                ) 
                            );    
						}										
					?>
                    </div>
                    <div class="col-lg-3 col-md-2 pull-right header-right text-right sm-display-none">
                        <span class="text-uppercase white-text text-small md-display-none">Need Services? &nbsp;&nbsp;</span>
                        <a class="btn-small-white btn btn-very-small no-margin inner-link" href="#contact">Order Now!</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->