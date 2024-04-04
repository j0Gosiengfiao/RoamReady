<div class="card-content-wrapper bg-gray pt-50px pb-50px">
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelled="business-tab">
                <div class="row">
                    @forelse ($activities as $activity)
                    <div class="col-lg-4 responsive-column-half">
                        <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                            <div class="card-image">
                                <a href="{{ route('explore.activity.show', ['activity' => $activity->id]) }}" class="d-block">
                                    <img class="card-img-top lazy" src="{{ $activity->activity_img ? asset($activity->activity_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Card image">
                                </a>
                            </div><!-- end card-image -->
                            <div class="card-body">
                                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $activity->activity_name == 1 ? 'All ages' : 'Adults only' }}</h6>
                                <h5 class="card-title"><a href="{{ route('explore.activity.show', ['activity' => $activity->id]) }}">{{$activity->activity_name}}</a></h5>
                                <p class="card-text">{{ $activity->area->area_name }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-price text-black">&#8369;{{ $activity->activity_price }}/pax</p>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-4 -->
                    @empty
                    <p class="no-data-text">No Popular Spots Found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
