<?php
	$id = $_GET['id'];
	$sql ="Select * from categorias where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Visualizar Categoria</h1>
      </div>
      
      <div class="row">
      	<div class="pull-right">
      		<a href="administrativo.php?link=8&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-info">Listar
				</button>
      		</a>
      		
      		<a href="administrativo.php?link=10&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-warning">Editar
      			</button>
      		</a>
      			
      		<a href="administrativo.php?link=11&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-danger"> Apagar
      			</button>
      		</a>
      			
      	</div>
      </div>
      
     <div class="row">
     	<div class="col-md-12">     
			<div class="col-xs-4 col-sm-4 col-md-4 ">
				Nome da Categoria:
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8">
				<?php echo $row['nome'];?>
			</div>
			
			<div class="col-xs-4 col-sm-4 col-md-4 ">
				Criado em:
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8">
				<?php echo $row['created'];?>
			</div>
			
     	</div>
     </div>
     
     
     
 </div>