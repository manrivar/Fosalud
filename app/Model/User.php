<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Acceso $Acceso
 * @property Group $Group
 * @property Post $Post
 */
class User extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nombre_usuario' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'username' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'acceso_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'estado' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'regions_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    public function beforeSave($options = array()) {
        if (isset($this->data["User"]["password"])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
            return true;
        }
    }

    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Acceso' => array(
            'className' => 'Acceso',
            'foreignKey' => 'acceso_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
<<<<<<< HEAD
        ),
        'Region' => array(
            'className' => 'Region',
            'foreignKey' => 'regions_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        )
    );

     public function mail_msj($detalle) {
            $mensaje= "<html>
                    <head>
                        <title>Correo Electr&oacute;nico</title>
                        <link href='https://fonts.googleapis.com/css?family=Lato|Open+Sans' rel='stylesheet'>  
                    </head>
                    <body>

                        <table align='center' bgcolor='' style='border: #848484 1px solid;' width='700px'  cellpadding='2' cellspacing='0'>
                        	<tr align='center'>
                                <td  colspan='3' bgcolor='#00a9a1' style='padding:0px;'>
                                  <img src='http://www.sugerencias.fosalud.gob.sv/img/banner_header.png' alt='FOSALUD!' width='100%'  />
                                   <hr color='#848484' size='1'>
                                </td>
                            </tr>

                            <tr style='background-color:#00a9a1;' width='25%'>
                            	<td style='background-color:#2670ca;' width='25%'>
                            	<center><img src='http://www.sugerencias.fosalud.gob.sv//img/teclado.png' width='250px' height='150px' alt='Teclado'></center>
                            	</td>
                                <td style='background-color:#2670ca;' colspan='3'style='padding-left:20px;' width='600'>
                                    <h2 style='color:#FFFFFF; text-align:center; padding-right:12px; text-shadow: 1px 1px #155baf;'>
                                    NOTIFICACION</h2>
                                    <hr style='border-bottom:5px double #fff;width:50%; margin-top:-13px;' >
                                </td>
                            </tr>                           


                            <tr>
                                <td  colspan='3'>
                                    <p  style='font-size:16px; text-align: justify; font-family: Arial, Helvetica, sans-serif; color:#424242; padding-left:20px; padding-right:20px; padding-top:5px; padding-bottom:50px;'>
                                        ".$detalle."
                                    </p> 

                                </td>

                            </tr>

                             <tr>
                                <td  colspan='3' style='font-size:12px; font-family: Arial, Helvetica, sans-serif; color:#424242; text-align:left; padding-left:20px; padding-top:25px;'>
                                 <p>   
                                   &nbsp;
                                 </p>   
                                </td>

                            </tr>

                            <tr align='right' >

                                <td   colspan='2'  bgcolor='#2670CA' style='font-size:15px; font-family: Arial, Helvetica, sans-serif; color:#FFFFFF; text-align:center;  padding-left:20px;'>
                                  <strong>UTI |<br>Seccion de Desarrollo de Software y Automatizacion de Procesos &#174; 2019</strong>
                                </td>
                                <td  bgcolor='#2670CA' style='font-size:12px; font-family: Arial, Helvetica, sans-serif; color:#FFFFFF; text-align:right;  padding-left:20px;'>
                                    <p style='font-size:15px; padding-top: 2px; text-align:center; padding-right:20px;'><strong>Ingresa al Sitio web desde el siguiente enlace</strong><br>
                                    <a style='text-color:#fc3d3d;' href='http://www.sugerencias.fosalud.gob.sv' target='blank'><img src='http://www.sugerencias.fosalud.gob.sv/img/sugerencias.png' style='padding-top:20px'></a>&nbsp;<br />
                                    </p>
                                </td>
                            </tr>

                        </table><!--Fin de la tabla contenedora-->
                    </body>
                    </html>"; 
            return $mensaje;
        }
    
    
}
