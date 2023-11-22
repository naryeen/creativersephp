<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
 <!--page start-->
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
                                <h2 class="title">Content Writing</h2>
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
                                    <li class="active"><a href="content-writing.html">Creative Content Writing</a></li>
                                    <li><a href="video-production.html">Video Production</a></li>
                                    <li><a href="animation-production.html">Animation Production</a></li>
                                    <li><a href="graphic-design-branding.html">Graphic Design and Branding</a></li>
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
                            
                            <aside class="widget contact-widget with-title widget_img_gellary clearfix">
                                <h2 class="title">Gallery</h2>
                                <ul>
                                    <li>
                                        <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto" rel="prettyPhoto[coregallery]" href="{{asset('assets/images/portfolio/post01.jpg')}}">
                                            <img class="img-fluid" src="images/portfolio/portfolio-01-150x150.jpg" alt=""></a>
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
                                    <div class="padding_bottom40">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid" src="{{asset('assets/images/services/house-extensions.jpg')}}" alt="services-1">
                                        </div>
                                    </div>
                                    <div>
                                        <p>At Creativerse, we are dedicated to helping your business communicate its message effectively through the power of words. Our team of skilled content writers in Bhutan understands the nuances of language, culture, and business, and we're here to create compelling content that captivates your audience and drives your success. <br>Our Content Writing Services:</p>
                                    </div>
                                    <div class="padding_top30 ">
                                        <h3>1. Script writing:</h3>
                                        <p>Lights, camera, action!  We understand the power of compelling narratives and the impact they can have on your brand and message. Our team of skilled scriptwriters specializes in crafting scripts and concepts for a wide range of content, including advertisements, advocacy campaigns, promotional videos, films, documentaries, and more. We're here to transform your ideas into captivating stories that engage, inspire, and drive results.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                                <img class="img-fluid" src="{{asset('assets/images/services/house-extensions-01.jpg')}}" alt="single-img-10">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                                <img class="img-fluid" src="{{asset('assets/images/services/house-extensions-02.jpg')}}" alt="single-img-11">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="padding_top30">
                                        <h3>2. Web Content Writing:</h3>
                                        <p>Your website is often the first point of contact with your audience. Our expert web content writers create engaging, SEO-optimized content that communicates your brand's message and attracts visitors.</p>
                                    </div>
                                    <div class="padding_top15">
                                        <h3>3. Blog Writing:</h3>
                                        <p>Consistent and informative blog posts can establish your authority in your industry. We provide well-researched, relevant, and engaging blog content that keeps your audience coming back for more.</p>
                                    </div>
                                    <div class="padding_top15">
                                        <h3>4. Social Media Content:</h3>
                                        <p>Engage your social media audience with fresh and engaging content. We create posts, tweets, and updates that reflect your brand's personality and create a buzz.</p>
                                    </div>
                                    <div class="padding_top15 ">
                                        <h3>5. E-commerce Product Descriptions:</h3>
                                        <p>Improve product sales with persuasive and accurate product descriptions. Our writers make your products stand out in a crowded marketplace.</p>
                                    </div>
                                    <div class="padding_top15 ">
                                        <h3>6. Email Marketing Content:</h3>
                                        <p>Our email marketing content drives engagement and conversions. We create attention-grabbing subject lines and persuasive email copy that converts readers into customers.</p>
                                    </div>
                                    <div class="padding_top15 ">
                                        <h3>7. Content Editing and Proofreading:</h3>
                                        <p>We offer meticulous content editing and proofreading services to ensure your existing content is error-free, clear, and well-polished.</p>
                                    </div>
                                    <div class="padding_top15 ">
                                        <h3>8. Business Proposals:</h3>
                                        <p>Make a compelling case for your business with our expertly crafted business proposals. We blend creativity and professionalism to win over clients and investors.</p>
                                    </div>
                                    <div class="padding_top15 padding_bottom30">
                                        <h3>9. Standard Operating Procedures (SOPs):</h3>
                                        <p>Ensure smooth operations and adherence to industry standards with our meticulously written SOPs. We make complex processes easy to understand and follow.</p>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
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