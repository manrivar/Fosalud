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
      <span class="fa fa-undo"></span> 
      <?php 
        echo $this->Html->Link('Regresar', array('controller' => 'Atencurativas', 'action' => 'index')); 
      ?>
    </li>
  </ol>
</div>

<h2>Detalle de  <?php echo $regione_id; ?><?php 
  if(ISSET($_POST['search'])){
    echo " - ".$_POST['date1'];
  }  
  ?> </h2>
<br />
<!-- flitro de busqueda por año  --><!-- El atributo "selected" debe ser cambiado para el año en el que se encuentre -->
<form class="form-inline" method="POST" action="<?=$this->base?>/Acxestas/index/<?php echo $regioneid;?>">
  <select class="form-control" placeholder="End"  name="date1">
    <option value="">Seleccione año</option>
    <option value="2019">2019</option>
    <option value="2020" selected>2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
  </select>
  <button class="btn btn-primary" name="search">
    <span class="glyphicon glyphicon-search"></span>
  </button> 
  
</form>
<div class = "table-responsive">
<!-- inicicio de la tabla -->
<table class = "table table-bordered table-condensed">
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
  <?php

  // If por el cual si se recive la fecha mostrara la tabla del año seleccionado
  if(ISSET($_POST['search'])){
      $date1 = $_POST['date1'];
      $query=mysqli_query($conectar, "SELECT * FROM `acxestas` inner join sibasis on sibasis.id = acxestas.sibasis_id inner join establecimientos on establecimientos.id = acxestas.establecimientos_id WHERE `año` = '$date1' and acxestas.regiones_id = '$regioneid'" ) or die(mysqli_error());
      $row=mysqli_num_rows($query);

      if($row > 0){
        while($fetch = mysqli_fetch_assoc($query)){
          ?>
          <tr> 
      <td><?php echo $fetch['nombre'] ?></td>
      <td><?php echo $this->Html->link($fetch['nombre_esta'], array('controller' => 'Acxestas', 'action' => 'edit', $fetch['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $fetch['enero'] ?></td>
      <td><?php echo $fetch['febrero'] ?></td>
      <td><?php echo $fetch['marzo'] ?></td>
      <td><?php echo $fetch['abril'] ?></td>
      <td><?php echo $fetch['mayo'] ?></td>
      <td><?php echo $fetch['junio'] ?></td>
      <td><?php echo $fetch['julio'] ?></td>
      <td><?php echo $fetch['agosto'] ?></td>
      <td><?php echo $fetch['septiembre'] ?></td>
      <td><?php echo $fetch['octubre'] ?></td>
      <td><?php echo $fetch['noviembre'] ?></td>
      <td><?php echo $fetch['diciembre'] ?></td>
      <?php 
        $total1 = ($fetch['enero'] + $fetch['febrero'] + $fetch['marzo'] + $fetch['abril'] + $fetch['mayo'] + $fetch['junio'] + $fetch['julio'] + $fetch['agosto'] + $fetch['septiembre'] + $fetch['octubre'] + $fetch['noviembre'] + $fetch['diciembre']);
      ?>
      <td><?php echo $total1; ?></td>
          </tr> 
        <?php
        }
        ?>
    <tfoot>
      <tr>
      <td colspan = "2"> Total </td>
        <?php
        if(ISSET($_POST['search'])){
          $date1 = $_POST['date1'];
          $result = mysqli_query($conectar, "SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acxestas WHERE acxestas.año = '$date1' and acxestas.regiones_id =".$regioneid ); 
          $row = mysqli_fetch_assoc($result); 
          $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
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
        <?php 
        }  
        ?>
      </tr>
    </tfoot>
    <?php   
    }
    else{
      echo'
      <tr>
      <td colspan = "15"><center>Registros no Existen</center></td>
      </tr>';
    }

  }
  else{
    $query=mysqli_query($conectar, "SELECT * FROM `acxestas` inner join sibasis on sibasis.id = acxestas.sibasis_id inner join establecimientos on establecimientos.id = acxestas.establecimientos_id WHERE `año` = 2020 and acxestas.regiones_id = '$regioneid'") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
      ?>
      <tr>
      <td><?php echo $fetch['nombre'] ?></td>
      <td><?php echo $this->Html->link($fetch['nombre_esta'], array('controller' => 'Acxestas', 'action' => 'edit', $fetch['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $fetch['enero'] ?></td>
      <td><?php echo $fetch['febrero'] ?></td>
      <td><?php echo $fetch['marzo'] ?></td>
      <td><?php echo $fetch['abril'] ?></td>
      <td><?php echo $fetch['mayo'] ?></td>
      <td><?php echo $fetch['junio'] ?></td>
      <td><?php echo $fetch['julio'] ?></td>
      <td><?php echo $fetch['agosto'] ?></td>
      <td><?php echo $fetch['septiembre'] ?></td>
      <td><?php echo $fetch['octubre'] ?></td>
      <td><?php echo $fetch['noviembre'] ?></td>
      <td><?php echo $fetch['diciembre'] ?></td>
      <?php 
        $total1 = ($fetch['enero'] + $fetch['febrero'] + $fetch['marzo'] + $fetch['abril'] + $fetch['mayo'] + $fetch['junio'] + $fetch['julio'] + $fetch['agosto'] + $fetch['septiembre'] + $fetch['octubre'] + $fetch['noviembre'] + $fetch['diciembre']);
      ?>
      <td><?php echo $total1; ?></td>
      </tr> 
    <?php
    }
    ?>
  <tfoot>
  <tr>
  <td colspan = "2"> Total </td>
    <?php
      $result = mysqli_query($conectar, "SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acxestas WHERE acxestas.año = 2020 and acxestas.regiones_id =".$regioneid); 
      $row = mysqli_fetch_assoc($result); 
      $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
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
  <?php 
   // consulta sql para obtener el dato del trimestre uno en la region metropolitana
   $res = mysqli_query($conectar, 'SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM acxestas WHERE acxestas.regiones_id ='.$regioneid); 
   $rew = mysqli_fetch_assoc($res);
  // update a la base de datos para el trimestre
  $trim1 = ($rew['total'] + $rew['total2'] + $rew['total3']);
  $trim2 = ($rew['total4'] + $rew['total5'] + $rew['total6']);
  $trim3 = ($fetch['total7'] + $rew['total8'] + $rew['total9']);
  $trim4 = ($rew['total10'] + $rew['total11'] + $rew['total12']);
  mysqli_query($conectar, 'UPDATE atencurativas SET trimestre1 ='.$trim1.', trimestre2 ='.$trim2.', trimestre3 ='.$trim3.', trimestre4 ='.$trim4.' WHERE atencurativas.regiones_id ='.$regioneid);

  } 
  ?>
  </tr>
  </tfoot>
</table>
</div> 