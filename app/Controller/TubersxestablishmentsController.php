<?php
App::uses('AppController', 'Controller');
/**
 * Tubersxestablishments Controller
 *
 * @property Tubersxestablishment $Tubersxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TubersxestablishmentsController extends AppController
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
                'tubersxestablishment.year =' => $yir,
                'tubersxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'tubersxestablishment.year =' => $yir,
                    'tubersxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'tubersxestablishment.year =' => $yer,
                    'Tubersxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Tubersxestablishment->recursive = 0;
        $this->set('tubersxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Tubersxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Tubersxestablishment.ide_january) as i_jan, SUM(Tubersxestablishment.inv_january) as in_jan, SUM(Tubersxestablishment.ide_february) as i_feb, SUM(Tubersxestablishment.inv_february) as in_feb, SUM(Tubersxestablishment.ide_march) as i_mar, SUM(Tubersxestablishment.inv_march) as in_mar, SUM(Tubersxestablishment.ide_april) as i_apr, SUM(Tubersxestablishment.inv_april) as in_apr, SUM(Tubersxestablishment.ide_may) as i_may, SUM(Tubersxestablishment.inv_may) as in_may, SUM(Tubersxestablishment.ide_june) as i_jun, SUM(Tubersxestablishment.inv_june) as in_jun, SUM(Tubersxestablishment.ide_july) as i_jul, SUM(Tubersxestablishment.inv_july) as in_jul,  SUM(Tubersxestablishment.ide_august) as i_aug, SUM(Tubersxestablishment.inv_august) as in_aug, SUM(Tubersxestablishment.ide_september) as i_sep, SUM(Tubersxestablishment.inv_september) as in_sep, SUM(Tubersxestablishment.ide_october) as i_oct, SUM(Tubersxestablishment.inv_october) as in_oct, SUM(Tubersxestablishment.ide_november) as i_nov, SUM(Tubersxestablishment.inv_november) as in_nov, SUM(Tubersxestablishment.ide_december) as i_decem, SUM(Tubersxestablishment.inv_december) as in_decem'),
                    'conditions' => array(
                        'Tubersxestablishment.year =' => $yir,
                        'Tubersxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['i_jan'];
            $mostrar_total_jan2 = $months[0][0]['in_jan'];
            $mostrar_total_feb1 = $months[0][0]['i_feb'];
            $mostrar_total_feb2 = $months[0][0]['in_feb'];
            $mostrar_total_mar1 = $months[0][0]['i_mar'];
            $mostrar_total_mar2 = $months[0][0]['in_mar'];
            $mostrar_total_apr1 = $months[0][0]['i_apr'];
            $mostrar_total_apr2 = $months[0][0]['in_apr'];
            $mostrar_total_may1 = $months[0][0]['i_may'];
            $mostrar_total_may2 = $months[0][0]['in_may'];
            $mostrar_total_jun1 = $months[0][0]['i_jun'];
            $mostrar_total_jun2 = $months[0][0]['in_jun'];
            $mostrar_total_jul1 = $months[0][0]['i_jul'];
            $mostrar_total_jul2 = $months[0][0]['in_jul'];
            $mostrar_total_aug1 = $months[0][0]['i_aug'];
            $mostrar_total_aug2 = $months[0][0]['in_aug'];
            $mostrar_total_sep1 = $months[0][0]['i_sep'];
            $mostrar_total_sep2 = $months[0][0]['in_sep'];
            $mostrar_total_oct1 = $months[0][0]['i_oct'];
            $mostrar_total_oct2 = $months[0][0]['in_oct'];
            $mostrar_total_nov1 = $months[0][0]['i_nov'];
            $mostrar_total_nov2 = $months[0][0]['in_nov'];
            $mostrar_total_dec1 = $months[0][0]['i_decem'];
            $mostrar_total_dec2 = $months[0][0]['in_decem'];
            $this->set(array('i_jan' => $mostrar_total_jan1, 'i_feb' => $mostrar_total_feb1, 'i_mar' => $mostrar_total_mar1, 'i_apr' => $mostrar_total_apr1, 'i_may' => $mostrar_total_may1, 'i_jun' => $mostrar_total_jun1, 'i_jul' => $mostrar_total_jul1, 'i_aug' => $mostrar_total_aug1, 'i_sep' => $mostrar_total_sep1, 'i_oct' => $mostrar_total_oct1, 'i_nov' => $mostrar_total_nov1, 'i_decem' => $mostrar_total_dec1, 'in_jan' => $mostrar_total_jan2, 'in_feb' => $mostrar_total_feb2, 'in_mar' => $mostrar_total_mar2, 'in_apr' => $mostrar_total_apr2, 'in_may' => $mostrar_total_may2, 'in_jun' => $mostrar_total_jun2, 'in_jul' => $mostrar_total_jul2, 'in_aug' => $mostrar_total_aug2, 'in_sep' => $mostrar_total_sep2, 'in_oct' => $mostrar_total_oct2, 'in_nov' => $mostrar_total_nov2, 'in_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['i_jan'] + $months[0][0]['i_feb'] + $months[0][0]['i_mar'] +
                $months[0][0]['in_jan'] + $months[0][0]['in_feb'] + $months[0][0]['in_mar'];
            $trim2 = $months[0][0]['i_apr'] + $months[0][0]['i_may'] + $months[0][0]['i_jun'] +
                $months[0][0]['in_apr'] + $months[0][0]['in_may'] + $months[0][0]['in_jun'];
            $trim3 = $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                $months[0][0]['in_jul'] + $months[0][0]['in_aug'] + $months[0][0]['in_sep'];
            $trim4 = $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem']   + $months[0][0]['in_oct'] + $months[0][0]['in_nov'] + $months[0][0]['in_decem'];

            $this->loadModel('Tubers');
            $this->Tubers->query("UPDATE tubers SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE tubers.regions_id = $region && tubers.year = $yir");
        } else {
            // Tubersxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Tubersxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Tubersxestablishment.ide_january) as i_jan, SUM(Tubersxestablishment.inv_january) as in_jan, SUM(Tubersxestablishment.ide_february) as i_feb, SUM(Tubersxestablishment.inv_february) as in_feb, SUM(Tubersxestablishment.ide_march) as i_mar, SUM(Tubersxestablishment.inv_march) as in_mar, SUM(Tubersxestablishment.ide_april) as i_apr, SUM(Tubersxestablishment.inv_april) as in_apr, SUM(Tubersxestablishment.ide_may) as i_may, SUM(Tubersxestablishment.inv_may) as in_may, SUM(Tubersxestablishment.ide_june) as i_jun, SUM(Tubersxestablishment.inv_june) as in_jun, SUM(Tubersxestablishment.ide_july) as i_jul, SUM(Tubersxestablishment.inv_july) as in_jul,  SUM(Tubersxestablishment.ide_august) as i_aug, SUM(Tubersxestablishment.inv_august) as in_aug, SUM(Tubersxestablishment.ide_september) as i_sep, SUM(Tubersxestablishment.inv_september) as in_sep, SUM(Tubersxestablishment.ide_october) as i_oct, SUM(Tubersxestablishment.inv_october) as in_oct, SUM(Tubersxestablishment.ide_november) as i_nov, SUM(Tubersxestablishment.inv_november) as in_nov, SUM(Tubersxestablishment.ide_december) as i_decem, SUM(Tubersxestablishment.inv_december) as in_decem'),
                    'conditions' => array(
                        'Tubersxestablishment.year =' => $yer,
                        'Tubersxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['i_jan'];
            $mostrar_total_jan2 = $months[0][0]['in_jan'];
            $mostrar_total_feb1 = $months[0][0]['i_feb'];
            $mostrar_total_feb2 = $months[0][0]['in_feb'];
            $mostrar_total_mar1 = $months[0][0]['i_mar'];
            $mostrar_total_mar2 = $months[0][0]['in_mar'];
            $mostrar_total_apr1 = $months[0][0]['i_apr'];
            $mostrar_total_apr2 = $months[0][0]['in_apr'];
            $mostrar_total_may1 = $months[0][0]['i_may'];
            $mostrar_total_may2 = $months[0][0]['in_may'];
            $mostrar_total_jun1 = $months[0][0]['i_jun'];
            $mostrar_total_jun2 = $months[0][0]['in_jun'];
            $mostrar_total_jul1 = $months[0][0]['i_jul'];
            $mostrar_total_jul2 = $months[0][0]['in_jul'];
            $mostrar_total_aug1 = $months[0][0]['i_aug'];
            $mostrar_total_aug2 = $months[0][0]['in_aug'];
            $mostrar_total_sep1 = $months[0][0]['i_sep'];
            $mostrar_total_sep2 = $months[0][0]['in_sep'];
            $mostrar_total_oct1 = $months[0][0]['i_oct'];
            $mostrar_total_oct2 = $months[0][0]['in_oct'];
            $mostrar_total_nov1 = $months[0][0]['i_nov'];
            $mostrar_total_nov2 = $months[0][0]['in_nov'];
            $mostrar_total_dec1 = $months[0][0]['i_decem'];
            $mostrar_total_dec2 = $months[0][0]['in_decem'];
            $this->set(array('i_jan' => $mostrar_total_jan1, 'i_feb' => $mostrar_total_feb1, 'i_mar' => $mostrar_total_mar1, 'i_apr' => $mostrar_total_apr1, 'i_may' => $mostrar_total_may1, 'i_jun' => $mostrar_total_jun1, 'i_jul' => $mostrar_total_jul1, 'i_aug' => $mostrar_total_aug1, 'i_sep' => $mostrar_total_sep1, 'i_oct' => $mostrar_total_oct1, 'i_nov' => $mostrar_total_nov1, 'i_decem' => $mostrar_total_dec1, 'in_jan' => $mostrar_total_jan2, 'in_feb' => $mostrar_total_feb2, 'in_mar' => $mostrar_total_mar2, 'in_apr' => $mostrar_total_apr2, 'in_may' => $mostrar_total_may2, 'in_jun' => $mostrar_total_jun2, 'in_jul' => $mostrar_total_jul2, 'in_aug' => $mostrar_total_aug2, 'in_sep' => $mostrar_total_sep2, 'in_oct' => $mostrar_total_oct2, 'in_nov' => $mostrar_total_nov2, 'in_decem' => $mostrar_total_dec2));
            // UPDATE PARA LA TABLA CHILDHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['i_jan'] + $months[0][0]['in_jan'] + $months[0][0]['i_feb'] +     $months[0][0]['in_feb'] + $months[0][0]['i_mar'] + $months[0][0]['in_mar'];
            $trim2 = $months[0][0]['i_apr'] + $months[0][0]['in_apr'] + $months[0][0]['i_may'] +
                $months[0][0]['in_may'] + $months[0][0]['i_jun'] + $months[0][0]['in_jun'];
            $trim3 = $months[0][0]['i_jul'] + $months[0][0]['i_aug'] + $months[0][0]['i_sep'] +
                $months[0][0]['in_jul'] + $months[0][0]['in_aug'] + $months[0][0]['in_sep'];
            $trim4 = $months[0][0]['i_oct'] + $months[0][0]['i_nov'] + $months[0][0]['i_decem']   + $months[0][0]['in_oct'] + $months[0][0]['in_nov'] + $months[0][0]['in_decem'];

            $this->loadModel('Tubers');
            $this->Tubers->query("UPDATE tubers SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE tubers.regions_id = $region && tubers.year = $yer");
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
        if (!$this->Tubersxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid tubersxestablishment'));
        }
        $options = array('conditions' => array('Tubersxestablishment.' . $this->Tubersxestablishment->primaryKey => $id));
        $this->set('tubersxestablishment', $this->Tubersxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Tubersxestablishment->create();
            if ($this->Tubersxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The tubersxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The tubersxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Tubersxestablishment->Establishment->find('list');
        $sibases = $this->Tubersxestablishment->Sibase->find('list');
        $regions = $this->Tubersxestablishment->Region->find('list');
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
        $establishments = $this->Tubersxestablishment->Establishment->find('list');
        $sibases = $this->Tubersxestablishment->Sibase->find('list');
        $regions = $this->Tubersxestablishment->Region->find('list');
        $reg = $region;
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        if (!$this->Tubersxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid tubersxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tubersxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
<<<<<<< HEAD
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de tuberculosis del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Tubersxestablishment.' . $this->Tubersxestablishment->primaryKey => $id));
            $this->request->data = $this->Tubersxestablishment->find('first', $options);
        }
<<<<<<< HEAD
=======
        $establishments = $this->Tubersxestablishment->Establishment->find('list');
        $sibases = $this->Tubersxestablishment->Sibase->find('list');
        $regions = $this->Tubersxestablishment->Region->find('list');
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
        $this->Tubersxestablishment->id = $id;
        if (!$this->Tubersxestablishment->exists()) {
            throw new NotFoundException(__('Invalid tubersxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Tubersxestablishment->delete()) {
            $this->Flash->success(__('The tubersxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The tubersxestablishment could not be deleted. Please, try again.'));
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
        $regions = $this->Tubersxestablishment->Region->find('list');
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
=======

>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Tubersxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Tubersxestablishment.regions_id' => $reg,
                    'Tubersxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
<<<<<<< HEAD
        $exi = $this->Tubersxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Tubersxestablishment.regions_id' => $reg,
                    'Tubersxestablishment.year' => $year
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
                $in_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $i_febrero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $in_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $i_marzo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $in_marzo = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $i_abril = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $in_abril = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $i_mayo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $in_mayo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $i_junio = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $in_junio = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $i_julio = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $in_julio = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $i_agosto = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $in_agosto = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $i_septiembre = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $in_septiembre = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $i_octubre = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $in_octubre = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $i_noviembre = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $in_noviembre = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $i_diciembre = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $in_diciembre = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Tubersxestablishment']['establishments_id'] = $establishments_id;
                    $page['Tubersxestablishment']['ide_january'] = $i_enero;
                    $page['Tubersxestablishment']['inv_january'] = $in_enero;
                    $page['Tubersxestablishment']['ide_february'] = $i_febrero;
                    $page['Tubersxestablishment']['inv_february'] = $in_febrero;
                    $page['Tubersxestablishment']['ide_march'] = $i_marzo;
                    $page['Tubersxestablishment']['inv_march'] = $in_marzo;
                    $page['Tubersxestablishment']['ide_april'] = $i_abril;
                    $page['Tubersxestablishment']['inv_april'] = $in_abril;
                    $page['Tubersxestablishment']['ide_may'] = $i_mayo;
                    $page['Tubersxestablishment']['inv_may'] = $in_mayo;
                    $page['Tubersxestablishment']['ide_june'] = $i_junio;
                    $page['Tubersxestablishment']['inv_june'] = $in_junio;
                    $page['Tubersxestablishment']['ide_july'] = $i_julio;
                    $page['Tubersxestablishment']['inv_july'] = $in_julio;
                    $page['Tubersxestablishment']['ide_august'] = $i_agosto;
                    $page['Tubersxestablishment']['inv_august'] = $in_agosto;
                    $page['Tubersxestablishment']['ide_septiembre'] = $i_septiembre;
                    $page['Tubersxestablishment']['inv_septiembre'] = $in_septiembre;
                    $page['Tubersxestablishment']['ide_october'] = $i_octubre;
                    $page['Tubersxestablishment']['inv_october'] = $in_octubre;
                    $page['Tubersxestablishment']['ide_november'] = $i_noviembre;
                    $page['Tubersxestablishment']['inv_november'] = $in_noviembre;
                    $page['Tubersxestablishment']['ide_december'] = $i_diciembre;
                    $page['Tubersxestablishment']['inv_december'] = $in_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Tubersxestablishment->query("UPDATE tubersxestablishments SET ide_january = '$i_enero', ide_february = '$i_febrero', ide_march = '$i_marzo', ide_april = '$i_abril', ide_may = '$i_mayo', ide_june = '$i_junio', ide_july = '$i_julio', ide_august = '$i_agosto', ide_september = '$i_septiembre', ide_october = '$i_octubre', ide_november = '$i_noviembre', ide_december = '$i_diciembre', inv_january = '$in_enero', inv_february = '$in_febrero', inv_march = '$in_marzo', inv_april = '$in_abril', inv_may = '$in_mayo', inv_june = '$in_junio', inv_july = '$in_julio', inv_august = '$in_agosto', inv_september = '$in_septiembre', inv_october = '$in_octubre', inv_november = '$in_noviembre', inv_december = '$in_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Tubersxestablishment->create();
                        // $this->Tubersxestablishment->save($page);


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
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Tuberculosis de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);  

        $this->redirect([
            'controller' => 'Tubersxestablishments',
            'action' => 'index', $reg, $year, $layout
=======
        $this->redirect([
            'controller' => 'Tubersxestablishments',
            'action' => 'index', $reg, $year
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
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
