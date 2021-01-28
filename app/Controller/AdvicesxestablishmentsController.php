<?php
App::uses('AppController', 'Controller');
/**
 * Advicesxestablishments Controller
 *
 * @property Advicesxestablishment $Advicesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class AdvicesxestablishmentsController extends AppController
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
                'advicesxestablishment.year =' => $yir,
                'advicesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'advicesxestablishment.year =' => $yir,
                    'advicesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'advicesxestablishment.year =' => $yer,
                    'advicesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Advicesxestablishment->recursive = 0;
        $this->set('advicesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Advicesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Advicesxestablishment.january) as jan, SUM(Advicesxestablishment.february) as feb, SUM(Advicesxestablishment.march) as mar, SUM(Advicesxestablishment.april) as apr, SUM(Advicesxestablishment.may) as may, SUM(Advicesxestablishment.june) as jun, SUM(Advicesxestablishment.july) as jul,  SUM(Advicesxestablishment.august) as aug, SUM(Advicesxestablishment.september) as sep, SUM(Advicesxestablishment.october) as oct, SUM(Advicesxestablishment.november) as nov, SUM(Advicesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Advicesxestablishment.year =' => $yir,
                        'Advicesxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA ADVICES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Advice');
            $this->Advice->query("UPDATE Advices SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE Advices.regions_id = $region && Advices.year = $yir");
        } else {
            // Advicesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Advicesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Advicesxestablishment.january) as jan, SUM(Advicesxestablishment.february) as feb, SUM(Advicesxestablishment.march) as mar, SUM(Advicesxestablishment.april) as apr, SUM(Advicesxestablishment.may) as may, SUM(Advicesxestablishment.june) as jun, SUM(Advicesxestablishment.july) as jul,  SUM(Advicesxestablishment.august) as aug, SUM(Advicesxestablishment.september) as sep, SUM(Advicesxestablishment.october) as oct, SUM(Advicesxestablishment.november) as nov, SUM(Advicesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Advicesxestablishment.year =' => $yer,
                        'Advicesxestablishment.regions_id' => $reg
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

            $this->loadModel('Advice');
            $this->Advice->query("UPDATE Advices SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE Advices.regions_id = $region && Advices.year = $yer");
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
        if (!$this->Advicesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        $options = array('conditions' => array('Advicesxestablishment.' . $this->Advicesxestablishment->primaryKey => $id));
        $this->set('advicesxestablishment', $this->Advicesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Advicesxestablishment->create();
            if ($this->Advicesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The advicesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The advicesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Advicesxestablishment->Establishment->find('list');
        $sibases = $this->Advicesxestablishment->Sibase->find('list');
        $regions = $this->Advicesxestablishment->Region->find('list');
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
        if (!$this->Advicesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Advicesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Advicesxestablishment.' . $this->Advicesxestablishment->primaryKey => $id));
            $this->request->data = $this->Advicesxestablishment->find('first', $options);
        }
        $establishments = $this->Advicesxestablishment->Establishment->find('list');
        $sibases = $this->Advicesxestablishment->Sibase->find('list');
        $regions = $this->Advicesxestablishment->Region->find('list');
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
        $this->Advicesxestablishment->id = $id;
        if (!$this->Advicesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Advicesxestablishment->delete()) {
            $this->Flash->success(__('The advicesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The advicesxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
