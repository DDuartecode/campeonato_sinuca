<?php if(!class_exists('Rain\Tpl')){exit;}?><section>
	<div class="container-fluid mt-5">
	    <form action="/team/create"  method="POST" name="formulario" > 

	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="name_team">Nome do Time</label>
					<input class="form-control col-5" type="text" name="name_team" id="name_team">   
	            </div>
	        </div>

	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="player1">1° Jogador</label>
					<input class="form-control col-5" type="text" name="player1" id="player1">
	            </div>
	        </div> 

	        <div class="form-group">
	            <div class="   col-md-6 offset-md-3">
	                <label for="player2">2° Jogador</label>
					<input class="form-control col-5" type="text" name="player2" id="player2">
	            </div>
	        </div>      

	        <div class="col-md-6 offset-md-3">
	        	<br>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
	    </form> 
	</div>
</section>
