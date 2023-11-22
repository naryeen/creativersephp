<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
<!--page start-->
<div class="page ttm-sidebar-true">
    <!--header start-->
    @include('components.header')
    <!--header end-->
    <!-- page-title -->
    <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Graphic Design and Branding</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <!--site-main start-->
    <div class="site-main">
        <div class="ttm-row sidebar ttm-sidebar-left clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-left">
                        <aside class="widget widget-nav-menu">
                            <ul>
                                <li><a href="it-services.html">IT Services</a></li>
                                <li><a href="content-writing.html">Creative Content Writing</a></li>
                                <li><a href="video-production.html">Video Production</a></li>
                                <li><a href="civil-structure.html">Animation Production</a></li>
                                <li class="active"><a href="graphic-design-branding.html">Graphic Design and
                                        Branding</a></li>
                                <li><a href="video-editing.html">Video Editing</a></li>
                                <li><a href="digital-marketing.html">Digital Marketing</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-nine ttm-col-bgimage-yes ttm-bg">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="widget-banner-inner">
                                        <h3>Our Office Location</h3>
                                        <p>Zamdo Lam, Thimphu-Babesa Expressway, Changzamtog, Thimphu, Bhutan</p>
                                        <h3>Quick Contact Us</h3>
                                        <p class="mb-0">Email:info@example.com</p>
                                        <p>Call Us:>+975 17000000</p>
                                        <h3>Office Opening Hours</h3>
                                        <p class="mb-0">Monday - Saturday</p>
                                        <p>09:00 Am - 05:30 PM</p>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top10" href="contact-us.html">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        </aside>
                        <aside class="widget contact-widget with-title widget_img_gellary clearfix">
                            <h2 class="title">Gallery</h2>
                            <ul>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post01.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-01-150x150.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post02.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-02-150x150.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post03.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-03-150x150.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post04.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-04-150x150.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post05.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-05-150x150.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post06.jpg')}}">
                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-06-150x150.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <div class="padding_bottom50">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{asset('assets/images/services/multistory-build.jpg')}}" alt="services-1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>Graphic Design and Branding</h3>
                                        <p>At Creativerse, we believe in the power of visual storytelling. Our team
                                            of talented graphic designers and branding experts in Bhutan are
                                            committed to bringing your brand to life through innovative design
                                            solutions. We transform your ideas into captivating visuals that leave a
                                            lasting impression on your audience.</p>
                                        <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Get high quality custom graphics
                                                    designed</span></li>
                                            <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">The Ability to Delegate Tasks Robust
                                                    Quality</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid" src="{{asset('assets/images/services/multistory-build-01.jpg')}}" alt="services-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="padding_top30">
                                    <h3>Our Graphic Design and Branding Services:</h3>
                                    <p>You are nothing witout your set eyes care set injury <strong> magna consectr
                                            elit </strong> do eiusmod tempor incididunt or ut labore aree eyecare
                                        dolore aliqua.aliqua. Utse set injury magna consectr.</p>
                                </div>

                                <div class="padding_bottom20 padding_top15">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{asset('assets/images/services/multistory-build-02.jpg')}}" alt="services-1">
                                    </div>
                                </div>

                                <div class="row padding_bottom30">
                                    <div class="col-md-12">
                                        <div class="accordion">
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#" class="active">1. Logo
                                                        Design:</a></div>
                                                <div class="toggle-content show">
                                                    <p>Your logo is the face of your brand. Our logo designers
                                                        create unique, memorable, and visually appealing logos that
                                                        represent your brand's identity.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">2. Brand Identity
                                                        Development:</a></div>
                                                <div class="toggle-content">
                                                    <p>We work with you to define and refine your brand identity,
                                                        including colour schemes, typography, and visual elements
                                                        that resonate with your target audience.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">3. Marketing Collaterals:</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <p>Elevate your marketing efforts with professionally designed
                                                        collaterals. We create brochures, flyers, banners, and other
                                                        promotional materials that engage and inform your audience.
                                                    </p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">4. Packaging Design:</a></div>
                                                <div class="toggle-content">
                                                    <p>Stand out on the shelves with eye-catching packaging. Our
                                                        designers create packaging that not only protects your
                                                        products but also tells a compelling story.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">5. Website Design:</a></div>
                                                <div class="toggle-content">
                                                    <p>Your website is often the first point of contact with
                                                        customers. We design user-friendly, visually appealing
                                                        websites that reflect your brand and convert visitors into
                                                        customers.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">6. Social Media Graphics:</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <p>Make a strong online presence with visually appealing social
                                                        media graphics. We create customized graphics for your
                                                        social media profiles that engage and captivate your
                                                        audience.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">7. Infographics:</a></div>
                                                <div class="toggle-content">
                                                    <p>Simplify complex information with compelling infographics. We
                                                        design visuals that convey data and insights in an
                                                        easy-to-understand format.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">8. Branding Consultation:</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <p>Our branding experts work with you to define your brand's
                                                        core values and messaging, ensuring a consistent and
                                                        impactful brand presence.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">9. Print and Digital
                                                        Advertisements:</a></div>
                                                <div class="toggle-content">
                                                    <p>Whether it's print or digital advertising, our designers
                                                        craft compelling advertisements that make your brand shine
                                                        and drive results.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>
    <!--site-main end-->
    <!--footer start-->
    @include('components.footer')

    <!--footer end-->
    <!--back-to-top start-->
    
    <!--back-to-top end-->
</div><!-- page end -->
<!-- <h6>Home : {{ Auth::user()->name }}</h6> -->
@endsection