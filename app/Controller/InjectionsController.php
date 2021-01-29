<?php
App::uses('AppController', 'Controller');
/**
 * Injections Controller
 *
 * @property Injection $Injection
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class InjectionsController extends AppController
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
                'injection.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'injection.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'injection.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Injection->recursive = 0;
        $this->set('injections', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Injection->find('all', array(
                'fields' => array('SUM(Injection.trimester1) as t1, SUM(Injection.trimester2) as t2, SUM(Injection.trimester3) as t3, SUM(Injection.trimester4) as t4'),
                'conditions' => array('Injection.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Injection.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Injection->find('all', array(
                'fields' => array('SUM(Injection.trimester1) as t1, SUM(Injection.trimester2) as t2, SUM(Injection.trimester3) as t3, SUM(Injection.trimester4) as t4'),
                'conditions' => array('Injection.year =' => 2021)
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
        if (!$this->Injection->exists($id)) {
            throw new NotFoundException(__('Invalid injection'));
        }
        $options = array('conditions' => array('Injection.' . $this->Injection->primaryKey => $id));
        $this->set('injection', $this->Injection->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Injection->create();
            if ($this->Injection->save($this->request->data)) {
                $this->Flash->success(__('The injection has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The injection could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Injection->Region->find('list');
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
        if (!$this->Injection->exists($id)) {
            throw new NotFoundException(__('Invalid injection'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Injection->save($this->request->data)) {
                $this->Flash->success(__('The injection has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The injection could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Injection.' . $this->Injection->primaryKey => $id));
            $this->request->data = $this->Injection->find('first', $options);
        }
        $regions = $this->Injection->Region->find('list');
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
        $this->Injection->id = $id;
        if (!$this->Injection->exists()) {
            throw new NotFoundException(__('Invalid injection'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Injection->delete()) {
            $this->Flash->success(__('The injection has been deleted.'));
        } else {
            $this->Flash->error(__('The injection could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
