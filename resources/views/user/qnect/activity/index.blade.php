@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Activities',
'text' => 'Register an Activity',
'url' => 'user.qnect.activities.create'
])

<div class="dashboard-cards mb-5">
    @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
    @endif
    @include('user.components.activity-card', ['activities' => $activities])
</div>

@endsection
