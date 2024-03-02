@forelse ($activities as $activity)
<div class="col-lg-4 responsive-column-half">
    <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
        <div class="card-image">
            <a href="course-details.html" class="d-block">
                <img class="card-img-top lazy" src="{{ $activity->activity_img ? asset($activity->activity_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Card image">
            </a>
        </div><!-- end card-image -->
        <div class="card-body">
            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Ages</h6>
            <h5 class="card-title"><a href="course-details.html">Kayaking</a></h5>
            <p class="card-text"><a href="teacher-detail.html">Location</a></p>
            <div class="rating-wrap d-flex align-items-center py-2">
                <div class="review-stars">
                    <span class="rating-number">4.4</span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star-o"></span>
                </div>
                <span class="rating-total pl-1">(20,230)</span>
            </div><!-- end rating-wrap -->
            <div class="d-flex justify-content-between align-items-center">
                <p class="card-price text-black font-weight-bold">12.99 <span class="before-price font-weight-medium">129.99</span></p>
                <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="las la-bookmark"></i></div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
</div><!-- end col-lg-4 -->
@empty
<p class="no-data-text">No Popular Spots Found</p>
@endforelse
