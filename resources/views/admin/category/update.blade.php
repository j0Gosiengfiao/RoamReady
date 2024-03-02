@extends('layouts.admin')

@section('page-content')
<!--breadcrumb-->
@include('admin.components.breadcrumb', [
'title' => 'Edit Category',
'button' => 'Cancel',
'url' => 'admin.categories'
])
<!--end breadcrumb-->

@include('admin.components.forms.category', $category)

@endsection
