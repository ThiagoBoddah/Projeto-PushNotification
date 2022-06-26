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
	<!--plugins-->
	<link href="/Vertical/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/Vertical/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="/Vertical/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
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
									<li class="breadcrumb-item active" aria-current="page">Input Groups</li>
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
								<h4 class="mb-0">Basic example</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
							</div>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">	<span class="input-group-text" id="basic-addon2">@example.com</span>
								</div>
							</div>
							<label for="basic-url">Your vanity URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
								</div>
								<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text">$</span>
								</div>
								<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
								<div class="input-group-append">	<span class="input-group-text">.00</span>
								</div>
							</div>
							<div class="input-group">
								<div class="input-group-prepend">	<span class="input-group-text">With textarea</span>
								</div>
								<textarea class="form-control" aria-label="With textarea"></textarea>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Wrapping</h4>
							</div>
							<hr/>
							<div class="input-group flex-nowrap">
								<div class="input-group-prepend">	<span class="input-group-text" id="addon-wrapping">@</span>
								</div>
								<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Sizing</h4>
							</div>
							<hr/>
							<div class="input-group input-group-sm mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
								</div>
								<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="inputGroup-sizing-default">Default</span>
								</div>
								<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="input-group input-group-lg">
								<div class="input-group-prepend">	<span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
								</div>
								<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Checkboxes and radios</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="checkbox" aria-label="Checkbox for following text input">
									</div>
								</div>
								<input type="text" class="form-control" aria-label="Text input with checkbox">
							</div>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="radio" aria-label="Radio button for following text input">
									</div>
								</div>
								<input type="text" class="form-control" aria-label="Text input with radio button">
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Multiple inputs</h4>
							</div>
							<hr/>
							<div class="input-group">
								<div class="input-group-prepend">	<span class="input-group-text">First and last name</span>
								</div>
								<input type="text" aria-label="First name" class="form-control">
								<input type="text" aria-label="Last name" class="form-control">
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Multiple addons</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text">$</span>
									<span class="input-group-text">0.00</span>
								</div>
								<input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
							</div>
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
								<div class="input-group-append">	<span class="input-group-text">$</span>
									<span class="input-group-text">0.00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Button addons</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button class="btn btn-light" type="button" id="button-addon1">Button</button>
								</div>
								<input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
							</div>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-light" type="button" id="button-addon2">Button</button>
								</div>
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend" id="button-addon3">
									<button class="btn btn-light" type="button">Button</button>
									<button class="btn btn-light" type="button">Button</button>
								</div>
								<input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
							</div>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
								<div class="input-group-append" id="button-addon4">
									<button class="btn btn-light" type="button">Button</button>
									<button class="btn btn-light" type="button">Button</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Buttons with dropdowns</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									<div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div role="separator" class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<input type="text" class="form-control" aria-label="Text input with dropdown button">
							</div>
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button">
								<div class="input-group-append">
									<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									<div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div role="separator" class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Segmented buttons</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button type="button" class="btn btn-light">Action</button>
									<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div role="separator" class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
								<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
							</div>
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
								<div class="input-group-append">
									<button type="button" class="btn btn-light">Action</button>
									<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">	<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div role="separator" class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Custom forms</h4>
							</div>
							<hr/>
							<P>Custom select</P>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" id="inputGroupSelect01">
									<option selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="input-group mb-3">
								<select class="custom-select" id="inputGroupSelect02">
									<option selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<div class="input-group-append">
									<label class="input-group-text" for="inputGroupSelect02">Options</label>
								</div>
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button class="btn btn-light" type="button">Button</button>
								</div>
								<select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
									<option selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="input-group">
								<select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
									<option selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<div class="input-group-append">
									<button class="btn btn-light" type="button">Button</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Checkboxes and radios</h4>
							</div>
							<hr/>	<span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
								<button class="btn btn-primary" style="pointer-events: none;" type="button"
									disabled>Disabled button</button>
							</span>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Custom file input</h4>
							</div>
							<hr/>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
							<div class="input-group mb-3">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile02">
									<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
								</div>
								<div class="input-group-append">	<span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
								</div>
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button class="btn btn-light" type="button" id="inputGroupFileAddon03">Button</button>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
									<label class="custom-file-label" for="inputGroupFile03">Choose file</label>
								</div>
							</div>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
									<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
								</div>
								<div class="input-group-append">
									<button class="btn btn-light" type="button" id="inputGroupFileAddon04">Button</button>
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
	<script src="/Vertical/assets/js/bs-custom-file-input.min.js"></script>
	<script>
		 // custom file 
		 $(document).ready(function () {
			bsCustomFileInput.init()
		});
	</script>
	<!--plugins-->
	<script src="/Vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/Vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/Vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
</body>

</html>