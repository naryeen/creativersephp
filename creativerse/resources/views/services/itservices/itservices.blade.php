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
                                <h2 class="title">IT Services</h2>
                            </div>
                            <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">
                                        <i class="themifyicon ti-home"></i> &nbsp;
                                        Home</a>
                                </span>
                                <span>Services | </span>
                                <span>IT Services</span>
                            </div> -->
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
                                    <li class="active"><a href="it-services.html">IT Services</a></li>
                                    <li><a href="content-writing.html">Creative Content Writing</a></li>
                                    <li><a href="video-production.html">Video Production</a></li>
                                    <li><a href="civil-structure.html">Animation Production</a></li>
                                    <li><a href="graphic-design-branding.html">Graphic Design and Branding</a></li>
                                    <li><a href="video-editing.html">Video Editing</a></li>
                                    <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget-banner">
                                <div
                                    class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-nine ttm-col-bgimage-yes ttm-bg">
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
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top10"
                                                href="contact-us.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>

                            <aside class="widget contact-widget with-title widget_img_gellary clearfix">
                                <h2 class="title">Gallery</h2>
                                <ul>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post01.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-01-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post02.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-02-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post03.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-03-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post04.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-04-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post05.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-05-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                            rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post06.jpg')}}">
                                            <img class="img-fluid" src="{{asset('assets/images/portfolio/portfolio-06-150x150.jpg')}}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-8 content-area">
                            <div class="ttm-service-single-content-area">
                                <div class="ttm-service-description">
                                    <div class="padding_bottom20">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid" src="{{asset('assets/images/services/general-builder.jpg')}}"
                                                alt="services-1">
                                        </div>
                                    </div>
                                    <div class="padding_top30">
                                        <p>At Creativerse, we offer a comprehensive range of IT services designed to
                                            streamline your business operations, enhance efficiency, and ensure your
                                            technology infrastructure aligns with your strategic goals. Our team of
                                            highly skilled IT professionals in Bhutan is dedicated to delivering
                                            top-notch services tailored to your specific needs.</p>
                                    </div>

                                    <div class="padding_top30">
                                        <h3>1. Managed IT Services:</h3>
                                        <p>Leave the management of your IT infrastructure to us. Our experts will ensure
                                            your systems are secure, up-to-date, and running smoothly. Focus on your
                                            core business while we handle the technical details.</p>
                                    </div>
                                    <div class="padding_top30 padding_bottom30">
                                        <h3>2. IT Consulting:</h3>
                                        <p>Gain a competitive edge with our IT consulting services. We'll assess your
                                            current IT environment, provide recommendations, and create a roadmap to
                                            optimize your technology investment.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ttm-tabs ttm-tab-style-vertical" data-effect="fadeIn">
                                                <ul class="tabs clearfix">
                                                    <li class="tab active">
                                                        <div class="d-inline-block">
                                                            <div class="ttm-tabs-icon">
                                                                <i class="fa fa-bullseye"></i>
                                                            </div>
                                                            <div class="ttm-tabs-title">
                                                                <h3>Beyond Your <br> Expect</h3>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tab">
                                                        <div class="ttm-tabs-icon">
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                        </div>
                                                        <div class="ttm-tabs-title">
                                                            <h3>Quality <br> Materials</h3>
                                                        </div>
                                                    </li>
                                                    <li class="tab">
                                                        <div class="ttm-tabs-icon">
                                                            <i class="fa fa-shield"></i>
                                                        </div>
                                                        <div class="ttm-tabs-title">
                                                            <h3>Better <br> Security</h3>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="content-tab">
                                                    <!-- content-inner -->
                                                    <div class="content-inner active">
                                                        <img class="img-fluid"
                                                            src="{{asset('assets/images/portfolio/portfolio-tab-01.jpg')}}" alt="tab-img">
                                                    </div><!-- content-inner end-->
                                                    <!-- content-inner -->
                                                    <div class="content-inner">
                                                        <img class="img-fluid"
                                                            src="{{asset('assets/images/portfolio/portfolio-tab-02.jpg')}}" alt="tab-img2">
                                                    </div><!-- content-inner end-->
                                                    <!-- content-inner -->
                                                    <div class="content-inner">
                                                        <img class="img-fluid"
                                                            src="{{asset('assets/images/portfolio/portfolio-tab-03.jpg')}}" alt="tab-img3">
                                                    </div><!-- content-inner end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding_top30 ">
                                        <h3>3. Network Setup and Maintenance:</h3>
                                        <p>Efficient and reliable network infrastructure is crucial. We offer network
                                            design, installation, and ongoing maintenance services to keep your
                                            operations connected and secure.</p>
                                    </div>
                                    <div class="padding_top30 ">
                                        <h3>4. Cloud Solutions:</h3>
                                        <p>Harness the power of the cloud with our tailored solutions. We provide cloud
                                            migration, hosting, and management to improve accessibility and scalability
                                            while reducing costs.</p>
                                    </div>
                                    <div class="padding_top30 ">
                                        <h3>5. Cybersecurity Services:</h3>
                                        <p>Protect your data and operations from cyber threats. Our cybersecurity
                                            services include risk assessments, data protection, threat monitoring, and
                                            employee training.</p>
                                    </div>
                                    <div class="padding_top30 ">
                                        <h3>6. Software Development:</h3>
                                        <p>Custom software solutions built to your specifications. We develop web and
                                            mobile applications, ensuring they are user-friendly, scalable, and capable
                                            of meeting your business requirements.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-12">
                                                    <div
                                                        class="featured-icon-box style5  icon-align-before-content padding_top10 padding_right30 margin_right15">
                                                        <div class="featured-icon">
                                                            <div
                                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                                <i class="fa fa-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3><a href="#">Maintainability</a></h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>The software should evolve to meet the changing
                                                                    demands of the clients.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div
                                                        class="featured-icon-box style5  icon-align-before-content padding_top10 padding_right20">
                                                        <div class="featured-icon">
                                                            <div
                                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                                <i class="fa fa-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3><a href="#">Dependability</a></h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>It should never cause any physical or economic damage
                                                                    at the time of system failure.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div
                                                        class="featured-icon-box style5  icon-align-before-content padding_top10 padding_right30 margin_right15">
                                                        <div class="featured-icon">
                                                            <div
                                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                                <i class="fa fa-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3><a href="#">Efficiency</a></h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>The software application should overuse system
                                                                    resources like memory and processor cycle.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div
                                                        class="featured-icon-box style5  icon-align-before-content padding_top10 padding_right20 ">
                                                        <div class="featured-icon">
                                                            <div
                                                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                                <i class="fa fa-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3><a href="#"> Usability</a></h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>The software application should have specific UI and
                                                                    documentation.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding_top30">
                                        <h3>7. Data Backup and Recovery:</h3>
                                        <p>Don't leave your data vulnerable. We implement robust backup and disaster
                                            recovery solutions to safeguard your critical information.</p>
                                    </div>
                                    <div class="padding_top30">
                                        <h3>8. IT Support and Helpdesk:</h3>
                                        <p>Our responsive IT support and helpdesk teams are available to assist with
                                            technical issues, ensuring minimal disruption to your business.</p>
                                    </div>
                                    <div class="padding_top30 padding_bottom50">
                                        <h3>9. IT Infrastructure Upgrades:</h3>
                                        <p>Keep your IT infrastructure current with our upgrade services. We'll help you
                                            adapt to new technologies and scale your operations.</p>
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
      
        <!--back-to-top end-->
    </div><!-- page end -->
<!-- <h6>Home : {{ Auth::user()->name }}</h6> -->
@endsection