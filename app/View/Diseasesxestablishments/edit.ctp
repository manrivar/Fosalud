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
    <div class="diseasesxestablishments form">
        <?php echo $this->Form->create('Diseasesxestablishment'); ?>
        <fieldset>
            <center><legend><?php echo __('Editar Enfermedades Cronicas'); ?></legend></center>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Hipertension</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('establishments_id');
                    echo $this->Form->input('sibases_id');
                    echo $this->Form->input('regions_id');
                    echo $this->Form->input('hip_january', array('label' => 'Enero'));
                    echo $this->Form->input('hip_february', array('label' => 'Febrero'));
                    echo $this->Form->input('hip_march', array('label' => 'Marzo'));
                    echo $this->Form->input('hip_april', array('label' => 'Abril'));
                    echo $this->Form->input('hip_may', array('label' => 'Mayo'));
                    echo $this->Form->input('hip_june', array('label' => 'Junio'));
                    echo $this->Form->input('hip_july', array('label' => 'Julio'));
                    echo $this->Form->input('hip_august', array('label' => 'Agosto'));
                    echo $this->Form->input('hip_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('hip_october', array('label' => 'Octubre'));
                    echo $this->Form->input('hip_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('hip_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Diabetes Mellitus</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    echo $this->Form->input('establishments_id');
                    echo $this->Form->input('sibases_id');
                    echo $this->Form->input('regions_id');
                    echo $this->Form->input('dia_january', array('label' => 'Enero'));
                    echo $this->Form->input('dia_february', array('label' => 'Febrero'));
                    echo $this->Form->input('dia_march', array('label' => 'Marzo'));
                    echo $this->Form->input('dia_april', array('label' => 'Abril'));
                    echo $this->Form->input('dia_may', array('label' => 'Mayo'));
                    echo $this->Form->input('dia_june', array('label' => 'Junio'));
                    echo $this->Form->input('dia_july', array('label' => 'Julio'));
                    echo $this->Form->input('dia_august', array('label' => 'Agosto'));
                    echo $this->Form->input('dia_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('dia_october', array('label' => 'Octubre'));
                    echo $this->Form->input('dia_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('dia_december', array('label' => 'Diciembre'));
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