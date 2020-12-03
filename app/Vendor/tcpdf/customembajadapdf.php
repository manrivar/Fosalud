<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mypdf
 *
 * @author superbeesv
 */
require_once(dirname(__FILE__).'/tcpdf.php'); 
class customembajadapdf extends TCPDF { 
  
   public function Header() {
        $this->writeHTML('<table>
        <tr>
            <td style="text-align:center"><img src="img/Fosalud_Izq.jpg" style="width: 200px; height:100;"/></td>

        </tr>
    </table>
    

    ');

    }
    public function Footer() {
    $this->SetY(-35);        
    $this->SetFont('helvetica', '', 9);
    // Page number       
    $salida='
    <table><tr><td style="border-bottom-color: #000000; border-bottom-width: 1px;"></td></tr></table>
    <p style="text-align: center;font-size: 0.75em">
    9ª.Calle Poniente entre 73 y 75 Avenida Norte No.3843, Colonia Escalón, San Salvador. Teléfono :2528-9700 <br>  
      <u>www.fosalud.gob.sv</u>
    </p>';
     $this->writeHTML($salida);
    
}
   

}

?>
