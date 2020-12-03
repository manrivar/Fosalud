
<!-- Codigo de vista de AtenCurativas-> index.ctp el cual genera una tabla mediante las convenciones de cakephp -->

<div class="col-lg-12 col-xs-12 col-sm-12">
<h1>Atencion Curativas</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Region</th>
        <th>trimestre 1</th>
        <th>trimestre 2</th>
        <th>trimestre 3</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($atencurativas as $atencurativa): ?>
    <tr>
        <td><?php echo $atencurativa['AtenCurativa']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($atencurativa['AtenCurativa']['regiones_id'],
array('controller' => 'AtenCurativas', 'action' => 'view', $atencurativa['AtenCurativa']['id'])); ?>
        </td>
        <td><?php echo $atencurativa['AtenCurativa']['trimestre1']; ?></td>
        <td><?php echo $atencurativa['AtenCurativa']['trimestre2']; ?></td>
        <td><?php echo $atencurativa['AtenCurativa']['trimestre3']; ?></td>
        <td><?php echo $atencurativa['AtenCurativa']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>


<!-- ***********************************************************************************************************************************************************************
****************************************************************************************************************************************************************************
Codigo de view antiguo -->

<h1><?php echo $atencurativas['AtenCurativa']['regiones_id']?></h1>

<p><small>Trimestre 1: <?php echo $atencurativas['AtenCurativa']['trimestre1'];?></small></p>
<p><small>Trimestre 2: <?php echo $atencurativas['AtenCurativa']['trimestre2'];?></small></p>
<p><small>Trimestre 3: <?php echo $atencurativas['AtenCurativa']['trimestre3'];?></small></p>
<p>Creado: <?php echo $atencurativas['AtenCurativa']['created'];?></small></p>



<?php
// Configuración necesaria para acceder a la data base.
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "estadistica";
    
// Generando la conexión con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

//Selecionar  os itens da página
    
$uno=$atencurativas['AtenCurativa']['regiones_id'];

$sql = "SELECT regiones.nombre FROM atencurativas INNER JOIN regiones ON atencurativas.regiones_id = regiones.id where atencurativas.regiones_id=$uno";
$resultado = mysqli_query($conectar, $sql);
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th class="text-center">Region</th>
     
    </tr>
  </thead>
  <tbody>
    <?php $n=0; while($row = mysqli_fetch_array($resultado)){ $n++;?>
    <tr>
     
      <td class="text-center"><?php echo $row["nombre"]; ?></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>

<!-- ***********************************************************************************************************************************************************************
*************************************************************************************************************************************************************************-->
<?php

    echo "<table class=\"table table-sm\">";
    echo "<thead>
            <tr>
                <th class ='text-center'>*</th>
                <th class ='text-center'>Concepto</th>
                <th class ='text-center'>Saldo Inicial</th>
                <th class ='text-center'>*mes*</th>
            </tr>
            </thead>
            <tbody>";

    $acum = 0;  //variable para acumular el valor
    $grupo = -1;  //grupo inicial por defecto
    $total = 0;
    foreach($datos['datosXactivos'] as $clave => $datoActivo):
        $total += $datoActivo->saldo_final;
        if ($grupo === -1):
             $grupo = $datoActivo->grupo;  //asigno el primer grupo
             $acum += $datoActivo->saldo_final;  //acumulo saldo
        else if ($grupo === $datoActivo->grupo):
             $acum += $datoActivo->saldo_final;  //acumulo saldo cuando el grupo sea igual
        else:
             echo "<tr>";
                 echo "<td colspan='3'>Total</td>";  //Cuando se cambia de grupo se imprime el total
                 echo "<td>".$acum."</td>";
             echo "</tr>";
             $acum = $datoActivo->saldo_final; //Se reinicia el valor en el del item actual
             $grupo = $datoActivo->grupo; //Se guarda el nuevo grupo
        endif;
        echo "<tr>";
        echo "<td>".$datoActivo->grupo."</td>"; //Este es el grupo que identifica.
        echo "<td>".$datoActivo->subcuenta."</td>";
        echo "<td class ='text-right'>".number_format($datoActivo->saldo_inicial,2)."</td>";
        echo "<td class = 'text-right'>".number_format($datoActivo->saldo_final,2)."</td>";
        echo "</tr>";
    endforeach;
    echo "<tr>";
        echo "<td colspan='3'>Total</td>";  //Al salir del ciclo se imprime el ultimo total
        echo "<td>".$acum."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td colspan='3'>Total todos los grupos</td>";
        echo "<td>".$total."</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
