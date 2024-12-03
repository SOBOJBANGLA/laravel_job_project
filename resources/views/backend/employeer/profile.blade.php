@extends('backend.layouts.app')

@section('css')
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- App css -->
  <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

  <!-- Icons -->
  <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

	
@endsection

@section('js')
<script src="{{asset ('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{asset ('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset ('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{asset ('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{asset ('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{asset ('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
<script src="{{asset ('assets/libs/feather-icons/feather.min.js') }}"></script>

<!-- Apexcharts JS -->
<script src="{{asset ('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- for basic area chart -->
<script src="{{asset ('https://apexcharts.com/samples/assets/stock-prices.js') }}"></script>

<!-- Widgets Init Js -->
<script src="{{asset ('assets/js/pages/crm-dashboard.init.js') }}"></script>

<!-- App js-->
<script src="{{asset ('assets/js/app.js') }}"></script>
@endsection

@section('content')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Profile</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img src="{{ asset('assets/images/small/user-image.jpg') }}" class="rounded-top-2 img-fluid" alt="image data">

                    <div class="card-body">
                        <div class="align-items-center">
                            
                            <div class="silva-main-sections">
                                <div class="silva-profile-main">
                                    <img src="{{ asset(Auth()->guard()->user()->photo) }}" class="rounded-circle img-fluid avatar-xxl img-thumbnail float-start" alt="image profile">

                                    <span class="sil-profile_main-pic-change img-thumbnail">
                                        <i class="mdi mdi-camera text-white"></i>
                                    </span>
                                </div>

                                <div class="overflow-hidden ms-md-4 ms-0">
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">{{Auth()->guard()->user()->name}}</h4>
                                    <p class="my-1 text-muted fs-16">{{Auth()->guard()->user()->company->name}}</p>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pt-0">
                        <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active p-2" id="profile_about_tab" data-bs-toggle="tab" href="#profile_about" role="tab">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                    <span class="d-none d-sm-block">About</span>
                                </a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link p-2" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                    <span class="d-none d-sm-block">Setting</span>
                                </a>
                            </li>
                            
                            
                        </ul>

                        <div class="tab-content text-muted bg-white">
                            <div class="tab-pane active show pt-4" id="profile_about" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-md-6 mb-4">
                                        <div class="">
                                            <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">About me</h5>
                                            <p>{{Auth()->guard()->user()->description}}...
                                            </p>
                                        </div>

                                        
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-md-6 mb-4">
                                        <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">Contact Details</h5>
                                        
                                        <div class="row">

                                            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
                                                <div class="profile-email mb-md-2">
                                                    <h6 class="text-uppercase fs-13">Email Addess</h6>
                                                    <a href="#" class="text-primary fs-14 text-decoration-underline">{{Auth()->guard()->user()->email}}</a>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
                                                <div class="profile-email">
                                                    <h6 class="text-uppercase fs-13">Social Media</h6>
                                                    <ul class="social-list list-inline mt-0 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-item border-primary text-primary justify-content-center align-content-center"><i class="mdi mdi-facebook fs-14"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-item border-danger text-danger justify-content-center align-content-center"><i class="mdi mdi-google fs-14"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-item border-info text-info justify-content-center align-content-center"><i class="mdi mdi-twitter fs-14"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-item border-secondary text-secondary justify-content-center align-content-center"><i class="mdi mdi-github fs-14"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
                                                <div class="profile-email">
                                                    <h6 class="text-uppercase fs-13">Location</h6>
                                                    <a href="#" class="fs-14">{{Auth()->guard()->user()->location->location_name}}</a>
                                                </div>
                                            </div>
                                        </div>                                                    

                                       
                                    </div>
                                </div>

                               

                            </div><!-- end Experience -->
                            
                          <!-- end Experience -->

                            <!-- end education -->

                            <div class="tab-pane pt-4" id="profile_setting" role="tabpanel">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card border">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">Personal Information</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <form method="post" action="{{route('employeer.profile.store')}}" enctype="multipart/form-data">
                                                        @csrf
                                                       
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Employeer Name</label>
                                                            <input type="text"name="name" value="{{$items->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title">
                                                            @error('name') <div class="text text-danger">{{ $message }}</div> @enderror
                                                        </div>
                                    
                                                        {{-- <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Company Name</label>
                                                            <input type="text" name="company" value="{{$items->company->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Location</label>
                                                            <input type="text"name="location" value="{{$items->location->location_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title">
                                                        </div> --}}

                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Company</label>
                                                            <select id="simpleinput" name="company" class="form-select" aria-label="Default select example">
                                                                <option selected>Select Company</option>
                                                                @foreach($companies as $company) 
                                                                <option value="{{ $company->id }}"> {{ $company->name }} </option> 
                                                                @endforeach
                                                            </select>
                                                            @error('company') <div class="text text-danger">{{ $message }}</div> @enderror
                                                        </div>
                                    
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Company Location</label>
                                                            <select id="simpleinput" name="location" class="form-select" aria-label="Default select example">
                                                                <option selected>Select location </option>
                                                                @foreach($locations as $location)	
                                                                <option value="{{ $location->id}}">{{$location->location_name}}</option>
                                                                                                            
                                                                @endforeach
                                                            </select>
                                                            @error('location') <div class="text text-danger">{{ $message }}</div> @enderror
                                                        </div>
                                    
                                    
                                                        <div class="form-group mb-3">
                                                            <label for="emailaddress" class="form-label">Email address</label>
                                                            <input class="form-control" type="email" name="email" value="{{$items->email}}" id="emailaddress"   required="" placeholder="Enter your email">
                                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                    
                                                        
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Image</label>
                                                            <input class="form-control" type="file" name="photo" id="formFile">
                                                            <img src="{{ asset($items->photo) }}" width="100px">
                                                            @error('photo') <div class="text text-danger">{{ $message }}</div> @enderror
                                                        </div>
                                    
                                    
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">About</label>
                                                            <textarea type="text" name="description"  class="form-control" id="exampleInputEmail1" placeholder="Description" rows="10">{{Auth()->guard()->user()->description}}</textarea>
                                                            @error('description') <div class="text text-danger">{{ $message }}</div> @enderror
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>

                                                </div><!--end card-body-->
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">Change Password</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body mb-0">
                                                    <form method="post" action="{{route('employeer.profile.store')}}" >
                                                        @csrf
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Old Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="old_password"  type="password" placeholder="Old Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">New Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="password" name="new_password" placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Confirm Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary mb-2 mb-md-0">Change Password</button>
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div><!--end card-body-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end education -->

                            <!-- end education -->

                        </div> <!-- Tab panes -->
                    </div>
                </div>
            </div>
        </div>

    </div> 
    <!-- container-fluid -->
</div>
@endsection

 