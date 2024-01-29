@extends('layouts.master')

@section('body')
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
@endsection

@section('additional')
    <div class="tooltip_templates">
        <div id="tooltip_content_1">
            <div class="card card-item">
                <div class="card-body">
                    <p class="card-text pb-2"><a href="teacher-detail.html">Location</a></p>
                    <h5 class="card-title pb-1"><a href="course-details.html">Kayaking</a></h5>
                    <div class="d-flex align-items-center pb-1">
                        <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                        <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November
                                2020</span></p>
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
                        <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November
                                2020</span></p>
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
                        <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November
                                2020</span></p>
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
                        <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November
                                2020</span></p>
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
                        <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November
                                2020</span></p>
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
@endsection
