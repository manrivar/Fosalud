<?php
// Configuración necesaria para acceder a la data base.
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "estadistica2";

// Generando la conexión con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

//prueba prueba otra vez jajaja


?>
<html>

<head>
  <h2 align="center">Actualizar registros mediante archivo CSV </a></h2>
</head>

<body>
  <div class="padre">
    <div class="hijo">
      <form class="form-inline" method="POST" action="<?= $this->base ?>/Users/importar">
        <select class="form-control" placeholder="End" name="date1">
          <option value="" selected>Seleccione año</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
        </select>
        <select class="form-control" placeholder="End" name="aten" ?>>
          <option value="" selected>Seleccione tipo de atencion</option>
          <option value="acxestas">Atencion Curativa</option>
          <option value="acinfxestas">Atencion Infantil</option>
          <option value="acmatxestas">Atencion Materna</option>
          <option value="ecxestas">Examenes Clinicos</option>
        </select>
        <select class="form-control" placeholder="End" name="regi">
          <option value="" selected>Seleccione region</option>
          <option value="1">Region Occidente</option>
          <option value="2">Region Centro</option>
          <option value="3">Region Metropolitana</option>
          <option value="4">Region Paracetral</option>
          <option value="5">Region Oriente</option>
        </select>
        <button class="btn btn-primary" name="search">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
    </div>
  </div>

  <?php
  // formulario de subida del archivo
  if (isset($_POST["upload"])) {
    if ($_FILES['product_file']['name']) {
      $filename = explode(".", $_FILES['product_file']['name']);

      if (end($filename) == "csv") {
        $handle = fopen($_FILES['product_file']['tmp_name'], "r");

        while ($data = fgetcsv($handle, 0,";" )) {
          //lectura de los campos en el archivo Csv
          $id = mysqli_real_escape_string($conectar, $data[0]);
          $establecimientos_id = mysqli_real_escape_string($conectar, $data[1]);
          $regiones_id = mysqli_real_escape_string($conectar, $data[2]);
          $enero = mysqli_real_escape_string($conectar, $data[3]);
          $febrero = mysqli_real_escape_string($conectar, $data[4]);
          $marzo = mysqli_real_escape_string($conectar, $data[5]);
          $abril = mysqli_real_escape_string($conectar, $data[6]);
          $mayo = mysqli_real_escape_string($conectar, $data[7]);
          $junio = mysqli_real_escape_string($conectar, $data[8]);
          $julio = mysqli_real_escape_string($conectar, $data[9]);
          $agosto = mysqli_real_escape_string($conectar, $data[10]);
          $septiembre = mysqli_real_escape_string($conectar, $data[11]);
          $octubre = mysqli_real_escape_string($conectar, $data[12]);
          $noviembre = mysqli_real_escape_string($conectar, $data[13]);
          $diciembre = mysqli_real_escape_string($conectar, $data[14]);

          //Query que efectuara el update a la base de datos 
          $date1 = $_POST['date1'];
          $aten = $_POST['aten'];
          $regi = $_POST['regi'];
          $query = "
                            UPDATE acxestas
                            SET establecimientos_id = '$establecimientos_id', 
                            regiones_id = '$regiones_id', 
                            enero = '$enero',
                            febrero = '$febrero',
                            marzo = '$marzo',
                            abril = '$abril',
                            mayo = '$mayo',
                            junio = '$junio',
                            julio = '$julio',
                            agosto = '$agosto',
                            septiembre = '$septiembre',
                            octubre = '$octubre',
                            noviembre = '$noviembre',
                            diciembre = '$diciembre'
                            WHERE id = '$id'
                            ";
          mysqli_query($conectar, $query);
        }
        fclose($handle);
        header("location: index.php?updation=1");
      } else {
        $message = '<label class="text-danger">Por favor solo seleccione archivos .csv</label>';
      }
    } else {
      $message = '<label class="text-danger"></label>';
    }
  }
  if (isset($_GET["updation"])) {
    $message = '<label class="text-success">Importacion se efecto correctamente</label>';
  }
  $query = "SELECT *, sibasis.nombre as sibnombre FROM acxestas inner join establecimientos on acxestas.establecimientos_id = establecimientos.id inner join sibasis on acxestas.sibasis_id = sibasis.id 
            inner join regiones on acxestas.regiones_id = regiones.id ORDER BY establecimientos.id ASC ";
  $result = mysqli_query($conectar, $query);
  ?>
  <!-- mostrar preview de la tabla a modificar -->

  <div class="container">
    <br />
    <form method="post" enctype='multipart/form-data'>
      <p><label>Seleccione un archivo(.CSV)</label>
        <input type="file" name="product_file" />
      </p>
      <br />
      <input type="submit" name="upload" class="btn btn-info" value="Upload">
    </form>
  </div>
  <center>
    <h2>Informacion previa a la subida del archivo<h2>
  </center>
  <div class="table-responsive">
    <!-- inicicio de la tabla -->
    <table class="table table-bordered table-condensed">
      <thead class="alert-info">
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

      if (isset($_POST['search'])) {
        $date1 = $_POST['date1'];
        $regi = $_POST['regi'];
        $aten = $_POST['aten'];
        $query = mysqli_query($conectar, "SELECT * FROM `$aten` inner join sibasis on sibasis.id = $aten.sibasis_id inner join establecimientos on establecimientos.id = $aten.establecimientos_id WHERE `año` = '$date1' and $aten.regiones_id = '$regi'");
        $row = mysqli_num_rows($query);

        if ($row > 0) {
          while ($fetch = mysqli_fetch_assoc($query)) {
      ?>
            <tr>
              <td><?php echo $fetch['nombre'] ?></td>
              <td><?php echo $fetch['nombre_esta'] ?></td>
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
              <td colspan="2"> Total </td>
              <?php
              if (isset($_POST['search'])) {
                $date1 = $_POST['date1'];
                $result = mysqli_query($conectar, "SELECT SUM(enero) AS total, SUM(febrero) AS total2, SUM(marzo) AS total3, SUM(abril) AS total4, SUM(mayo) AS total5, SUM(junio) AS total6, SUM(julio) AS total7, SUM(agosto) AS total8, SUM(septiembre) AS total9, SUM(octubre) AS total10, SUM(noviembre) AS total11, SUM(diciembre) AS total12 FROM $aten WHERE $aten.año = $date1 and $aten.regiones_id = $regi");
                $row = mysqli_fetch_assoc($result);
                $suma = ($row['total'] + $row['total2'] + $row['total3'] + $row['total4'] + $row['total5'] + $row['total6'] + $row['total7'] + $row['total8'] + $row['total9'] + $row['total10'] + $row['total11'] + $row['total12']);
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
        } else {
          echo '
          <tr>
          <td colspan = "15"><center>Registros no Existen</center></td>
          </tr>';
        }
      }


      ?>
      </h2>
</body>

</html>

<!-- <?php

      $sql = "SELECT establecimientos_id, enero, febrero FROM acxestas";
      $resultados = mysqli_query($sql, $conectar);
      mysqli_close($conectar);

      while ($reg = mysqli_fetch_array($resultados)) {
        $var = $reg["establecimientos_id"] . ";" . $reg["enero"] . ";" . $reg["febrero"] . "\n";

        /* 
   Formamos una cadena con los datos separados por punto y coma, y le concatenamos el salto de linea, para diferenciar entre un registro y otro.
   */
      }
      //aqui le decimos al navegador que vamos a enviar a un archivo del tipo CSV
      // header("Content-Description: File Transfer");
      // header("Content-Type: application/force-download");
      // header("Content-Disposition: attachment; filename=archivo.csv");
      // echo $var;

      ?>      
 -->
