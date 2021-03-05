<?php
App::uses('AppController', 'Controller');
/**
 * Healingcares Controller
 *
 * @property Healingcare $Healingcare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HealingcaresController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $name = 'Healingcares';
    public $helpers = array('Highcharts.Highcharts');
    public $uses = array();
    public $layout = 'default';
    public $components = array('Paginator', 'Session', 'Flash', 'Highcharts.Highcharts');

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
                'healingcare.year =' => $yir
            ];
            $this->paginate = [
                'conditions' => [
                    'healingcare.year =' => $yir
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $yer = $this->paginate = [
                'conditions' => [
                    'healingcare.year =' => '2021'
                ]
            ];
            $this->set(array('yer' => '2021'));
        }

        // index
        $this->Healingcare->recursive = 0;
        $this->set('healingcares', $this->Paginator->paginate());
        
        //***************query para suma de totales en el footer de la tabla*************** 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $trim1 = $this->Healingcare->find('all', array(
                'fields' => array('SUM(Healingcare.trimester1) as t1, SUM(Healingcare.trimester2) as t2, SUM(Healingcare.trimester3) as t3, SUM(Healingcare.trimester4) as t4'),
                'conditions' => array('Healingcare.year =' => $yir)));
            $mostrar_total_t1 = $trim1[0][0]['t1'];
            $mostrar_total_t2 = $trim1[0][0]['t2'];
            $mostrar_total_t3 = $trim1[0][0]['t3'];
            $mostrar_total_t4 = $trim1[0][0]['t4'];
            $this->set(array('trim1' => $mostrar_total_t1, 'trim2' => $mostrar_total_t2, 'trim3' => $mostrar_total_t3, 'trim4' => $mostrar_total_t4));
        }
        else {
            // Healingcare.year debe ser cambiado al año actual, igual que en el filtro
            $trim1 = $this->Healingcare->find('all', array(
                'fields' => array('SUM(Healingcare.trimester1) as t1, SUM(Healingcare.trimester2) as t2, SUM(Healingcare.trimester3) as t3, SUM(Healingcare.trimester4) as t4'),
                'conditions' => array('Healingcare.year =' => 2021)
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
        if (!$this->Healingcare->exists($id)) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        $options = array('conditions' => array('Healingcare.' . $this->Healingcare->primaryKey => $id));
        $this->set('healingcare', $this->Healingcare->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Healingcare->create();
            if ($this->Healingcare->save($this->request->data)) {
                $this->Flash->success(__('The healingcare has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healingcare could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Healingcare->Region->find('list');
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
        if (!$this->Healingcare->exists($id)) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Healingcare->save($this->request->data)) {
                $this->Flash->success(__('The healingcare has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The healingcare could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Healingcare.' . $this->Healingcare->primaryKey => $id));
            $this->request->data = $this->Healingcare->find('first', $options);
        }
        $regions = $this->Healingcare->Region->find('list');
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
        $this->Healingcare->id = $id;
        if (!$this->Healingcare->exists()) {
            throw new NotFoundException(__('Invalid healingcare'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Healingcare->delete()) {
            $this->Flash->success(__('The healingcare has been deleted.'));
        } else {
            $this->Flash->error(__('The healingcare could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    public function chart($yer)
    {
        $this->set(array('yer' => $yer));

        $reg = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 1)
        ));
        $reg2 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 2)
        ));
        $reg3 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 3)
        ));
        $reg4 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 4)
        ));
        $reg5 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 5)
        ));

        $tot_occ_1 = $reg[0]['Healingcare']['t1'];
        $tot_occ_2 = $reg[0]['Healingcare']['t2'];
        $tot_occ_3 = $reg[0]['Healingcare']['t3'];
        $tot_occ_4 = $reg[0]['Healingcare']['t4'];

        $tot_cen_1 = $reg2[0]['Healingcare']['t1'];
        $tot_cen_2 = $reg2[0]['Healingcare']['t2'];
        $tot_cen_3 = $reg2[0]['Healingcare']['t3'];
        $tot_cen_4 = $reg2[0]['Healingcare']['t4'];

        $tot_met_1 = $reg3[0]['Healingcare']['t1'];
        $tot_met_2 = $reg3[0]['Healingcare']['t2'];
        $tot_met_3 = $reg3[0]['Healingcare']['t3'];
        $tot_met_4 = $reg3[0]['Healingcare']['t4'];

        $tot_par_1 = $reg4[0]['Healingcare']['t1'];
        $tot_par_2 = $reg4[0]['Healingcare']['t2'];
        $tot_par_3 = $reg4[0]['Healingcare']['t3'];
        $tot_par_4 = $reg4[0]['Healingcare']['t4'];

        $tot_ori_1 = $reg5[0]['Healingcare']['t1'];
        $tot_ori_2 = $reg5[0]['Healingcare']['t2'];
        $tot_ori_3 = $reg5[0]['Healingcare']['t3'];
        $tot_ori_4 = $reg5[0]['Healingcare']['t4'];
    
        // *********************************
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
        $prom1 = ($tot_occ_1 + $tot_cen_1 + $tot_met_1 + $tot_par_1 + $tot_ori_1)/5;
        $prom2 = ($tot_occ_2 + $tot_cen_2 + $tot_met_2 + $tot_par_2 + $tot_ori_2) / 5;
        $prom3 = ($tot_occ_3 + $tot_cen_3 + $tot_met_3 + $tot_par_3 + $tot_ori_3) / 5;
        $prom4 = ($tot_occ_4 + $tot_cen_4 + $tot_met_4 + $tot_par_4 + $tot_ori_4) / 5;

        $avgData = array($prom1, $prom2, $prom3, $prom4);

        $pieData = array(
            array(
                'name' => 'Reg. Occidental',
                'y' => $sum1,
                'sliced' => false,
                'selected' => false
            ),
            array('Reg. Centro', $sum2),
            array('Reg. Metropolitana', $sum3),
            array('Reg. Paracentral', $sum4),
            array('Reg. Oriente', $sum5)
            
        );

        $chartName = 'Healingcares';

        $mychart = $this->Highcharts->create($chartName, 'column');

        $this->Highcharts->setChartParams(
            $chartName,
            array(
                'renderTo' => 'combowrapper', // div to display chart inside
                'chartWidth' => 1300,
                'chartHeight' => 700,
                'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
                'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
                'title' => 'Atenciones Curativas',
                'subtitle' => 'Fuente: Simmow, Vigepes, Seps, Vacunas, Silin, Desastres',
                'xAxisLabelsEnabled' => TRUE,
                'xAxisCategories' => array('Trimestre 1', 'Trimestre 2', 'Trimestre 3', 'Trimestre 4'),
                'yAxisTitleText' => 'Unidades',
                'yAxisMaxPadding' => '0.5',
                'enableAutoStep' => FALSE,
                'creditsEnabled' => FALSE
            )
        );

        $occSeries = $this->Highcharts->addChartSeries();
        $occSeries->type = 'column';
        $occSeries->addName('Region Occidental')
            ->addData($regocc);

        $cenSeries = $this->Highcharts->addChartSeries();
        $cenSeries->type = 'column';
        $cenSeries->addName('Region Centro')
            ->addData($regcen);

        $metSeries = $this->Highcharts->addChartSeries();
        $metSeries->type = 'column';
        $metSeries->addName('Region Metropolitana')
            ->addData($regmet);

        $parSeries = $this->Highcharts->addChartSeries();
        $parSeries->type = 'column';
        $parSeries->addName('Region Paracentral')
        ->addData($regpar);

        $oriSeries = $this->Highcharts->addChartSeries();
        $oriSeries->type = 'column';
        $oriSeries->addName('Region Oriente')
        ->addData($regori);

        $avgSeries = $this->Highcharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Promedio')
        ->addData($avgData);

        $pieSeries = $this->Highcharts->addChartSeries();
        $pieSeries->type = 'pie';
        $pieSeries->center = array(220, 70);

        $pieSeries->size = 230;
        $pieSeries->showInLegend = true;
        $pieSeries->addName('Total')->addData($pieData);

        

        $mychart->addSeries($occSeries);
        $mychart->addSeries($cenSeries);
        $mychart->addSeries($metSeries);
        $mychart->addSeries($parSeries);
        $mychart->addSeries($oriSeries);

        $mychart->addSeries($avgSeries);
        $mychart->addSeries($pieSeries);
        

        $this->set(compact('chartName'));

        // **********************************************************************************************************
        $chartData = array(
            array(
                'name' => 'Region Occidental',
                'y' => $sum1,
                'sliced' => false,
                'selected' => false
            ),
            array('Region Centro', $sum2),
            array('Region Metropolitana', $sum3),
            array('Region Paracentral', $sum4),
            array('Region Oriente', $sum5)
        );
        $dataLabelsFormat = <<<EOF
function(){return this.point.name; }
EOF;

        $tooltipFormatFunction = <<<EOF
function(){return this.y +'%'; }
EOF;
        $chartName2 = 'Pie 3D Chart';

        $pie3dChart = $this->Highcharts->create($chartName2, 'pie');

        $this->Highcharts->setChartParams(
            $chartName2,
            array(
                'renderTo' => 'pie3dwrapper', // div to display chart inside
                'chartWidth' => 500,
                'chartHeight' => 600,
                'options3d' => array(
                    'enabled' => true,
                    'alpha' => 45,
                    'beta' => 0,
                ),
                'plotOptionsPieDepth' => 45,   // this is needed for the 3D effect
                'plotOptionsShowInLegend' => true,
                'plotOptionsPieAllowPointSelect' => true,
                'plotOptionsPieDataLabelsEnabled' => true,
                'plotOptionsPieDataLabelsFormat' => $dataLabelsFormat,
                'tooltipFormatter' => $tooltipFormatFunction,
                'title' => 'Atenciones Curativas',
                'subtitle' => 'Fuente: Simmow, Vigepes, Seps, Vacunas, Silin, Desastres',
                'creditsEnabled' => false
            )
        );

        $series = $this->Highcharts->addChartSeries();

        $series->addName('Browser Share')
        ->addData($chartData);

        $pie3dChart->addSeries($series);

        $this->set(compact('chartName2'));
        //    ******************************************************
        $Reg = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 1)
        ));
        $Reg2 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 2)
        ));
        $Reg3 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 3)
        ));
        $Reg4 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 4)
        ));
        $Reg5 = $this->Healingcare->find('all', array(
            'fields' => array('Healingcare.trimester1 as t1, Healingcare.trimester2 as t2, Healingcare.trimester3 as t3, Healingcare.trimester4 as t4'),
            'conditions' => array('Healingcare.year =' => $yer, 'Healingcare.regions_id =' => 5)
        ));

        $Tot_occ_1 = $Reg[0]['Healingcare']['t1'];
        $Tot_occ_2 = $Reg[0]['Healingcare']['t2'];
        $Tot_occ_3 = $Reg[0]['Healingcare']['t3'];
        $Tot_occ_4 = $Reg[0]['Healingcare']['t4'];

        $Tot_cen_1 = $Reg2[0]['Healingcare']['t1'];
        $Tot_cen_2 = $Reg2[0]['Healingcare']['t2'];
        $Tot_cen_3 = $Reg2[0]['Healingcare']['t3'];
        $Tot_cen_4 = $Reg2[0]['Healingcare']['t4'];

        $Tot_met_1 = $Reg3[0]['Healingcare']['t1'];
        $Tot_met_2 = $Reg3[0]['Healingcare']['t2'];
        $Tot_met_3 = $Reg3[0]['Healingcare']['t3'];
        $Tot_met_4 = $Reg3[0]['Healingcare']['t4'];

        $Tot_par_1 = $Reg4[0]['Healingcare']['t1'];
        $Tot_par_2 = $Reg4[0]['Healingcare']['t2'];
        $Tot_par_3 = $Reg4[0]['Healingcare']['t3'];
        $Tot_par_4 = $Reg4[0]['Healingcare']['t4'];

        $Tot_ori_1 = $Reg5[0]['Healingcare']['t1'];
        $Tot_ori_2 = $Reg5[0]['Healingcare']['t2'];
        $Tot_ori_3 = $Reg5[0]['Healingcare']['t3'];
        $Tot_ori_4 = $Reg5[0]['Healingcare']['t4'];

        // *********************************
        $Regocc = array(intval($Tot_occ_1), intval($Tot_occ_2), intval($Tot_occ_3), intval($Tot_occ_4));
        $Regcen = array(intval($Tot_cen_1), intval($Tot_cen_2), intval($Tot_cen_3), intval($Tot_cen_4));
        $Regmet = array(intval($Tot_met_1), intval($Tot_met_2), intval($Tot_met_3), intval($Tot_met_4));
        $Regpar = array(intval($Tot_par_1), intval($Tot_par_2), intval($Tot_par_3), intval($Tot_par_4));
        $Regori = array(intval($Tot_ori_1), intval($Tot_ori_2), intval($Tot_ori_3), intval($Tot_ori_4));
        $chartName3 = 'Column 3D Chart';

        $Mychart = $this->Highcharts->create($chartName3, 'column');

        $this->Highcharts->setChartParams(
            $chartName3,
            array(
                'renderTo' => 'column3dwrapper', // div to display chart inside
                'chartWidth' => 700,
                'chartHeight' => 600,
                'title' => 'Atenciones Curativas',
                'subtitle' => 'Fuente: Simmow, Vigepes, Seps, Vacunas, Silin, Desastres',
                'options3d' => array(
                    'enabled' => true,
                    'alpha' => 15,
                    'beta' => 15,
                    'depth' => 50,
                    'viewDistance' => 25
                ),
                'xAxisLabelsEnabled' => true,
                'xAxisCategories' => array('Trimestre 1', 'Trimestre 2', 'Trimestre 3', 'Trimestre 4'),
                'yAxisTitleText' => 'Unidades',
                'enableAutoStep' => false,
                'creditsEnabled' => false,
            )
        );

        $OccSeries = $this->Highcharts->addChartSeries();
        $OccSeries->type = 'column';
        $OccSeries->addName('Region Occidental')
        ->addData($Regocc);

        $CenSeries = $this->Highcharts->addChartSeries();
        $CenSeries->type = 'column';
        $CenSeries->addName('Region Centro')
        ->addData($Regcen);

        $MetSeries = $this->Highcharts->addChartSeries();
        $MetSeries->type = 'column';
        $MetSeries->addName('Region Metropolitana')
        ->addData($Regmet);

        $ParSeries = $this->Highcharts->addChartSeries();
        $ParSeries->type = 'column';
        $ParSeries->addName('Region Paracentral')
        ->addData($Regpar);

        $OriSeries = $this->Highcharts->addChartSeries();
        $OriSeries->type = 'column';
        $OriSeries->addName('Region Oriente')
        ->addData($Regori);
        
        $Mychart->addSeries($OccSeries);
        $Mychart->addSeries($CenSeries);
        $Mychart->addSeries($MetSeries);
        $Mychart->addSeries($ParSeries);
        $Mychart->addSeries($OriSeries);

        $this->set(compact('chartName3'));
    }
}