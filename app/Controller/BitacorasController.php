<?php
App::uses('AppController', 'Controller');
/**
 * Bitacoras Controller
 *
 * @property Bitacora $Bitacora
 * @property PaginatorComponent $Paginator
 */
class BitacorasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
/**
 * index method
 *
 * @return void
 */
public function Autorizacion()
{
    $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
    if ($nivel_acceso > 1) {
        $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
        $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
    }
}
	public function index() {
        $this->Autorizacion();
            $condicion="";
            if (isset($_POST["q"])) {
                $q = $_POST["q"];
                $this->Session->write("q", trim($q));
                $this->Session->write("tipo", $this->request->data['busqueda']);
                switch ( $this->Session->read('tipo')){
         
                    case 1:
                        $condicion .= "User.nombre_usuario like '%" . $this->Session->read("q") . "%'";
                        break;

                }
                
            } elseif ($this->Session->read("q") ) {                
                switch ($this->Session->read('tipo')){
                    
                    case 2:
                        $condicion .= "User.nombre_usuario like '%" . $this->Session->read("q") . "%'";
                        break;
                }
            }
            
            
            $where=array(
               
                'fields'=>array(

                    'User.nombre_usuario',
                    'User.username',
                    'Bitacora.*'
                ),
                'conditions'=>array($condicion),
                'order'=>array('Bitacora.id'=>'desc')
            );
            $this->Bitacora->recursive = 0;
            $this->paginate=$where;
            $this->set('bitacoras', $this->Paginator->paginate());
            $this->set('q', $this->Session->read('q'));
            $this->set('tipo', $this->Session->read('tipo'));
	}
        
      
        
        

}
