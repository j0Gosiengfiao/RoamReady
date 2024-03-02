<section id="popular-section" class="course-area">
    <div class="container">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">Join the hype</h5>
            <h2 class="section__title">Popular Tourist Spots</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->

    </div><!-- end container -->
    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelled="business-tab">
                    <div class="row">

                        @include('landing.components.popular-card')


                    </div><!-- end row -->
                </div><!-- end tab-pane -->

            </div><!-- end tab-content -->
            <div class="more-btn-box mt-4 text-center">
                <a href="#" class="btn theme-btn">Browse All Tourist Spots<i class="la la-arrow-right icon ml-1"></i></a>
            </div><!-- end more-btn-box -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end popular-area -->
