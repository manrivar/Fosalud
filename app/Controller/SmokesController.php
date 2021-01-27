<?php
App::uses('AppController', 'Controller');
/**
 * Smokes Controller
 *
 * @property Smoke $Smoke
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class SmokesController extends AppController
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
                'smoke.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'smoke.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'smoke.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Smoke->recursive = 0;
        $this->set('smokes', $this->Paginator->paginate());
        
        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Smoke->find('all', array(
                'fields' => array('SUM(Smoke.trimester1) as t1, SUM(Smoke.trimester2) as t2, SUM(Smoke.trimester3) as t3, SUM(Smoke.trimester4) as t4'),
                'conditions' => array('Smoke.year =' => $yir)));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        }
        else {
            // Smoke.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Smoke->find('all', array(
                'fields' => array('SUM(Smoke.trimester1) as t1, SUM(Smoke.trimester2) as t2, SUM(Smoke.trimester3) as t3, SUM(Smoke.trimester4) as t4'),
                'conditions' => array('Smoke.year =' => 2021)
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
        if (!$this->Smoke->exists($id)) {
            throw new NotFoundException(__('Invalid smoke'));
        }
        $options = array('conditions' => array('Smoke.' . $this->Smoke->primaryKey => $id));
        $this->set('smoke', $this->Smoke->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Smoke->create();
            if ($this->Smoke->save($this->request->data)) {
                $this->Flash->success(__('The smoke has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The smoke could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Smoke->Region->find('list');
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
        if (!$this->Smoke->exists($id)) {
            throw new NotFoundException(__('Invalid smoke'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Smoke->save($this->request->data)) {
                $this->Flash->success(__('The smoke has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The smoke could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Smoke.' . $this->Smoke->primaryKey => $id));
            $this->request->data = $this->Smoke->find('first', $options);
        }
        $regions = $this->Smoke->Region->find('list');
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
        $this->Smoke->id = $id;
        if (!$this->Smoke->exists()) {
            throw new NotFoundException(__('Invalid smoke'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Smoke->delete()) {
            $this->Flash->success(__('The smoke has been deleted.'));
        } else {
            $this->Flash->error(__('The smoke could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    public function update()
    {
       
    }
}
?>