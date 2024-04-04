@extends('layouts.landing')

@section('page-content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg">
    <div class="container">
        <div class="col-lg-8 mr-auto">
            <div class="breadcrumb-content">

                <div class="section-heading">
                    <h2 class="section__title">{{ $activity->activity_name }}</h2>
                    <p class="section__desc pt-2 lh-30">{{ $activity->area->area_name }}</p>
                </div><!-- end section-heading -->

                <p class="pt-2 pb-1">Created by <a href="teacher-detail.html" class="text-color hover-underline">{{ $activity->user->name }}</a></p>
                <div class="d-flex flex-wrap align-items-center">
                    <p class="pr-3 d-flex align-items-center">
                        <svg class="svg-icon-color-gray mr-1" width="16px" viewBox="0 0 24 24">
                            <path d="M23 12l-2.44-2.78.34-3.68-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12zm-10 5h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                        </svg>
                        Last updated {{ $activity->updated_at->toDateString() }}
                    </p>

                </div><!-- end d-flex -->

            </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE DETAILS AREA
======================================-->
<section class="course-details-area pb-20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pb-5">
                <div class="course-details-content-wrap pt-90px">
                    <div class="course-overview-card bg-gray p-4 rounded">
                        <h3 class="fs-24 font-weight-semi-bold pb-3">What's in it for you?</h3>
                            {{ $activity->activity_desc }}
                    </div><!-- end course-overview-card -->
                </div><!-- end course-details-content-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar sidebar-negative">
                    <div class="card card-item">
                        <div class="card-body">
                            <div class="preview-course-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal">
                                    <img src="{{ $activity->activity_img ? asset($activity->activity_img) : asset('backend/images/upload/no_image.jpg') }}" alt="activity-img" class="w-100 rounded lazy">
                                    <div class="preview-course-video-content">
                                        <div class="overlay"></div>
                                    </div>
                                </a>
                            </div><!-- end preview-course-video -->
                            <div class="preview-course-feature-content pt-40px">
                                
                                <p class="preview-price-discount-text pb-35px">
                                    This is only 
                                    <span class="text-color-3">&#8369;{{ $activity->activity_price }}</span> per pax!
                                </p>
                            </div><!-- end preview-course-content -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end course-details-area -->
<!--======================================
        END COURSE DETAILS AREA
======================================-->
@endsection
