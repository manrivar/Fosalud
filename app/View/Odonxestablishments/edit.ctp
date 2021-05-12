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
    <div class="odonxestablishments form">
        <?php echo $this->Form->create('Odonxestablishment'); ?>
        <fieldset>
            <div>
                <legend><center><?php echo __('Editar Odontologias'); ?></center></legend>
            </div>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Total de Pacientes</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('totpac_january', array('label' => 'Enero'));
                    echo $this->Form->input('totpac_february', array('label' => 'Febrero'));
                    echo $this->Form->input('totpac_march', array('label' => 'Marzo'));
                    echo $this->Form->input('totpac_april', array('label' => 'Abril'));
                    echo $this->Form->input('totpac_may', array('label' => 'Mayo'));
                    echo $this->Form->input('totpac_june', array('label' => 'Junio'));
                    echo $this->Form->input('totpac_july', array('label' => 'Julio'));
                    echo $this->Form->input('totpac_august', array('label' => 'Agosto'));
                    echo $this->Form->input('totpac_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('totpac_october', array('label' => 'Octubre'));
                    echo $this->Form->input('totpac_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('totpac_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Total de Procedimientos</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('totpro_january', array('label' => 'Enero'));
                    echo $this->Form->input('totpro_february', array('label' => 'Febrero'));
                    echo $this->Form->input('totpro_march', array('label' => 'Marzo'));
                    echo $this->Form->input('totpro_april', array('label' => 'Abril'));
                    echo $this->Form->input('totpro_may', array('label' => 'Mayo'));
                    echo $this->Form->input('totpro_june', array('label' => 'Junio'));
                    echo $this->Form->input('totpro_july', array('label' => 'Julio'));
                    echo $this->Form->input('totpro_august', array('label' => 'Agosto'));
                    echo $this->Form->input('totpro_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('totpro_october', array('label' => 'Octubre'));
                    echo $this->Form->input('totpro_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('totpro_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Recetas Despechadas</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('rec_january', array('label' => 'Enero'));
                    echo $this->Form->input('rec_february', array('label' => 'Febrero'));
                    echo $this->Form->input('rec_march', array('label' => 'Marzo'));
                    echo $this->Form->input('rec_april', array('label' => 'Abril'));
                    echo $this->Form->input('rec_may', array('label' => 'Mayo'));
                    echo $this->Form->input('rec_june', array('label' => 'Junio'));
                    echo $this->Form->input('rec_july', array('label' => 'Julio'));
                    echo $this->Form->input('rec_august', array('label' => 'Agosto'));
                    echo $this->Form->input('rec_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('rec_october', array('label' => 'Octubre'));
                    echo $this->Form->input('rec_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('rec_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Charlas</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('cha_january', array('label' => 'Enero'));
                    echo $this->Form->input('cha_february', array('label' => 'Febrero'));
                    echo $this->Form->input('cha_march', array('label' => 'Marzo'));
                    echo $this->Form->input('cha_april', array('label' => 'Abril'));
                    echo $this->Form->input('cha_may', array('label' => 'Mayo'));
                    echo $this->Form->input('cha_june', array('label' => 'Junio'));
                    echo $this->Form->input('cha_july', array('label' => 'Julio'));
                    echo $this->Form->input('cha_august', array('label' => 'Agosto'));
                    echo $this->Form->input('cha_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('cha_october', array('label' => 'Octubre'));
                    echo $this->Form->input('cha_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('cha_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Consejerias</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('con_january', array('label' => 'Enero'));
                    echo $this->Form->input('con_february', array('label' => 'Febrero'));
                    echo $this->Form->input('con_march', array('label' => 'Marzo'));
                    echo $this->Form->input('con_april', array('label' => 'Abril'));
                    echo $this->Form->input('con_may', array('label' => 'Mayo'));
                    echo $this->Form->input('con_june', array('label' => 'Junio'));
                    echo $this->Form->input('con_july', array('label' => 'Julio'));
                    echo $this->Form->input('con_august', array('label' => 'Agosto'));
                    echo $this->Form->input('con_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('con_october', array('label' => 'Octubre'));
                    echo $this->Form->input('con_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('con_december', array('label' => 'Diciembre'));
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