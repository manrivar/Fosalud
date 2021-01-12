
<div class="main_menu">

    <nav class="navbar navbar-inverse">
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div style="" role="menu" aria-expanded="true" id="navbar" class="navbar-collapse collapse out">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $this->base . '/users/bienvenida'; ?>"><span class="glyphicon glyphicon-home"></span>  Inicio</a></li>
                    <?php 
                        if ($acceso_id <> 0) {
                        echo $this->Element('menu/normativa');
                        echo $this->Element('menu/informe');
                    }
                     ?>

                     <ul class="nav navbar-nav">
                     <?php
                      echo $this->Element('menu/contacto');  
                    ?>
                    <!-- <li><a href="<?php echo $this->base .'/file/contactos.pdf'; ?>"><span class="glyphicon glyphicon-phone-alt"></span>  Contactos</a></li> -->
                    
                    
                    <?php
                    switch ($acceso_id):
                    case 1:
                        echo $this->Element('menu/administrador');
                      
                    break;
                
                    endswitch;
                    ?>
                    <li><a href="<?php echo $this->base . '/users/importar'; ?>"><span class="fa fa-upload"></span> Importar</a></li> 

                    <?php
                      echo $this->Element('menu/ayuda');  
                    ?>
                    
                    <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user"></span> 
                            Usuario: <?php echo substr($this->Session->read('Auth.User.nombre_usuario'), 0, 12) . "..."; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= $this->base . "/users/edit/" . $this->Session->read('Auth.User.id'); ?>"><span class="glyphicon glyphicon-pencil"></span> Cambiar Contraseña</a></li>
                            <li><a href = "<?php echo $this->base . '/users/logout'; ?>"><span class="fa fa-power-off"></span> Cerrar Sesion</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

</div>
