<?php
if (!$this->Session->read('Auth.User.id')) {
    echo '
                <style>
                body {
                    background-image: url("");
                    background-repeat: no-repeat;
                    background-position: right bottom;
                    background-attachment: fixed;
                }
                </style>';
}
?>

<div id="formulario1">
    <div id="loginModal" class="" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center">Recuperacion de Contraseña</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block" id="formulario" name="FormUser" action="" method="POST">
                        <div class="form-group">
                            <input type="hidden" id="base" name="base" value="<?= $this->base; ?>" />
                            <?= $this->Form->input('dui', array("label" => "DUI", "id" => "dui", "name" => "dui", "autocomplete" => "off")); ?>

                            <?= $this->Form->input('nit', array("label" => "NIT", "id" => "nit", "name" => "nit", "autocomplete" => "off")); ?>
                        </div>
                        <div class="">
                            <button id="enviar" class="btn-block btn-primary"><span class="glyphicon glyphicon-wrench"></span> Enviar</button>
                            <button onclick="window.location = '<?= $this->base; ?>/users/login';
                                    return false;" id="cancelar" class="btn-block btn-danger"><span class="glyphicon glyphicon-erase"></span> Cancelar</button>
                        </div>
                    </form>
                </div>
                <div style="text-align: center;" class="span5">
                    <u><i>Aplicacion compatible con FireFox y Google Chrome</i></u>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">Ver. 2.0</div>	
                </div>
                
                <div class="modal-body">
                    <div id="progreso" class="btn-block btn-success"> Error </div>
                </div>
                <div class="modal-body">
                    <div id="error" class="btn-block btn-danger"> Error </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="formulario2">

</div>

<?php echo $this->Html->script("users/recuperacion"); ?>