<!-- Filtrado por rango de fechas  -->
<?php
// ***************Controlador***************
// metodo para filtrar por fechas
$start_date = $this->request->query('start_date');
$end_date = $this->request->query('end_date');

$conditions = [];
if ($start_date && $end_date) {
    $conditions[] = [
        'DATE(modelo.created) >=' => $start_date,
        'DATE(modelo.created) <=' => $end_date
    ];
    $this->paginate = [
        'conditions' => [
            'DATE(modelo.created) >=' => $start_date,
            'DATE(modelo.created) <=' => $end_date
        ]
    ];
} else {
    //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
    $this->paginate = [
        'conditions' => [
            'DATE(modelo.created) >=' => '2021-01-01',
            'DATE(modelo.created) <=' => '2021-12-31'
        ]
    ];
}
?>
<!-- ***************Vista*************** -->
<?= $this->Form->create('controlador', ['type' => 'get']); ?>
<?= $this->Form->control('start_date', ['class' => 'datepicker', 'value' => $this->request->query('start_date')]); ?>
<?= $this->Form->control('end_date', ['class' => 'datepicker', 'value' => $this->request->query('end_date')]); ?>
<button class="btn btn-primary" name="search">
    <span class="glyphicon glyphicon-search"></span>
</button>
<?= $this->Form->end() ?>

<!-- El script ira hasta abajo de todo el codigo de la vista -->
<script>
    $(function() {
        $(".datepicker").datepicker({
            'dateFormat': 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });
</script>

<!-- ***************Default.ctp*************** -->
<!-- Estas lineas se colocan en view/layouts/default.ctp-->
<!-- link y script de jqueryui.com para funcionamiento del calendario datepicker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>