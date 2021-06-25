<?php if(!class_exists('Rain\Tpl')){exit;}?>
	<div class="container mt-5 text-center">
	    <form action="/team/update"  method="POST" name="formulario"> 
		    <div class="form-group col-md-4">
	    		<input hidden type="text" name="id_team" id="id_team">
	          	<div class="form-row">
		            <label for="name_team">Nome do Time</label>
					<input class="form-control" type="text" name="name_team" id="name_team" value="<?php echo htmlspecialchars( $team["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">   
		        </div>
	            <div class="form-row">
		            <label for="player1">1° Jogador</label>
					<input class="form-control" type="text" name="player1" id="player1" value="<?php echo htmlspecialchars( $team["player1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
	        	</div> 

		        <div class="form-row">
		            <label for="player2">2° Jogador</label>
					<input class="form-control " type="text" name="player2" id="player2" value="<?php echo htmlspecialchars( $team["player2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		        </div>      

		        <div class="col-md-6 mt-3">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
		    </div> 
		</form>
	</div>

