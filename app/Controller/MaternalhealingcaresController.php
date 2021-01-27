<?php
App::uses('AppController', 'Controller');
/**
 * Maternalhealingcares Controller
 *
 * @property Maternalhealingcare $Maternalhealingcare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class MaternalhealingcaresController extends AppController{

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
				'maternalhealingcare.year =' => $yir
			];
			$this->paginate = [
				'conditions' => [
					'maternalhealingcare.year =' => $yir
				]
			];
			$this->set(array('yer' => $yir));
		} else {
			//EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
			$yer = $this->paginate = [
				'conditions' => [
					'maternalhealingcare.year =' => '2021'
				]
			];
			$this->set(array('yer' => '2021'));
		}

		// index
		$this->Maternalhealingcare->recursive = 0;
		$this->set('maternalhealingcares', $this->Paginator->paginate());

		//***************query para suma de totales en el footer de la tabla*************** 
		$yir = $this->request->query('yir');

		$conditions = [];
		if ($yir) {
			$trim1 = $this->Maternalhealingcare->find('all', array(
				'fields' => array('SUM(Maternalhealingcare.trimester1) as t1, SUM(Maternalhealingcare.trimester2) as t2, SUM(Maternalhealingcare.trimester3) as t3, SUM(Maternalhealingcare.trimester4) as t4'),
				'conditions' => array('Maternalhealingcare.year =' => $yir)
			));
			$mostrar_total_t1 = $trim1[0][0]['t1'];
			$mostrar_total_t2 = $trim1[0][0]['t2'];
			$mostrar_total_t3 = $trim1[0][0]['t3'];
			$mostrar_total_t4 = $trim1[0][0]['t4'];
			$this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
		} else {
			// Maternalhealingcare.year debe ser cambiado al año actual, igual que en el filtro
			$trim1 = $this->Maternalhealingcare->find('all', array(
				'fields' => array('SUM(Maternalhealingcare.trimester1) as t1, SUM(Maternalhealingcare.trimester2) as t2, SUM(Maternalhealingcare.trimester3) as t3, SUM(Maternalhealingcare.trimester4) as t4'),
				'conditions' => array('Maternalhealingcare.year =' => 2021)
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
		if (!$this->Maternalhealingcare->exists($id)) {
			throw new NotFoundException(__('Invalid maternalhealingcare'));
		}
		$options = array('conditions' => array('Maternalhealingcare.' . $this->Maternalhealingcare->primaryKey => $id));
		$this->set('maternalhealingcare', $this->Maternalhealingcare->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Maternalhealingcare->create();
			if ($this->Maternalhealingcare->save($this->request->data)) {
				$this->Flash->success(__('The maternalhealingcare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The maternalhealingcare could not be saved. Please, try again.'));
			}
		}
		$regions = $this->Maternalhealingcare->Region->find('list');
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
		if (!$this->Maternalhealingcare->exists($id)) {
			throw new NotFoundException(__('Invalid maternalhealingcare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Maternalhealingcare->save($this->request->data)) {
				$this->Flash->success(__('The maternalhealingcare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The maternalhealingcare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Maternalhealingcare.' . $this->Maternalhealingcare->primaryKey => $id));
			$this->request->data = $this->Maternalhealingcare->find('first', $options);
		}
		$regions = $this->Maternalhealingcare->Region->find('list');
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
		$this->Maternalhealingcare->id = $id;
		if (!$this->Maternalhealingcare->exists()) {
			throw new NotFoundException(__('Invalid maternalhealingcare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Maternalhealingcare->delete()) {
			$this->Flash->success(__('The maternalhealingcare has been deleted.'));
		} else {
			$this->Flash->error(__('The maternalhealingcare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
