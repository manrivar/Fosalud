<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span>
            <?php
            echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer));
            ?>
        </li>
    </ol>
</div>

<div class="hcxestablishments form">
    <?php echo $this->Form->create('Injxestablishment'); ?>
    <fieldset>
        <legend><?php echo __('Edit Injxestablishment'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('establishments_id', array('label' => 'Establecimiento'));
        echo $this->Form->input('sibases_id', array('label' => 'Sibasi'));
        echo $this->Form->input('regions_id', array('label' => 'Region'));
        echo $this->Form->input('january', array('label' => 'Enero'));
        echo $this->Form->input('february', array('label' => 'Febrero'));
        echo $this->Form->input('march', array('label' => 'Marzo'));
        echo $this->Form->input('april', array('label' => 'Abril'));
        echo $this->Form->input('may', array('label' => 'Mayo'));
        echo $this->Form->input('june', array('label' => 'Junio'));
        echo $this->Form->input('july', array('label' => 'Julio'));
        echo $this->Form->input('august', array('label' => 'Agosto'));
        echo $this->Form->input('september', array('label' => 'Septiembre'));
        echo $this->Form->input('october', array('label' => 'Octubre'));
        echo $this->Form->input('november', array('label' => 'Noviembre'));
        echo $this->Form->input('december', array('label' => 'Diciembre'));
        echo $this->Form->input('year', array('label' => 'Año'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Injxestablishment.id')), array('confirm' => __('Estas seguro que quieres eliminar este registro?', $this->Form->value('Injxestablishment.id')))); ?></li>
        <li><?php echo $this->Html->link(__('Lista de Establecimientos'), array('action' => 'index')); ?></li>

    </ul>
</div>