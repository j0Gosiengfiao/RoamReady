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

    <div class="flex h-screen">
        <!-- First Div -->
        <div class="w-2/5">
            <!-- Content goes here -->
            @yield('form')
        </div>

        <!-- Second Div -->
        <div class=" bg-gray-200 w-3/5">
            <!-- Content goes here -->
        </div>

    </div>

</body>

</html>
