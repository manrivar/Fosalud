<?php
App::uses('AppController', 'Controller');
/**
 * Diseases Controller
 *
 * @property disease $Disease
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DiseasesController extends AppController
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
                'disease.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'disease.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'disease.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Disease->recursive = 0;
        $this->set('diseases', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Disease->find('all', array(
                'fields' => array('SUM(Disease.trimester1) as t1, SUM(Disease.trimester2) as t2, SUM(Disease.trimester3) as t3, SUM(Disease.trimester4) as t4'),
                'conditions' => array('Disease.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Disease.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Disease->find('all', array(
                'fields' => array('SUM(Disease.trimester1) as t1, SUM(Disease.trimester2) as t2, SUM(Disease.trimester3) as t3, SUM(Disease.trimester4) as t4'),
                'conditions' => array('Disease.year =' => 2021)
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
        if (!$this->Disease->exists($id)) {
            throw new NotFoundException(__('Invalid disease'));
        }
        $options = array('conditions' => array('Disease.' . $this->Disease->primaryKey => $id));
        $this->set('disease', $this->Disease->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Disease->create();
            if ($this->Disease->save($this->request->data)) {
                $this->Flash->success(__('The disease has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The disease could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Disease->Region->find('list');
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
        if (!$this->Disease->exists($id)) {
            throw new NotFoundException(__('Invalid disease'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Disease->save($this->request->data)) {
                $this->Flash->success(__('The disease has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The disease could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Disease.' . $this->Disease->primaryKey => $id));
            $this->request->data = $this->Disease->find('first', $options);
        }
        $regions = $this->Disease->Region->find('list');
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
        $this->Disease->id = $id;
        if (!$this->Disease->exists()) {
            throw new NotFoundException(__('Invalid disease'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Disease->delete()) {
            $this->Flash->success(__('The disease has been deleted.'));
        } else {
            $this->Flash->error(__('The disease could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
