<?php
App::uses('AppController', 'Controller');
/**
 * Recipesxestablishments Controller
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
                'hcxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yir,
                    'hcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yer,
                    'hcxestablishment.regions_id' => $reg
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
            $months = $this->Hcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yir,
                        'Hcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['c_jan'];
            $mostrar_total_jan2 = $months[0][0]['em_jan'];
            $mostrar_total_jan3 = $months[0][0]['ex_jan'];
            $mostrar_total_feb1 = $months[0][0]['c_feb'];
            $mostrar_total_feb2 = $months[0][0]['em_feb'];
            $mostrar_total_feb3 = $months[0][0]['ex_feb'];
            $mostrar_total_mar1 = $months[0][0]['c_mar'];
            $mostrar_total_mar2 = $months[0][0]['em_mar'];
            $mostrar_total_mar3 = $months[0][0]['ex_mar'];
            $mostrar_total_apr1 = $months[0][0]['c_apr'];
            $mostrar_total_apr2 = $months[0][0]['em_apr'];
            $mostrar_total_apr3 = $months[0][0]['ex_apr'];
            $mostrar_total_may1 = $months[0][0]['c_may'];
            $mostrar_total_may2 = $months[0][0]['em_may'];
            $mostrar_total_may3 = $months[0][0]['ex_may'];
            $mostrar_total_jun1 = $months[0][0]['c_jun'];
            $mostrar_total_jun2 = $months[0][0]['em_jun'];
            $mostrar_total_jun3 = $months[0][0]['ex_jun'];
            $mostrar_total_jul1 = $months[0][0]['c_jul'];
            $mostrar_total_jul2 = $months[0][0]['em_jul'];
            $mostrar_total_jul3 = $months[0][0]['ex_jul'];
            $mostrar_total_aug1 = $months[0][0]['c_aug'];
            $mostrar_total_aug2 = $months[0][0]['em_aug'];
            $mostrar_total_aug3 = $months[0][0]['ex_aug'];
            $mostrar_total_sep1 = $months[0][0]['c_sep'];
            $mostrar_total_sep2 = $months[0][0]['em_sep'];
            $mostrar_total_sep3 = $months[0][0]['ex_sep'];
            $mostrar_total_oct1 = $months[0][0]['c_oct'];
            $mostrar_total_oct2 = $months[0][0]['em_oct'];
            $mostrar_total_oct3 = $months[0][0]['ex_oct'];
            $mostrar_total_nov1 = $months[0][0]['c_nov'];
            $mostrar_total_nov2 = $months[0][0]['em_nov'];
            $mostrar_total_nov3 = $months[0][0]['ex_nov'];
            $mostrar_total_dec1 = $months[0][0]['c_decem'];
            $mostrar_total_dec2 = $months[0][0]['em_decem'];
            $mostrar_total_dec3 = $months[0][0]['ex_decem'];
            $this->set(array('c_jan' => $mostrar_total_jan1, 'c_feb' => $mostrar_total_feb1, 'c_mar' => $mostrar_total_mar1, 'c_apr' => $mostrar_total_apr1, 'c_may' => $mostrar_total_may1, 'c_jun' => $mostrar_total_jun1, 'c_jul' => $mostrar_total_jul1, 'c_aug' => $mostrar_total_aug1, 'c_sep' => $mostrar_total_sep1, 'c_oct' => $mostrar_total_oct1, 'c_nov' => $mostrar_total_nov1, 'c_decem' => $mostrar_total_dec1, 'em_jan' => $mostrar_total_jan2, 'em_feb' => $mostrar_total_feb2, 'em_mar' => $mostrar_total_mar2, 'em_apr' => $mostrar_total_apr2, 'em_may' => $mostrar_total_may2, 'em_jun' => $mostrar_total_jun2, 'em_jul' => $mostrar_total_jul2, 'em_aug' => $mostrar_total_aug2, 'em_sep' => $mostrar_total_sep2, 'em_oct' => $mostrar_total_oct2, 'em_nov' => $mostrar_total_nov2, 'em_decem' => $mostrar_total_dec2,'ex_jan' => $mostrar_total_jan3, 'ex_feb' => $mostrar_total_feb3, 'ex_mar' => $mostrar_total_mar3, 'ex_apr' => $mostrar_total_apr3, 'ex_may' => $mostrar_total_may3, 'ex_jun' => $mostrar_total_jun3, 'ex_jul' => $mostrar_total_jul3, 'ex_aug' => $mostrar_total_aug3, 'ex_sep' => $mostrar_total_sep3, 'ex_oct' => $mostrar_total_oct3, 'ex_nov' => $mostrar_total_nov3, 'ex_decem' => $mostrar_total_dec3));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                     $months[0][0]['em_jan'] + $months[0][0]['em_feb'] + $months[0][0]['em_mar'] +
                     $months[0][0]['ex_jan'] + $months[0][0]['ex_feb'] + $months[0][0]['ex_mar'];
            $trim2 = $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                     $months[0][0]['em_apr'] + $months[0][0]['em_may'] + $months[0][0]['em_jun'] +
                     $months[0][0]['ex_apr'] + $months[0][0]['ex_may'] + $months[0][0]['ex_jun'];
            $trim3 = $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                     $months[0][0]['em_jul'] + $months[0][0]['em_aug'] + $months[0][0]['em_sep'] +
                     $months[0][0]['ex_jul'] + $months[0][0]['ex_aug'] + $months[0][0]['ex_sep'];
            $trim4 = $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] + 
                     $months[0][0]['em_oct'] + $months[0][0]['em_nov'] + $months[0][0]['em_decem'] +
                     $months[0][0]['ex_oct'] + $months[0][0]['ex_nov'] + $months[0][0]['ex_decem'];

            $this->loadModel('Healingcare');
            $this->Healingcare->query("UPDATE healingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healingcares.regions_id = $region && healingcares.year = $yir");
        } else {
            // Hcxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Hcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yer,
                        'Hcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['c_jan'];
            $mostrar_total_jan2 = $months[0][0]['em_jan'];
            $mostrar_total_jan3 = $months[0][0]['ex_jan'];
            $mostrar_total_feb1 = $months[0][0]['c_feb'];
            $mostrar_total_feb2 = $months[0][0]['em_feb'];
            $mostrar_total_feb3 = $months[0][0]['ex_feb'];
            $mostrar_total_mar1 = $months[0][0]['c_mar'];
            $mostrar_total_mar2 = $months[0][0]['em_mar'];
            $mostrar_total_mar3 = $months[0][0]['ex_mar'];
            $mostrar_total_apr1 = $months[0][0]['c_apr'];
            $mostrar_total_apr2 = $months[0][0]['em_apr'];
            $mostrar_total_apr3 = $months[0][0]['ex_apr'];
            $mostrar_total_may1 = $months[0][0]['c_may'];
            $mostrar_total_may2 = $months[0][0]['em_may'];
            $mostrar_total_may3 = $months[0][0]['ex_may'];
            $mostrar_total_jun1 = $months[0][0]['c_jun'];
            $mostrar_total_jun2 = $months[0][0]['em_jun'];
            $mostrar_total_jun3 = $months[0][0]['ex_jun'];
            $mostrar_total_jul1 = $months[0][0]['c_jul'];
            $mostrar_total_jul2 = $months[0][0]['em_jul'];
            $mostrar_total_jul3 = $months[0][0]['ex_jul'];
            $mostrar_total_aug1 = $months[0][0]['c_aug'];
            $mostrar_total_aug2 = $months[0][0]['em_aug'];
            $mostrar_total_aug3 = $months[0][0]['ex_aug'];
            $mostrar_total_sep1 = $months[0][0]['c_sep'];
            $mostrar_total_sep2 = $months[0][0]['em_sep'];
            $mostrar_total_sep3 = $months[0][0]['ex_sep'];
            $mostrar_total_oct1 = $months[0][0]['c_oct'];
            $mostrar_total_oct2 = $months[0][0]['em_oct'];
            $mostrar_total_oct3 = $months[0][0]['ex_oct'];
            $mostrar_total_nov1 = $months[0][0]['c_nov'];
            $mostrar_total_nov2 = $months[0][0]['em_nov'];
            $mostrar_total_nov3 = $months[0][0]['ex_nov'];
            $mostrar_total_dec1 = $months[0][0]['c_decem'];
            $mostrar_total_dec2 = $months[0][0]['em_decem'];
            $mostrar_total_dec3 = $months[0][0]['ex_decem'];
            $this->set(array('c_jan' => $mostrar_total_jan1, 'c_feb' => $mostrar_total_feb1, 'c_mar' => $mostrar_total_mar1, 'c_apr' => $mostrar_total_apr1, 'c_may' => $mostrar_total_may1, 'c_jun' => $mostrar_total_jun1, 'c_jul' => $mostrar_total_jul1, 'c_aug' => $mostrar_total_aug1, 'c_sep' => $mostrar_total_sep1, 'c_oct' => $mostrar_total_oct1, 'c_nov' => $mostrar_total_nov1, 'c_decem' => $mostrar_total_dec1, 'em_jan' => $mostrar_total_jan2, 'em_feb' => $mostrar_total_feb2, 'em_mar' => $mostrar_total_mar2, 'em_apr' => $mostrar_total_apr2, 'em_may' => $mostrar_total_may2, 'em_jun' => $mostrar_total_jun2, 'em_jul' => $mostrar_total_jul2, 'em_aug' => $mostrar_total_aug2, 'em_sep' => $mostrar_total_sep2, 'em_oct' => $mostrar_total_oct2, 'em_nov' => $mostrar_total_nov2, 'em_decem' => $mostrar_total_dec2, 'ex_jan' => $mostrar_total_jan3, 'ex_feb' => $mostrar_total_feb3, 'ex_mar' => $mostrar_total_mar3, 'ex_apr' => $mostrar_total_apr3, 'ex_may' => $mostrar_total_may3, 'ex_jun' => $mostrar_total_jun3, 'ex_jul' => $mostrar_total_jul3, 'ex_aug' => $mostrar_total_aug3, 'ex_sep' => $mostrar_total_sep3, 'ex_oct' => $mostrar_total_oct3, 'ex_nov' => $mostrar_total_nov3, 'ex_decem' => $mostrar_total_dec3));


            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                     $months[0][0]['em_jan'] + $months[0][0]['em_feb'] + $months[0][0]['em_mar'] +
                     $months[0][0]['ex_jan'] + $months[0][0]['ex_feb'] + $months[0][0]['ex_mar'];
            $trim2 = $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                     $months[0][0]['em_apr'] + $months[0][0]['em_may'] + $months[0][0]['em_jun'] +
                     $months[0][0]['ex_apr'] + $months[0][0]['ex_may'] + $months[0][0]['ex_jun'];
            $trim3 = $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                     $months[0][0]['em_jul'] + $months[0][0]['em_aug'] + $months[0][0]['em_sep'] +
                     $months[0][0]['ex_jul'] + $months[0][0]['ex_aug'] + $months[0][0]['ex_sep'];
            $trim4 = $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] + 
                     $months[0][0]['em_oct'] + $months[0][0]['em_nov'] + $months[0][0]['em_decem'] +
                     $months[0][0]['ex_oct'] + $months[0][0]['ex_nov'] + $months[0][0]['ex_decem'];

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
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
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
