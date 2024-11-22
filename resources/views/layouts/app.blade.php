<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from themekar.com/templatebucket/logtra/logtra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 11:47:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>JSH-Logistic.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
	<!-- ========== Start Stylesheet ========== -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/all.min.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/icofont.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-icons.css" rel="stylesheet" />
	<link href="assets/css/bsnav.min.css" rel="stylesheet" />
	<link href="assets/css/preloader.css" rel="stylesheet" />
	<link href="assets/css/magnific-popup.css" rel="stylesheet" />
	<link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
	<link href="assets/css/jquery-ui.css" rel="stylesheet" />
	<link href="assets/style.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->

</head>


<body id="bdy">
    
	<!-- Start PreLoader
    ============================================= -->
	<div class="preloader">
		<div class="preloader-container">
			<span class="preloader-text">JSH-Logistic</span>
			<div class="preloader-animation">
			</div>
		</div>
	</div>
	<!-- Start PreLoader-->

	<!-- Start header
    ============================================= -->
    <header class="header header-before-off">
		<div class="main-wrapper">
			<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
				<img src="assets/img/bg/bg-nav.png" alt="no image" class="navbar-bar-shape">
				<div class="navbar-container">
					<div class="navbar-extra-logo">
						<a href="index.html">
							<img src="assets/img/logo/logo-white.png" class="logo-outside" alt="thumb">
						</a>
					</div>
					<div class="top-header-menu">
						<div class="top-bar-area pos-rel topbar-white">
							<img src="assets/img/bg/topbar-bg.png" alt="no image" class="top-bar-shape">
							<div class="row" 
							 {{-- @if (App::getLocale() == 'ar') dir="rtl" @endif  --}}
							 >
								<div class="col-xl-10 col-lg-6">
									<div class="top-box-wrp d-flex justify-content-md-start align-items-center">
										<div class="top-box top-location mr-30">
											<i class="fa-solid fa-location-dot"></i>
											<span>{{ __('messages.address') }}</span>
										</div>
										<div class="top-email top-box mr-30">
											<i class="fa-solid fa-envelope"></i>
											<span>operations@jsh-logistic.com</span>
										</div>
										<div class="top-phone top-box">
											<i class="fa-solid fa-phone"></i>
											<span>+963 958 000 280</span>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-6">
									<div class="top-bar-social">
										{{-- <ul class="top-social">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
										</ul> --}}

									</div>
								</div>

								
							</div>
						</div>
						<div class="navbar-menu-opt">
							<div class="navbar-brand-tog">
								<a class="navbar-brand g-nop" href="index.html">
									<img src="assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
									<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
								</a>
								<button class="navbar-toggler toggler-spring">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse justify-content-md-between">
								<a class="navbar-brand nop" href="/">
									<img src="assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
									<img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
								</a>
								<ul class="navbar-nav navbar-mobile justify-content-md-center w-100" @if (App::getLocale() == 'ar')
								dir="rtl"
									
								@endif>
									<li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#home">{{ __('messages.home') }}</a>
									</li>
									{{-- <li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">Pages</a>
										<ul class="navbar-nav">
											<li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
											<li class="nav-item"><a class="nav-link" href="shop-details.html">Shop Single</a></li>
											<li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
											<li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li>
											<li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
											<li class="nav-item"><a class="nav-link" href="register.html">Register Page</a></li>
											<li class="nav-item"><a class="nav-link" href="login.html">Login Page</a></li>
											<li class="nav-item"><a class="nav-link" href="gallery.html">Projects</a></li>
											<li class="nav-item"><a class="nav-link" href="project-single.html">Project Single</a></li>
											<li class="nav-item"><a class="nav-link" href="faq.html">Faq</a></li>
											<li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
										</ul>
									</li> --}}
									<li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">{{ __('messages.services') }}</a>
										{{-- <ul class="navbar-nav">
											<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
											<li class="nav-item"><a class="nav-link" href="service-single.html">Service Single</a></li>
										</ul> --}}
									</li>
									{{-- <li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">Blog</a>
										<ul class="navbar-nav">
											<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
											<li class="nav-item"><a class="nav-link" href="blog-standard.html">Blog Standard</a></li>
											<li class="nav-item"><a class="nav-link" href="single.html">Blog Single</a></li>
										</ul>
									</li> --}}
									<li class="nav-item"><a class="nav-link" href="about.html">{{ __('messages.about') }}</a></li>

									<li class="nav-item"><a class="nav-link" href="#contact">{{ __('messages.contact') }}</a></li>	
									
									<li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">{{ Config::get('languages')[App::getLocale()]['display'] }}</a>
										<ul class="navbar-nav">
											@foreach (Config::get('languages') as $lang => $language)
													@if ($lang != App::getLocale())

											<li class="nav-item"><a class="nav-link" href="{{ route('lang.switch', $lang) }}">{{ $language['display'] }} </a></li>
													@endif
												@endforeach
										</ul>
									</li>

								</ul>
								{{-- <div class="search-cart nav-profile">
									<a class="btn-1 btn-sm" href="#">{{ Config::get('languages')[App::getLocale()]['display'] }}</a>
										<ul class="navbar-nav">
											@foreach (Config::get('languages') as $lang => $language)
													@if ($lang != App::getLocale())

											<li class="nav-item"><a class="nav-link" href="{{ route('lang.switch', $lang) }}">{{ $language['display'] }} </a></li>
													@endif
												@endforeach
										</ul>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bsnav-mobile">
				<div class="bsnav-mobile-overlay"></div>
				<div class="navbar"></div>
			</div>
		</div>
    </header>
    <!-- End header -->
    
    
    
    @yield('content')









    <!-- jQuery Frameworks
    ============================================= -->
	<script src="assets/js/jquery-3.7.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bsnav.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/count-to.js"></script>
	<script src="assets/js/progress-bar.min.js"></script>
	<script src="assets/js/jquery.easypiechart.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/YTPlayer.min.js"></script>
	<script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src="assets/js/active-class.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/main.js"></script>


</body>

</html>
