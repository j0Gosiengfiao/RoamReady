@php
    $startTime = date('h:i A', strtotime($room->room->room_start));
    $endTime = date('h:i A', strtotime($room->room->room_end));
@endphp
        <div class="card card-item card-item-list-layout hover-y">
            <div class="card-image">
                <img class="card-img-top" src="{{ $room->room->room_img ? asset($room->room->room_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Card image cap">
            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="ribbon ribbon-blue-bg fs-18 mb-3">Check-{{ $selectedDay == 1 ? 'in' : 'out' }} at {{ $selectedDay == 1 ? $startTime : $endTime }}</h6>
                <h5 class="card-title mb-3">{{ $room->room->room_name }}</h5>
                <p class="card-text"><i class='bx bx-map-pin'></i> {{ $room->room->area->area_name }}</p>
                <p class="card-text"><i class='bx bx-user'></i> Maximum guests: {{ $room->room->room_max }} </p>
                <p class="card-text mb-3"><i class='bx bx-money' ></i> Nightly Rate: {{ $room->room->room_rate }} </p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-price text-black">You will be staying here for {{$days-1}} night/s. The total cost for your stay here will be {{ $room->room->room_rate * ($days-1) }} PHP.</p>
                    <div class="card-action-wrap pl-3">
                        <a href="course-details.html" class="icon-element icon-element-sm cursor-pointer ml-1 text-success" data-toggle="tooltip" data-placement="top" data-title="View" data-original-title="" title=""><i class="la la-eye"></i></a>

                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->