@extends('frontend.layouts.app')

@section('title','Jobs')

@section('content')
 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('{{asset ('images/hero/bg.jpg') }}');">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">My Applied Jobs</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
   <!--end container-->

    <div class="container mt-60">
        <div class="row g-4">
            @foreach ($items as $item)
            <div class="col-12">
                <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex align-items-center w-310px">
                        <img src="{{asset ('images/company/circle-logo.png')}}" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                        <div class="ms-3">
                            <a href="job-detail-one.html" class="h5 title text-dark">{{$item->job->title}}</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                       
                        <span class="text-muted d-flex align-items-center fw-medium mt-md-2"><i data-feather="home" class="fea icon-sm me-1 align-middle"></i>{{$item->job->company->name}}</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                        <span class="badge bg-soft-primary rounded-pill">{{$item->job->jobtype->jobtype_name}}</span>
                    </div>

                    <div class="mt-3 mt-md-0">
                        <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>{{$item->job->location->location_name}}</span>
                        <span class="d-flex fw-medium mt-md-2">{{$item->job->salary}}</span>
                    </div>

                    <div class="mt-3 mt-md-0">
                        <span class="d-flex fw-medium mt-md-2" style="color: @if($item->status == 'Apply Approved') green @elseif ($item->status == 'Apply Decline') red @else blue @endif ;">{{$item->status}}</span>
                    </div>
                </div>
            </div><!--end col-->

            @endforeach
        </div><!--end row-->

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-left fs-6"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-right fs-6"></i></span>
                        </a>
                    </li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center mb-4 pb-2">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title mb-3">Here's why you'll love it Jobnova</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="phone" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">24/7 Support</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="cpu" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Tech & Startup Jobs</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="activity" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Quick & Easy</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="clock" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Save Time</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection



