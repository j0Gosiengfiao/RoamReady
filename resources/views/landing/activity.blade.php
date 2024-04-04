@extends('layouts.landing')

@section('page-content')
    @include('landing.components.popular-card')
    {{ $activities->links('user.components.pagination', ['items' => $activities]) }}
@endsection
