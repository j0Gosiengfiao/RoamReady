@extends('layouts.backend')

@section('title', 'Qnect - Admin')
@section('body')
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <h4 class="">Logo</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>
            <li class="menu-label">Manage</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-user-pin'></i>
                    </div>
                    <div class="menu-title">Accounts</div>
                </a>
                <ul>
                    <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Users</a>
                    </li>
                    <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Hotels</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-briefcase'></i>
                    </div>
                    <div class="menu-title">Travels</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Activities</a>
                    </li>
                    <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Categories</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">Website Content</div>
                </a>
                <ul>
                    <li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Featured Images</a>
                    </li>
                </ul>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>

                <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal"
                    data-bs-target="#SearchModal">
                    <input class="form-control px-5" disabled type="search" placeholder="Search">
                    <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i
                            class='bx bx-search'></i></span>
                </div>


                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">
                        <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#SearchModal">
                            <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="header-notifications-list">

                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="header-message-list">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                        <div class="user-info">
                            <p class="user-name mb-0">Pauline Seitz</p>
                            <p class="designattion mb-0">Web Designer</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-cog fs-5"></i><span>Settings</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-log-out-circle fs-5"></i><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('search-list')
    <div class="search-list">
        <p class="mb-1">Html Templates</p>
        <div class="list-group">
            <a href="javascript:;"
                class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-angular fs-4'></i>Best Html Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
        </div>
        <p class="mb-1 mt-3">Web Designe Company</p>
        <div class="list-group">
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-windows fs-4'></i>Best Html Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-dropbox fs-4'></i>Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
        </div>
        <p class="mb-1 mt-3">Software Development</p>
        <div class="list-group">
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
        </div>
        <p class="mb-1 mt-3">Online Shoping Portals</p>
        <div class="list-group">
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-slack fs-4'></i>Best Html Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-skype fs-4'></i>Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
            <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                    class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
        </div>
    </div>
@endsection
