<?php
App::uses('AppController', 'Controller');

/**
 * Advicesxestablishments Controller
 *
 * @property Advicesxestablishment $Advicesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class AdvicesxestablishmentsController extends AppController
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
                'advicesxestablishment.year =' => $yir,
                'advicesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'advicesxestablishment.year =' => $yir,
                    'advicesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'advicesxestablishment.year =' => $yer,
                    'advicesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Advicesxestablishment->recursive = 0;
        $this->set('advicesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Advicesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Advicesxestablishment.january) as jan, SUM(Advicesxestablishment.february) as feb, SUM(Advicesxestablishment.march) as mar, SUM(Advicesxestablishment.april) as apr, SUM(Advicesxestablishment.may) as may, SUM(Advicesxestablishment.june) as jun, SUM(Advicesxestablishment.july) as jul,  SUM(Advicesxestablishment.august) as aug, SUM(Advicesxestablishment.september) as sep, SUM(Advicesxestablishment.october) as oct, SUM(Advicesxestablishment.november) as nov, SUM(Advicesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Advicesxestablishment.year =' => $yir,
                        'Advicesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['jan'];
            $mostrar_total_feb = $months[0][0]['feb'];
            $mostrar_total_mar = $months[0][0]['mar'];
            $mostrar_total_apr = $months[0][0]['apr'];
            $mostrar_total_may = $months[0][0]['may'];
            $mostrar_total_jun = $months[0][0]['jun'];
            $mostrar_total_jul = $months[0][0]['jul'];
            $mostrar_total_aug = $months[0][0]['aug'];
            $mostrar_total_sep = $months[0][0]['sep'];
            $mostrar_total_oct = $months[0][0]['oct'];
            $mostrar_total_nov = $months[0][0]['nov'];
            $mostrar_total_dec = $months[0][0]['decem'];
            $this->set(array('jan' => $mostrar_total_jan, 'feb' => $mostrar_total_feb, 'mar' => $mostrar_total_mar, 'apr' => $mostrar_total_apr, 'may' => $mostrar_total_may, 'jun' => $mostrar_total_jun, 'jul' => $mostrar_total_jul, 'aug' => $mostrar_total_aug, 'sep' => $mostrar_total_sep, 'oct' => $mostrar_total_oct, 'nov' => $mostrar_total_nov, 'decem' => $mostrar_total_dec));

            // UPDATE PARA LA TABLA ADVICES
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Advice');
            $this->Advice->query("UPDATE Advices SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE Advices.regions_id = $region && Advices.year = $yir");
        } else {
            // Advicesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Advicesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Advicesxestablishment.january) as jan, SUM(Advicesxestablishment.february) as feb, SUM(Advicesxestablishment.march) as mar, SUM(Advicesxestablishment.april) as apr, SUM(Advicesxestablishment.may) as may, SUM(Advicesxestablishment.june) as jun, SUM(Advicesxestablishment.july) as jul,  SUM(Advicesxestablishment.august) as aug, SUM(Advicesxestablishment.september) as sep, SUM(Advicesxestablishment.october) as oct, SUM(Advicesxestablishment.november) as nov, SUM(Advicesxestablishment.december) as decem'),
                    'conditions' => array(
                        'Advicesxestablishment.year =' => $yer,
                        'Advicesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan = $months[0][0]['jan'];
            $mostrar_total_feb = $months[0][0]['feb'];
            $mostrar_total_mar = $months[0][0]['mar'];
            $mostrar_total_apr = $months[0][0]['apr'];
            $mostrar_total_may = $months[0][0]['may'];
            $mostrar_total_jun = $months[0][0]['jun'];
            $mostrar_total_jul = $months[0][0]['jul'];
            $mostrar_total_aug = $months[0][0]['aug'];
            $mostrar_total_sep = $months[0][0]['sep'];
            $mostrar_total_oct = $months[0][0]['oct'];
            $mostrar_total_nov = $months[0][0]['nov'];
            $mostrar_total_dec = $months[0][0]['decem'];
            $this->set(array('jan' => $mostrar_total_jan, 'feb' => $mostrar_total_feb, 'mar' => $mostrar_total_mar, 'apr' => $mostrar_total_apr, 'may' => $mostrar_total_may, 'jun' => $mostrar_total_jun, 'jul' => $mostrar_total_jul, 'aug' => $mostrar_total_aug, 'sep' => $mostrar_total_sep, 'oct' => $mostrar_total_oct, 'nov' => $mostrar_total_nov, 'decem' => $mostrar_total_dec));

            // UPDATE PARA LA TABLA HEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['jan'] + $months[0][0]['feb'] + $months[0][0]['mar'];
            $trim2 = $months[0][0]['apr'] + $months[0][0]['may'] + $months[0][0]['jun'];
            $trim3 = $months[0][0]['jul'] + $months[0][0]['aug'] + $months[0][0]['sep'];
            $trim4 = $months[0][0]['oct'] + $months[0][0]['nov'] + $months[0][0]['decem'];

            $this->loadModel('Advice');
            $this->Advice->query("UPDATE Advices SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE Advices.regions_id = $region && Advices.year = $yer");
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
        if (!$this->Advicesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        $options = array('conditions' => array('Advicesxestablishment.' . $this->Advicesxestablishment->primaryKey => $id));
        $this->set('advicesxestablishment', $this->Advicesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Advicesxestablishment->create();
            if ($this->Advicesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The advicesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The advicesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Advicesxestablishment->Establishment->find('list');
        $sibases = $this->Advicesxestablishment->Sibase->find('list');
        $regions = $this->Advicesxestablishment->Region->find('list');
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
        if (!$this->Advicesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Advicesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo'));
            }
        } else {
            $options = array('conditions' => array('Advicesxestablishment.' . $this->Advicesxestablishment->primaryKey => $id));
            $this->request->data = $this->Advicesxestablishment->find('first', $options);
        }
        $establishments = $this->Advicesxestablishment->Establishment->find('list');
        $sibases = $this->Advicesxestablishment->Sibase->find('list');
        $regions = $this->Advicesxestablishment->Region->find('list');
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
        $this->Advicesxestablishment->id = $id;
        if (!$this->Advicesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid advicesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Advicesxestablishment->delete()) {
            $this->Flash->success(__('The advicesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The advicesxestablishment could not be deleted. Please, try again.'));
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
        $regions = $this->Advicesxestablishment->Region->find('list');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
    }

     public function cargar() {
        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];

        
        
        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Advicesxestablishment->find('all', array(
            'conditions' => array(
                'Advicesxestablishment.regions_id' => $reg, 
                'Advicesxestablishment.year' => $year),
            
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

                    $page['Advicesxestablishment']['establishments_id'] = $establishments_id;
                    $page['Advicesxestablishment']['january'] = $enero;
                    $page['Advicesxestablishment']['february'] = $febrero;
                    $page['Advicesxestablishment']['march'] = $marzo;
                    $page['Advicesxestablishment']['april'] = $abril;
                    $page['Advicesxestablishment']['may'] = $mayo;
                    $page['Advicesxestablishment']['june'] = $junio;
                    $page['Advicesxestablishment']['july'] = $julio;
                    $page['Advicesxestablishment']['august'] = $agosto;
                    $page['Advicesxestablishment']['septiembre'] = $septiembre;
                    $page['Advicesxestablishment']['october'] = $octubre;
                    $page['Advicesxestablishment']['november'] = $noviembre;
                    $page['Advicesxestablishment']['december'] = $diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {
                        
                        $this->Advicesxestablishment->query("UPDATE advicesxestablishments SET january = '$enero', february = '$febrero', march = '$marzo', april = '$abril', may = '$mayo', june = '$junio', july = '$julio', august = '$agosto', september = '$septiembre', october = '$octubre', november = '$noviembre', december = '$diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Advicesxestablishment->create();
                        // $this->Advicesxestablishment->save($page);
                        
                        
                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                        
                        
                    }
                    
                }
            }
        } //fin de la comprobacion
        $this->redirect([
            'controller' => 'Advicesxestablishments',
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
