
<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Listado de Usuarios'), array('action' => 'index')); ?></li>
    </ol>
</div>
<div class="row">

    <div class="users col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <?php echo $this->Form->create('User'); ?> 
        <fieldset>
        
            <legend><?php echo __('Nuevo Usuario'); ?></legend>
            <?php
            echo $this->Form->input('nombre_usuario');
            echo $this->Form->input('username');
            echo $this->Form->input('email',array('default'=>'@fosalud.gob.sv'));
            echo $this->Form->input('password',array('default'=>'123456'));
            echo $this->Form->input('password2',array('default'=>'123456'));
            $acc = array(3 => 'Digitador', 4 => 'Analista');
            
            if($this->Session->read('Auth.User.acceso_id') == 2){
                echo $this->Form->input('acceso_id', array('options' => $acc));
            }else{
                echo $this->Form->input('acceso_id');
            }        

            echo $this->Form->input('regions_id', array('default'=> 6, 'label' => 'Pertenece a una Region'));
            echo $this->Form->input('group_id', array('type' => 'hidden', 'value' => 1));
            echo $this->Form->input('estado', array('type' => 'hidden', 'value' => 1));
            ?>

            <div>
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Guardar"/>
            </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<?php //echo $this->Html->script('users/add'); ?>

