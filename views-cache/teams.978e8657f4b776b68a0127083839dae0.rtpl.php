<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="container-fluid text-center" id="maincontent">
		<br>
		<h4>
			<i class="fab fa-teamspeak"></i> Times
		</h4>


		<div class="row-sm">
			<div class="col-sm">
				<br>
				<div class="row">
					<div class="col-sm-2">
						<a class="btn btn-primary" href="/team/create">Cadastrar Time</a>
					</div>
				</div>
				<br>
				<br>
				<table class="table table-dark">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Código do Time</th>
					      <th scope="col">Nome</th>
					      <th scope="col">1° Jogador</th>
					      <th scope="col">2° Jogador</th>
					      <th scope="col">Editar</th>
					      <th scope="col">Excluir</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $counter1=-1;  if( isset($teams) && ( is_array($teams) || $teams instanceof Traversable ) && sizeof($teams) ) foreach( $teams as $key1 => $value1 ){ $counter1++; ?>
					    <tr>
					      <th scope="row">1</th>
					      <td><?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["player1"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["player2"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><a href="/team/update/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fas fa-edit"></i></a></td>
					      <td><a href="/team/delete/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fa fa-ban del" aria-hidden="true"></i></a></td>
					    </tr>
					    <?php } ?>
					 </tbody>
				</table>
			</div>
		</div>
	</div>

