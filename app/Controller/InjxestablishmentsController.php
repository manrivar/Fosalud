<?php
App::uses('AppController', 'Controller');
/**
 * Injxestablishments Controller
 *
 * @property Injxestablishment $Injxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class InjxestablishmentsController extends AppController
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
                'injxestablishment.year =' => $yir,
                'injxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'injxestablishment.year =' => $yir,
                    'injxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'injxestablishment.year =' => $yer,
                    'injxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Injxestablishment->recursive = 0;
        $this->set('injxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Injxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Injxestablishment.january) as jan, SUM(Injxestablishment.february) as feb, SUM(Injxestablishment.march) as mar, SUM(Injxestablishment.april) as apr, SUM(Injxestablishment.may) as may, SUM(Injxestablishment.june) as jun, SUM(Injxestablishment.july) as jul,  SUM(Injxestablishment.august) as aug, SUM(Injxestablishment.september) as sep, SUM(Injxestablishment.october) as oct, SUM(Injxestablishment.november) as nov, SUM(Injxestablishment.december) as decem'),
                    'conditions' => array(
                        'Injxestablishment.year =' => $yir,
                        'Injxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA INJECTIONS
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Injection');
            $this->Injection->query("UPDATE injections SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE injections.regions_id = $region && injections.year = $yir");
        } else {
            // Injxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Injxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Injxestablishment.january) as jan, SUM(Injxestablishment.february) as feb, SUM(Injxestablishment.march) as mar, SUM(Injxestablishment.april) as apr, SUM(Injxestablishment.may) as may, SUM(Injxestablishment.june) as jun, SUM(Injxestablishment.july) as jul,  SUM(Injxestablishment.august) as aug, SUM(Injxestablishment.september) as sep, SUM(Injxestablishment.october) as oct, SUM(Injxestablishment.november) as nov, SUM(Injxestablishment.december) as decem'),
                    'conditions' => array(
                        'Injxestablishment.year =' => $yer,
                        'Injxestablishment.regions_id' => $reg
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

            $this->loadModel('Injection');
            $this->Injection->query("UPDATE injections SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE injections.regions_id = $region && injections.year = $yer");
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
        if (!$this->Injxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid injxestablishment'));
        }
        $options = array('conditions' => array('Injxestablishment.' . $this->Injxestablishment->primaryKey => $id));
        $this->set('injxestablishment', $this->Injxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Injxestablishment->create();
            if ($this->Injxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The injxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The injxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Injxestablishment->Establishment->find('list');
        $sibases = $this->Injxestablishment->Sibase->find('list');
        $regions = $this->Injxestablishment->Region->find('list');
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
        if (!$this->Injxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid injxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Injxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Injxestablishment.' . $this->Injxestablishment->primaryKey => $id));
            $this->request->data = $this->Injxestablishment->find('first', $options);
        }
        $establishments = $this->Injxestablishment->Establishment->find('list');
        $sibases = $this->Injxestablishment->Sibase->find('list');
        $regions = $this->Injxestablishment->Region->find('list');
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
        $this->Injxestablishment->id = $id;
        if (!$this->Injxestablishment->exists()) {
            throw new NotFoundException(__('Invalid injxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Injxestablishment->delete()) {
            $this->Flash->success(__('The injxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The injxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
