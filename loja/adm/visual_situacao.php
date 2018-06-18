<?php
	$id = $_GET['id'];
	$sql ="Select * from situacoes where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Visualizar Situaçao</h1>
      </div>
      
      <div class="row">
      	<div class="pull-right">
      		<a href="administrativo.php?link=17&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-info">Listar
				</button>
      		</a>
      		
      		<a href="administrativo.php?link=20&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-warning">Editar
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
			<div class="col-xs-4 col-sm-4 col-md-4 ">
				Nome da Situaçao:
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
			
			<?php
			
				if($row['modified'] != ""){
					echo '		
						<div class="col-xs-3 col-sm-3 col-md-3"> ';
					echo '
						Ultima modificaçao em:
						';
					echo '
						</div>'; 
					echo '
						<div class="col-xs-9 col-sm-9 col-md-9">
					';
					echo $row["modified"];
					echo '
						</div>	
					';
				}
			?>
			
     	</div>
     </div>
     
     
     
 </div>