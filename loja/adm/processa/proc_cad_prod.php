<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$nome = $_POST["nome"];
	$desc_curta = $_POST["desc_curta"];
	$desc_longa = $_POST["desc_longa"];
	$preco = $_POST["preco"];
	$tag = $_POST["tag"];
	$description = $_POST["description"];
	$imagem = $_FILES["arquivoimagem"]['name'];	
	$categoria = $_POST["categoria_id"];
	$situacao= $_POST["situacao_id"];	


	//Pasta onde vai se salvo as imagens
	$_UP['pasta'] = '../../foto/';
	
	//Tamanho maximo em Bytes
	$_UP['tamanho'] = 1024*1024*100;//5mb
	
	//Array com as extensoes permitidas
	$_UP['extensoes'] = array("png","jpg","gif","jpeg");
	
	//Renomeia o arquivoimagem?(se true,o arquivoimagem sera salvo com .jpg e em nome unico)
	$_UP['renomeia'] = false;
	
	//Array com os tipos de erros de upload com php
	$_UP['erros'][0] = "Nao houve erros";
	$_UP['erros'][1] = "O arquivo no upload e maior que o limite permitido no PHP";
	$_UP['erros'][2] = "O arquivoimagem ultrapassa o limite de tamanho especificado no HTML";
	$_UP['erros'][3] = "O upload do arquivoimagem foi feito parcialmente";
	$_UP['erros'][4] = "Nao foi feito o upload do arquivo";
	
	//Verifica se houve algum erro com o upload.Se sim,exibe a mensagem do erro
if($_FILES["arquivoimagem"]["error"] != 0){
	die("nao foi possivel fazer o upload, erro: <br>".$_UP["erros"].$_FILES["arquivoimagem"]["error"]);
	exit;//Para a execucao do script
}


//Faz a verificacao da extensao do arquivo
$extensao = explode(".",$_FILES["arquivoimagem"]["name"])[1];


if(array_search($extensao,$_UP['extensoes']) === false){
	echo '
	<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
	<script>
		alert("Por favor,envie imagem com as seguintes extensoes: png,jpg,gif,jpeg");
	</script>
	';
}



//Faz a verificacao do tamanho do arquivo 
else if($_UP["tamanho"] < $_FILES['arquivoimagem']['size'] ){
	echo "o arquivo enviado ´e muito grande,envie a foto de at´e 2mb"; 
}



//Se chegou aqui move para a pasta fotos 
else{
	//primeiro verifica se deve trocar o nome do arquivo
	if($_UP["renomeia"] == true){
		//Criar um nome baseado no UNIX TIMESTAMP atual e com extens˜ao .jpg
		$nome_final = time().'.jpg';
	}
	else{
		//n˜ao muda nome do arquivo
	//	$nome_final =  ;
		$nomeacao=  explode('.',$_FILES["arquivoimagem"]["name"]);
		$nomeacao[0] = $nomeacao[0]."__".$nome;
		$nome_final = $nomeacao[0].".".$nomeacao[1];
	}

	
	//se ´e possivel mover o arquivo para a pasta escolhida

$query = "insert into produtos (`nome`, `description`, `descricao_curta`, `descricao_longa`, `preco`, `tag`, `imagem`, `situacao_id`, `categoria_id`, `created`) values ('$nome','$description','$desc_curta','$desc_longa','$preco','$tag','$nome_final','$situacao','$categoria',NOW() );";


	if(move_uploaded_file($_FILES["arquivoimagem"]["tmp_name"], $_UP["pasta"].$nome_final)){
		//Upload efetuado com sucesso,exibe a mensagem de sucesso
		echo '
			<script>
				alert("Imagem carerragada com sucesso");
			</script>
		';
		
		if($con->query($query)){
			echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
			<script>
				alert("Cadastrado com sucesso");
			</script>
		';
		
	}
}
	else{
		echo '
			
			<script>
				alert("Imagem carerragada  sem sucesso");
			</script>
		';
	}
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php



?>
</body>
</html>