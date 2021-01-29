<?php
App::uses('AppController', 'Controller');
/**
 * Rehydrations Controller
 *
 * @property Rehydration $Rehydration
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RehydrationsController extends AppController
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
                'rehydration.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'rehydration.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'rehydration.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Rehydration->recursive = 0;
        $this->set('rehydrations', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Rehydration->find('all', array(
                'fields' => array('SUM(Rehydration.trimester1) as t1, SUM(Rehydration.trimester2) as t2, SUM(Rehydration.trimester3) as t3, SUM(Rehydration.trimester4) as t4'),
                'conditions' => array('Rehydration.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Rehydration.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Rehydration->find('all', array(
                'fields' => array('SUM(Rehydration.trimester1) as t1, SUM(Rehydration.trimester2) as t2, SUM(Rehydration.trimester3) as t3, SUM(Rehydration.trimester4) as t4'),
                'conditions' => array('Rehydration.year =' => 2021)
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
        if (!$this->Rehydration->exists($id)) {
            throw new NotFoundException(__('Invalid rehydration'));
        }
        $options = array('conditions' => array('Rehydration.' . $this->Rehydration->primaryKey => $id));
        $this->set('rehydration', $this->Rehydration->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Rehydration->create();
            if ($this->Rehydration->save($this->request->data)) {
                $this->Flash->success(__('The rehydration has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The rehydration could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Rehydration->Region->find('list');
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
        if (!$this->Rehydration->exists($id)) {
            throw new NotFoundException(__('Invalid rehydration'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Rehydration->save($this->request->data)) {
                $this->Flash->success(__('The rehydration has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The rehydration could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Rehydration.' . $this->Rehydration->primaryKey => $id));
            $this->request->data = $this->Rehydration->find('first', $options);
        }
        $regions = $this->Rehydration->Region->find('list');
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
        $this->Rehydration->id = $id;
        if (!$this->Rehydration->exists()) {
            throw new NotFoundException(__('Invalid rehydration'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Rehydration->delete()) {
            $this->Flash->success(__('The rehydration has been deleted.'));
        } else {
            $this->Flash->error(__('The rehydration could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
