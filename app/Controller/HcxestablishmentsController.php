<?php
App::uses('AppController', 'Controller');
/**
 * Hcxestablishments Controller
 *
 * @property Hcxestablishment $Hcxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HcxestablishmentsController extends AppController
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
                'hcxestablishment.year =' => $yir,
                'Hcxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yir,
                    'Hcxestablishment.regions_id' => $reg                    
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yer,
                    'Hcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Hcxestablishment->recursive = 0;
        $this->set('hcxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Hcxestablishment->find('all',
                array(
                    'fields' => array('SUM(Hcxestablishment.january) as jan, SUM(Hcxestablishment.february) as feb, SUM(Hcxestablishment.march) as mar, SUM(Hcxestablishment.april) as apr, SUM(Hcxestablishment.may) as may, SUM(Hcxestablishment.june) as jun, SUM(Hcxestablishment.july) as jul,  SUM(Hcxestablishment.august) as aug, SUM(Hcxestablishment.september) as sep, SUM(Hcxestablishment.october) as oct, SUM(Hcxestablishment.november) as nov, SUM(Hcxestablishment.december) as decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yir,
                        'Hcxestablishment.regions_id' => $reg)
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

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Healingcare');
            $this->Healingcare->query("UPDATE healingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healingcares.regions_id = $region && healingcares.year = $yir");
        } else {
            // Hcxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Hcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Hcxestablishment.january) as jan, SUM(Hcxestablishment.february) as feb, SUM(Hcxestablishment.march) as mar, SUM(Hcxestablishment.april) as apr, SUM(Hcxestablishment.may) as may, SUM(Hcxestablishment.june) as jun, SUM(Hcxestablishment.july) as jul,  SUM(Hcxestablishment.august) as aug, SUM(Hcxestablishment.september) as sep, SUM(Hcxestablishment.october) as oct, SUM(Hcxestablishment.november) as nov, SUM(Hcxestablishment.december) as decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yer,
                        'Hcxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA HEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Healingcare');
            $this->Healingcare->query("UPDATE healingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healingcares.regions_id = $region && healingcares.year = $yer");
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
        if (!$this->Hcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        $options = array('conditions' => array('Hcxestablishment.' . $this->Hcxestablishment->primaryKey => $id));
        $this->set('hcxestablishment', $this->Hcxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Hcxestablishment->create();
            if ($this->Hcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The hcxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The hcxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Hcxestablishment->Establishment->find('list');
        $sibases = $this->Hcxestablishment->Sibase->find('list');
        $regions = $this->Hcxestablishment->Region->find('list');
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
        if (!$this->Hcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Hcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Hcxestablishment.' . $this->Hcxestablishment->primaryKey => $id));
            $this->request->data = $this->Hcxestablishment->find('first', $options);
        }
        $establishments = $this->Hcxestablishment->Establishment->find('list');
        $sibases = $this->Hcxestablishment->Sibase->find('list');
        $regions = $this->Hcxestablishment->Region->find('list');
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
        $this->Hcxestablishment->id = $id;
        if (!$this->Hcxestablishment->exists()) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Hcxestablishment->delete()) {
            $this->Flash->success(__('The hcxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The hcxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
