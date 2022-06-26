<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<html lang="auto" class="" style="height: 100%;">

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
	<link rel="stylesheet" type="text/css" href="internas/style.css?">
	
	
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
		
        <section class="wrapper-interna d-flex">
            <div class="lft-pnl">
                <div id="sb-pnl">
                    <div class="cntt-blx-r">
                        <div class="ini">
                            <button type="submit" class="bttn bttn-white ">Send to yourself</button>
                        </div>
                    </div>

                    <div class="m-line">
                        <h3>Links</h3>
                        <div class="mb-1">

                            <div class="npt-http">
                                <select class="frm-http " id="validationTooltip04" required>
                                    <option selected value="">http://</option>
                                    <option>...</option>
                                </select>
                                <input type="text" class="frm-cntrl-npt" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                    </div>

                    <div class="m-line">
                            <h3 class="clearfix mt-5">Content</h3>   
                            <div class="flx-cntt">
                            <div class="cntt-left"> 
                                <label for="validationCustom01" class="form-label">Notification icon</label>
                                <div class="cntt-left-ex">
                                <div class="cntt-left-in">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="200" />
                                    <input id="uploadItem" onChange="readURL(this)" type="file" style="display: none"/>
                                    <label for="uploadItem" class="bttn-up preview-img">
                                        <img src="/Vertical/assets/images/svg-placeholder.svg">
                                    </label>
                                </div>
                                </div>
                                <p>(Max. file size: 200KB)</p>
                                <p>Choose from library</p>
                            </div>

                                <div class="cntt-rgt">
                                    <div class="cntt-blc">
                                        <label for="validationCustom01" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="titulo-not-input" required onKeyUp="atualizaValores()">
                                    </div>
                                    <div class="cntt-blc">
                                        <label for="validationCustom01" class="form-label">Message</label>
                                        <textarea class="form-control msg-input" id="texto-not-input" value="And a great content" onKeyUp="atualizaValores()" required></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="m-line flx-cntt">
                        <div class="ar-3 cntt-left">
                            <h3>Require interaction</h3>
                                <input type="checkbox" name="requireCheck" value="Bike">
                                <label class="form-check-label" for="requireCheck">
                                    Require interaction <div class=""></div>
                                </label>
                        </div>

                        <div class="ar-3 cntt-rgt">
                            <h3>Expire Date</h3>
                                <div class=""></div>
                                <input type="date" id="birthday" name="birthday">
                                <input type="time" id="appt" name="appt">
                        </div>
                    </div>

                    <div class="cntt-blx-r">
                        <div class="ini">
                            <input type="submit" value="Send campaign" class=" bttn bttn-red">
                        </div>
                    </div>

                </div>

            </div>
            <div class="rgt-pnl">
                <div id="sbn-pnl2">
                    <h3>Notification Preview</h3>
                    <button type="button" class="bttn bttn-white lft-white bttn-w">Windows</button>
                    <button type="button" class="bttn bttn-white mdll-white bttn-w">Mac-os</button>
                    <button type="button" class="bttn bttn-white rgt-white bttn-w">Android</button>
                </div>

                <div class="mdl-gry">
                    <h3>Chrome</h3>
                    <div class="cel-1">
                        <div class="img-cel preview-img">
                            <img src="/Vertical/assets/images/svg-placeholder.svg">
                        </div>
                        <div class="sub-cel">
                            <h3 class="sub-cel title-not">Title</h3>
                            <p class="text-not">Google Chrome - wwww-www-pushending-com.pushpushgo.com</p>
                        </div>
                    </div>
                    <h3>Edge</h3>
                    <div class="cel-1">
                        <div class="img-cel preview-img">
                            <img src="/Vertical/assets/images/svg-placeholder.svg">
                        </div>
                        <div class="sub-cel">
                            <h3 class="sub-cel title-not">Title</h3>
                            <p class="text-not">Microsoft Edge - wwww-www-pushending-com.pushpushgo.com</p>
                        </div>
                    </div>
                    <h3>Firefox</h3>
                    <div class="cel-2">
                        <div class="img-cel preview-img">
                            <img src="/Vertical/assets/images/svg-placeholder.svg">
                        </div>
                        <div class="sub-cel">
                            <h3 class="title-not">Title</h3>
                            <p class="text-not">Microsoft Edge - wwww-www-pushending-com.pushpushgo.com</p>
                        </div>
                    </div>
                </div>
                <p>*Preview may not be identical to real push.</p>
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
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
        
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('.preview-img img')
                .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
        function atualizaValores(){
           jQuery('.title-not').text(jQuery('#titulo-not-input').val());
           jQuery('.text-not').text(jQuery('#texto-not-input').val());
        }
	</script>
</body>

</html>