@extends('layouts.landing')

@section('page-content')

<!--================================
         START HERO AREA
=================================-->
@include('landing.components.hero')
<!--================================
    END HERO AREA
=================================-->

<!--======================================
    START FEATURE AREA
======================================-->
@include('landing.components.feature')
<!--======================================
   END FEATURE AREA
======================================-->

<!--======================================
    START CATEGORY AREA
======================================-->
@include('landing.components.category')
<!--======================================
    END CATEGORY AREA
======================================-->

<!--======================================
    START POPULAR AREA
======================================-->
@include('landing.components.popular')
<!--======================================
    END POPULAR AREA
======================================-->

<!--================================
     START TESTIMONIAL AREA
=================================-->
@include('landing.components.testimonials')
<!--================================
    END TESTIMONIAL AREA
=================================-->

<div class="section-block"></div>

<!--======================================
    START ABOUT AREA
======================================-->
@include('landing.components.about')
<!--======================================
    END ABOUT AREA
======================================-->

<!-- ================================
   START PARTNERS-LOGO AREA
================================= -->
@include('landing.components.partners')
<!-- ================================
   END PARTNERS-LOGO AREA
================================= -->

<!--======================================
    START SUBSCRIBER AREA
======================================-->
@include('landing.components.subscribe')
<!--======================================
    END SUBSCRIBER AREA
======================================-->

@endsection