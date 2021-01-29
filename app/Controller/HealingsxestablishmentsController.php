<?php
App::uses('AppController', 'Controller');
/**
 * Healingsxestablishments Controller
 *
 * @property Healingsxestablishment $Healingsxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HealingsxestablishmentsController extends AppController
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
                'healingsxestablishment.year =' => $yir,
                'healingsxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'healingsxestablishment.year =' => $yir,
                    'healingsxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'healingsxestablishment.year =' => $yer,
                    'healingsxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Healingsxestablishment->recursive = 0;
        $this->set('healingsxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Healingsxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Healingsxestablishment.january) as jan, SUM(Healingsxestablishment.february) as feb, SUM(Healingsxestablishment.march) as mar, SUM(Healingsxestablishment.april) as apr, SUM(Healingsxestablishment.may) as may, SUM(Healingsxestablishment.june) as jun, SUM(Healingsxestablishment.july) as jul,  SUM(Healingsxestablishment.august) as aug, SUM(Healingsxestablishment.september) as sep, SUM(Healingsxestablishment.october) as oct, SUM(Healingsxestablishment.november) as nov, SUM(Healingsxestablishment.december) as decem'),
                    'conditions' => array(
                        'Healingsxestablishment.year =' => $yir,
                        'Healingsxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Healing');
            $this->Healing->query("UPDATE healings SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healings.regions_id = $region && healings.year = $yir");
        } else {
            // Healingsxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Healingsxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Healingsxestablishment.january) as jan, SUM(Healingsxestablishment.february) as feb, SUM(Healingsxestablishment.march) as mar, SUM(Healingsxestablishment.april) as apr, SUM(Healingsxestablishment.may) as may, SUM(Healingsxestablishment.june) as jun, SUM(Healingsxestablishment.july) as jul,  SUM(Healingsxestablishment.august) as aug, SUM(Healingsxestablishment.september) as sep, SUM(Healingsxestablishment.october) as oct, SUM(Healingsxestablishment.november) as nov, SUM(Healingsxestablishment.december) as decem'),
                    'conditions' => array(
                        'Healingsxestablishment.year =' => $yer,
                        'Healingsxestablishment.regions_id' => $reg
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

            $this->loadModel('Healing');
            $this->Healing->query("UPDATE healings SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healings.regions_id = $region && healings.year = $yer");
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
        if (!$this->Healingsxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid healingsxestablishment'));
        }
        $options = array('conditions' => array('Healingsxestablishment.' . $this->Healingsxestablishment->primaryKey => $id));
        $this->set('healingsxestablishment', $this->Healingsxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Healingsxestablishment->create();
            if ($this->Healingsxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The healingsxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healingsxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Healingsxestablishment->Establishment->find('list');
        $sibases = $this->Healingsxestablishment->Sibase->find('list');
        $regions = $this->Healingsxestablishment->Region->find('list');
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
        if (!$this->Healingsxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid healingsxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Healingsxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Healingsxestablishment.' . $this->Healingsxestablishment->primaryKey => $id));
            $this->request->data = $this->Healingsxestablishment->find('first', $options);
        }
        $establishments = $this->Healingsxestablishment->Establishment->find('list');
        $sibases = $this->Healingsxestablishment->Sibase->find('list');
        $regions = $this->Healingsxestablishment->Region->find('list');
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
        $this->Healingsxestablishment->id = $id;
        if (!$this->Healingsxestablishment->exists()) {
            throw new NotFoundException(__('Invalid healingsxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Healingsxestablishment->delete()) {
            $this->Flash->success(__('The healingsxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The healingsxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
