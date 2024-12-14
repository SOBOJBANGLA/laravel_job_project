<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Jobhub - Job Board & Job Portal</title>
	    <meta name="description" content="Job Listing Bootstrap 5 Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, Job Listing, Job Board, Job, Job Portal" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/choices.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>
        <!-- Navbar STart -->
        @include('frontend.layouts.header')
        <!-- Navbar End -->
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
        <!-- Hero Start -->
        @yield('content')

        <!-- Footer Start -->
        @include('frontend.layouts.footer')
        <!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
	    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/tiny-slider.js') }}"></script>
        <script src="{{ asset('js/tobii.min.js') }}"></script>
        <script src="{{ asset('js/choices.min.js') }}"></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
	    <!-- Custom -->
	    <script src="{{ asset('js/plugins.init.js') }}"></script>
	    <script src="{{ asset('js/app.js') }}"></script>
        @yield('customJs')
    </body>
</html>