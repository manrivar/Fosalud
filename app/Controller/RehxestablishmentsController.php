<?php
App::uses('AppController', 'Controller');
/**
 * Rehxestablishments Controller
 *
 * @property Rehxestablishment $Rehxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RehxestablishmentsController extends AppController
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
                'rehxestablishment.year =' => $yir,
                'rehxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'rehxestablishment.year =' => $yir,
                    'rehxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'rehxestablishment.year =' => $yer,
                    'rehxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Rehxestablishment->recursive = 0;
        $this->set('rehxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Rehxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Rehxestablishment.ora_january) as o_jan, SUM(Rehxestablishment.end_january) as e_jan, SUM(Rehxestablishment.ora_february) as o_feb, SUM(Rehxestablishment.end_february) as e_feb, SUM(Rehxestablishment.ora_march) as o_mar, SUM(Rehxestablishment.end_march) as e_mar, SUM(Rehxestablishment.ora_april) as o_apr, SUM(Rehxestablishment.end_april) as e_apr, SUM(Rehxestablishment.ora_may) as o_may, SUM(Rehxestablishment.end_may) as e_may, SUM(Rehxestablishment.ora_june) as o_jun, SUM(Rehxestablishment.end_june) as e_jun, SUM(Rehxestablishment.ora_july) as o_jul, SUM(Rehxestablishment.end_july) as e_jul,  SUM(Rehxestablishment.ora_august) as o_aug, SUM(Rehxestablishment.end_august) as e_aug, SUM(Rehxestablishment.ora_september) as o_sep, SUM(Rehxestablishment.end_september) as e_sep, SUM(Rehxestablishment.ora_october) as o_oct, SUM(Rehxestablishment.end_october) as e_oct, SUM(Rehxestablishment.ora_november) as o_nov, SUM(Rehxestablishment.end_november) as e_nov, SUM(Rehxestablishment.ora_december) as o_decem, SUM(Rehxestablishment.end_december) as e_decem'),
                    'conditions' => array(
                        'Rehxestablishment.year =' => $yir,
                        'Rehxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['o_jan'];
            $mostrar_total_jan2 = $months[0][0]['e_jan'];
            $mostrar_total_feb1 = $months[0][0]['o_feb'];
            $mostrar_total_feb2 = $months[0][0]['e_feb'];
            $mostrar_total_mar1 = $months[0][0]['o_mar'];
            $mostrar_total_mar2 = $months[0][0]['e_mar'];
            $mostrar_total_apr1 = $months[0][0]['o_apr'];
            $mostrar_total_apr2 = $months[0][0]['e_apr'];
            $mostrar_total_may1 = $months[0][0]['o_may'];
            $mostrar_total_may2 = $months[0][0]['e_may'];
            $mostrar_total_jun1 = $months[0][0]['o_jun'];
            $mostrar_total_jun2 = $months[0][0]['e_jun'];
            $mostrar_total_jul1 = $months[0][0]['o_jul'];
            $mostrar_total_jul2 = $months[0][0]['e_jul'];
            $mostrar_total_aug1 = $months[0][0]['o_aug'];
            $mostrar_total_aug2 = $months[0][0]['e_aug'];
            $mostrar_total_sep1 = $months[0][0]['o_sep'];
            $mostrar_total_sep2 = $months[0][0]['e_sep'];
            $mostrar_total_oct1 = $months[0][0]['o_oct'];
            $mostrar_total_oct2 = $months[0][0]['e_oct'];
            $mostrar_total_nov1 = $months[0][0]['o_nov'];
            $mostrar_total_nov2 = $months[0][0]['e_nov'];
            $mostrar_total_dec1 = $months[0][0]['o_decem'];
            $mostrar_total_dec2 = $months[0][0]['e_decem'];
            $this->set(array('o_jan' => $mostrar_total_jan1, 'o_feb' => $mostrar_total_feb1, 'o_mar' => $mostrar_total_mar1, 'o_apr' => $mostrar_total_apr1, 'o_may' => $mostrar_total_may1, 'o_jun' => $mostrar_total_jun1, 'o_jul' => $mostrar_total_jul1, 'o_aug' => $mostrar_total_aug1, 'o_sep' => $mostrar_total_sep1, 'o_oct' => $mostrar_total_oct1, 'o_nov' => $mostrar_total_nov1, 'o_decem' => $mostrar_total_dec1, 'e_jan' => $mostrar_total_jan2, 'e_feb' => $mostrar_total_feb2, 'e_mar' => $mostrar_total_mar2, 'e_apr' => $mostrar_total_apr2, 'e_may' => $mostrar_total_may2, 'e_jun' => $mostrar_total_jun2, 'e_jul' => $mostrar_total_jul2, 'e_aug' => $mostrar_total_aug2, 'e_sep' => $mostrar_total_sep2, 'e_oct' => $mostrar_total_oct2, 'e_nov' => $mostrar_total_nov2, 'e_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'] +
                     $months[0][0]['e_jan'] + $months[0][0]['e_feb'] + $months[0][0]['e_mar'];
            $trim2 = $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'] +
                     $months[0][0]['e_apr'] + $months[0][0]['e_may'] + $months[0][0]['e_jun'];
            $trim3 = $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'] +
                     $months[0][0]['e_jul'] + $months[0][0]['e_aug'] + $months[0][0]['e_sep'];
            $trim4 = $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'] + 
                     $months[0][0]['e_oct'] + $months[0][0]['e_nov'] + $months[0][0]['e_decem'];

            $this->loadModel('Rehydration');
            $this->Rehydration->query("UPDATE rehydrations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE rehydrations.regions_id = $region && rehydrations.year = $yir");
        } else {
            // Rehxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Rehxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Rehxestablishment.ora_january) as o_jan, SUM(Rehxestablishment.end_january) as e_jan, SUM(Rehxestablishment.ora_february) as o_feb, SUM(Rehxestablishment.end_february) as e_feb, SUM(Rehxestablishment.ora_march) as o_mar, SUM(Rehxestablishment.end_march) as e_mar, SUM(Rehxestablishment.ora_april) as o_apr, SUM(Rehxestablishment.end_april) as e_apr, SUM(Rehxestablishment.ora_may) as o_may, SUM(Rehxestablishment.end_may) as e_may, SUM(Rehxestablishment.ora_june) as o_jun, SUM(Rehxestablishment.end_june) as e_jun, SUM(Rehxestablishment.ora_july) as o_jul, SUM(Rehxestablishment.end_july) as e_jul,  SUM(Rehxestablishment.ora_august) as o_aug, SUM(Rehxestablishment.end_august) as e_aug, SUM(Rehxestablishment.ora_september) as o_sep, SUM(Rehxestablishment.end_september) as e_sep, SUM(Rehxestablishment.ora_october) as o_oct, SUM(Rehxestablishment.end_october) as e_oct, SUM(Rehxestablishment.ora_november) as o_nov, SUM(Rehxestablishment.end_november) as e_nov, SUM(Rehxestablishment.ora_december) as o_decem, SUM(Rehxestablishment.end_december) as e_decem'),
                    'conditions' => array(
                        'Rehxestablishment.year =' => $yer,
                        'Rehxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['o_jan'];
            $mostrar_total_jan2 = $months[0][0]['e_jan'];
            $mostrar_total_feb1 = $months[0][0]['o_feb'];
            $mostrar_total_feb2 = $months[0][0]['e_feb'];
            $mostrar_total_mar1 = $months[0][0]['o_mar'];
            $mostrar_total_mar2 = $months[0][0]['e_mar'];
            $mostrar_total_apr1 = $months[0][0]['o_apr'];
            $mostrar_total_apr2 = $months[0][0]['e_apr'];
            $mostrar_total_may1 = $months[0][0]['o_may'];
            $mostrar_total_may2 = $months[0][0]['e_may'];
            $mostrar_total_jun1 = $months[0][0]['o_jun'];
            $mostrar_total_jun2 = $months[0][0]['e_jun'];
            $mostrar_total_jul1 = $months[0][0]['o_jul'];
            $mostrar_total_jul2 = $months[0][0]['e_jul'];
            $mostrar_total_aug1 = $months[0][0]['o_aug'];
            $mostrar_total_aug2 = $months[0][0]['e_aug'];
            $mostrar_total_sep1 = $months[0][0]['o_sep'];
            $mostrar_total_sep2 = $months[0][0]['e_sep'];
            $mostrar_total_oct1 = $months[0][0]['o_oct'];
            $mostrar_total_oct2 = $months[0][0]['e_oct'];
            $mostrar_total_nov1 = $months[0][0]['o_nov'];
            $mostrar_total_nov2 = $months[0][0]['e_nov'];
            $mostrar_total_dec1 = $months[0][0]['o_decem'];
            $mostrar_total_dec2 = $months[0][0]['e_decem'];
            $this->set(array('o_jan' => $mostrar_total_jan1, 'o_feb' => $mostrar_total_feb1, 'o_mar' => $mostrar_total_mar1, 'o_apr' => $mostrar_total_apr1, 'o_may' => $mostrar_total_may1, 'o_jun' => $mostrar_total_jun1, 'o_jul' => $mostrar_total_jul1, 'o_aug' => $mostrar_total_aug1, 'o_sep' => $mostrar_total_sep1, 'o_oct' => $mostrar_total_oct1, 'o_nov' => $mostrar_total_nov1, 'o_decem' => $mostrar_total_dec1, 'e_jan' => $mostrar_total_jan2, 'e_feb' => $mostrar_total_feb2, 'e_mar' => $mostrar_total_mar2, 'e_apr' => $mostrar_total_apr2, 'e_may' => $mostrar_total_may2, 'e_jun' => $mostrar_total_jun2, 'e_jul' => $mostrar_total_jul2, 'e_aug' => $mostrar_total_aug2, 'e_sep' => $mostrar_total_sep2, 'e_oct' => $mostrar_total_oct2, 'e_nov' => $mostrar_total_nov2, 'e_decem' => $mostrar_total_dec2));

            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'] +
                     $months[0][0]['e_jan'] + $months[0][0]['e_feb'] + $months[0][0]['e_mar'];
            $trim2 = $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'] +
                     $months[0][0]['e_apr'] + $months[0][0]['e_may'] + $months[0][0]['e_jun'];
            $trim3 = $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'] +
                     $months[0][0]['e_jul'] + $months[0][0]['e_aug'] + $months[0][0]['e_sep'];
            $trim4 = $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'] +
                     $months[0][0]['e_oct'] + $months[0][0]['e_nov'] + $months[0][0]['e_decem'];

            $this->loadModel('Rehydration');
            $this->Rehydration->query("UPDATE rehydrations SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE rehydrations.regions_id = $region && rehydrations.year = $yer");
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
        if (!$this->Rehxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        $options = array('conditions' => array('Rehxestablishment.' . $this->Rehxestablishment->primaryKey => $id));
        $this->set('rehxestablishment', $this->Rehxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Rehxestablishment->create();
            if ($this->Rehxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The rehxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The rehxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Rehxestablishment->Establishment->find('list');
        $sibases = $this->Rehxestablishment->Sibase->find('list');
        $regions = $this->Rehxestablishment->Region->find('list');
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
        $establishments = $this->Rehxestablishment->Establishment->find('list');
        $sibases = $this->Rehxestablishment->Sibase->find('list');
        $regions = $this->Rehxestablishment->Region->find('list');
        $reg = $region;

=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        if (!$this->Rehxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Rehxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
<<<<<<< HEAD
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de rehidratacion oral del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Rehxestablishment.' . $this->Rehxestablishment->primaryKey => $id));
            $this->request->data = $this->Rehxestablishment->find('first', $options);
        }
<<<<<<< HEAD

=======
        $establishments = $this->Rehxestablishment->Establishment->find('list');
        $sibases = $this->Rehxestablishment->Sibase->find('list');
        $regions = $this->Rehxestablishment->Region->find('list');
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
        $this->Rehxestablishment->id = $id;
        if (!$this->Rehxestablishment->exists()) {
            throw new NotFoundException(__('Invalid rehxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Rehxestablishment->delete()) {
            $this->Flash->success(__('The rehxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The rehxestablishment could not be deleted. Please, try again.'));
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
        $regions = $this->Rehxestablishment->Region->find('list');
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
        $existe = $this->Rehxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Rehxestablishment.regions_id' => $reg,
                    'Rehxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
<<<<<<< HEAD
        $exi = $this->Rehxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Rehxestablishment.regions_id' => $reg,
                    'Rehxestablishment.year' => $year
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
                $o_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $e_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $o_febrero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $e_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $o_marzo = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $e_marzo = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $o_abril = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $e_abril = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $o_mayo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $e_mayo = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $o_junio = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $e_junio = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $o_julio = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $e_julio = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $o_agosto = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $e_agosto = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $o_septiembre = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $e_septiembre = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $o_octubre = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $e_octubre = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $o_noviembre = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $e_noviembre = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $o_diciembre = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $e_diciembre = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Rehxestablishment']['establishments_id'] = $establishments_id;
                    $page['Rehxestablishment']['ora_january'] = $o_enero;
                    $page['Rehxestablishment']['end_january'] = $e_enero;
                    $page['Rehxestablishment']['ora_february'] = $o_febrero;
                    $page['Rehxestablishment']['end_february'] = $e_febrero;
                    $page['Rehxestablishment']['ora_march'] = $o_marzo;
                    $page['Rehxestablishment']['end_march'] = $e_marzo;
                    $page['Rehxestablishment']['ora_april'] = $o_abril;
                    $page['Rehxestablishment']['end_april'] = $e_abril;
                    $page['Rehxestablishment']['ora_may'] = $o_mayo;
                    $page['Rehxestablishment']['end_may'] = $e_mayo;
                    $page['Rehxestablishment']['ora_june'] = $o_junio;
                    $page['Rehxestablishment']['end_june'] = $e_junio;
                    $page['Rehxestablishment']['ora_july'] = $o_julio;
                    $page['Rehxestablishment']['end_july'] = $e_julio;
                    $page['Rehxestablishment']['ora_august'] = $o_agosto;
                    $page['Rehxestablishment']['end_august'] = $e_agosto;
                    $page['Rehxestablishment']['ora_septiembre'] = $o_septiembre;
                    $page['Rehxestablishment']['end_septiembre'] = $e_septiembre;
                    $page['Rehxestablishment']['ora_october'] = $o_octubre;
                    $page['Rehxestablishment']['end_october'] = $e_octubre;
                    $page['Rehxestablishment']['ora_november'] = $o_noviembre;
                    $page['Rehxestablishment']['end_november'] = $e_noviembre;
                    $page['Rehxestablishment']['ora_december'] = $o_diciembre;
                    $page['Rehxestablishment']['end_december'] = $e_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Rehxestablishment->query("UPDATE rehxestablishments SET ora_january = '$o_enero', ora_february = '$o_febrero', ora_march = '$o_marzo', ora_april = '$o_abril', ora_may = '$o_mayo', ora_june = '$o_junio', ora_july = '$o_julio', ora_august = '$o_agosto', ora_september = '$o_septiembre', ora_october = '$o_octubre', ora_november = '$o_noviembre', ora_december = '$o_diciembre', end_january = '$e_enero', end_february = '$e_febrero', end_march = '$e_marzo', end_april = '$e_abril', end_may = '$e_mayo', end_june = '$e_junio', end_july = '$e_julio', end_august = '$e_agosto', end_september = '$e_septiembre', end_october = '$e_octubre', end_november = '$e_noviembre', end_december = '$e_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Rehxestablishment->create();
                        // $this->Rehxestablishment->save($page);


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
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Rehidratacion Oral de la ". $exi['Region']['region_name']. " del año ". $year;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);  

        $this->redirect([
            'controller' => 'Rehxestablishments',
            'action' => 'index', $reg, $year, $layout
=======
        $this->redirect([
            'controller' => 'Rehxestablishments',
            'action' => 'index', $reg, $year
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
        ]);
    }



    public function import()
    {
<<<<<<< HEAD
        $regions = $this->Rehxestablishment->Region->find('list');
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
