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
         <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
                <h5 class="card-title mb-0">Create Company</h5>
            </div><!-- end card header -->
         
            <div class="card-body">
                <form method="post" action="{{route('company.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company Name</label>
                        <input type="text"name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                        @error('name')
						<div class="text text-danger">{{$message}}</div>
						@enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <textarea type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address" rows="10">{{old('address')}}</textarea>
                        @error('address')
						<div class="text text-danger">{{$message}}</div>
						@enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
   
</div>
@endsection
