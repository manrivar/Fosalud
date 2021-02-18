<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="fa fa-undo"></span>
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
                    <center><?php echo __('Editar Rehidratacion Oral'); ?></center>
                </legend>
            </div>
            <div class="padre">
                <div class="hijo">
                    <?php
                    echo $this->Form->input('id');
                    // echo $this->Form->input('establishments_id');
                    // echo $this->Form->input('sibases_id');
                    // echo $this->Form->input('regions_id');
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