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
class custompdf extends TCPDF {
    //HEADER CON 2 LOGOS
  /*
    public function Header() {
        $this->writeHTML('<table>
        <tr>
            <td><img src="img/Fosalud_Izq.jpg" style="width: 75px; height:40;"/></td>
            <td></td>
            <td align="right"><img src="img/Fosalud_Der1.jpg" style="width: 120px; height:50px;" /></td>
        </tr>
    </table>
    <hr>
    ');

    }*/
    
    public function Header() {
        $this->writeHTML('<br><br><table>
        <tr>
            <td style="text-align:center"><img src="img/Fosalud_Izq.jpg" style="width: 75px; height:50;"/></td>

        </tr>
    </table>
    <hr>
    ');

    }
    public function Footer() { 
    $this->SetY(-15);        
    $this->SetFont('helvetica', '', 9);
    // Page number      
    $salida='
    <table><tr><td style="border-bottom-color: #000000; border-bottom-width: 1px;"></td></tr></table>
    <p style="text-align: center;font-size: 0.75em">
    9ª.Calle Poniente entre 73 y 75 Avenida Norte No.3843, Colonia Escalón, San Salvador. <br>  
      <u>www.fosalud.gob.sv</u>
    </p>';
     $this->writeHTML($salida);
    
}
   

}

?>
