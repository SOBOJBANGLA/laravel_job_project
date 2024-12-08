<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Jobnova - Job Board & Job Portal Bootstrap 5 Template</title>
	    <meta name="description" content="Job Listing Bootstrap 5 Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, Job Listing, Job Board, Job, Job Portal" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
       
	    <!-- favicon -->
        <link href="images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />
        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>        
        <section class="bg-home d-flex align-items-center" style="background: url('images/hero/bg3.jpg') center;">
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="container">
                <div class="row"  style="height: 80%">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                            
                                <a href="index.html"><img src="images/logo-dark.png" class="mb-4 d-block mx-auto" alt=""></a>
                                <h6 class="mb-3 text-uppercase fw-semibold">Register your account</h6>

                                <form method="POST" action="{{ route('candidate_register') }}">
                                    @csrf
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Calvin Carlo">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="example@website.com">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" id="loginpass" placeholder="Password">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="confirm_password" class="form-control" id="loginpass" placeholder="Password">
                                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            
                                
                                <button class="btn btn-primary w-100" type="submit">Register</button>
                            </form>
                                <div class="col-12 text-center mt-3">
                                    <span><span class="text-muted small me-2">Already have an account ? </span> <a href="{{ route('candidate_login_form') }}" class="text-dark fw-semibold small">Sign in</a></span>
                                </div><!--end col-->
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
       
        <!--end section-->
        <!-- ENd Hero -->
        
        <!-- javascript -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
	    <!-- Custom -->
	    <script src="{{ asset('js/plugins.init.js') }}"></script>
	    <script src="{{ asset('js/app.js') }}"></script>

        
    </body>

</html>