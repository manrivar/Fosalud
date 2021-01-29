<?php
App::uses('AppController', 'Controller');
/**
 * Fampxestablishments Controller
 *
 * @property Fampxestablishment $Fampxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class FampxestablishmentsController extends AppController
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
                'fampxestablishment.year =' => $yir,
                'fampxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'fampxestablishment.year =' => $yir,
                    'fampxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'fampxestablishment.year =' => $yer,
                    'fampxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Fampxestablishment->recursive = 0;
        $this->set('fampxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Fampxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Fampxestablishment.january) as jan, SUM(Fampxestablishment.february) as feb, SUM(Fampxestablishment.march) as mar, SUM(Fampxestablishment.april) as apr, SUM(Fampxestablishment.may) as may, SUM(Fampxestablishment.june) as jun, SUM(Fampxestablishment.july) as jul,  SUM(Fampxestablishment.august) as aug, SUM(Fampxestablishment.september) as sep, SUM(Fampxestablishment.october) as oct, SUM(Fampxestablishment.november) as nov, SUM(Fampxestablishment.december) as decem'),
                    'conditions' => array(
                        'Fampxestablishment.year =' => $yir,
                        'Fampxestablishment.regions_id' => $reg
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

            $this->loadModel('Familyplanning');
            $this->Familyplanning->query("UPDATE familyplannings SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE familyplannings.regions_id = $region && familyplannings.year = $yir");
        } else {
            // Fampxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Fampxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Fampxestablishment.january) as jan, SUM(Fampxestablishment.february) as feb, SUM(Fampxestablishment.march) as mar, SUM(Fampxestablishment.april) as apr, SUM(Fampxestablishment.may) as may, SUM(Fampxestablishment.june) as jun, SUM(Fampxestablishment.july) as jul,  SUM(Fampxestablishment.august) as aug, SUM(Fampxestablishment.september) as sep, SUM(Fampxestablishment.october) as oct, SUM(Fampxestablishment.november) as nov, SUM(Fampxestablishment.december) as decem'),
                    'conditions' => array(
                        'Fampxestablishment.year =' => $yer,
                        'Fampxestablishment.regions_id' => $reg
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

            $this->loadModel('Familyplanning');
            $this->Familyplanning->query("UPDATE familyplannings SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE familyplannings.regions_id = $region && familyplannings.year = $yer");
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
        if (!$this->Fampxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid fampxestablishment'));
        }
        $options = array('conditions' => array('Fampxestablishment.' . $this->Fampxestablishment->primaryKey => $id));
        $this->set('fampxestablishment', $this->Fampxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Fampxestablishment->create();
            if ($this->Fampxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The fampxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The fampxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Fampxestablishment->Establishment->find('list');
        $sibases = $this->Fampxestablishment->Sibase->find('list');
        $regions = $this->Fampxestablishment->Region->find('list');
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
        if (!$this->Fampxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid fampxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Fampxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Fampxestablishment.' . $this->Fampxestablishment->primaryKey => $id));
            $this->request->data = $this->Fampxestablishment->find('first', $options);
        }
        $establishments = $this->Fampxestablishment->Establishment->find('list');
        $sibases = $this->Fampxestablishment->Sibase->find('list');
        $regions = $this->Fampxestablishment->Region->find('list');
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
        $this->Fampxestablishment->id = $id;
        if (!$this->Fampxestablishment->exists()) {
            throw new NotFoundException(__('Invalid fampxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Fampxestablishment->delete()) {
            $this->Flash->success(__('The fampxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The fampxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
