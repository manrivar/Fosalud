<?php 
  $hostname = "localhost";
  $usuariodb = "root";
  $passworddb = "";
  $dbname = "estadistica2";
  	
  // Generando la conexión con el servidor
  $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

  //Id de la region actual
  $regione_id = $regiones_id['Regione']['nombre'];
  $regioneid = $regiones_id['Regione']['id'];
  
?>

<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="glyphicon glyphicon-list"></span> 
      <?php 
        echo $this->Html->Link('Regresar', array('controller' => 'Atenmatcurativas', 'action' => 'index')); 
      ?>
    </li>
  </ol>
</div>

<h2>Detalle de  <?php echo $regione_id; ?> </h2>

<table class = "table">
  <thead class = "alert-info">
    <tr>
      <th class="text-center">SIBASI</th>
      <th class="text-center">ESTABLECIMIENTO</th>
      <th class="text-center">ENERO</th>
      <th class="text-center">FEBRERO</th>
      <th class="text-center">MARZO</th>
      <th class="text-center">ABRIL</th>
      <th class="text-center">MAYO</th>
      <th class="text-center">JUNIO</th>
      <th class="text-center">JULIO</th>
      <th class="text-center">AGOSTO</th>
      <th class="text-center">SEPTIEMBRE</th>
      <th class="text-center">OCTUBRE</th>
      <th class="text-center">NOVIEMBRE</th>
      <th class="text-center">DICIEMBRE</th>
      <th class="text-center">TOTAL ANUAL</th>
    </tr>
  </thead>

  <?php foreach($acmatxestas as $acmatxesta): ?>
    <tr>
      <td><?php echo $acmatxesta['Sibasi']['nombre'] ?></td>
      <td><?php echo $this->Html->link($acmatxesta['Establecimiento']['nombre_esta'], array('controller' => 'Acmatxestas', 'action' => 'edit', $acmatxesta['Acmatxesta']['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['enero'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['febrero'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['marzo'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['abril'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['mayo'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['junio'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['julio'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['agosto'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['septiembre'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['octubre'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['noviembre'] ?></td>
      <td><?php echo $acmatxesta['Acmatxesta']['diciembre'] ?></td>
      <?php 
        $total1 = ($acmatxesta['Acmatxesta']['enero'] + $acmatxesta['Acmatxesta']['febrero'] + $acmatxesta['Acmatxesta']['marzo'] + $acmatxesta['Acmatxesta']['abril'] + $acmatxesta['Acmatxesta']['mayo'] + $acmatxesta['Acmatxesta']['junio'] + $acmatxesta['Acmatxesta']['julio'] + $acmatxesta['Acmatxesta']['agosto'] + $acmatxesta['Acmatxesta']['septiembre'] + $acmatxesta['Acmatxesta']['octubre'] + $acmatxesta['Acmatxesta']['noviembre'] + $acmatxesta['Acmatxesta']['diciembre']);
      ?>
      <td><?php echo $total1; ?></td>
    </tr>
  <?php endforeach; ?>

  <tfoot>
    <tr>
      <td colspan = "2"> Total </td>
      <?php
        $result = mysqli_query($conectar, 'SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acmatxestas WHERE acmatxestas.regiones_id ='.$regioneid); 
        $row = mysqli_fetch_assoc($result); 

        $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4'] + $row['total5'] + $row['total6'] + $row['total7'] + $row['total8'] + $row['total9'] + $row['total10'] + $row['total11'] + $row['total12']);
        // consulta sql para obtener el dato del trimestre uno en la region metropolitana
        $res = mysqli_query($conectar, 'SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acmatxestas WHERE acmatxestas.regiones_id ='.$regioneid); 
        $rew = mysqli_fetch_assoc($res);

        // update a la base de datos para el trimestre
        $trim1 = ($rew['total'] + $rew['total2'] + $rew['total3']);
        $trim2 = ($rew['total4'] + $rew['total5'] + $rew['total6']);
        $trim3 = ($rew['total7'] + $rew['total8'] + $rew['total9']);
        $trim4 = ($rew['total10'] + $rew['total11'] + $rew['total12']);
        mysqli_query($conectar, 'UPDATE atenmatcurativas SET trimestre1 ='.$trim1.', trimestre2 ='.$trim2.', trimestre3 ='.$trim3.', trimestre4 ='.$trim4.' WHERE atenmatcurativas.regiones_id ='.$regioneid);
      ?>
      <th><?php echo $row['total']; ?></th>
      <th><?php echo $row['total2']; ?></th>
      <th><?php echo $row['total3']; ?></th>
      <th><?php echo $row['total4']; ?></th>
      <th><?php echo $row['total5']; ?></th>
      <th><?php echo $row['total6']; ?></th>
      <th><?php echo $row['total7']; ?></th>
      <th><?php echo $row['total8']; ?></th>
      <th><?php echo $row['total9']; ?></th>
      <th><?php echo $row['total10']; ?></th>
      <th><?php echo $row['total11']; ?></th>
      <th><?php echo $row['total12']; ?></th>
      <th><?php echo $suma; ?></th>
    </tr>
  </tfoot>
</table>
<pre>
<?php print_r($acmatxestas); ?>
</pre>