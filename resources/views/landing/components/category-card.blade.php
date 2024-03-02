<div class="category-wrapper mt-30px">
    <div class="row">
        @forelse ($categories as $category)
        <div class="col-lg-4 responsive-column-half">
            <div class="category-item">
                <img class="cat__img lazy" src="{{ $category->category_img ? asset($category->category_img) : asset('backend/images/upload/no_image.jpg') }}" alt="Category image">
                <div class="category-content">
                    <div class="category-inner">
                        <h3 class="cat__title"><a href="#">{{ $category->category_name }}</a></h3>
                        <p class="cat__meta">6 spots</p>
                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-white">Explore<i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end category-content -->
            </div><!-- end category-item -->
        </div><!-- end col-lg-4 -->
        @empty
        <p class="no-data-text">No Categories</p>
        @endforelse

    </div><!-- end row -->
</div><!-- end category-wrapper -->