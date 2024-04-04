@extends('layouts.user')

@section('page-content')
@include('user.components.breadcrumb', [
'heading' => 'Itinerary Form',
'text' => 'Cancel',
'url' => 'user.itineraries'
])

<form action={{ route('user.itineraries.store') }} method="POST" class="MultiFile-intercepted" enctype="multipart/form-data">
    @csrf
    <div class="card card-item">
        <div class="card-body">
            <h3 class="fs-22 font-weight-semi-bold pb-2">Basic information</h3>
            <div class="divider"><span></span></div>
            @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            @if(session()->has('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_name" class="label-text">Itinerary Name</label>
                        <input value="{{ old('itinerary_name') }}" class="form-control form--control pl-3" id="itinerary_name" type="text" name="itinerary_name">
                        @error('itinerary_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_location" class="label-text">Starting Location</label>
                        <select class="form-control form--control pl-3" name="itinerary_location" id="itinerary_location">
                            @foreach($provinces as $province)
                            <option value="{{ $province->id }}" {{ old('itinerary_location') == $province->id ? 'selected' : '' }}>{{ $province->province_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                        @error('itinerary_location')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_price" class="label-text">Total Budget (₱)</label>
                        <input value="{{ old('itinerary_price') }}" class="form-control form--control pl-3" step="0.01" type="number" name="itinerary_price" id="itinerary_price">
                        @error('itinerary_price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_pax" class="label-text">Pax</label>
                        <input value="{{ old('itinerary_pax') }}" class="form-control form--control pl-3" step="1" type="number" name="itinerary_pax" id="itinerary_pax">
                        @error('itinerary_pax')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_start" class="label-text">Start Date</label>
                        <input value="{{ old('itinerary_start') }}" class="form-control form--control pl-3" type="date" name="itinerary_start" id="itinerary_start">
                        @error('itinerary_start')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="itinerary_end" class="label-text">End Date</label>
                        <input value="{{ old('itinerary_end') }}" class="form-control form--control pl-3" type="date" name="itinerary_end" id="itinerary_end">
                        @error('itinerary_end')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
    <div class="course-submit-btn-box pb-4">
        <button class="btn theme-btn" type="submit">Auto-Generate</button>
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
