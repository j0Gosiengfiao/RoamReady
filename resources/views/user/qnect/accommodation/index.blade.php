@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Accommodations',
'text' => 'Register a Room',
'url' => 'user.qnect.accommodations.create'
])

<div class="dashboard-cards mb-5">
    @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
    @endif
    @include('user.components.room-card', ['rooms' => $rooms])
</div>

@endsection