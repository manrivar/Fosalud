<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
    </ol>
</div>
<div class="row">


    <div class="users col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <?php echo $this->Form->create('curativa'); ?> 
        <fieldset>
            <legend><?php echo __('Nueva atencion curativa'); ?></legend>
            <?php
            echo $this->Form->input('regiones_id');
            echo $this->Form->input('trimestre1');
            echo $this->Form->input('trimestre2');
            echo $this->Form->input('trimestre3');

            ?>

            <div>
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Guardar"/>
            </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<?php //echo $this->Html->script('users/add'); ?>

