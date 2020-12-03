<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index')); ?> </li>
        <?php if ($user['User']['id'] != 1) : ?>
            <li><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit_gral', $user['User']['id'])); ?> </li>
        <?php elseif ($this->Session->read('Auth.User.id') == 1): ?>
            <li><span class="glyphicon glyphicon-pencil"></span> <?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit_gral', $user['User']['id'])); ?> </li>
        <?php endif; ?>
    </ol>
</div>

<div class="row">
    <div class="users col-lg-9 col-sm-12 col-xs-12 col-md-10">
        <h2><?php echo __('Datos de Usuario'); ?></h2>
        <dl>
            <dt><?php echo __('Nombre Usuario'); ?></dt>
            <dd>
                <?php echo h($user['User']['nombre_usuario']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Username'); ?></dt>
            <dd>
                <?php echo h($user['User']['username']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Email'); ?></dt>
            <dd>
                <?php echo h($user['User']['email']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Nivel de Acceso'); ?></dt>
            <dd>
                <?php echo $user['Acceso']['descripcion']; ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Group Id'); ?></dt>
            <dd>
                <?php echo h($user['User']['group_id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Estado'); ?></dt>
            <dd>
                <?php echo h($user['User']['estado']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>  
</div>


