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
									<li class="breadcrumb-item active" aria-current="page">Avtars</li>
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
								<h4 class="mb-0">Chips</h4>
							</div>
							<hr>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">
								<img src="/Vertical/assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<hr>
							<div class="chip">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Sizing and Colors</h4>
							</div>
							<hr>
							<div class="chip chip-md">
								<img src="/Vertical/assets/images/avatars/avatar-1.png" alt="Contact Person">John Doe</div>
							<div class="chip chip-md">
								<img src="/Vertical/assets/images/avatars/avatar-2.png" alt="Contact Person">Jessica Doe</div>
							<div class="chip chip-md bg-dark text-white">
								<img src="/Vertical/assets/images/avatars/avatar-3.png" alt="Contact Person">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-md bg-danger text-white">
								<img src="/Vertical/assets/images/avatars/avatar-4.png" alt="Contact Person">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<hr>
							<div class="chip chip-lg">
								<img src="/Vertical/assets/images/avatars/avatar-5.png" alt="Contact Person">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-lg bg-primary text-white">
								<img src="/Vertical/assets/images/avatars/avatar-6.png" alt="Contact Person">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-lg bg-warning text-white">
								<img src="/Vertical/assets/images/avatars/avatar-7.png" alt="Contact Person">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<hr>
							<div class="chip chip-md">John Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-md">Jessica Doe <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-md bg-info text-white">Michele Powa <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-md bg-success text-white">Clark Natela <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<hr>
							<div class="chip chip-lg">Anantu Painda <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-lg bg-secondary text-white">Tiger Xink <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
							<div class="chip chip-lg bg-dark text-white">Salena Chain <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Avatrs & Chips</h4>
							</div>
							<hr>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-1.png" width="50" height="50" class="rounded shadow" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-2.png" width="80" height="80" class="rounded ml-3 shadow" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-3.png" width="110" height="110" class="rounded ml-3 shadow" alt="" />
							</a>
							<hr>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-4.png" width="60" height="60" class="rounded shadow p-1" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-5.png" width="80" height="80" class="rounded ml-3 shadow p-1" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-6.png" width="100" height="100" class="rounded ml-3 shadow p-1" alt="" />
							</a>
							<hr>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-7.png" width="60" height="60" class="rounded-circle shadow" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-8.png" width="80" height="80" class="rounded-circle ml-3 shadow" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-9.png" width="100" height="100" class="rounded-circle ml-3 shadow" alt="" />
							</a>
							<hr>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-10.png" width="60" height="60" class="rounded-circle shadow p-1" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-11.png" width="80" height="80" class="rounded-circle ml-3 shadow p-1" alt="" />
							</a>
							<a href="javascript:;">
								<img src="/Vertical/assets/images/avatars/avatar-12.png" width="100" height="100" class="rounded-circle ml-3 shadow p-1" alt="" />
							</a>
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