@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Edit Restaurant Form',
'text' => 'Cancel',
'url' => 'user.qnect.restaurants'
])

@php
// Assuming $roomStartTime is in format HH:MM:SS
$formattedStartTime = substr($resto->resto_start, 0, 5); // Extracting HH:MM
$formattedEndTime = substr($resto->resto_end, 0, 5);
@endphp


<form action="{{ route('user.qnect.restaurants.update', ['resto' => $resto->id]) }}" method="POST" class="MultiFile-intercepted" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card card-item">
        <div class="card-body">
            <h3 class="fs-22 font-weight-semi-bold pb-2">Basic information</h3>
            <div class="divider"><span></span></div>
            @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="resto_name" class="label-text">Restaurant Name</label>
                        <input value="{{ $resto->resto_name }}" class="form-control form--control pl-3" id="resto_name" type="text" name="resto_name">
                        @error('resto_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="resto_location" class="label-text">Location</label>
                        <select class="form-control form--control pl-3" name="resto_location" id="resto_location">
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{ $resto->resto_location == $area->id ? 'selected' : '' }}>{{ $area->area_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                        @error('resto_location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="resto_rate" class="label-text">Rate Per Night (₱)</label>
                        <input value="{{ $resto->resto_rate }}" class="form-control form--control pl-3" step="0.01" type="number" name="resto_rate" id="resto_rate">
                        @error('resto_rate')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="resto_start" class="label-text">Check-In Time</label>
                        <input value="{{ $formattedStartTime }}" class="form-control form--control pl-3" type="time" name="resto_start" id="resto_start">
                        @error('resto_start')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="resto_end" class="label-text">Check-Out Time</label>
                        <input value="{{ $formattedEndTime }}" class="form-control form--control pl-3" type="time" name="resto_end" id="resto_end">
                        @error('resto_end')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="resto_img" class="label-text">Accommodation Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="resto_img" name="resto_img">
                            <label class="custom-file-label" for="resto_img">{{ $resto->resto_img ? $resto->resto_img : 'Choose file' }}</label>
                        </div>
                        @error('resto_img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="image-preview" src="{{ $resto->resto_img ? asset($resto->resto_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Image Preview" style="max-width: 15%; height: 15%; border: 2px solid #E2E4E7">
                    </div>
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
    <div class="course-submit-btn-box pb-4">
        <button class="btn theme-btn" type="submit">Submit</button>
    </div>
</form>

<script type="text/javascript">
    document.getElementById("resto_img").addEventListener("change", function() {
        var label = document.querySelector(".custom-file-label");
        label.textContent = this.files[0].name;

        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById("image-preview");
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
    });

</script>

@endsection
