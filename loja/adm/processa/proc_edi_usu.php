<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$senha = $_POST["senha"];
	$id = $_POST["subs"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$usuario = $_POST["usuario"];
	$nivelacesso = $_POST["nivelacesso"];
	
	$query = "UPDATE `usuarios` SET `nome`='$nome',`email`='$email',`usuario`='$usuario',`senha`='$senha',`nivel_acesso_id`='$nivelacesso',`modified`=NOW() WHERE id = '$id';";
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

if($con->query($query)){
	echo '
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=2">
	<script>
		alert("Editado com sucesso");
	</script>
	';
}else{
	echo '
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=2">
		<script>
			alert("Editado sem sucesso");
		</script>
	';
}
?>

</body>
</html>