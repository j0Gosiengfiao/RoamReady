@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Activities',
'text' => 'Register an Activity',
'url' => 'user.qnect.activities.create'
])

<div class="dashboard-cards mb-5">
    @include('user.components.activity-card', ['activities' => $activities])
</div>

<!--@include('user.components.pagination') ->
@endsection
