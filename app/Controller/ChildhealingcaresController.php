<?php
App::uses('AppController', 'Controller');
/**
 * Healingcares Controller
 *
 * @property childhealingcare $Childhealingcare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ChildhealingcaresController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session', 'Flash');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		// metodo para filtrar por fechas
		$yir = $this->request->query('yir');

		$conditions = [];
		if ($yir) {
			$conditions[] = [
				'childhealingcare.year =' => $yir
			];
			$this->paginate = [
				'conditions' => [
					'childhealingcare.year =' => $yir
				]
			];
			$this->set(array('yer' => $yir));
		} else {
			//EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
			$yer = $this->paginate = [
				'conditions' => [
					'childhealingcare.year =' => '2021'
				]
			];
			$this->set(array('yer' => '2021'));
		}

		// index
		$this->Childhealingcare->recursive = 0;
		$this->set('childhealingcares', $this->Paginator->paginate());

		//***************query para suma de totales en el footer de la tabla*************** 
		$yir = $this->request->query('yir');

		$conditions = [];
		if ($yir) {
			$trim1 = $this->Childhealingcare->find('all', array(
				'fields' => array('SUM(Childhealingcare.trimester1) as t1, SUM(Childhealingcare.trimester2) as t2, SUM(Childhealingcare.trimester3) as t3, SUM(Childhealingcare.trimester4) as t4'),
				'conditions' => array('Childhealingcare.year =' => $yir)
			));
			$mostrar_total_t1 = $trim1[0][0]['t1'];
			$mostrar_total_t2 = $trim1[0][0]['t2'];
			$mostrar_total_t3 = $trim1[0][0]['t3'];
			$mostrar_total_t4 = $trim1[0][0]['t4'];
			$this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
		} else {
			// Childhealingcare.year debe ser cambiado al año actual, igual que en el filtro
			$trim1 = $this->Childhealingcare->find('all', array(
				'fields' => array('SUM(Childhealingcare.trimester1) as t1, SUM(Childhealingcare.trimester2) as t2, SUM(Childhealingcare.trimester3) as t3, SUM(Childhealingcare.trimester4) as t4'),
				'conditions' => array('Childhealingcare.year =' => 2021)
			));
			$mostrar_total_t1 = $trim1[0][0]['t1'];
			$mostrar_total_t2 = $trim1[0][0]['t2'];
			$mostrar_total_t3 = $trim1[0][0]['t3'];
			$mostrar_total_t4 = $trim1[0][0]['t4'];
			$this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
		}
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Childhealingcare->exists($id)) {
			throw new NotFoundException(__('Invalid childhealingcare'));
		}
		$options = array('conditions' => array('Childhealingcare.' . $this->Childhealingcare->primaryKey => $id));
		$this->set('childhealingcare', $this->Childhealingcare->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Childhealingcare->create();
			if ($this->Childhealingcare->save($this->request->data)) {
				$this->Flash->success(__('The childhealingcare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The childhealingcare could not be saved. Please, try again.'));
			}
		}
		$regions = $this->Childhealingcare->Region->find('list');
		$this->set(compact('regions'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Childhealingcare->exists($id)) {
			throw new NotFoundException(__('Invalid childhealingcare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Childhealingcare->save($this->request->data)) {
				$this->Flash->success(__('The childhealingcare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The childhealingcare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Childhealingcare.' . $this->Childhealingcare->primaryKey => $id));
			$this->request->data = $this->Childhealingcare->find('first', $options);
		}
		$regions = $this->Childhealingcare->Region->find('list');
		$this->set(compact('regions'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->Childhealingcare->id = $id;
		if (!$this->Childhealingcare->exists()) {
			throw new NotFoundException(__('Invalid childhealingcare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Childhealingcare->delete()) {
			$this->Flash->success(__('The childhealingcare has been deleted.'));
		} else {
			$this->Flash->error(__('The childhealingcare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
