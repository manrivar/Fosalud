<?php
App::uses('AppController', 'Controller');
/**
 * Healingcares Controller
 *
 * @property Healingcare $Healingcare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HealingcaresController extends AppController
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
                'healingcare.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'healingcare.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'healingcare.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Healingcare->recursive = 0;
        $this->set('healingcares', $this->Paginator->paginate());
        
        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Healingcare->find('all', array(
                'fields' => array('SUM(Healingcare.trimester1) as t1, SUM(Healingcare.trimester2) as t2, SUM(Healingcare.trimester3) as t3, SUM(Healingcare.trimester4) as t4'),
                'conditions' => array('Healingcare.year =' => $yir)));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        }
        else {
            // Healingcare.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Healingcare->find('all', array(
                'fields' => array('SUM(Healingcare.trimester1) as t1, SUM(Healingcare.trimester2) as t2, SUM(Healingcare.trimester3) as t3, SUM(Healingcare.trimester4) as t4'),
                'conditions' => array('Healingcare.year =' => 2021)
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
        if (!$this->Healingcare->exists($id)) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        $options = array('conditions' => array('Healingcare.' . $this->Healingcare->primaryKey => $id));
        $this->set('healingcare', $this->Healingcare->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Healingcare->create();
            if ($this->Healingcare->save($this->request->data)) {
                $this->Flash->success(__('The healingcare has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healingcare could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Healingcare->Region->find('list');
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
        if (!$this->Healingcare->exists($id)) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Healingcare->save($this->request->data)) {
                $this->Flash->success(__('The healingcare has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healingcare could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Healingcare.' . $this->Healingcare->primaryKey => $id));
            $this->request->data = $this->Healingcare->find('first', $options);
        }
        $regions = $this->Healingcare->Region->find('list');
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
        $this->Healingcare->id = $id;
        if (!$this->Healingcare->exists()) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Healingcare->delete()) {
            $this->Flash->success(__('The healingcare has been deleted.'));
        } else {
            $this->Flash->error(__('The healingcare could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
