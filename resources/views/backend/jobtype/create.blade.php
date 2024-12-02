@extends('backend.layouts.app')
@section('css')
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- App css -->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('js')
         <!-- Vendor -->
         <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
         <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
         <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
         <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
         <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
         <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
         <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
 
         <!-- App js-->
         <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection

@section('content')
<div class="row">
    
    <div class="row justify-content-center">
    <div class="col-lg-8 offset-1 mt-5 ">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Create JobType</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form method="post" action="{{route('jobtype.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">JobType Name</label>
                        <input type="text"name="jobtype_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Jobtype Name">
                        
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
   
</div>
@endsection
