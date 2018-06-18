<?php
//aula 6
session_start();
session_destroy();

unset(
$_SESSION["usuarioNome"],
$_SESSION["usuarioId"],
$_SESSION["usuarioNivelAcesso"],
$_SESSION["usuarioSenha"],
$_SESSION["usuarioLogin"] 		
);

header("Location: login.php");
?>