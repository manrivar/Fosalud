<?php
App::uses('AppController', 'Controller');
/**
 * Violences Controller
 *
 * @property Violence $Violence
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ViolencesController extends AppController
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
                'violence.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'violence.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'violence.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Violence->recursive = 0;
        $this->set('violences', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Violence->find('all', array(
                'fields' => array('SUM(Violence.trimester1) as t1, SUM(Violence.trimester2) as t2, SUM(Violence.trimester3) as t3, SUM(Violence.trimester4) as t4'),
                'conditions' => array('Violence.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Violence.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Violence->find('all', array(
                'fields' => array('SUM(Violence.trimester1) as t1, SUM(Violence.trimester2) as t2, SUM(Violence.trimester3) as t3, SUM(Violence.trimester4) as t4'),
                'conditions' => array('Violence.year =' => 2021)
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
        if (!$this->Violence->exists($id)) {
            throw new NotFoundException(__('Invalid violence'));
        }
        $options = array('conditions' => array('Violence.' . $this->Violence->primaryKey => $id));
        $this->set('violence', $this->Violence->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Violence->create();
            if ($this->Violence->save($this->request->data)) {
                $this->Flash->success(__('The violence has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The violence could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Violence->Region->find('list');
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
        if (!$this->Violence->exists($id)) {
            throw new NotFoundException(__('Invalid violence'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Violence->save($this->request->data)) {
                $this->Flash->success(__('The violence has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The violence could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Violence.' . $this->Violence->primaryKey => $id));
            $this->request->data = $this->Violence->find('first', $options);
        }
        $regions = $this->Violence->Region->find('list');
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
        $this->Violence->id = $id;
        if (!$this->Violence->exists()) {
            throw new NotFoundException(__('Invalid violence'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Violence->delete()) {
            $this->Flash->success(__('The violence has been deleted.'));
        } else {
            $this->Flash->error(__('The violence could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
