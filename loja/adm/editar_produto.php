<?php
	$id = $_GET['id'];
	$sql ="Select * from produtos where id=$id limit 1;";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
	
?>
<div class="container theme-showcase" role="main">


    <div class="page-header">
      <h1>Editar produto</h1>
    </div>
    
    <div class="row espaco">
    	<div class="pull-right">
    		<a href="administrativo.php?link=12">
    			<button type="button" class="btn btn-sm btn-info">Listar
    			</button>
   			</a>
        
    		<a href="administrativo.php?link=15&id=<?php echo $row['id'];?>">
    			<button type="button" class="btn btn-sm btn-danger"> Apagar
    			</button>
    		</a>
   		</div>
    </div>
    
   <div class="row">
   	<div class="col-md-12">     	
   		<form class="form-horizontal" method="post" action="processa/proc_edi_prod.php" enctype="multipart/form-data">
   		
   		<div class="form-group">
   			<label for="nome" class="col-sm-2 control-label">Nome</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="nome" value="<?php echo $row['nome'];?>" name="nome" placeholder="Digite seu nome" autofocus="autofocus">
   			</div>
   			
   		</div>
   		
   		<div class="form-group">
   			<label for="descricao_curta" class="col-sm-2 control-label">Descricao Curta</label>
   			<div class="col-sm-10">
   				<textarea class="form-control ckeditor" id="desc_curta" name="desc_curta" placeholder="Descricao curta" rows="3"></textarea>
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="descricao_longa" class="col-sm-2 control-label">Descricao Longa</label>
   			<div class="col-sm-10">
   				<textarea class="form-control ckeditor" id="desc_longa" name="desc_longa" placeholder="Descricao longa" rows="3"></textarea>
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="preco" class="col-sm-2 control-label">Preço</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="preco" name="preco" value="<?php echo $row['preco'];?>" placeholder="Digite o preço" >
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="tag" class="col-sm-2 control-label">Tags</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="tag" name="tag" value="<?php echo $row['tag']; $resultado->close();?>" placeholder="Digite a tag" >
   			</div>
   		</div>
   		
   		<?php
   			$foto = $row['imagem'];
   			if($foto == ""){
   				echo '
   					<div class="form-group">
   				';
   				echo '
   					<label for="img_antiga" class="col-sm-2 control-label">Foto do Produto Antigo</label>  				
   			';
   				echo '
   					<div class="col-sm-10">';  					
   				echo "Produto nao possui imagem"; 

				echo '
					</div>
				';
		echo '
		</div> ';
}  			 			  			
   		else{
   			echo '
   				<div class="form-group">
   			';
   				echo '
   					<label for="img_antiga" class="col-sm-2 control-label">Foto do Produto Antigo</label>  				
   				';
   				echo '
   					<div class="col-sm-10">';
			echo "
					<img src='../foto/$foto' width='100' height='100'>
					<input type='hidden' name='img_antiga' value= $foto>
				"; 
				echo '
					</div>
				';
			echo '
		</div>
		';
   		}
   		
   		
   		?>
   		
   		
   		
   		
   		<div class="form-group">
   			<label for="arquivoimagem" class="col-sm-2 control-label">Foto do Produto</label>
   			<div class="col-sm-10">
   				<input name="arquivoimagem" type="file" >
   			</div>
   		</div>
   	
   		
   		
   		
   		
   		<div class="form-group">
   			<label for="categoria_id" class="col-sm-2 control-label">Categorias</label>
   			<div class="col-sm-10">
				<select class="form-control" name="categoria_id">
					<option>Selecione</option>
					<?php
					$sql ="Select * from categorias";
 					$resultado = $con ->real_query($sql);
	
					$resultado = $con->use_result();
						if ($resultado) {
							while($row = $resultado->fetch_assoc()){
								echo '<option value='.$row['id'].">";
								echo $row['nome']."</option>";
					}
					$resultado->close();
				} else {
						die($con->error);
				}
					
					?>
   				</select>
   			
   			</div>
   		</div>
 
   		
   		
   		<div class="form-group">
   			<label for="situacao_id" class="col-sm-2 control-label">Situaçao</label>
   			<div class="col-sm-10">
   				<select class="form-control" name="situacao_id">
   								<option>Selecione</option>
   								<option value="1" <?php
								
	$sql ="Select * from produtos where id=$id limit 1;";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
	
   			if($row['situacao_id'] ==1){
   				echo "selected";
   			}?>>Ativado</option>
   								<option value="2" <?php
   			if($row['situacao_id'] ==2){
   				echo "selected";
   			}?>>Desativado</option>
   								<option value="3" <?php
   			if($row['situacao_id'] ==3){
   			echo "selected";
   			}?>>Falta de Estoque</option>
   				</select>
   			</div>
   		</div>
   		
   		
   		<input type="hidden" name="subs" value="<?php echo $row['id'] ?> ">
   		
   		<div class="form-group">
   			<div class="col-sm-offset-2 col-sm-10">
   			<button type="submit" class="btn btn-success">Editar</button>
   			</div>
   		</div>
   	</form>
   		
   	</div>
  </div>
   
   
   
 </div>