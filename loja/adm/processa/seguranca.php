<?php
	ob_start();
	if($_SESSION['usuarioId']  == ""||
	$_SESSION['usuarioNome']  == ""||
	$_SESSION['usuarioNivelAcesso']  == ""||
	$_SESSION['usuarioSenha']  == ""||
	$_SESSION['usuarioLogin']  == ""){
		$_SESSION['loginErro']= "Precisa esta logado";
		header("Location: login.php");
	
	}

?>