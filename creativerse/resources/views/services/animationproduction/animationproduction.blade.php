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
                            <h2 class="title">Animation Production</h2>
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
                                <li ><a href="{{route ('itservices')}}">IT Services</a></li>
                                <li ><a href="{{route ('creativecontentwriting')}}">Creative Content Writing</a></li>
                                <li ><a href="{{route ('videoproduction')}}">Video Production</a></li>
                                <li class="active"><a href="{{route ('animationproduction')}}">Animation Production</a></li>
                                <li><a href="{{route ('graphicdesignandbranding')}}">Graphic Design and Branding</a></li>
                                <li><a href="{{route ('videoediting')}}">Video Editing</a></li>
                                <li><a href="{{route ('digitalmarketing')}}">Digital Marketing</a></li>
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
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top10" href="{{route ('contactus')}}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
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
                                <div class="padding_bottom20">
                                    <h3>Animation</h3>
                                    <p>At Creativerse, we turn imagination into reality through our cutting-edge 2D and 3D animation services. We understand that in today's visually driven world, animation is a powerful tool that can be harnessed for a wide range of purposes, from captivating advertisements and advocacy videos to dynamic promotional content and even feature films. With a team of talented animators and state-of-the-art technology, we're here to bring your vision to life.</p>
                                </div>
                                <div class="padding_bottom20">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{asset('assets/images/services/civil-structure.jpg')}}" alt="services-1">
                                    </div>
                                </div>

                                <div class="padding_top30 ">
                                    <h3>Our Animation Services:</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{asset('assets/images/services/civil-structure-01.jpg')}}" alt="single-img-10">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{asset('assets/images/services/civil-structure-02.jpg')}}" alt="single-img-11" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row padding_bottom30">
                                    <div class="col-md-12">
                                        <div class="accordion">
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#" class="active">Character Animation:</a></div>
                                                <div class="toggle-content show">
                                                    <p>Create memorable characters that convey your brand message effectively. Design lifelike characters for games, films, and advertisements.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Animated Ads:</a></div>
                                                <div class="toggle-content">
                                                    <p>Make your brand unforgettable with animated advertisements that stand out from the competition.</p>
                                                    <p>From TV commercials to online promotions, our animations leave a lasting impact.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Advocacy Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Share your mission, cause, or campaign with the world through compelling advocacy videos that drive change.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Promotional Content:</a></div>
                                                <div class="toggle-content">
                                                    <p>Fuel your marketing campaigns with engaging promotional animations that grab your audience's attention.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">Feature Films:</a></div>
                                                <div class="toggle-content">
                                                    <p>From pre-production storyboarding to post-production editing, we offer end-to-end 2D and 3D animation services for feature films.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                        </div>
                                    </div>
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