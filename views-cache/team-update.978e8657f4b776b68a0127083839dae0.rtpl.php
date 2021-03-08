<?php if(!class_exists('Rain\Tpl')){exit;}?><section>
	<div class="container-fluid mt-5">
	    <form action="/team/update"  method="POST" name="formulario" > 
	    	<input hidden type="text" name="id_team" id="id_team">
	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="name_team">Nome do Time</label>
					<input class="form-control col-5" type="text" name="name_team" id="name_team" value="<?php echo htmlspecialchars( $team["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">   
	            </div>
	        </div>

	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="player1">1° Jogador</label>
					<input class="form-control col-5" type="text" name="player1" id="player1" value="<?php echo htmlspecialchars( $team["player1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
	            </div>
	        </div> 

	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="player2">2° Jogador</label>
					<input class="form-control col-5" type="text" name="player2" id="player2" value="<?php echo htmlspecialchars( $team["player2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
	            </div>
	        </div>      

	        <div class="col-md-6 offset-md-3">
	        	<br>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
	    </form> 
	</div>
</section>
