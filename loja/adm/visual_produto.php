<?php
	$id = $_GET['id'];
	$sql ="Select * from produtos where id='$id' limit 1";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
	$row = $resultado->fetch_assoc();
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Visualizar produtos</h1>
      </div>
      
      <div class="row">
      	<div class="pull-right">
      		<a href="administrativo.php?link=12">
      			<button type="button" class="btn btn-sm btn-info">Listar
				</button>
      		</a>
      		
      		<a href="administrativo.php?link=14&id=<?php echo $row['id'];?>">
      			<button type="button" class="btn btn-sm btn-warning">Editar
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
				Descriçao Longa:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11">
				<?php echo $row['descricao_longa'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-1">
				Descricao Curta:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-11">
				<?php echo $row['descricao_curta'];?>
			</div>
			
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Preço	
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<?php echo $row['preco'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Tag
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<?php echo $row['tag'];?>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Imagem	
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<img src="../foto/<?php echo $row['imagem']; ?>" width= "300" height="300">
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Situaçao:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
			<?php echo $row['situacao_id'];?> <br>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Categoria:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
			<?php echo $row['categoria_id'];?> <br>
			</div>
			
			
			<div class="col-xs-3 col-sm-3 col-md-3">
				Criado em:
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<?php echo $row['created'];?> <br>
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