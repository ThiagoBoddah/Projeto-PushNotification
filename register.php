<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Push Sending - Registrar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="">

<div class="container mt-5">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
	<!-- Nested Row within Card Body -->
	<div class="row">
	  <div class="col-lg-2 d-none d-lg-block "></div>
	  <div class="col-lg-8">
		<div class="p-5">
		  <div class="text-center">
			<h1 class="h4 text-gray-900 mb-4">Criar Conta</h1>
		  </div>
		  <form class="user" action="" method="post" enctype="multipart/form-data">
			<div class="form-group row">
			  <div class="col-sm-12 mb-3 mb-sm-0">
				<input type="text" class="form-control form-control-user" id="nome_cadastro" name="cad[nome]" placeholder="Digite seu nome" required>
			  </div>
			  
        
      </div>
      <div class="form-group row">
      <div class="col-sm-6">
			  <input type="email" class="form-control form-control-user"  id="email_cadastro" name="cad[email]" placeholder="Digite seu email" required>
			  </div>
			  <div class="col-sm-6 mb-3 mb-sm-0">
				<input type="tel" size="20" minlength="11" maxlength="12" class="form-control form-control-user" id="tel_cadastro" name="cad[telefone]" placeholder="Digite seu telefone" required>
			  </div>
			 
        
      </div>

      <div class="form-group row">
			  <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control form-control-user"  id="senha_cadastro" name="cad[senha]"  pattern="[\w\W]{6,}" title="6 Caracteres ou mais" placeholder="Digite uma senha" required>

      </div>
			  <div class="col-sm-6">
        <input type="password" class="form-control form-control-user"  id="csenha_cadastro" name="cad[csenha]" pattern="[\w\W]{6,}" title="6 Caracteres ou mais" placeholder="Confirme Sua Senha" required>
		                <input type="hidden" name="token" value="<?=md5(sha1(time()))?>">            
       
    
      </div>

	 

     <button class="btn btn-primary mt-3 btn-user btn-block">Cadastrar</button>
 
		 
			<hr>
		 
		  </form>
		   
    </div>
    <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Esqueceu a senha?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Já tem uma conta? Entre aqui!</a>
              </div>
              <hr>
              <h6>Ao continuar você concorda com nossos <a href="">Termos e Condições</a></h6>
	  </div>
	</div>
  </div>
</div>

</div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
