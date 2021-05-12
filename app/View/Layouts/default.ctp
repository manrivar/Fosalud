<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'FOSALUD');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php echo $this->Html->meta('icon'); ?> 
    <!-- link y script de jqueryui.com para funcionamiento del calendario datepicker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
    //**********************************C. S. S. ***********************************************************
    //css de bootstrap
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('bootstrap-theme');
    echo $this->Html->css('bootstrap-theme.min');
    //css para jquery usado en autocompletes
    echo $this->Html->css('Jquery-ui');
    //estiloc propios
    echo $this->Html->css('base');
    echo $this->Html->css('tablas');
    echo $this->Html->css('styleFOSALUD');
    echo $this->Html->css('pagin');
    //estilos del font-awesome
    echo $this->Html->css('font-awesome.min');
    //estilos del timeline
    echo $this->Html->css('styletr');
    //***********************************S C R I P T S********************************************************************
    //script de jquery y jquery UI
    echo $this->Html->script("Jquery");
    echo $this->Html->script("Jquery-ui");
    //script de bootstrap
    echo $this->Html->script('bootstrap.min');
    //script para mascaras de campos ej. telefonos 9999-9999, fechas 99-99-9999, etc
    echo $this->Html->script("jquery-masked-input-plugin");
    //script de validacion de datos
    echo $this->Html->script('common/jquery.validate');
    echo $this->Html->script("jquery.timelinr-0.9.54");
    //script de efectos modernizr
    echo $this->Html->script('moderniz');
    //echo $this->Html->script('moment');


    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    if (!$this->Session->read('Auth.User.id')) :
        echo '
                <style>
                body{
                    background-color:#f7f7f7;
                }
                .centrardiv {text-align:center;}
                </style>';
    else :
        echo '
                <style>
                body{
                    background-color:#ffffff;
                }
                .centrardiv {text-align:center;}
                </style>';
    endif;
    /*
        if(!$this->Session->read('Auth.User.id')) {
            echo '
                <style>
                
                body{
                    background-image: url("../img/background.jpg");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    background-color:#464646;
                }
                .centrardiv {text-align:center;}
                </style>';
        }*/
    ?>
    <style type="text/css">
<<<<<<< HEAD
        /* #aviso-movil-horizontal {
=======
        #aviso-movil-horizontal {
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
            display: none;
        }

        @media only screen and (orientation:portrait) {

            #aviso-movil-horizontal {
                display: block;
            }
        }

        @media only screen and (orientation:landscape) {
            #aviso-movil-horizontal {
                display: none;
            }
<<<<<<< HEAD
        } */
=======
        }
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
    </style>
</head>


<body>
<<<<<<< HEAD
    <!-- <div id="aviso-movil-horizontal" class="alert alert-warning">
        <span class="fa fa-warning"></span> Activa la rotacion de pantalla y coloca tu móvil en Horizontal para una mejor visibilidad del Sitio.
    </div> -->



    <?php if (!empty($this->Session->read('Auth.User.id'))) {
        //ver acuerdo
        if ($this->Session->read('confidencial') != "1" or $this->Session->read('confidencial') != 1) {
            //var_dump($this->Session->read('confidencial'));
            $url = $this->base . "/users/confidencialidad";
            header("Location: " . $url);
            die();
        }


=======
    <div id="aviso-movil-horizontal" class="alert alert-warning">
        <span class="fa fa-warning"></span> Activa la rotacion de pantalla y coloca tu móvil en Horizontal para una mejor visibilidad del Sitio.
    </div>



    <?php if (!empty($this->Session->read('Auth.User.id'))) {
        //ver acuerdo
        if ($this->Session->read('confidencial') != "1" or $this->Session->read('confidencial') != 1) {
            //var_dump($this->Session->read('confidencial'));
            $url = $this->base . "/users/confidencialidad";
            header("Location: " . $url);
            die();
        }


>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
    ?>
        <div id="header">
            <div class="centrardiv" style="background-color: #313945;">

                <?php echo $this->Html->image("banner_header.svg", array("class" => "banner-noneresponsive img-responsive", "alt" => "Fondo Social para la Salud", 'width' => '100%')); ?>
                <?php echo $this->Html->image("banner_responsive.svg", array("class" => "banner-responsive img-responsive", "alt" => "Fondo Social para la Salud", 'width' => '100%')); ?>
<<<<<<< HEAD

            </div>
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

            <div class="">
                <?php
                if ($this->Session->read('Auth.User.id')) {
                    echo $this->requestAction(array('controller' => 'menus', 'action' => 'index'), array('return'));
                }
                ?>
            </div>

<<<<<<< HEAD
=======
            <div class="">
                <?php
                if ($this->Session->read('Auth.User.id')) {
                    echo $this->requestAction(array('controller' => 'menus', 'action' => 'index'), array('return'));
                }
                ?>
            </div>

>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        </div>
    <?php } ?>


    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div id="container">
            <div id="content">
                <?php echo $this->Flash->render(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>

            <div id="footer">
                <?php
                /* echo $this->Html->link(
  $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
  ); */
                ?>
            </div>
        </div>
    </div>


    <?php // comentariado para mostrar la informacion del DebugKit
    //echo $this->element('sql_dump'); 
    ?>


    <?php echo $this->Html->script('jquery.menu-aim'); ?>
    <?php echo $this->Html->script('main.js'); ?>
</body>

</html>