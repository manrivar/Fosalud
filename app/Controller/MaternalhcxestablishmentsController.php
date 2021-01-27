<?php
App::uses('AppController', 'Controller');
/**
 * Maternalhcxestablishments Controller
 *
 * @property Maternalhcxestablishment $Maternalhcxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class MaternalhcxestablishmentsController extends AppController
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
                'maternalhcxestablishment.year =' => $yir,
                'maternalhcxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'maternalhcxestablishment.year =' => $yir,
                    'maternalhcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'maternalhcxestablishment.year =' => $yer,
                    'maternalhcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Maternalhcxestablishment->recursive = 0;
        $this->set('maternalhcxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Maternalhcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Maternalhcxestablishment.ins_january) as i_jan, SUM(Maternalhcxestablishment.con_january) as c_jan, SUM(Maternalhcxestablishment.ins_february) as i_feb, SUM(Maternalhcxestablishment.con_february) as c_feb, SUM(Maternalhcxestablishment.ins_march) as i_mar, SUM(Maternalhcxestablishment.con_march) as c_mar, SUM(Maternalhcxestablishment.ins_april) as i_apr, SUM(Maternalhcxestablishment.con_april) as c_apr, SUM(Maternalhcxestablishment.ins_may) as i_may, SUM(Maternalhcxestablishment.con_may) as c_may, SUM(Maternalhcxestablishment.ins_june) as i_jun, SUM(Maternalhcxestablishment.con_june) as c_jun, SUM(Maternalhcxestablishment.ins_july) as i_jul, SUM(Maternalhcxestablishment.con_july) as c_jul,  SUM(Maternalhcxestablishment.ins_august) as i_aug, SUM(Maternalhcxestablishment.con_august) as c_aug, SUM(Maternalhcxestablishment.ins_september) as i_sep, SUM(Maternalhcxestablishment.con_september) as c_sep, SUM(Maternalhcxestablishment.ins_october) as i_oct, SUM(Maternalhcxestablishment.con_october) as c_oct, SUM(Maternalhcxestablishment.ins_november) as i_nov, SUM(Maternalhcxestablishment.con_november) as c_nov, SUM(Maternalhcxestablishment.ins_december) as i_decem, SUM(Maternalhcxestablishment.con_december) as c_decem'),
                    'conditions' => array(
                        'Maternalhcxestablishment.year =' => $yir,
                        'Maternalhcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['i_jan'];
            $mostrar_total_jan2 = $months[0][0]['c_jan'];
            $mostrar_total_feb1 = $months[0][0]['i_feb'];
            $mostrar_total_feb2 = $months[0][0]['c_feb'];
            $mostrar_total_mar1 = $months[0][0]['i_mar'];
            $mostrar_total_mar2 = $months[0][0]['c_mar'];
            $mostrar_total_apr1 = $months[0][0]['i_apr'];
            $mostrar_total_apr2 = $months[0][0]['c_apr'];
            $mostrar_total_may1 = $months[0][0]['i_may'];
            $mostrar_total_may2 = $months[0][0]['c_may'];
            $mostrar_total_jun1 = $months[0][0]['i_jun'];
            $mostrar_total_jun2 = $months[0][0]['c_jun'];
            $mostrar_total_jul1 = $months[0][0]['i_jul'];
            $mostrar_total_jul2 = $months[0][0]['c_jul'];
            $mostrar_total_aug1 = $months[0][0]['i_aug'];
            $mostrar_total_aug2 = $months[0][0]['c_aug'];
            $mostrar_total_sep1 = $months[0][0]['i_sep'];
            $mostrar_total_sep2 = $months[0][0]['c_sep'];
            $mostrar_total_oct1 = $months[0][0]['i_oct'];
            $mostrar_total_oct2 = $months[0][0]['c_oct'];
            $mostrar_total_nov1 = $months[0][0]['i_nov'];
            $mostrar_total_nov2 = $months[0][0]['c_nov'];
            $mostrar_total_dec1 = $months[0][0]['i_decem'];
            $mostrar_total_dec2 = $months[0][0]['c_decem'];
            $this->set(array('i_jan' => $mostrar_total_jan1, 'i_feb' => $mostrar_total_feb1, 'i_mar' => $mostrar_total_mar1, 'i_apr' => $mostrar_total_apr1, 'i_may' => $mostrar_total_may1, 'i_jun' => $mostrar_total_jun1, 'i_jul' => $mostrar_total_jul1, 'i_aug' => $mostrar_total_aug1, 'i_sep' => $mostrar_total_sep1, 'i_oct' => $mostrar_total_oct1, 'i_nov' => $mostrar_total_nov1, 'i_decem' => $mostrar_total_dec1, 'c_jan' => $mostrar_total_jan2, 'c_feb' => $mostrar_total_feb2, 'c_mar' => $mostrar_total_mar2, 'c_apr' => $mostrar_total_apr2, 'c_may' => $mostrar_total_may2, 'c_jun' => $mostrar_total_jun2, 'c_jul' => $mostrar_total_jul2, 'c_aug' => $mostrar_total_aug2, 'c_sep' => $mostrar_total_sep2, 'c_oct' => $mostrar_total_oct2, 'c_nov' => $mostrar_total_nov2, 'c_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['i_jan'] + $months[0][0]['i_feb'] + $months[0][0]['i_mar'] +
                     $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'];
            $trim2 = $months[0][0]['i_apr'] + $months[0][0]['i_may'] + $months[0][0]['i_jun'] +
                     $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'];
            $trim3 = $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                     $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'];
            $trim4 = $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem'] + 
                     $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'];

            $this->loadModel('Maternalhealingcare');
            $this->Maternalhealingcare->query("UPDATE maternalhealingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE maternalhealingcares.regions_id = $region && maternalhealingcares.year = $yir");
        } else {
            // Maternalhcxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Maternalhcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Maternalhcxestablishment.ins_january) as i_jan, SUM(Maternalhcxestablishment.con_january) as c_jan, SUM(Maternalhcxestablishment.ins_february) as i_feb, SUM(Maternalhcxestablishment.con_february) as c_feb, SUM(Maternalhcxestablishment.ins_march) as i_mar, SUM(Maternalhcxestablishment.con_march) as c_mar, SUM(Maternalhcxestablishment.ins_april) as i_apr, SUM(Maternalhcxestablishment.con_april) as c_apr, SUM(Maternalhcxestablishment.ins_may) as i_may, SUM(Maternalhcxestablishment.con_may) as c_may, SUM(Maternalhcxestablishment.ins_june) as i_jun, SUM(Maternalhcxestablishment.con_june) as c_jun, SUM(Maternalhcxestablishment.ins_july) as i_jul, SUM(Maternalhcxestablishment.con_july) as c_jul,  SUM(Maternalhcxestablishment.ins_august) as i_aug, SUM(Maternalhcxestablishment.con_august) as c_aug, SUM(Maternalhcxestablishment.ins_september) as i_sep, SUM(Maternalhcxestablishment.con_september) as c_sep, SUM(Maternalhcxestablishment.ins_october) as i_oct, SUM(Maternalhcxestablishment.con_october) as c_oct, SUM(Maternalhcxestablishment.ins_november) as i_nov, SUM(Maternalhcxestablishment.con_november) as c_nov, SUM(Maternalhcxestablishment.ins_december) as i_decem, SUM(Maternalhcxestablishment.con_december) as c_decem'),
                    'conditions' => array(
                        'Maternalhcxestablishment.year =' => $yer,
                        'Maternalhcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['i_jan'];
            $mostrar_total_jan2 = $months[0][0]['c_jan'];
            $mostrar_total_feb1 = $months[0][0]['i_feb'];
            $mostrar_total_feb2 = $months[0][0]['c_feb'];
            $mostrar_total_mar1 = $months[0][0]['i_mar'];
            $mostrar_total_mar2 = $months[0][0]['c_mar'];
            $mostrar_total_apr1 = $months[0][0]['i_apr'];
            $mostrar_total_apr2 = $months[0][0]['c_apr'];
            $mostrar_total_may1 = $months[0][0]['i_may'];
            $mostrar_total_may2 = $months[0][0]['c_may'];
            $mostrar_total_jun1 = $months[0][0]['i_jun'];
            $mostrar_total_jun2 = $months[0][0]['c_jun'];
            $mostrar_total_jul1 = $months[0][0]['i_jul'];
            $mostrar_total_jul2 = $months[0][0]['c_jul'];
            $mostrar_total_aug1 = $months[0][0]['i_aug'];
            $mostrar_total_aug2 = $months[0][0]['c_aug'];
            $mostrar_total_sep1 = $months[0][0]['i_sep'];
            $mostrar_total_sep2 = $months[0][0]['c_sep'];
            $mostrar_total_oct1 = $months[0][0]['i_oct'];
            $mostrar_total_oct2 = $months[0][0]['c_oct'];
            $mostrar_total_nov1 = $months[0][0]['i_nov'];
            $mostrar_total_nov2 = $months[0][0]['c_nov'];
            $mostrar_total_dec1 = $months[0][0]['i_decem'];
            $mostrar_total_dec2 = $months[0][0]['c_decem'];
            $this->set(array('i_jan' => $mostrar_total_jan1, 'i_feb' => $mostrar_total_feb1, 'i_mar' => $mostrar_total_mar1, 'i_apr' => $mostrar_total_apr1, 'i_may' => $mostrar_total_may1, 'i_jun' => $mostrar_total_jun1, 'i_jul' => $mostrar_total_jul1, 'i_aug' => $mostrar_total_aug1, 'i_sep' => $mostrar_total_sep1, 'i_oct' => $mostrar_total_oct1, 'i_nov' => $mostrar_total_nov1, 'i_decem' => $mostrar_total_dec1, 'c_jan' => $mostrar_total_jan2, 'c_feb' => $mostrar_total_feb2, 'c_mar' => $mostrar_total_mar2, 'c_apr' => $mostrar_total_apr2, 'c_may' => $mostrar_total_may2, 'c_jun' => $mostrar_total_jun2, 'c_jul' => $mostrar_total_jul2, 'c_aug' => $mostrar_total_aug2, 'c_sep' => $mostrar_total_sep2, 'c_oct' => $mostrar_total_oct2, 'c_nov' => $mostrar_total_nov2, 'c_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['i_jan'] + $months[0][0]['i_feb'] + $months[0][0]['i_mar'] +
                     $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'];
            $trim2 = $months[0][0]['i_apr'] + $months[0][0]['i_may'] + $months[0][0]['i_jun'] +
                     $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'];
            $trim3 = $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                     $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'];
            $trim4 = $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem'] +
                     $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'];

            $this->loadModel('Maternalhealingcare');
            $this->Maternalhealingcare->query("UPDATE maternalhealingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE maternalhealingcares.regions_id = $region && maternalhealingcares.year = $yer");
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
        if (!$this->Maternalhcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid maternalhcxestablishment'));
        }
        $options = array('conditions' => array('Maternalhcxestablishment.' . $this->Maternalhcxestablishment->primaryKey => $id));
        $this->set('maternalhcxestablishment', $this->Maternalhcxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Maternalhcxestablishment->create();
            if ($this->Maternalhcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The maternalhcxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The maternalhcxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Maternalhcxestablishment->Establishment->find('list');
        $sibases = $this->Maternalhcxestablishment->Sibase->find('list');
        $regions = $this->Maternalhcxestablishment->Region->find('list');
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
        if (!$this->Maternalhcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid maternalhcxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Maternalhcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Maternalhcxestablishment.' . $this->Maternalhcxestablishment->primaryKey => $id));
            $this->request->data = $this->Maternalhcxestablishment->find('first', $options);
        }
        $establishments = $this->Maternalhcxestablishment->Establishment->find('list');
        $sibases = $this->Maternalhcxestablishment->Sibase->find('list');
        $regions = $this->Maternalhcxestablishment->Region->find('list');
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
        $this->Maternalhcxestablishment->id = $id;
        if (!$this->Maternalhcxestablishment->exists()) {
            throw new NotFoundException(__('Invalid maternalhcxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Maternalhcxestablishment->delete()) {
            $this->Flash->success(__('The maternalhcxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The maternalhcxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
?>