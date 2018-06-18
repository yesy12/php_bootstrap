  <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Cadastrar usuario</h1>
      </div>
      
      
     <div class="row">
     	<div class="col-md-12">     	
     		<form class="form-horizontal" method="post" action="processa/proc_cad_usu.php">
     		
     		<div class="form-group">
     			<label for="nome" class="col-sm-2 control-label">Nome</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="nome" placeholder="Digite seu Nome" name="nome" autofocus="autofocus" >
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="email" class="col-sm-2 control-label">E-mail</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="email" name="email" placeholder="Digite seu E-mail">
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="usuario" class="col-sm-2 control-label">Usuario</label>
     			<div class="col-sm-10">
     				<input type="text" class="form-control" id="usuario" placeholder="Digite seu Usuario" name="usuario">
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="senha" class="col-sm-2 control-label">Senha</label>
     			<div class="col-sm-10">
     				<input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
     			</div>
     		</div>
     		
     		<div class="form-group">
     			<label for="nivelacesso" class="col-sm-2 control-label">Nivel de Acesso</label>
     			<div class="col-sm-10">
     				<select class="form-control" name="nivelacesso">
						<option>Selecione</option>
						<option value="1">Administrativo</option>
						<option value="2">Usuario Comum</option>
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