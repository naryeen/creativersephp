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
                            <h2 class="title">Video Editing</h2>
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
                                <li><a href="graphic-design-branding.html">Graphic Design and Branding</a></li>
                                <li class="active"><a href="video-editing.html">Video Editing</a></li>
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
                                    <h3>Video Editing Services</h3>
                                    <p>At Creativerse, we specialize in transforming raw video footage into
                                        captivating, professional, and engaging content. Our team of skilled video
                                        editors in Bhutan is here to take your videos to the next level, ensuring
                                        they leave a lasting impression on your audience.</p>
                                </div>
                                <div class="padding_bottom20">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{asset('assets/images/services/disaster-response.jpg')}}" alt="services-1">
                                    </div>
                                </div>

                                <div class="padding_top30 ">
                                    <h3>Our Video Editing Services:</h3>
                                    <p>You are nothing witout your set eyes care set <strong>injury magna consectr
                                        </strong> elit, do eiusmod tempor incididunt or ut labore aree eyecare
                                        dolore aliqua. Utse set injury magna consectr.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{asset('assets/images/services/disaster-response-01.jpg')}}" alt="single-img-10">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <img class="img-fluid" src="{{asset('assets/images/services/disaster-response-02.jpg')}}" alt="single-img-11">
                                        </div>
                                    </div>
                                </div>
                                <div class="row padding_bottom30">
                                    <div class="col-md-12">
                                        <div class="accordion">
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#" class="active">1. Video
                                                        Editing and Post-Production:</a></div>
                                                <div class="toggle-content show">
                                                    <p>Our expert video editors have a keen eye for detail. We'll
                                                        refine your raw footage, add effects, transitions, and sound
                                                        enhancements to create a polished and seamless final
                                                        product.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">2. Video Montages:</a></div>
                                                <div class="toggle-content">
                                                    <p>Whether it's a memorable family event or a corporate
                                                        presentation, we'll create compelling video montages that
                                                        tell a cohesive and impactful story.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">3. Social Media Videos:</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <p>Enhance your social media presence with attention-grabbing
                                                        videos. We'll edit your content to be shareable and engaging
                                                        on platforms like Facebook, Instagram, and TikTok.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">4. Corporate Videos:</a></div>
                                                <div class="toggle-content">
                                                    <p>Make your corporate videos stand out with professional
                                                        editing. We'll create videos that effectively communicate
                                                        your company's message, brand, and goals.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">5. YouTube Video Editing:</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <p>For YouTubers and content creators, we offer editing that
                                                        optimizes your videos for YouTube's algorithm and viewer
                                                        retention.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">6. Video Effects and
                                                        Animation:</a></div>
                                                <div class="toggle-content">
                                                    <p>We can add visual effects, animations, and motion graphics to
                                                        make your videos more dynamic and visually appealing.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">7. Colour Correction and
                                                        Grading:</a></div>
                                                <div class="toggle-content">
                                                    <p>Ensure your videos have the right colour balance and mood
                                                        with our colour correction and grading services.</p>
                                                </div>
                                            </div><!-- toggle end -->
                                            <!-- toggle -->
                                            <div class="toggle ttm-toggle_style_classic style2 ttm-toggle-title-bgcolor-white">
                                                <div class="toggle-title"><a href="#">8. Transcription and
                                                        Subtitling:</a></div>
                                                <div class="toggle-content">
                                                    <p>We provide accurate transcriptions and subtitling services to
                                                        make your videos accessible to a wider audience.</p>
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