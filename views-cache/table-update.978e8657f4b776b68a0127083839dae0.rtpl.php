<?php if(!class_exists('Rain\Tpl')){exit;}?>	<section>
		<div class="container-fluid mt-5">
		    <form action="/table/update"  method="POST" name="formulario" >	<input hidden type="txt" name="id_table" id="id_table" value="<?php echo htmlspecialchars( $table["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">	    	
		        <div class="form-group">
		            <div class="   col-md-6 offset-md-3">
		                <label for="name_table">Nome da Tabela</label>
						<input class="form-control col-5" type="text" name="name_table" id="name_table" value="<?php echo htmlspecialchars( $table["name_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">   
		            </div>
		        </div>

		        <div class="   col-md-6 offset-md-3">
	                <label for="awardDescription_table">Descrição do Premio</label>
					<input class="form-control col-5" type="text" name="awardDescription_table" id="awardDescription_table" value="<?php echo htmlspecialchars( $table["awardDescription_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		        </div> 

		        <div class="   col-md-6 offset-md-3">
	                <label for="maximum_score">Pontunação Máxima</label>
					<input class="form-control col-5" type="text" name="maximum_score" id="maximum_score" value="<?php echo htmlspecialchars( $table["maximum_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		        </div>      

		        <div class="   col-md-6 offset-md-3">
		            <label for="rule_score">Regras de Pontuação</label>
					<input class="form-control col-5" type="text" name="rule_score" id="rule_score" value="<?php echo htmlspecialchars( $table["rule_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		        </div>
		        <div class="   col-md-6 offset-md-3">
				        <label for="maximum_team_number">Máximo de Times</label>
						<input class="form-control col-5" type="text" name="maximum_team_number" id="maximum_team_number" value="<?php echo htmlspecialchars( $table["maximum_team_number"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				</div>
				<div class="   col-md-6 offset-md-3">
			        <label for="score_by_victory">Pontuação por Vitória</label>
					<input class="form-control col-5" type="text" name="score_by_victory" id="score_by_victory" value="<?php echo htmlspecialchars( $table["score_by_victory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				</div>
				<div class="col-md-6 offset-md-3">
					<br>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
		    </form> 
		</div>
	</section>
