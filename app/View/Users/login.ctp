<p>&nbsp;</p>

<!--login modal. -->


<div id="loginModal" class="" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content caja-login" style="background-color: #303440">
      <div class="modal-header"> 
          <h2 class="text-center" style="color: white">Fondo Solidario para la Salud</h2>
      </div>
      <div class="modal-header2">
          <h3 class="text-center" style="color:#FFFFFF;font-size: 40px">ESTADISTICA</h3>
      </div>
<!--      <div id="progreso2" class="modal-body btn-warning" ></div>-->
      <div class="modal-body">
        <div class="row">
        <div class="">
          <form class="form center-block" id="formulario" name="FormUser" action="<?= $this->base;?>/users/login" method="POST">
            <div class="form-group">
                <div id="fotoPerfil" class="row" style="text-align: center;">
                    <?= $this->Html->image('perfil-neutro.png'); ?>
                </div>
                <input type="hidden" id="base" name="base" value="<?= $this->base;?>" />
              <div class="col-sm-6">
              <?= $this->Form->input('username', array('label' => 'Usuario', 'placeholder' => 'Nombre de Usuario Asignado','autocomplete'=>'off', 'name'=>'data[User][username]', "div"=>array( "class"=>"user-login"))); ?>
              </div>  
              <div class="col-sm-6">
              <?= $this->Form->input('password', array('label' => 'Contraseña', 'placeholder' => 'Contraseña', 'name'=>'data[User][password]',"div"=>array( "class"=>"pass-login"))); ?>
              </div>
            </div>
            <div class="form-group col-sm-12 centered">
                <button id="entrar" onclick="window.formulario.submit();" class="btn btn-info btn-lg btn-block btn-center">Entrar</button>              
            </div>
          </form>
        </div>
        </div>
      </div>
      <!--
      <div style="text-align: center;" class="span5">
            <a href="<?php echo $this->base; ?>/files/Plantilla de manuales - Boleta Inicio Sesion.pdf" target="_blank"><img src="<?php echo $this->base; ?>/img/ayuda.png" /></a><br>
            Como iniciar sesión? Haz clic aquí<br>
            <u><i>Aplicacion compatible con FireFox y Google Chrome</i></u>
        </div>-->
      <div class="modal-footer">
         <!-- <div class="col-md-12"> Perdiste tu contraseña? <a href="<?= $this->base;?>/users/recuperacion">haz clic aquí</a></div>	-->
          <div class="col-md-12" ST>Ver. 1.0</div>
          
      </div>
  </div>
      <div class="row" style="text-align: center"> 
          <img src="<?=$this->base?>/img/fosalud_gobierno.png" class="img-center" width="400px">
      </div>
  </div>
</div>




