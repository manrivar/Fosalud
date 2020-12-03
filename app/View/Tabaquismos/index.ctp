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
      <span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Users', 'action' => 'atenmenu')); ?>
    </li>
  </ol>
</div>

<h2>Tabaquismos 
  <?php 
  if(ISSET($_POST['search'])){
    echo "- ".$_POST['date1'];
  }  
  ?>
</h2>
<br />
<!-- flitro de busqueda por año  --><!-- El atributo "selected" debe ser cambiado para el año en el que se encuentre -->
<form class="form-inline" method="POST" action="<?=$this->base?>/Tabaquismos/index">
  <select class="form-control" placeholder="End"  name="date1">
    <option value="">Seleccione año</option>
    <option value="2019">2019</option>
    <option value="2020" selected>2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
  </select>
  <button class= "btn btn-primary" name="search">
    <span class= "glyphicon glyphicon-search"></span>
  </button> 
  
</form>
<!-- Inicio de la tabla -->
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
  <?php
  // If por el cual si se recive la fecha mostrara la tabla del año seleccionado
  if(ISSET($_POST['search'])){
      $date1 = $_POST['date1'];
      $query=mysqli_query($conectar, "SELECT * FROM `tabaquismos` inner join regiones on regiones.id = tabaquismos.regiones_id WHERE `año` = '$date1'") or die(mysqli_error());
      $row=mysqli_num_rows($query);

      if($row > 0){
        while($fetch = mysqli_fetch_assoc($query)){
          ?>
          <tr> 
            <td><?php echo $this->Html->link($fetch['nombre'], array('controller' => 'Tabxestas', 'action' => 'index', $fetch['regiones_id'], $fetch['año'] )); ?></td>
            <td><?php echo $fetch['trimestre1'] ?></td>
            <td><?php echo $fetch['trimestre2'] ?></td>
            <td><?php echo $fetch['trimestre3'] ?></td>
            <td><?php echo $fetch['trimestre4'] ?></td>
            <?php $total1 = ($fetch["trimestre1"] + $fetch["trimestre2"] + $fetch["trimestre3"] + $fetch["trimestre4"]); ?>
            <td class = "text-center" ><?php echo $total1; ?></td>
          </tr> 
        <?php
        }
        ?>
    <tfoot>
      <tr>
        <td> Total </td>
        <?php
        if(ISSET($_POST['search'])){
          $date1 = $_POST['date1'];
          $result = mysqli_query($conectar, 'SELECT SUM(trimestre1) AS total, SUM(trimestre2) AS total2, SUM(trimestre3) AS total3, SUM(trimestre4) AS total4 FROM tabaquismos where año ='.$date1); 
          $row = mysqli_fetch_assoc($result); 
          $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
        ?>
          <th><?php echo $row['total']; ?></th>
          <th><?php echo $row['total2']; ?></th>
          <th><?php echo $row['total3']; ?></th>
          <th><?php echo $row['total4']; ?></th>
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
      <td colspan = "6"><center>Registros no Existen</center></td>
      </tr>';
    }

  }
  else{
    $query=mysqli_query($conectar, "SELECT * FROM `tabaquismos` inner join regiones on regiones.id = tabaquismos.regiones_id WHERE `año` =2020") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
      ?>
      <tr>
        <td><?php echo $this->Html->link($fetch['nombre'], array('controller' => 'Tabxestas', 'action' => 'index', $fetch['regiones_id'], 2020 )); ?></td>
        <td><?php echo $fetch['trimestre1'] ?></td>
        <td><?php echo $fetch['trimestre2'] ?></td>
        <td><?php echo $fetch['trimestre3'] ?></td>
        <td><?php echo $fetch['trimestre4'] ?></td>
        <?php $total1 = ($fetch["trimestre1"] + $fetch["trimestre2"] + $fetch["trimestre3"] + $fetch["trimestre4"]);?>
        <td class="text-center"><?php echo $total1; ?></td>
      </tr> 
    <?php
    }
    ?>
  <tfoot>
  <tr>
    <td> Total </td>
    <?php
      $result = mysqli_query($conectar, 'SELECT SUM(trimestre1) AS total, SUM(trimestre2) AS total2, SUM(trimestre3) AS total3, SUM(trimestre4) AS total4 FROM tabaquismos where año = 2020'); 
      $row = mysqli_fetch_assoc($result); 
      $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4']);
    ?>
    <th><?php echo $row['total']; ?></th>
    <th><?php echo $row['total2']; ?></th>
    <th><?php echo $row['total3']; ?></th>
    <th><?php echo $row['total4']; ?></th>
    <th><?php echo $suma; ?></th>
  <?php 
  } 
  ?>
  </tr>
  </tfoot>
</table>
