<header id="topnav" class="defaultscroll sticky">
    @if (!Auth::check())
    <div class="container">
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="{{asset('images/logo-dark.png')}}" class="l-dark" alt="">
                <img src="{{asset('images/logo-light.png')}}" class="l-light" alt="">
            </span>
            <img src="{{asset('images/logo-light.png')}}" class="logo-dark-mode" alt="">
        </a>
  
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
  
       
  
        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-right nav-light">
                <li class="has-submenu parent-menu-item">
                    <a href="/">Home</a>
                    
                </li>
  
                <li class="has-submenu parent-parent-menu-item">
                  <a href="{{ route('jobs') }}"> Jobs </a>
                      
                </li>
        
                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('about') }}">About</a>
                    
                </li>
        
                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('contact') }}">Contact Us</a>
                    
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('blog') }}">Blogs</a>
                    
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('candidate_login_form') }}">Login</a>
                    
                </li>
    
                <li class="has-submenu parent-parent-menu-item">
                  <a href="{{ route('candidate_register') }}">Register</a>
                  
              </li>
               
        
                
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>
    @else
    <div class="container">
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="{{ asset('images/logo-dark.png') }}" class="l-dark" alt="">
                <img src="{{ asset('images/logo-light.png') }}" class="l-light" alt="">
            </span>
            <img src="{{ asset('images/logo-light.png') }}" class="logo-dark-mode" alt="">
        </a>
  
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
  
        <ul class="buy-button list-inline mb-0">
           
            <li class="list-inline-item ps-1 mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @php 
                        $candidateDetail = Auth::guard()->user()->candidateDetails->first();
                        @endphp
                        @if ($candidateDetail)
                        <img src="{{ asset($candidateDetail->image) }}" class="img-fluid rounded-pill" alt="">
                        @else
                        <img src="{{ asset('images/nophoto.jpg') }}" class="img-fluid rounded-pill" alt="">
                        @endif
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded shadow border-0 mt-3">
                        <a href="{{ route('user_profile') }}" class="dropdown-item fw-medium fs-6"><i data-feather="user" class="fea icon-sm me-2 align-middle"></i>Profile</a>
                        <a href="{{ route('profile_setting') }}" class="dropdown-item fw-medium fs-6"><i data-feather="settings" class="fea icon-sm me-2 align-middle"></i>Settings</a>
                        <div class="dropdown-divider border-top"></div>
                        <a href="{{ route('my_jobs') }}" class="dropdown-item fw-medium fs-6"><i data-feather="list" class="fea icon-sm me-2 align-middle"></i>My Jobs</a>
                        <a href="{{ route('user_logout') }}" class="dropdown-item fw-medium fs-6"><i data-feather="log-out" class="fea icon-sm me-2 align-middle"></i>Logout</a>
                    </div>
                </div>
            </li>
        </ul>
  
        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-right nav-light">
                <li class="has-submenu parent-menu-item">
                    <a href="/">Home</a>
                    
                </li>
  
                <li class="has-submenu parent-parent-menu-item">
                  <a href="{{ route('jobs') }}"> Jobs </a>
                      
                </li>
        
                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('about') }}">About</a>
                    
                </li>
        
                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('contact') }}">Contact Us</a>
                    
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('blog') }}">Blogs</a>
                    
                </li>
               
               
        
                
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>
    @endif
</header>