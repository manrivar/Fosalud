<div class="row" style="text-align: center">
    <h3>CONFIGURACIONES DEL SISTEMA</h3>
</div>
<hr>
<div class="row-fluid">
<?php if($this->Session->read('Auth.User.acceso_id')<2):?>

    <div class="padre">
  <div class="hijo"><a href="<?=$this->base?>/users/index"><img src="<?= $this->base ?>/img/admon/users.png" width="200" height="224">
  <div class="box-nombre">
  <center><h4>Gestión<br>usuarios</h4></center>
  </div></div>
  
  <div class="hijo"><a href="<?=$this->base?>/accesos/"><img src="<?= $this->base ?>/img/admon/acceso.png" width="200" height="224">
  <div class="box-nombre">
  <center><h4>Gestión<br>accesos</h4></center>
  </div></div>

<?php elseif($this->Session->read('Auth.User.acceso_id') == 2):?>
  <div class="padre">
  <div class="hijo"><a href="<?=$this->base?>/users/index"><img src="<?= $this->base ?>/img/admon/users.png" width="200" height="224">
  <div class="box-nombre">
  <center><h4>Gestión<br>usuarios</h4></center>
  </div></div>
  
<?php endif;?>


    
   

 