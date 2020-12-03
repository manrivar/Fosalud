<div class="row">
   <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12" style="/*border: #000000 double medium*/">
       <br>
       <h3><b>ACUERDO DE CONFIDENCIALIDAD</b></h3>
       <hr>
       <p style="text-align: justify;font-size: 24px;">
       La información contenida dentro del Sistema de Casos es confidencial, por lo cual yo, <b><?php echo $this->Session->read('Auth.User.nombre_usuario')?></b>, me comprometo de manera 
       expresa a no difundir, transmitir o revelar cualquier información de la institución, a la cual tenga acceso como consecuencia del desempeño de mis actividades laborales dentro del sistema, bajo la responsabilidad 
       de incurrir en infracción <b>MUY GRAVE</b> según lo establecido en los Artículos 28 y 76 de la Ley de Acceso a la Información Pública.
       </p>
        <img src='../img/confidencialidad2.jpg' class="response" style="width: 100%; height: 100%"/>
        
    </div>
    <hr>
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">

        <b>Acepta los Terminos</b>
        
    </div>
    <hr>
    <br>
    <div class="row">
        <?php echo $this->Form->create('Confidencial'); ?>
        
        <div class="col-md-3">
            <input id="respuesta" name="respuesta" value="1" type="hidden">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success btn-lg">
                <i class="fa fa-check-square-o"></i> Acepto
            </button>
        </div>

        <div class="col-md-4"><a class="btn btn-danger btn-lg" href="<?=$this->base?>/Users/logout"><span class="fa fa-close"></span> No Acepto</a></div>
        <div class="col-md-1"></div> 
        
        
       
        
</div>
<br/><br/>


