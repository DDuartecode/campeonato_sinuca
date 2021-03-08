<?php if(!class_exists('Rain\Tpl')){exit;}?>
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Campeonatos</h1>
    </div>

    <div class="container">
      <div class="card-deck mb-12 text-center">
      	<?php $counter1=-1;  if( isset($championships) && ( is_array($championships) || $championships instanceof Traversable ) && sizeof($championships) ) foreach( $championships as $key1 => $value1 ){ $counter1++; ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"></h4>
          </div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title text-muted"></h5>
            <table class="table table-hover table-dark">
			  	<thead>
				    <tr>
				      	<th scope="col">Time</th>
				     	<th scope="col">Pontuação atual</th>
				      	<th scope="col">Pts. Adic.</th>
				    </tr>
			  	</thead>
				<tbody>
					
				    <tr>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
				  
				</tbody>
			</table>
            <a type="button" class="btn btn-lg btn-block btn-outline-primary">Tabela Detalhada</a>
          </div>
        </div>
       	<?php } ?>
    </div>

