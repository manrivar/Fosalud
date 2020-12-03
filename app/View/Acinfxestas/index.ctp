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

<h2>Detalle de  <?php echo $regione_id; ?><?php 
  if(ISSET($_POST['search'])){
    echo " - ".$_POST['date1'];
  }  
  ?> </h2>
<br />
<!-- flitro de busqueda por año  --><!-- El atributo "selected" debe ser cambiado para el año en el que se encuentre -->
<form class="form-inline" method="POST" action="<?=$this->base?>/Acinfxestas/index/<?php echo $regioneid;?>">
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
<!-- inicicio de la tabla -->
<div class = "table-responsive">
<!-- <div id="div1"> -->
<table class = "table table-bordered table-condensed ">
  <thead class = "alert-info">
    <tr>
      <th class="text-center" rowspan ="2">SIBASI</th>
      <th class="text-center" rowspan ="2">ESTABLECIMIENTO</th>
      <th class="text-center" colspan ="3">ENERO</th>
      <th class="text-center" colspan ="3">FEBRERO</th>
      <th class="text-center" colspan ="3">MARZO</th>
      <th class="text-center" colspan ="3">ABRIL</th>
      <th class="text-center" colspan ="3">MAYO</th>
      <th class="text-center" colspan ="3">JUNIO</th>
      <th class="text-center" colspan ="3">JULIO</th>
      <th class="text-center" colspan ="3">AGOSTO</th>
      <th class="text-center" colspan ="3">SEPTIEMBRE</th>
      <th class="text-center" colspan ="3">OCTUBRE</th>
      <th class="text-center" colspan ="3">NOVIEMBRE</th>
      <th class="text-center" colspan ="3">DICIEMBRE</th>
      <th class="text-center" rowspan ="2">TOTAL ANUAL</th>
    </tr>
    <tr>
      
      
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      <th class = "text-center" >Inscripcion</th>
      <th class = "text-center" >Control</th>
      <th class = "text-center" >Total</th>
      
    </tr>
  </thead>
  <?php

  // If por el cual si se recive la fecha mostrara la tabla del año seleccionado
  if(ISSET($_POST['search'])){
      $date1 = $_POST['date1'];
      $query =mysqli_query($conectar, "SELECT * FROM `acinfxestas` inner join sibasis on sibasis.id = acinfxestas.sibasis_id inner join establecimientos on establecimientos.id = acinfxestas.establecimientos_id  WHERE `año` = '$date1' and acinfxestas.regiones_id = '$regioneid'" ) or die(mysqli_error());
      $row = mysqli_num_rows($query);
      

      if($row > 0){
        while($fetch = mysqli_fetch_assoc($query)){
          ?>
          <tr> 
          <td><?php echo $fetch['nombre'] ?></td>
      <td><?php echo $this->Html->link($fetch['nombre_esta'], array('controller' => 'Acinfxestas', 'action' => 'edit', $fetch['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $fetch['ins_enero'] ?></td>
      <td><?php echo $fetch['con_enero'] ?></td>
      <td><?php echo ($fetch['ins_enero'] + $fetch['con_enero']); ?></td>

      <td><?php echo $fetch['ins_febrero'] ?></td>
      <td><?php echo $fetch['con_febrero'] ?></td>
      <td><?php echo ($fetch['ins_febrero'] + $fetch['con_febrero']); ?></td>

      <td><?php echo $fetch['ins_marzo'] ?></td>
      <td><?php echo $fetch['con_marzo'] ?></td>
      <td><?php echo ($fetch['ins_marzo'] + $fetch['con_marzo']); ?></td>

      <td><?php echo $fetch['ins_abril'] ?></td>
      <td><?php echo $fetch['con_abril'] ?></td>
      <td><?php echo ($fetch['ins_abril'] + $fetch['con_abril']); ?></td>

      <td><?php echo $fetch['ins_mayo'] ?></td>
      <td><?php echo $fetch['con_mayo'] ?></td>
      <td><?php echo ($fetch['ins_mayo'] + $fetch['con_mayo']); ?></td>

      <td><?php echo $fetch['ins_junio'] ?></td>
      <td><?php echo $fetch['con_junio'] ?></td>
      <td><?php echo ($fetch['ins_junio'] + $fetch['con_junio']); ?></td>

      <td><?php echo $fetch['ins_julio'] ?></td>
      <td><?php echo $fetch['con_julio'] ?></td>
      <td><?php echo ($fetch['ins_julio'] + $fetch['con_julio']); ?></td>

      <td><?php echo $fetch['ins_agosto'] ?></td>
      <td><?php echo $fetch['con_agosto'] ?></td>
      <td><?php echo ($fetch['ins_agosto'] + $fetch['con_agosto']); ?></td>

      <td><?php echo $fetch['ins_septiembre'] ?></td>
      <td><?php echo $fetch['con_septiembre'] ?></td>
      <td><?php echo ($fetch['ins_septiembre'] + $fetch['con_septiembre']); ?></td>

      <td><?php echo $fetch['ins_octubre'] ?></td>
      <td><?php echo $fetch['con_octubre'] ?></td>
      <td><?php echo ($fetch['ins_octubre'] + $fetch['con_octubre']); ?></td>

      <td><?php echo $fetch['ins_noviembre'] ?></td>
      <td><?php echo $fetch['con_noviembre'] ?></td>
      <td><?php echo ($fetch['ins_noviembre'] + $fetch['con_noviembre']); ?></td>

      <td><?php echo $fetch['ins_diciembre'] ?></td>
      <td><?php echo $fetch['con_diciembre'] ?></td>
      <td><?php echo ($fetch['ins_diciembre'] + $fetch['con_diciembre']); ?></td>
      <?php 
        $total1 = ($fetch['ins_enero'] + $fetch['con_enero'] + $fetch['ins_febrero'] + $fetch['con_febrero'] + $fetch['ins_marzo'] + $fetch['con_marzo'] + $fetch['ins_abril'] + $fetch['con_abril'] + $fetch['ins_mayo'] + $fetch['con_mayo'] + $fetch['ins_junio'] + $fetch['con_junio'] + $fetch['ins_julio'] + $fetch['con_julio'] + $fetch['ins_agosto'] + $fetch['con_agosto'] + $fetch['ins_septiembre'] + $fetch['con_septiembre'] + $fetch['ins_octubre'] + $fetch['con_octubre'] + $fetch['ins_noviembre'] + $fetch['con_noviembre'] + $fetch['ins_diciembre'] + $fetch['con_diciembre']);
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
          $result = mysqli_query($conectar, "SELECT SUM(ins_enero) AS total, SUM(ins_febrero) AS total2, SUM(ins_marzo) AS total3, SUM(ins_abril) AS total4, SUM(ins_mayo) AS total5, 
          SUM(ins_junio) AS total6, SUM(ins_julio) AS total7, SUM(ins_agosto) AS total8, SUM(ins_septiembre) AS total9, SUM(ins_octubre) AS total10, SUM(ins_noviembre) AS total11, SUM(ins_diciembre) AS total12, 
          SUM(con_enero) AS total13, SUM(con_febrero) AS total14, SUM(con_marzo) AS total15, SUM(con_abril) AS total16, SUM(con_mayo) AS total17, SUM(con_junio) AS total18, SUM(con_julio) AS total19, SUM(con_agosto) AS total20, 
          SUM(con_septiembre) AS total21, SUM(con_octubre) AS total22, SUM(con_noviembre) AS total23, SUM(con_diciembre) AS total24 FROM acinfxestas 
          WHERE acinfxestas.año = '$date1' and acinfxestas.regiones_id =".$regioneid ); 
          $row = mysqli_fetch_assoc($result); 
          $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
        ?>
        <th><?php echo $row['total']; ?></th>
        <th><?php echo $row['total13']; ?></th>
        <td></td>
        <th><?php echo $row['total2']; ?></th>
        <th><?php echo $row['total14']; ?></th>
        <td></td>
        <th><?php echo $row['total3']; ?></th>
        <th><?php echo $row['total15']; ?></th>
        <td></td>
        <th><?php echo $row['total4']; ?></th>
        <th><?php echo $row['total16']; ?></th>
        <td></td>
        <th><?php echo $row['total5']; ?></th>
        <th><?php echo $row['total17']; ?></th>
        <td></td>
        <th><?php echo $row['total6']; ?></th>
        <th><?php echo $row['total18']; ?></th>
        <td></td>
        <th><?php echo $row['total7']; ?></th>
        <th><?php echo $row['total19']; ?></th>
        <td></td>
        <th><?php echo $row['total8']; ?></th>
        <th><?php echo $row['total20']; ?></th>
        <td></td>
        <th><?php echo $row['total9']; ?></th>
        <th><?php echo $row['total21']; ?></th>
        <td></td>
        <th><?php echo $row['total10']; ?></th>
        <th><?php echo $row['total22']; ?></th>
        <td></td>
        <th><?php echo $row['total11']; ?></th>
        <th><?php echo $row['total23']; ?></th>
        <td></td>
        <th><?php echo $row['total12']; ?></th>
        <th><?php echo $row['total24']; ?></th>
        <td></td>
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
      <td colspan = "27"><center>Registros no Existen</center></td>
      </tr>';
    }

  }
  else{
    $query=mysqli_query($conectar, "SELECT * FROM `acinfxestas` inner join sibasis on sibasis.id = acinfxestas.sibasis_id inner join establecimientos on establecimientos.id = acinfxestas.establecimientos_id WHERE `año` = 2020 and acinfxestas.regiones_id = '$regioneid'") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
      ?>
      <tr>
      <td><?php echo $fetch['nombre'] ?></td>
      <td><?php echo $this->Html->link($fetch['nombre_esta'], array('controller' => 'Acinfxestas', 'action' => 'edit', $fetch['establecimientos_id'], $regiones_id['Regione']['id'])); ?></td>
      <td><?php echo $fetch['ins_enero'] ?></td>
      <td><?php echo $fetch['con_enero'] ?></td>
      <td><?php echo ($fetch['ins_enero'] + $fetch['con_enero']); ?></td>

      <td><?php echo $fetch['ins_febrero'] ?></td>
      <td><?php echo $fetch['con_febrero'] ?></td>
      <td><?php echo ($fetch['ins_febrero'] + $fetch['con_febrero']); ?></td>

      <td><?php echo $fetch['ins_marzo'] ?></td>
      <td><?php echo $fetch['con_marzo'] ?></td>
      <td><?php echo ($fetch['ins_marzo'] + $fetch['con_marzo']); ?></td>

      <td><?php echo $fetch['ins_abril'] ?></td>
      <td><?php echo $fetch['con_abril'] ?></td>
      <td><?php echo ($fetch['ins_abril'] + $fetch['con_abril']); ?></td>

      <td><?php echo $fetch['ins_mayo'] ?></td>
      <td><?php echo $fetch['con_mayo'] ?></td>
      <td><?php echo ($fetch['ins_mayo'] + $fetch['con_mayo']); ?></td>

      <td><?php echo $fetch['ins_junio'] ?></td>
      <td><?php echo $fetch['con_junio'] ?></td>
      <td><?php echo ($fetch['ins_junio'] + $fetch['con_junio']); ?></td>

      <td><?php echo $fetch['ins_julio'] ?></td>
      <td><?php echo $fetch['con_julio'] ?></td>
      <td><?php echo ($fetch['ins_julio'] + $fetch['con_julio']); ?></td>

      <td><?php echo $fetch['ins_agosto'] ?></td>
      <td><?php echo $fetch['con_agosto'] ?></td>
      <td><?php echo ($fetch['ins_agosto'] + $fetch['con_agosto']); ?></td>

      <td><?php echo $fetch['ins_septiembre'] ?></td>
      <td><?php echo $fetch['con_septiembre'] ?></td>
      <td><?php echo ($fetch['ins_septiembre'] + $fetch['con_septiembre']); ?></td>

      <td><?php echo $fetch['ins_octubre'] ?></td>
      <td><?php echo $fetch['con_octubre'] ?></td>
      <td><?php echo ($fetch['ins_octubre'] + $fetch['con_octubre']); ?></td>

      <td><?php echo $fetch['ins_noviembre'] ?></td>
      <td><?php echo $fetch['con_noviembre'] ?></td>
      <td><?php echo ($fetch['ins_noviembre'] + $fetch['con_noviembre']); ?></td>

      <td><?php echo $fetch['ins_diciembre'] ?></td>
      <td><?php echo $fetch['con_diciembre'] ?></td>
      <td><?php echo ($fetch['ins_diciembre'] + $fetch['con_diciembre']); ?></td>

      <?php 
        $total1 = ($fetch['ins_enero'] + $fetch['con_enero'] + $fetch['ins_febrero'] + $fetch['con_febrero'] + $fetch['ins_marzo'] + $fetch['con_marzo'] + $fetch['ins_abril'] + $fetch['con_abril'] + $fetch['ins_mayo'] + $fetch['con_mayo'] + $fetch['ins_junio'] + $fetch['con_junio'] + $fetch['ins_julio'] + $fetch['con_julio'] + $fetch['ins_agosto'] + $fetch['con_agosto'] + $fetch['ins_septiembre'] + $fetch['con_septiembre'] + $fetch['ins_octubre'] + $fetch['con_octubre'] + $fetch['ins_noviembre'] + $fetch['con_noviembre'] + $fetch['ins_diciembre'] + $fetch['con_diciembre']);
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
      $result = mysqli_query($conectar, "SELECT SUM(ins_enero) AS total, SUM(ins_febrero) AS total2, SUM(ins_marzo) AS total3, SUM(ins_abril) AS total4, SUM(ins_mayo) AS total5, 
      SUM(ins_junio) AS total6, SUM(ins_julio) AS total7, SUM(ins_agosto) AS total8, SUM(ins_septiembre) AS total9, SUM(ins_octubre) AS total10, SUM(ins_noviembre) AS total11, SUM(ins_diciembre) AS total12, 
      SUM(con_enero) AS total13, SUM(con_febrero) AS total14, SUM(con_marzo) AS total15, SUM(con_abril) AS total16, SUM(con_mayo) AS total17, SUM(con_junio) AS total18, SUM(con_julio) AS total19, SUM(con_agosto) AS total20, 
      SUM(con_septiembre) AS total21, SUM(con_octubre) AS total22, SUM(con_noviembre) AS total23, SUM(con_diciembre) AS total24 FROM acinfxestas 
      WHERE acinfxestas.año = 2020 and acinfxestas.regiones_id =".$regioneid ); 
      $row = mysqli_fetch_assoc($result); 
      $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
    ?>
    <th><?php echo $row['total']; ?></th>
    <th><?php echo $row['total13']; ?></th>
    <td><?php echo ($row['total'] + $row['total13']); ?></td>

    <th><?php echo $row['total2']; ?></th>
    <th><?php echo $row['total14']; ?></th>
    <td></td>
    <th><?php echo $row['total3']; ?></th>
    <th><?php echo $row['total15']; ?></th>
    <td></td>
    <th><?php echo $row['total4']; ?></th>
    <th><?php echo $row['total16']; ?></th>
    <td></td>
    <th><?php echo $row['total5']; ?></th>
    <th><?php echo $row['total17']; ?></th>
    <td></td>
    <th><?php echo $row['total6']; ?></th>
    <th><?php echo $row['total18']; ?></th>
    <td></td>
    <th><?php echo $row['total7']; ?></th>
    <th><?php echo $row['total19']; ?></th>
    <td></td>
    <th><?php echo $row['total8']; ?></th>
    <th><?php echo $row['total20']; ?></th>
    <td></td>
    <th><?php echo $row['total9']; ?></th>
    <th><?php echo $row['total21']; ?></th>
    <td></td>
    <th><?php echo $row['total10']; ?></th>
    <th><?php echo $row['total22']; ?></th>
    <td></td>
    <th><?php echo $row['total11']; ?></th>
    <th><?php echo $row['total23']; ?></th>
    <td></td>
    <th><?php echo $row['total12']; ?></th>
    <th><?php echo $row['total24']; ?></th>
    <td></td>
    <th><?php echo $suma; ?></th>
  <?php 
  } 
  ?>
  </tr>
  </tfoot>
</table>
</div>
