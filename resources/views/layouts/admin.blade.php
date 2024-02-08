@extends('layouts.backend')

@section('title', 'Qnect - Admin')
@section('body')
    <!--sidebar wrapper -->
    @include('admin.components.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('admin.components.header')
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            @yield('page-content')
        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('search-list')
    <div class="search-list">
        
    </div>
@endsection
