@extends('layouts.admin')

@section('page-content')

<!--breadcrumb-->
@include('admin.components.breadcrumb', [
'title' => 'All',
'button' => 'Add Category',
'url' => 'admin.categories.create'
])
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key=>$item)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td><img src="{{ $item->category_img ? asset($item->category_img) : asset('backend/images/upload/no_image.jpg') }}" alt="" style="width: 15%; height: 15%"></td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category' => $item->id]) }}" type="button" class="btn btn-outline-primary px-3">Edit</a>
                            <a id="delete" href="{{ route('admin.categories.destroy', ['category' => $item->id]) }}" type="button" class="btn btn-outline-danger px-3">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
