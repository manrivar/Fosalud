<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="styleFOSALUD.css" >
    <script type="text/javascript">
      /* Set the width of the side navigation to 250px */
      function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      }

      /* Set the width of the side navigation to 0 */
      function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      } 
    </script>
  </head>
  <body>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#"><font color= "#ffffff"><h4 >Sistemas de Informacion</font>
      <a href="https://simmow.salud.gob.sv/">SIMMOW
      <a href="https://vigepes.salud.gob.sv/">VIGEPES
      <a href="https://vacunas.salud.gob.sv/">VACUNAS
      <a href="https://seps2.salud.gob.sv/">SEPS
      <a href="https://desastres.salud.gob.sv/">DESASTRES
      <a href="https://silin.salud.gob.sv/index.php">SILIN
      <a href="#"><font color= "#ffffff"><h4 >Enlaces Institucionales</font>
      <a href="#">Situacion COVID-19</a>
      <a href="#">Contactos</a>
      <a href="#">Marco Normativo</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <div>
      <span onclick="openNav()">
        <img src="<?= $this->base ?>/img/menu.png">
      </span>
    </div>

    <div class="padre">
      <div class="hijo">
        <a href="<?=$this->base?>/users/atenmenu" ><img src="<?= $this->base ?>/img/ima/hospital.png" width="200" height="224">
        <div class="box-nombre">
          <center><h4>Estadistica y<br> Epidemiologia</h4></center>
        </div>
      </div>

      <div class="hijo">
        <a href="<?=$this->base?>/users/atenmenu" ><img src="<?= $this->base ?>/img/ima/Ask A Doctor.png" width="200" height="224">
        <div class="box-nombre">
          <center><h4>Programas <br> Especiales</h4></center>
        </div>
      </div>
    </div>

  </body>
</html>




   


    
  


