<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Creativerse - HOME</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/rs6.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/megamenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }} ">
</head>
<body>
    @include('layouts.navigation')
    @yield('content')
    <!-- Ensure jQuery is included before this script -->
    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.3.2.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-waypoints.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }} "></script>
    <script src="{{ asset('assets/js/slick.min.js') }} "></script>
    <script src="{{ asset('assets/js/numinate.min.js') }} "></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-isotope.js') }} "></script>
    <script src="{{ asset('assets/revolution/js/rbtools.min.js') }} "></script>
    <script src="{{ asset('assets/revolution/js/rs6.min.js') }} "></script>
    <script src="{{ asset('assets/revolution/js/slider.js') }} "></script>
    <script src="{{ asset('assets/js/main.js"></script>
    <!-- Javascript end-->
</body>
</html>