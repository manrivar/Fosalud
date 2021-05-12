<?php
App::uses('AppController', 'Controller');
/**
 * Accesos Controller
 *
 * @property Acceso $Acceso
 * @property PaginatorComponent $Paginator
 */
class AccesosController extends AppController {

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
		$this->Acceso->recursive = 0;
		$this->set('accesos', $this->Paginator->paginate());
                
                $nivel = $this->Session->read('Auth.User.acceso_id');
                $this->set(compact("nivel"));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Autorizacion();
		if (!$this->Acceso->exists($id)) {
			throw new NotFoundException(__('Invalid acceso'));
		}
		$options = array('conditions' => array('Acceso.' . $this->Acceso->primaryKey => $id));
		$this->set('acceso', $this->Acceso->find('first', $options));
                
                $nivel = $this->Session->read('Auth.User.acceso_id');
                $this->set(compact("nivel"));
                
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Autorizacion();
		if ($this->request->is('post')) {
			$this->Acceso->create();
			if ($this->Acceso->save($this->request->data)) {
				$this->Flash->success(__('El acceso fue creado exitosamente'));
				$this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " creo el nivel de acceso ". $this->request->data['Acceso']['descripcion'];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The acceso could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Autorizacion();
		if (!$this->Acceso->exists($id)) {
			throw new NotFoundException(__('Invalid acceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acceso->save($this->request->data)) {
				$this->Flash->success(__('The acceso has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The acceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Acceso.' . $this->Acceso->primaryKey => $id));
			$this->request->data = $this->Acceso->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Autorizacion();
		$this->Acceso->id = $id;
		if (!$this->Acceso->exists()) {
			throw new NotFoundException(__('Invalid acceso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Acceso->delete()) {
			$this->Flash->success(__('Acceso deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Flash->error(__('Acceso was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
