<?php
App::uses('AppController', 'Controller');
/**
 * Diseases Controller
 *
 * @property disease $Disease
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DiseasesController extends AppController
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
    public function index()
    {
        // metodo para filtrar por fechas
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $conditions[] = [
                'disease.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'disease.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'disease.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Disease->recursive = 0;
        $this->set('diseases', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Disease->find('all', array(
                'fields' => array('SUM(Disease.trimester1) as t1, SUM(Disease.trimester2) as t2, SUM(Disease.trimester3) as t3, SUM(Disease.trimester4) as t4'),
                'conditions' => array('Disease.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Disease.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Disease->find('all', array(
                'fields' => array('SUM(Disease.trimester1) as t1, SUM(Disease.trimester2) as t2, SUM(Disease.trimester3) as t3, SUM(Disease.trimester4) as t4'),
                'conditions' => array('Disease.year =' => 2021)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
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
        if (!$this->Disease->exists($id)) {
            throw new NotFoundException(__('Invalid disease'));
        }
        $options = array('conditions' => array('Disease.' . $this->Disease->primaryKey => $id));
        $this->set('disease', $this->Disease->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Disease->create();
            if ($this->Disease->save($this->request->data)) {
                $this->Flash->success(__('The disease has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The disease could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Disease->Region->find('list');
        $this->set(compact('regions'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->Disease->exists($id)) {
            throw new NotFoundException(__('Invalid disease'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Disease->save($this->request->data)) {
                $this->Flash->success(__('The disease has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The disease could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Disease.' . $this->Disease->primaryKey => $id));
            $this->request->data = $this->Disease->find('first', $options);
        }
        $regions = $this->Disease->Region->find('list');
        $this->set(compact('regions'));
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
        $this->Disease->id = $id;
        if (!$this->Disease->exists()) {
            throw new NotFoundException(__('Invalid disease'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Disease->delete()) {
            $this->Flash->success(__('The disease has been deleted.'));
        } else {
            $this->Flash->error(__('The disease could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    public function chart($yer)
    {
        $this->set(array('yer' => $yer));

        $reg = $this->Disease->find('all', array(
            'fields' => array('Disease.trimester1 as t1, Disease.trimester2 as t2, Disease.trimester3 as t3, Disease.trimester4 as t4'),
            'conditions' => array('Disease.year =' => $yer, 'Disease.regions_id =' => 1)
        ));

        $reg2 = $this->Disease->find('all', array(
            'fields' => array('Disease.trimester1 as t1, Disease.trimester2 as t2, Disease.trimester3 as t3, Disease.trimester4 as t4'),
            'conditions' => array('Disease.year =' => $yer, 'Disease.regions_id =' => 2)
        ));
        $reg3 = $this->Disease->find('all', array(
            'fields' => array('Disease.trimester1 as t1, Disease.trimester2 as t2, Disease.trimester3 as t3, Disease.trimester4 as t4'),
            'conditions' => array('Disease.year =' => $yer, 'Disease.regions_id =' => 3)
        ));
        $reg4 = $this->Disease->find('all', array(
            'fields' => array('Disease.trimester1 as t1, Disease.trimester2 as t2, Disease.trimester3 as t3, Disease.trimester4 as t4'),
            'conditions' => array('Disease.year =' => $yer, 'Disease.regions_id =' => 4)
        ));
        $reg5 = $this->Disease->find('all', array(
            'fields' => array('Disease.trimester1 as t1, Disease.trimester2 as t2, Disease.trimester3 as t3, Disease.trimester4 as t4'),
            'conditions' => array('Disease.year =' => $yer, 'Disease.regions_id =' => 5)
        ));

        $tot_occ_1 = $reg[0]['Disease']['t1'];
        $tot_occ_2 = $reg[0]['Disease']['t2'];
        $tot_occ_3 = $reg[0]['Disease']['t3'];
        $tot_occ_4 = $reg[0]['Disease']['t4'];

        $tot_cen_1 = $reg2[0]['Disease']['t1'];
        $tot_cen_2 = $reg2[0]['Disease']['t2'];
        $tot_cen_3 = $reg2[0]['Disease']['t3'];
        $tot_cen_4 = $reg2[0]['Disease']['t4'];

        $tot_met_1 = $reg3[0]['Disease']['t1'];
        $tot_met_2 = $reg3[0]['Disease']['t2'];
        $tot_met_3 = $reg3[0]['Disease']['t3'];
        $tot_met_4 = $reg3[0]['Disease']['t4'];

        $tot_par_1 = $reg4[0]['Disease']['t1'];
        $tot_par_2 = $reg4[0]['Disease']['t2'];
        $tot_par_3 = $reg4[0]['Disease']['t3'];
        $tot_par_4 = $reg4[0]['Disease']['t4'];

        $tot_ori_1 = $reg5[0]['Disease']['t1'];
        $tot_ori_2 = $reg5[0]['Disease']['t2'];
        $tot_ori_3 = $reg5[0]['Disease']['t3'];
        $tot_ori_4 = $reg5[0]['Disease']['t4'];
        //**********************************
        //Totales por trimestres
        $tot_trim1 = $tot_occ_1 + $tot_cen_1 + $tot_met_1 + $tot_par_1 + $tot_ori_1;
        $tot_trim2 = $tot_occ_2 + $tot_cen_2 + $tot_met_2 + $tot_par_2 + $tot_ori_2;
        $tot_trim3 = $tot_occ_3 + $tot_cen_3 + $tot_met_3 + $tot_par_3 + $tot_ori_3;
        $tot_trim4 = $tot_occ_4 + $tot_cen_4 + $tot_met_4 + $tot_par_4 + $tot_ori_4;

        $tot_trim = array($tot_trim1, $tot_trim2, $tot_trim3, $tot_trim4);

        // *********************************
        //totales por region
        $regocc = array(intval($tot_occ_1), intval($tot_occ_2), intval($tot_occ_3), intval($tot_occ_4));
        $regcen = array(intval($tot_cen_1), intval($tot_cen_2), intval($tot_cen_3), intval($tot_cen_4));
        $regmet = array(intval($tot_met_1), intval($tot_met_2), intval($tot_met_3), intval($tot_met_4));
        $regpar = array(intval($tot_par_1), intval($tot_par_2), intval($tot_par_3), intval($tot_par_4));
        $regori = array(intval($tot_ori_1), intval($tot_ori_2), intval($tot_ori_3), intval($tot_ori_4));


        // suma
        $sum1 = $tot_occ_1 + $tot_occ_2 + $tot_occ_3 + $tot_occ_4;

        $sum2 = $tot_cen_1 + $tot_cen_2 + $tot_cen_3 + $tot_cen_4;

        $sum3 = $tot_met_1 + $tot_met_2 + $tot_met_3 + $tot_met_4;

        $sum4 = $tot_par_1 + $tot_par_2 + $tot_par_3 + $tot_par_4;

        $sum5 = $tot_ori_1 + $tot_ori_2 + $tot_ori_3 + $tot_ori_4;

        // promedio
        $prom1 = ($tot_occ_1 + $tot_cen_1 + $tot_met_1 + $tot_par_1 + $tot_ori_1) / 5;
        $prom2 = ($tot_occ_2 + $tot_cen_2 + $tot_met_2 + $tot_par_2 + $tot_ori_2) / 5;
        $prom3 = ($tot_occ_3 + $tot_cen_3 + $tot_met_3 + $tot_par_3 + $tot_ori_3) / 5;
        $prom4 = ($tot_occ_4 + $tot_cen_4 + $tot_met_4 + $tot_par_4 + $tot_ori_4) / 5;

        $avgData = array($prom1, $prom2, $prom3, $prom4);

        $this->set(array('regocc' => $regocc, 'regcen' => $regcen, 'regmet' => $regmet, 'regpar' => $regpar, 'regori' => $regori, 'avgData' => $avgData, 'tot_trim' => $tot_trim, 'sum1' => $sum1, 'sum2' => $sum2, 'sum3' => $sum3, 'sum4' => $sum4, 'sum5' => $sum5));
    }
}
