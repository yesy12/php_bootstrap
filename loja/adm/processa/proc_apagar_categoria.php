<?php
	$id = $_GET['id'];
	
	$query = "delete from categorias where id=$id;";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
if($con->query($query)){
	echo '<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=8">
		<script>
			alert("Categoria apagada com sucesso");
		</script>
	';
}
else{
	echo '
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=2">
		<script>
			alert("Categoria apagada sem sucesso");
		</script>
	';
}
?>

</body>
</html>