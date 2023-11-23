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
                            <h2 class="title">Video Production</h2>
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
                                <li><a href="{{route ('itservices')}}">IT Services</a></li>
                                <li><a href="{{route ('creativecontentwriting')}}">Creative Content Writing</a></li>
                                <li class="active"><a href="{{route ('videoproduction')}}">Video Production</a></li>
                                <li><a href="{{route ('animationproduction')}}">Animation Production</a></li>
                                <li><a href="{{route ('graphicdesignandbranding')}}">Graphic Design and Branding</a>
                                </li>
                                <li><a href="{{route ('videoediting')}}">Video Editing</a></li>
                                <li><a href="{{route ('digitalmarketing')}}">Digital Marketing</a></li>
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
                                            href="{{route ('contactus')}}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget contact-widget with-title widget_img_gellary clearfix">
                            <h2 class="title">Gallery</h2>
                            <ul>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('asset/images/portfolio/post01.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('asset/images/portfolio/portfolio-01-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('asset/images/portfolio/post02.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('asset/images/portfolio/portfolio-02-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('asset/images/portfolio/post03.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('asset/images/portfolio/portfolio-03-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('asset/images/portfolio/post04.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('asset/images/portfolio/portfolio-04-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('assets/images/portfolio/post05.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('assets/images/portfolio/portfolio-05-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a class="ttm_prettyphoto " title="general-builder" data-rel="prettyPhoto"
                                        rel="prettyPhoto[coregallery]"
                                        href="{{asset('assets/images/portfolio/post06.jpg')}}">
                                        <img class="img-fluid"
                                            src="{{asset('assets/images/portfolio/portfolio-06-150x150.jpg')}}"
                                            alt=""></a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <div class="padding_bottom50">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid"
                                            src="{{asset('assets/images/services/electrical-services.jpg')}}"
                                            alt="services-1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h3>Video Production</h3>
                                        <p>We have an expert team of videographers, editors, and creative minds in
                                            Bhutan to bring your vision to life. From conceptualization to
                                            post-production, we provide top-notch video production services that
                                            engage, inspire, and captivate your audience.</p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid"
                                                src="{{asset('assets/images/services/electrical-services-01.jpg')}}"
                                                alt="services-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="padding_top30">
                                    <h3>Our Video Production Services:</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="accordion">
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#" class="active">Corporate
                                                        Videos:</a></div>
                                                <div class="toggle-content show">
                                                    <p>Showcase your brand's story, products, and services with
                                                        professional corporate videos. We create compelling visuals
                                                        that build trust and credibility.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Marketing and Promotional
                                                        Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Elevate your marketing campaigns with attention-grabbing
                                                        promotional videos. We tailor content to target your
                                                        audience and boost conversions.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Explainer Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Simplify complex ideas and concepts with animated or
                                                        live-action explainer videos. We help your audience
                                                        understand your products and services effortlessly.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Event Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Capture the essence of your events with our event videography
                                                        services. Whether it's a conference, seminar, or special
                                                        occasion, we ensure no moment is missed.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Training and Educational
                                                        Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Simplify training and education with engaging video content.
                                                        We create instructional videos that are easy to follow and
                                                        understand.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Drone Videography:</a></div>
                                                <div class="toggle-content">
                                                    <p>Experience a unique perspective with our drone videography
                                                        services. We provide stunning aerial shots to add depth and
                                                        uniqueness to your videos.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div
                                                class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Video Editing and
                                                        Post-Production:</a></div>
                                                <div class="toggle-content">
                                                    <p>Our skilled video editors refine and perfect your footage,
                                                        ensuring a polished final product that tells your story
                                                        effectively.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                        </div>
                                    </div>
                                </div>

                                <div class="padding_bottom30 padding_top30">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid"
                                            src="{{asset('assets/images/services/electrical-services-02.jpg')}}"
                                            alt="services-1">
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
{{--
<!-- <h6>Home : {{ Auth::user()->name }}</h6> --> --}}
@endsection