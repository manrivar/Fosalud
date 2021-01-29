<?php
App::uses('AppController', 'Controller');
/**
 * Familyplannings Controller
 *
 * @property Familyplanning $Familyplanning
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class FamilyplanningsController extends AppController
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
                'familyplanning.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'familyplanning.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'familyplanning.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Familyplanning->recursive = 0;
        $this->set('familyplannings', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Familyplanning->find('all', array(
                'fields' => array('SUM(Familyplanning.trimester1) as t1, SUM(Familyplanning.trimester2) as t2, SUM(Familyplanning.trimester3) as t3, SUM(Familyplanning.trimester4) as t4'),
                'conditions' => array('Familyplanning.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Familyplanning.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Familyplanning->find('all', array(
                'fields' => array('SUM(Familyplanning.trimester1) as t1, SUM(Familyplanning.trimester2) as t2, SUM(Familyplanning.trimester3) as t3, SUM(Familyplanning.trimester4) as t4'),
                'conditions' => array('Familyplanning.year =' => 2021)
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
        if (!$this->Familyplanning->exists($id)) {
            throw new NotFoundException(__('Invalid familyplanning'));
        }
        $options = array('conditions' => array('Familyplanning.' . $this->Familyplanning->primaryKey => $id));
        $this->set('familyplanning', $this->Familyplanning->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Familyplanning->create();
            if ($this->Familyplanning->save($this->request->data)) {
                $this->Flash->success(__('The familyplanning has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The familyplanning could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Familyplanning->Region->find('list');
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
        if (!$this->Familyplanning->exists($id)) {
            throw new NotFoundException(__('Invalid familyplanning'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Familyplanning->save($this->request->data)) {
                $this->Flash->success(__('The familyplanning has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The familyplanning could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Familyplanning.' . $this->Familyplanning->primaryKey => $id));
            $this->request->data = $this->Familyplanning->find('first', $options);
        }
        $regions = $this->Familyplanning->Region->find('list');
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
        $this->Familyplanning->id = $id;
        if (!$this->Familyplanning->exists()) {
            throw new NotFoundException(__('Invalid familyplanning'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Familyplanning->delete()) {
            $this->Flash->success(__('The familyplanning has been deleted.'));
        } else {
            $this->Flash->error(__('The familyplanning could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
