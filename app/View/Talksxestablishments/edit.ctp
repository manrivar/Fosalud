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
    <div class="talksxestablishments form">
        <?php echo $this->Form->create('Talksxestablishment'); ?>
        <fieldset>
            <div>
                <legend><center><?php echo __('Editar Charlas'); ?></center></legend>
            </div>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Medicos</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
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
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
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
                            <center>Otros</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
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
            <div>
                <button id="enviar" onclick="" class="btn-block btn-primary">Guardar</button>
            </div>
        </fieldset>
        <?php
        echo $this->Form->end();
        ?>
    </div>
</div>