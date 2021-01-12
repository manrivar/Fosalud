<?php 

    class ExamclinicosController extends AppController{
    	public $helpers = array('Html', 'Form', 'Flash');
        public $components = array( 'Flash');
        public $name = 'Examclinicos';
    	
    	
    	public function index(){
            $this->set('examclinicos', $this->Examclinico->find('all'));
    	}

    	public function view($regiones_id = null) {
            $this->set('examclinicos', $this->Examclinico->findByregiones_id($regiones_id));
        }

        public function add($id = null){
            if ($this->request->is(array('post', 'put'))) {
                $this->Examclinico->create();

                /* print_r($this->request->data); 
                  die(); */
                if ($this->Examclinico->save($this->request->data)) {
                    $this->Flash->success(__('El usuario ha sido guardado.'));
                    //bitacora
                    $this->loadModel('Bitacora');
                    $Bitacora["Bitacora"]["descripcion"] = "CREACION DE REGISTRO EN ATENCION CURATIVA " .$this->request->data['User']['nombre_usuario'] ;
                    $Bitacora["Bitacora"]["empleado_id"] = 0;
                    $Bitacora["Bitacora"]["medico_id"] = 0;
                    $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                    $this->Bitacora->save($Bitacora); 
                    
                    return $this->redirect(array('action' => 'index'));
                } 
                else {
                    $this->Flash->error(__('El usuario no se guardo. Intentelo nuevamente.'));
                }
            } 
        }

        public function edit(){
        	
        }
    }
?>