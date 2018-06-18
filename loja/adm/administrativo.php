<?php
	session_start();
	include_once("processa/seguranca.php");
	include_once("processa/conexao.php");	
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Pagina administativa">
    <meta name="author" content="Alison">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Pagina administrativa</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   <link href="css/theme.css" rel="stylesheet">
   
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <script src="js/ie-emulation-modes-warning.js"></script>
	
	<style>
		.espaco{
			margin-bottom:15px;
		}
	</style>

  </head>

  <body>
	<?php
		include_once("menu_admin.php");
		
		$link = $_GET['link'];
		$pag[1]= "bem_vindo.php";
		$pag[2]= "listar_usuario.php";
		$pag[3]= "cad_usuario.php";
		$pag[4]= "editar_usuario.php";
		$pag[5]= "visual_usuario.php";
		$pag[6]= "processa/proc_apagar_usuario.php";
		$pag[7]= "cad_categoria.php";
		$pag[8]= "listar_categoria.php";
		$pag[9]= "visual_categoria.php";
		$pag[10]= "editar_categoria.php";
		$pag[11]= "processa/proc_apagar_categoria.php";
		$pag[12]= "listar_produto.php";
		$pag[13]= "visual_produto.php";
		$pag[14]= "editar_produto.php";
		$pag[15]= "processa/proc_apagar_produto.php";
		$pag[16]= "cad_produto.php";
		$pag[17]= "listar_situacao.php";
		$pag[18]= "cad_situacao.php";
		$pag[19]= "visual_situacao.php";
		$pag[20]= "editar_situacao.php";
		$pag[21]= "processa/proc_apagar_situacao.php";
		
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}
			else{
				include $pag[1];
			}			
		}else{
			include $pag[1];
		}
		
		
	?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/docs.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<script src="js/ckeditor_full/ckeditor.js"></script>

  </body>
</html>


<br>