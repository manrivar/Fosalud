<?php
App::uses('AppController', 'Controller');
/**
 * Clinicalexams Controller
 *
 * @property Clinicalexam $Clinicalexam
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ClinicalexamsController extends AppController
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
                'clinicalexam.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'clinicalexam.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
                $yer = $this->paginate = [
                'conditions' => [
                    'clinicalexam.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Clinicalexam->recursive = 0;
        $this->set('clinicalexams', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Clinicalexam->find('all', array(
                'fields' => array('SUM(Clinicalexam.trimester1) as t1, SUM(Clinicalexam.trimester2) as t2, SUM(Clinicalexam.trimester3) as t3, SUM(Clinicalexam.trimester4) as t4'),
                'conditions' => array('Clinicalexam.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Clinicalexam.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Clinicalexam->find('all', array(
                'fields' => array('SUM(Clinicalexam.trimester1) as t1, SUM(Clinicalexam.trimester2) as t2, SUM(Clinicalexam.trimester3) as t3, SUM(Clinicalexam.trimester4) as t4'),
                'conditions' => array('Clinicalexam.year =' => 2021)
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
        if (!$this->Clinicalexam->exists($id)) {
            throw new NotFoundException(__('Invalid clinicalexam'));
        }
        $options = array('conditions' => array('Clinicalexam.' . $this->Clinicalexam->primaryKey => $id));
        $this->set('clinicalexam', $this->Clinicalexam->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Clinicalexam->create();
            if ($this->Clinicalexam->save($this->request->data)) {
                $this->Flash->success(__('The clinicalexam has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The clinicalexam could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Clinicalexam->Region->find('list');
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
        if (!$this->Clinicalexam->exists($id)) {
            throw new NotFoundException(__('Invalid clinicalexam'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Clinicalexam->save($this->request->data)) {
                $this->Flash->success(__('The clinicalexam has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The clinicalexam could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Clinicalexam.' . $this->Clinicalexam->primaryKey => $id));
            $this->request->data = $this->Clinicalexam->find('first', $options);
        }
        $regions = $this->Clinicalexam->Region->find('list');
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
        $this->Clinicalexam->id = $id;
        if (!$this->Clinicalexam->exists()) {
            throw new NotFoundException(__('Invalid clinicalexam'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Clinicalexam->delete()) {
            $this->Flash->success(__('The clinicalexam has been deleted.'));
        } else {
            $this->Flash->error(__('The clinicalexam could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
