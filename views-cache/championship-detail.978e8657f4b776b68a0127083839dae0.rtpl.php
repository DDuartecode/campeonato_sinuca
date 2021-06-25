<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <div class="container mt-5 text-center">
    <input hidden type="text" id="id_table" value="<?php echo htmlspecialchars( $detail["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <input hidden type="text" id="maximum_score" value="<?php echo htmlspecialchars( $detail["maximum_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

    <h5 class="text-muted">Regras: <?php echo htmlspecialchars( $detail["rule_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome do Time</th>
          <th scope="col">Pontos do Time</th>
          <th scope="col">Pontos Add</th>
          <th scope="col">Resultado</th>
        </tr>
      </thead>
      <tbody>
        <?php $counter1=-1;  if( isset($teamsChamp) && ( is_array($teamsChamp) || $teamsChamp instanceof Traversable ) && sizeof($teamsChamp) ) foreach( $teamsChamp as $key1 => $value1 ){ $counter1++; ?>
        <tr id="<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-line">
          <th><?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
          <td><?php echo htmlspecialchars( $value1["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["score_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["maximum_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td>+<?php echo htmlspecialchars( $value1["last_add_score"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td>
            <a class="btn btn-success" href="/championship/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/victory">Vitória</a>
            <a class="btn btn-danger" href="/championship/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/defeat">Derrota</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="modal fade " id="modal-victory" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="background victory">
            <div class="modal-body victory">

            </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

</div>
<br>
<br>

