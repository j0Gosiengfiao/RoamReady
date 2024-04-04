@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => $itinerary->itinerary_name,
'text' => 'Itinerary List',
'url' => 'user.itineraries'
])

<div class="dashboard-cards mb-5">
    @include('user.components.day-selector')
    <div class="p-0 mt-5">
        @if ($selectedDay == 1)
        @include('user.components.drive-card')
        @endif
        @if ($selectedDay == 1)
        @include('user.components.check-in-card')
        @endif
        @if($selectedDay > 1)
        @include('user.components.meal-card')
        @endif
        @include('user.components.act-itinerary-card')
        @if($selectedDay != $days)
        @include('user.components.meal-card')
        @endif
        @if ($selectedDay == $days)
        @include('user.components.check-in-card')
        @endif
        @if ($selectedDay == $days)
        @include('user.components.drive-card')
        @endif
    </div>
</div>

@endsection
