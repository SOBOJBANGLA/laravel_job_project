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
                <h5 class="card-title mb-0">Edit Job</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form method="post" action="{{route('employeer.update',$employeer->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Employeer Name</label>
                        <input type="text"name="name" value="{{old('name')??$employeer->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title">
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Company</label>
                        <select id="simpleinput" name="company" class="form-select" aria-label="Default select example">
                            <option selected>Select Company</option>
                            @foreach($companies as $company) 
                            <option {{ $employeer->company_id == $company->id ? 'selected' : '' }} value="{{ $company->id }}"> {{ $company->name }} </option> 
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Company Location</label>
                        <select id="simpleinput" name="location" class="form-select" aria-label="Default select example">
                            <option selected>Select location </option>
                            @foreach($locations as $location)	
							<option {{ ($employeer->location_id == $location->id) ? 'selected' : '' }} value="{{ $location->id}}">{{$location->location_name}}</option>
																		
							@endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" name="email" value="{{old('email')??$employeer->email}}" id="emailaddress"   required="" placeholder="Enter your email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" value="{{old('password')??$employeer->password}}" required="" id="password" placeholder="Enter your password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="photo" id="formFile">
                        <img src="{{asset($employeer->photo)}}" width="100px">
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">About</label>
                        <textarea type="text" name="description"  class="form-control" id="exampleInputEmail1" placeholder="Description" rows="10">{{old('description')??$employeer->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Status</label>
                        <div class="form-control">
                            <input id="radio1" type="radio" name="status" value="active" @if(old('status')=='active') checked @elseif($employeer->status == 'active')checked @endif>
                            <label for="radio1">
                                Active
                            </label>
                            <input id="radio2" type="radio" name="status" value="inactive" @if(old('status')=='inactive') checked @elseif($employeer->status == 'inactive')checked @endif>
                            <label for="radio2">
                                Inactive
                            </label>
                            @error('status')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                        </div>
                
            </div>

                   
                    
                    
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
   
</div>
@endsection
