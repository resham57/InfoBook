<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title') | {{env('APP_NAME')}}</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css')
</head>
<body>
	@include('layouts/partials/header')
	<div class="container">
		@yield('content')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('js')
</body>
</html>