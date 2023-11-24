<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
<!--page start-->
<div class="page">
    <!--header start-->
    @include('components.header')
    <!--header end-->
    <!-- Banner -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="main-classic-01" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" data-version="6.5.7">
            <rs-slides>
                <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide"
                    data-thumb="{{asset('assets/revolution/assets/mainslider-bg1-50x100.jpg')}}"
                    data-filter="e:late;b:6;" data-in="o:0;sx:1.05;sy:1.05;e:power1.in;">
                    <img src="{{asset('assets/revolution/assets/mainslider-bg1-50x100.jpg')}}" title="mainslider-bg1"
                        width="1920" height="810" class="rev-slidebg tp-rs-img rs-lazyload"
                        data-lazyload="{{asset('assets/revolution/assets/mainslider-bg1.jpg')}}" data-no-retina>



                    <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:80px,80px,0,0;y:m;yo:-53px,-53px,-52px,-42px;"
                        data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;"
                        style="z-index:9;font-family:'inter';">Building your dream
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:80px,80px,0,0;y:m;yo:30px,30px,14px,6px;"
                        data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:260;sp:800;sR:260;" data-frame_999="o:0;st:w;sR:7940;"
                        style="z-index:10;font-family:'inter';">with <span
                            class="ttm-textcolor-skincolor slide-text">PASSION</span>
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-3" data-type="shape" data-rsp_ch="on"
                        data-xy="xo:30px,30px,-238px,-146px;y:m;yo:-54px,-54px,33px,20px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f"
                        data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                        data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#ffb200;">
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-4" data-type="shape" data-rsp_ch="on"
                        data-xy="xo:30px,30px,-281px,-173px;y:m;yo:-183px,-183px,-90px,-55px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:150px,150px,93px,57px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f"
                        data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                        data-frame_999="o:0;st:w;sR:8490;" style="z-index:12;background-color:#ffb200;">
                    </rs-layer>
                    <a id="slider-1-slide-1-layer-5" class="rs-layer ttm-btn " href="{{route ('itservices')}}"
                        target="_self" rel="nofollow" data-type="text" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:86px,86px,0,0;y:m;yo:129px,129px,93px,71px;"
                        data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;"
                        data-padding="t:13,13,12,12;r:30,30,30,25;b:13,13,12,12;l:30,30,30,25;"
                        data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:100%;"
                        data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;"
                        data-frame_hover="c:#0c2d62;bgc:#ffa800;boc:#ffa800;bos:solid;bow:2px,2px,2px,2px;"
                        style="z-index:11;font-family:'inter';">Our Services
                        <i class="fa fa-long-arrow-right"></i>
                    </a>

                    <rs-layer id="slider-1-slide-1-layer-13" data-type="image" data-rsp_ch="on"
                        data-xy="x:c;xo:-400px,-400px,-584px,-360px;y:m;yo:-186px,-186px,-164px,-101px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:42px,42px,25px,15px;h:53px,53px,32px,19px;" data-vbility="t,t,f,f"
                        data-frame_0="rY:360deg;" data-frame_1="e:back.out;st:150;sp:500;sR:150;"
                        data-frame_999="o:0;st:w;sR:8350;" style="z-index:14;"><img
                            src="{{asset('assets/revolution/assets/dummy.png')}}" class="tp-rs-img rs-lazyload"
                            width="43" height="54" data-lazyload="{{asset('assets/revolution/assets/slider-logo.svg')}}"
                            alt="rev-img" data-no-retina>
                    </rs-layer>

                    <rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;xo:-336px,-336px,-513px,-316px;y:m;yo:-183px,-183px,-176px,-108px;"
                        data-text="w:normal;s:16,16,9,5;l:25,25,15,9;fw:500;" data-vbility="t,t,f,f"
                        data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:190;sp:400;"
                        data-frame_999="o:0;st:w;sR:8510;" style="z-index:15;font-family:'Poppins';">Honest
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-1-layer-15" data-type="shape" data-rsp_ch="on"
                        data-xy="x:c;xo:-294px,-294px,-496px,-306px;y:m;yo:-182px,-182px,-149px,-91px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:8px,8px,4px,2px;h:8px,8px,4px,2px;"
                        data-vbility="t,t,f,f" data-border="bor:50px,50px,50px,50px;" data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="st:270;sp:400;" data-frame_999="o:0;st:w;sR:8430;"
                        style="z-index:16;background-color:#ffa800;">
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-1-layer-16" data-type="shape" data-rsp_ch="on"
                        data-xy="x:c;xo:-200px,-200px,-470px,-289px;y:m;yo:-182px,-182px,-149px,-91px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:8px,8px,4px,2px;h:8px,8px,4px,2px;"
                        data-vbility="t,t,f,f" data-border="bor:50px,50px,50px,50px;" data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="st:430;sp:400;" data-frame_999="o:0;st:w;sR:8270;"
                        style="z-index:18;background-color:#ffa800;">
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-1-layer-17" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;xo:-247px,-247px,-502px,-309px;y:m;yo:-183px,-183px,-118px,-72px;"
                        data-text="w:normal;s:16,16,9,5;l:25,25,15,9;fw:500;" data-vbility="t,t,f,f"
                        data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:350;sp:400;"
                        data-frame_999="o:0;st:w;sR:8350;" style="z-index:17;font-family:'Poppins';">Reliable
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-1-layer-19" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;xo:-138px,-138px,-468px,-288px;y:m;yo:-183px,-183px,-91px,-56px;"
                        data-text="w:normal;s:16,16,9,5;l:25,25,15,9;fw:500;" data-vbility="t,t,f,f"
                        data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:540;sp:400;"
                        data-frame_999="o:0;st:w;sR:8160;" style="z-index:19;font-family:'Poppins';">Trustworthy
                    </rs-layer>
                    <!--
-->
                </rs-slide>
                <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide"
                    data-thumb="{{asset('assets/assets/mainslider-bg2-50x100.jpg')}}" data-filter="e:late;b:6;"
                    data-in="o:0;sx:1.05;sy:1.05;e:power1.in;">
                    <img src="{{asset('assets/revolution/assets/dummy.png')}}" title="mainslider-bg2" width="1920"
                        height="810" class="rev-slidebg tp-rs-img rs-lazyload"
                        data-lazyload="{{asset('assets/revolution/assets/mainslider-bg2.jpg')}}" data-no-retina>

                    <rs-layer id="slider-1-slide-2-layer-1" data-type="text" data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:75px,75px,0,0;y:m;yo:-55px,-55px,-80px,-90px;"
                        data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;"
                        style="z-index:9;font-family:'inter';">Services tailored to
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-2-layer-2" data-type="text" data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:75px,75px,0,0;y:m;yo:28px,28px,-14px,-41px;"
                        data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:260;sp:800;sR:260;" data-frame_999="o:0;st:w;sR:7940;"
                        style="z-index:10;font-family:'inter';">meet your <span
                            class="ttm-textcolor-skincolor slide-text">NEEDS </span>
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-2-layer-3" data-type="shape" data-rsp_ch="on"
                        data-xy="x:r;xo:30px,30px,-238px,-146px;y:m;yo:-54px,-54px,33px,20px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f"
                        data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                        data-frame_999="o:0;st:w;sR:8490;" style="z-index:14;background-color:#ffb200;">
                    </rs-layer>
                    <!--

                            -->
                    <rs-layer id="slider-1-slide-2-layer-4" data-type="shape" data-rsp_ch="on"
                        data-xy="x:r;xo:30px,30px,-281px,-173px;y:m;yo:-183px,-183px,-90px,-55px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:150px,150px,93px,57px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f"
                        data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                        data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#ffb200;">
                    </rs-layer>
                    <!--

                        

                            --><a id="slider-1-slide-2-layer-6" class="rs-layer ttm-btn" href="{{route ('contactus')}}"
                        target="_self" rel="nofollow" data-type="text" data-color="#0c2d62" data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:75px,75px,0,0;y:m;yo:131px,131px,122px,80px;"
                        data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;"
                        data-padding="t:13,13,12,12;r:25,25,30,25;b:13,13,12,12;l:30,30,30,25;"
                        data-border="bos:solid;boc:#ffa800;bow:2px,2px,2px,2px;" data-frame_0="y:100%;"
                        data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;"
                        data-frame_hover="c:#fff;bgc:#0c2d62;boc:#0c2d62;bos:solid;bow:2px,2px,2px,2px;"
                        style="z-index:11;background-color:#ffa800;font-family:'inter';">Contact Us <i
                            class="fa fa-long-arrow-right"></i>
                    </a>
                    <!--

                            --><a id="slider-1-slide-2-layer-28" class="rs-layer ttm_prettyphoto"
                        href="https://www.youtube.com/watch?v=DM5UgZRuCIw" target="_self" rel="nofollow"
                        data-type="text" data-color="#0c2d62" data-rsp_ch="on"
                        data-xy="x:c;xo:394px,394px,575px,354px;y:m;yo:-184px,-184px,-61px,-37px;"
                        data-text="w:normal;s:25,25,15,9;l:55,55,34,20;a:center;"
                        data-dim="w:55px,55px,34px,20px;h:55px,55px,34px,20px;" data-vbility="t,t,f,f"
                        data-frame_0="rY:360deg;" data-frame_1="e:back.out;st:150;sp:500;sR:150;"
                        data-frame_999="o:0;st:w;sR:8350;" data-frame_hover="c:#fff;bgc:#ffa800;"
                        style="z-index:20;background-color:#ffa800;font-family:'Roboto';"><i class="fa fa-play"></i>
                    </a>
                    <!--
-->
                </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!-- Banner end-->
    <!--site-main start-->
    <div class="site-main">
        <!--top-section-->
        <section class="ttm-row top-section clearfix">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="row mt_160 res-991-margin_top_0 g-0">
                            <div class="col-lg-6">
                                <div
                                    class="ttm-bgcolor-darkgrey padding_top40 padding_left50 padding_right50 padding_bottom60 res-320-padding_top30 res-320-padding_bottom30 res-320-padding_lr15 margin_left30 margin_right30 position-relative column-title">
                                    <!--col-title -->
                                    <div class="col-title section-title">
                                        <h2 class="ttm-textcolor-whitecolor">"Empowering Innovation, Embracing
                                            Excellence: <span> Your Gateway to Outsourcing Success from
                                                Bhutan"</span></h2>
                                    </div>
                                    <!--col-title-end -->
                                    <div class=" padding_top30 mb_120 res-575-margin_bottom0 ">
                                        <img class="img-fluid" src="{{asset('assets/images/single-img1.jpg')}}"
                                            alt="single-img1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="fa fa-lightbulb-o"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Bhutanese Expertise, Global Perspective</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Hailing from the enchanting landscapes of Bhutan, we bring a
                                                        unique perspective to every project.</p>
                                                </div>
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                                    href="general-builder.html">Read More<i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md">
                                                    <i class="fa fa-bullseye"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Tailored to Your Vision</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>We don't believe in one-size-fits-all solutions. Creativerse
                                                        works closely with you to understand your business
                                                        objectives,</p>
                                                </div>
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                                    href="house-extensions.html">Read More<i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--top-section-end-->
        <!-- about-section -->
        <section class="ttm-row Lifestyle-section clearfix ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="padding_top20 ">
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>ABOUT COMPANY</h3>
                                    <h2 class="title">Empowering Innovation, Embracing Excellence</h2>
                                </div>
                                <div class="title-desc">
                                    <p>Creativerse is a premiere Business Process Outsourcing (BPO) company based in
                                        the tranquil and culturally rich nation of Bhutan.
                                        We are a team of innovators and creative artists committed to delivering
                                        exceptional services across the globe, with a primary focus on Australia.
                                    </p>
                                </div>
                            </div>
                            <div class="margin_top20">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_right20 margin_top15"
                                    href="{{ route('about') }}">Learn More <i class="fa fa-long-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ttm_single_image-wrapper text-center imagestyle-one res-1199-padding_top70 mt-50 ">
                            <img class="img-fluid auto_size" src="{{asset('assets/images/single-img2.jpg')}}"
                                alt="single-02" height="412" width="512">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-section-end-->
        <!--service-section-->
        <section class="ttm-row service-one-section ttm-bgimage-yes bg-img1 ttm-bg ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">Our <span>Services</span></h2>
                            </div>
                        </div>
                        <!--section-title-end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                            <i class="fa fa-code"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>IT Services</h3>
                                        </div>

                                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                            href="{{ route('itservices') }}">Learn More<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Creative Content Writing</h3>
                                        </div>

                                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                            href="{{ route('creativecontentwriting') }}">Learn More<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="featured-icon-box icon-align-top-content style2 active">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                            <i class="fa fa-ticket"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Video Production</h3>
                                        </div>

                                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                            href="video-production.html">Learn More<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="featured-icon-box icon-align-top-content style2">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                            <i class="fa fa-magic"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Animation Production</h3>
                                        </div>

                                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                            href="{{ route('animationproduction') }}">Learn More<i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-bgcolor-dark">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                        <div
                                            class="featured-content padding_top145 padding_bottom30 padding_left30 padding_right30 margin_top15 margin_bottom15">
                                            <div class="featured-title">
                                                <h3>Graphic Design and Branding</h3>
                                            </div>

                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                                href="{{ route('graphicdesignandbranding') }}">Learn More<i
                                                    class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="featured-icon-box icon-align-top-content style2">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                    <i class="fa fa-film"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Video Editing</h3>
                                                </div>

                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                                    href="{{ route('videoediting') }}">Learn More<i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="featured-icon-box icon-align-top-content style2">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                    <i class="fa fa-universal-access"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Digital Marketing</h3>
                                                </div>

                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor"
                                                    href="{{ route('digitalmarketing') }}">Learn More<i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--service-section-end-->
        <!--portfolio-section-->

        <!--portfolio-section-end-->
        <!-- testimonial section -->

        <!-- testimonial section-end-->
        <!-- image-section-->

        <!-- image-section-end-->
        <!-- progress-bar-section-->

        <!-- progress-bar-section-end-->
        <!--Blog-section-->
        <section class="ttm-row blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3>OUR BLOG</h3>
                                <h2 class="title"> Our Recent News & <span>Blog</span></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider mb_15"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('assets/images/blog/blog-01-600x440.jpg')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-05-18T04:16:25+00:00">21<span
                                                class="entry-month entry-year">May</span></time>
                                    </span>
                                </div><!-- ttm-box-post-date end -->
                                <div class="featured-title">
                                    <h3><a href="blog-right-sidebar.html">Lipsum generator: Lorem Ipsum - All the
                                            facts</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incidid...</p>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                    href="blog-right-sidebar.html">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('assets/images/blog/blog-02-600x440.jpg')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-04-28T04:15:42+00:00">28<span
                                                class="entry-month entry-year">Apr</span></time>
                                    </span>
                                </div>
                                <div class="featured-title">
                                    <h3><a href="blog-right-sidebar.html">Lipsum generator: Lorem Ipsum - All the
                                            facts</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incidid...</p>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                    href="blog-right-sidebar.html">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('assets/images/blog/blog-03-600x440.jpg')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-04-15T04:15:25+00:00">28<span
                                                class="entry-month entry-year">Apr</span></time>
                                    </span>
                                </div><!-- ttm-box-post-date end -->
                                <div class="featured-title">
                                    <h3><a href="blog-right-sidebar.html">Lipsum generator: Lorem Ipsum - All the
                                            facts</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incidid...</p>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                    href="blog-right-sidebar.html">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('assets/images/blog/blog-04-600x440.jpg')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-04-11T04:12:56+00:00">28<span
                                                class="entry-month entry-year">Apr</span></time>
                                    </span>
                                </div><!-- ttm-box-post-date end -->
                                <div class="post-meta">
                                    <span class="ttm-meta-line byline">
                                        <i class="ti ti-user"></i>John Doe</span>
                                    <span class="ttm-meta-line comments-link">
                                        <i class="fa fa-comments-o"></i>
                                        0 Comments</span>
                                </div><!-- post-meta end -->
                                <div class="featured-title">
                                    <h3><a href="blog-right-sidebar.html">The 9 Best Guideline For The
                                            Construction</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incidid...</p>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                    href="blog-right-sidebar.html">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('assets/images/blog/blog-05-600x440.jpg')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <!-- ttm-box-post-date -->
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-08-11T04:12:56+00:00">20<span
                                                class="entry-month entry-year">Aug</span></time>
                                    </span>
                                </div><!-- ttm-box-post-date end -->
                                <div class="post-meta">
                                    <span class="ttm-meta-line byline">
                                        <i class="ti ti-user"></i>John Doe</span>
                                    <span class="ttm-meta-line comments-link">
                                        <i class="fa fa-comments-o"></i>
                                        0 Comments</span>
                                </div><!-- post-meta end -->
                                <div class="featured-title">
                                    <h3><a href="blog-right-sidebar.html">What Can Not You Put in The Dumpster?</a>
                                    </h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incidid...</p>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor"
                                    href="blog-right-sidebar.html">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                </div>
            </div>
        </section>
        <!--Blog-section-end-->
    </div>
    <!--site-main end-->
    <!--footer start-->
    @include('components.footer')
    <!--footer end-->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <!--back-to-top start-->
    <!-- <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a> -->
    <!--back-to-top end-->
</div><!-- page end -->
{{--
<!-- <h6>Home : {{ Auth::user()->name }}</h6> --> --}}
<script>
    var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108895728166845");
      chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
</script>

@endsection