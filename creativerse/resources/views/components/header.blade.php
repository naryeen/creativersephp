
    <!--header start-->
    <header id="masthead" class="header ttm-header-style-01">
        <!-- topbar -->
        <div class="top_bar ttm-bgcolor-darkgrey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_icon"><i class="flaticon flaticon-placeholder"></i></div>
                                    <div class="top_bar_content">11001 Thimphu, Bhutan</div>
                                </div>
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_icon"><i class="flaticon flaticon-envelope"></i></div>
                                    <div class="top_bar_content"> <a href="mailto:info@example.com">info@example.com</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info">
                                    <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                                        <ul class="social-icons d-flex">
                                            <li>
                                                <a class="ttm-social-facebook" href="#" rel="noopener" aria-label="facebook"><i class=" fa fa-facebook-f"></i></a>
                                            </li>
                                            <!-- <li>
                                                    <a class="ttm-social-twitter" href="#" rel="noopener"
                                                        aria-label="twitter"><i class="fa fa-twitter"></i></a>
                                                </li> -->
                                            <li>
                                                <a class="ttm-social-linkedin" href="#" rel="noopener" aria-label="google"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a class="ttm-social-pinteres" href="#" rel="noopener" aria-label="google"><i class="fa fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top_bar_contact_item ttm-highlight-right">
                                        <div class="top_bar_icon"><i class="flaticon-phone-call"></i></div>
                                        <div class="top_bar_content"> Talk To Expert:
                                            <strong><a href="tel:+97517000000">+975 17000000</a></strong>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end -->
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
            <div class="site-header-menu-inner ttm-stickable-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
                                <!-- site-branding -->
                                <div class="site-branding ">
                                    <a class="home-link" href="index.html" title="Creativerse" rel="home">
                                        <img id="logo-img" height="45" width="175" class="img-fluid auto_size" src="{{ asset('assets/images/logo-img.svg') }}" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <div class=" d-flex flex-row ">
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item active">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="mega-menu-item">
                                            <a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="#" class="mega-menu-link">Services</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{route ('itservices')}}">IT Services</a></li>
                                                    <li><a href="{{route ('creativecontentwriting')}}">Creative Content Writing</a>
                                                    </li>
                                                    <li><a href="{{route ('videoproduction')}}">Video Production</a></li>
                                                    <li><a href="{{route ('animationproduction')}}">Animation Production</a>
                                                    </li>
                                                    <li><a href="{{route ('graphicdesignandbranding')}}">Graphic Design and
                                                            Branding</a></li>
                                                    <li><a href="{{route ('videoediting')}}">Video Editing</a></li>
                                                    <li><a href="{{route ('digitalmarketing')}}">Digital Marketing</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{route ('ourteam')}}">Our Team</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{route ('contactus')}}">Contact us</a>
                                            </li>
                                        </ul>
                                    </nav><!-- menu end -->
                                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                        <div class="header_search">
                                            <a href="#" class="btn-default search_btn" rel="noopener" aria-label="searchbox"><i class="ti ti-search"></i></a>
                                            <div class="header_search_content">
                                                <form id="searchbox" method="get" action="#">
                                                    <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Type Word Then Enter.." value="">
                                                    <button type="submit" class="btn close-search" aria-label="searchbox-align"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- <div class="padding_left15">
                                                <div class="header_btn">
                                                    <a class="ttm-btn ttm-btn-size-md ttm-text-darkgrey btn-inline ttm-icon-btn-right" href="contact-us.html">Get A Quote
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header>
