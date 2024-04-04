@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Activity Form',
'text' => 'Cancel',
'url' => 'user.qnect.activities'
])

<form action={{ route('user.qnect.activities.store') }} method="POST" class="MultiFile-intercepted" enctype="multipart/form-data">
    @csrf
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
                        <label for="activity_name" class="label-text">Activity Name</label>
                        <input value="{{ old('activity_name') }}" class="form-control form--control pl-3" id="activity_name" type="text" name="activity_name">
                        @error('activity_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_location" class="label-text">Location</label>
                        <select class="form-control form--control pl-3" name="activity_location" id="activity_location">
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{ old('activity_location') == $area->id ? 'selected' : '' }}>{{ $area->area_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                        @error('activity_location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="category_id" class="label-text">Category</label>
                        <select class="form-control form--control pl-3" name="category_id" id="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_age_limit" class="label-text">Age Limit</label>
                        <select class="form-control form--control pl-3" name="activity_age_limit" id="activity_age_limit">
                            <option value="1" {{ old('activity_age_limit') == '1' ? 'selected' : '' }}>All Ages</option>
                            <option value="0" {{ old('activity_age_limit') == '0' ? 'selected' : '' }}>Adults Only</option>
                            <!-- Add more options as needed -->
                        </select>
                        @error('activity_age_limit')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_price" class="label-text">Price Per Head (₱)</label>
                        <input value="{{ old('activity_price') }}" class="form-control form--control pl-3" step="0.01" type="number" name="activity_price" id="activity_price">
                        @error('activity_price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_max" class="label-text">Maximum number of people in a day</label>
                        <input value="{{ old('activity_max') }}" class="form-control form--control pl-3" step="1" type="number" name="activity_max" id="activity_max">
                        @error('activity_max')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_start" class="label-text">Start of Operation Hours</label>
                        <input value="{{ old('activity_start') }}" class="form-control form--control pl-3" type="time" name="activity_start" id="activity_start">
                        @error('activity_start')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="activity_end" class="label-text">End of Operation Hours</label>
                        <input value="{{ old('activity_end') }}" class="form-control form--control pl-3" type="time" name="activity_end" id="activity_end">
                        @error('activity_end')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="activity_desc" class="label-text">Short Description</label>
                        <textarea class="form-control form--control pl-3" id="activity_desc" name="activity_desc" rows="7">{{ old('activity_desc') }}</textarea>
                        @error('activity_desc')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="activity_img" class="label-text">Activity Image</label>
                        <div class="custom-file">
                            <input value="{{ old('activity_img') }}" type="file" class="custom-file-input" id="activity_img" name="activity_img">
                            <label class="custom-file-label" for="activity_img">Choose file</label>
                        </div>
                        @error('activity_img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img id="image-preview" src="{{ asset('backend/images/upload/no_image.jpg') }}" alt="Image Preview" style="max-width: 15%; height: 15%; border: 2px solid #E2E4E7">
                    </div>
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
    <div class="course-submit-btn-box pb-4">
        <button class="btn theme-btn" type="submit">Submit Activity</button>
    </div>
</form>

<script type="text/javascript">
    document.getElementById("activity_img").addEventListener("change", function() {
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
