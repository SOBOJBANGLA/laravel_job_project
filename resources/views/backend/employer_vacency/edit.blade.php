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
                <form method="post" action="{{route('vacancy.update',$vacancy->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Job Title</label>
                        <input type="text"name="title" value="{{old('title')??$vacancy->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title">
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Employer</label>
                        <select id="simpleinput" name="employer" class="form-select" aria-label="Default select example">
                            <option selected>Select Company</option>
                            @foreach($employeers as $employer)
                            <option {{ $vacancy->employeer_id == $employer->id ? 'selected' : '' }} value="{{ $employer->id }}"> {{ $employer->name }} </option> 
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Company</label>
                        <select id="simpleinput" name="company" class="form-select" aria-label="Default select example">
                            <option selected>Select Company</option>
                            @foreach($companies as $company) 
                            <option {{ $vacancy->company_id == $company->id ? 'selected' : '' }} value="{{ $company->id }}"> {{ $company->name }} </option> 
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Company Location</label>
                        <select id="simpleinput" name="location" class="form-select" aria-label="Default select example">
                            <option selected>Select location </option>
                            @foreach($locations as $location)	
							<option {{ ($vacancy->location_id == $location->id) ? 'selected' : '' }} value="{{ $location->id}}">{{$location->location_name}}</option>
																		
							@endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Job Category</label>
                        <select id="simpleinput"  name="category" class="form-select" aria-label="Default select example">
                            <option selected>Select Category</option>
                            @foreach($categories as $category)	
							<option {{ ($vacancy->category_id == $category->id) ? 'selected' : '' }} value="{{ $category->id}}">{{$category->category_name}}</option>
																		
							@endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Job Type</label>
                        <select id="simpleinput" name="jobtype" class="form-select" aria-label="Default select example">
                            <option selected>Select Job Type</option>
                            @foreach($jobtypes as $jobtype)	
							<option {{ ($vacancy->jobtype_id == $jobtype->id) ? 'selected' : '' }} value="{{ $jobtype->id}}">{{$jobtype->jobtype_name}}</option>
																		
							@endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vacancy</label>
                        <input type="text" name="vacancy" value="{{old('vacancy')??$vacancy->vacancy}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Vacancy">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Salary</label>
                        <input type="text"name="salary" value="{{old('salary')??$vacancy->salary}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Salary">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea type="text" name="description"  class="form-control" id="exampleInputEmail1" placeholder="Description" rows="10">{{old('description')??$vacancy->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Benefits</label>
                        <textarea type="text" name="benefits" value="" class="form-control" id="exampleInputEmail1" placeholder="Benefits" rows="10">{{old('benefits')??$vacancy->benefits}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Responsibility</label>
                        <textarea type="text" name="responsibility" value="" class="form-control" id="exampleInputEmail1" placeholder="Responsibility" rows="10">{{old('responsibility')??$vacancy->responsibility}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Qualifications</label>
                        <textarea type="text" name="qualifications" value="" class="form-control" id="exampleInputEmail1" placeholder="Qualifications" rows="10">{{old('qualifications')??$vacancy->qualifications}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keywords</label>
                        <textarea type="text" name="keywords" value="" class="form-control" id="exampleInputEmail1" placeholder="Keywords" rows="10">{{old('keywords')??$vacancy->keywords}}</textarea>
                    </div>

                    

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Experience</label>
                        <input type="text" name="experience" value="{{old('experience')??$vacancy->experience}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Experience">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company  website</label>
                        <input type="text" name="company_website" value="{{old('company_website')??$vacancy->company_website}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company website">
                    </div>

                    <div class="mb-3">
                        <label for="example-date" class="form-label">Job end date</label>
                        <input type="date" id="example-date" value="{{old('job_end_date')??$vacancy->job_end_date}}" class="form-control" name="job_end_date">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
   
</div>
@endsection
