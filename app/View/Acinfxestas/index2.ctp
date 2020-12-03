<!-- index viejo, ain filtro por año y pendiente de borrar del proyecto -->
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
            echo $this->Html->Link('Regresar', array('controller' => 'Ateninfcurativas', 'action' => 'index')); 
          ?>
        </li>
    </ol>
</div>

<h2>Detalle de <?php echo $regione_id; ?> </h2>

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
  <!-- Se trae la variale a la cual se le hizo set en AcinfxestasController.php -->
  <?php foreach($acinfxestas as $acinfxesta): ?>
    <tr>
      <td><?php echo $acinfxesta['Sibasi']['nombre'] ?></td>
      <td><?php echo $this->Html->link($acinfxesta['Establecimiento']['nombre_esta'], array('controller' => 'Acinfxestas', 'action' => 'edit', $acinfxesta['Acinfxesta']['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['enero'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['febrero'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['marzo'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['abril'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['mayo'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['junio'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['julio'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['agosto'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['septiembre'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['octubre'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['noviembre'] ?></td>
      <td><?php echo $acinfxesta['Acinfxesta']['diciembre'] ?></td>
      <?php 
        $total1 = ($acinfxesta['Acinfxesta']['enero'] + $acinfxesta['Acinfxesta']['febrero'] + $acinfxesta['Acinfxesta']['marzo'] + $acinfxesta['Acinfxesta']['abril'] + $acinfxesta['Acinfxesta']['mayo'] + $acinfxesta['Acinfxesta']['junio'] + $acinfxesta['Acinfxesta']['julio'] + $acinfxesta['Acinfxesta']['agosto'] + $acinfxesta['Acinfxesta']['septiembre'] + $acinfxesta['Acinfxesta']['octubre'] + $acinfxesta['Acinfxesta']['noviembre'] + $acinfxesta['Acinfxesta']['diciembre']);
      ?>
      <td><?php echo $total1; ?></td>
    </tr>
  <?php endforeach; ?>
  <!-- En el foot de la tabla se realiza las consultas sql que realizan la suma de los establecimientos mostrados-->
  <tfoot>
    <tr>
      <td colspan = "2"> Total </td>
      <?php
        $result = mysqli_query($conectar, 'SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acinfxestas WHERE acinfxestas.regiones_id ='.$regioneid); 
        $row = mysqli_fetch_assoc($result); 

        $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4'] + $row['total5'] + $row['total6'] + $row['total7'] + $row['total8'] + $row['total9'] + $row['total10'] + $row['total11'] + $row['total12']);

        // consulta sql para obtener el dato del trimestre uno en la region actual
        $res = mysqli_query($conectar, 'SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acinfxestas WHERE acinfxestas.regiones_id ='.$regioneid); 
        $rew = mysqli_fetch_assoc($res);

        // update a la base de datos para el trimestre
        $trim1 = ($rew['total'] + $rew['total2'] + $rew['total3']);
        $trim2 = ($rew['total4'] + $rew['total5'] + $rew['total6']);
        $trim3 = ($rew['total7'] + $rew['total8'] + $rew['total9']);
        $trim4 = ($rew['total10'] + $rew['total11'] + $rew['total12']);
        mysqli_query($conectar, 'UPDATE ateninfcurativas SET trimestre1 ='.$trim1.', trimestre2 ='.$trim2.', trimestre3 ='.$trim3.', trimestre4 ='.$trim4.' WHERE ateninfcurativas.regiones_id ='.$regioneid);
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

