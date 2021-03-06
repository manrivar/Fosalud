<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Listado de Usuarios'), array('action' => 'index')); ?></li>
        <li><span class="glyphicon glyphicon-eye-open"></span> <?php echo $this->Html->link(__('Ver Datos de Usuario'), array('action' => 'view', $this->Form->value('User.id'))); ?></li>
        <?php if ($this->Session->read('Auth.User.Group.id') == 1) : ?>
            <li><span class="glyphicon glyphicon-lock"></span> <?php echo $this->Html->link(__('Cambiar Contraseña'), array('action' => 'edit', $this->Form->value('User.id'))); ?></li>
        <?php endif; ?>
    </ol>
</div>

<div class="row">

    <div class="users col-lg-8 col-xs-12 col-sm-12 col-md-8">
        <?php echo $this->Form->create('User'); ?>
        <fieldset class="form-group">
            <legend><?php echo __('Editar Usuario'); ?></legend>
            <div id="progreso" class="notice" style="display:none;"></div>
            <div id="finalizado" class="success" style="display: none;"></div>
            <div id="error" class="error" style="display: none;"></div>
            <?php
            echo $this->Form->input('id');

            echo $this->Form->input('nombre_usuario');

            echo $this->Form->input('email', array('label' => 'Correo Electronico'));

            echo $this->Form->input('username', array('label' => 'Nombre de Usuario'));

            $estados = array(1 => "Habilitado", 2 => "Deshabilitado");

            
            $acc = array(3 => 'Digitador', 4 => 'Analista');

            if($this->Session->read('Auth.User.acceso_id') == 2){
                echo $this->Form->input('acceso_id', array("label" => "Nivel de Accceso", 'disabled' => true, 'type' => 'hidden', 'options' => $acc, 'default' => $accesos[$this->request->data['User']['acceso_id']]));
            }else{
                echo $this->Form->input('acceso_id', array("label" => "Nivel de Accceso", 'options' => $accesos, 'default' => $accesos[$this->request->data['User']['acceso_id']]));
            }

            echo $this->Form->input('regions_id', array("label" => "Region", 'options' => $regions, 'default' => $regions[$this->request->data['User']['regions_id']]));

            echo $this->Form->input('estado', array("label" => "Estado", 'empty' => 'Seleccione', 'options' => $estados));
            ?>

            <div>
                <button id="enviar" onclick="" class="btn-block btn-primary">Actualizar</button>
            </div>

        </fieldset>
        <?php echo $this->Form->end(); ?>

    </div>

</div>