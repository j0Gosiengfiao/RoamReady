<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Qnect</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('landing/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <!-- end inject -->
</head>

<body>

    <!-- start cssload-loader -->
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!--======================================
        START HEADER AREA
    ======================================-->
    @include('landing.components.header')
    <!--======================================
        END HEADER AREA
======================================-->

    @yield('page-content')

    <!-- ================================
         START FOOTER AREA
================================= -->
    @include('landing.components.footer')
    <!-- ================================
          END FOOTER AREA
================================= -->

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <div class="tooltip_templates">
        <div id="tooltip_content_1">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"><a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">Kayaking</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span
                                class="font-weight-bold pl-1">November 2020</span></p>
                    </div>
                    <ul
                        class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                        <li>Day Tour</li>
                        <li>All Ages</li>
                    </ul>
                    <p class="card-text pt-1 fs-14 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="generic-list-item fs-14 py-3">
                        <li><i class="la la-check mr-1 text-black"></i>Sed do eiusmod tempor</li>
                        <li><i class="la la-check mr-1 text-black"></i>Ex ea commodo consequat</li>
                        <li><i class="la la-check mr-1 text-black"></i>Excepteur sint occaecat cupidatat</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                            <i class="las la-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
    </div><!-- end tooltip_templates -->
    <div class="tooltip_templates">
        <div id="tooltip_content_2">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"> <a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">River Tubing</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span
                                class="font-weight-bold pl-1">November 2020</span></p>
                    </div>
                    <ul
                        class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                        <li>Day Tour</li>
                        <li>All Ages</li>
                    </ul>
                    <p class="card-text pt-1 fs-14 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="generic-list-item fs-14 py-3">
                        <li><i class="la la-check mr-1 text-black"></i>Sed do eiusmod tempor</li>
                        <li><i class="la la-check mr-1 text-black"></i>Ex ea commodo consequat</li>
                        <li><i class="la la-check mr-1 text-black"></i>Excepteur sint occaecat cupidatat</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                            <i class="las la-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
    </div><!-- end tooltip_templates -->
    <div class="tooltip_templates">
        <div id="tooltip_content_3">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"> <a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">Caving</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span
                                class="font-weight-bold pl-1">November 2020</span></p>
                    </div>
                    <ul
                        class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                        <li>Day Tour</li>
                        <li>All Ages</li>
                    </ul>
                    <p class="card-text pt-1 fs-14 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="generic-list-item fs-14 py-3">
                        <li><i class="la la-check mr-1 text-black"></i>Sed do eiusmod tempor</li>
                        <li><i class="la la-check mr-1 text-black"></i>Ex ea commodo consequat</li>
                        <li><i class="la la-check mr-1 text-black"></i>Excepteur sint occaecat cupidatat</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                            <i class="las la-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
    </div><!-- end tooltip_templates -->
    <div class="tooltip_templates">
        <div id="tooltip_content_4">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"> <a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">The Ultimate Drawing Course - All Ages
                            to
                            Advanced</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span
                                class="font-weight-bold pl-1">November 2020</span></p>
                    </div>
                    <ul
                        class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                        <li>Day Tour</li>
                        <li>All Ages</li>
                    </ul>
                    <p class="card-text pt-1 fs-14 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="generic-list-item fs-14 py-3">
                        <li><i class="la la-check mr-1 text-black"></i>Sed do eiusmod tempor</li>
                        <li><i class="la la-check mr-1 text-black"></i>Ex ea commodo consequat</li>
                        <li><i class="la la-check mr-1 text-black"></i></li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                            <i class="las la-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
    </div><!-- end tooltip_templates -->
    <div class="tooltip_templates">
        <div id="tooltip_content_5">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"> <a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">The Complete Digital Marketing Course
                            - 12
                            Courses in 1</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span
                                class="font-weight-bold pl-1">November 2020</span></p>
                    </div>
                    <ul
                        class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                        <li>Day Tour</li>
                        <li>All Ages</li>
                    </ul>
                    <p class="card-text pt-1 fs-14 lh-22">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <ul class="generic-list-item fs-14 py-3">
                        <li><i class="la la-check mr-1 text-black"></i>Sed do eiusmod tempor</li>
                        <li><i class="la la-check mr-1 text-black"></i>Ex ea commodo consequat</li>
                        <li><i class="la la-check mr-1 text-black"></i>Excepteur sint occaecat cupidatat</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
                            <i class="las la-bookmark"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
    </div><!-- end tooltip_templates -->


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
