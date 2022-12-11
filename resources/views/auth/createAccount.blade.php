<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register - Incredible Bridge</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('administrator/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('administrator/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('administrator/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('administrator/assets/demo/demo_configurator.js') }}"></script>
	<script src="{{ asset('administrator/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('administrator/assets/js/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="{{ asset('administrator/assets/images/logo_icon.svg') }}" alt="">
					<img src="{{ asset('administrator/assets/images/logo_text_light.svg') }}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>

			<div class="d-flex justify-content-end align-items-center ms-auto">
				<ul class="navbar-nav flex-row">
					<li class="nav-item">
						<a href="{{ route('auth.showCreateAcount') }}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle-plus"></i>
							<span class="d-none d-md-inline-block ms-2">Register</span>
						</div>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('auth.showLogin') }}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
							<div class="d-flex align-items-center mx-md-1">
							<i class="ph-user-circle"></i>
							<span class="d-none d-md-inline-block ms-2">Login</span>
						</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="{{ route('auth.check_account') }}" method="POST"  enctype="multipart/form-data">
						@csrf

						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="{{ asset('administrator/assets/images/logo_icon.svg') }}" class="h-48px" alt="">
									</div>
									<h5 class="mb-0"><strong>Register</strong></h5>
									<span class="d-block text-muted">Enter your registration information below.</span>
								</div>

								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								
								
								<div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="email" name="email"  class="form-control" placeholder="JonhCena79@gmail.com"> 
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password"  name="password" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password Confirm</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password"  name="password_confirmation" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<label class="form-label">Name</label>
									<input type="text"  name="name" class="form-control" placeholder="example: Neymar Junior">
								</div> 


								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Create !</button>
								</div>

								<div class="text-center">
									<a href="{{ route('auth.showLogin') }}">Login if you already have an account</a>
								</div>
							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->
				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; Aptech - 2022 <a href="#"> Incredible Bridge</a></span>

						<ul class="nav">
							<li class="nav-item">
								<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-file-text"></i>
										<span class="d-none d-md-inline-block ms-2">About Us</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Demo config -->

	<!-- /demo config -->

</body>
</html>
