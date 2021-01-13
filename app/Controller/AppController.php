<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * 
 * 
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    

    public $components = array(
        'Acl',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'Bienvenida'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array('username' => 'username')
                )
            )
        ),
        'Session',
        'Flash'
    );
    public $helpers = array('Html', 'Form', 'Session', 'Flash');

    public function beforeFilter() {
        //Configure AuthComponent
        //$this->Auth->allow('index', 'view');
        //$this->Auth->allow(array('controller'=>'casos','action'=>'add','action'=>'obtener_establecimientos'));
        //$this->Auth->allow();
    }
    
    public function Autorizacion_2() {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        $acceso=array(3=>true,4=>true);
        if(!empty($acceso[$nivel_acceso])){
            $valor=true; 
        }
        else{
            $valor=false;
        } 
        if ($nivel_acceso > 8 or $valor) {
            //$this->Flash->error(__('Error: Acceso no Autorizado.'));

            $this->redirect(array('controller'=>'users','action' => 'bienvenida'));
        }
        return;
    } 
    /* 2019 */
    public function obtener_salario($nit=null) { 
        $this->loadModel('Planilla');
        $nr1= explode('-', $nit);
        $nr=$nr1[0].$nr1[1].$nr1[2].$nr1[3];
        $data=$this->Planilla->find('first',array('conditions'=>array("nr='NR  ".$nr."' and eliminado=0 and (codigo='H001' or codigo='H007')"),'fields'=>'importe','order'=>array('periodo'=>'desc'),'limit 1'));
        if(!empty($data)){
            $salario=$data['Planilla']['importe'];
        }
        else{
            $salario=0;
        } 
        return $salario;
        
    }

     /*
    public function obtener_salario($nit=null) {  
        $this->loadModel('Fijo');
        $data=$this->Fijo->find('first',array('conditions'=>array("nit"=>$nit,"eliminado"=>0),'fields'=>'salario_nominal','order'=>array('periodo'=>'desc'),'limit 1'));
        if(!empty($data)){
            $salario=$data['Fijo']['salario_nominal'];
        }
        else{
            $this->loadModel('Interino');
            $data=$this->Interino->find('first',array('conditions'=>array("nit"=>$nit,"eliminado"=>0),'fields'=>'salario_nominal','order'=>array('periodo'=>'desc'),'limit 1'));
            if(!empty($data)){
                $salario=$data['Interino']['salario_nominal'];
            }
            else{
                $salario=0;
            }
        }
        
        return $salario;
        
    }*/

}
