@extends('layouts.landing')

@section('page-content')
<section class="category-area pb-90px" id="categories-section">
    <div class="container">
        @include('landing.components.category-card')
    </div><!-- end container -->
</section><!-- end category-area -->
@endsection