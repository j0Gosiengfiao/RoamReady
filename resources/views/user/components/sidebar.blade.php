<?php
// Get the current route name
$currentRoute = \Request::route()->getName();
//dd($currentRoute)
?>

<div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
    <i class="la la-times"></i>
</div><!-- end off-canvas-menu-close -->
<div class="">
    <a href="{{ route('landing') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo" width="60%" height="60%">
    </a>
</div>
<ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
    <li class="{{ $currentRoute == 'user.index' ? 'page-active' : '' }}"><a href="{{ route('user.index') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
            </svg>Explore</a></li>
    <li><a href="dashboard-profile.html"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z" />
            </svg>Edit My Profile</a></li>
    <li class="{{ $currentRoute == 'user.itineraries' || $currentRoute == 'user.itineraries.create' || $currentRoute == 'user.itineraries.edit' || $currentRoute == 'user.itineraries.show' ? 'page-active' : '' }}">
        <a href="{{ route('user.itineraries') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
            </svg>My Itineraries</a></li>

    <li><a href="dashboard-bookmark.html"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z" />
            </svg>Bookmarked Activities</a></li>

    <li><a href="dashboard-message.html"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
            </svg>Notifications<span class="badge badge-info p-1 ml-2">2</span></a></li>
    <li><a href="dashboard-withdraw.html"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z" />
                <circle cx="16" cy="12" r="1.5" />
            </svg>Previous</a></li>
    <hr>
    <h4 class="off-canvas-menu-heading pb-2">QNECT My Business</h4>
    <li class="{{ $currentRoute == 'user.qnect.activities' || $currentRoute == 'user.qnect.activities.create' || $currentRoute == 'user.qnect.activities.edit' ? 'page-active' : '' }}">
        <a href="{{ route('user.qnect.activities') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
            </svg>Activities</a></li>
    <li class="{{ $currentRoute == 'user.qnect.restaurants' || $currentRoute == 'user.qnect.restaurants.create' || $currentRoute == 'user.qnect.restaurants.edit' ? 'page-active' : '' }}">
        <a href="{{ route('user.qnect.restaurants') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
            </svg>Restaurants</a></li>
    <li class="{{ $currentRoute == 'user.qnect.accommodations' || $currentRoute == 'user.qnect.accommodations.create' || $currentRoute == 'user.qnect.accommodations.edit' ? 'page-active' : '' }}">
        <a href="{{ route('user.qnect.accommodations') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
            </svg>Accommodations</a></li>
    <li><a href={{ route('user.logout') }}><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z" />
            </svg>Logout</a></li>

</ul>
