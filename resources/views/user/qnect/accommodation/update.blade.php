@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Edit Accommodation Form',
'text' => 'Cancel',
'url' => 'user.qnect.accommodations'
])

@php
// Assuming $roomStartTime is in format HH:MM:SS
$formattedStartTime = substr($room->room_start, 0, 5); // Extracting HH:MM
$formattedEndTime = substr($room->room_end, 0, 5);
@endphp


<form action="{{ route('user.qnect.accommodations.update', ['accommodation' => $room->id]) }}" method="POST" class="MultiFile-intercepted" enctype="multipart/form-data">
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
                        <label for="room_name" class="label-text">Accommodation Name</label>
                        <input value="{{ $room->room_name }}" class="form-control form--control pl-3" id="room_name" type="text" name="room_name">
                        @error('room_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="room_location" class="label-text">Location</label>
                        <select class="form-control form--control pl-3" name="room_location" id="room_location">
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{ $room->room_location == $area->id ? 'selected' : '' }}>{{ $area->area_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                        @error('room_location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="room_rate" class="label-text">Rate Per Night (₱)</label>
                        <input value="{{ $room->room_rate }}" class="form-control form--control pl-3" step="0.01" type="number" name="room_rate" id="room_rate">
                        @error('room_rate')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="room_max" class="label-text">Maximum Number of Guests</label>
                        <input value="{{ $room->room_max }}" class="form-control form--control pl-3" step="1" type="number" name="room_max" id="room_max">
                        @error('room_max')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="room_start" class="label-text">Check-In Time</label>
                        <input value="{{ $formattedStartTime }}" class="form-control form--control pl-3" type="time" name="room_start" id="room_start">
                        @error('room_start')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="room_end" class="label-text">Check-Out Time</label>
                        <input value="{{ $formattedEndTime }}" class="form-control form--control pl-3" type="time" name="room_end" id="room_end">
                        @error('room_end')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="room_img" class="label-text">Accommodation Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="room_img" name="room_img">
                            <label class="custom-file-label" for="room_img">{{ $room->room_img ? $room->room_img : 'Choose file' }}</label>
                        </div>
                        @error('room_img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="image-preview" src="{{ $room->room_img ? asset($room->room_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Image Preview" style="max-width: 15%; height: 15%; border: 2px solid #E2E4E7">
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
    document.getElementById("room_img").addEventListener("change", function() {
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
