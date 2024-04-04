@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Itineraries',
'text' => 'Create Itinerary',
'url' => 'user.itineraries.create'
])

<div class="dashboard-cards mb-5">
    @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
    @endif
    @include('user.components.itinerary-card', ['itineraries' => $itineraries])
</div>

@endsection