<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
	session_start();
	
	include_once("conexao.php");
	include_once("seguranca.php");
	
	$id = $_POST["subs"];
	$nome = $_POST["nome"];
	$desc_curta = $_POST["descricao_curta"];
	$desc_longa = $_POST["descricao_longa"];
	$preco = $_POST["preco"];
	$tag = $_POST["tag"];
	$categoria_id = $_POST["categoria_id"];
	$situacao_id = $_POST["situacao_id"];
	$img_antiga = $_POST["img_antiga"];
	$imagem = $_FILES["arquivoimagem"]['name'];	
	
//Se esta aqui e porque nao existe imagem e ira salvar
if($imagem == ""){
	
	//comando
	$query = "UPDATE `produtos` SET `nome`='$nome',`descricao_curta`='$desc_curta',`descricao_longa`='$desc_longa',`preco`='$preco',`tag`='$tag',`situacao_id`=$situacao_id,`categoria_id`=categoria_id,`modified`=NOW() WHERE id=$id";
		
	//verifica se pode salvar 
	if($con->query($query)){
		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
		<script>
			alert("Editado com sucesso");
		</script>
		';
	}
	//else da conexao
	else{
		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
			<script>
				alert("Editado sem sucesso");
			</script>
		';
	}

}
	
//else da comparaçao se a imagem esta vazia
else{
	
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
			$nomea_final = time().'.jpg';
		}
		else{
			//n˜ao muda nome do arquivo
			$nomeacao=  explode('.',$_FILES["arquivoimagem"]["name"]);
			$nomeacao[0] = $nomeacao[0]."__".$nome;
			$nome_final = $nomeacao[0].".".$nomeacao[1];
		}


	//comando
	$query = "UPDATE `produtos` SET `nome`='$nome',`descricao_curta`='$desc_curta',`descricao_longa`='$desc_longa',`preco`='$preco',`tag`='$tag',`situacao_id`=$situacao_id,`categoria_id`=categoria_id,`modified`=NOW(),`imagem`='$nome_final' WHERE id=$id";


	//verifica se pode salvar no db e mover a pasta
	if($con->query($query) && move_uploaded_file($_FILES["arquivoimagem"]["tmp_name"], $_UP["pasta"].$nome_final)) {
		//Upload efetuado com sucesso,exibe a mensagem de sucesso e tem que ter sucesso ao cadastrar no banco de dados

		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
		<script>
			alert("Editado com sucesso");
		</script>
		';
	} 
	//else da conexao
	else{
		echo '
			<META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8080/adm/administrativo.php?link=12">
			<script>
				alert("Editado sem sucesso");
			</script>
		';
		}
	}	
}
?>
</body>
</html>