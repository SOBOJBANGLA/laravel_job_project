@extends('backend.layouts.app')

@section('content')
<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">
		<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
			<div class="flex-grow-1">
				<h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
			</div>
		</div>

		<!-- start row -->
		<div class="row">
			<div class="col-md-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h5 class="card-title text-black mb-0">Welcome Employeer Dashboard</h5>

						</div>
					</div>

					<div class="card-body">
						<img src="{{asset('images/welcone.jpg')}}" style="width: 100%">
					</div>
				</div>
			</div>

			
		</div>
		<!-- end start -->

		<!-- Start Monthly Sales -->
		

	</div> <!-- container-fluid -->
</div>
	
@endsection