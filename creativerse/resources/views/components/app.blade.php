<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creativerse - HOME</title>
  

    
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/rs6.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/megamenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }} ">
</head>

<body>
    @include('components.navigation')
    @yield('content')
    <!-- Ensure jQuery is included before this script -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
    <script src="{{ asset('assets/js/main.js')}}"></script>
    


   
</body>
</html>