<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
<!--page start-->
<!--page start-->
<div class="page">
    <!--header start-->
    @include('components.header')
    <!--header end-->
    <!-- page-title -->
    <div class="ttm-page-title ttm-bg clearfix" style="background-image: url('{{ asset('assets/images/contact.jpg') }}')">

    <!-- <div class="ttm-page-title ttm-bg clearfix" style="background-image: url(images/contact.jpg);"> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">
                                        <i class="themifyicon ti-home"></i> &nbsp;
                                        Home</a>
                                </span>
                                <span>Contact Us</span>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <!--site-main start-->
    <div class="site-main">
        
        <!--form-section-->
        <section class="ttm-row form-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--section-title-->
                        <div class="section-title title-style-center_text margin_bottom30">
                            <div class="title-header">
                                <h3>GET IN TOUCH</h3>
                                <h2 class="title">Have A Questions Drop <span>Us Line!</span></h2>
                            </div>
                        </div>
                        <!--section-title-end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class=" ttm-bgcolor-white p-40 res-991-margin_right0 ">
                            <form id="contact_form" class="wrap-form contact_form padding_top15" method="post" action="#">
                                <div class="row ttm-boxes-spacing-30px">
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="your-name" type="text" value="" placeholder="Your Name*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="Phone" type="text" value="" placeholder="Your Phone*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="Email" type="text" value="" placeholder="Email Address*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="Subject" type="text" value="" placeholder="Subject*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-12 ttm-box-col-wrapper">
                                        <label>
                                            <span class="text-input margin_bottom0"><textarea name="your-message" cols="40" rows="6" placeholder="Your Message" aria-required="true"></textarea></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">Send Now!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ttm-bgcolor-white p-40 res-991-margin_top30 ttm-bgcolor-white p-40 ">
                            <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-message"></i>
                                    </div>
                                </div>
                                <div class="featured-content pt-2">
                                    <div class="featured-title ">
                                        <h3 class="margin_bottom0">Let’s Call or Email</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-design-team"></i>
                                    </div>
                                </div>
                                <div class="featured-content pt-2">
                                    <div class="featured-title ">
                                        <h3 class="margin_bottom0">Be Creative Our Team</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>+1800 123 456 7890</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="fa fa-skype"></i>
                                    </div>
                                </div>
                                <div class="featured-content pt-2">
                                    <div class="featured-title ">
                                        <h3 class="margin_bottom0">Call or Message</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>@skype.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--map-section-end-->
        <div id="google_map" class="google_map mt_90 res-991-margin_top0">
            <div class="map_container clearfix">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d851.4811904439825!2d89.64393539191603!3d27.46200409817676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e195f48dab3811%3A0xb0f0687044bc78f9!2siBEST%20STUDIOS!5e0!3m2!1sen!2sbt!4v1699282328782!5m2!1sen!2sbt" height="550" width="100"></iframe>
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