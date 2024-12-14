@extends('frontend.layouts.app')

@section('title','JobDetail')

@section('content')
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('images/hero/bg.jpg') }}');">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                <img src="{{ asset('images/company/circle-logo.png') }}" class="avatar avatar-small rounded-pill p-2 bg-white" alt="">
                <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark mt-3">{{ $job->title }}</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                    <li class="breadcrumb-item"><a href="job-grid-one.html">Job</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Job Apply</li>
                </ul>
            </nav>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>


<section class="section bg-light">
    <div class="container">
        @if(session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-7">
                <div class="card border-0">
                    <form class="rounded shadow p-4" action="{{route('apply.job',$job->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
            <input type="hidden" name="job_id" value="{{ $job->id }}">
            <input type="hidden" name="employeer_id" value="{{ $job->employeer_id }}">
            <input type="hidden" name="candidate_id" value="@if(Auth::check()) {{ Auth::user()->id }} @endif">
            @if(Auth::check())

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Name :<span class="text-danger">*</span></label>
                                    <input name="name" id="name2" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email :<span class="text-danger">*</span></label>
                                    <input name="email" id="email2" value="{{Auth()->guard()->user()->email}}" type="email" class="form-control" placeholder="Your email :">
                                </div> 
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Phone no. :<span class="text-danger">*</span></label>
                                    <input name="contact" id="number2" type="text" class="form-control" placeholder="Your phone no. :">
                                </div> 
                            </div><!--end col-->
                           <!--end col-->                                    
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fw-semibold">Upload Your Cv / Resume :</label>
                                    <input class="form-control" name="pdf" type="file" id="formFile">
                                </div>                                                                               
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-12">
                                @if(Auth::check())
                                @if ($application)
                                <button class="btn btn-danger mr-15">Already Applied</button>
                            @else
                                <input type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Apply Now">
                                @endif
                            @endif
                            </div><!--end col-->
                        </div><!--end row-->
                        @endif
                    </form><!--end form-->
                </div><!--end custom-form-->
            </div>  
        </div>
    </div><!--end container-->
</section>

@endsection



