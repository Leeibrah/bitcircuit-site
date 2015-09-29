<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD:index.php
<?php
require_once('header.php');
?>

<body class="do-homepage-one">
<?php
//Menu
require_once('menu.php');
?>
=======
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- PAGE TITLE -->
    <title>BitCircuit Technologies :: Home</title>

    <!-- FAVICON AND APPLE TOUCHSCREEN ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="http://themebeer.com/html/do/images/apple-touch-icon.png">

    <!-- ******************************
            STYLESHEETS
    *********************************** -->

    <!-- DEFAULT AND BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">


    <link rel="stylesheet" href="themify-icons.css">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />

    <!-- PLUGINS DEFAULT STYSHEETS-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">    
    <link rel="stylesheet" href="css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="css/animate.min.css">  
      
    
    <!-- MAIN STYLESHEETS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- MODERNIZER -->
    <script src="js/modernizr-2.8.3.min.js"></script>

			
	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/selectivizr-min.js"></script>
        <script src="js/nwmatcher.js"></script>
        <script src="js/IE9.js"></script>		
	<![endif]-->
</head>

<body class="do-homepage-one">
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="do-loader">&nbsp;</div>
    </div>
    <!-- START THE MAIN CONTENT HERE -->

    <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="do-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <div class="do-side-menu-wrap">
        <!-- OVERLAY -->
        <div class="do-dark-overlay"></div>
        <!-- OVERLAY END -->

        <nav class="do-side-menu">
            <div class="do-side-menu-widget-wrap">
                <!-- LOGO -->
                <div class="do-side-menu-logo-wrap">
                    <a href="index.html">
                        <img src="images/side-menu-logo.png" alt="DO">
                    </a>
                </div>
                <!-- LOGO -->

                <!-- MENU -->
                <div class="do-side-menu-menu-wrap">
                    <ul>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Solutions</a>
                        </li>

                        <li>
                            <a href="">Team</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
            
                    </ul>
                </div>
                <!-- MENU END -->

                <!-- SOCIAL ICONS -->
                <div class="do-side-menu-social-icon">
                    <ul>
                        <li>
                            <a href="index.html#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- SOCIAL ICONS END -->
            </div>
        </nav>

        <button class="do-side-menu-close-button" id="do-side-menu-close-button">Close Menu</button>
    </div>
    <!-- SIDE MENU END -->

    <!--================================
        HEADER
    =================================-->
    <header>
        <!-- Navigation Menu start-->
        <nav class="navbar do-main-menu" role="navigation">
            <div class="container">

                <!-- Navbar Toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a class="navbar-brand" href="/"><img class="logo" src="images/logo.png" alt="DO"></a>

                </div>
                <!-- Navbar Toggle End -->

                <!-- navbar-collapse start-->
                <div id="nav-menu" class="navbar-collapse do-menu-wrapper collapse" role="navigation">
                    
                    <ul class="nav navbar-nav do-menus">

                        <li class="active">
                            <a href="Home"></a>
                        </li>

                        <li>
                            <a href="About Us"</a>
                        </li>

                        <li>
                            <a href="Solutions"></a>
                        </li>

                        <li>
                            <a href="Team"></a>
                        </li>

                        <li>
                            <a href="Contact"></a>
                        </li>
                    </ul>
                </div>
                <!-- navbar-collapse end-->

                <!-- SIDE MENU BTN -->
                <div class="do-side-menu-opener">
                    <button class="do-side-menu-button" id="do-side-menu-open-button"></button>
                </div>
                <!-- SIDE MENU BTN END -->

            </div>
        </nav>
        <!-- Navigation Menu end-->
    </header>
    <!-- HEADER END -->

    <!-- **************************************
                    Main Slider
    *************************************** -->
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
    <section class="do-main-slider">
        
        <div class="slider-pro do-homeone-slider" id="do-homeone-slider">
            
            <div class="sp-slides">

                <!-- Slides -->
                <div class="sp-slide do-main-slides">
                    <!-- <div class="az-dark-color-overlay"></div> -->
                    <div class="sp-layer do-slider-img do-mac-img" data-position="topCenter" data-vertical="-30" data-show-delay="2000" data-hide-delay="200" data-show-transition="down" data-hide-transition="up" data-width="58.5%">
                        <img src="images/slider_image/mac.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-spl-img" data-position="topLeft" data-vertical="-85px" data-horizontal="6%" data-show-delay="2500" data-hide-delay="200" data-show-transition="right" data-hide-transition="left" data-width="15.6%">
                        <img src="images/slider_image/speaker-left.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-spr-img" data-position="topRight" data-vertical="-85px" data-horizontal="5.5%" data-show-delay="2500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right" data-width="12.3%">
                        <img src="images/slider_image/speaker-right.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-glass-img" data-position="centerLeft" data-vertical="0" data-horizontal="18%" data-show-delay="3000" data-hide-delay="200" data-show-transition="right" data-hide-transition="left" data-width="14.41%">
                        <img src="images/slider_image/glass.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-pencil-2-img" data-position="centerRight" data-vertical="0" data-horizontal="20%" data-show-delay="3500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right" data-width="11.05%">
                        <img src="images/slider_image/pencil-2.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-pencil-1-img" data-position="centerRight" data-vertical="-50" data-horizontal="20.7%" data-show-delay="3700" data-hide-delay="200" data-show-transition="left" data-hide-transition="right" data-width="10.4%">
                        <img src="images/slider_image/pencil-1.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-earphone-img" data-position="centerLeft" data-vertical="165" data-horizontal="7.5%" data-show-delay="4000" data-hide-delay="250" data-show-transition="right" data-hide-transition="left" data-width="9.22%">
                        <img src="images/slider_image/earphone.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-coffe-cup-img" data-position="centerRight" data-vertical="225" data-horizontal="5%" data-show-delay="4500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right" data-width="11.63%">
                        <img src="images/slider_image/coffee-cup.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-keyboard-img" data-position="bottomCenter" data-vertical="0" data-show-delay="5000" data-hide-delay="200" data-show-transition="up" data-hide-transition="down" data-width="23.84%">
                        <img src="images/slider_image/keyboard.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-arrow-img" data-position="bottomCenter" data-vertical="150" data-show-delay="5500" data-hide-delay="200" data-show-transition="up" data-hide-transition="down" data-width="36">
<<<<<<< HEAD:index.php
                        <a data-scroll href="index.php#do-sevice-section">
=======
                        <a data-scroll href="do-sevice-section">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                            <img src="images/slider_image/arrow.png" alt="">
                        </a>
                    </div>


                    <h1 class="sp-layer do-slider-text-big"
                     data-position="center" data-vertical="0" data-show-transition="left" data-hide-transition="up" data-show-delay="1000" data-hide-delay="200">WEB DESIGN</h1>

                    <p class="sp-layer do-slider-text-small"
                     data-position="center" data-vertical="90" data-show-delay="1500" data-hide-delay="200" data-show-transition="down" data-hide-transition="down">
                        BEST <span class="do-color-text">THEME</span> FOR BUSINESS 
                    </p>
                </div>
                <!-- Slides End -->

                <!-- Slides -->
                <div class="sp-slide do-main-slides">

                    <div class="sp-layer do-slider-img" data-position="topCenter" data-vertical="0" data-show-delay="2000" data-hide-delay="200" data-show-transition="down" data-hide-transition="up" data-width="">
                        <img src="images/slider_image/shadow-top.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img" data-position="bottomCenter" data-vertical="0" data-show-delay="2500" data-hide-delay="200" data-show-transition="up" data-hide-transition="down" data-width="87%">
                        <img src="images/slider_image/table.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img" data-position="topLeft" data-vertical="100" data-horizontal="15%" data-show-delay="3000" data-hide-delay="200" data-show-transition="right" data-hide-transition="left" data-width="10%">
                        <img src="images/slider_image/clock.jpg" alt="">
                    </div>

                    <div class="sp-layer do-slider-img" data-position="topRight" data-vertical="115" data-horizontal="6%" data-show-delay="3500" data-hide-delay="200" data-show-transition="up" data-hide-transition="down" data-width="29%">
                        <img src="images/slider_image/shelf-object.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img" data-position="bottomLeft" data-vertical="48" data-horizontal="13%" data-show-delay="4000" data-hide-delay="200" data-show-transition="right" data-hide-transition="left" data-width="20%">
                        <img src="images/slider_image/bottle-skotch-clock.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img" data-position="bottomRight" data-vertical="50" data-horizontal="16%" data-show-delay="4500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right" data-width="14%">
                        <img src="images/slider_image/books-2.png" alt="">
                    </div>

                    <div class="sp-layer do-slider-img do-women-img" data-position="bottomCenter" data-vertical="23" data-show-delay="5000" data-hide-delay="200" data-show-transition="up" data-hide-transition="down" data-width="28%">
                        <img src="images/slider_image/woman.png" alt="">
                    </div>

                    <h1 class="sp-layer do-slider-text-big do-slider-2nd-text"
                     data-position="topCenter" data-vertical="100" data-horizontal="0" data-show-transition="down" data-hide-transition="up" data-show-delay="1000" data-hide-delay="200">PIXEL PERFECT</h1>

                    <p class="sp-layer do-slider-text-small"
                     data-position="topCenter" data-vertical="150" data-show-delay="1500" data-hide-delay="200" data-show-transition="down" data-hide-transition="down">
                        DESIGN MAKES CHANGE
                    </p>
                </div>
                <!-- Slides End -->
                    
            </div>
        </div>
    </section>
    <!-- do Main Slider End -->

    <!--================================
        SERVICES SECTION 
    =================================-->
    <section class="do-sevice-section" id="do-sevice-section">
        <div class="container">
            <div class="row">

                <!-- DESIGN -->
                <div class="do-service-container">
                    <div class="do-service-container-inner">
                        <div class="do-front-part">
                            <div class="do-front-content">
                                <i class="icon-trophy"></i>
                                <h3>DESIGN</h3>
                            </div>
                        </div>

                        <div class="do-back-part">
                            <div class="do-back-content">
                                <h3>DESIGN</h3>
                                <p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUCTS -->
                <div class="do-service-container">
                    <div class="do-service-container-inner">
                        <div class="do-front-part">
                            <div class="do-front-content">
                                <i class="icon-anchor"></i>
                                <h3>PRODUCTS</h3>
                            </div>
                        </div>

                        <div class="do-back-part">
                            <div class="do-back-content">
                                <h3>PRODUCTS</h3>
                                <p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AWARDS -->
                <div class="do-service-container">
                    <div class="do-service-container-inner">
                        <div class="do-front-part">
                            <div class="do-front-content">
                                <i class="icon-shield"></i>
                                <h3>AWARDS</h3>
                            </div>
                        </div>

                        <div class="do-back-part">
                            <div class="do-back-content">
                                <h3>AWARDS</h3>
                                <p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PARTNERS -->
                <div class="do-service-container">
                    <div class="do-service-container-inner">
                        <div class="do-front-part">
                            <div class="do-front-content">
                                <i class="fa fa-users"></i>
                                <h3>PARTNERS</h3>
                            </div>
                        </div>

                        <div class="do-back-part">
                            <div class="do-back-content">
                                <h3>PARTNERS</h3>
                                <p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!--================================
        CUSTOM SECTION 
    =================================-->
    <section class="do-custom-section do-animated-img do-section">
        <div class="container">
            <div class="row">

                <!-- SECTION HEADING -->
                <div class="do-section-heading">
                    <h1>Welcome</h1>
                    <p class="do-section-subheading">creative &amp; expert</p>
                </div>
                <!-- SECTION HEADING END -->

                <!-- CUSTOM SECTION CONTENT -->
                <div class="do-custom-section-content col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <p>Dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves</p>

<<<<<<< HEAD:index.php
                    <a href="index.php#" class="do-btn-round-outline">more</a>
=======
                    <a href="" class="do-btn-round-outline">more</a>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                </div>
                <!-- CUSTOM SECTION CONTENT END -->

                <!-- CUSTOM SECTION IMG -->
                <div class="do-animated-img-wrapper col-md-12 col-sm-12 col-xs-12">
                    <ul class="hidden-xs">
                        <li class="appear slideInUp" data-wow-duration="1s" data-wow-delay="100">
                            <img src="images/face-1.png" alt="Custom Image">
                        </li>

                        <li class="appear slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <img src="images/face-2.png" alt="Custom Image">
                        </li>
                        
                        <li class="appear slideInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <img src="images/face-3.png" alt="Custom Image">
                        </li>
                        
                        <li class="appear slideInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <img src="images/face-4.png" alt="Custom Image">
                        </li>
                        
                        <li class="appear slideInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <img src="images/face-5.png" alt="Custom Image">
                        </li>
                    </ul>

                    <img src="images/custom-img.png" alt="" class="visible-xs">
                </div>
                <!-- CUSTOM SECTION IMG END -->
            </div>
        </div>
    </section>
    <!-- CUSTOM SECTION END -->

    <!--================================
        FEATURE SECTION 
    =================================-->
    <section class="do-feature-section">
        <div class="container">
            <div class="row">

                <!-- FEATURES -->
                <div class="do-icon-with-text-style1 col-md-3 col-sm-3 col-xs-12 appear fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="do-icon-wrapper">
                        <i class="icon-microphone"></i>
                    </div>

<<<<<<< HEAD:index.php
                    <h3><a href="index.php#">sounds good</a></h3>
=======
                    <h3><a href="">sounds good</a></h3>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <p>On the other hand, we denounce with right ous indignation and dislike mens who are so beguiled</p>
                </div>
                <!-- FEATURES END -->

                <!-- FEATURES -->
                <div class="do-icon-with-text-style1 col-md-3 col-sm-3 col-xs-12 appear fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="do-icon-wrapper">
                        <i class="ti-package"></i>
                    </div>

<<<<<<< HEAD:index.php
                    <h3><a href="index.php#">BOX STYLE</a></h3>
=======
                    <h3><a href="">BOX STYLE</a></h3>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <p>On the other hand, we denounce with right ous indignation and dislike mens who are so beguiled</p>
                </div>
                <!-- FEATURES END -->

                <!-- FEATURES -->
                <div class="do-icon-with-text-style1 col-md-3 col-sm-3 col-xs-12 appear fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="do-icon-wrapper">
                        <i class="pe-7s-gleam"></i>
                    </div>

<<<<<<< HEAD:index.php
                    <h3><a href="index.php#">SHARING</a></h3>
=======
                    <h3><a href="">SHARING</a></h3>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <p>On the other hand, we denounce with right ous indignation and dislike mens who are so beguiled</p>
                </div>
                <!-- FEATURES END -->

                <!-- FEATURES -->
                <div class="do-icon-with-text-style1 col-md-3 col-sm-3 col-xs-12 appear fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
                    <div class="do-icon-wrapper">
                        <i class="ti-infinite"></i>
                    </div>

<<<<<<< HEAD:index.php
                    <h3><a href="index.php#">NICE LOOP</a></h3>
=======
                    <h3><a href="">NICE LOOP</a></h3>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <p>On the other hand, we denounce with right ous indignation and dislike mens who are so beguiled</p>
                </div>
                <!-- FEATURES END -->
            </div>
        </div>
    </section>
    <!-- FEATURE SECTION END -->

    <!--================================
<<<<<<< HEAD:index.php
        COUNTER SECTION
    =================================-->
    <section class="do-counter-section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50">
        <div class="do-dark-overlay"></div>
        <div class="container">
            <div class="row">
                <!-- BLOG -->
                <div class="do-counter-wrapper">
                    <div class="do-counter-items col-md-3 col-sm-3 col-xs-12">
                        <i class="pe-7s-graph3"></i>
                        <h3 class="do-counter" data-from="0" data-to="136800">0</h3>
                        <span>work</span>
                    </div>

                    <div class="do-counter-items col-md-3 col-sm-3 col-xs-12">
                        <i class="pe-7s-bicycle"></i>
                        <h3 class="do-counter" data-from="0" data-to="276500">0</h3>
                        <span>sale</span>
                    </div>

                    <div class="do-counter-items col-md-3 col-sm-3 col-xs-12">
                        <i class="pe-7s-coffee"></i>
                        <h3 class="do-counter" data-from="0" data-to="148630">0</h3>
                        <span>demo</span>
                    </div>

                    <div class="do-counter-items col-md-3 col-sm-3 col-xs-12">
                        <i class="pe-7s-graph1"></i>
                        <h3 class="do-counter" data-from="0" data-to="136800">0</h3>
                        <span>client</span>
                    </div>
                </div>
                <!-- BLOG END -->
            </div>
        </div>
    </section>
    <!-- COUNTER SECTION END -->

    <!--================================
        CUSTOM SECTION 3
    =================================-->
    <div class="do-custom-section-three">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 do-custom-sec3-col-1">
                    <h3>facts WE HAVE</h3>
                    <p>counter buti because those who do not know how an puIse pleasure rationally encounter consequences that are painci No one rejects, dislikes, or avoids pleasure itself, because is counter buti because those who do not know how an puIse Nor again is there anyone who loves or pursues and desirn <br>
                    <br> 
                    pleasure rationally encounter consequences that are painci counter buti because those who do not know how an puIse pleasure rationally encounter. Nor again is there anyone who loves or pursues and desirn</p>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12 do-custom-sec3-col-2">
                    <h3>KEY FEATURES</h3>
                    <ul class="do-icon-list">
                        <li><i class="fa fa-angle-right"></i> Pleasures rationally encounter consequences</li>
                        <li><i class="fa fa-angle-right"></i> Sample analysis and  mobile networking system</li>
                        <li><i class="fa fa-angle-right"></i> Business communication management</li>
                        <li><i class="fa fa-angle-right"></i>Sample analysis and  mobile networking system</li>
                        <li><i class="fa fa-angle-right"></i> Technical writing with perfect translation</li>
                        <li><i class="fa fa-angle-right"></i> Web data structural development ready</li>
                        <li><i class="fa fa-angle-right"></i> Business communication management</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12 do-custom-sec3-col-3">
                    <h3>PROGRESS BAR</h3>
                    <div class="do-our-skill">
                        <!-- Design Skill Bar -->
                        <div class="do-skillbar clearfix" data-percent="70">
                            <p class="do-skillbar-title">Design<span class="skill-bar-percent"></span></p>
                            <div class="do-skillbar-bar-wrapper">
                                <div class="do-skillbar-bar"></div>
                            </div>
                        </div> 
                        <!-- Design Skill Bar End -->

                        <!-- Code Skill Bar -->
                        <div class="do-skillbar clearfix" data-percent="80">
                            <p class="do-skillbar-title">code<span class="skill-bar-percent"></span></p>
                            <div class="do-skillbar-bar-wrapper">
                                <div class="do-skillbar-bar"></div>
                            </div>
                        </div>
                        <!-- Code Skill Bar End -->

                        <!-- Writing Skill Bar -->
                        <div class="do-skillbar clearfix" data-percent="80">
                            <p class="do-skillbar-title">writing<span class="skill-bar-percent"></span></p>
                            <div class="do-skillbar-bar-wrapper">
                                <div class="do-skillbar-bar"></div>
                            </div>
                        </div>
                        <!-- Writing Skill Bar End -->

                        <!-- Photography Skill Bar -->
                        <div class="do-skillbar clearfix" data-percent="40">
                            <p class="do-skillbar-title">photography<span class="skill-bar-percent"></span></p>
                            <div class="do-skillbar-bar-wrapper">
                                <div class="do-skillbar-bar"></div>
                            </div>
                        </div>
                        <!-- Photography Skill Bar End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--================================
        PORTFOLIO SECTION 
    =================================-->
    <section class="do-portfolio-section do-section">
        <div class="container">
            <div class="row">
                <!-- SECTION HEADING -->
                <div class="do-section-heading">
                    <h1>WORK</h1>
                    <p class="do-section-subheading">OUR CREATIVE GALLERY</p>
                </div>
                <!-- SECTION HEADING END -->

                <!-- WORKS -->
                <div class="do-portfolio-works do-portfolio-one-px">
                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-2.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-2.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item do-height-dbl">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/woman-598313_1280.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/woman-598313_1280.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-5.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-5.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-3.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-3.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-4.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-4.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-6.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-6.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item do-width-dbl appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="do-work-item-inner-wrap">
                            <img src="images/portfolio-image/4.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/4.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                    <div class="do-work-item">
                        <div class="do-work-item-inner-wrap appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <img src="images/portfolio-image/work-1px-9.jpg" alt="">
                            <div class="do-work-item-hover">
                                <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                <div class="do-work-item-details">
                                    <h3 class="do-work-item-title">
                                        <a href="portfolio-single-one.html">paper glass</a>
                                    </h3>
                                    <span class="do-work-item-subtitle">design</span>
                                </div>
                                <a href="images/portfolio-image/work-1px-9.jpg" class="do-work-item-popup"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- WORKS END -->
            </div>
        </div>

        <a href="portfolio-1px.html" class="do-btn-round-outline">MORE</a>
    </section>
    <!-- PORTFOLIO SECTION END -->

    <!--================================
        TEAM SECTION
    =================================-->
    <section class="do-team-section do-section">
        <div class="container">
            <div class="row">
                <!-- SECTION HEADING -->
                <div class="do-section-heading">
                    <h1>our team</h1>
                    <p class="do-section-subheading">AWESOME CREATIVE TEAM</p>
                </div>
                <!-- SECTION HEADING END -->

                <!-- Teams -->
                <div class="do-team-members">
                	<div class="do-team-member">
                		<img src="images/team-1.png" alt="Member 1">
                		<div class="do-member-details">
                			<h3>
                				<a href="index.php#">Samuel Doe</a>
                			</h3>
                			<p>CEO</p>

                            <ul>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                		</div>
                	</div>

                	<div class="do-team-member">
                		<img src="images/team-2.png" alt="Member 2">
                		<div class="do-member-details">
                			<h3>
                				<a href="index.php#">John Doe</a>
                			</h3>
                			<p>Director</p>

                            <ul>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                		</div>
                	</div>

                	<div class="do-team-member">
                		<img src="images/team-3.png" alt="Member 3">
                		<div class="do-member-details">
                			<h3>
                				<a href="index.php#">DAVE WHITE</a>
                			</h3>
                			<p>Manager</p>

                            <ul>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                		</div>
                	</div>

                	<div class="do-team-member">
                		<img src="images/team-4.png" alt="Member 4">
                		<div class="do-member-details">
                			<h3>
                				<a href="index.php#">Jenny Doe</a>
                			</h3>
                			<p>Designer</p>

                            <ul>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                		</div>
                	</div>

                	<div class="do-team-member">
                		<img src="images/team-5.png" alt="Member 5">
                		<div class="do-member-details">
                			<h3>
                				<a href="index.php#">Sam Doe</a>
                			</h3>
                			<p>Developer</p>

                            <ul>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                		</div>
                	</div>
                </div>
                <!-- Teams END -->
            </div>
        </div>
    </section>
    <!-- TEAM SECTION END -->


    <!--================================
=======
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
        TESTIMONIAL SECTION
    =================================-->
    <section class="do-testimonial-section" data-stellar-background-ratio="0.5">
        <div class="do-dark-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- SECTION HEADING -->
                <div class="do-section-heading do-section-heading-light">
                    <h1>CLIENT SAYS</h1>
                </div>
                <!-- SECTION HEADING END -->

                <!-- Testimonial Slider -->
                <div id="do-testimonial-1st" class="owl-carousel do-testimonial">

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Like what you see? Buy this theme with the click of a button and let us know what you</p>
                        <span>ADRIAN</span>
                        <img src="images/signature-3.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature-2.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature-2.png" alt="">
                    </div>
                    <!-- Slides End -->
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </section>





    <!--================================
       CUSTOM SECTION  WITH IMAGE LEFT
    =================================-->
    <section class="do-custom-section-with-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 do-custom-sec-img appear fadeIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <img src="images/macbook-img.png" alt="">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 do-custom-sec-content">
                    <h3>EXTRA FEATURE</h3>
                    <p>No one rejects, dislikes, or avoids pleasure itself, because is counter because upon those who do not know how an puIse pleasure rationally encounter consequnce is Nor again is there anyone who loves</p>
                    <ul class="do-icon-list">
                        <li><i class="fa fa-angle-right"></i> Fresh clean theme for business or personal</li>
                        <li><i class="fa fa-angle-right"></i> Made with love and care for you</li>
                        <li><i class="fa fa-angle-right"></i> Pixel perfect coding done</li>
                    </ul>

<<<<<<< HEAD:index.php
                    <a href="index.php#" class="do-btn-round-solid">MORE</a>
=======
                    <a href="" class="do-btn-round-solid">MORE</a>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                </div>
            </div>
        </div>
    </section>


    <!--================================
        VIDEO SECTION
    =================================-->
    <section class="do-custom-video-section do-video-section do-section">
        <!-- Background Video -->
        <div class="do-custom-bg-video-wrapper">
            <video autoplay loop poster="images/poster.jpg" id="bgvid">
                <!-- <source src="video.webm" type="video/webm"> -->
                <source src="video.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Background Video End -->

        <div class="do-parallax-overlay"></div>

        <div class="do-custom-video-content-wrapper">
            <div class="container">
                <div class="row">
                    <h3>Welcome All</h3>
                    <p>On the other hand, we denounce with right ous indignation and dislike mens beguiled</p>
<<<<<<< HEAD:index.php
                    <a href="index.php#" class="do-btn-round-outline">PURCHASE</a>
=======
                    <a href="" class="do-btn-round-outline">PURCHASE</a>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO SECTION END-->

    <!--================================
        SOCIAL LINK SECTION
    =================================-->
    <section class="do-social-link-section">
        <div class="container">
            <div class="row">
<<<<<<< HEAD:index.php
                <a href="index.php#" class="do-facebook">
=======
                <a href="" class="do-facebook">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <span>
                        <i class="fa fa-facebook"></i>
                    </span>
                    FACEBOOK
                </a>
            
<<<<<<< HEAD:index.php
                <a href="index.php#" class="do-twitter">
=======
                <a href="" class="do-twitter">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <span>
                        <i class="fa fa-twitter"></i>
                    </span>
                    TWITTER
                </a>
            
<<<<<<< HEAD:index.php
                <a href="index.php#" class="do-vimeo">
=======
                <a href="" class="do-vimeo">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <span>
                        <i class="fa fa-vimeo-square"></i>
                    </span>
                    vImeo
                </a>
            
<<<<<<< HEAD:index.php
                <a href="index.php#" class="do-dribbble">
=======
                <a href="" class="do-dribbble">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <span>
                        <i class="fa fa-dribbble"></i>
                    </span>
                    dribble
                </a>
            
<<<<<<< HEAD:index.php
                <a href="index.php#" class="do-behance">
=======
                <a href="" class="do-behance">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                    <span>
                        <i class="fa fa-youtube"></i>
                    </span>
                    behance
                </a>
            </div>
        </div>
    </section>
    <!-- SOCIAL LINK SECTION END-->

    <!--================================
        FOOTER SECTION
    =================================-->
    <footer class="do-footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="do-footer-top">
                    <!-- About Widget -->
                    <div class="do-footer-widget do-footer-about-widget col-md-3 col-sm-6 col-xs-12">
                        <div class="do-footer-logo-wrapper">
<<<<<<< HEAD:index.php
                            <a href="index.php#">
=======
                            <a href="">
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                                <img src="images/logo-footer.png" alt="">
                            </a>
                        </div>

                        <div class="do-company-address">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Mlab East Africa, Bishop Magua, Ngong Rd, Nairobi, Kenya
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    +254 710 77 55 77
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    contact@bitcircuit.co
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- About Widget End -->

                    <!-- Link Widget -->
                    <div class="do-footer-widget do-footer-link-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">USEFUL LINKS</h3>
                        <ul>
<<<<<<< HEAD:index.php
                            <li><a href="index.php#">Account Create</a></li>
                            <li><a href="index.php#">Company Philoshophy</a></li>
                            <li><a href="index.php#">Corporate Culture</a></li>
                            <li><a href="index.php#">Portfolio</a></li>
                            <li><a href="index.php#">Client Management</a></li>
=======
                            <li><a href="">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Solutions</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Contact</a></li>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                        </ul>
                    </div>
                    <!-- Link Widget End -->

                    <!-- About Link Widget -->
                    <div class="do-footer-widget do-about-link-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">ABOUT OFFICE</h3>
                        <ul>
<<<<<<< HEAD:index.php
                            <li><a href="index.php#">About History</a></li>
                            <li><a href="index.php#">Company Philoshophy</a></li>
                            <li><a href="index.php#">Corporate Profile</a></li>
                            <li><a href="index.php#">Our Team</a></li>
                            <li><a href="index.php#">Somewhere in</a></li>
=======
                            <li><a href="">About History</a></li>
                            <li><a href="">Company Philoshophy</a></li>
                            <li><a href="">Corporate Profile</a></li>
                            <li><a href="">Our Team</a></li>
                            <li><a href="">Somewhere in</a></li>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                        </ul>
                    </div>
                    <!-- About Link Widget End -->

                    <!-- Flickr Widget -->
                    <div class="do-footer-widget do-flickr-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">flickr photo</h3>
                        <div id="flickr-gallery"></div>
                    </div>
                    <!-- Flickr Widget End -->
                </div>
                <!-- FOOTER TOP END -->

                <!-- FOOTER BOTTOM -->
                <div class="do-footer-bottom">
<<<<<<< HEAD:index.php
                    <a href="index.php#" class="do-footer-author-name">ThemebeER</a>
=======
                    <a href="/" class="do-footer-author-name">2015 &copy; BitCircuit</a>
>>>>>>> 1562355e347c75aded655336e646c03540876f62:index.html
                </div>
                <!-- FOOTER BOTTOM END -->
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->


        
		




	<!-- *******************************
                SCRIPTS
    ************************************ -->
    <!-- JQUERY -->    		
    <script src="js/jquery-1.11.3.min.js"></script>
    
    <!-- PLUGINS -->
    <script src="js/plugins.js"></script>

    <!-- CUSTOM SCRIPTS -->    
    <script src="js/main.js"></script>
              					
</body>
</html>
