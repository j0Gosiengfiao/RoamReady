@php
    $formattedRestos = [];
    foreach ($restos as $resto) {
        $formattedRestos[] = [
            'name' => $resto->resto_name,
            'location' => $resto->area->area_name,
            'price' => $resto->resto_rate,
            'image' => $resto->resto_img
            // Add more keys as needed
        ];
    }
@endphp

<div class="card card-item hover-y">
    <div class="card-body d-flex align-items-center">
        <div class="pl-4">
            <h6 class="ribbon ribbon-blue-bg fs-18 mb-3">Time to eat</h6>
            <h5 class="card-title">Here are the restaurants in your area...</h5>
        </div>
    </div><!-- end card-body -->
</div><!-- end card -->

<div class="row">
    @include('user.components.explore-card', ['items'=>$formattedRestos])
</div>