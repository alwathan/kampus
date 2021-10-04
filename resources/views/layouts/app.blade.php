<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title')</title>

		<meta name="keywords" content="Inkadha, Institut Kariman Wirayudha, Gapura, Sumenep, kariman, al-karimiyyah" />
		<meta name="description" content="Inkadha - Institut Kariman Wirayudha">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">
		<link rel="stylesheet" href="/css/theme-blog.css">
		<link rel="stylesheet" href="/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/css/custom.css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

		<!-- Head Libs -->
		<script src="/vendor/modernizr/modernizr.min.js"></script>

		@yield('css-js')

	</head>
	<body>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-simple-border-bottom">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<ul class="header-extra-info d-flex align-items-center pt-3 pb-3">
											<li class="d-none d-sm-inline-flex ml-0">
												<div class="header-extra-info-icon">
													<i class="icon-location-pin icons text-color-primary"></i>
												</div>
												<div class="header-extra-info-text">
													<label>Alamat</label>
													<strong>Jalan Raya Gapura km 5 Beraji Gapura, Sumenep</strong>
												</div>
											</li>
											<li class="ml-0 ml-sm-4">
												<div class="header-extra-info-icon">
													<i class="icon-phone icons text-color-primary"></i>
												</div>
												<div class="header-extra-info-text">
													<label>Kontak</label>
													<strong class="text-uppercase"><a href="tel:6281908261688">081-908-2616-88</a></strong>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="header-column justify-content-end d-none d-lg-inline-flex">
									<div class="header-row">
										<ul class="header-extra-info d-flex align-items-center pt-3 pb-3">
                                        @auth

                                            <li class="d-none d-sm-inline-flex ml-0">
												<div class="header-extra-info-text">
													<label>Hai</label>
													<strong class="text-uppercase text-2">
														<a class="pr-3" href="/admin"  title="{{ Auth::user()->name }}"><i class="fa fa-user"></i> <span>{{ Auth::user()->email }}</span></a>
                                                        <a class="pr-3" href="/logout"  title="Keluar"><i class="fa fa-signout"></i> <span>Keluar</span></a>
													</strong>
												</div>
											</li>
                                        @else

                                            <li class="d-none d-sm-inline-flex ml-0">
												<div class="header-extra-info-icon">
													<i class="icon-share icons text-color-primary"></i>
												</div>
												<div class="header-extra-info-text">
													<label>Temukan kami di</label>
													<strong class="text-uppercase text-2">
														<a class="pr-3" href="https://www.instagram.com/dpm_inkadha/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
														<a class="pr-3" href="https://www.facebook.com/pmb.stitalkarimiyyah/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
														<a href="http://www.twitter.com/inkadha" target="_blank" title="Twitter"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
													</strong>
												</div>
											</li>
                                        @endauth

										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo mt-0 mb-0">
										<a href="/">
											<img alt="Porto" width="296" height="65" data-sticky-width="200" data-sticky-height="45" src="/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-square header-nav-main-arrows header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													@foreach(get_menu(1) as $menu)
														<li class="dropdown">
															@switch($menu->jenis)
																@case('link')
																	<a class="dropdown-item {{ get_menu($menu->id)?'dropdown-toggle':'' }}" href="{{ $menu->url }}">{{ $menu->nama }}</a>
																	@break
																@case('halaman')
																	<a class="dropdown-item {{ get_menu($menu->id)?'dropdown-toggle':'' }}" href="/{{ $menu->slug }}">{{ $menu->nama }}</a>
																	@break
																@case('induk')
																	<a class="dropdown-item {{ get_menu($menu->id)?'dropdown-toggle':'' }}" href="#">{{ $menu->nama }}</a>
																	@break
																@default
																	<a class="dropdown-item {{ get_menu($menu->id)?'dropdown-toggle':'' }}" href="#">{{ $menu->nama }}</a>
															@endswitch
																@if(get_menu($menu->id))
																<ul class="dropdown-menu">
																	@foreach(get_menu($menu->id) as $sm1)
																		<li>
																		@switch($sm1->jenis)
																			@case('link')
																				<a class="dropdown-item" href="{{ $sm1->url }}">{{ $sm1->nama }}</a>
																				@break
																			@case('halaman')
																				<a class="dropdown-item" href="{{ $sm1->slug }}">{{ $sm1->nama }}</a>
																				@break
																			@case('induk')
																				<a class="dropdown-item" href="#">{{ $sm1->nama }}</a>
																				@break
																			@default
																				<a class="dropdown-item" href="#">{{ $sm1->nama }}</a>
																		@endswitch

																		</li>
																	@endforeach
																</ul>
																@endif
														</li>

													@endforeach


												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

                @yield('content')

			</div>

			<footer id="footer">
				<div class="container">

					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<img src="/img/logo.png" width="200">
						</div>

						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">Hubungi Kami</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">Jalan Raya Gapura km 5 Beraji Gapura, Sumenep 69472</p></li>
									<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:6281908261688">081-908-2616-88</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:alkarimiyyah@gmail.com">alkarimiyyah@gmail.com</a></p></li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">Twitter</h5>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'inkadha', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>

						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">Ikuti Kami</h5>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">

							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© 2021. Institut Kariman Wirayudha.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
                                        @foreach(get_menu(10) as $fm)
                                            <li><i class="fas fa-angle-right"></i><a href="/{{ $fm->slug }}" class="ml-1 text-decoration-none"> {{ $fm->nama }}</a></li>
                                        @endforeach
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/vendor/popper/umd/popper.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/vendor/common/common.min.js"></script>
		<script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/vendor/vide/jquery.vide.min.js"></script>
		<script src="/vendor/vivus/vivus.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="/js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
        </script>

	</body>
</html>
