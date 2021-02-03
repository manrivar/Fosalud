<head>
    <h2 align="center">Actualizar registros mediante archivo CSV </a></h2>
</head>
<div class="padre">
    <div class="hijo">
        <?= $this->Form->create('carga', ['type' => 'post']); ?>
        <?php $option = array('2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030'); ?>
        <?php echo $this->Form->input('yir', array(
            'label' => 'Año',
            'options' => $option,
            'empty' => 'Selecciona un año',
            'selected' => 'Selecciona un año'

        ));
        echo $this->Form->input('regions', array(
            'label' => 'Region',
            'empty' => 'Selecciona una region',
            'selected' => 'Selecciona una region'
        ));
        echo $this->Form->input('product_file', array(
            'type' => 'file',
            'label' => 'Archivo (.csv)'
        ));
        ?>
        <?php $options = array('label' => 'Save', 'class' => 'btn btn-info', 'div' => false); ?>
        <?php echo $this->Form->end(__('subir', $options)); ?>
        <input type="submit" name="upload" class="btn btn-info" value="Upload">
    </div>
</div>

<?php echo $datos['carga']['product_file']; ?>