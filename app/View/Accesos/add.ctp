<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->link(__('Listar Niveles de Acceso'), array('action' => 'index')); ?></li>
    </ol>
</div>


<div class="row">
    <div class="accesos col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <?php echo $this->Form->create('Acceso'); ?>
        <fieldset>
            <legend><?php echo __('Nuevo Nivel de Acceso'); ?></legend>
            <?php
            echo $this->Form->input('descripcion');
            ?>
            <div>
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Guardar"/>
            </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>

</div>

