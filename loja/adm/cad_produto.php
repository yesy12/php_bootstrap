  
  <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Cadastrar produto</h1>
      </div>
      
      
     <div class="row">
     	<div class="col-md-12">     	
     		<form class="form-horizontal" method="post" action="processa/proc_cad_prod.php" enctype="multipart/form-data">
     		
     		<div class="form-group">
     			<label for="nome" class="col-sm-2 control-label">Nome</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="nome" placeholder="Nome do Produto" name="nome" autofocus="autofocus" >
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="desc_curta" class="col-sm-2 control-label">Descricao curta</label>
     			<div class="col-sm-10">
     				<textarea class="form-control ckeditor" id="desc_curta" name="desc_curta" placeholder="Descricao curta" rows="3"></textarea>
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="desc_longa" class="col-sm-2 control-label">Descricao longa</label>
     			<div class="col-sm-10">
     				<textarea class="form-control ckeditor" id="desc_longa" name="desc_longa" placeholder="Descricao longa" rows="3"></textarea>
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="preco" class="col-sm-2 control-label">Preco</label>
     			<div class="col-sm-10">
     				<input type="text" id="preco" name="preco" placeholder="preco" class="form-control">
     			</div>
     		</div>
     		
     		
     		<div class="form-group">
     			<label for="tag" class="col-sm-2 control-label">Tag</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="tag" placeholder="Digite a tag" name="tag">
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="description" class="col-sm-2 control-label">Description</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="description" placeholder="Digite a desctiption" name="description">
     			</div>
     		</div>
    		
     		<form>
     		
     		<div class="form-group">
     			<label for="imagem" class="col-sm-2 control-label">Upload</label>
     			<input type="file" id="imagem" name="arquivoimagem">
     		</div>		
     		
     		<div class="form-group">
     			<label for="categoria_id" class="col-sm-2 control-label">Categorias</label>
     			<div class="col-sm-10">
     				<select class="form-control" name="categoria_id">
						<option>Selecione</option>
						<?php
							$sql ="Select * from categorias where nome!='' order by id asc ";
							$resultado = $con ->real_query($sql);
							$resultado= $con->use_result(); 	
						
							while ($row = $resultado->fetch_assoc()){
								echo '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
								echo "<br>";
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
     						<?php
     							$sql ="Select * from situacoes where nome!='' order by id asc ";
     							$resultado = $con ->real_query($sql);
     							$resultado= $con->use_result(); 	
     						
     							while ($row = $resultado->fetch_assoc()){
     								echo '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
									echo "<br/>";
     		}
     ?>
     				</select>
     			</div>
     		</div>
     
     
     
     		<div class="form-group">
     		<div class="col-sm-offset-2 col-sm-10">
     		<button type="submit" class="btn btn-success">Cadatrar</button>
     		</div>
     		</div>
     		</form>
     		
     	</div>
     </div>
     
     
     
 </div>