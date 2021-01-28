<?php
App::uses('AppController', 'Controller');
/**
 * Recipes Controller
 *
 * @property recipe $Recipe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RecipesController extends AppController
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
                'recipe.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'recipe.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'recipe.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Recipe->recursive = 0;
        $this->set('recipes', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Recipe->find('all', array(
                'fields' => array('SUM(Recipe.trimester1) as t1, SUM(Recipe.trimester2) as t2, SUM(Recipe.trimester3) as t3, SUM(Recipe.trimester4) as t4'),
                'conditions' => array('Recipe.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Recipe.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Recipe->find('all', array(
                'fields' => array('SUM(Recipe.trimester1) as t1, SUM(Recipe.trimester2) as t2, SUM(Recipe.trimester3) as t3, SUM(Recipe.trimester4) as t4'),
                'conditions' => array('Recipe.year =' => 2021)
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
        if (!$this->Recipe->exists($id)) {
            throw new NotFoundException(__('Invalid recipe'));
        }
        $options = array('conditions' => array('Recipe.' . $this->Recipe->primaryKey => $id));
        $this->set('recipe', $this->Recipe->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Recipe->create();
            if ($this->Recipe->save($this->request->data)) {
                $this->Flash->success(__('The recipe has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Recipe->Region->find('list');
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
        if (!$this->Recipe->exists($id)) {
            throw new NotFoundException(__('Invalid recipe'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Recipe->save($this->request->data)) {
                $this->Flash->success(__('The recipe has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Recipe.' . $this->Recipe->primaryKey => $id));
            $this->request->data = $this->Recipe->find('first', $options);
        }
        $regions = $this->Recipe->Region->find('list');
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
        $this->Recipe->id = $id;
        if (!$this->Recipe->exists()) {
            throw new NotFoundException(__('Invalid recipe'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Recipe->delete()) {
            $this->Flash->success(__('The recipe has been deleted.'));
        } else {
            $this->Flash->error(__('The recipe could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}