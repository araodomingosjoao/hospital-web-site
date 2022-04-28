<!DOCTYPE html>

<html lang="pt-AOA">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<link href="{{ asset('dashboard/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('dashboard/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="bg-body">

	@yield('content')

	<script src="{{ asset('dashboard/assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('dashboard/assets/js/scripts.bundle.js') }}"></script>
	<script src="{{ asset('dashboard/assets/js/custom/authentication/sign-in/general.js') }}"></script>

</body>


</html>