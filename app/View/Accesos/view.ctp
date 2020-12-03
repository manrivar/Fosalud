<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Listar Niveles de Acceso'), array('action' => 'index')); ?> </li>
        <li><span class="glyphicon glyphicon-pencil"></span> <?php if ($nivel == 0) echo $this->Html->link(__('Editar Acceso'), array('action' => 'edit', $acceso['Acceso']['id'])); ?> </li>
    </ol>
</div>

<div class="row">
<div class="accesos col-lg-8 col-sm-12 col-xs-12 col-md-8">
    <h2><?php echo __('Nivel de Acceso'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($acceso['Acceso']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Descripcion'); ?></dt>
        <dd>
            <?php echo h($acceso['Acceso']['descripcion']); ?>
            &nbsp;
        </dd>
    </dl>
</div>

</div>