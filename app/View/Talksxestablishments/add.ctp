<div class="hcxestablishments form">
    <?php echo $this->Form->create('Talksxestablishment'); ?>
    <fieldset>
        <legend><?php echo __('Add Talksxestablishment'); ?></legend>
        <div class="padre">
            <div class="hijo">
                <label>
                    <h4>
                        <center>Medicos</center>
                    </h4>
                </label>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('establishments_id');
                echo $this->Form->input('sibases_id');
                echo $this->Form->input('regions_id');
                echo $this->Form->input('year', array('value' => 2021));
                echo $this->Form->input('med_january', array('label' => 'Enero'));
                echo $this->Form->input('med_february', array('label' => 'Febrero'));
                echo $this->Form->input('med_march', array('label' => 'Marzo'));
                echo $this->Form->input('med_april', array('label' => 'Abril'));
                echo $this->Form->input('med_may', array('label' => 'Mayo'));
                echo $this->Form->input('med_june', array('label' => 'Junio'));
                echo $this->Form->input('med_july', array('label' => 'Julio'));
                echo $this->Form->input('med_august', array('label' => 'Agosto'));
                echo $this->Form->input('med_september', array('label' => 'Septiembre'));
                echo $this->Form->input('med_october', array('label' => 'Octubre'));
                echo $this->Form->input('med_november', array('label' => 'Noviembre'));
                echo $this->Form->input('med_december', array('label' => 'Diciembre'));
                ?>
            </div>
            <div class="hijo">
                <label>
                    <h4>
                        <center>Enfermeria</center>
                    </h4>
                </label>
                <?php
                // los campos de control infatil deben ir aqui 
                echo $this->Form->input('id');
                echo $this->Form->input('establishments_id');
                echo $this->Form->input('sibases_id');
                echo $this->Form->input('regions_id');
                echo $this->Form->input('year', array('value' => 2021));
                echo $this->Form->input('nur_january', array('label' => 'Enero'));
                echo $this->Form->input('nur_february', array('label' => 'Febrero'));
                echo $this->Form->input('nur_march', array('label' => 'Marzo'));
                echo $this->Form->input('nur_april', array('label' => 'Abril'));
                echo $this->Form->input('nur_may', array('label' => 'Mayo'));
                echo $this->Form->input('nur_june', array('label' => 'Junio'));
                echo $this->Form->input('nur_july', array('label' => 'Julio'));
                echo $this->Form->input('nur_august', array('label' => 'Agosto'));
                echo $this->Form->input('nur_september', array('label' => 'Septiembre'));
                echo $this->Form->input('nur_october', array('label' => 'Octubre'));
                echo $this->Form->input('nur_november', array('label' => 'Noviembre'));
                echo $this->Form->input('nur_december', array('label' => 'Diciembre'));
                ?>
            </div>
            <div class="hijo">
                <label>
                    <h4>
                        <center>Odontologos</center>
                    </h4>
                </label>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('establishments_id');
                echo $this->Form->input('sibases_id');
                echo $this->Form->input('regions_id');
                echo $this->Form->input('year', array('value' => 2021));
                echo $this->Form->input('den_january', array('label' => 'Enero'));
                echo $this->Form->input('den_february', array('label' => 'Febrero'));
                echo $this->Form->input('den_march', array('label' => 'Marzo'));
                echo $this->Form->input('den_april', array('label' => 'Abril'));
                echo $this->Form->input('den_may', array('label' => 'Mayo'));
                echo $this->Form->input('den_june', array('label' => 'Junio'));
                echo $this->Form->input('den_july', array('label' => 'Julio'));
                echo $this->Form->input('den_august', array('label' => 'Agosto'));
                echo $this->Form->input('den_september', array('label' => 'Septiembre'));
                echo $this->Form->input('den_october', array('label' => 'Octubre'));
                echo $this->Form->input('den_november', array('label' => 'Noviembre'));
                echo $this->Form->input('den_december', array('label' => 'Diciembre'));
                ?>
            </div>
            <div class="hijo">
                <label>
                    <h4>
                        <center>Otros</center>
                    </h4>
                </label>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('establishments_id');
                echo $this->Form->input('sibases_id');
                echo $this->Form->input('regions_id');
                echo $this->Form->input('year', array('value' => 2021));
                echo $this->Form->input('ot_january', array('label' => 'Enero'));
                echo $this->Form->input('ot_february', array('label' => 'Febrero'));
                echo $this->Form->input('ot_march', array('label' => 'Marzo'));
                echo $this->Form->input('ot_april', array('label' => 'Abril'));
                echo $this->Form->input('ot_may', array('label' => 'Mayo'));
                echo $this->Form->input('ot_june', array('label' => 'Junio'));
                echo $this->Form->input('ot_july', array('label' => 'Julio'));
                echo $this->Form->input('ot_august', array('label' => 'Agosto'));
                echo $this->Form->input('ot_september', array('label' => 'Septiembre'));
                echo $this->Form->input('ot_october', array('label' => 'Octubre'));
                echo $this->Form->input('ot_november', array('label' => 'Noviembre'));
                echo $this->Form->input('ot_december', array('label' => 'Diciembre'));
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Hcxestablishments'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Establishments'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sibases'), array('controller' => 'sibases', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sibases'), array('controller' => 'sibases', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Regions'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
    </ul>
</div>