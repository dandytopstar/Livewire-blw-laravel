@extends('layouts.front')

@section('content')
    <!--
    Header
    =============================================
    -->
    <header class="header header-transparent header-sticky">
        <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
            <div class="container">
                <a class="logo navbar-brand" href="index.html">
                    <img class="logo logo-dark" src="{{'front/assets/images/logo/logo.png'}}" alt="Appzy Logo"/>
                    <img class="logo logo-light" src="{{'front/assets/images/logo/logo.png'}}" alt="Appzy Logo"/>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a class="nav-link" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#features">features</a></li>
                        <li class="nav-item"><a class="nav-link" href="#screenshots">screenshots</a></li>
                        <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing </a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li>
                    </ul>
                    <div class="module-container">
                        <!--module-btn-->
                        <div class="module module-cta"><a class="btn scroll-to" href="#download"> <span>free trial</span></a></div>
                    </div>
                    <!-- End Module Container  -->
                </div>
                <!-- End .nav-collapse-->
            </div>
            <!-- End .container-->
        </nav>
        <!-- End .navbar-->
    </header>
    <!--
    Hero Section
    =============================================
    -->
    <section class="hero hero-lead hero-lead-1 bg-gray" id="hero">
        <div class="hero-cotainer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                        <div class="hero-content">
                            <h1 class="hero-title">Awesome App for Your Financial. </h1>
                            <p class="hero-desc">This should be used to tell a story and let your users know a little more about app and it’s use, How can benefit them.</p>
                            <div class="hero-action"><a class="btn btn--primary scroll-to" href="#download">download App</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="hero-img"> <img src="{{'front/assets/images/hero/hero.png'}}" alt="image"/></div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .container--><div class="shape-divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <!-- End .hero-container-->
    </section>
    <!--
    Featured Section
    =============================================
    -->
    <section class="features text-center pt-50" id="features">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading heading-2 text-center">
                        <p class="heading-subtitle">Our Future</p>
                        <h2 class="heading-title">Easy to Manage Your All payments by Our App</h2>
                    </div>
                </div>
                <!-- End .col-lg-6 -->
            </div>
            <!-- End .row  -->
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{'front/assets/images/icons/icon-features-1.png'}}" alt="Icon"/></div>
                        <div class="feature-content">
                            <h3>Expense Trackering</h3>
                            <p>We use an application designed a testing gnose to keep away </p>
                        </div>
                    </div>
                    <!-- End .feature-card -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="feature-card active">
                        <div class="feature-icon"><img src="{{'front/assets/images/icons/icon-features-2.png'}}" alt="Icon"/></div>
                        <div class="feature-content">
                            <h3>Finance Snapshot</h3>
                            <p>We use an application designed a testing gnose to keep away</p>
                        </div>
                    </div>
                    <!-- End .feature-card -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon"><img src="{{'front/assets/images/icons/icon-features-3.png'}}" alt="Icon"/></div>
                        <div class="feature-content">
                            <h3>Support 24/24</h3>
                            <p>We use an application designed a testing gnose to keep away</p>
                        </div>
                    </div>
                    <!-- End .feature-card -->
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    About Section
    =============================================
    -->
    <section class="about bg-gray" id="about">
        <div class="container">
            <div class="row align-items-center text-center-xs">
                <div class="col-12 col-md-6 col-lg-6"><img class="img-fluid mb-5" src="{{'front/assets/images/screenshots/about.png'}}" alt="App screenshot"/></div>
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                    <div class="heading heading-1">
                        <p class="heading-subtitle">Saving Money</p>
                        <h2 class="heading-title">Best Financing App to save your money</h2>
                        <p class="heading-desc">Best financing app ever in the world. Easy to use and very user friendly for mobile banking. You can control your card easily and send money some one just one click.</p>
                    </div>
                    <div class="about-action"><a class="btn btn--primary" href="javascript:void(0)">Read More</a></div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    Processes Section
    =============================================
    -->
    <section class="processes text-center" id="processes">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">How it Works</p>
                        <h2 class="heading-title">Grow up your Money Saving</h2>
                        <div class="divider">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6 -->
            </div>
            <!-- End .row  -->
            <div class="row">
                <!-- Panel #1  -->
                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-1">
                        <div class="process-content">
                            <div class="process-phase">
                                <p>1</p>
                            </div>
                            <h3 class="process-title">Install the App</h3>
                            <p class="process-desc">We use a customized application specifically designed  </p>
                        </div>
                    </div>
                    <!-- End .process-card -->
                </div>
                <!-- End .col-12-->
                <!-- Panel #2-->
                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-2">
                        <div class="process-content">
                            <div class="process-phase">
                                <p>2</p>
                            </div>
                            <h3 class="process-title">Setup your profile</h3>
                            <p class="process-desc">We use a customized application specifically designed  </p>
                        </div>
                    </div>
                    <!-- End .process-card -->
                </div>
                <!-- End .col-12-->
                <!-- Panel #3-->
                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-3">
                        <div class="process-content">
                            <div class="process-phase">
                                <p>3</p>
                            </div>
                            <h3 class="process-title">Enjoy the features!</h3>
                            <p class="process-desc">We use a customized application specifically designed  </p>
                        </div>
                    </div>
                    <!-- End .process-card -->
                </div>
                <!-- End .col-12-->
            </div>
            <!-- End .row  -->
        </div>
        <!-- End .container-->
    </section>
    <!--
    Screenshots Section
    =============================================
    -->
    <section class="screenshots screenshots-1 bg-gray" id="screenshots">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="heading heading-5 text-center">
                        <p class="heading-subtitle">screenshots</p>
                        <h2 class="heading-title">Simple & Beautiful Interface</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="screenshot-warp">
                        <div class="owl-carousel carousel-navs" data-slide="5" data-slide-rs="3" data-autoplay="true" data-nav="true" data-dots="false" data-center="true" data-space="-20" data-loop="true">
                            <img src="{{'front/assets/images/screenshots/1.png'}}" alt="screenshot"/>
                            <img src="{{'front/assets/images/screenshots/2.png'}}" alt="screenshot"/>
                            <img src="{{'front/assets/images/screenshots/3.png'}}" alt="screenshot"/>
                            <img src="{{'front/assets/images/screenshots/4.png'}}" alt="screenshot"/>
                            <img src="{{'front/assets/images/screenshots/5.png'}}" alt="screenshot"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    Video Section
    =============================================
    -->
    <section class="video" id="video">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading text-center">
                        <p class="heading-subtitle">video demo</p>
                        <h2 class="heading-title">Whatever the challenge, we Deliver a solution.</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="player">
                        <div class="img-holder bg-overlay bg-overlay-dark">
                            <div class="bg-section"><img src="{{'front/assets/images/video/1.png'}}" alt="video image"/></div>
                        </div>
                        <div class="shape-top"> <img src="{{'front/assets/images/video/top-right.png'}}" alt="video shape"/></div>
                        <div class="shape-bottom"><img src="{{'front/assets/images/video/bottom-left.png'}}" alt="video shape"/></div><a class="btn-video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="29" viewBox="0 0 22 29">
                                <path id="Polygon_4" data-name="Polygon 3" d="M12,3.8A3,3,0,0,1,17,3.8l8.93,13.549A3,3,0,0,1,23.43,22H5.57a3,3,0,0,1-2.5-4.651Z" transform="translate(24) rotate(90)"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    Testimonials Section
    =============================================
    -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">
                        <p class="heading-subtitle">user review </p>
                        <h2 class="heading-title">What clients say about <Br> Our App after use it</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="owl-thumbs testimonials-customers-container" data-slider-id="1">
                        <div class="author-img owl-thumb-item"><img src="{{'front/assets/images/testimonials/1.png'}}" alt="avatar author"/></div>
                        <div class="author-img owl-thumb-item"><img src="{{'front/assets/images/testimonials/2.png'}}" alt="avatar author"/></div>
                        <div class="author-img owl-thumb-item active"><img src="{{'front/assets/images/testimonials/3.png'}}" alt="avatar author"/></div>
                        <div class="author-img owl-thumb-item"><img src="{{'front/assets/images/testimonials/4.png'}}" alt="avatar author"/></div>
                        <div class="author-img owl-thumb-item"><img src="{{'front/assets/images/testimonials/5.png'}}" alt="avatar author"/></div>
                    </div>
                </div>
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="owl-carousel carousel-navs" data-slider-id="1" data-slide="1" data-slide-res="1" data-center="true" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">markin nesus</h4>
                                <p class="testimonial-title">ios developer</p>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">Vera Duncan</h4>
                                <p class="testimonial-title">flutter developer</p>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">Pirtle Karol</h4>
                                <p class="testimonial-title">Android developer</p>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">Mark Joe</h4>
                                <p class="testimonial-title">react developer</p>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">Leila Domniuc</h4>
                                <p class="testimonial-title">Angular developer</p>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-body">
                                <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                                <h4 class="testimonial-name">Vera markin</h4>
                                <p class="testimonial-title">vue developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!--
    Pricing Table Section
    =============================================
    -->
    <section class="pricing bg-gray" id="pricing">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 ">
                    <div class="heading heading-6 text-center">
                        <p class="heading-subtitle">pricing</p>
                        <h2 class="heading-title">Get in Reasonable Price</h2>
                    </div>
                </div>
                <!-- End .col-lg-6 -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pricing-switcher">
                        <input id="monthly" type="checkbox"/>
                        <input id="yearly" type="checkbox"/>
                        <label class="type active" for="monthly">bill monthly</label>
                        <div class="indicator"><span class="ball monthly"></span></div>
                        <label class="type" for="yearly">bill annualy</label>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="pricing-container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="pricing-table">
                            <!-- Start Pricing Card #1 -->
                            <div class="pricing-card monthly visible">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 20</p>
                                        <p class="per">/per month</p>
                                    </div>
                                    <h6 class="pricing-name">basic</h6>
                                    <p class="pricing-desc">For beginner who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card-->
                            <!-- Start Pricing Card #1 -->
                            <div class="pricing-card yearly hidden">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 120</p>
                                        <p class="per">/per year</p>
                                    </div>
                                    <h6 class="pricing-name">basic</h6>
                                    <p class="pricing-desc">For professionals who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card-->
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-table">
                            <!-- Start Pricing Card #2-->
                            <div class="pricing-card monthly visible active">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 50</p>
                                        <p class="per">/per month</p>
                                    </div>
                                    <h6 class="pricing-name">standard</h6>
                                    <p class="pricing-desc">For agencies who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card -->
                            <!-- Start Pricing Card #2-->
                            <div class="pricing-card yearly hidden active">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 150</p>
                                        <p class="per">/per year</p>
                                    </div>
                                    <h6 class="pricing-name">standard</h6>
                                    <p class="pricing-desc">For professionals who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="pricing-table">
                            <!-- Start Pricing Card #3-->
                            <div class="pricing-card monthly visible">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 100</p>
                                        <p class="per">/per month</p>
                                    </div>
                                    <h6 class="pricing-name">premium</h6>
                                    <p class="pricing-desc">For professionals who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card-->
                            <!-- Start Pricing Card #3-->
                            <div class="pricing-card yearly hidden">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-type">
                                        <p class="price"> 500</p>
                                        <p class="per">/per year</p>
                                    </div>
                                    <h6 class="pricing-name">premium</h6>
                                    <p class="pricing-desc">For professionals who want to scale business globaly</p>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li class="active"><i class="fas fa-bookmark"></i><span>expense management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Card management</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Instant statistics</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>Bookmark function</span></li>
                                        <li class="active"><i class="fas fa-bookmark"></i><span>accounting system</span></li>
                                    </ul><a class="btn btn--secondary btn--bordered" href="javascript:void(0)">get started</a>
                                </div>
                            </div>
                            <!-- End .pricing-card-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .pricing-container-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    Blog Section
    =============================================
    -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading text-center">
                        <p class="heading-subtitle">Innovation and Quality Improvement</p>
                        <h2 class="heading-title">Latest updates, Solutions And company news</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img"><a href="javascript:void(0)"><img src="{{'front/assets/images/blog/1.png'}}" alt="blog image"/></a></div>
                        <div class="blog-content">
                            <div class="blog-meta-container">
                                <div class="meta-date"> <span>20 August 2020</span></div>
                                <div class="meta-time"><span>1 min read</span></div>
                            </div>
                            <h3 class="blog-title"><a href="javascript:void(0)">Four ways to cheer yourself up on Blue Monday!</a></h3>
                            <p class="blog-desc">On the second edition of Serious Business, Inc. editor Jim Ledbetter and Fusion senior editor Salmon debate...</p>
                            <div class="read-more"><a href="javascript:void(0)">	<span>read more</span><i class="fas fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img"><a href="javascript:void(0)"><img src="{{'front/assets/images/blog/2.png'}}" alt="blog image"/></a></div>
                        <div class="blog-content">
                            <div class="blog-meta-container">
                                <div class="meta-date"> <span>1 october 2020</span></div>
                                <div class="meta-time"><span>3 min read</span></div>
                            </div>
                            <h3 class="blog-title"><a href="javascript:void(0)">How to Organize Your budget for Maximum Productivity?</a></h3>
                            <p class="blog-desc">Global provider connected products for consumers, and enterprises worldwide, supply chain control is everything...</p>
                            <div class="read-more"><a href="javascript:void(0)">	<span>read more</span><i class="fas fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img"><a href="javascript:void(0)"><img src="{{'front/assets/images/blog/3.png'}}" alt="blog image"/></a></div>
                        <div class="blog-content">
                            <div class="blog-meta-container">
                                <div class="meta-date"> <span>10 december 2020</span></div>
                                <div class="meta-time"><span>4 min read</span></div>
                            </div>
                            <h3 class="blog-title"><a href="javascript:void(0)">Should Small Businesses Be Entitled to system?</a></h3>
                            <p class="blog-desc">Our team provides skilled &amp; experienced managers who know the intricacies of this vertical and focus...</p>
                            <div class="read-more"><a href="javascript:void(0)">	<span>read more</span><i class="fas fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    Download Section
    =============================================
    -->
    <section class="download" id="download">
        <div class="download-overlay">
            <div class="bg-section"> <img src="{{'front/assets/images/background/bg-download.png'}}" alt="Background"/></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-light text-center">
                        <h2 class="heading-title">Download App Now <Br> And save your money</h2>
                        <p class="heading-desc">Serving an impressive list of long-term money with experience and expertise in multiple industries.</p>
                    </div>
                    <div class="download-action"><a class="btn btn--white btn-bg ios-store-dark" href="javascript:void(0)"></a><a class="btn btn--white btn-bg g-play-dark" href="javascript:void(0)"></a></div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    CTA Section
    =============================================
    -->
    <section class="cta" id="action">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="heading text-center">
                        <p class="heading-subtitle">Have a questation</p>
                        <h2 class="heading-title">Get in touch</h2>
                    </div>
                    <form class="contactForm" method="post" action="assets/php/contact.php">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input class="form-control" type="text" id="#contact-name" name="contact-name" placeholder="Name" required=""/>
                            </div>
                            <div class="col-12 col-md-6">
                                <input class="form-control" type="email" id="#contact-email" name="contact-email" placeholder="Email" required=""/>
                            </div>
                            <div class="col-12 col-md-6">
                                <input class="form-control" type="text" id="#contact-phone" name="contact-phone" placeholder="Phone" required=""/>
                            </div>
                            <div class="col-12 col-md-6">
                                <input class="form-control" type="text" id="#contact-company" name="contact-company" placeholder="Company" required=""/>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="contact-infos" placeholder="request details" name="contact-infos" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn--secondary">send message</button>
                            </div>
                            <div class="col-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End .col-12-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    Footer
    =============================================
    -->
    <footer class="footer bg-secondary" id="footer">
        <div class="bg-section"> <img src="{{'front/assets/images/background/bg-footer.png'}}" alt="background"/></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget widget-about">
                            <h4 class="widget-title">About App</h4>
                            <p>This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                            <div class="footer-social"><span>follow us</span>
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="footer-widget widget-links">
                            <h4 class="widget-title">quick links </h4>
                            <ul class="list-unstyled">
                                <li> <a href="javascript:void(0)">home</a></li>
                                <li> <a href="javascript:void(0)">features</a></li>
                                <li> <a href="javascript:void(0)">how to work</a></li>
                                <li> <a href="javascript:void(0)">screenshots</a></li>
                                <li> <a href="javascript:void(0)">pricing</a></li>
                                <li> <a href="javascript:void(0)">blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="footer-widget widget-links">
                            <h4 class="widget-title">help</h4>
                            <ul class="list-unstyled">
                                <li> <a href="javascript:void(0)">about us</a></li>
                                <li> <a href="javascript:void(0)">partners</a></li>
                                <li> <a href="javascript:void(0)">career</a></li>
                                <li> <a href="javascript:void(0)">reviews</a></li>
                                <li> <a href="javascript:void(0)">terms & conditions</a></li>
                                <li> <a href="javascript:void(0)">help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget widget-newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>subscribe with email and loads of news will be sent to you </p>
                            <div class="form-mailchimp">
                                <form class="mb-0 form-action mailchimp">
                                    <div class="input-group">
                                        <div class="input-icon">
                                            <input class="form-control" type="email" placeholder="Enter Your E-mail" required="required"/>
                                        </div>
                                        <button class="btn btn--primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.504" height="26.305" viewBox="0 0 15.504 26.305">
                                                <path id="Icon" d="M581.84,3436.451l2.365-2.351,13.139,13.152L584.191,3460.4l-2.352-2.351,10.8-10.8Z" transform="translate(-581.84 -3434.1)" fill="#fff"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <!--  End .input-group-->
                                </form>
                                <div class="subscribe-alert"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr/>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copyright"><span>2021 &copy; <a href="http://themeforest.net/user/zytheme/portfolio?ref=zytheme">zytheme</a>. All rights reserved.</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container  -->
    </footer>
@endsection