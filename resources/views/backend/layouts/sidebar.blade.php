<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="{{url('/admin/dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="{{url('/admin/dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/lg.png') }}" alt="" height="35">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{url('/admin/dashboard')}}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                        {{-- <span class="menu-arrow"></span> --}}
                    </a>
                  
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Company </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('company.index')}}" class="tp-link">Company List</a>
                            </li>
                            <li>
                                <a href="{{route('company.create')}}" class="tp-link">New Company</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('category.index')}}" class="tp-link">Category List</a>
                            </li>
                            <li>
                                <a href="{{route('category.create')}}" class="tp-link">New Category</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('user_contact') }}" >
                        <i data-feather="users"></i>
                        <span> User Contact </span>
                        
                    </a>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Jobtype </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('jobtype.index')}}" class="tp-link">Jobtype List</a>
                            </li>
                            <li>
                                <a href="{{route('jobtype.create')}}" class="tp-link">New Jobtype</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Location </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('location.index')}}" class="tp-link">Location List</a>
                            </li>
                            <li>
                                <a href="{{route('location.create')}}" class="tp-link">New Location</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Jobs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('job.index')}}" class="tp-link">Jobs List</a>
                            </li>
                            <li>
                                <a href="{{route('job.create')}}" class="tp-link">Post a job</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Employer </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('employeer.index')}}" class="tp-link">Employer List</a>
                            </li>
                            <li>
                                <a href="{{route('employeer.create')}}" class="tp-link">Add Employer</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Report </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.report')}}" class="tp-link">Job Report</a>
                            </li>
                            <li>
                                <a href="{{route('admin.report.form')}}" class="tp-link">Find Company</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>




              

               

               

            </ul>

        </div>
        <!-- End Sidebar -->

        {{-- <div class="clearfix"></div> --}}

    </div>
</div>