<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$nome = $_POST["nome"];
	$ = $_POST[""];
	$ = $_POST["senha"];
	$usuario = $_POST["usuario"];
	$nivelacesso = $_POST["nivelacesso"];
		
	
	$query = "insert into `produtos` (`nome`, `description`, `descricao_curta`, `descricao_longa`, `preco`, `tag`, `imagem`, `situacao_id`, `categoria_id`, `created`) values ('$nome','$l','$senha','$usuario','$nivelacesso',NOW() )";
INSERT INTO `tcc`., `modified`) VALUES (NULL, 'mouse', 'mouse usb', 'mouse usb para pc/celular e tablets', 'mouse especificio para usar com voce', '30', 'mouse,mouse pc,mouse celular', 'mouse.jpg', '1', '1', '2018-05-02 00:00:00', NULL);
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