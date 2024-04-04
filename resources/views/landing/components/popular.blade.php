<section id="popular-section" class="course-area">
    <div class="container">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">Join the hype</h5>
            <h2 class="section__title">Popular Tourist Spots</h2>
            <span class="section-divider"></span>
        </div><!-- end section-heading -->
    </div><!-- end container -->
    @include('landing.components.popular-card')
    <div class="more-btn-box mt-4 text-center">
        <a href="{{ route('explore.activity') }}" class="btn theme-btn">Browse All Activities<i class="la la-arrow-right icon ml-1"></i></a>
    </div><!-- end more-btn-box -->
</section><!-- end popular-area -->
