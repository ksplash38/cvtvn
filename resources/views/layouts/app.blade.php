<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>{{ config('app.name', 'cvtvn') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('charity/css/bootstrap.min.css') }}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('charity/css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('charity/css/owl.theme.default.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('charity/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('charity/css/style.css') }}" />

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}


</head>
<body>
<div id="app">
<!-- HEADER -->
<header id="hom">
        <!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="/"><img src="{{ asset('logo.png') }}" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<div class="navbar-search">
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<form action="{{ route('search') }}" method="GET">
                            <input class="input" type="text" name="query" placeholder="Search" value="{{ request()->input('query') }}">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                   </span>
						</form>
					</div>
				</div>
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/vote">Vote</a></li>
                    {{-- <li><a href="/adminbody">Admin Body</a></li> --}}
					{{-- <li><a href="#">About</a></li> --}}
					<li class="has-dropdown"><a href="#">About</a>
						<ul class="dropdown">
                            <li><a href="/overview">Overview</a></li>
                            <li><a href="/adminbody">Administrative Body</a></li>
                            <li><a href="/trustees">Trustees</a></li>
                            <li><a href="/regionalcoordinators">Regional Coordinators</a></li>
                            <li><a href="/statecoordinators">State Coordinating Team Members</a></li>
                            <li><a href="/patron">Patron & Patronesses</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">News</a>
						<ul class="dropdown">
                            <li><a href="/events">Events</a></li>
                            <li><a href="/scholarship">Scholarship</a></li>
                            <li><a href="/joboffer">Job Offers</a></li>
                            <li><a href="/news">Blog & News</a></li>
						</ul>
					</li>
					{{-- <li class="has-dropdown"><a href="#">Blog</a>
						<ul class="dropdown">
							<li><a href="blog.html">Blog Page</a></li>
							<li><a href="single-blog.html">Single Blog</a></li>
						</ul>
					</li> --}}

                    <li class="has-dropdown">

                                    @guest
                                    <li>
                                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                <a href="#">   {{ Auth::user()->name }}   </a>
                                <ul class="dropdown">

                                               <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                             </form>  </li>

                                @endguest
                            </ul>
                    </li>

				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->


        <main class="py-4">

            
        {{-- <div id="page-header">
            </div> --}}
            {{-- <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br> --}}
            @yield('content')


        </main>

    </div>
    @include('layouts._footer')
{{--
	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="#"><img src="./img/logo.png" alt=""></a>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							<li><i class="fa fa-phone"></i> 607-279-9246</li>
							<li><i class="fa fa-envelope"></i> <a href="#">Charity@email.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

				<!-- footer galery -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Galery</h3>
						<ul class="footer-galery">
							<li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Causes</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER --> --}}

	<!-- jQuery Plugins -->
	<script src="{{ asset('charity/js/jquery.min.js') }}"></script>
	<script src="{{ asset('charity/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('charity/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('charity/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('charity/js/main.js') }}"></script>




    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

</body>
</html>
