<?php
	session_start();
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	include_once("conexao.php");
	$result = $con->query("Select * from usuarios where usuario='$usuario' and senha='$senha' limit 1");
	$resultado = $result->fetch_assoc();
/*	echo "Usuario".$resultado["nome"];*/
	if(empty($resultado)){
		//MEnsagem erro
		$_SESSION['loginErro'] = "Usuario ou senha invalido";
		//mandar para login
		header("Location: ../login.php");	 	
}
 	else{
 	//Define o nome do usuario na sessao do usuario 
 		$_SESSION["usuarioNome"] = $resultado['nome'];
		$_SESSION["usuarioId"] = $resultado['id'];
		$_SESSION["usuarioNivelAcesso"] = $resultado['nivel_acesso_id'];
		$_SESSION["usuarioSenha"] = $resultado['senha'];
		$_SESSION["usuarioLogin"] = $resultado['usuario'];

		unset($_SESSION['loginErro']);
		if($_SESSION['usuarioNivelAcesso'] == 1){
	header("Location: ../administrativo.php?link=1");	
		
	}
	else{
		header("Location: ../usuarios.php");
	}
 }

?>