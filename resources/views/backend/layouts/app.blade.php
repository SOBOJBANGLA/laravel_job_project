<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | JobHub - Responsive Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		@yield('css')
      
    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">


			@if(Auth()->guard('admin')->check())
			@include('backend.layouts.topbar')
			@elseif(Auth()->guard('employeer')->check())
			@include('backend.layouts.employeer_topbar')
			@endif
		   
		   <!-- /Top Menu Items -->
		   
		   <!-- Left Sidebar Menu -->
		   @if(Auth()->guard('admin')->check())
		   @include('backend.layouts.sidebar')
		   @elseif(Auth()->guard('employeer')->check())
		   @include('backend.layouts.employeer_sidebar')
		   @endif

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                 <!-- content -->
				@yield('content')
                <!-- Footer Start -->
                @include('backend.layouts.footer')
                <!-- end Footer -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
       
		@yield('js')
    </body>
</html>{{ asset('') }}