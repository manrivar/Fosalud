<style>
    body {
        background-color: #d9edf7;
    }
</style>

<div class="row">
    <br/><br/><br/>
    <div id="loginModal" class="" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">Actualizar Contraseña</h1>
                    <h3 class="text-center"><strong><u>Por politicas de seguridad su contraseña debe ser actualizada.</u></strong></h3>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block" name="UserEditForm" 
                          role="form" accept-charset="utf-8" method="post" id="UserEditForm" 
                          action="<?php echo $this->base; ?>/users/procesorecuperacion/<?php echo $UserId; ?>">

                        <div class="form-group">
                            <input type="hidden" id="base" name="base" value="<?php echo $this->base; ?>" />

                            <div class="input text required form-group">
                                <label for="UserUsername">Usuario</label>
                                <input class="form-control" type="text" id="UserUsername" value="<?php echo $usuario; ?>" maxlength="255" disabled="disabled" name="data[User][username]"/>
                            </div>

                            <div class="input password required form-group">
                                <label for="UserPassword">Contraseña</label>
                                <input class="form-control" type="password" required="required" id="UserPassword" value="" name="data[User][password]"/>
                                <input class="form-control" type="hidden"  id="UserId" value="<?php echo $UserId; ?>" name="data[User][id]"/>
                                <input class="form-control" type="hidden"  id="Normal" value="1" name="data[User][normal]"/>
                            </div> 
                        </div>
                        <div class="">
                            <div><button onclick="window.UserEditForm.submit();" class="btn-block btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Actualizar</button></div>
                        </div>
                    </form>
                </div>
                <div style="text-align: center;" class="span5">
                    <u><i>Aplicacion compatible con FireFox y Google Chrome</i></u>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">Ver. 2.0</div>	
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(function () {
        $("#header").fadeOut(0);
    })
</script>