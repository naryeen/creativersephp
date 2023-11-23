<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
<!--page start-->
<div class="page">
    <!--header start-->
    @include('components.header')
    <!--header end-->
    <!-- page-title -->
    <div class="ttm-page-title ttm-bg clearfix" style="background-image: url('{{ asset('assets/images/aboutus.jpg') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <!--site-main start-->
    <div class="site-main">
        <!-- about-section -->
        <section class="ttm-row about-section clearfix ">
            <div class="container">
                <div class="row g-0 res-991-padding_lr15 ">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <div class="title-header">
                                <h3>ABOUT COMPANY</h3>
                                <h2 class="title">Empowering Innovation, <span>Embracing Excellence</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>Creativerse is a premiere Business Process Outsourcing (BPO) company based in the tranquil and culturally rich nation of Bhutan. We are a team of innovators and creative artists committed to delivering exceptional services across the globe, with a primary focus on Australia.</p>
                            </div>
                        </div>
                        <div class="ttm-tabs ttm-tab-style-04 clearfix margin_top30" data-effect="fadeIn">
                            <ul class="tabs">
                                <li class="tab active"><a href="#">Mission</a></li>
                                <!--<li class="tab"><a href="#">Philosophy</a></li>
                                    <li class="tab"><a href="#">Vision</a></li>-->
                            </ul>
                            <div class="content-tab padding_top30 padding_bottom30">
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <div class="ttm-tabs-desc">
                                        <ul>
                                            <li>
                                                <p>Bring the creativity, talent, and expertise of Bhutan to the international stage.
                                            </li>
                                            <li>Bridge the gap between Australian businesses seeking high-quality outsourcing solutions and the vibrant, skilled workforce of Bhutan.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- content-inner end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ttm_single_image-wrapper text-end res-991-padding_top30">
                            <img class="img-fluid auto_size" src="{{asset('assets/images/single-img9.jpg')}}" alt="single-06" height="597" width="569">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-section-end-->

        <section class="ttm-row testiminial-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3>ABOUT COMPNY</h3>
                                <h2 class="title"> What Our <span>Clients</span> Say?</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":900,"settings":{"slidesToShow": 1}},
                     {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style2">
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <img class="img-center" src="{{asset('assets/images/testimonial/testimonial01.jpg')}}" alt="testimonial-img">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</blockquote>
                            <div class="testimonial-caption">
                                <h5>Dechen Dechen</h5>
                                <label>Guest</label>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials end -->
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style2">
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <img class="img-center" src="{{asset('assets/images/testimonial/testimonial01.jpg')}}" alt="testimonial-img">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</blockquote>
                            <div class="testimonial-caption">
                                <h5>Dechen Dechen</h5>
                                <label>Guest</label>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials end -->
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style2">
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <img class="img-center" src="{{asset('assets/images/testimonial/testimonial01.jpg')}}" alt="testimonial-img">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</blockquote>
                            <div class="testimonial-caption">
                                <h5>Dechen Dechen</h5>
                                <label>Guest</label>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials end -->
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style2">
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <img class="img-center" src="{{asset('assets/images/testimonial/testimonial01.jpg')}}" alt="testimonial-img">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</blockquote>
                            <div class="testimonial-caption">
                                <h5>Dechen Dechen</h5>
                                <label>Guest</label>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials end -->
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style2">
                        <div class="testimonial-avatar">
                            <div class="testimonial-img">
                                <img class="img-center" src="{{asset('assets/images/testimonial/testimonial01.jpg')}}" alt="testimonial-img">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</blockquote>
                            <div class="testimonial-caption">
                                <h5>Dechen Dechen</h5>
                                <label>Guest</label>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials end -->
                </div>
            </div>
        </section>
        <!--testiminial-section-end-->
        <!--blog-section-->
        <section class="ttm-row news-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-10">
                                <!--section-title-->
                                <div class="section-title style2">
                                    <div class="title-header">
                                        <!-- <h3>NEWS CORNER</h3> -->
                                        <h2 class="title">Our
                                            <strong class="ttm-textcolor-skincolor">Team</strong>
                                        </h2>
                                    </div>

                                </div>
                                <!--section-title-end-->
                            </div>
                            <!-- <div class="col-lg-2">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark float-end" href="blog.html">all Blogs <i class="fa fa-long-arrow-right"></i></a>
                                </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
    <!--site-main end-->
    <!--footer start-->
    @include('components.footer')
    <!--footer end-->
    <!--back-to-top start-->

    <!--back-to-top end-->
</div><!-- page end -->
{{-- <!-- <h6>Home : {{ Auth::user()->name }}</h6> --> --}}
@endsection