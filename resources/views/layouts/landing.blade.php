@extends('layouts.master')

@section('body')
    <!--======================================
                    START HEADER AREA
                ======================================-->
    @include('landing.components.header')
    <!--======================================
                    END HEADER AREA
            ======================================-->

    @yield('page-content')

    <!-- ================================
                     START FOOTER AREA
            ================================= -->
    @include('landing.components.footer')
    <!-- ================================
                      END FOOTER AREA
            ================================= -->
@endsection