<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="container-fluid text-center" id="maincontent">
		<br>
		<h4>
			<i class="fas fa-adjust"></i> Tabelas
		</h4>
		<div class="row-sm">
			<div class="col-sm">
				<br>
				<div class="row">
					<div class="col-sm-2">
						<a class="btn btn-primary" href="/tables/create">Cadastrar Tabela</a>
					</div>
				</div>
				<br>
				<br>
				<table class="table table-dark">
					  <thead>
					    <tr>
					      <th scope="col">Código</th>
					      <th scope="col">Nome</th>
					      <th scope="col">Prêmio</th>
					      <th scope="col">Pontuação Máxima</th>
					      <th scope="col">Regra</th>
					      <th scope="col">Qtd. Máxima de times</th>
					      <th scope="col">Add Time</th>
					      <th scope="col">Editar Tabela</th>
					      <th scope="col">Excluir</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $counter1=-1;  if( isset($tables) && ( is_array($tables) || $tables instanceof Traversable ) && sizeof($tables) ) foreach( $tables as $key1 => $value1 ){ $counter1++; ?>
					    <tr>
					      <td><?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["name_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["awardDescription_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["maximum_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["rule_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><?php echo htmlspecialchars( $value1["maximum_team_number"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					      <td><a href="/team-table/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fas fa-plus"></i></a></td>
					      <td><a href="/table/update/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fas fa-edit"></i></a></td>
					      <td><a href="/table/delete/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fa fa-ban del" aria-hidden="true"></i></a></td>
					    </tr>
					    <?php } ?>
					 </tbody>
				</table>
			</div>
		</div>
	</div>

