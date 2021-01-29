<?php
App::uses('AppController', 'Controller');
/**
 * Nebulizations Controller
 *
 * @property Nebulization $Nebulization
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class NebulizationsController extends AppController
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
                'nebulization.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'nebulization.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'nebulization.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Nebulization->recursive = 0;
        $this->set('nebulizations', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Nebulization->find('all', array(
                'fields' => array('SUM(Nebulization.trimester1) as t1, SUM(Nebulization.trimester2) as t2, SUM(Nebulization.trimester3) as t3, SUM(Nebulization.trimester4) as t4'),
                'conditions' => array('Nebulization.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Nebulization.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Nebulization->find('all', array(
                'fields' => array('SUM(Nebulization.trimester1) as t1, SUM(Nebulization.trimester2) as t2, SUM(Nebulization.trimester3) as t3, SUM(Nebulization.trimester4) as t4'),
                'conditions' => array('Nebulization.year =' => 2021)
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
        if (!$this->Nebulization->exists($id)) {
            throw new NotFoundException(__('Invalid nebulization'));
        }
        $options = array('conditions' => array('Nebulization.' . $this->Nebulization->primaryKey => $id));
        $this->set('nebulization', $this->Nebulization->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Nebulization->create();
            if ($this->Nebulization->save($this->request->data)) {
                $this->Flash->success(__('The nebulization has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The nebulization could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Nebulization->Region->find('list');
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
        if (!$this->Nebulization->exists($id)) {
            throw new NotFoundException(__('Invalid nebulization'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Nebulization->save($this->request->data)) {
                $this->Flash->success(__('The nebulization has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The nebulization could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Nebulization.' . $this->Nebulization->primaryKey => $id));
            $this->request->data = $this->Nebulization->find('first', $options);
        }
        $regions = $this->Nebulization->Region->find('list');
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
        $this->Nebulization->id = $id;
        if (!$this->Nebulization->exists()) {
            throw new NotFoundException(__('Invalid nebulization'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Nebulization->delete()) {
            $this->Flash->success(__('The nebulization has been deleted.'));
        } else {
            $this->Flash->error(__('The nebulization could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
