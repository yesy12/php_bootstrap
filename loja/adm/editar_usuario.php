<?php
	$id = $_GET['id'];
	$sql ="Select * from usuarios where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">


    <div class="page-header">
      <h1>Editar usuario</h1>
    </div>
    
    <div class="row espaco">
    	<div class="pull-right">
    		<a href="administrativo.php?link=2">
    			<button type="button" class="btn btn-sm btn-info">Listar
    			</button>
   			</a>
        
    		<a href="administrativo.php?link=6&id=<?php echo $row['id'];?>">
    			<button type="button" class="btn btn-sm btn-danger"> Apagar
    			</button>
    		</a>
   		</div>
    </div>
    
   <div class="row">
   	<div class="col-md-12">     	
   		<form class="form-horizontal" method="post" action="processa/proc_edi_usu.php">
   		
   		<div class="form-group">
   			<label for="nome" class="col-sm-2 control-label">Nome</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="nome" value="<?php echo $row['nome'];?>" name="nome" placeholder="Digite seu nome" autofocus="autofocus">
   			</div>
   			
   		</div>
   		
   		<div class="form-group">
   			<label for="email" class="col-sm-2 control-label">E-mail</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" placeholder="Digite seu email" >
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="usuario" class="col-sm-2 control-label">Usuario</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="usuario" value="<?php echo $row['usuario'];?>" name="usuario" placeholder="Digite seu usuario" >
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="senha" class="col-sm-2 control-label">Senha</label>
   			<div class="col-sm-10">
   				<input type="password" class="form-control" id="senha" name="senha" value="<?php echo $row['senha'];?>" placeholder="Digite sua senha" >
   			</div>
   		</div>
   		
   		<div class="form-group">
   			<label for="nivelacesso" class="col-sm-2 control-label">Nivel de Acesso</label>
   			<div class="col-sm-10">
   				<select class="form-control" name="nivelacesso">
						<option>Selecione</option>
						<option value="1" <?php
	if($row['nivel_acesso_id'] ==1){
		echo "selected";
	}?>>Administrativo</option>
						<option value="2" <?php
	if($row['nivel_acesso_id'] ==2){
		echo "selected";
	}?>>Usuario Comum</option>
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