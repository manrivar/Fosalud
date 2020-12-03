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
	public function index() {
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
		if ($this->request->is('post')) {
			$this->Acceso->create();
			if ($this->Acceso->save($this->request->data)) {
				$this->Flash->success(__('The acceso has been saved'));
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
