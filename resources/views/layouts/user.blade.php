@extends('layouts.master')

@section('body')
    <!--======================================
                START HEADER AREA
            ======================================-->
    @include('user.components.header')
    <!--======================================
                    END HEADER AREA
            ======================================-->

    <!-- ================================
                START DASHBOARD AREA
            ================================= -->

            <section class="dashboard-area">
                <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
                    @include('user.components.sidebar')
                </div><!-- end off-canvas-menu -->
                <div class="dashboard-content-wrap">
                    <div class="container-fluid">
                        @yield('page-content')
                        @include('user.components.footer')
                    </div><!-- end container-fluid -->
                </div><!-- end dashboard-content-wrap -->
            </section><!-- end dashboard-area -->
            
    <!-- ================================
                END DASHBOARD AREA
            ================================= -->
@endsection

@section('additional')
    <!-- Modal -->
    <div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="la la-exclamation-circle fs-60 text-warning"></span>
                    <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will
                        be deleted permanently!</h4>
                    <p>Are you sure you want to delete your account?</p>
                    <div class="btn-box pt-4">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                    </div>
                </div><!-- end modal-body -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
@endsection
