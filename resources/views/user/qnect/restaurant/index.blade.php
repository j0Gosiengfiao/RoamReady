@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Restaurants',
'text' => 'Register my Restaurant',
'url' => 'user.qnect.restaurants.create'
])

<div class="dashboard-cards mb-5">
    @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
    @endif
    @include('user.components.resto-card', ['restos' => $restos])
</div>

@endsection
