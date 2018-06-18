<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$id = $_POST["subs"];
	$nome = $_POST["nome"];
		
	$query = "UPDATE `categorias` SET `nome`='$nome',`modified`=NOW() WHERE id = '$id';";
	
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
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=8">
	<script>
		alert("Categoria editada com sucesso");
	</script>
	';
}else{
	echo '
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=8">
		<script>
			alert("Categoria editada sem sucesso");
		</script>
	';
}
?>

</body>
</html>