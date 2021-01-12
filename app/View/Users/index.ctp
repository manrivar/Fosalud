
<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-plus-sign"></span> <a href="<?= $this->base; ?>/users/add">Nuevo Usuario</a>
        </li>
    </ol>
</div>



<?php
if (isset($q) and $q != "") {
    $q = $q;
} else {
    $q = "";
}
?>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12"><h3><?php echo __('Listado de Usuarios'); ?></h3></div>
    <div class="col-lg-2 col-sm-12 col-xs-12 col-md-2"></div>
    <div class="col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <form id="formulario" accept-charset="utf-8" method="post" id="buscarIndexForm" action="<?= $this->base; ?>/users/">
            <div class="input-group">

                <input type="hidden" value="POST" name="_method">
                <input type="text" class="form-control" id="q" name="q" autocomplete="off" value="<?= $q; ?>" placeholder="Ingresar texto...">
                <span class="input-group-btn">
                    <button class="btn btn-default" onclick="window.formulario.submit();" type="button"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                </span>

            </div>
        </form>
    </div>
</div>

<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">&nbsp;</div>

<div class="col-lg-2 col-sm-12 col-xs-12 col-md-2"></div>
<div class="col-lg-9 col-sm-12 col-xs-12 col-md-8">
<div class = "table-responsive">
    <table class="table ">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('nombre_usuario'); ?></th>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th><?php echo $this->Paginator->sort('email'); ?></th>
                <th><?php echo $this->Paginator->sort('password2','Password Generado'); ?></th>
                <th><?php echo $this->Paginator->sort('acceso_id'); ?></th>
                <th class="actions"><?php echo __('Opciones'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['nombre_usuario']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['password2']); ?>&nbsp;</td>
                    <td><?php echo $user['Acceso']['descripcion']; ?></td>

                    <td class="actions btn-group">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Opciones
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?></li>
                                <li><?php
                                    if ($this->Session->read('Auth.User.acceso_id') <=2) :
                                        echo $this->Html->link(__('Editar'), array('action' => 'edit_gral', $user['User']['id']));
                                    ?>
                                </li>
                                <li><?php
                                        echo $this->Html->link(__('Contraseña'), array('action' => 'edit', $user['User']['id']));
                                    endif;
                                    ?>
                                </li>
                            </ul>
                        </div> 
                    </td>
                </tr> 
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}')
        )); 
        ?>	</p>
    <div class="paging paginator">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>