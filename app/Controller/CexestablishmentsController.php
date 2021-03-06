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
<<<<<<< HEAD
    public $layout = 'default';
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

    /**
     * index method
     *
     * @return void
     */
<<<<<<< HEAD
    public function Autorizacion()
    {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 3) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }

    public function index($region, $yer, $layout = 0)
    {
        // ifpara no mostrar el layout en la tabla , implementar en todas las tablas
        if($layout == 1){
            $this->autoLayout = false;
        }
=======
    public function index($region, $yer)
    {
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
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
<<<<<<< HEAD
        $establishments = $this->Cexestablishment->Establishment->find('list');
        $sibases = $this->Cexestablishment->Sibase->find('list');
        $regions = $this->Cexestablishment->Region->find('list');
        $reg = $region;

=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        if (!$this->Cexestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid cexestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Cexestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
<<<<<<< HEAD
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de examenes clinicos del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                return $this->redirect(array('action' => 'index',$region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Cexestablishment.' . $this->Cexestablishment->primaryKey => $id));
            $this->request->data = $this->Cexestablishment->find('first', $options);
        }
<<<<<<< HEAD
=======
        $establishments = $this->Cexestablishment->Establishment->find('list');
        $sibases = $this->Cexestablishment->Sibase->find('list');
        $regions = $this->Cexestablishment->Region->find('list');
        $reg = $region;
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
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
<<<<<<< HEAD
    
=======
    public function Autorizacion()
    {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 2) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Cexestablishment->Region->find('list');
<<<<<<< HEAD
        $we = $this->Session->read('Auth.User.regions_id');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer, 'we' => $we));
=======
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
    }

    public function cargar()
    {
        $this->autoRender = false;
<<<<<<< HEAD
        $this->autoLayout = false;
        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];

        
=======

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];


>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

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

<<<<<<< HEAD
        $exi = $this->Cexestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Cexestablishment.regions_id' => $reg,
                    'Cexestablishment.year' => $year
                ),
            )
        );

=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        if ($reg == 1) {
            $estanum = 31;
        } elseif ($reg == 2) {
            $estanum = 34;
        } elseif ($reg == 3) {
            $estanum = 20;
        } elseif ($reg == 4) {
            $estanum = 27;
        } elseif ($reg == 5) {
            $estanum = 55;
<<<<<<< HEAD
        }     
=======
        }
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

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
                $ci_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $mam_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $ci_febrero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $mam_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $ci_marzo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $mam_marzo = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $ci_abril = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $mam_abril = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $ci_mayo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $mam_mayo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $ci_junio = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $mam_junio = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $ci_julio = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $mam_julio = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $ci_agosto = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $mam_agosto = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $ci_septiembre = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $mam_septiembre = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $ci_octubre = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $mam_octubre = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $ci_noviembre = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $mam_noviembre = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $ci_diciembre = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $mam_diciembre = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());


                if ($establishments_id != "") {

<<<<<<< HEAD
                    $page['Cexestablishment']['cit_january'] = $ci_enero;
                    $page['Cexestablishment']['mam_january'] = $mam_enero;
                    $page['Cexestablishment']['cit_february'] = $ci_febrero;
                    $page['Cexestablishment']['mam_february'] = $mam_febrero;
                    $page['Cexestablishment']['cit_march'] = $ci_marzo;
                    $page['Cexestablishment']['mam_march'] = $mam_marzo;
                    $page['Cexestablishment']['cit_april'] = $ci_abril;
                    $page['Cexestablishment']['mam_april'] = $mam_abril;
                    $page['Cexestablishment']['cit_may'] = $ci_mayo;
                    $page['Cexestablishment']['mam_may'] = $mam_mayo;
                    $page['Cexestablishment']['cit_june'] = $ci_junio;
                    $page['Cexestablishment']['mam_june'] = $mam_junio;
                    $page['Cexestablishment']['cit_july'] = $ci_julio;
                    $page['Cexestablishment']['mam_july'] = $mam_julio;
                    $page['Cexestablishment']['cit_august'] = $ci_agosto;
                    $page['Cexestablishment']['mam_august'] = $mam_agosto;
                    $page['Cexestablishment']['cit_septiembre'] = $ci_septiembre;
                    $page['Cexestablishment']['mam_septiembre'] = $mam_septiembre;
                    $page['Cexestablishment']['cit_october'] = $ci_octubre;
                    $page['Cexestablishment']['mam_october'] = $mam_octubre;
                    $page['Cexestablishment']['cit_november'] = $ci_noviembre;
                    $page['Cexestablishment']['mam_november'] = $mam_noviembre;
                    $page['Cexestablishment']['cit_december'] = $ci_diciembre;
                    $page['Cexestablishment']['mam_december'] = $mam_diciembre;
=======
                    $page['Childhcxestablishment']['cit_january'] = $ci_enero;
                    $page['Childhcxestablishment']['mam_january'] = $mam_enero;
                    $page['Childhcxestablishment']['cit_february'] = $ci_febrero;
                    $page['Childhcxestablishment']['mam_february'] = $mam_febrero;
                    $page['Childhcxestablishment']['cit_march'] = $ci_marzo;
                    $page['Childhcxestablishment']['mam_march'] = $mam_marzo;
                    $page['Childhcxestablishment']['cit_april'] = $ci_abril;
                    $page['Childhcxestablishment']['mam_april'] = $mam_abril;
                    $page['Childhcxestablishment']['cit_may'] = $ci_mayo;
                    $page['Childhcxestablishment']['mam_may'] = $mam_mayo;
                    $page['Childhcxestablishment']['cit_june'] = $ci_junio;
                    $page['Childhcxestablishment']['mam_june'] = $mam_junio;
                    $page['Childhcxestablishment']['cit_july'] = $ci_julio;
                    $page['Childhcxestablishment']['mam_july'] = $mam_julio;
                    $page['Childhcxestablishment']['cit_august'] = $ci_agosto;
                    $page['Childhcxestablishment']['mam_august'] = $mam_agosto;
                    $page['Childhcxestablishment']['cit_septiembre'] = $ci_septiembre;
                    $page['Childhcxestablishment']['mam_septiembre'] = $mam_septiembre;
                    $page['Childhcxestablishment']['cit_october'] = $ci_octubre;
                    $page['Childhcxestablishment']['mam_october'] = $mam_octubre;
                    $page['Childhcxestablishment']['cit_november'] = $ci_noviembre;
                    $page['Childhcxestablishment']['mam_november'] = $mam_noviembre;
                    $page['Childhcxestablishment']['cit_december'] = $ci_diciembre;
                    $page['Childhcxestablishment']['mam_december'] = $mam_diciembre;
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Cexestablishment->query("UPDATE cexestablishments SET cit_january = '$ci_enero', cit_february = '$ci_febrero', cit_march = '$ci_marzo', cit_april = '$ci_abril', cit_may = '$ci_mayo', cit_june = '$ci_junio', cit_july = '$ci_julio', cit_august = '$ci_agosto', cit_september = '$ci_septiembre', cit_october = '$ci_octubre', cit_november = '$ci_noviembre', cit_december = '$ci_diciembre', mam_january = '$mam_enero', mam_february = '$mam_febrero', mam_march = '$mam_marzo', mam_april = '$mam_abril', mam_may = '$mam_mayo', mam_june = '$mam_junio', mam_july = '$mam_julio', mam_august = '$mam_agosto', mam_september = '$mam_septiembre', mam_october = '$mam_octubre', mam_november = '$mam_noviembre', mam_december = '$mam_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Cexestablishment->create();
                        // $this->Cexestablishment->save($page);

<<<<<<< HEAD
=======

>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
<<<<<<< HEAD
        unlink($fileName);
        $layout = 1;
        
        $this->loadModel('Bitacora');
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Examenes Clinicos de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);  
        
        $this->redirect([
            'controller' => 'Cexestablishments',
            'action' => 'index', $reg, $year, $layout
        ]);
    }

    
=======
        $this->redirect([
            'controller' => 'Cexestablishments',
            'action' => 'index', $reg, $year
        ]);
    }

>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1


    public function import()
    {
<<<<<<< HEAD
        $regions = $this->Cexestablishment->Region->find('list');
=======
        $regions = $this->Hcxestablishment->Region->find('list');
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
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
