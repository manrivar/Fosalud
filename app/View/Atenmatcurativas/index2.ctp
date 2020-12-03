<!-- Antiguo index de Atematcurativas - pendiente de eliminar -->

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
        <li><span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Users', 'action' => 'atenmenu')); ?></li>
    </ol>
</div>

<h2>Atencion Materna</h2><br />
<!-- flitro de busqueda por año -->
<form class="form-inline" method="POST" action="search">
      <select class="form-control" placeholder="End"  name="date1">
      <option value="">Seleccione año</option>
      <option value="2019">2019</option>
      <option value="2020" selected>2020</option>
      <option value="2121">2021</option>
      <option value="2022">2022</option></select>
      <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> 
      <a href="<?=$this->base?>/Atenmatcurativas/index" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
    </form>
  <!--tabla de trimestre-->
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th class="text-center">Region</th>
      <th class="text-center">Trimestre 1</th>
      <th class="text-center">Trimestre 2</th>
      <th class="text-center">Trimestre 3</th>
      <th class="text-center">Trimestre 4</th>
      <th class="text-center">Total</th>
    </tr>
  </thead>
    <?php foreach($atenmatcurativas as $atenmatcurativa): ?>
    <tr>
        
        <td><?php echo $this->Html->link($atenmatcurativa['Regione']['nombre'], array('controller' => 'Acmatxestas', 'action' => 'index', $atenmatcurativa['Atenmatcurativa']['año'])); ?></td>
        <td><?php echo $atenmatcurativa['Atenmatcurativa']['trimestre1'] ?></td>
        <td><?php echo $atenmatcurativa['Atenmatcurativa']['trimestre2'] ?></td>
        <td><?php echo $atenmatcurativa['Atenmatcurativa']['trimestre3'] ?></td>
        <td><?php echo $atenmatcurativa['Atenmatcurativa']['trimestre4'] ?></td>
        <?php $total1 = ($atenmatcurativa['Atenmatcurativa']["trimestre1"] + $atenmatcurativa['Atenmatcurativa']["trimestre2"] + $atenmatcurativa['Atenmatcurativa']["trimestre3"] + $atenmatcurativa['Atenmatcurativa']["trimestre4"]);
        ?>
        <td class="text-center"><?php echo $total1; ?></td>
    </tr>
   
    <?php endforeach; ?>
    <!-- foot de la tabla, se muestran los totales de los trimestres -->
    <tfoot>
    <tr>
    <td> Total </td>
    <?php
  	$result = mysqli_query($conectar, 'SELECT SUM(trimestre1) AS total, SUM(trimestre2) AS total2, SUM(trimestre3) AS total3, SUM(trimestre4) AS total4 FROM atenmatcurativas'); 
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

