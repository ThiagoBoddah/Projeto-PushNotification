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
						<div class="breadcrumb-title pr-3">Components</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Spinners</li>
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
								<h4 class="mb-0">Border spinner</h4>
							</div>
							<hr/>
							<div class="spinner-border" role="status">	<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Border Color spinner</h4>
							</div>
							<hr/>
							<div class="spinner-border text-primary" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-secondary" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-success" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-danger" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-warning" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-info" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-light" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-border text-dark" role="status">	<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Growing spinner</h4>
							</div>
							<hr/>
							<div class="spinner-grow" role="status">	<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Growing Colors spinner</h4>
							</div>
							<hr/>
							<div class="spinner-grow text-primary" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-secondary" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-success" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-danger" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-warning" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-info" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-light" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow text-dark" role="status">	<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Size</h4>
							</div>
							<hr/>
							<div class="spinner-border spinner-border-sm" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow spinner-grow-sm" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<p class="my-4">use custom CSS or inline styles to change the dimensions as needed.</p>
							<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">	<span class="sr-only">Loading...</span>
							</div>
							<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">	<span class="sr-only">Loading...</span>
							</div>
						</div>
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Spinners With Buttons</h4>
							</div>
							<hr/>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<hr/>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<hr/>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<hr/>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								<span class="sr-only">Loading...</span>
							</button>
							<button class="btn btn-light" type="button" disabled>	<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
								Loading...</button>
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