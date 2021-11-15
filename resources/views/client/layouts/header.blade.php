<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('client/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>@yield('title')</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{ URL::asset('/client/css/linearicons.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/nice-select.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/client/css/main.css') }}">
	</head>
	<body>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="/"><img class="logo-img" src="https://www.packtpub.com/media/logo/stores/1/logo.png" alt=""></a>
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="{{ route('client.index') }}">Home</a>
								<a href="{{ route('client.experts') }}">Experts</a>
								<a href="{{ route('client.ebooks') }}">eBooks</a>
								@if(Auth::user())
									<a href="#"><i class="fa fa-user"></i>&nbsp;Armash Fankar</a>
									<a href="{{route('logout')}}" class="genric-btn small primary circle">Logout</a>
								@else
									<a href="#" class="genric-btn small primary-border circle">Register</a>
									<a href="{{route('login')}}" class="genric-btn small primary circle">Log In</a>
								@endif
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
    <!-- alert box -->
    @include('client.layouts.alert')
    <!-- alert box ends here -->

    <!-- main content area start -->
    @yield('content')
    <!-- main content area end -->

    <!-- alert box -->
    @include('client.layouts.footer')
    <!-- alert box ends here -->