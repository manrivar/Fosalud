<?php
App::uses('AppController', 'Controller');
/**
 * Healings Controller
 *
 * @property Healing $Healing
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HealingsController extends AppController
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
                'healing.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'healing.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'healing.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Healing->recursive = 0;
        $this->set('healings', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Healing->find('all', array(
                'fields' => array('SUM(Healing.trimester1) as t1, SUM(Healing.trimester2) as t2, SUM(Healing.trimester3) as t3, SUM(Healing.trimester4) as t4'),
                'conditions' => array('Healing.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Healing.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Healing->find('all', array(
                'fields' => array('SUM(Healing.trimester1) as t1, SUM(Healing.trimester2) as t2, SUM(Healing.trimester3) as t3, SUM(Healing.trimester4) as t4'),
                'conditions' => array('Healing.year =' => 2021)
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
        if (!$this->Healing->exists($id)) {
            throw new NotFoundException(__('Invalid healing'));
        }
        $options = array('conditions' => array('Healing.' . $this->Healing->primaryKey => $id));
        $this->set('healing', $this->Healing->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Healing->create();
            if ($this->Healing->save($this->request->data)) {
                $this->Flash->success(__('The healing has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healing could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Healing->Region->find('list');
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
        if (!$this->Healing->exists($id)) {
            throw new NotFoundException(__('Invalid healing'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Healing->save($this->request->data)) {
                $this->Flash->success(__('The healing has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healing could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Healing.' . $this->Healing->primaryKey => $id));
            $this->request->data = $this->Healing->find('first', $options);
        }
        $regions = $this->Healing->Region->find('list');
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
        $this->Healing->id = $id;
        if (!$this->Healing->exists()) {
            throw new NotFoundException(__('Invalid healing'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Healing->delete()) {
            $this->Flash->success(__('The healing has been deleted.'));
        } else {
            $this->Flash->error(__('The healing could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
