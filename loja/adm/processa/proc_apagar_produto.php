<?php
	$id = $_GET['id'];
	
	$query = "delete from produtos where id=$id;";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
if($con->query($query)){
	echo '<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
		<script>
			alert("Produto apagado com sucesso");
		</script>
	';
}
else{
	echo '
		<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
		<script>
			alert("Produto apagado sem sucesso");
		</script>
	';
}
?>

</body>
</html>