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
    public $layout = 'default';

    /**
     * index method
     *
     * @return void
     */
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
        $establishments = $this->Maternalhcxestablishment->Establishment->find('list');
        $sibases = $this->Maternalhcxestablishment->Sibase->find('list');
        $regions = $this->Maternalhcxestablishment->Region->find('list');
        $reg = $region;

        if (!$this->Maternalhcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid maternalhcxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Maternalhcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de atencion materna del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Maternalhcxestablishment.' . $this->Maternalhcxestablishment->primaryKey => $id));
            $this->request->data = $this->Maternalhcxestablishment->find('first', $options);
        }
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
    //*****************************************/ prueba de excel *************************************************


    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Maternalhcxestablishment->Region->find('list');
        $we = $this->Session->read('Auth.User.regions_id');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer, 'we' => $we));
    }

    public function cargar()
    {
        $this->autoRender = false;
        $this->autoLayout = false;
        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Maternalhcxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Maternalhcxestablishment.regions_id' => $reg,
                    'Maternalhcxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
        $exi = $this->Maternalhcxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Maternalhcxestablishment.regions_id' => $reg,
                    'Maternalhcxestablishment.year' => $year
                ),
            )
        );

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
                $i_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $c_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $i_febrero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $c_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $i_marzo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $c_marzo = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $i_abril = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $c_abril = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $i_mayo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $c_mayo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $i_junio = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $c_junio = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $i_julio = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $c_julio = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $i_agosto = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $c_agosto = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $i_septiembre = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $c_septiembre = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $i_octubre = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $c_octubre = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $i_noviembre = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $c_noviembre = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $i_diciembre = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $c_diciembre = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Maternalhcxestablishment']['establishments_id'] = $establishments_id;
                    $page['Maternalhcxestablishment']['ins_january'] = $i_enero;
                    $page['Maternalhcxestablishment']['con_january'] = $c_enero;
                    $page['Maternalhcxestablishment']['ins_february'] = $i_febrero;
                    $page['Maternalhcxestablishment']['con_february'] = $c_febrero;
                    $page['Maternalhcxestablishment']['ins_march'] = $i_marzo;
                    $page['Maternalhcxestablishment']['con_march'] = $c_marzo;
                    $page['Maternalhcxestablishment']['ins_april'] = $i_abril;
                    $page['Maternalhcxestablishment']['con_april'] = $c_abril;
                    $page['Maternalhcxestablishment']['ins_may'] = $i_mayo;
                    $page['Maternalhcxestablishment']['con_may'] = $c_mayo;
                    $page['Maternalhcxestablishment']['ins_june'] = $i_junio;
                    $page['Maternalhcxestablishment']['con_june'] = $c_junio;
                    $page['Maternalhcxestablishment']['ins_july'] = $i_julio;
                    $page['Maternalhcxestablishment']['con_july'] = $c_julio;
                    $page['Maternalhcxestablishment']['ins_august'] = $i_agosto;
                    $page['Maternalhcxestablishment']['con_august'] = $c_agosto;
                    $page['Maternalhcxestablishment']['ins_septiembre'] = $i_septiembre;
                    $page['Maternalhcxestablishment']['con_septiembre'] = $c_septiembre;
                    $page['Maternalhcxestablishment']['ins_october'] = $i_octubre;
                    $page['Maternalhcxestablishment']['con_october'] = $c_octubre;
                    $page['Maternalhcxestablishment']['ins_november'] = $i_noviembre;
                    $page['Maternalhcxestablishment']['con_november'] = $c_noviembre;
                    $page['Maternalhcxestablishment']['ins_december'] = $i_diciembre;
                    $page['Maternalhcxestablishment']['con_december'] = $c_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Maternalhcxestablishment->query("UPDATE maternalhcxestablishments SET ins_january = '$i_enero', ins_february = '$i_febrero', ins_march = '$i_marzo', ins_april = '$i_abril', ins_may = '$i_mayo', ins_june = '$i_junio', ins_july = '$i_julio', ins_august = '$i_agosto', ins_september = '$i_septiembre', ins_october = '$i_octubre', ins_november = '$i_noviembre', ins_december = '$i_diciembre', con_january = '$c_enero', con_february = '$c_febrero', con_march = '$c_marzo', con_april = '$c_abril', con_may = '$c_mayo', con_june = '$c_junio', con_july = '$c_julio', con_august = '$c_agosto', con_september = '$c_septiembre', con_october = '$c_octubre', con_november = '$c_noviembre', con_december = '$c_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Maternalhcxestablishment->create();
                        // $this->Maternalhcxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        unlink($fileName);
        $layout = 1;
        
        $this->loadModel('Bitacora');
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Atencion Materna de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora); 

        $this->redirect([
            'controller' => 'Maternalhcxestablishments',
            'action' => 'index', $reg, $year, $layout
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

?>