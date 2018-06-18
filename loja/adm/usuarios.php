<?php
	session_start();
	include_once("processa/seguranca.php");
	echo "Bem Vindo usuario " .$_SESSION["usuarioNome"];
?>
<br>
<a href="sair.php">Sair </a>