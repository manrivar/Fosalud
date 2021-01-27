<?php
App::uses('AppController', 'Controller');
/**
 * Smokesxestablishments Controller
 *
 * @property Smokesxestablishment $Smokesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class SmokesxestablishmentsController extends AppController
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
    public function index($region, $yer)
    {
        // metodo para filtrar por fechas
        $yir = $this->request->query('yir');
        $reg = $region;

        $conditions = [];
        if ($yir) {
            $conditions[] = [
                'smokesxestablishment.year =' => $yir,
                'smokesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'smokesxestablishment.year =' => $yir,
                    'smokesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'smokesxestablishment.year =' => $yer,
                    'smokesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Smokesxestablishment->recursive = 0;
        $this->set('smokesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Smokesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Smokesxestablishment.january) as jan, SUM(Smokesxestablishment.february) as feb, SUM(Smokesxestablishment.march) as mar, SUM(Smokesxestablishment.april) as apr, SUM(Smokesxestablishment.may) as may, SUM(Smokesxestablishment.june) as jun, SUM(Smokesxestablishment.july) as jul,  SUM(Smokesxestablishment.august) as aug, SUM(Smokesxestablishment.september) as sep, SUM(Smokesxestablishment.october) as oct, SUM(Smokesxestablishment.november) as nov, SUM(Smokesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Smokesxestablishment.year =' => $yir,
                        'Smokesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['jan'];
            $mostrar_total_feb = $months[0][0]['feb'];
            $mostrar_total_mar = $months[0][0]['mar'];
            $mostrar_total_apr = $months[0][0]['apr'];
            $mostrar_total_may = $months[0][0]['may'];
            $mostrar_total_jun = $months[0][0]['jun'];
            $mostrar_total_jul = $months[0][0]['jul'];
            $mostrar_total_aug = $months[0][0]['aug'];
            $mostrar_total_sep = $months[0][0]['sep'];
            $mostrar_total_oct = $months[0][0]['oct'];
            $mostrar_total_nov = $months[0][0]['nov'];
            $mostrar_total_dec = $months[0][0]['decem'];
            $this->set(array('jan' => $mostrar_total_jan, 'feb' => $mostrar_total_feb, 'mar' => $mostrar_total_mar, 'apr' => $mostrar_total_apr, 'may' => $mostrar_total_may, 'jun' => $mostrar_total_jun, 'jul' => $mostrar_total_jul, 'aug' => $mostrar_total_aug, 'sep' => $mostrar_total_sep, 'oct' => $mostrar_total_oct, 'nov' => $mostrar_total_nov, 'decem' => $mostrar_total_dec));
            
            // UPDATE PARA LA TABLA SMOKES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Smoke');
            $this->Smoke->query("UPDATE smokes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE smokes.regions_id = $region && smokes.year = $yir");
            
        } else {
            // Smokesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Smokesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Smokesxestablishment.january) as jan, SUM(Smokesxestablishment.february) as feb, SUM(Smokesxestablishment.march) as mar, SUM(Smokesxestablishment.april) as apr, SUM(Smokesxestablishment.may) as may, SUM(Smokesxestablishment.june) as jun, SUM(Smokesxestablishment.july) as jul,  SUM(Smokesxestablishment.august) as aug, SUM(Smokesxestablishment.september) as sep, SUM(Smokesxestablishment.october) as oct, SUM(Smokesxestablishment.november) as nov, SUM(Smokesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Smokesxestablishment.year =' => $yer,
                        'Smokesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['jan'];
            $mostrar_total_feb = $months[0][0]['feb'];
            $mostrar_total_mar = $months[0][0]['mar'];
            $mostrar_total_apr = $months[0][0]['apr'];
            $mostrar_total_may = $months[0][0]['may'];
            $mostrar_total_jun = $months[0][0]['jun'];
            $mostrar_total_jul = $months[0][0]['jul'];
            $mostrar_total_aug = $months[0][0]['aug'];
            $mostrar_total_sep = $months[0][0]['sep'];
            $mostrar_total_oct = $months[0][0]['oct'];
            $mostrar_total_nov = $months[0][0]['nov'];
            $mostrar_total_dec = $months[0][0]['decem'];
            $this->set(array('jan' => $mostrar_total_jan, 'feb' => $mostrar_total_feb, 'mar' => $mostrar_total_mar, 'apr' => $mostrar_total_apr, 'may' => $mostrar_total_may, 'jun' => $mostrar_total_jun, 'jul' => $mostrar_total_jul, 'aug' => $mostrar_total_aug, 'sep' => $mostrar_total_sep, 'oct' => $mostrar_total_oct, 'nov' => $mostrar_total_nov, 'decem' => $mostrar_total_dec));
            // UPDATE PARA LA TABLA SMOKES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Smoke');
            $this->Smoke->query("UPDATE smokes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE smokes.regions_id = $region && smokes.year = $yer");

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
        if (!$this->Smokesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid smokesxestablishment'));
        }
        $options = array('conditions' => array('Smokesxestablishment.' . $this->Smokesxestablishment->primaryKey => $id));
        $this->set('smokesxestablishment', $this->Smokesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Smokesxestablishment->create();
            if ($this->Smokesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The smokesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The smokesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Smokesxestablishment->Establishment->find('list');
        $sibases = $this->Smokesxestablishment->Sibase->find('list');
        $regions = $this->Smokesxestablishment->Region->find('list');
        $this->set(compact('establishments', 'sibases', 'regions'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null, $region, $yer)
    {
        if (!$this->Smokesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid smokesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Smokesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Smokesxestablishment.' . $this->Smokesxestablishment->primaryKey => $id));
            $this->request->data = $this->Smokesxestablishment->find('first', $options);
        }
        $establishments = $this->Smokesxestablishment->Establishment->find('list');
        $sibases = $this->Smokesxestablishment->Sibase->find('list');
        $regions = $this->Smokesxestablishment->Region->find('list');
        $reg = $region;
        $this->set(compact('establishments', 'sibases', 'regions', 'reg', 'yer'));
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
        $this->Smokesxestablishment->id = $id;
        if (!$this->Smokesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid smokesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Smokesxestablishment->delete()) {
            $this->Flash->success(__('The smokesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The smokesxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}

?>