<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title', 'Dashboard')</title>

<!-- Global stylesheets -->
<link href="{{ asset('administrator/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('administrator/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('administrator/assets/css/ltr/all.min.css') }}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="{{ asset('administrator/assets/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('administrator/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
@stack('jscore')
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('administrator/assets/js/app.js') }}"></script>
<script src="{{ asset('administrator/custom/js/myscript.js') }}"></script>
<!-- /theme JS files -->