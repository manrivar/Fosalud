<?php
App::uses('AppController', 'Controller');
/**
 * Cexestablishments Controller
 *
 * @property Cexestablishment $Cexestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CexestablishmentsController extends AppController
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
                'cexestablishment.year =' => $yir,
                'cexestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'cexestablishment.year =' => $yir,
                    'cexestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'cexestablishment.year =' => $yer,
                    'cexestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Cexestablishment->recursive = 0;
        $this->set('cexestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Cexestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Cexestablishment.january) as jan, SUM(Cexestablishment.february) as feb, SUM(Cexestablishment.march) as mar, SUM(Cexestablishment.april) as apr, SUM(Cexestablishment.may) as may, SUM(Cexestablishment.june) as jun, SUM(Cexestablishment.july) as jul,  SUM(Cexestablishment.august) as aug, SUM(Cexestablishment.september) as sep, SUM(Cexestablishment.october) as oct, SUM(Cexestablishment.november) as nov, SUM(Cexestablishment.december) as decem'),
                    'conditions' => array(
                        'Cexestablishment.year =' => $yir,
                        'Cexestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA CLINICALEXAMS
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Clinicalexam');
            $this->Clinicalexam->query("UPDATE clinicalexams SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE clinicalexams.regions_id = $region && clinicalexams.year = $yir");

        } else {
            // Cexestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Cexestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Cexestablishment.january) as jan, SUM(Cexestablishment.february) as feb, SUM(Cexestablishment.march) as mar, SUM(Cexestablishment.april) as apr, SUM(Cexestablishment.may) as may, SUM(Cexestablishment.june) as jun, SUM(Cexestablishment.july) as jul,  SUM(Cexestablishment.august) as aug, SUM(Cexestablishment.september) as sep, SUM(Cexestablishment.october) as oct, SUM(Cexestablishment.november) as nov, SUM(Cexestablishment.december) as decem'),
                    'conditions' => array(
                        'Cexestablishment.year =' => $yer,
                        'Cexestablishment.regions_id' => $reg
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

            // UPDATE PARA LA TABLA CLINICALEXAMS "El AÑO EN CLINICALEXAMS.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Clinicalexam');
            $this->Clinicalexam->query("UPDATE clinicalexams SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE clinicalexams.regions_id = $region && clinicalexams.year = $yer");
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
        if (!$this->Cexestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid cexestablishment'));
        }
        $options = array('conditions' => array('Cexestablishment.' . $this->Cexestablishment->primaryKey => $id));
        $this->set('cexestablishment', $this->Cexestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Cexestablishment->create();
            if ($this->Cexestablishment->save($this->request->data)) {
                $this->Flash->success(__('The cexestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The cexestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Cexestablishment->Establishment->find('list');
        $sibases = $this->Cexestablishment->Sibase->find('list');
        $regions = $this->Cexestablishment->Region->find('list');
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
        if (!$this->Cexestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid cexestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Cexestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index',$region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Cexestablishment.' . $this->Cexestablishment->primaryKey => $id));
            $this->request->data = $this->Cexestablishment->find('first', $options);
        }
        $establishments = $this->Cexestablishment->Establishment->find('list');
        $sibases = $this->Cexestablishment->Sibase->find('list');
        $regions = $this->Cexestablishment->Region->find('list');
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
        $this->Cexestablishment->id = $id;
        if (!$this->Cexestablishment->exists()) {
            throw new NotFoundException(__('Invalid cexestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Cexestablishment->delete()) {
            $this->Flash->success(__('The cexestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The cexestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
