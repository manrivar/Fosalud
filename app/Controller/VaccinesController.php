<?php
App::uses('AppController', 'Controller');
/**
 * Talks Controller
 *
 * @property Vaccine $Vaccine
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class VaccinesController extends AppController
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
                'vaccine.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'vaccine.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'vaccine.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Vaccine->recursive = 0;
        $this->set('vaccines', $this->Paginator->paginate());

        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Vaccine->find('all', array(
                'fields' => array('SUM(Vaccine.trimester1) as t1, SUM(Vaccine.trimester2) as t2, SUM(Vaccine.trimester3) as t3, SUM(Vaccine.trimester4) as t4'),
                'conditions' => array('Vaccine.year =' => $yir)
            ));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        } else {
            // Vaccine.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Vaccine->find('all', array(
                'fields' => array('SUM(Vaccine.trimester1) as t1, SUM(Vaccine.trimester2) as t2, SUM(Vaccine.trimester3) as t3, SUM(Vaccine.trimester4) as t4'),
                'conditions' => array('Vaccine.year =' => 2021)
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
        if (!$this->Vaccine->exists($id)) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        $options = array('conditions' => array('Vaccine.' . $this->Vaccine->primaryKey => $id));
        $this->set('vaccine', $this->Vaccine->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Vaccine->create();
            if ($this->Vaccine->save($this->request->data)) {
                $this->Flash->success(__('The vaccine has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Vaccine->Region->find('list');
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
        if (!$this->Vaccine->exists($id)) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Vaccine->save($this->request->data)) {
                $this->Flash->success(__('The vaccine has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Vaccine.' . $this->Vaccine->primaryKey => $id));
            $this->request->data = $this->Vaccine->find('first', $options);
        }
        $regions = $this->Vaccine->Region->find('list');
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
        $this->Vaccine->id = $id;
        if (!$this->Vaccine->exists()) {
            throw new NotFoundException(__('Invalid vaccine'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Vaccine->delete()) {
            $this->Flash->success(__('The vaccine has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccine could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
<<<<<<< HEAD

    public function chart($yer)
    {
        $this->set(array('yer' => $yer));

        $reg = $this->Vaccine->find('all', array(
                'fields' => array('Vaccine.trimester1 as t1, Vaccine.trimester2 as t2, Vaccine.trimester3 as t3, Vaccine.trimester4 as t4'),
                'conditions' => array('Vaccine.year =' => $yer, 'Vaccine.regions_id =' => 1)
            ));

        $reg2 = $this->Vaccine->find('all', array(
            'fields' => array('Vaccine.trimester1 as t1, Vaccine.trimester2 as t2, Vaccine.trimester3 as t3, Vaccine.trimester4 as t4'),
            'conditions' => array('Vaccine.year =' => $yer, 'Vaccine.regions_id =' => 2)
        ));
        $reg3 = $this->Vaccine->find('all', array(
            'fields' => array('Vaccine.trimester1 as t1, Vaccine.trimester2 as t2, Vaccine.trimester3 as t3, Vaccine.trimester4 as t4'),
            'conditions' => array('Vaccine.year =' => $yer, 'Vaccine.regions_id =' => 3)
        ));
        $reg4 = $this->Vaccine->find('all', array(
            'fields' => array('Vaccine.trimester1 as t1, Vaccine.trimester2 as t2, Vaccine.trimester3 as t3, Vaccine.trimester4 as t4'),
            'conditions' => array('Vaccine.year =' => $yer, 'Vaccine.regions_id =' => 4)
        ));
        $reg5 = $this->Vaccine->find('all', array(
            'fields' => array('Vaccine.trimester1 as t1, Vaccine.trimester2 as t2, Vaccine.trimester3 as t3, Vaccine.trimester4 as t4'),
            'conditions' => array('Vaccine.year =' => $yer, 'Vaccine.regions_id =' => 5)
        ));

        $tot_occ_1 = $reg[0]['Vaccine']['t1'];
        $tot_occ_2 = $reg[0]['Vaccine']['t2'];
        $tot_occ_3 = $reg[0]['Vaccine']['t3'];
        $tot_occ_4 = $reg[0]['Vaccine']['t4'];

        $tot_cen_1 = $reg2[0]['Vaccine']['t1'];
        $tot_cen_2 = $reg2[0]['Vaccine']['t2'];
        $tot_cen_3 = $reg2[0]['Vaccine']['t3'];
        $tot_cen_4 = $reg2[0]['Vaccine']['t4'];

        $tot_met_1 = $reg3[0]['Vaccine']['t1'];
        $tot_met_2 = $reg3[0]['Vaccine']['t2'];
        $tot_met_3 = $reg3[0]['Vaccine']['t3'];
        $tot_met_4 = $reg3[0]['Vaccine']['t4'];

        $tot_par_1 = $reg4[0]['Vaccine']['t1'];
        $tot_par_2 = $reg4[0]['Vaccine']['t2'];
        $tot_par_3 = $reg4[0]['Vaccine']['t3'];
        $tot_par_4 = $reg4[0]['Vaccine']['t4'];

        $tot_ori_1 = $reg5[0]['Vaccine']['t1'];
        $tot_ori_2 = $reg5[0]['Vaccine']['t2'];
        $tot_ori_3 = $reg5[0]['Vaccine']['t3'];
        $tot_ori_4 = $reg5[0]['Vaccine']['t4'];
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
