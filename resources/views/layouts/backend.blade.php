<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--plugins-->
	<link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('backend/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/css/header-colors.css') }}" />
	<title>
        @hasSection('title')
            @yield('title')
        @else
            Qnect
        @endif
    </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		@yield('body')
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('admin.components.footer')
	</div>
	<!--end wrapper-->


	<!-- search modal -->
	@include('admin.components.modal')
	<!-- end search modal -->
	<!-- Bootstrap JS -->
	<script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('backend/plugins/chartjs/js/chart.js') }}"></script>
	<script src="{{ asset('backend/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('backend/js/app.js') }}"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>
</body>
</html>