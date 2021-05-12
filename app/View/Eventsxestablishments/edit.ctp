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
        <?php echo $this->Form->create('Eventsxestablishment'); ?>
        <fieldset>
            <legend><?php echo __('Editar Eventos de Notificacion'); ?></legend>
            <div class="padre">
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Dengue</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
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
                            <center>Chikunguya</center>
                        </h4>
                    </label>
                    <?php
                    // los campos de control infatil deben ir aqui 
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('chi_january', array('label' => 'Enero'));
                    echo $this->Form->input('chi_february', array('label' => 'Febrero'));
                    echo $this->Form->input('chi_march', array('label' => 'Marzo'));
                    echo $this->Form->input('chi_april', array('label' => 'Abril'));
                    echo $this->Form->input('chi_may', array('label' => 'Mayo'));
                    echo $this->Form->input('chi_june', array('label' => 'Junio'));
                    echo $this->Form->input('chi_july', array('label' => 'Julio'));
                    echo $this->Form->input('chi_august', array('label' => 'Agosto'));
                    echo $this->Form->input('chi_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('chi_october', array('label' => 'Octubre'));
                    echo $this->Form->input('chi_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('chi_december', array('label' => 'Diciembre'));
                    ?>
                </div>
                <div class="hijo">
                    <label>
                        <h4>
                            <center>Zika</center>
                        </h4>
                    </label>
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
                    echo $this->Form->input('zik_january', array('label' => 'Enero'));
                    echo $this->Form->input('zik_february', array('label' => 'Febrero'));
                    echo $this->Form->input('zik_march', array('label' => 'Marzo'));
                    echo $this->Form->input('zik_april', array('label' => 'Abril'));
                    echo $this->Form->input('zik_may', array('label' => 'Mayo'));
                    echo $this->Form->input('zik_june', array('label' => 'Junio'));
                    echo $this->Form->input('zik_july', array('label' => 'Julio'));
                    echo $this->Form->input('zik_august', array('label' => 'Agosto'));
                    echo $this->Form->input('zik_september', array('label' => 'Septiembre'));
                    echo $this->Form->input('zik_october', array('label' => 'Octubre'));
                    echo $this->Form->input('zik_november', array('label' => 'Noviembre'));
                    echo $this->Form->input('zik_december', array('label' => 'Diciembre'));
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