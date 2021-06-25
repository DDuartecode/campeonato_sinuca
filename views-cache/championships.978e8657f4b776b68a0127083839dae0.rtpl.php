<?php if(!class_exists('Rain\Tpl')){exit;}?>  <div class="mt-5">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Campeonatos</h1>
    </div>

    <div class="container">
      
        <div class="row">
        	<?php $counter1=-1;  if( isset($championships) && ( is_array($championships) || $championships instanceof Traversable ) && sizeof($championships) ) foreach( $championships as $key1 => $value1 ){ $counter1++; ?>
          <div class="col-sm-4">
            <a type="button" href="/championship/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/details" class="btn btn-lg btn-block btn-outline-primary p-5">
              <h5><?php echo htmlspecialchars( $value1["name_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
            </a>
          </div>
         	<?php } ?>
        </div>
    </div>
  </div>
  <br>
  <br>

