<?php
App::uses('AppController', 'Controller');
/**
 * Rehxestablishments Controller
 *
 * @property Rehxestablishment $Rehxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RehxestablishmentsController extends AppController
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
                'rehxestablishment.year =' => $yir,
                'rehxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'rehxestablishment.year =' => $yir,
                    'rehxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'rehxestablishment.year =' => $yer,
                    'rehxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Rehxestablishment->recursive = 0;
        $this->set('rehxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Rehxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Rehxestablishment.january) as jan, SUM(Rehxestablishment.february) as feb, SUM(Rehxestablishment.march) as mar, SUM(Rehxestablishment.april) as apr, SUM(Rehxestablishment.may) as may, SUM(Rehxestablishment.june) as jun, SUM(Rehxestablishment.july) as jul,  SUM(Rehxestablishment.august) as aug, SUM(Rehxestablishment.september) as sep, SUM(Rehxestablishment.october) as oct, SUM(Rehxestablishment.november) as nov, SUM(Rehxestablishment.december) as decem'),
                    'conditions' => array(
                        'Rehxestablishment.year =' => $yir,
                        'Rehxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA REHYDRATIONS
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Rehydration');
            $this->Rehydration->query("UPDATE rehydrations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE rehydrations.regions_id = $region && rehydrations.year = $yir");
        } else {
            // Rehxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Rehxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Rehxestablishment.january) as jan, SUM(Rehxestablishment.february) as feb, SUM(Rehxestablishment.march) as mar, SUM(Rehxestablishment.april) as apr, SUM(Rehxestablishment.may) as may, SUM(Rehxestablishment.june) as jun, SUM(Rehxestablishment.july) as jul,  SUM(Rehxestablishment.august) as aug, SUM(Rehxestablishment.september) as sep, SUM(Rehxestablishment.october) as oct, SUM(Rehxestablishment.november) as nov, SUM(Rehxestablishment.december) as decem'),
                    'conditions' => array(
                        'Rehxestablishment.year =' => $yer,
                        'Rehxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA REHYDRATIONSs "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Rehydration');
            $this->Rehydration->query("UPDATE rehydrations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE rehydrations.regions_id = $region && rehydrations.year = $yer");
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
        if (!$this->Rehxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        $options = array('conditions' => array('Rehxestablishment.' . $this->Rehxestablishment->primaryKey => $id));
        $this->set('rehxestablishment', $this->Rehxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Rehxestablishment->create();
            if ($this->Rehxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The rehxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The rehxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Rehxestablishment->Establishment->find('list');
        $sibases = $this->Rehxestablishment->Sibase->find('list');
        $regions = $this->Rehxestablishment->Region->find('list');
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
        if (!$this->Rehxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Rehxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Rehxestablishment.' . $this->Rehxestablishment->primaryKey => $id));
            $this->request->data = $this->Rehxestablishment->find('first', $options);
        }
        $establishments = $this->Rehxestablishment->Establishment->find('list');
        $sibases = $this->Rehxestablishment->Sibase->find('list');
        $regions = $this->Rehxestablishment->Region->find('list');
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
        $this->Rehxestablishment->id = $id;
        if (!$this->Rehxestablishment->exists()) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Rehxestablishment->delete()) {
            $this->Flash->success(__('The rehxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The rehxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
