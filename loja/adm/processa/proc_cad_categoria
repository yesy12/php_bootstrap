<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$usuario = $_POST["usuario"];
	$nivelacesso = $_POST["nivelacesso"];
		
	
	$query = "insert into usuarios (nome,email,senha,usuario,nivel_acesso_id,created) values ('$nome','$email','$senha','$usuario','$nivelacesso',NOW() )";
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
			alert("Cadastrado com sucesso");
		</script>
		';
	}else{
		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=2">
			<script>
				alert("Cadastrado sem sucesso");
			</script>
		';
	}
?>

</body>
</html>