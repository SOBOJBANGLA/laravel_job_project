@extends('frontend.layouts.app')

@section('title','JobDetail')

@section('content')

<section class="bg-half d-table w-100 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6 col-12">

                <div class="d-lg-flex align-items-center p-4 rounded shadow bg-white mb-4">
                    <img src="{{ asset('images/company/circle-logo.png') }}" class="avatar avatar-medium p-4 rounded-pill shadow bg-white" alt="">

                    <div class="ms-lg-3 mt-3 mt-lg-0">
                        <h4>{{ $job->title }}</h4>

                        <ul class="list-unstyled mb-0">
                            <li class="d-inline-flex align-items-center text-muted me-2"><i data-feather="layout" class="fea icon-sm text-primary me-1"></i> {{ $job->company->name }}</li>
                            <li class="d-inline-flex align-items-center text-muted"><i data-feather="map-pin" class="fea icon-sm text-primary me-1"></i> {{ $job->location->location_name }}</li>
                        </ul>
                    </div>
                </div>

                <h5>Job Description: </h5>
                <p class="text-muted">{{ $job->description }}</p>
               
                
                <h5 class="mt-4">Responsibilities and Duties: </h5>
                <p class="text-muted">{{ $job->responsibility }}</p>
                {{-- <ul class="list-unstyled">
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Participate in requirements analysis</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Write clean, scalable code using C# and .NET frameworks</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Test and deploy applications and systems</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Revise, update, refactor and debug code</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Improve existing software</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Develop documentation throughout the software development life cycle (SDLC)</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Serve as an expert on applications and provide technical support</li>
                </ul> --}}

                <h5 class="mt-4">Required Experience, Skills and Qualifications: </h5>
                <p class="text-muted">{{ $job->qualifications }}</p>
                {{-- <ul class="list-unstyled">
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Proven experience as a .NET Developer or Application Developer</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>good understanding of SQL and Relational Databases, specifically Microsoft SQL Server.</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Experience designing, developing and creating RESTful web services and APIs</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Basic know how of Agile process and practices</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Good understanding of object-oriented programming.</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Good understanding of concurrent programming.</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Sound knowledge of application architecture and design.</li>
                    <li class="text-muted mt-2"><i data-feather="arrow-right" class="fea icon-sm text-primary me-2"></i>Excellent problem solving and analytical skills</li>
                </ul> --}}

                <div class="mt-4">
                    <a href="{{route('applicant.create',$job->id)}}" class="btn btn-outline-primary">Apply Now <i class="mdi mdi-send"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white rounded shadow sticky-bar">
                    <div class="p-4">
                        <h5 class="mb-0">Job Information</h5>
                    </div>

                    <div class="card-body p-4 border-top">
                        <div class="d-flex widget align-items-center">
                            <i data-feather="layout" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Company Name:</h6>
                                <small class="text-primary mb-0">{{ $job->company->name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="user-check" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Category Type:</h6>
                                <small class="text-primary mb-0">{{ $job->category->category_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="map-pin" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Location:</h6>
                                <small class="text-primary mb-0">{{ $job->location->location_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="monitor" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Job Type:</h6>
                                <small class="text-primary mb-0">{{ $job->jobtype->jobtype_name }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="briefcase" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Experience:</h6>
                                <small class="text-primary mb-0">{{ $job->experience }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="book" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Qualifications:</h6>
                                <small class="text-primary mb-0">{{ $job->qualifications }}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="dollar-sign" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">Salary:</h6>
                                <small class="text-primary mb-0">{{ $job->salary}}</small>
                            </div>
                        </div>

                        <div class="d-flex widget align-items-center mt-3">
                            <i data-feather="clock" class="fea icon-ex-md me-3"></i>
                            <div class="flex-1">
                                <h6 class="widget-title mb-0">End Date:</h6>
                                <small class="text-primary mb-0 mb-0">{{ $job->job_end_date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center mb-4 pb-2">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title mb-3">Related Vacancies</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="job-post rounded shadow bg-white">
                    <div class="p-4">
                        <a href="job-detail-two.html" class="text-dark title h5">Web Designer / Developer</a>

                        <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                        <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                            <li class="list-inline-item"><span class="badge bg-soft-primary">Full Time</span></li>
                            <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center p-4 border-top">
                        <img src="images/company/facebook-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                        <div class="ms-3">
                            <a href="employer-profile.html" class="h5 company text-dark">Facebook</a>
                            <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="job-post rounded shadow bg-white">
                    <div class="p-4">
                        <a href="job-detail-two.html" class="text-dark title h5">Marketing Director</a>

                        <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                        <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                            <li class="list-inline-item"><span class="badge bg-soft-primary">Part Time</span></li>
                            <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center p-4 border-top">
                        <img src="{{ asset('images/company/google-logo.png')}}" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                        <div class="ms-3">
                            <a href="employer-profile.html" class="h5 company text-dark">Google</a>
                            <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="job-post rounded shadow bg-white">
                    <div class="p-4">
                        <a href="job-detail-two.html" class="text-dark title h5">Php Developer</a>

                        <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                        <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                            <li class="list-inline-item"><span class="badge bg-soft-primary">Remote</span></li>
                            <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center p-4 border-top">
                        <img src="{{ asset('images/company/whatsapp.png')}}" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                        <div class="ms-3">
                            <a href="employer-profile.html" class="h5 company text-dark">Whatsapp</a>
                            <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

@endsection



