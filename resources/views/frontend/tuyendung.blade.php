<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<!-- SEO Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#ffffff" />
	
	<title>Chi tiết bài viết</title>

	<!-- Favicon and Touch Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/img/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon-16x16.png') }}" />
    
    <!-- CSS -->
    <link rel="stylesheet" media="screen" href="{{ asset('public/vendor/simplebar/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('public/vendor/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('public/vendor/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('public/vendor/drift-zoom/drift-basic.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('public/vendor/lightgallery/lightgallery-bundle.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('public/css/theme.min.css') }}" />
</head>

<body class="handheld-toolbar-enabled">
	<main class="page-wrapper">
		<header class="shadow-sm">
			<div class="navbar-sticky bg-light">
				<div class="navbar navbar-expand-lg navbar-light">
					<div class="container">
                        <a class="navbar-brand d-none d-sm-block flex-shrink-0" href="{{ route('frontend.home') }}">
                            <img src="{{ asset('public/img/logo-dark.png') }}" width="142" />
                        </a>
                        <a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="{{ route('frontend.home') }}">
                            <img src="{{ asset('public/img/logo-icon.png') }}" width="74" />
                        </a>
                        <div class="input-group d-none d-lg-flex mx-4">
                            <input class="form-control rounded-end pe-5" type="text" placeholder="Tìm kiếm" />
                            <i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                        </div>
                        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
							<a class="navbar-tool navbar-stuck-toggler" href="#">
								<span class="navbar-tool-tooltip">Mở rộng menu</span>
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
							</a>
							<a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#">
								<div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
								<div class="navbar-tool-text ms-n3"><small>Xin chào</small>Khách hàng</div>
							</a>
							<div class="navbar-tool ms-3">
								<a class="navbar-tool-icon-box bg-secondary" href="#">
									<span class="navbar-tool-label">1</span><i class="navbar-tool-icon ci-cart"></i>
								</a>
								<a class="navbar-tool-text" href="#"><small>Giỏ hàng</small>3.000.000đ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
					<div class="container">
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<div class="input-group d-lg-none my-3">
								<i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
								<input class="form-control rounded-start" type="text" placeholder="Tìm kiếm" />
							</div>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link ps-lg-0" href="#">
										<i class="ci-home me-2"></i>Trang chủ
									</a>
								</li>
							</ul>
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-gift me-2"></i>Sản phẩm</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Điện thoại</a></li>
										<li><a class="dropdown-item" href="#">Máy tính bảng</a></li>
										<li><a class="dropdown-item" href="#">Máy tính xách tay</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-globe me-2"></i>Tin tức</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-loudspeaker me-2"></i>Tuyển dụng</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="ci-support me-2"></i>Liên hệ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div class="bg-secondary py-4">
			<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
				<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
							<li class="breadcrumb-item">
								<a class="text-nowrap" href="#"><i class="ci-home"></i>Trang chủ</a>
							</li>
							<li class="breadcrumb-item text-nowrap">
								<a href="#">Tin tức</a>
							</li>
							<li class="breadcrumb-item text-nowrap active" aria-current="page">Chi tiết</li>
						</ol>
					</nav>
				</div>
				<div class="order-lg-1 pe-lg-4 text-center text-lg-start">
					<h1 class="h3 mb-0">Global Travel and Vacations on a Tight Budget</h1>
				</div>
			</div>
		</div>
		
		<div class="container pb-5">
			<div class="row justify-content-center pt-3 mt-md-3">
				<div class="col-12">
					<div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
						<div class="d-flex align-items-center fs-sm mb-2">
							<a class="blog-entry-meta-link" href="#">
								<div class="blog-entry-author-ava">
									<img src="{{ asset('public/img/03.jpg') }}" />
								</div>
								Cynthia Gomez
							</a>
							<span class="blog-entry-meta-divider"></span>
							<a class="blog-entry-meta-link" href="#">Jul 17</a>
						</div>
						<div class="fs-sm mb-2">
							<a class="blog-entry-meta-link text-nowrap" href="#" data-scroll>
							<i class="ci-eye"></i>3</a>
						</div>
					</div>
					
					<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minima veniam, quis nostrum exercitationem occaecat cupidatat non proident.</p>
					<p style="text-align:justify">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p style="text-align:justify">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
					
					<div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
						<div class="mt-3 me-3">
							<a class="btn-tag me-2 mb-2" href="#">#merchandise</a>
							<a class="btn-tag mb-2" href="#">#printed tshirts</a>
						</div>
						<div class="mt-3">
							<span class="d-inline-block align-middle text-muted fs-sm me-3 mt-1 mb-2">Share post:</span>
							<a class="btn-social bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a>
							<a class="btn-social bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a>
							<a class="btn-social bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg-secondary py-5">
			<div class="container py-3">
				<h2 class="h4 text-center pb-4">Bài viết cùng chuyên mục</h2>
				<div class="tns-carousel">
					<div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
						<article>
							<a class="blog-entry-thumb mb-3" href="#"><img src="img/02.jpg" /></a>
							<div class="d-flex align-items-center fs-sm mb-2">
								<a class="blog-entry-meta-link" href="#">by Rafael Marquez</a>
								<span class="blog-entry-meta-divider"></span>
								<a class="blog-entry-meta-link" href="#">Sep 16</a>
							</div>
							<h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
						</article>
						<article>
							<a class="blog-entry-thumb mb-3" href="#"><img src="img/02.jpg" /></a>
							<div class="d-flex align-items-center fs-sm mb-2">
								<a class="blog-entry-meta-link" href="#">by Rafael Marquez</a>
								<span class="blog-entry-meta-divider"></span>
								<a class="blog-entry-meta-link" href="#">Sep 16</a>
							</div>
							<h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
						</article>
						<article>
							<a class="blog-entry-thumb mb-3" href="#"><img src="img/02.jpg" /></a>
							<div class="d-flex align-items-center fs-sm mb-2">
								<a class="blog-entry-meta-link" href="#">by Rafael Marquez</a>
								<span class="blog-entry-meta-divider"></span>
								<a class="blog-entry-meta-link" href="#">Sep 16</a>
							</div>
							<h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
						</article>
						<article>
							<a class="blog-entry-thumb mb-3" href="#"><img src="img/02.jpg" /></a>
							<div class="d-flex align-items-center fs-sm mb-2">
								<a class="blog-entry-meta-link" href="#">by Rafael Marquez</a>
								<span class="blog-entry-meta-divider"></span>
								<a class="blog-entry-meta-link" href="#">Sep 16</a>
							</div>
							<h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
						</article>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer class="footer bg-dark">
		<div class="pt-5 bg-darker">
			<div class="container">
				<div class="row pb-2">
					<div class="col-md-6 text-center text-md-start mb-4">
						<div class="text-nowrap mb-4">
							<a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="{{ asset('public/img/footer-logo-light.png') }}" width="117" /></a>
						</div>
						<div class="widget widget-links widget-light">
							<ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Trang chủ</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Sản phẩm</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tin tức</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Tuyển dụng</a></li>
								<li class="widget-list-item me-4"><a class="widget-list-link" href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 text-center text-md-end mb-4">
						<div class="mb-3">
							<a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a>
							<a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a>
							<a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a>
							<a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a>
							<a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">Bản quyền © 2023 bởi Cartzilla.</div>
			</div>
		</div>
	</footer>
	
	<a class="btn-scroll-top" href="#top" data-scroll>
		<span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
		<i class="btn-scroll-top-icon ci-arrow-up"></i>
	</a>
	
	<script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendor/simplebar/simplebar.min.js"></script>
	<script src="vendor/tiny-slider/tiny-slider.js"></script>
	<script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/shufflejs/shuffle.min.js"></script>
	<script src="vendor/lightgallery/lightgallery.min.js"></script>
	<script src="vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
	<script src="vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
	<script src="vendor/lightgallery/plugins/video/lg-video.min.js"></script>
	<script src="vendor/drift-zoom/Drift.min.js"></script>
	<script src="js/theme.min.js"></script>
</body>
</html>