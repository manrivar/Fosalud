<?php
App::uses('AppController', 'Controller');
/**
 * Talks Controller
 *
 * @property Vaccine $Vaccine
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class VaccinesController extends AppController
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
                'vaccine.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'vaccine.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'vaccine.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Vaccine->recursive = 0;
        $this->set('vaccines', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Vaccine->find('all', array(
                'fields' => array('SUM(Vaccine.trimester1) as t1, SUM(Vaccine.trimester2) as t2, SUM(Vaccine.trimester3) as t3, SUM(Vaccine.trimester4) as t4'),
                'conditions' => array('Vaccine.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Vaccine.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Vaccine->find('all', array(
                'fields' => array('SUM(Vaccine.trimester1) as t1, SUM(Vaccine.trimester2) as t2, SUM(Vaccine.trimester3) as t3, SUM(Vaccine.trimester4) as t4'),
                'conditions' => array('Vaccine.year =' => 2021)
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
        if (!$this->Vaccine->exists($id)) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        $options = array('conditions' => array('Vaccine.' . $this->Vaccine->primaryKey => $id));
        $this->set('vaccine', $this->Vaccine->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Vaccine->create();
            if ($this->Vaccine->save($this->request->data)) {
                $this->Flash->success(__('The vaccine has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Vaccine->Region->find('list');
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
        if (!$this->Vaccine->exists($id)) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Vaccine->save($this->request->data)) {
                $this->Flash->success(__('The vaccine has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Vaccine.' . $this->Vaccine->primaryKey => $id));
            $this->request->data = $this->Vaccine->find('first', $options);
        }
        $regions = $this->Vaccine->Region->find('list');
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
        $this->Vaccine->id = $id;
        if (!$this->Vaccine->exists()) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Vaccine->delete()) {
            $this->Flash->success(__('The vaccine has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccine could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
