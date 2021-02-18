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
    <div class="vaccinesxestablishments form">
        <?php echo $this->Form->create('Vaccinesxestablishment'); ?>
        <fieldset>
            <div>
                <center>
                    <legend><?php echo __('Editar Vacunas'); ?></legend>
                </center>
            </div>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Niños</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('niñ_january', array('label' => 'Enero'));
                    echo $this->Form->input('niñ_february', array('label' => 'Febrero'));
                    echo $this->Form->input('niñ_march', array('label' => 'Marzo'));
                    echo $this->Form->input('niñ_april', array('label' => 'Abril'));
                    echo $this->Form->input('niñ_may', array('label' => 'Mayo'));
                    echo $this->Form->input('niñ_june', array('label' => 'Junio'));
                    echo $this->Form->input('niñ_july', array('label' => 'Julio'));
                    echo $this->Form->input('niñ_august', array('label' => 'Agosto'));
                    echo $this->Form->input('niñ_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('niñ_october', array('label' => 'Octubre'));
                    echo $this->Form->input('niñ_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('niñ_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Adultos</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('adu_january', array('label' => 'Enero'));
                    echo $this->Form->input('adu_february', array('label' => 'Febrero'));
                    echo $this->Form->input('adu_march', array('label' => 'Marzo'));
                    echo $this->Form->input('adu_april', array('label' => 'Abril'));
                    echo $this->Form->input('adu_may', array('label' => 'Mayo'));
                    echo $this->Form->input('adu_june', array('label' => 'Junio'));
                    echo $this->Form->input('adu_july', array('label' => 'Julio'));
                    echo $this->Form->input('adu_august', array('label' => 'Agosto'));
                    echo $this->Form->input('adu_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('adu_october', array('label' => 'Octubre'));
                    echo $this->Form->input('adu_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('adu_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Influenza</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('inf_january', array('label' => 'Enero'));
                    echo $this->Form->input('inf_february', array('label' => 'Febrero'));
                    echo $this->Form->input('inf_march', array('label' => 'Marzo'));
                    echo $this->Form->input('inf_april', array('label' => 'Abril'));
                    echo $this->Form->input('inf_may', array('label' => 'Mayo'));
                    echo $this->Form->input('inf_june', array('label' => 'Junio'));
                    echo $this->Form->input('inf_july', array('label' => 'Julio'));
                    echo $this->Form->input('inf_august', array('label' => 'Agosto'));
                    echo $this->Form->input('inf_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('inf_october', array('label' => 'Octubre'));
                    echo $this->Form->input('inf_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('inf_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Antirrabica</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('ant_january', array('label' => 'Enero'));
                    echo $this->Form->input('ant_february', array('label' => 'Febrero'));
                    echo $this->Form->input('ant_march', array('label' => 'Marzo'));
                    echo $this->Form->input('ant_april', array('label' => 'Abril'));
                    echo $this->Form->input('ant_may', array('label' => 'Mayo'));
                    echo $this->Form->input('ant_june', array('label' => 'Junio'));
                    echo $this->Form->input('ant_july', array('label' => 'Julio'));
                    echo $this->Form->input('ant_august', array('label' => 'Agosto'));
                    echo $this->Form->input('ant_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('ant_october', array('label' => 'Octubre'));
                    echo $this->Form->input('ant_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('ant_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Covid-19</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('c19_january', array('label' => 'Enero'));
                    echo $this->Form->input('c19_february', array('label' => 'Febrero'));
                    echo $this->Form->input('c19_march', array('label' => 'Marzo'));
                    echo $this->Form->input('c19_april', array('label' => 'Abril'));
                    echo $this->Form->input('c19_may', array('label' => 'Mayo'));
                    echo $this->Form->input('c19_june', array('label' => 'Junio'));
                    echo $this->Form->input('c19_july', array('label' => 'Julio'));
                    echo $this->Form->input('c19_august', array('label' => 'Agosto'));
                    echo $this->Form->input('c19_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('c19_october', array('label' => 'Octubre'));
                    echo $this->Form->input('c19_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('c19_december', array('label' => 'Diciembre'));
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