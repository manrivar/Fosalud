<?php
App::uses('AppController', 'Controller');
/**
 * Patients Controller
 *
 * @property Patient $Patient
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PatientsController extends AppController
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
                'patient.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'patient.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'patient.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Patient->recursive = 0;
        $this->set('patients', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Patient->find('all', array(
                'fields' => array('SUM(Patient.trimester1) as t1, SUM(Patient.trimester2) as t2, SUM(Patient.trimester3) as t3, SUM(Patient.trimester4) as t4'),
                'conditions' => array('Patient.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Patient.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Patient->find('all', array(
                'fields' => array('SUM(Patient.trimester1) as t1, SUM(Patient.trimester2) as t2, SUM(Patient.trimester3) as t3, SUM(Patient.trimester4) as t4'),
                'conditions' => array('Patient.year =' => 2021)
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
        if (!$this->Patient->exists($id)) {
            throw new NotFoundException(__('Invalid patient'));
        }
        $options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
        $this->set('patient', $this->Patient->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Patient->create();
            if ($this->Patient->save($this->request->data)) {
                $this->Flash->success(__('The patient has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The patient could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Patient->Region->find('list');
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
        if (!$this->Patient->exists($id)) {
            throw new NotFoundException(__('Invalid patient'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Patient->save($this->request->data)) {
                $this->Flash->success(__('The patient has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The patient could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
            $this->request->data = $this->Patient->find('first', $options);
        }
        $regions = $this->Patient->Region->find('list');
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
        $this->Patient->id = $id;
        if (!$this->Patient->exists()) {
            throw new NotFoundException(__('Invalid patient'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Patient->delete()) {
            $this->Flash->success(__('The patient has been deleted.'));
        } else {
            $this->Flash->error(__('The patient could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
