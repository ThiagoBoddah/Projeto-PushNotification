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
	<!--plugins-->
	<link href="/Vertical/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
	<link href="/Vertical/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/Vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/Vertical/assets/plugins/metismenu/css/metisMenu.min.css " rel="stylesheet" />
	<!-- loader-->
	<link href="/Vertical/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/Vertical/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/Vertical/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/Vertical/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="/Vertical/assets/css/app.css" />
	
	
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
									<li class="breadcrumb-item active" aria-current="page">Elements</li>
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
								<h4 class="mb-0">Text Inputs</h4>
							</div>
							<hr/>
							<div class="form-group">
								<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Default input">
							</div>
							<div class="form-group">
								<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
							</div>
							<div class="form-group mb-0">
								<input class="form-control" type="text" placeholder="Readonly input here..." readonly>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Select Inputs</h4>
							</div>
							<hr/>
							<div class="form-group">
								<select class="form-control form-control-lg">
									<option>Large select</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control">
									<option>Default select</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control form-control-sm">
									<option>Small select</option>
								</select>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Input Mask</h4>
							</div>
							<hr/>
							<form>
								<div class="form-group">
									<label>Date:</label>
									<input type="date" class="form-control">
								</div>
								<div class="form-group">
									<label>Date time:</label>
									<input type="datetime-local" class="form-control">
								</div>
								<div class="form-group">
									<label>Email:</label>
									<input type="email" class="form-control" placeholder="example@gmail.com">
								</div>
								<div class="form-group">
									<label>Password:</label>
									<input type="password" class="form-control" value="........">
								</div>
								<div class="form-group">
									<label>Input File:</label>
									<input type="file" class="form-control">
								</div>
								<div class="form-group">
									<label>Month:</label>
									<input type="month" class="form-control">
								</div>
								<div class="form-group">
									<label>Search:</label>
									<input type="search" class="form-control">
								</div>
								<div class="form-group">
									<label>Tel:</label>
									<input type="tel" class="form-control">
								</div>
								<div class="form-group">
									<label>Time:</label>
									<input type="time" class="form-control">
								</div>
								<div class="form-group">
									<label>Url:</label>
									<input type="url" class="form-control" placeholder="https://example.com/users/">
								</div>
								<div class="form-group">
									<label>Week:</label>
									<input type="week" class="form-control">
								</div>
							</form>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Input Tags</h4>
							</div>
							<hr/>
							<form>
								<div class="form-group">
									<label for="formControlRange">Basic</label>
									<input type="text" data-role="tagsinput" value="jQuery,Script,Net">
								</div>
								<div class="form-group">
									<label for="formControlRange">Multi Select</label>
									<select multiple data-role="tagsinput">
										<option value="Amsterdam">Amsterdam</option>
										<option value="Washington">Washington</option>
										<option value="Sydney">Sydney</option>
										<option value="Beijing">Beijing</option>
										<option value="Cairo">Cairo</option>
									</select>
								</div>
							</form>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Checkboxes and radios</h4>
							</div>
							<hr/>
							<p>Default (stacked)</p>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">Default checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled="">
								<label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
								<label class="form-check-label" for="exampleRadios1">Default radio</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">Second default radio</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled="">
								<label class="form-check-label" for="exampleRadios3">Disabled radio</label>
							</div>
							<p>Inline</p>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled="">
								<label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<label class="form-check-label" for="inlineRadio1">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled="">
								<label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Custom Checkboxes &amp; Radios</h4>
							</div>
							<hr/>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
							</div>
							<hr>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
							</div>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="customSwitch1">
								<label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
							</div>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
								<label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Range Inputs</h4>
							</div>
							<hr/>
							<form>
								<div class="form-group">
									<label for="formControlRange">Example Range input</label>
									<input type="range" class="form-control-range" id="formControlRange">
								</div>
								<div class="form-group">
									<label for="customRange1">Example range</label>
									<input type="range" class="custom-range" id="customRange1">
								</div>
								<div class="form-group">
									<label for="customRange2">Example range</label>
									<input type="range" class="custom-range" min="0" max="5" id="customRange2">
								</div>
								<div class="form-group">
									<label for="customRange3">Example range</label>
									<input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
								</div>
							</form>
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
	<script src="/Vertical/assets/plugins/input-tags/js/tagsinput.js"></script>
	<script src="/Vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/Vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
</body>

</html>