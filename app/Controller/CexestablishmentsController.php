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
                    'fields' => array('SUM(Cexestablishment.cit_january) as ci_jan, SUM(Cexestablishment.cit_february) as ci_feb, SUM(Cexestablishment.cit_march) as ci_mar, SUM(Cexestablishment.cit_april) as ci_apr, SUM(Cexestablishment.cit_may) as ci_may, SUM(Cexestablishment.cit_june) as ci_jun, SUM(Cexestablishment.cit_july) as ci_jul,  SUM(Cexestablishment.cit_august) as ci_aug, SUM(Cexestablishment.cit_september) as ci_sep, SUM(Cexestablishment.cit_october) as ci_oct, SUM(Cexestablishment.cit_november) as ci_nov, SUM(Cexestablishment.cit_december) as ci_decem, SUM(Cexestablishment.mam_january) as mam_jan, SUM(Cexestablishment.mam_february) as mam_feb, SUM(Cexestablishment.mam_march) as mam_mar, SUM(Cexestablishment.mam_april) as mam_apr, SUM(Cexestablishment.mam_may) as mam_may, SUM(Cexestablishment.mam_june) as mam_jun, SUM(Cexestablishment.mam_july) as mam_jul,  SUM(Cexestablishment.mam_august) as mam_aug, SUM(Cexestablishment.mam_september) as mam_sep, SUM(Cexestablishment.mam_october) as mam_oct, SUM(Cexestablishment.mam_november) as mam_nov, SUM(Cexestablishment.mam_december) as mam_decem'),
                    'conditions' => array(
                        'Cexestablishment.year =' => $yir,
                        'Cexestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['ci_jan'];
            $mostrar_total_feb = $months[0][0]['ci_feb'];
            $mostrar_total_mar = $months[0][0]['ci_mar'];
            $mostrar_total_apr = $months[0][0]['ci_apr'];
            $mostrar_total_may = $months[0][0]['ci_may'];
            $mostrar_total_jun = $months[0][0]['ci_jun'];
            $mostrar_total_jul = $months[0][0]['ci_jul'];
            $mostrar_total_aug = $months[0][0]['ci_aug'];
            $mostrar_total_sep = $months[0][0]['ci_sep'];
            $mostrar_total_oct = $months[0][0]['ci_oct'];
            $mostrar_total_nov = $months[0][0]['ci_nov'];
            $mostrar_total_dec = $months[0][0]['ci_decem'];
            $mostrar_total_jan_m = $months[0][0]['mam_jan'];
            $mostrar_total_feb_m = $months[0][0]['mam_feb'];
            $mostrar_total_mar_m = $months[0][0]['mam_mar'];
            $mostrar_total_apr_m = $months[0][0]['mam_apr'];
            $mostrar_total_may_m = $months[0][0]['mam_may'];
            $mostrar_total_jun_m = $months[0][0]['mam_jun'];
            $mostrar_total_jul_m = $months[0][0]['mam_jul'];
            $mostrar_total_aug_m = $months[0][0]['mam_aug'];
            $mostrar_total_sep_m = $months[0][0]['mam_sep'];
            $mostrar_total_oct_m = $months[0][0]['mam_oct'];
            $mostrar_total_nov_m = $months[0][0]['mam_nov'];
            $mostrar_total_dec_m = $months[0][0]['mam_decem'];
            $this->set(array('ci_jan' => $mostrar_total_jan, 'ci_feb' => $mostrar_total_feb, 'ci_mar' => $mostrar_total_mar, 'ci_apr' => $mostrar_total_apr, 'ci_may' => $mostrar_total_may, 'ci_jun' => $mostrar_total_jun, 'ci_jul' => $mostrar_total_jul, 'ci_aug' => $mostrar_total_aug, 'ci_sep' => $mostrar_total_sep, 'ci_oct' => $mostrar_total_oct, 'ci_nov' => $mostrar_total_nov, 'ci_decem' => $mostrar_total_dec, 'mam_jan' => $mostrar_total_jan_m, 'mam_feb' => $mostrar_total_feb_m, 'mam_mar' => $mostrar_total_mar_m, 'mam_apr' => $mostrar_total_apr_m, 'mam_may' => $mostrar_total_may_m, 'mam_jun' => $mostrar_total_jun_m, 'mam_jul' => $mostrar_total_jul_m, 'mam_aug' => $mostrar_total_aug_m, 'mam_sep' => $mostrar_total_sep_m, 'mam_oct' => $mostrar_total_oct_m, 'mam_nov' => $mostrar_total_nov_m, 'mam_decem' => $mostrar_total_dec_m));

            // UPDATE PARA LA TABLA CLINICALEXAMS
            $trim1 = $months[0][0]['ci_jan'] + $months[0][0]['ci_feb'] + $months[0][0]['ci_mar'] +
                     $months[0][0]['mam_jan'] + $months[0][0]['mam_feb'] + $months[0][0]['mam_mar'];
            $trim2 = $months[0][0]['ci_apr'] + $months[0][0]['ci_may'] + $months[0][0]['ci_jun'] +
                     $months[0][0]['mam_apr'] + $months[0][0]['mam_may'] + $months[0][0]['mam_jun'];
            $trim3 = $months[0][0]['ci_jul'] + $months[0][0]['ci_aug'] + $months[0][0]['ci_sep'] +
                     $months[0][0]['mam_jul'] + $months[0][0]['mam_aug'] + $months[0][0]['mam_sep'];
            $trim4 = $months[0][0]['ci_oct'] + $months[0][0]['ci_nov'] + $months[0][0]['ci_decem'] +
                     $months[0][0]['mam_oct'] + $months[0][0]['mam_nov'] + $months[0][0]['mam_decem'];

            $this->loadModel('Clinicalexam');
            $this->Clinicalexam->query("UPDATE clinicalexams SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE clinicalexams.regions_id = $region && clinicalexams.year = $yir");

        } else {
            // Cexestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Cexestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Cexestablishment.cit_january) as ci_jan, SUM(Cexestablishment.cit_february) as ci_feb, SUM(Cexestablishment.cit_march) as ci_mar, SUM(Cexestablishment.cit_april) as ci_apr, SUM(Cexestablishment.cit_may) as ci_may, SUM(Cexestablishment.cit_june) as ci_jun, SUM(Cexestablishment.cit_july) as ci_jul,  SUM(Cexestablishment.cit_august) as ci_aug, SUM(Cexestablishment.cit_september) as ci_sep, SUM(Cexestablishment.cit_october) as ci_oct, SUM(Cexestablishment.cit_november) as ci_nov, SUM(Cexestablishment.cit_december) as ci_decem, SUM(Cexestablishment.mam_january) as mam_jan, SUM(Cexestablishment.mam_february) as mam_feb, SUM(Cexestablishment.mam_march) as mam_mar, SUM(Cexestablishment.mam_april) as mam_apr, SUM(Cexestablishment.mam_may) as mam_may, SUM(Cexestablishment.mam_june) as mam_jun, SUM(Cexestablishment.mam_july) as mam_jul,  SUM(Cexestablishment.mam_august) as mam_aug, SUM(Cexestablishment.mam_september) as mam_sep, SUM(Cexestablishment.mam_october) as mam_oct, SUM(Cexestablishment.mam_november) as mam_nov, SUM(Cexestablishment.mam_december) as mam_decem'),
                    'conditions' => array(
                        'Cexestablishment.year =' => $yer,
                        'Cexestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['ci_jan'];
            $mostrar_total_feb = $months[0][0]['ci_feb'];
            $mostrar_total_mar = $months[0][0]['ci_mar'];
            $mostrar_total_apr = $months[0][0]['ci_apr'];
            $mostrar_total_may = $months[0][0]['ci_may'];
            $mostrar_total_jun = $months[0][0]['ci_jun'];
            $mostrar_total_jul = $months[0][0]['ci_jul'];
            $mostrar_total_aug = $months[0][0]['ci_aug'];
            $mostrar_total_sep = $months[0][0]['ci_sep'];
            $mostrar_total_oct = $months[0][0]['ci_oct'];
            $mostrar_total_nov = $months[0][0]['ci_nov'];
            $mostrar_total_dec = $months[0][0]['ci_decem'];
            $mostrar_total_jan_m = $months[0][0]['mam_jan'];
            $mostrar_total_feb_m = $months[0][0]['mam_feb'];
            $mostrar_total_mar_m = $months[0][0]['mam_mar'];
            $mostrar_total_apr_m = $months[0][0]['mam_apr'];
            $mostrar_total_may_m = $months[0][0]['mam_may'];
            $mostrar_total_jun_m = $months[0][0]['mam_jun'];
            $mostrar_total_jul_m = $months[0][0]['mam_jul'];
            $mostrar_total_aug_m = $months[0][0]['mam_aug'];
            $mostrar_total_sep_m = $months[0][0]['mam_sep'];
            $mostrar_total_oct_m = $months[0][0]['mam_oct'];
            $mostrar_total_nov_m = $months[0][0]['mam_nov'];
            $mostrar_total_dec_m = $months[0][0]['mam_decem'];
            $this->set(array('ci_jan' => $mostrar_total_jan, 'ci_feb' => $mostrar_total_feb, 'ci_mar' => $mostrar_total_mar, 'ci_apr' => $mostrar_total_apr, 'ci_may' => $mostrar_total_may, 'ci_jun' => $mostrar_total_jun, 'ci_jul' => $mostrar_total_jul, 'ci_aug' => $mostrar_total_aug, 'ci_sep' => $mostrar_total_sep, 'ci_oct' => $mostrar_total_oct, 'ci_nov' => $mostrar_total_nov, 'ci_decem' => $mostrar_total_dec, 'mam_jan' => $mostrar_total_jan_m, 'mam_feb' => $mostrar_total_feb_m, 'mam_mar' => $mostrar_total_mar_m, 'mam_apr' => $mostrar_total_apr_m, 'mam_may' => $mostrar_total_may_m, 'mam_jun' => $mostrar_total_jun_m, 'mam_jul' => $mostrar_total_jul_m, 'mam_aug' => $mostrar_total_aug_m, 'mam_sep' => $mostrar_total_sep_m, 'mam_oct' => $mostrar_total_oct_m, 'mam_nov' => $mostrar_total_nov_m, 'mam_decem' => $mostrar_total_dec_m));

            // UPDATE PARA LA TABLA CLINICALEXAMS "El AÑO EN CLINICALEXAMS.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['ci_jan'] + $months[0][0]['ci_feb'] + $months[0][0]['ci_mar'] +
            $months[0][0]['mam_jan'] + $months[0][0]['mam_feb'] + $months[0][0]['mam_mar'];
            $trim2 = $months[0][0]['ci_apr'] + $months[0][0]['ci_may'] + $months[0][0]['ci_jun'] +
            $months[0][0]['mam_apr'] + $months[0][0]['mam_may'] + $months[0][0]['mam_jun'];
            $trim3 = $months[0][0]['ci_jul'] + $months[0][0]['ci_aug'] + $months[0][0]['ci_sep'] +
            $months[0][0]['mam_jul'] + $months[0][0]['mam_aug'] + $months[0][0]['mam_sep'];
            $trim4 = $months[0][0]['ci_oct'] + $months[0][0]['ci_nov'] + $months[0][0]['ci_decem'] +
            $months[0][0]['mam_oct'] + $months[0][0]['mam_nov'] + $months[0][0]['mam_decem'];

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
    //*****************************************/ prueba de excel *************************************************
    public function Autorizacion()
    {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 2) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }

    public function cargar_Evaluacion()
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Cexestablishment->Region->find('list');
        $this->set(compact('regions'));
    }

    public function cargar()
    {
        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Cexestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Cexestablishment.regions_id' => $reg,
                    'Cexestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
        if ($existe[0][0]['total'] != 20) {
            echo "YA EXISTEN REGISTROS PARA ESTE CARGO FUNCIONAL, VERIFIQUE";
            print_r($existe);
            print_r($reg);
            print_r($year);
        } else {
            $user_id_reg = $this->Session->read('Auth.User.id');
            $carpeta = $user_id_reg;
            //datos de archivo excel
            $dir = WWW_ROOT . DS . 'files/' . $carpeta . "";
            $dir_ver = 'files/' . $carpeta . "";
            $fileName = $dir_ver;
            $path = $_FILES['archivo0']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);


            //validar que es un excel
            if ($ext != "xlsx") {
                return "<div class='error'><h3>El archivo de planilla no es soportado por el sistema. Utilice un archivo de Excel valido (XLSX) </h3></div>";
            }


            /*
             * CARGA DE TODOS LOS ARCHIVOS
             */
            $fileNameArray = array();
            for ($i = 0; $i < sizeof($_FILES); $i++) {

                if (!empty($_FILES['archivo' . $i]['tmp_name']) && is_uploaded_file($_FILES['archivo' . $i]['tmp_name'])) {
                    $filename = basename($_FILES['archivo' . $i]['name']);
                    $out = $dir . "/" . $filename;
                    if (file_exists($dir) && is_dir($dir)) {
                        //Si la carpeta existe solo se copia el archivo del temporal hacia la carpeta de sesion

                        move_uploaded_file($_FILES['archivo' . $i]['tmp_name'], $dir . "/" . $filename);
                    } elseif (mkdir($dir, 0777)) {
                        //Si la carpeta de sesion no existe, se crea la carpeta con permisos y se copia el archivo
                        move_uploaded_file($_FILES['archivo' . $i]['tmp_name'], $dir . "/" . $filename);
                    }
                }

                $fileName .= '/' . $filename;
                $fileNameArray[$i] = $fileName;
                $fileName = $dir_ver;
            }

            $fileName = $fileNameArray[0];
            $data = new PHPExcel_Reader_Excel2007();
            $excelObj = $data->load($fileName);
            $worksheetNames = $excelObj->getSheetNames($fileName);


            $numeroPestanas = $excelObj->getSheetCount();

            /*
             * Pestaña de Permanentes
             */
            $existe = $numeroPestanas - 0;

            if ($existe == 0)
                $fijos = array();
            else
                $fijos = $excelObj->setActiveSheetIndex(0);


            if (!empty($fijos))
                $datos = true;
            else
                return "<h3>Este archivo Excel no cuenta con informacion. Verifique el archivo cargado!</h3>";

            $tope = $excelObj->getActiveSheet()->getHighestRow();

            //$tope = 12;
            $n = $objetivo_id = 0;

            for ($i = 4; $i <= $tope; $i++) {
                /*
                  LECTURA
                 */

                $establishments_id = trim($excelObj->getActiveSheet()->getCell('C' . $i)->getValue());
                $enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $febrero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $marzo = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $abril = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $mayo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $junio = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $julio = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $agosto = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $septiembre = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $octubre = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $noviembre = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $diciembre = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Cexestablishment']['establishments_id'] = $establishments_id;
                    $page['Cexestablishment']['january'] = $enero;
                    $page['Cexestablishment']['february'] = $febrero;
                    $page['Cexestablishment']['march'] = $marzo;
                    $page['Cexestablishment']['april'] = $abril;
                    $page['Cexestablishment']['may'] = $mayo;
                    $page['Cexestablishment']['june'] = $junio;
                    $page['Cexestablishment']['july'] = $julio;
                    $page['Cexestablishment']['august'] = $agosto;
                    $page['Cexestablishment']['septiembre'] = $septiembre;
                    $page['Cexestablishment']['october'] = $octubre;
                    $page['Cexestablishment']['november'] = $noviembre;
                    $page['Cexestablishment']['december'] = $diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Cexestablishment->query("UPDATE cexestablishments SET january = '$enero', february = '$febrero', march = '$marzo', april = '$abril', may = '$mayo', june = '$junio', july = '$julio', august = '$agosto', september = 'septiembre', october = '$octubre', november = '$noviembre', december = '$diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Cexestablishment->create();
                        // $this->Cexestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        $this->redirect([
            'controller' => 'Cexestablishments',
            'action' => 'index', $reg, $year
        ]);
    }



    public function import()
    {
        $regions = $this->Hcxestablishment->Region->find('list');
        //$yir = $this->request->query('yir');
        $datos = $this->request->data;
        $this->set(compact('regions', 'datos'));
    }



    public function ejemplo()
    {
        //llamada al modelo de bitacora
        $this->loadModel('Bitacora');
        //asignacion de variables 
        $descripcion = "INGRESO DE DATOS DE LA TABLA X.....";
        $Bitacora["Bitacora"]["descripcion"] = $descripcion;
        $Bitacora["Bitacora"]["persona_id"] = 0;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        //LLAMADA A FUNCION GUARDAR DEL MODELO BITACORA, se pasa como parametro el objeto $Bitacora
        $this->Bitacora->save($Bitacora);
    }
}
