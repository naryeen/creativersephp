<!-- resources/views/home.blade.php -->
@extends('components.app')

@section('content')
<div class="page">

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

                            <h2 class="title">Our Team</h2>

                        </div>

                        <!-- <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html">

                                        <i class="themifyicon ti-home"></i> &nbsp;

                                        Home</a>

                                </span>

                                <span>Our Team </span>

                            </div> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- page-title end -->

    <!--site-main start-->

    <div class="site-main">



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