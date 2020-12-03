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
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php
    echo $message;
    $msj= explode(':', $message);
    //echo $msj[2];
    if($msj[0]=="SQLSTATE[23000]"){
?>
<div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6 text-center">

            <hr class="style18">
        </div>
        <div class="col-md-3">&nbsp;</div>
</div>
<div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
            <center>
                <img  class="img-negado" src="<?=$this->base?>/img/votacion/negado.png">
            </center>
        </div>
        <div class="col-md-3">&nbsp;</div>
   
</div>
    
<?php
    }
?>
<!--<meta http-equiv="refresh" content="0;url=http://www.sath.dev">-->


