<?php
App::uses('AppController', 'Controller');
/**
 * Vioxestablishments Controller
 *
 * @property Vioxestablishment $Vioxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class VioxestablishmentsController extends AppController
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
                'vioxestablishment.year =' => $yir,
                'vioxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'vioxestablishment.year =' => $yir,
                    'vioxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'vioxestablishment.year =' => $yer,
                    'vioxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Vioxestablishment->recursive = 0;
        $this->set('vioxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Vioxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Vioxestablishment.january) as jan, SUM(Vioxestablishment.february) as feb, SUM(Vioxestablishment.march) as mar, SUM(Vioxestablishment.april) as apr, SUM(Vioxestablishment.may) as may, SUM(Vioxestablishment.june) as jun, SUM(Vioxestablishment.july) as jul,  SUM(Vioxestablishment.august) as aug, SUM(Vioxestablishment.september) as sep, SUM(Vioxestablishment.october) as oct, SUM(Vioxestablishment.november) as nov, SUM(Vioxestablishment.december) as decem'),
                    'conditions' => array(
                        'Vioxestablishment.year =' => $yir,
                        'Vioxestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA VIOLENCES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Violence');
            $this->Violence->query("UPDATE violences SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE violences.regions_id = $region && violences.year = $yir");
        } else {
            // Vioxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Vioxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Vioxestablishment.january) as jan, SUM(Vioxestablishment.february) as feb, SUM(Vioxestablishment.march) as mar, SUM(Vioxestablishment.april) as apr, SUM(Vioxestablishment.may) as may, SUM(Vioxestablishment.june) as jun, SUM(Vioxestablishment.july) as jul,  SUM(Vioxestablishment.august) as aug, SUM(Vioxestablishment.september) as sep, SUM(Vioxestablishment.october) as oct, SUM(Vioxestablishment.november) as nov, SUM(Vioxestablishment.december) as decem'),
                    'conditions' => array(
                        'Vioxestablishment.year =' => $yer,
                        'Vioxestablishment.regions_id' => $reg
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

            $this->loadModel('Violence');
            $this->Violence->query("UPDATE violences SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE violences.regions_id = $region && violences.year = $yer");
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
        if (!$this->Vioxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid vioxestablishment'));
        }
        $options = array('conditions' => array('Vioxestablishment.' . $this->Vioxestablishment->primaryKey => $id));
        $this->set('vioxestablishment', $this->Vioxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Vioxestablishment->create();
            if ($this->Vioxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The vioxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vioxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Vioxestablishment->Establishment->find('list');
        $sibases = $this->Vioxestablishment->Sibase->find('list');
        $regions = $this->Vioxestablishment->Region->find('list');
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
        if (!$this->Vioxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid vioxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Vioxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Vioxestablishment.' . $this->Vioxestablishment->primaryKey => $id));
            $this->request->data = $this->Vioxestablishment->find('first', $options);
        }
        $establishments = $this->Vioxestablishment->Establishment->find('list');
        $sibases = $this->Vioxestablishment->Sibase->find('list');
        $regions = $this->Vioxestablishment->Region->find('list');
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
        $this->Vioxestablishment->id = $id;
        if (!$this->Vioxestablishment->exists()) {
            throw new NotFoundException(__('Invalid vioxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Vioxestablishment->delete()) {
            $this->Flash->success(__('The vioxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The vioxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
