<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-list"></span> <a href="<?= $this->base; ?>/users">Lista de Usuarios</a>
        </li>
        <li>
            <span class="glyphicon glyphicon-pencil"></span> <a href="<?= $this->base; ?>/users/edit_gral/<?= $this->request->data["User"]["id"];?>">Editar Datos Generales</a>
        </li>
    </ol>
</div>

<div class="row">
    <div class="users  col-lg-8 col-xs-12 col-sm-12 col-md-8">
        <form role="form" accept-charset="utf-8" method="post" id="UserEditForm" action="<?= $this->base; ?>/users/edit/<?= $this->request->data["User"]["id"];?>">
            <div style="display:none;">
                <input type="hidden" value="PUT" name="_method">
            </div>        
            <fieldset class="form-group-lg">
                <legend>Actualizar Contraseña</legend>
                <input type="hidden" id="UserId" value="<?= $this->request->data["User"]["id"];?>" name="data[User][id]">

                <div class="input text required form-group">
                    <label for="UserUsername">Usuario</label>
                    <input class="form-control" type="text" id="UserUsername" value="<?= $this->request->data["User"]["username"];?>" maxlength="255" disabled="disabled" name="data[User][username]">
                </div>
                <div class="input password required form-group">
                    <label for="UserPassword">Contraseña</label>
                    <input class="form-control" type="password" required="required" id="UserPassword" value="" name="data[User][password]">
                </div>        
                
                <div><button onclick="window.UserEditForm.submit();" class="btn-block btn-primary">Actualizar</button></div>
            </fieldset>
        </form>
    </div>
</div>