<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
									<li class="breadcrumb-item active" aria-current="page">Navbars</li>
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
								<h4 class="mb-0">Navbars</h4>
							</div>
							<hr/>
							<nav class="navbar navbar-expand-lg navbar-light rounded bg-light"> <a class="navbar-brand text-uppercase" href="javascript:;">Navbar</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item active">	<a class="nav-link text-uppercase" href="javascript:;">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  About
											</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Products</a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Services</a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Contact</a>
										</li>
									</ul>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 shadow-sm radius-15"> <a class="navbar-brand text-uppercase" href="javascript:;">Navbar</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-secondary" aria-controls="navbarSupportedContent-secondary" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent-secondary">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item active">	<a class="nav-link text-uppercase py-0" href="javascript:;"><i class='bx bxs-home font-24'></i> <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle text-uppercase py-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bxs-user-circle font-24'></i>
											</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase py-0" href="javascript:;" tabindex="-1"><i class='bx bxl-product-hunt font-24'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase py-0" href="javascript:;" tabindex="-1"><i class='bx bxs-meteor font-24'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase py-0" href="javascript:;" tabindex="-1"><i class='bx bxs-microphone font-24'></i></a>
										</li>
									</ul>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 rounded shadow-sm"> <a class="navbar-brand text-uppercase" href="javascript:;">Navbar</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent1">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item active">	<a class="nav-link text-uppercase" href="javascript:;">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  About
							</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Products</a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Services</a>
										</li>
										<li class="nav-item">	<a class="nav-link text-uppercase" href="javascript:;" tabindex="-1">Contact</a>
										</li>
									</ul>
									<form class="form-inline my-2 my-lg-0">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
											<div class="input-group-append">
												<button class="btn btn-white" type="button"><i class='bx bx-search'></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 rounded shadow-sm"> <a class="navbar-brand" href="javascript:;">Navbar</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent2">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item active">	<a class="nav-link" href="javascript:;"><i class='bx bx-home-smile mr-1'></i> Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-1'></i> About</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-category mr-1'></i> Products</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-closet mr-1'></i>Services</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-phone mr-1'></i> Contact</a>
										</li>
									</ul>
									<form class="form-inline my-2 my-lg-0 nav-search">
										<div class="input-group nav-width">
											<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
											<div class="input-group-append border-left-0 ml-0">
												<button class="btn border-left-0" type="submit"><i class='bx bx-search'></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 rounded shadow-sm"> <a class="navbar-brand" href="javascript:;">Brand Logo</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent3">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item active">	<a class="nav-link" href="javascript:;">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;">About</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1" aria-disabled="true">Portfolio</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1" aria-disabled="true">Contact</a>
										</li>
									</ul>
									<ul class="navbar-nav ml-auto">
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-facebook font-24 text-white'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-twitter font-24 text-white'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-linkedin font-24 text-white'></i></a>
										</li>
									</ul>
									<form class="form-inline my-2 my-lg-0 ml-lg-2">
										<button class="btn btn-light my-2 my-sm-0 radius-30 px-5" type="submit"><i class='bx bx-lock mr-1'></i> Sign In</button>
										<button class="btn btn-white my-2 my-sm-0 ml-2 radius-30 px-5" type="submit"><i class='bx bx-cart-alt mr-1'></i> Buy Now</button>
									</form>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 rounded shadow-sm"> <a class="navbar-brand" href="javascript:;">Navbar</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent4">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item active">	<a class="nav-link" href="javascript:;"><i class='bx bx-home-smile mr-1'></i> Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-1'></i> About</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-category mr-1'></i> Products</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-closet mr-1'></i>Services</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1"><i class='bx bx-phone mr-1'></i> Contact</a>
										</li>
									</ul>
									<form class="form-inline my-2 my-lg-0 nav-search">
										<div class="input-group nav-width">
											<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
											<div class="input-group-append border-left-0 ml-0">
												<button class="btn border-left-0" type="submit"><i class='bx bx-search'></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</nav>
							<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 rounded shadow-sm"> <a class="navbar-brand" href="javascript:;">Brand Logo</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent5">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item active">	<a class="nav-link" href="javascript:;">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;">About</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1" aria-disabled="true">Portfolio</a>
										</li>
										<li class="nav-item">	<a class="nav-link" href="javascript:;" tabindex="-1" aria-disabled="true">Contact</a>
										</li>
									</ul>
									<ul class="navbar-nav ml-auto">
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-facebook font-24 text-white'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-twitter font-24 text-white'></i></a>
										</li>
										<li class="nav-item">	<a class="nav-link py-0" href="javascript:;"><i class='bx bxl-linkedin font-24 text-white'></i></a>
										</li>
									</ul>
									<form class="form-inline my-2 my-lg-0 ml-lg-2">
										<button class="btn btn-light my-2 my-sm-0 radius-30 px-5" type="submit"><i class='bx bx-lock mr-1'></i> Sign In</button>
										<button class="btn btn-white my-2 my-sm-0 ml-2 radius-30 px-5" type="submit"><i class='bx bx-cart-alt mr-1'></i> Buy Now</button>
									</form>
								</div>
							</nav>
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