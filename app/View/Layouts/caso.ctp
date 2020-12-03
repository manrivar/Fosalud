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
        <?php
        echo $this->Html->meta('icon');
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

        
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        if(!$this->Session->read('Auth.User.id')) {
            echo '
                <style>
                
                body{
                    //background-image: url("../img/confidencialidad.jpg"); 
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    background-color:#ffffff;
                }
                .centrardiv {text-align:center;}
                </style>';
        }
        ?>

    </head>


    <body >
 


            <div id="header">
                <div class="centrardiv" style="">
                    
                        <?php echo $this->Html->image("banner_header.jpg", array("class"=>"banner-noneresponsive img-responsive","alt" => "Fondo Social para la Salud",'width'=>'100%')); ?>
                        <?php echo $this->Html->image("banner_responsive.jpg", array("class"=>"banner-responsive img-responsive","alt" => "Fondo Social para la Salud",'width'=>'100%')); ?> 
               
                </div>

                <div class="">
                    <?php
                    if ($this->Session->read('Auth.User.id')) {
                       // echo $this->requestAction(array('controller' => 'menus', 'action' => 'index'), array('return'));
                    }
                    ?>
                </div>

            </div>

  

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

    <?php //if ($this->Session->read('Auth.User.id')==1): ?> 
        <?php echo $this->element('sql_dump'); ?> 
    <?php //endif;?>

    <?php echo $this->Html->script('jquery.menu-aim'); ?>
    <?php echo $this->Html->script('main.js'); ?>
</body>

</html>
