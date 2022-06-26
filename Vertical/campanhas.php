<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>PushSending</title>
	<!--favicon-->
	<link rel="icon" href="/Vertical/assets/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="/Vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
		


            <section class="container-fluid instll-page wrapper-interna ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row col-md-12 g-3 d-flex justify-content-between mb-3">

                            <div class="row col-md-6 g-3 d-flex align-items-center" role="group">
                                <h3 class="instll-hns mx-3"><span>Your campaigns</span></h3>
                                <div class="btn-group" role="group">
                                    <button class="btn bttn-white px-5" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-bell mr-2" viewBox="0 0 16 16">
                                          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>AB
                                    </button> 
                                    <button class="btn bttn-white px-5" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-bell mr-2" viewBox="0 0 16 16">
                                          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>push
                                    </button>
                                </div>
                            </div>
                            <div class="row col-md-6 g-3 d-flex align-items-center justify-content-end">
                                <div class="col-md-6 d-flex justify-content-end p-0">
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                            <form class="form-inline d-flex">
                                                <input class="mr-sm-2 shadow-sm" type="text" id="srch-inpt" placeholder="Filter campaign"/>
                                                    <i class="bi bi-search"></i>
                                            </form>
                                    </nav>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end p-0">
                                    <button type="button" class="btn bttn-white col-md mx-1">
                                        All
                                    </button> 
                                    <button type="button" class="btn bttn-white">
                                        Create date
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-end mx-2 px-2">
                                <div class="btn-group" role="group">

                                    <button class="btn bttn-white" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                                          <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                                        </svg>
                                    </button> 
                                    <button class="btn bttn-white" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 my-5 p-3">
                                <div class="col-md-12 d-flex justify-content-center my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                                          <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                                    </svg>
                                </div>
                                <div class="col-md-12 text-center py-3">
                                    <h3 class="instll-hns my-3">
                                        You don't have any campaigns
                                    </h3>
                                    <p>If you want to announce something, create a new campaign.</p> 
                                    <button type="button" class="btn bttn-red my-3">
                                        Send campaign
                                    </button>
                                </div>
                            </div>
                        </div>
                        <nav class="row g-3 d-flex align-items-center mx-2 px-2">
                            <div class="input-group col-md d-flex justify-content-end p-0">
                                <span class="inpt-pg" id="basic-addon1">1</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-end col-md-2 p-0">from <div id="nm-cntr d-flex align-items-center px-3"><strong style="padding:0rem 0.5rem !important">0</strong></div> per page</div>
                            <div class="input-group col-md-1 d-flex justify-content-end">
                                <span class="inpt-pg" id="basic-addon1">20</span>
                            </div>
                            <ul class="pagination my-3 d-flex justify-content-end col-md-1 btn-group">
                                <li class="page-item bttn-red pgntn mx-3">
                                    <a class="page-link pgntn" href="#"> < </a>
                                </li>
                                <li class="page-item bttn-red pgntn">
                                    <a class="page-link pgntn" href="#"> > </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        




		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">PushSending By @2021 : <a href="http://www.pushsending.com/" target="_blank">PushSending</a>
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
			<h5 class="mb-0 text-uppercase">Costumize Seu Thema</h5>
			<hr/>
			<p class="mb-0">Texturas Gaussian</p>
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
			  <p class="mb-0">Plano de fundo Gradient</p>
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
	<!-- Vector map JavaScript -->
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="/Vertical/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/Vertical/assets/js/index.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

</html>