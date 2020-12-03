<?php

class MenusController extends AppController{
    
    public function index(){
        $this->set("grupo",$this->Session->read('Auth.User.Group.id'));
        $this->set("acceso_id",$this->Session->read('Auth.User.acceso_id'));
    }
    
    public function admon() {
         
    }


    public function correo() {
        $this->autoRender=false;
        $this->loadModel('User');
       $casilla = "williamrivera@fosalud.gob.sv";
                    //$casilla = $encargados['MedicoEnlace']['email'];
                    $asunto = "PRUEBA CORREO SATH";
                    $cabeceras = "From: " . strip_tags("sath@fosalud.gob.sv") . "\r\n";
                    //$cabeceras .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
                    $cabeceras .= "CC: carlosfuentes@fosalud.gob.sv\r\n"; 
                    //$cabeceras .= "CC: napoleonramirez@fosalud.gob.sv,alvaroortiz@fosalud.gob.sv,dsap@fosalud.gob.sv\r\n"; 
                    $cabeceras .= "MIME-Version: 1.0\r\n";
                    $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $detalle = "Hola  Se le notifica que se ha creado un usuario para el <b>SATH</b>, con las siguientes credenciales de ingreso:<br><br>";
                    $detalle .= "<b>Usuario: </b><br>";
                    $detalle .= "<b>Password: 123456</b><br><br>";
                    $detalle .= "El password es temporal y puede cambiarlo a la hora de ingresar al sistema.";
                    $mensaje = $this->User->mail_msj($detalle);
                    mail($casilla, $asunto, $mensaje, $cabeceras);
                    return;
    }
    
}
?>
