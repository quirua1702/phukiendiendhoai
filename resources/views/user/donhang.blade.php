﻿<!DOCTYPE html>
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
	
	<title>Đơn hàng của tôi</title>
	
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
						<a class="navbar-brand d-none d-sm-block flex-shrink-0" href="#">
							<img src="{{ asset('public/img/logo-dark.png') }}" width="142" />
						</a>
						<a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="#">
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
		
		<div class="page-title-overlap bg-dark pt-4">
			<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
				<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
							<li class="breadcrumb-item">
								<a class="text-nowrap" href="#"><i class="ci-home"></i>Trang chủ</a>
							</li>
							<li class="breadcrumb-item text-nowrap">
								<a href="#">Khách hàng</a>
							</li>
							<li class="breadcrumb-item text-nowrap active" aria-current="page">Lịch sử mua hàng</li>
						</ol>
					</nav>
				</div>
				<div class="order-lg-1 pe-lg-4 text-center text-lg-start">
					<h1 class="h3 text-light mb-0">Đơn hàng của tôi</h1>
				</div>
			</div>
		</div>
		
		<div class="container pb-5 mb-2 mb-md-4">
			<div class="row">
				<aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
					<div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
						<div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
							<div class="d-md-flex align-items-center">
								<div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width:6.375rem;">
									<img class="rounded-circle" src="{{ asset('public/img/avatar.jpg') }}" />
								</div>
								<div class="ps-md-3">
									<h3 class="fs-base mb-0">Susan Gardner</h3>
									<span class="text-accent fs-sm">s.gardner@example.com</span>
								</div>
							</div>
							<a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false">
								<i class="ci-menu me-2"></i>Hồ sơ khách hàng
							</a>
						</div>
						<div class="d-lg-block collapse" id="account-menu">
							<div class="bg-secondary px-4 py-3">
								<h3 class="fs-sm mb-0 text-muted">Quản lý</h3>
							</div>
							<ul class="list-unstyled mb-0">
								<li class="border-bottom mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="#">
										<i class="ci-bag opacity-60 me-2"></i>Đơn hàng<span class="fs-sm text-muted ms-auto">1</span>
									</a>
								</li>
								<li class="border-bottom mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-heart opacity-60 me-2"></i>Sản phẩm yêu thích<span class="fs-sm text-muted ms-auto">3</span>
									</a>
								</li>
								<li class="mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-star opacity-60 me-2"></i>Đánh giá sản phẩm<span class="fs-sm text-muted ms-auto">1</span>
									</a>
								</li>
							</ul>
							<div class="bg-secondary px-4 py-3">
								<h3 class="fs-sm mb-0 text-muted">Thiết lập tài khoản</h3>
							</div>
							<ul class="list-unstyled mb-0">
								<li class="border-bottom mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-user opacity-60 me-2"></i>Hồ sơ cá nhân
									</a>
								</li>
								<li class="border-bottom mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-location opacity-60 me-2"></i>Sổ địa chỉ
									</a>
								</li>
								<li class="mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-card opacity-60 me-2"></i>Phương thức thanh toán
									</a>
								</li>
								<li class="d-lg-none border-top mb-0">
									<a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
										<i class="ci-sign-out opacity-60 me-2"></i>Đăng xuất
									</a>
								</li>
							</ul>
						</div>
					</div>
				</aside>
				<section class="col-lg-8">
					<div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
						<div class="d-flex align-items-center">
							<label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Sắp xếp theo:</label>
							<label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Sắp xếp theo:</label>
							<select class="form-select" id="order-sort">
								<option>Tất cả</option>
								<option>Đã giao</option>
								<option>Đang vận chuyển</option>
								<option>Đã chuyển hoàn</option>
								<option>Đã hủy</option>
							</select>
						</div>
						<a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="#">
							<i class="ci-sign-out me-2"></i>Đăng xuất
						</a>
					</div>
					<div class="table-responsive fs-md mb-4">
						<table class="table table-hover mb-0">
							<thead>
								<tr>
									<th>Mã đơn</th>
									<th>Ngày đặt hàng</th>
									<th>Trạng thái</th>
									<th>Tổng tiền</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">34VB5540K83</a></td>
									<td class="py-3">May 21, 2019</td>
									<td class="py-3"><span class="badge bg-info m-0">In Progress</span></td>
									<td class="py-3 text-end">$358.75</td>
								</tr>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">78A643CD409</a></td>
									<td class="py-3">December 09, 2018</td>
									<td class="py-3"><span class="badge bg-danger m-0">Canceled</span></td>
									<td class="py-3 text-end"><span>$760.50</span></td>
								</tr>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">112P45A90V2</a></td>
									<td class="py-3">October 15, 2018</td>
									<td class="py-3"><span class="badge bg-warning m-0">Delayed</span></td>
									<td class="py-3 text-end">$1,264.00</td>
								</tr>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">28BA67U0981</a></td>
									<td class="py-3">July 19, 2018</td>
									<td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
									<td class="py-3 text-end">$198.35</td>
								</tr>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">502TR872W2</a></td>
									<td class="py-3">April 04, 2018</td>
									<td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
									<td class="py-3 text-end">$2,133.90</td>
								</tr>
								<tr>
									<td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#">47H76G09F33</a></td>
									<td class="py-3">March 30, 2018</td>
									<td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
									<td class="py-3 text-end">$86.40</td>
								</tr>
							</tbody>
						</table>
					</div>
					<nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
						</ul>
						<ul class="pagination">
							<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
						</ul>
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
						</ul>
					</nav>
				</section>
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