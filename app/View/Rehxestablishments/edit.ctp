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
    <div class="rehxestablishments form">
        <?php echo $this->Form->create('Rehxestablishment'); ?>
        <fieldset>
            <div>
                <legend>
                    <center><?php echo __('Editar Rehabilitacion Oral y Endovenosa'); ?></center>
                </legend>
            </div>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Rehidratacion Oral</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('ora_january', array('label' => 'Enero'));
                    echo $this->Form->input('ora_february', array('label' => 'Febrero'));
                    echo $this->Form->input('ora_march', array('label' => 'Marzo'));
                    echo $this->Form->input('ora_april', array('label' => 'Abril'));
                    echo $this->Form->input('ora_may', array('label' => 'Mayo'));
                    echo $this->Form->input('ora_june', array('label' => 'Junio'));
                    echo $this->Form->input('ora_july', array('label' => 'Julio'));
                    echo $this->Form->input('ora_august', array('label' => 'Agosto'));
                    echo $this->Form->input('ora_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('ora_october', array('label' => 'Octubre'));
                    echo $this->Form->input('ora_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('ora_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Rehidratacion Endovenosa</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('end_january', array('label' => 'Enero'));
                    echo $this->Form->input('end_february', array('label' => 'Febrero'));
                    echo $this->Form->input('end_march', array('label' => 'Marzo'));
                    echo $this->Form->input('end_april', array('label' => 'Abril'));
                    echo $this->Form->input('end_may', array('label' => 'Mayo'));
                    echo $this->Form->input('end_june', array('label' => 'Junio'));
                    echo $this->Form->input('end_july', array('label' => 'Julio'));
                    echo $this->Form->input('end_august', array('label' => 'Agosto'));
                    echo $this->Form->input('end_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('end_october', array('label' => 'Octubre'));
                    echo $this->Form->input('end_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('end_december', array('label' => 'Diciembre'));
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