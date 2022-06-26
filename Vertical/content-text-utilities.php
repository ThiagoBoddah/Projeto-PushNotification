<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syntrans - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/Vertical/assets/images/favicon-32x32.png" type="image/png" />
	<?php include('inc/head.php') ?>
	
	
</head>

<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<?php include('inc/menu.php'); ?>
		<!--end sidebar-wrapper-->
		<!--header-->
		<?php include('inc/topheader.php'); ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Content</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Text Utilities</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-light">Settings</button>
								<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Background Colors</h4>
							</div>
							<hr/>
							<div class="p-3 mb-2 bg-primary text-white radius-15">.bg-primary</div>
							<div class="p-3 mb-2 bg-secondary text-white radius-15">.bg-secondary</div>
							<div class="p-3 mb-2 bg-success text-white radius-15">.bg-success</div>
							<div class="p-3 mb-2 bg-danger text-white radius-15">.bg-danger</div>
							<div class="p-3 mb-2 bg-warning text-dark radius-15">.bg-warning</div>
							<div class="p-3 mb-2 bg-info text-white radius-15">.bg-info</div>
							<div class="p-3 mb-2 bg-light text-dark radius-15">.bg-light</div>
							<div class="p-3 mb-2 bg-dark text-white radius-15">.bg-dark</div>
							<hr/>
							<div class="card-title">
								<h4 class="mb-0">Text Colors</h4>
							</div>
							<hr/>
							<p class="text-primary">.text-primary</p>
							<p class="text-secondary">.text-secondary</p>
							<p class="text-success">.text-success</p>
							<p class="text-danger">.text-danger</p>
							<p class="text-warning">.text-warning</p>
							<p class="text-info">.text-info</p>
							<p class="text-light bg-dark">.text-light</p>
							<p class="text-dark">.text-dark</p>
							<p class="text-body">.text-body</p>
							<p class="text-muted">.text-muted</p>
							<p class="text-white bg-dark">.text-white</p>
							<p class="text-black-50">.text-black-50</p>
							<p class="text-white-50 bg-dark">.text-white-50</p>
							<hr/>
							<p><a href="javascript:;" class="text-primary">Primary link</a>
							</p>
							<p><a href="javascript:;" class="text-secondary">Secondary link</a>
							</p>
							<p><a href="javascript:;" class="text-success">Success link</a>
							</p>
							<p><a href="javascript:;" class="text-danger">Danger link</a>
							</p>
							<p><a href="javascript:;" class="text-warning">Warning link</a>
							</p>
							<p><a href="javascript:;" class="text-info">Info link</a>
							</p>
							<p><a href="javascript:;" class="text-light bg-dark">Light link</a>
							</p>
							<p><a href="javascript:;" class="text-dark">Dark link</a>
							</p>
							<p><a href="javascript:;" class="text-muted">Muted link</a>
							</p>
							<p><a href="javascript:;" class="text-white bg-dark">White link</a>
							</p>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Border Utilities</h4>
							</div>
							<hr/>
							<div class="card shadow-none border radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Border</h4>
									</div>
									<hr/>
									<div class="row">
										<div class="col-md">
											<div class="card shadow-none border bg-light mb-0">
												<div class="card-body text-center">
													<div class="py-4">Border</div>
												</div>
											</div>
										</div>
										<div class="col-md">
											<div class="card shadow-none border-top bg-light mb-0">
												<div class="card-body text-center">
													<div class="py-4">border-top</div>
												</div>
											</div>
										</div>
										<div class="col-md">
											<div class="card shadow-none border-right bg-light mb-0">
												<div class="card-body text-center">
													<div class="py-4">border-right</div>
												</div>
											</div>
										</div>
										<div class="col-md">
											<div class="card shadow-none border-bottom bg-light mb-0">
												<div class="card-body text-center">
													<div class="py-4">border-bottom</div>
												</div>
											</div>
										</div>
										<div class="col-md">
											<div class="card shadow-none border-left bg-light mb-0">
												<div class="card-body text-center">
													<div class="py-4">border-left</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card shadow-none border radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Border Colors</h4>
									</div>
									<hr/>
									<div class="row">
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-primary bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-primary</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-secondary bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-secondary</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-success bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-success</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-danger bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-danger</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-warning bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-warning</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-info bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-info</div>
												</div>
											</div>
										</div>
										<div class="col-md d-flex align-items-stretch">
											<div class="card shadow-none border border-dark bg-light mb-0 w-100">
												<div class="card-body text-center">
													<div class="py-4">border-dark</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card shadow-none border radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Border Radius</h4>
									</div>
									<hr/>
									<div class="row align-items-center">
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-top">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-right">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-bottom">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-left">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-circle">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/400x200" alt="..." class="img-fluid rounded-pill">
										</div>
										<div class="col-md">
											<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded-0">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Shadows Examples</h4>
							</div>
							<hr/>
							<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
							<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
							<div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
							<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Helpers</h4>
							</div>
							<hr/>
							<div class="row">
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="p-1 bg-light">p-1</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="p-2 bg-light">p-2</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="p-3 bg-light">p-3</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="p-4 bg-light">p-4</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="p-5 bg-light">p-5</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="m-1 bg-light">m-1</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="m-2 bg-light">m-2</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="m-3 bg-light">m-3</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="m-4 bg-light">m-4</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg">
									<div class="card shadow-none border">
										<div class="card-body text-center">
											<div class="m-5 bg-light">m-5</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syntrans @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/Vertical/assets/js/jquery.min.js"></script>
	<script src="/Vertical/assets/js/popper.min.js"></script>
	<script src="/Vertical/assets/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="/Vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/Vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/Vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
</body>

</html>