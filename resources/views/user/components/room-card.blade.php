@forelse($rooms as $key=>$item)
<div class="card card-item card-item-list-layout">
    <div class="card-image">
        <a href="{{ route('user.qnect.accommodations.edit', ['accommodation' => $item->id]) }}" class="d-block">
            <img class="card-img-top" src="{{ $item->room_img ? asset($item->room_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Card image cap">
        </a>
    </div><!-- end card-image -->
    <div class="card-body">
        <h6 class="ribbon ribbon-blue-bg fs-18 mb-3">{{ $item->room_status == 1 ? 'Active' : 'Pending' }}</h6>
        <h5 class="card-title mb-3">{{ $item->room_name }}</h5>
        <p class="card-text"><i class='bx bx-map-pin'></i> {{ $item->area->area_name }}</p>
        <p class="card-text mb-3"><i class='bx bx-user'></i> Maximum guests: {{ $item->room_max }} </p>
        <ul class="card-duration d-flex align-items-center card-text pb-2">
            <li class="mr-2">
                <span class="text-black">Start of Operation:</span>
                <span>{{ date('h:i A', strtotime($item->room_start)) }}</span>
            </li>
            <li class="mr-2">
                <span class="text-black">End of Operation:</span>
                <span>{{ date('h:i A', strtotime($item->room_end)) }}</span>
            </li>
        </ul>
        
        <div class="d-flex justify-content-between align-items-center">
            <p class="card-price text-black font-weight-bold">{{ $item->room_rate }} PHP</p>
            <div class="card-action-wrap pl-3">
                <a href="course-details.html" class="icon-element icon-element-sm cursor-pointer ml-1 text-success" data-toggle="tooltip" data-placement="top" data-title="View" data-original-title="" title=""><i class="la la-eye"></i></a>
                <a href="{{ route('user.qnect.accommodations.edit', ['accommodation' => $item->id]) }}" class="icon-element icon-element-sm cursor-pointer ml-1 text-secondary" data-toggle="tooltip" data-placement="top" data-title="Edit" data-original-title="" title=""><i class="la la-edit"></i></a>
                <a href="{{ route('user.qnect.accommodations.destroy', ['accommodation' => $item->id]) }}" class="icon-element icon-element-sm cursor-pointer ml-1 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                    <i class="la la-trash"></i>
                </a>
            </div>
        </div>
    </div><!-- end card-body -->
</div><!-- end card -->
@empty
<p class="no-data-text">No Rooms Found</p>
@endforelse

{{ $rooms->links('user.components.pagination', ['items' => $rooms]) }}