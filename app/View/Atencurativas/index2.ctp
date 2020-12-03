<?php
  // Configuración necesaria para acceder a la data base.
  $hostname = "localhost";
  $usuariodb = "root";
  $passworddb = "";
  $dbname = "estadistica2";
  	
  // Generando la conexión con el servidor
  $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
?>

<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
          <span class="glyphicon glyphicon-list"></span> 
          <?php 
           echo $this->Html->Link('Regresar', array('controller' => 'Users', 'action' => 'atenmenu')); 
          ?>
        </li>
    </ol>
</div>

<h2>Atencion Curativas</h2>
<table class="table">
  <thead class="alert-info">
    <tr>
      <th class="text-center">Region</th>
      <th class="text-center">Trimestre 1</th>
      <th class="text-center">Trimestre 2</th>
      <th class="text-center">Trimestre 3</th>
      <th class="text-center">Trimestre 4</th>
      <th class="text-center">Total</th>
    </tr>
  </thead>

  <?php foreach($atencurativas as $atencurativa): ?>
    <tr>
      <td><?php echo $this->Html->link($atencurativa['Regione']['nombre'], array('controller' => 'Acxestas', 'action' => 'index', $atencurativa['Regione']['id'])); ?></td>
      <td><?php echo $atencurativa['Atencurativa']['trimestre1'] ?></td>
      <td><?php echo $atencurativa['Atencurativa']['trimestre2'] ?></td>
      <td><?php echo $atencurativa['Atencurativa']['trimestre3'] ?></td>
      <td><?php echo $atencurativa['Atencurativa']['trimestre4'] ?></td>
      <?php 
        $total1 = ($atencurativa['Atencurativa']["trimestre1"] + $atencurativa['Atencurativa']["trimestre2"] + $atencurativa['Atencurativa']["trimestre3"] + $atencurativa['Atencurativa']["trimestre4"]);
      ?>
      <td class="text-center"><?php echo $total1; ?></td>
    </tr>
  <?php endforeach; ?>

  <tfoot>
    <tr>
      <td> Total </td>
      <?php
        $result = mysqli_query($conectar, 'SELECT SUM(trimestre1) AS total, SUM(trimestre2) AS total2, SUM(trimestre3) AS total3, SUM(trimestre4) AS total4 FROM atencurativas'); 
        $row = mysqli_fetch_assoc($result); 
        $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
      ?>
      <th><?php echo $row['total']; ?></th>
      <th><?php echo $row['total2']; ?></th>
      <th><?php echo $row['total3']; ?></th>
      <th><?php echo $row['total4']; ?></th>
      <th><?php echo $suma; ?></th>
    </tr>
  </tfoot>
</table>

