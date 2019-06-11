<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/png" />
		<title>{{ $page_title }}</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('vendor/owl-carousel/owl.carousel.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('vendor/nice-select/css/nice-select.css') }}" />

		<!-- main css -->
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
	</head>
	<body>
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.js')
	</body>
</html>