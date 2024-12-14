<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
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
                    <a href="{{url('/employeer/dashboard')}}" >
                        <i data-feather="home"></i>
                        <span>Employeer Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>
                    
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Jobs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('vacancy.index')}}" class="tp-link">Jobs List</a>
                            </li>
                            <li>
                                <a href="{{route('vacancy.create')}}" class="tp-link">Post a job</a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                {{-- <li>
                    <a href="#sidebarError" data-bs-toggle="collapse">
                        <i data-feather="alert-octagon"></i>
                        <span> Error Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarError">
                        <ul class="nav-second-level">
                            <li>
                                <a href="error-404.html" class="tp-link">Error 404</a>
                            </li>
                            <li>
                                <a href="error-500.html" class="tp-link">Error 500</a>
                            </li>
                            <li>
                                <a href="error-503.html" class="tp-link">Error 503</a>
                            </li>
                            <li>
                                <a href="error-429.html" class="tp-link">Error 429</a>
                            </li>
                            <li>
                                <a href="offline-page.html" class="tp-link">Offline Page</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i data-feather="file-text"></i>
                        <span> Utility </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html" class="tp-link">Starter</a>
                            </li>
                            <li>
                                <a href="pages-profile.html" class="tp-link">Profile</a>
                            </li>
                            <li>
                                <a href="pages-pricing.html" class="tp-link">Pricing</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html" class="tp-link">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-invoice.html" class="tp-link">Invoice</a>
                            </li>
                            <li>
                                <a href="pages-faqs.html" class="tp-link">FAQs</a>
                            </li>
                            <li>
                                <a href="pages-gallery.html" class="tp-link">Gallery</a>
                            </li>
                            <li>
                                <a href="pages-maintenance.html" class="tp-link">Maintenance</a>
                            </li>
                            <li>
                                <a href="pages-coming-soon.html" class="tp-link">Coming Soon</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Apps</li>
    
               

                <li class="menu-title mt-2">General</li> --}}
    
                

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>