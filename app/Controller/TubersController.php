<?php
App::uses('AppController', 'Controller');
/**
 * Tubers Controller
 *
 * @property tuber $Tuber
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TubersController extends AppController
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
                'tuber.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'tuber.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'tuber.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Tuber->recursive = 0;
        $this->set('tubers', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Tuber->find('all', array(
                'fields' => array('SUM(Tuber.trimester1) as t1, SUM(Tuber.trimester2) as t2, SUM(Tuber.trimester3) as t3, SUM(Tuber.trimester4) as t4'),
                'conditions' => array('Tuber.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Tuber.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Tuber->find('all', array(
                'fields' => array('SUM(Tuber.trimester1) as t1, SUM(Tuber.trimester2) as t2, SUM(Tuber.trimester3) as t3, SUM(Tuber.trimester4) as t4'),
                'conditions' => array('Tuber.year =' => 2021)
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
        if (!$this->Tuber->exists($id)) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        $options = array('conditions' => array('Tuber.' . $this->Tuber->primaryKey => $id));
        $this->set('tuber', $this->Tuber->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Tuber->create();
            if ($this->Tuber->save($this->request->data)) {
                $this->Flash->success(__('The tuber has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The tuber could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Tuber->Region->find('list');
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
        if (!$this->Tuber->exists($id)) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tuber->save($this->request->data)) {
                $this->Flash->success(__('The tuber has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The tuber could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Tuber.' . $this->Tuber->primaryKey => $id));
            $this->request->data = $this->Tuber->find('first', $options);
        }
        $regions = $this->Tuber->Region->find('list');
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
        $this->Tuber->id = $id;
        if (!$this->Tuber->exists()) {
            throw new NotFoundException(__('Invalid tuber'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Tuber->delete()) {
            $this->Flash->success(__('The tuber has been deleted.'));
        } else {
            $this->Flash->error(__('The tuber could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
<<<<<<< HEAD
    public function chart($yer)
    {
        $this->set(array('yer' => $yer));

        $reg = $this->Tuber->find('all', array(
            'fields' => array('Tuber.trimester1 as t1, Tuber.trimester2 as t2, Tuber.trimester3 as t3, Tuber.trimester4 as t4'),
            'conditions' => array('Tuber.year =' => $yer, 'Tuber.regions_id =' => 1)
        ));

        $reg2 = $this->Tuber->find('all', array(
            'fields' => array('Tuber.trimester1 as t1, Tuber.trimester2 as t2, Tuber.trimester3 as t3, Tuber.trimester4 as t4'),
            'conditions' => array('Tuber.year =' => $yer, 'Tuber.regions_id =' => 2)
        ));
        $reg3 = $this->Tuber->find('all', array(
            'fields' => array('Tuber.trimester1 as t1, Tuber.trimester2 as t2, Tuber.trimester3 as t3, Tuber.trimester4 as t4'),
            'conditions' => array('Tuber.year =' => $yer, 'Tuber.regions_id =' => 3)
        ));
        $reg4 = $this->Tuber->find('all', array(
            'fields' => array('Tuber.trimester1 as t1, Tuber.trimester2 as t2, Tuber.trimester3 as t3, Tuber.trimester4 as t4'),
            'conditions' => array('Tuber.year =' => $yer, 'Tuber.regions_id =' => 4)
        ));
        $reg5 = $this->Tuber->find('all', array(
            'fields' => array('Tuber.trimester1 as t1, Tuber.trimester2 as t2, Tuber.trimester3 as t3, Tuber.trimester4 as t4'),
            'conditions' => array('Tuber.year =' => $yer, 'Tuber.regions_id =' => 5)
        ));

        $tot_occ_1 = $reg[0]['Tuber']['t1'];
        $tot_occ_2 = $reg[0]['Tuber']['t2'];
        $tot_occ_3 = $reg[0]['Tuber']['t3'];
        $tot_occ_4 = $reg[0]['Tuber']['t4'];

        $tot_cen_1 = $reg2[0]['Tuber']['t1'];
        $tot_cen_2 = $reg2[0]['Tuber']['t2'];
        $tot_cen_3 = $reg2[0]['Tuber']['t3'];
        $tot_cen_4 = $reg2[0]['Tuber']['t4'];

        $tot_met_1 = $reg3[0]['Tuber']['t1'];
        $tot_met_2 = $reg3[0]['Tuber']['t2'];
        $tot_met_3 = $reg3[0]['Tuber']['t3'];
        $tot_met_4 = $reg3[0]['Tuber']['t4'];

        $tot_par_1 = $reg4[0]['Tuber']['t1'];
        $tot_par_2 = $reg4[0]['Tuber']['t2'];
        $tot_par_3 = $reg4[0]['Tuber']['t3'];
        $tot_par_4 = $reg4[0]['Tuber']['t4'];

        $tot_ori_1 = $reg5[0]['Tuber']['t1'];
        $tot_ori_2 = $reg5[0]['Tuber']['t2'];
        $tot_ori_3 = $reg5[0]['Tuber']['t3'];
        $tot_ori_4 = $reg5[0]['Tuber']['t4'];
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
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
}
