<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li> <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Injections', 'action' => 'index?yir=' . $yer)); ?></li>
        <li> <span class="fa fa-upload"></span> Carga de Archivo Excel</li>

    </ol>
</div>
<div style="text-align:center;" class="col-lg-2"></div>
<div class="col-lg-12">
    <div class="col-lg-12">
        <center>
            <h3>Carga de Inyecciones</h3>
        </center>
    </div>
    <div class="col-lg-4">
        <?php echo $this->Form->create('Injxestablishment'); ?>
        <input type="hidden" id="base" name="base" value="<?php echo $this->base; ?>" />
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        Seleccione la Region y Año del Archivo a Subir
                    </td>

                    <td>
                    <td>
                        <?php
                        echo $this->Form->input('regions', array('id' => 'regions'));
                        ?>
                    </td>
                    <td>
                        <?php $option = array('2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030'); ?>
                        <?php echo $this->Form->input('year', array(
                            'id' => 'year',
                            'label' => 'Año',
                            'options' => $option,
                            'empty' => 'Selecciona un año',
                            'selected' => 'Selecciona un año'
                        )); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        <input type="hidden" id="base" value="<?php echo $this->base; ?>" />
        <input type="hidden" id="corr_id" value="" />
        <input type="hidden" id="max_upload" name="max_upload" value="<?php echo (int) (ini_get('upload_max_filesize')) * 1048576; ?>" />
        <input type="hidden" id="max_upload_M" name="max_upload_M" value="<?php echo ini_get('upload_max_filesize'); ?>B" />
        <span class="input required fileUpload btn btn-success">
            <label for="arch"><span class='glyphicon glyphicon-paperclip'></span> Archivo Adjunto</label>
            <input type="file" name="arch" id="arch" class="upload" required="required" />
            <input type="button" style="display: none;" disabled id="subir" name="subir" value="Cargar Archivos" />
        </span>
        <div id='detalleSeleccion' class=" alert alert-info alert-block"></div>
    </div>






    <div class="col-lg-4">
        <button type="button" id="subirExcel" name="subirExcel"><span class="glyphicon glyphicon-cloud-upload"></span> Cargar Datos ... </button>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="progreso" class='alert alert-info' style='display:none;'></div>
        <div id="error" class='alert alert-danger' style='display:none;'></div>
        <div id='prueba'></div>
        <?php //tabla matriz de productos 
        ?>
        <input type="text" readonly id="progresoG" style="width: 60%; text-align: center; font-size:20px; font-style: italic; font-weight: bold; display: none;" />
        <div id="progreso2" class='alert alert-info' style='display:none;'>

        </div>

    </div>
    </form>
</div>

<div class="col-lg-4"></div>

<div id='datos' class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
</div>
<?php
echo $this->Html->script('common/common');
echo $this->Html->script('Injxestablishment/cargar');
?>