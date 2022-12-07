<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	@include("admin.partials.head")
</head>

<body>

	<!-- Main navbar -->
	@include("admin.partials.navbar")
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include("admin.partials.sidebar")
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				@include("admin.partials.page-header")
				<!-- /page header -->
				

				<!-- Content area -->
				<div class="content.abc">
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
                    <div class="row">
						@yield("content")
					</div>
                </div>
				<!-- /content area -->


				<!-- Footer -->
				@include('admin.partials.footer')
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
