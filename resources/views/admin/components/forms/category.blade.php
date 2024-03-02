<div class="card">
    <div class="card-body p-4">
        <h5 class="mb-4">Category Form</h5>
        @if(session()->has('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        <form action="{{ isset($category) ? route('admin.categories.update', ['category' => $category->id]) : route('admin.categories.store') }}" method="POST" class="row g-3"
        enctype="multipart/form-data">
        @csrf
        @isset($category)
            @method('PUT')
        @endisset
            <div class="col-12">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                value="{{ isset($category) ? $category->category_name : old('category_name') }}">
                @error('category_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <label for="category_img" class="form-label">Category Image</label>
                <input class="form-control" type="file" id="category_img" name="category_img"
                value="{{ isset($category) ? '' : old('category_img') }}">
                @error('category_img')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-12">
                <img id="showImage" src="{{ isset($category) ? ($category->category_img ? asset($category->category_img) : asset('backend/images/upload/no_image.jpg')) : asset('backend/images/upload/no_image.jpg') }}" alt="Admin" class="p-1 bg-light" width="150" height="150">
            </div>
            <div class="col-md-12">
                <div class="d-md-flex d-grid align-items-center gap-3">
                    <button type="submit" class="btn btn-outline-primary px-5">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#category_img').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>