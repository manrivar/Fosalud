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
    <div class="tubersxestablishments form">
        <?php echo $this->Form->create('Tubersxestablishment'); ?>
        <fieldset>
            <legend><center><?php echo __('Editar Tuberculosis'); ?></center></legend>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Identificado</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                        // echo $this->Form->input('establishments_id');
                        // echo $this->Form->input('sibases_id');
                        // echo $this->Form->input('regions_id');
                    echo $this->Form->input('ide_january', array('label' => 'Enero'));
                    echo $this->Form->input('ide_february', array('label' => 'Febrero'));
                    echo $this->Form->input('ide_march', array('label' => 'Marzo'));
                    echo $this->Form->input('ide_april', array('label' => 'Abril'));
                    echo $this->Form->input('ide_may', array('label' => 'Mayo'));
                    echo $this->Form->input('ide_june', array('label' => 'Junio'));
                    echo $this->Form->input('ide_july', array('label' => 'Julio'));
                    echo $this->Form->input('ide_august', array('label' => 'Agosto'));
                    echo $this->Form->input('ide_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('ide_october', array('label' => 'Octubre'));
                    echo $this->Form->input('ide_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('ide_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Investigado</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                        // echo $this->Form->input('establishments_id');
                        // echo $this->Form->input('sibases_id');
                        // echo $this->Form->input('regions_id');
                    echo $this->Form->input('inv_january', array('label' => 'Enero'));
                    echo $this->Form->input('inv_february', array('label' => 'Febrero'));
                    echo $this->Form->input('inv_march', array('label' => 'Marzo'));
                    echo $this->Form->input('inv_april', array('label' => 'Abril'));
                    echo $this->Form->input('inv_may', array('label' => 'Mayo'));
                    echo $this->Form->input('inv_june', array('label' => 'Junio'));
                    echo $this->Form->input('inv_july', array('label' => 'Julio'));
                    echo $this->Form->input('inv_august', array('label' => 'Agosto'));
                    echo $this->Form->input('inv_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('inv_october', array('label' => 'Octubre'));
                    echo $this->Form->input('inv_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('inv_december', array('label' => 'Diciembre'));
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
