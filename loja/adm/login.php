<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pagina de login">
    <meta name="author" content="Alison">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Area para Usuarios Cadastrados</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

        <script src="js/ie-emulation-modes-warning.js"></script>
</head>

  <body>
  	<?php
  	
 		unset(
$_SESSION["usuarioNome"],
$_SESSION["usuarioId"],
$_SESSION["usuarioNivelAcesso"],
$_SESSION["usuarioSenha"],
$_SESSION["usuarioLogin"] 		
);
	$_SESSION["usuarioNome"] ="";
	$_SESSION["usuarioId"] ="" ;
	$_SESSION["usuarioNivelAcesso"] = "";
	$_SESSION["usuarioSenha"] = "";
	$_SESSION["usuarioLogin"] = "";	
	

  	?>
    <div class="container">	

      <form class="form-signin" method="post"action="processa/valida_login.php">
        
        <h2 class="form-signin-heading text-center">Area para Usuario Cadastrado</h2>
        
        <label for="usuario" class="sr-only">Endereço de E-mail</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite o usuario" required autofocus><br>
        
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite a sua senha" required><br>
        
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnlogin">Entrar</button>
      
      </form>
	<p class="text-center text-danger">
		<?php
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION); 
			}
			
		?>
	</p>
    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>