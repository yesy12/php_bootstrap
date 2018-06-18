<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$nome = $_POST["nome"];	
	
	$query = "insert into situacoes (nome,created) values ('$nome',NOW() )";
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
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=17">
		<script>
			alert("Situaçao cadastrada com sucesso");
		</script>
		';
	}else{
		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=17">
			<script>
				alert("Situaçao cadastrada sem sucesso");
			</script>
		';
	}
?>

</body>
</html>