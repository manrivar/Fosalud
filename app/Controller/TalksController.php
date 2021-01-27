<?php
App::uses('AppController', 'Controller');
/**
 * Talks Controller
 *
 * @property Talk $Talk
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TalksController extends AppController
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
                'talk.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'talk.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'talk.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Talk->recursive = 0;
        $this->set('talks', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Talk->find('all', array(
                'fields' => array('SUM(Talk.trimester1) as t1, SUM(Talk.trimester2) as t2, SUM(Talk.trimester3) as t3, SUM(Talk.trimester4) as t4'),
                'conditions' => array('Talk.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Talk.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Talk->find('all', array(
                'fields' => array('SUM(Talk.trimester1) as t1, SUM(Talk.trimester2) as t2, SUM(Talk.trimester3) as t3, SUM(Talk.trimester4) as t4'),
                'conditions' => array('Talk.year =' => 2021)
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
        if (!$this->Talk->exists($id)) {
            throw new NotFoundException(__('Invalid talk'));
        }
        $options = array('conditions' => array('Talk.' . $this->Talk->primaryKey => $id));
        $this->set('talk', $this->Talk->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Talk->create();
            if ($this->Talk->save($this->request->data)) {
                $this->Flash->success(__('The talk has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The talk could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Talk->Region->find('list');
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
        if (!$this->Talk->exists($id)) {
            throw new NotFoundException(__('Invalid talk'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Talk->save($this->request->data)) {
                $this->Flash->success(__('The talk has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The talk could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Talk.' . $this->Talk->primaryKey => $id));
            $this->request->data = $this->Talk->find('first', $options);
        }
        $regions = $this->Talk->Region->find('list');
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
        $this->Talk->id = $id;
        if (!$this->Talk->exists()) {
            throw new NotFoundException(__('Invalid talk'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Talk->delete()) {
            $this->Flash->success(__('The talk has been deleted.'));
        } else {
            $this->Flash->error(__('The talk could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
