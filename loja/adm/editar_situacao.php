<?php
	$id = $_GET['id'];
	$sql ="Select * from situacoes where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">


    <div class="page-header">
      <h1>Editar Situaçoes</h1>
    </div>
    
    <div class="row espaco">
    	<div class="pull-right">
    		<a href="administrativo.php?link=18">
    			<button type="button" class="btn btn-sm btn-info">Listar
    			</button>
   			</a>
        
    		<a href="administrativo.php?link=21&id=<?php echo $row['id'];?>">
    			<button type="button" class="btn btn-sm btn-danger"> Apagar
    			</button>
    		</a>
   		</div>
    </div>
    
   <div class="row">
   		<div class="col-md-12">     	
   			<form class="form-horizontal" method="post" action="processa/proc_edi_sit.php">
   		
   			<div class="form-group">
   			<label for="nome" class="col-sm-2 control-label">Nome</label>
   			<div class="col-sm-10">
   				<input type="text" class="form-control" id="nome" value="<?php echo $row['nome'];?>" name="nome" placeholder="Digite o nome da situacao" autofocus="autofocus">
   			</div>
   			
   		</div>
   		
   			</div>
   		</div>
   		
   		<input type="hidden" name="subs" value="<?php echo $row['id'] ?> "><br>
   		
   		<div class="form-group">
   			<div class="col-sm-offset-2 col-sm-10">
   			<button type="submit" class="btn btn-success">Editar</button>
   			</div>
   		</div>
   	</form>
   		
   	</div>
  </div>
   
   
   
 </div>