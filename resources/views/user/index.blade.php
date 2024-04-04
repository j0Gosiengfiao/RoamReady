@php
    $formattedActivities = [];
    foreach ($activities as $activity) {
        $formattedActivities[] = [
            'name' => $activity->activity_name,
            'location' => $activity->area->area_name,
            'price' => $activity->activity_price,
            'image' => $activity->activity_img
            // Add more keys as needed
        ];
    }

    $formattedRooms = [];
    foreach ($rooms as $room) {
        $formattedRooms[] = [
            'name' => $room->room_name,
            'location' => $room->area->area_name,
            'price' => $room->room_rate,
            'image' => $room->room_img
            // Add more keys as needed
        ];
    }
@endphp
@extends('layouts.user')

@section('page-content')
<div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
    <div class="media media-card align-items-center">
        <div class="media-img media--img media-img-md rounded-full">
            <img class="rounded-full" src="{{ asset('landing/images/small-avatar-1.jpg') }}" alt="Student thumbnail image">
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Hello, {{ auth()->user()->name }}</h2>
        </div><!-- end media-body -->
    </div><!-- end media -->
</div><!-- end breadcrumb-content -->
<div class="section-block mb-5"></div>
<div class="dashboard-heading mb-1">
    <h3 class="fs-23 font-weight-semi-bold">Activities</h3>
</div>
<div class="row">
    @include('user.components.explore-card', ['items' => $formattedActivities])
</div><!-- end row -->

<div class="dashboard-heading mb-1">
    <h3 class="fs-23 font-weight-semi-bold">Accommodations</h3>
</div>
<div class="row">
    @include('user.components.explore-card', ['items' => $formattedRooms])
</div><!-- end row -->

@endsection
