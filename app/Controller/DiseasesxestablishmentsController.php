<?php
App::uses('AppController', 'Controller');
/**
 * Diseasesxestablishments Controller
 *
 * @property Diseasesxestablishment $Diseasesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DiseasesxestablishmentsController extends AppController
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
                'diseasesxestablishment.year =' => $yir,
                'diseasesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'diseasesxestablishment.year =' => $yir,
                    'diseasesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'diseasesxestablishment.year =' => $yer,
                    'Diseasesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Diseasesxestablishment->recursive = 0;
        $this->set('diseasesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Diseasesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Diseasesxestablishment.hip_january) as h_jan, SUM(Diseasesxestablishment.dia_january) as d_jan, SUM(Diseasesxestablishment.hip_february) as h_feb, SUM(Diseasesxestablishment.dia_february) as d_feb, SUM(Diseasesxestablishment.hip_march) as h_mar, SUM(Diseasesxestablishment.dia_march) as d_mar, SUM(Diseasesxestablishment.hip_april) as h_apr, SUM(Diseasesxestablishment.dia_april) as d_apr, SUM(Diseasesxestablishment.hip_may) as h_may, SUM(Diseasesxestablishment.dia_may) as d_may, SUM(Diseasesxestablishment.hip_june) as h_jun, SUM(Diseasesxestablishment.dia_june) as d_jun, SUM(Diseasesxestablishment.hip_july) as h_jul, SUM(Diseasesxestablishment.dia_july) as d_jul,  SUM(Diseasesxestablishment.hip_august) as h_aug, SUM(Diseasesxestablishment.dia_august) as d_aug, SUM(Diseasesxestablishment.hip_september) as h_sep, SUM(Diseasesxestablishment.dia_september) as d_sep, SUM(Diseasesxestablishment.hip_october) as h_oct, SUM(Diseasesxestablishment.dia_october) as d_oct, SUM(Diseasesxestablishment.hip_november) as h_nov, SUM(Diseasesxestablishment.dia_november) as d_nov, SUM(Diseasesxestablishment.hip_december) as h_decem, SUM(Diseasesxestablishment.dia_december) as d_decem'),
                    'conditions' => array(
                        'Diseasesxestablishment.year =' => $yir,
                        'Diseasesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['h_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_feb1 = $months[0][0]['h_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_mar1 = $months[0][0]['h_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_apr1 = $months[0][0]['h_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_may1 = $months[0][0]['h_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_jun1 = $months[0][0]['h_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jul1 = $months[0][0]['h_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_aug1 = $months[0][0]['h_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_sep1 = $months[0][0]['h_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_oct1 = $months[0][0]['h_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_nov1 = $months[0][0]['h_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_dec1 = $months[0][0]['h_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $this->set(array('h_jan' => $mostrar_total_jan1, 'h_feb' => $mostrar_total_feb1, 'h_mar' => $mostrar_total_mar1, 'h_apr' => $mostrar_total_apr1, 'h_may' => $mostrar_total_may1, 'h_jun' => $mostrar_total_jun1, 'h_jul' => $mostrar_total_jul1, 'h_aug' => $mostrar_total_aug1, 'h_sep' => $mostrar_total_sep1, 'h_oct' => $mostrar_total_oct1, 'h_nov' => $mostrar_total_nov1, 'h_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['h_jan'] + $months[0][0]['h_feb'] + $months[0][0]['h_mar'] +
                $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'];
            $trim2 = $months[0][0]['h_apr'] + $months[0][0]['h_may'] + $months[0][0]['h_jun'] +
                $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'];
            $trim3 = $months[0][0]['h_jul'] + $months[0][0]['h_aug'] + $months[0][0]['h_sep'] +
                $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'];
            $trim4 = $months[0][0]['h_oct'] + $months[0][0]['h_nov'] + $months[0][0]['h_decem']   + $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'];

            $this->loadModel('Disease');
            $this->Disease->query("UPDATE diseases SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE diseases.regions_id = $region && diseases.year = $yir");
        } else {
            // Diseasesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Diseasesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Diseasesxestablishment.hip_january) as h_jan, SUM(Diseasesxestablishment.dia_january) as d_jan, SUM(Diseasesxestablishment.hip_february) as h_feb, SUM(Diseasesxestablishment.dia_february) as d_feb, SUM(Diseasesxestablishment.hip_march) as h_mar, SUM(Diseasesxestablishment.dia_march) as d_mar, SUM(Diseasesxestablishment.hip_april) as h_apr, SUM(Diseasesxestablishment.dia_april) as d_apr, SUM(Diseasesxestablishment.hip_may) as h_may, SUM(Diseasesxestablishment.dia_may) as d_may, SUM(Diseasesxestablishment.hip_june) as h_jun, SUM(Diseasesxestablishment.dia_june) as d_jun, SUM(Diseasesxestablishment.hip_july) as h_jul, SUM(Diseasesxestablishment.dia_july) as d_jul,  SUM(Diseasesxestablishment.hip_august) as h_aug, SUM(Diseasesxestablishment.dia_august) as d_aug, SUM(Diseasesxestablishment.hip_september) as h_sep, SUM(Diseasesxestablishment.dia_september) as d_sep, SUM(Diseasesxestablishment.hip_october) as h_oct, SUM(Diseasesxestablishment.dia_october) as d_oct, SUM(Diseasesxestablishment.hip_november) as h_nov, SUM(Diseasesxestablishment.dia_november) as d_nov, SUM(Diseasesxestablishment.hip_december) as h_decem, SUM(Diseasesxestablishment.dia_december) as d_decem'),
                    'conditions' => array(
                        'Diseasesxestablishment.year =' => $yer,
                        'Diseasesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['h_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_feb1 = $months[0][0]['h_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_mar1 = $months[0][0]['h_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_apr1 = $months[0][0]['h_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_may1 = $months[0][0]['h_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_jun1 = $months[0][0]['h_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jul1 = $months[0][0]['h_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_aug1 = $months[0][0]['h_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_sep1 = $months[0][0]['h_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_oct1 = $months[0][0]['h_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_nov1 = $months[0][0]['h_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_dec1 = $months[0][0]['h_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $this->set(array('h_jan' => $mostrar_total_jan1, 'h_feb' => $mostrar_total_feb1, 'h_mar' => $mostrar_total_mar1, 'h_apr' => $mostrar_total_apr1, 'h_may' => $mostrar_total_may1, 'h_jun' => $mostrar_total_jun1, 'h_jul' => $mostrar_total_jul1, 'h_aug' => $mostrar_total_aug1, 'h_sep' => $mostrar_total_sep1, 'h_oct' => $mostrar_total_oct1, 'h_nov' => $mostrar_total_nov1, 'h_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2));
            // UPDATE PARA LA TABLA CHILDHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['h_jan'] + $months[0][0]['d_jan'] + $months[0][0]['h_feb'] +     $months[0][0]['d_feb'] + $months[0][0]['h_mar'] + $months[0][0]['d_mar'];
            $trim2 = $months[0][0]['h_apr'] + $months[0][0]['d_apr'] + $months[0][0]['h_may'] +
                $months[0][0]['d_may'] + $months[0][0]['h_jun'] + $months[0][0]['d_jun'];
            $trim3 = $months[0][0]['h_jul'] + $months[0][0]['h_aug'] + $months[0][0]['h_sep'] +
                $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'];
            $trim4 = $months[0][0]['h_oct'] + $months[0][0]['h_nov'] + $months[0][0]['h_decem']   + $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'];

            $this->loadModel('Disease');
            $this->Disease->query("UPDATE diseases SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE diseases.regions_id = $region && diseases.year = $yer");
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
        if (!$this->Diseasesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid diseasesxestablishment'));
        }
        $options = array('conditions' => array('Diseasesxestablishment.' . $this->Diseasesxestablishment->primaryKey => $id));
        $this->set('diseasesxestablishment', $this->Diseasesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Diseasesxestablishment->create();
            if ($this->Diseasesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The diseasesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The diseasesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Diseasesxestablishment->Establishment->find('list');
        $sibases = $this->Diseasesxestablishment->Sibase->find('list');
        $regions = $this->Diseasesxestablishment->Region->find('list');
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
        if (!$this->Diseasesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid diseasesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Diseasesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Diseasesxestablishment.' . $this->Diseasesxestablishment->primaryKey => $id));
            $this->request->data = $this->Diseasesxestablishment->find('first', $options);
        }
        $establishments = $this->Diseasesxestablishment->Establishment->find('list');
        $sibases = $this->Diseasesxestablishment->Sibase->find('list');
        $regions = $this->Diseasesxestablishment->Region->find('list');
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
        $this->Diseasesxestablishment->id = $id;
        if (!$this->Diseasesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid diseasesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Diseasesxestablishment->delete()) {
            $this->Flash->success(__('The diseasesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The diseasesxestablishment could not be deleted. Please, try again.'));
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

    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Diseasesxestablishment->Region->find('list');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
    }

    public function cargar()
    {
        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Diseasesxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Diseasesxestablishment.regions_id' => $reg,
                    'Diseasesxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );

        if ($reg == 1) {
            $estanum = 31;
        } elseif ($reg == 2) {
            $estanum = 33;
        } elseif ($reg == 3) {
            $estanum = 20;
        } elseif ($reg == 4) {
            $estanum = 27;
        } elseif ($reg == 5) {
            $estanum = 55;
        }

        if ($existe[0][0]['total'] != $estanum) {
            echo "YA EXISTEN REGISTROS PARA ESTE CARGO FUNCIONAL, VERIFIQUE";

        } else {
            $user_id_reg = $this->Session->read('Auth.User.id');
            $user_na_reg = $this->Session->read('Auth.User.nombre_usuario');
            $carpeta = $user_id_reg . "-" . $user_na_reg;
            //datos de archivo excel
            $dir = WWW_ROOT . DS . 'files/' . $carpeta . "";
            $dir_ver = 'files/' . $carpeta . "";
            $fileName = $dir_ver;
            $path = $_FILES['archivo0']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);


            //validar que es un excel
            if ($ext != "xlsx") {
                return "<div class='error'><h3>El archivo no es soportado por el sistema. Utilice un archivo de Excel valido (XLSX) </h3></div>";
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
                $h_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $d_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $h_febrero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $d_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $h_marzo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $d_marzo = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $h_abril = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $d_abril = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $h_mayo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $d_mayo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $h_junio = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $d_junio = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $h_julio = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $d_julio = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $h_agosto = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $d_agosto = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $h_septiembre = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $d_septiembre = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $h_octubre = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $d_octubre = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $h_noviembre = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $d_noviembre = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $h_diciembre = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $d_diciembre = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Diseasesxestablishment']['establishments_id'] = $establishments_id;
                    $page['Diseasesxestablishment']['hip_january'] = $h_enero;
                    $page['Diseasesxestablishment']['dia_january'] = $d_enero;
                    $page['Diseasesxestablishment']['hip_february'] = $h_febrero;
                    $page['Diseasesxestablishment']['dia_february'] = $d_febrero;
                    $page['Diseasesxestablishment']['hip_march'] = $h_marzo;
                    $page['Diseasesxestablishment']['dia_march'] = $d_marzo;
                    $page['Diseasesxestablishment']['hip_april'] = $h_abril;
                    $page['Diseasesxestablishment']['dia_april'] = $d_abril;
                    $page['Diseasesxestablishment']['hip_may'] = $h_mayo;
                    $page['Diseasesxestablishment']['dia_may'] = $d_mayo;
                    $page['Diseasesxestablishment']['hip_june'] = $h_junio;
                    $page['Diseasesxestablishment']['dia_june'] = $d_junio;
                    $page['Diseasesxestablishment']['hip_july'] = $h_julio;
                    $page['Diseasesxestablishment']['dia_july'] = $d_julio;
                    $page['Diseasesxestablishment']['hip_august'] = $h_agosto;
                    $page['Diseasesxestablishment']['dia_august'] = $d_agosto;
                    $page['Diseasesxestablishment']['hip_septiembre'] = $h_septiembre;
                    $page['Diseasesxestablishment']['dia_septiembre'] = $d_septiembre;
                    $page['Diseasesxestablishment']['hip_october'] = $h_octubre;
                    $page['Diseasesxestablishment']['dia_october'] = $d_octubre;
                    $page['Diseasesxestablishment']['hip_november'] = $h_noviembre;
                    $page['Diseasesxestablishment']['dia_november'] = $d_noviembre;
                    $page['Diseasesxestablishment']['hip_december'] = $h_diciembre;
                    $page['Diseasesxestablishment']['dia_december'] = $d_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Diseasesxestablishment->query("UPDATE diseasesxestablishments SET hip_january = '$h_enero', hip_february = '$h_febrero', hip_march = '$h_marzo', hip_april = '$h_abril', hip_may = '$h_mayo', hip_june = '$h_junio', hip_july = '$h_julio', hip_august = '$h_agosto', hip_september = '$h_septiembre', hip_october = '$h_octubre', hip_november = '$h_noviembre', hip_december = '$h_diciembre', dia_january = '$d_enero', dia_february = '$d_febrero', dia_march = '$d_marzo', dia_april = '$d_abril', dia_may = '$d_mayo', dia_june = '$d_junio', dia_july = '$d_julio', dia_august = '$d_agosto', dia_september = '$d_septiembre', dia_october = '$d_octubre', dia_november = '$d_noviembre', dia_december = '$d_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Diseasesxestablishment->create();
                        // $this->Diseasesxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        $this->redirect([
            'controller' => 'Diseasesxestablishments',
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