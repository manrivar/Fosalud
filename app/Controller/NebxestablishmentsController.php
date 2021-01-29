<?php
App::uses('AppController', 'Controller');
/**
 * Nebxestablishments Controller
 *
 * @property Nebxestablishment $Nebxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class NebxestablishmentsController extends AppController
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
                'nebxestablishment.year =' => $yir,
                'nebxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'nebxestablishment.year =' => $yir,
                    'nebxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'nebxestablishment.year =' => $yer,
                    'nebxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Nebxestablishment->recursive = 0;
        $this->set('nebxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Nebxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Nebxestablishment.january) as jan, SUM(Nebxestablishment.february) as feb, SUM(Nebxestablishment.march) as mar, SUM(Nebxestablishment.april) as apr, SUM(Nebxestablishment.may) as may, SUM(Nebxestablishment.june) as jun, SUM(Nebxestablishment.july) as jul,  SUM(Nebxestablishment.august) as aug, SUM(Nebxestablishment.september) as sep, SUM(Nebxestablishment.october) as oct, SUM(Nebxestablishment.november) as nov, SUM(Nebxestablishment.december) as decem'),
                    'conditions' => array(
                        'Nebxestablishment.year =' => $yir,
                        'Nebxestablishment.regions_id' => $reg
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

            $this->loadModel('Nebulization');
            $this->Nebulization->query("UPDATE nebulizations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE nebulizations.regions_id = $region && nebulizations.year = $yir");
        } else {
            // Nebxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Nebxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Nebxestablishment.january) as jan, SUM(Nebxestablishment.february) as feb, SUM(Nebxestablishment.march) as mar, SUM(Nebxestablishment.april) as apr, SUM(Nebxestablishment.may) as may, SUM(Nebxestablishment.june) as jun, SUM(Nebxestablishment.july) as jul,  SUM(Nebxestablishment.august) as aug, SUM(Nebxestablishment.september) as sep, SUM(Nebxestablishment.october) as oct, SUM(Nebxestablishment.november) as nov, SUM(Nebxestablishment.december) as decem'),
                    'conditions' => array(
                        'Nebxestablishment.year =' => $yer,
                        'Nebxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA NEBULIZATIONS "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Nebulization');
            $this->Nebulization->query("UPDATE nebulizations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE nebulizations.regions_id = $region && nebulizations.year = $yer");
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
        if (!$this->Nebxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid nebxestablishment'));
        }
        $options = array('conditions' => array('Nebxestablishment.' . $this->Nebxestablishment->primaryKey => $id));
        $this->set('nebxestablishment', $this->Nebxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Nebxestablishment->create();
            if ($this->Nebxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The nebxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The nebxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Nebxestablishment->Establishment->find('list');
        $sibases = $this->Nebxestablishment->Sibase->find('list');
        $regions = $this->Nebxestablishment->Region->find('list');
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
        if (!$this->Nebxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid nebxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Nebxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Nebxestablishment.' . $this->Nebxestablishment->primaryKey => $id));
            $this->request->data = $this->Nebxestablishment->find('first', $options);
        }
        $establishments = $this->Nebxestablishment->Establishment->find('list');
        $sibases = $this->Nebxestablishment->Sibase->find('list');
        $regions = $this->Nebxestablishment->Region->find('list');
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
        $this->Nebxestablishment->id = $id;
        if (!$this->Nebxestablishment->exists()) {
            throw new NotFoundException(__('Invalid nebxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Nebxestablishment->delete()) {
            $this->Flash->success(__('The nebxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The nebxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
