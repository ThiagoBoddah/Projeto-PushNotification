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
						<div class="breadcrumb-title pr-3">Forms</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Layouts</li>
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
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15 border-lg-top-white">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='bx bxs-user mr-1 font-24 text-white'></i>
										</div>
										<h4 class="mb-0 text-white">User Registration</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>First Name</label>
												<input type="text" class="form-control radius-30" />
											</div>
											<div class="form-group col-md-6">
												<label>Last Name</label>
												<input type="text" class="form-control radius-30" />
											</div>
										</div>
										<div class="form-group">
											<label>Phone No.</label>
											<input type="text" class="form-control radius-30" />
										</div>
										<div class="form-group">
											<label>Email Address</label>
											<input type="text" class="form-control radius-30" />
										</div>
										<div class="form-group">
											<label>Choose Password</label>
											<input type="password" class="form-control radius-30" />
										</div>
										<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" class="form-control radius-30" />
										</div>
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control radius-30" rows="3" cols="3"></textarea>
										</div>
										<div class="form-group">
											<div class="form-group">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">I Agree Terms & Conditions</label>
												</div>
											</div>
										</div>
										<button type="button" class="btn btn-light px-5 radius-30">Register</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card border-lg-top-white">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='bx bxs-user mr-1 font-24 text-white'></i>
										</div>
										<h4 class="mb-0 text-white">User Registration</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>First Name</label>
												<div class="input-group">
													<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-user'></i></span>
													</div>
													<input type="text" class="form-control border-left-0" placeholder="Last Name">
												</div>
											</div>
											<div class="form-group col-md-6">
												<label>Last Name</label>
												<div class="input-group">
													<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-user'></i></span>
													</div>
													<input type="text" class="form-control border-left-0" placeholder="Last Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Phone No.</label>
											<div class="input-group">
												<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-phone'></i></span>
												</div>
												<input type="text" class="form-control border-left-0" placeholder="Phone No">
											</div>
										</div>
										<div class="form-group">
											<label>Email Address</label>
											<div class="input-group">
												<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-envelope'></i></span>
												</div>
												<input type="text" class="form-control border-left-0" placeholder="Email Address">
											</div>
										</div>
										<div class="form-group">
											<label>Choose Password</label>
											<div class="input-group">
												<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-lock-open-alt'></i></span>
												</div>
												<input type="text" class="form-control border-left-0" placeholder="Choose Password">
											</div>
										</div>
										<div class="form-group">
											<label>Confirm Password</label>
											<div class="input-group">
												<div class="input-group-prepend">	<span class="input-group-text"><i class='bx bx-lock-open-alt'></i></span>
												</div>
												<input type="text" class="form-control border-left-0" placeholder="Confirm Password">
											</div>
										</div>
										<div class="form-group">
											<label>Address</label>
											<textarea class="form-control" placeholder="Enter Address" rows="3" cols="3"></textarea>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck2">
												<label class="custom-control-label" for="customCheck2">I Agree Terms & Conditions</label>
											</div>
										</div>
										<button type="button" class="btn btn-light px-5">Register</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body p-5">
									<div class="card-title text-center"> <i class='bx bxs-user-circle text-white font-60'></i>
										<h3 class="mb-5 mt-3 text-white">User Login</h3>
									</div>
									<hr/>
									<div class="form-group">
										<label>Enter Username</label>
										<input type="text" class="form-control form-control-lg radius-30" placeholder="Enter your Username" />
									</div>
									<div class="form-group">
										<label>Enter Password</label>
										<input type="password" class="form-control form-control-lg radius-30" placeholder="Enter your Password" />
									</div>
									<div class="form-row align-items-center mt-3">
										<div class="form-group col-md-6">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck3">
												<label class="custom-control-label" for="customCheck3">Remember Me</label>
											</div>
										</div>
										<div class="form-group col-md-6 text-right">	<a href="javascript:;">Forgot Password ?</a>
										</div>
									</div>
									<button type="button" class="btn btn-light btn-lg px-5 radius-30 btn-block"><i class='bx bx-lock-alt'></i> Login</button>
									<hr/>
									<div class="form-group text-center">
										<p class="mb-0">or Sign in with:</p>
									</div>
									<button type="button" class="btn btn-light btn-lg btn-block mb-3 radius-30"><i class="bx bxl-facebook-square mr-1"></i>Login with facebook</button>
									<button type="button" class="btn btn-light btn-lg btn-block radius-30"><i class="bx bxl-twitter mr-1"></i>Login with twitter</button>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-body p-5">
									<div class="card-title text-center"> <i class='bx bxs-user-rectangle font-60'></i>
										<h3 class="mb-5 mt-3">User Login</h3>
									</div>
									<hr/>
									<div class="form-group">
										<label>Enter Username</label>
										<div class="input-group input-group-lg">
											<div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											</div>
											<input type="text" class="form-control border-left-0" placeholder="Choose Password">
										</div>
									</div>
									<div class="form-group">
										<label>Enter Password</label>
										<div class="input-group input-group-lg">
											<div class="input-group-prepend">	<span class="input-group-text bg-transparent"><i class='bx bxs-lock-open'></i></span>
											</div>
											<input type="text" class="form-control border-left-0" placeholder="Choose Password">
										</div>
									</div>
									<div class="form-row align-items-center mt-3">
										<div class="form-group col-md-6">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck4">
												<label class="custom-control-label" for="customCheck4">Remember Me</label>
											</div>
										</div>
										<div class="form-group col-md-6 text-right">	<a href="javascript:;">Forgot Password ?</a>
										</div>
									</div>
									<button type="button" class="btn btn-light btn-lg px-5 btn-block"><i class='bx bx-lock-alt'></i> Login</button>
									<hr/>
									<div class="form-group text-center">
										<p class="mb-0">or Sign in with:</p>
									</div>
									<button type="button" class="btn btn-light btn-lg btn-block mb-3"><i class="bx bxl-facebook-square mr-1"></i>Login with facebook</button>
									<button type="button" class="btn btn-light btn-lg btn-block"><i class="bx bxl-twitter mr-1"></i>Login with twitter</button>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-9 mx-auto">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Horizontal Form</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">First Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
											<label class="col-sm-2 col-form-label">First Name</label>
											<div class="col-sm-4">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Phone No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Email Address</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Choose Password</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Confirm Password</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="3" cols="3"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label"></label>
											<div class="col-sm-10">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="gridCheck2">
													<label class="form-check-label" for="gridCheck2">I agree terms & conditions</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label"></label>
											<div class="col-sm-10">
												<button type="button" class="btn btn-light px-4">Register</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-9 mx-auto">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h4 class="mb-0">Horizontal Form</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Enter Username</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Enter Password</label>
											<div class="col-sm-10">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-2 col-form-label"></label>
											<div class="col-sm-5">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="remember3">
													<label class="form-check-label" for="remember3">Remember Me</label>
												</div>
											</div>
											<div class="col-sm-5 text-right"> <a href="javascript:;">Forgot Password ?</a>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label"></label>
											<div class="col-sm-10">
												<button type="button" class="btn btn-light px-4">Login</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
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