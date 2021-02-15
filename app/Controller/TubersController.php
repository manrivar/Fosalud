<?php
App::uses('AppController', 'Controller');
/**
 * Tubers Controller
 *
 * @property tuber $Tuber
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TubersController extends AppController
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
                'tuber.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'tuber.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'tuber.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Tuber->recursive = 0;
        $this->set('tubers', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Tuber->find('all', array(
                'fields' => array('SUM(Tuber.trimester1) as t1, SUM(Tuber.trimester2) as t2, SUM(Tuber.trimester3) as t3, SUM(Tuber.trimester4) as t4'),
                'conditions' => array('Tuber.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Tuber.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Tuber->find('all', array(
                'fields' => array('SUM(Tuber.trimester1) as t1, SUM(Tuber.trimester2) as t2, SUM(Tuber.trimester3) as t3, SUM(Tuber.trimester4) as t4'),
                'conditions' => array('Tuber.year =' => 2021)
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
        if (!$this->Tuber->exists($id)) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        $options = array('conditions' => array('Tuber.' . $this->Tuber->primaryKey => $id));
        $this->set('tuber', $this->Tuber->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Tuber->create();
            if ($this->Tuber->save($this->request->data)) {
                $this->Flash->success(__('The tuber has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The tuber could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Tuber->Region->find('list');
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
        if (!$this->Tuber->exists($id)) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tuber->save($this->request->data)) {
                $this->Flash->success(__('The tuber has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The tuber could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Tuber.' . $this->Tuber->primaryKey => $id));
            $this->request->data = $this->Tuber->find('first', $options);
        }
        $regions = $this->Tuber->Region->find('list');
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
        $this->Tuber->id = $id;
        if (!$this->Tuber->exists()) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Tuber->delete()) {
            $this->Flash->success(__('The tuber has been deleted.'));
        } else {
            $this->Flash->error(__('The tuber could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
