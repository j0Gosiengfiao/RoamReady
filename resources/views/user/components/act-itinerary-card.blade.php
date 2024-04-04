@foreach($activities as $activity)
@if($activity->order == 2)
    @include('user.components.meal-card', ['restos' => $lunch])
@endif
@if($activity->fare)
<h6 class="hover-y ribbon ribbon-blue-bg fs-18 mb-3 col p-2">Take a van from your current location to {{ $activity->activity->area->area_name }} municipality.
    Approximate cost is {{100 * $itinerary->itinerary_pax}} pesos.</h6>
@endif


<div class="hover-y  card card-item card-item-list-layout">
    <div class="card-image">
        <img class="card-img-top" src="{{ $activity->activity->activity_img ? asset($activity->activity->activity_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Card image cap">
    </div><!-- end card-image -->
    <div class="card-body">
        <h5 class="card-title mb-3">{{ $activity->activity->activity_name }}</h5>
        <p class="card-text"><i class='bx bx-map-pin'></i> {{ $activity->activity->area->area_name }}</p>
        <p class="card-text"><i class='bx bx-category-alt'></i> {{ $activity->activity->category->category_name }}</p>
        <p class="card-text"><i class='bx bx-money'></i> {{ $activity->activity->activity_price }} PHP/pax</p>
        <ul class="card-duration d-flex align-items-center card-text pb-2">
            <li class="mr-2">
                <span class="text-black">Age Limit:</span>
                <span class="badge badge-success text-white">{{ $activity->activity->activity_age_limit == 1 ? 'All ages' : 'Adults only' }}</span>
            </li>

        </ul>
        <p class="card-text">
            <span class="text-black">Opens at:</span>
            <span>{{ date('h:i A', strtotime($activity->activity->activity_start)) }}</span>
        </p>
        <p class="card-text">
            <span class="text-black">Closes at:</span>
            <span>{{ date('h:i A', strtotime($activity->activity->activity_end)) }}</span>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <p class="card-price text-black font-weight-bold">This activity will cost you a total of {{ $activity->activity->activity_price * $itinerary->itinerary_pax }} pesos</p>
            <div class="card-action-wrap pl-3">
                <a href="course-details.html" class="icon-element icon-element-sm cursor-pointer ml-1 text-success" data-toggle="tooltip" data-placement="top" data-title="View" data-original-title="" title=""><i class="la la-eye"></i></a>
                </a>
            </div>
        </div>
    </div><!-- end card-body -->
</div><!-- end card -->
@if($activity->order == 3 && $activity->activity->activity_location != $room->room->room_location)
<h6 class="hover-y ribbon ribbon-blue-bg fs-18 mb-3 col p-2">Take a van from your current location to {{ $room->room->area->area_name }} municipality to go back to your hotel.
    Approximate cost is {{100 * $itinerary->itinerary_pax}} pesos.</h6>
@endif
@endforeach
