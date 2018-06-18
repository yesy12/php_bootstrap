<?php
	$id = $_GET['id'];
	$sql ="Select * from usuarios where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Visualizar usuario</h1>
      </div>
      
      <div class="row">
      	<div class="pull-right">
      		<a href="administrativo.php?link=2">
      			<button type="button" class="btn btn-sm btn-info">Listar
				</button>
      		</a>
      		
      		<a href="administrativo.php?link=4&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-warning">Editar
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
     		
			<div class="col-xs-3 col-sm-3 col-md-1 ">
				Id:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11 ">
				<?php echo $row['id'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-1 ">
				Nome:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11">
				<?php echo $row['nome'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-1">
				E-mail:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11">
				<?php echo $row['email'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-1">
				Usuario:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11">
				<?php echo $row['usuario'];?>
			</div>
			
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Nivel de Acesso:	
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<?php echo $row['nivel_acesso_id'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Criado em:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<?php echo $row['created'];?>
			</div>
			
     	</div>
     </div>
     
     
     
 </div>