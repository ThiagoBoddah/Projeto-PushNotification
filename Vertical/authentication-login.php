<?php include('inc/config_notlogged.php'); ?>
<?php 
unset($_SESSION['user']);
if(isset($_POST['usuario'])){
    if($_POST['usuario']=='Desck'&&$_POST['senha']=='Senh4123'){
        $_SESSION['user']='Desck';
        header('location:index.php');
        exit();
    }else{
        $msg='Usuário incorreto.';
    }
}
if(isset($_GET['d'])){
    $msg='Você não está logado.';
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syntrans - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/Vertical/assets/images/favicon-32x32.png" type="image/png" />
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
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="/Vertical/assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									<div class="input-group shadow-sm rounded mt-5">
										<div class="input-group-prepend">	<span class="input-group-text cursor-pointer"><i class='bx bxl-google' ></i></span>
										</div>
										<input type="button" class="form-control" value="Log in with google">
									</div>
									<div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
										<hr/>
									</div>
                                    <?php if(isset($msg)){?>
                                        <div class="login-separater text-center"> <span><?php echo $msg ?></span>
                                        </div>
                                    <?php } ?>
									<form action="?" method="post">
                                        <div class="form-group mt-4">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" name="usuario" placeholder="Enter your email address" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="senha" placeholder="Enter your password" />
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-light btn-block">Log In</button>
                                            <button type="button" class="btn btn-light"><i class="lni lni-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="form-row mt-3">
										<div class="form-group col">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
												<label class="custom-control-label" for="customSwitch1">Remember Me</label>
											</div>
										</div>
										<div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
										</div>
									</div>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="authentication-register.html">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="/Vertical/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
