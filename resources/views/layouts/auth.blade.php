<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>

    <div class="main-container">
        <!-- First Div -->
        <div class="info-div md:w-3/5">
            <div class="info-content">
                <h1 class="mb-5 font-extrabold text-l lg:text-xl leading-tight transition-all duration-300 ease-in-out">
                    Discover Unmatched Exploration with TourXperience
                </h1>
                <h4 class="mb-5 font-normal text-l lg:text-xl leading-tight transition-all duration-300 ease-in-out">
                    Transformative journeys where every destination is an adventure, every itinerary a masterpiece.
                </h4>
                <a class="link" href={{ route('landing') }}>Explore more &rarr;</a>
            </div>

        </div>

        <!-- Second Div -->
        <div class="md:w-2/5">
            <!-- Content goes here -->
            @yield('form')
        </div>



    </div>

</body>

</html>
