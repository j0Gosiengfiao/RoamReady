<div class="container-fluid mb-3">
    <div class="testimonial-carousel owl-action-styled">
        @foreach ($items as $item)
        <div class="card card-item hover-y">
            <div class="card-body">
                <div class="media-card pb-3">
                    <div class="">
                        <img src="{{ $item['image'] ? asset($item['image']) : asset('backend/images/upload/no_image.jpg') }}" alt="establishment image" class="rounded-lg mb-4">
                    </div>
                    <div class="media-body">
                        <h5>{{ $item['name'] }}</h5>
                        <div class="d-flex align-items-center pt-1">
                            <span class="lh-18 pr-2">{{ $item['location'] }}</span>

                        </div>
                    </div>
                </div><!-- end media -->
                <p class="card-text">
                <span class="explore-heading">&#x20B1; {{$item['price'] }} </span> per pax
                </p>
            </div><!-- end card-body -->
        </div><!-- end card -->
        @endforeach
    </div><!-- end testimonial-carousel -->
</div><!-- container-fluid -->
