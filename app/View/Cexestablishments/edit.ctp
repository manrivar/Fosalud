<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span>
            <?php
            echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer));
            ?>
        </li>
    </ol>
</div>

<div class="row">
    <div class="recipesxestablishments form">
        <?php echo $this->Form->create('Cexestablishment'); ?>
        <fieldset>
            <legend><?php echo __('Edit Cexestablishment'); ?></legend>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Citologia</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('establishments_id');
                    echo $this->Form->input('sibases_id');
                    echo $this->Form->input('regions_id');
                    echo $this->Form->input('cit_january', array('label' => 'Enero'));
                    echo $this->Form->input('cit_february', array('label' => 'Febrero'));
                    echo $this->Form->input('cit_march', array('label' => 'Marzo'));
                    echo $this->Form->input('cit_april', array('label' => 'Abril'));
                    echo $this->Form->input('cit_may', array('label' => 'Mayo'));
                    echo $this->Form->input('cit_june', array('label' => 'Junio'));
                    echo $this->Form->input('cit_july', array('label' => 'Julio'));
                    echo $this->Form->input('cit_august', array('label' => 'Agosto'));
                    echo $this->Form->input('cit_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('cit_october', array('label' => 'Octubre'));
                    echo $this->Form->input('cit_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('cit_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Examenes de Mama</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    echo $this->Form->input('establishments_id');
                    echo $this->Form->input('sibases_id');
                    echo $this->Form->input('regions_id');
                    echo $this->Form->input('mam_january', array('label' => 'Enero'));
                    echo $this->Form->input('mam_february', array('label' => 'Febrero'));
                    echo $this->Form->input('mam_march', array('label' => 'Marzo'));
                    echo $this->Form->input('mam_april', array('label' => 'Abril'));
                    echo $this->Form->input('mam_may', array('label' => 'Mayo'));
                    echo $this->Form->input('mam_june', array('label' => 'Junio'));
                    echo $this->Form->input('mam_july', array('label' => 'Julio'));
                    echo $this->Form->input('mam_august', array('label' => 'Agosto'));
                    echo $this->Form->input('mam_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('mam_october', array('label' => 'Octubre'));
                    echo $this->Form->input('mam_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('mam_december', array('label' => 'Diciembre'));
                    ?>
                </div>
            </div>
            <div>
                <button id="enviar" onclick="" class="btn-block btn-primary">Guardar</button>
            </div>
        </fieldset>
        <?php
        echo $this->Form->end();
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Cexestablishment.id')), array('confirm' => __('Estas seguro que quieres eliminar este registro?', $this->Form->value('Cexestablishment.id')))); ?></li>
        <li><?php echo $this->Html->link(__('Lista de Establecimientos'), array('action' => 'index')); ?></li>

    </ul>
</div>