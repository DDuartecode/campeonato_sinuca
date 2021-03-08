<?php if(!class_exists('Rain\Tpl')){exit;}?><div class=" row mt-3 p-3  div-read"> 
    <h1 class="label-input-read">Times da Tabela: <?php echo htmlspecialchars( $table["name_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
</div>
<section class="mt-5">
     <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title"><small>Times fora da Tabela</small></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome do Time</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($teamsNotRelated) && ( is_array($teamsNotRelated) || $teamsNotRelated instanceof Traversable ) && sizeof($teamsNotRelated) ) foreach( $teamsNotRelated as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                            <td><?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <a href="/team-table/<?php echo htmlspecialchars( $table["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-right"></i> Adicionar</a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-body">
                <div class="box-header with-border">
                <h3 class="box-title"><small>Times dentro da Tabela</small></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome do Time</th>
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($teamsRelated) && ( is_array($teamsRelated) || $teamsRelated instanceof Traversable ) && sizeof($teamsRelated) ) foreach( $teamsRelated as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                            <td><?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["name_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <a href="/team-table/<?php echo htmlspecialchars( $table["id_table"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["id_team"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-left"></i> Remover</a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

