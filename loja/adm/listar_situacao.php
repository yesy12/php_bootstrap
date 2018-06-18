<?php
	$sql ="Select * from situacoes where nome!='' order by id asc ";
	$resultado = $con ->real_query($sql);
	$resultado= $con->use_result();
?>
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Lista de Situaçoes</h1>
      </div>
      <div class="row espaco">
      	<div class="pull-right">
      		<a href="administrativo.php?link=18">
      			<button type="button" class="btn btn-sm btn-success">Cadastrar
     			</button>
     		</a>
      	</div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
				 <th>Ações</th>
              </tr>
            </thead>
            <tbody>
<?php
	while ($row = $resultado->fetch_assoc()){ 
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["nome"]."</td>";
	?>
	<td>
	
	<a href="administrativo.php?link=19&id=<?php echo $row['id'];?>">
	<button type="button" class="btn btn-sm btn-primary">Visualizar</button>
	</a>
	
	<a href="administrativo.php?link=20&id=<?php echo $row['id'];?>">
	<button type="button" class="btn btn-sm btn-warning">Editar</button>
	</a>
	
	<a href="administrativo.php?link=21&id=<?php echo $row['id'];?>">
	<button type="button" class="btn btn-sm btn-danger">Apagar</button>
	</a>
	
	</td>
	
	<?php
		echo "</tr>";
}   

?>
            </tbody>
          </table>
        </div>
		</div>
    </div> <!-- /container -->