<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>Qnect</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->


    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- end inject -->
</head>

<body>

    <!-- start cssload-loader
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    end cssload-loader -->

    @yield('body')

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    @yield('additional')


    <!-- template js files -->
    <script src="{{ asset('landing/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/isotope.js') }}"></script>
    <script src="{{ asset('landing/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing/js/fancybox.js') }}"></script>
    <script src="{{ asset('landing/js/datedropper.min.js') }}"></script>
    <script src="{{ asset('landing/js/emojionearea.min.js') }}"></script>
    <script src="{{ asset('landing/js/tooltipster.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
