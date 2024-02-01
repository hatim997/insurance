<!DOCTYPE html>
<html>
    
<head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')); ?>">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')); ?>">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/font-elegant/elegant.css')); ?>">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/owl.carousel.2/assets/owl.carousel.css')); ?>">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/theme.css')); ?>">

        <!--[if lt IE 9]>
        <script src="<?php echo e(asset('assets/plugins/iesupport/html5shiv.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/iesupport/respond.js')); ?>"></script>
        <![endif]-->
    </head>
    <body id="home">
        <!-- Preloader -->
        <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>	
        <!-- /.Preloader -->	


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 black-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <ul class="list-items fs-10">
                                    <li><a href="#price">sitemap</a></li>
                                    <li class="#price"><a href="#">Privacy</a></li>
                                    <li><a href="#price">Pricing</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> +880-1756-390-370 </span> </p>
                            </div>
                        </div>
                    </div>
                    <a href="/logg" class="sign-in fs-12 theme-clr-bg"> sign in </a>
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="#"> <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="dropdown active">
                                            <a href="#" >Home </a>                                                                                   
                                        </li>
                                        <li> <a href="#">about</a> </li>
                                        <li> <a href="#"> tracking </a> </li>
                                        <li> <a href="#price"> pricing </a> </li>
                                        <li> <a href="#"> contact </a> </li>
                                
                                        <li><span class="search fa fa-search theme-clr transition"> </span></li>
                                    </ul>                                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Banner -->
                <section class="banner mask-overlay pad-120 white-clr">
                    <div class="container theme-container rel-div">
                        <img class="pt-10 effect animated fadeInLeft" alt="" src="<?php echo e(asset('assets/img/icons/icon-1.png')); ?>" />
                        <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">   
                            <li><a href="#">fast</a></li>
                            <li><a href="#">secured</a></li>
                            <li><a href="#">worldwide</a></li>
                        </ul>
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Efficient Logistics, Protected Deliveries <br> <span class="theme-clr"> Safeguards Every  </span>  <span class="theme-clr"> Shipment</span> with Precision and Care </h2>
                    </div>
                    <div class="pad-50 visible-lg"></div>
                </section>
                <!-- /.Banner -->

                <!-- Track Product -->
                <section>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">     
                                <h2 class="title-1">track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </section>
                <!-- /.Track Product -->

                <!-- About Us -->
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us">
                                    <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam 
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
                                        tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="<?php echo e(asset('assets/img/icons/icon-2.png')); ?>" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast delivery</h2> 
                                                <p>Duis autem vel eum iriure dolor</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="<?php echo e(asset('assets/img/icons/icon-3.png')); ?>" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">secured service</h2> 
                                                <p>Duis autem vel eum iriure dolor in hendrerit</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="<?php echo e(asset('assets/img/icons/icon-4.png')); ?>" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">worldwide shipping</h2> 
                                                <p>Eum iriure dolor in hendrerit in vulputa</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="pb-80 visible-lg"></div>
                                <img alt="" src="<?php echo e(asset('assets/img/block/about-img.png')); ?>" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->


                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">                
                    <div class="theme-container container">               
                        <div class="row">
                               
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Order</h2> 
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Wait</h2> 
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Deliver</h2> 
                                    <p class="gray-clr">Duis autem vel eum iriur <br> hendrerit in vulputate</p>                                            
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="<?php echo e(asset('assets/img/block/step-img.png')); ?>" alt="" /> </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam <br>
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci <br>
                                        tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="<?php echo e(asset('assets/img/block/delivery.png')); ?>" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Product Delivery -->

                <!-- Testimonial -->
                <section class="testimonial mask-overlay">
                    <div class="theme-container container">               
                        <div class="testimonial-slider no-pagination pad-120">
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <img alt="" src="<?php echo e(asset('assets/img/block/testimonial-1.png')); ?>" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">  <i class="gray-clr fs-16">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla 
                                            <br> facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit 
                                            <br> augue duis dolore te feugait nulla facilisi.
                                        </i> </p>
                                    <h2 class="title-2 pt-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="white-clr fw-900"> Bushra Ahsani </a> </h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2">
                                    <img alt="" src="<?php echo e(asset('assets/img/block/testimonial-1.png')); ?>" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>  <i class="gray-clr fs-16">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla 
                                            <br> facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit 
                                            <br> augue duis dolore te feugait nulla facilisi.
                                        </i> </p>
                                    <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Bushra Ahsani </a> </h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2">
                                    <img alt="" src="<?php echo e(asset('assets/img/block/testimonial-1.png')); ?>" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>  <i class="gray-clr fs-16">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla 
                                            <br> facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit 
                                            <br> augue duis dolore te feugait nulla facilisi.
                                        </i> </p>
                                    <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Bushra Ahsani </a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Testimonial -->

                <!-- Pricing & Plans -->
                <section class="pricing-wrap pt-120" id="price">                
                    <div class="theme-container container">    
                        <span class="bg-text center wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Pricing </span>
                        <div class="title-wrap text-center  pb-50">
                            <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">Pricing & plans</h2>
                            <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">See our pricing & plans to get best service</p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36 sourceElement" id="sourceElement">$50</h2>
                                        <p>for single product</p>
                                        <div class="btn-1">basic</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr"> &LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#login-popup" data-toggle="modal" class="title-1 theme-clr" id="selectButton"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 active white-clr wow slideInUp" data-wow-offset="50" data-wow-delay=".25s">
                                <div class="pricing-box theme-clr-bg">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36 sourceElement" id="sourceElement">$250</h2>
                                        <p>for package product</p>
                                        <div class="btn-1 dark">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="white-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="white-clr">  all</span> </li>
                                            <li> duration: <span class="white-clr">7-14 days</span> </li>
                                            <li> support: <span class="white-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#login-popup" data-toggle="modal"class="title-1 white-clr" id="selectButton"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36" id="sourceElement">$150</h2>
                                        <p>for multiple product</p>
                                        <div class="btn-1">standard</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Product Weight: <span class="gray-clr">&LT; 3kg</span> </li>
                                            <li> Country: <span class="gray-clr">  all</span> </li>
                                            <li> duration: <span class="gray-clr">7-14 days</span> </li>
                                            <li> support: <span class="gray-clr">yes</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="#login-popup" data-toggle="modal" class="title-1 theme-clr" id="selectButton"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </section>
                <!-- /.Pricing & Plans -->

                <!-- Contact us -->
                <section class="contact-wrap pad-120">   
                    <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <div class="title-wrap">
                                    <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                                    <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easiky</p>
                                </div>
                                <ul class="contact-detail title-2">
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>uk numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>usa numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                                </ul>
                            </div>                        
                        </div>
                    </div>               
                </section>
                <!-- /.Contact us -->
            </article>
            <!-- /.Content Wrapper -->

            <!-- Footer -->
            <footer>
                <div class="footer-main pad-120 white-clr">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <a href="#"> <img class="logo" alt="#" src="<?php echo e(asset('assets/img/logo/logo-white.png')); ?>" />  </a>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">quick links</h2>
                                <ul>
                                    <li> <a href="#">sitemap</a> </li>
                                    <li> <a href="#">pricing</a> </li>
                                    <li> <a href="#">payment method</a> </li>
                                    <li> <a href="#">support</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">important links</h2>
                                <ul>
                                    <li> <a href="#">themeforest</a> </li>
                                    <li> <a href="#">envato</a> </li>
                                    <li> <a href="#">audiojungle</a> </li>
                                    <li> <a href="#">videohibe</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">get in touch</h2>
                                <ul class="social-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                                </ul>
                                <ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="<?php echo e(asset('assets/img/icons/payment-1.png')); ?>" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="<?php echo e(asset('assets/img/icons/payment-2.png')); ?>" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="<?php echo e(asset('assets/img/icons/payment-3.png')); ?>" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="<?php echo e(asset('assets/img/icons/payment-4.png')); ?>" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p> © Copyright 2016, All rights reserved </p>                            
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p> Design and <span class="theme-clr fa fa-heart"></span>  by <a href="#" class="main-clr"> jThemes Studio </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <h2 class="title-3" id="datas">      </h2>
                        <p> Sign in to <strong> Accord </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login" method="GET" action="/logg">
                                
                                <div class="form-group"><input type="text" placeholder="name" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="phone" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="adders" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="card num" class="form-control"></div>
                                <div class="form-group"><input type="date" placeholder="date exp" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="cvv" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1"> Sign in now </button>
                                </div>
                           
                           
                            </form>
                                                 
                        </div>                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="<?php echo e(asset('assets/js/jquery-2.2.4.min.js')); ?>" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="<?php echo e(asset('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')); ?>" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="<?php echo e(asset('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')); ?>" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="<?php echo e(asset('assets/plugins/owl.carousel.2/owl.carousel.min.js')); ?>" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
        <!-- Wow JS -->
        <script src="<?php echo e(asset('assets/plugins/WOW-master/dist/wow.min.js')); ?>" type="text/javascript"></script>
        <!-- Data binder -->
        <script src="<?php echo e(asset('assets/plugins/data.binder.js')); ?>/data.binder.js')}}" type="text/javascript"></script>

        <!-- Slider JS -->   
          <script > 
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with the class 'sourceElement'
            var sourceElements = document.getElementById('sourceElement');
            var selectButton = document.getElementById('selectButton');
            var displayElement = document.getElementById('datas');

            // Add click event listeners to each source element
            sourceElements.forEach(function (sourceElement) {
                sourceElement.addEventListener('click', function () {
                    // Get the selected text for the clicked source element
                    var selectedText = getSelectedText(sourceElement);

                    // Display the selected text in the display element
                    displayElement.textContent = selectedText;
                });
            });

            // Add click event listener to the button
            selectButton.addEventListener('click', function () {
                // Get the selected text for the first source element
                var selectedText = getSelectedText(sourceElements[0]);

                // Display the selected text in the display element
                displayElement.textContent =  selectedText;
            });

            // Function to get selected text from an element
            function getSelectedText(element) {
                var selectedText = '';

                if (window.getSelection) {
                    // For modern browsers
                    selectedText = window.getSelection().toString();
                } else if (document.selection && document.selection.type !== 'Control') {
                    // For older IE versions
                    selectedText = document.selection.createRange().text;
                }

                return selectedText;
            }
        });
    </script>

        <!-- Theme JS -->
        <script src="<?php echo e(asset('assets/js/theme.js')); ?>" type="text/javascript"></script>

    </body>


    </html>
<?php /**PATH D:\laravel\resources\views/index.blade.php ENDPATH**/ ?>