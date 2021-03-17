<?php
App::uses('AppController', 'Controller');
/**
 * Recipesxestablishments Controller
 *
 * @property Hcxestablishment $Hcxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HcxestablishmentsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $name = 'Hcxestablishments';
    public $helpers = array('Highcharts.Highcharts');
    public $uses = array();
    public $layout = 'default';
    public $components = array('Paginator', 'Session', 'Flash', 'Highcharts.Highcharts');
    

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
                'hcxestablishment.year =' => $yir,
                'hcxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yir,
                    'hcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'hcxestablishment.year =' => $yer,
                    'hcxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Hcxestablishment->recursive = 0;
        $this->set('hcxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Hcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yir,
                        'Hcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['c_jan'];
            $mostrar_total_jan2 = $months[0][0]['em_jan'];
            $mostrar_total_jan3 = $months[0][0]['ex_jan'];
            $mostrar_total_feb1 = $months[0][0]['c_feb'];
            $mostrar_total_feb2 = $months[0][0]['em_feb'];
            $mostrar_total_feb3 = $months[0][0]['ex_feb'];
            $mostrar_total_mar1 = $months[0][0]['c_mar'];
            $mostrar_total_mar2 = $months[0][0]['em_mar'];
            $mostrar_total_mar3 = $months[0][0]['ex_mar'];
            $mostrar_total_apr1 = $months[0][0]['c_apr'];
            $mostrar_total_apr2 = $months[0][0]['em_apr'];
            $mostrar_total_apr3 = $months[0][0]['ex_apr'];
            $mostrar_total_may1 = $months[0][0]['c_may'];
            $mostrar_total_may2 = $months[0][0]['em_may'];
            $mostrar_total_may3 = $months[0][0]['ex_may'];
            $mostrar_total_jun1 = $months[0][0]['c_jun'];
            $mostrar_total_jun2 = $months[0][0]['em_jun'];
            $mostrar_total_jun3 = $months[0][0]['ex_jun'];
            $mostrar_total_jul1 = $months[0][0]['c_jul'];
            $mostrar_total_jul2 = $months[0][0]['em_jul'];
            $mostrar_total_jul3 = $months[0][0]['ex_jul'];
            $mostrar_total_aug1 = $months[0][0]['c_aug'];
            $mostrar_total_aug2 = $months[0][0]['em_aug'];
            $mostrar_total_aug3 = $months[0][0]['ex_aug'];
            $mostrar_total_sep1 = $months[0][0]['c_sep'];
            $mostrar_total_sep2 = $months[0][0]['em_sep'];
            $mostrar_total_sep3 = $months[0][0]['ex_sep'];
            $mostrar_total_oct1 = $months[0][0]['c_oct'];
            $mostrar_total_oct2 = $months[0][0]['em_oct'];
            $mostrar_total_oct3 = $months[0][0]['ex_oct'];
            $mostrar_total_nov1 = $months[0][0]['c_nov'];
            $mostrar_total_nov2 = $months[0][0]['em_nov'];
            $mostrar_total_nov3 = $months[0][0]['ex_nov'];
            $mostrar_total_dec1 = $months[0][0]['c_decem'];
            $mostrar_total_dec2 = $months[0][0]['em_decem'];
            $mostrar_total_dec3 = $months[0][0]['ex_decem'];
            $this->set(array('c_jan' => $mostrar_total_jan1, 'c_feb' => $mostrar_total_feb1, 'c_mar' => $mostrar_total_mar1, 'c_apr' => $mostrar_total_apr1, 'c_may' => $mostrar_total_may1, 'c_jun' => $mostrar_total_jun1, 'c_jul' => $mostrar_total_jul1, 'c_aug' => $mostrar_total_aug1, 'c_sep' => $mostrar_total_sep1, 'c_oct' => $mostrar_total_oct1, 'c_nov' => $mostrar_total_nov1, 'c_decem' => $mostrar_total_dec1, 'em_jan' => $mostrar_total_jan2, 'em_feb' => $mostrar_total_feb2, 'em_mar' => $mostrar_total_mar2, 'em_apr' => $mostrar_total_apr2, 'em_may' => $mostrar_total_may2, 'em_jun' => $mostrar_total_jun2, 'em_jul' => $mostrar_total_jul2, 'em_aug' => $mostrar_total_aug2, 'em_sep' => $mostrar_total_sep2, 'em_oct' => $mostrar_total_oct2, 'em_nov' => $mostrar_total_nov2, 'em_decem' => $mostrar_total_dec2,'ex_jan' => $mostrar_total_jan3, 'ex_feb' => $mostrar_total_feb3, 'ex_mar' => $mostrar_total_mar3, 'ex_apr' => $mostrar_total_apr3, 'ex_may' => $mostrar_total_may3, 'ex_jun' => $mostrar_total_jun3, 'ex_jul' => $mostrar_total_jul3, 'ex_aug' => $mostrar_total_aug3, 'ex_sep' => $mostrar_total_sep3, 'ex_oct' => $mostrar_total_oct3, 'ex_nov' => $mostrar_total_nov3, 'ex_decem' => $mostrar_total_dec3));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                     $months[0][0]['em_jan'] + $months[0][0]['em_feb'] + $months[0][0]['em_mar'] +
                     $months[0][0]['ex_jan'] + $months[0][0]['ex_feb'] + $months[0][0]['ex_mar'];
            $trim2 = $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                     $months[0][0]['em_apr'] + $months[0][0]['em_may'] + $months[0][0]['em_jun'] +
                     $months[0][0]['ex_apr'] + $months[0][0]['ex_may'] + $months[0][0]['ex_jun'];
            $trim3 = $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                     $months[0][0]['em_jul'] + $months[0][0]['em_aug'] + $months[0][0]['em_sep'] +
                     $months[0][0]['ex_jul'] + $months[0][0]['ex_aug'] + $months[0][0]['ex_sep'];
            $trim4 = $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] + 
                     $months[0][0]['em_oct'] + $months[0][0]['em_nov'] + $months[0][0]['em_decem'] +
                     $months[0][0]['ex_oct'] + $months[0][0]['ex_nov'] + $months[0][0]['ex_decem'];

            $this->loadModel('Healingcare');
            $this->Healingcare->query("UPDATE healingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healingcares.regions_id = $region && healingcares.year = $yir");
        } else {
            // Hcxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Hcxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem'),
                    'conditions' => array(
                        'Hcxestablishment.year =' => $yer,
                        'Hcxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['c_jan'];
            $mostrar_total_jan2 = $months[0][0]['em_jan'];
            $mostrar_total_jan3 = $months[0][0]['ex_jan'];
            $mostrar_total_feb1 = $months[0][0]['c_feb'];
            $mostrar_total_feb2 = $months[0][0]['em_feb'];
            $mostrar_total_feb3 = $months[0][0]['ex_feb'];
            $mostrar_total_mar1 = $months[0][0]['c_mar'];
            $mostrar_total_mar2 = $months[0][0]['em_mar'];
            $mostrar_total_mar3 = $months[0][0]['ex_mar'];
            $mostrar_total_apr1 = $months[0][0]['c_apr'];
            $mostrar_total_apr2 = $months[0][0]['em_apr'];
            $mostrar_total_apr3 = $months[0][0]['ex_apr'];
            $mostrar_total_may1 = $months[0][0]['c_may'];
            $mostrar_total_may2 = $months[0][0]['em_may'];
            $mostrar_total_may3 = $months[0][0]['ex_may'];
            $mostrar_total_jun1 = $months[0][0]['c_jun'];
            $mostrar_total_jun2 = $months[0][0]['em_jun'];
            $mostrar_total_jun3 = $months[0][0]['ex_jun'];
            $mostrar_total_jul1 = $months[0][0]['c_jul'];
            $mostrar_total_jul2 = $months[0][0]['em_jul'];
            $mostrar_total_jul3 = $months[0][0]['ex_jul'];
            $mostrar_total_aug1 = $months[0][0]['c_aug'];
            $mostrar_total_aug2 = $months[0][0]['em_aug'];
            $mostrar_total_aug3 = $months[0][0]['ex_aug'];
            $mostrar_total_sep1 = $months[0][0]['c_sep'];
            $mostrar_total_sep2 = $months[0][0]['em_sep'];
            $mostrar_total_sep3 = $months[0][0]['ex_sep'];
            $mostrar_total_oct1 = $months[0][0]['c_oct'];
            $mostrar_total_oct2 = $months[0][0]['em_oct'];
            $mostrar_total_oct3 = $months[0][0]['ex_oct'];
            $mostrar_total_nov1 = $months[0][0]['c_nov'];
            $mostrar_total_nov2 = $months[0][0]['em_nov'];
            $mostrar_total_nov3 = $months[0][0]['ex_nov'];
            $mostrar_total_dec1 = $months[0][0]['c_decem'];
            $mostrar_total_dec2 = $months[0][0]['em_decem'];
            $mostrar_total_dec3 = $months[0][0]['ex_decem'];
            $this->set(array('c_jan' => $mostrar_total_jan1, 'c_feb' => $mostrar_total_feb1, 'c_mar' => $mostrar_total_mar1, 'c_apr' => $mostrar_total_apr1, 'c_may' => $mostrar_total_may1, 'c_jun' => $mostrar_total_jun1, 'c_jul' => $mostrar_total_jul1, 'c_aug' => $mostrar_total_aug1, 'c_sep' => $mostrar_total_sep1, 'c_oct' => $mostrar_total_oct1, 'c_nov' => $mostrar_total_nov1, 'c_decem' => $mostrar_total_dec1, 'em_jan' => $mostrar_total_jan2, 'em_feb' => $mostrar_total_feb2, 'em_mar' => $mostrar_total_mar2, 'em_apr' => $mostrar_total_apr2, 'em_may' => $mostrar_total_may2, 'em_jun' => $mostrar_total_jun2, 'em_jul' => $mostrar_total_jul2, 'em_aug' => $mostrar_total_aug2, 'em_sep' => $mostrar_total_sep2, 'em_oct' => $mostrar_total_oct2, 'em_nov' => $mostrar_total_nov2, 'em_decem' => $mostrar_total_dec2, 'ex_jan' => $mostrar_total_jan3, 'ex_feb' => $mostrar_total_feb3, 'ex_mar' => $mostrar_total_mar3, 'ex_apr' => $mostrar_total_apr3, 'ex_may' => $mostrar_total_may3, 'ex_jun' => $mostrar_total_jun3, 'ex_jul' => $mostrar_total_jul3, 'ex_aug' => $mostrar_total_aug3, 'ex_sep' => $mostrar_total_sep3, 'ex_oct' => $mostrar_total_oct3, 'ex_nov' => $mostrar_total_nov3, 'ex_decem' => $mostrar_total_dec3));


            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['c_jan'] + $months[0][0]['c_feb'] + $months[0][0]['c_mar'] +
                     $months[0][0]['em_jan'] + $months[0][0]['em_feb'] + $months[0][0]['em_mar'] +
                     $months[0][0]['ex_jan'] + $months[0][0]['ex_feb'] + $months[0][0]['ex_mar'];
            $trim2 = $months[0][0]['c_apr'] + $months[0][0]['c_may'] + $months[0][0]['c_jun'] +
                     $months[0][0]['em_apr'] + $months[0][0]['em_may'] + $months[0][0]['em_jun'] +
                     $months[0][0]['ex_apr'] + $months[0][0]['ex_may'] + $months[0][0]['ex_jun'];
            $trim3 = $months[0][0]['c_jul'] + $months[0][0]['c_aug'] + $months[0][0]['c_sep'] +
                     $months[0][0]['em_jul'] + $months[0][0]['em_aug'] + $months[0][0]['em_sep'] +
                     $months[0][0]['ex_jul'] + $months[0][0]['ex_aug'] + $months[0][0]['ex_sep'];
            $trim4 = $months[0][0]['c_oct'] + $months[0][0]['c_nov'] + $months[0][0]['c_decem'] + 
                     $months[0][0]['em_oct'] + $months[0][0]['em_nov'] + $months[0][0]['em_decem'] +
                     $months[0][0]['ex_oct'] + $months[0][0]['ex_nov'] + $months[0][0]['ex_decem'];

            $this->loadModel('Healingcare');
            $this->Healingcare->query("UPDATE healingcares SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE healingcares.regions_id = $region && healingcares.year = $yer");
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
        if (!$this->Hcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        $options = array('conditions' => array('Hcxestablishment.' . $this->Hcxestablishment->primaryKey => $id));
        $this->set('hcxestablishment', $this->Hcxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Hcxestablishment->create();
            if ($this->Hcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The hcxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The hcxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Hcxestablishment->Establishment->find('list');
        $sibases = $this->Hcxestablishment->Sibase->find('list');
        $regions = $this->Hcxestablishment->Region->find('list');
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
        if (!$this->Hcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Hcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Hcxestablishment.' . $this->Hcxestablishment->primaryKey => $id));
            $this->request->data = $this->Hcxestablishment->find('first', $options);
        }
        $establishments = $this->Hcxestablishment->Establishment->find('list');
        $sibases = $this->Hcxestablishment->Sibase->find('list');
        $regions = $this->Hcxestablishment->Region->find('list');
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
        $this->Hcxestablishment->id = $id;
        if (!$this->Hcxestablishment->exists()) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Hcxestablishment->delete()) {
            $this->Flash->success(__('The hcxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The hcxestablishment could not be deleted. Please, try again.'));
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
        $regions = $this->Hcxestablishment->Region->find('list');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
    }

    public function cargar()
    {
        
        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Hcxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Hcxestablishment.regions_id' => $reg,
                    'Hcxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
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
                $c_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $e_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $ex_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $c_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $e_febrero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $ex_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $c_marzo = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $e_marzo = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $ex_marzo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $c_abril = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $e_abril = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $ex_abril = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $c_mayo = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $e_mayo = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $ex_mayo = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $c_junio = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $e_junio = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $ex_junio = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $c_julio = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $e_julio = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $ex_julio = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $c_agosto = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $e_agosto = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $ex_agosto = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $c_septiembre = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());
                $e_septiembre = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $ex_septiembre = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $c_octubre = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $e_octubre = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $ex_octubre = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());
                $c_noviembre = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $e_noviembre = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $ex_noviembre = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $c_diciembre = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $e_diciembre = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());
                $ex_diciembre = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Hcxestablishment']['establishments_id'] = $establishments_id;
                    $page['Hcxestablishment']['con_january'] = $c_enero;
                    $page['Hcxestablishment']['eme_january'] = $e_enero;
                    $page['Hcxestablishment']['ext_january'] = $ex_enero;
                    $page['Hcxestablishment']['con_february'] = $c_febrero;
                    $page['Hcxestablishment']['eme_february'] = $e_febrero;
                    $page['Hcxestablishment']['ext_february'] = $ex_febrero;
                    $page['Hcxestablishment']['con_march'] = $c_marzo;
                    $page['Hcxestablishment']['eme_march'] = $e_marzo;
                    $page['Hcxestablishment']['ext_march'] = $ex_marzo;
                    $page['Hcxestablishment']['con_april'] = $c_abril;
                    $page['Hcxestablishment']['eme_april'] = $e_abril;
                    $page['Hcxestablishment']['ext_april'] = $ex_abril;
                    $page['Hcxestablishment']['con_may'] = $c_mayo;
                    $page['Hcxestablishment']['eme_may'] = $e_mayo;
                    $page['Hcxestablishment']['ext_may'] = $ex_mayo;
                    $page['Hcxestablishment']['con_june'] = $c_junio;
                    $page['Hcxestablishment']['eme_june'] = $e_junio;
                    $page['Hcxestablishment']['ext_june'] = $ex_junio;
                    $page['Hcxestablishment']['con_july'] = $c_julio;
                    $page['Hcxestablishment']['eme_july'] = $e_julio;
                    $page['Hcxestablishment']['ext_july'] = $ex_julio;
                    $page['Hcxestablishment']['con_august'] = $c_agosto;
                    $page['Hcxestablishment']['eme_august'] = $e_agosto;
                    $page['Hcxestablishment']['ext_august'] = $ex_agosto;
                    $page['Hcxestablishment']['con_septiembre'] = $c_septiembre;
                    $page['Hcxestablishment']['eme_septiembre'] = $e_septiembre;
                    $page['Hcxestablishment']['ext_septiembre'] = $ex_septiembre;
                    $page['Hcxestablishment']['con_october'] = $c_octubre;
                    $page['Hcxestablishment']['eme_october'] = $e_octubre;
                    $page['Hcxestablishment']['ext_october'] = $ex_octubre;
                    $page['Hcxestablishment']['con_november'] = $c_noviembre;
                    $page['Hcxestablishment']['eme_november'] = $e_noviembre;
                    $page['Hcxestablishment']['ext_november'] = $ex_noviembre;
                    $page['Hcxestablishment']['con_december'] = $c_diciembre;
                    $page['Hcxestablishment']['eme_december'] = $e_diciembre;
                    $page['Hcxestablishment']['ext_december'] = $ex_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Hcxestablishment->query("UPDATE hcxestablishments SET con_january = '$c_enero', con_february = '$c_febrero', con_march = '$c_marzo', con_april = '$c_abril', con_may = '$c_mayo', con_june = '$c_junio', con_july = '$c_julio', con_august = '$c_agosto', con_september = '$c_septiembre', con_october = '$c_octubre', con_november = '$c_noviembre', con_december = '$c_diciembre', eme_january = '$e_enero', eme_february = '$e_febrero', eme_march = '$e_marzo', eme_april = '$e_abril', eme_may = '$e_mayo', eme_june = '$e_junio', eme_july = '$e_julio', eme_august = '$e_agosto', eme_september = '$e_septiembre', eme_october = '$e_octubre', eme_november = '$e_noviembre', eme_december = '$e_diciembre', ext_january = '$ex_enero', ext_february = '$ex_febrero', ext_march = '$ex_marzo', ext_april = '$ex_abril', ext_may = '$ex_mayo', ext_june = '$ex_junio', ext_july = '$ex_julio', ext_august = '$ex_agosto', ext_september = '$ex_septiembre', ext_october = '$ex_octubre', ext_november = '$ex_noviembre', ext_december = '$ex_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Hcxestablishment->create();
                        // $this->Hcxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        // $this->redirect([
        //     'controller' => 'Hcxestablishments',
        //     'action' => 'index', $reg, $year
        // ]);
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

    public function chart($yer, $reg)
    {
        $this->set(array('yer' => $yer));
        $this->set(array('reg' => $reg));

        $mon = $this->Hcxestablishment->find('all',
            array(
                'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem'),
                'conditions' => array(
                    'Hcxestablishment.year =' => $yer,
                    'Hcxestablishment.regions_id' => $reg
                )
            )
        );
        
        $tot_jan1 = $mon[0][0]['c_jan'];
        $tot_jan2 = $mon[0][0]['em_jan'];
        $tot_jan3 = $mon[0][0]['ex_jan'];
        $tot_feb1 = $mon[0][0]['c_feb'];
        $tot_feb2 = $mon[0][0]['em_feb'];
        $tot_feb3 = $mon[0][0]['ex_feb'];
        $tot_mar1 = $mon[0][0]['c_mar'];
        $tot_mar2 = $mon[0][0]['em_mar'];
        $tot_mar3 = $mon[0][0]['ex_mar'];
        $tot_apr1 = $mon[0][0]['c_apr'];
        $tot_apr2 = $mon[0][0]['em_apr'];
        $tot_apr3 = $mon[0][0]['ex_apr'];
        $tot_may1 = $mon[0][0]['c_may'];
        $tot_may2 = $mon[0][0]['em_may'];
        $tot_may3 = $mon[0][0]['ex_may'];
        $tot_jun1 = $mon[0][0]['c_jun'];
        $tot_jun2 = $mon[0][0]['em_jun'];
        $tot_jun3 = $mon[0][0]['ex_jun'];
        $tot_jul1 = $mon[0][0]['c_jul'];
        $tot_jul2 = $mon[0][0]['em_jul'];
        $tot_jul3 = $mon[0][0]['ex_jul'];
        $tot_aug1 = $mon[0][0]['c_aug'];
        $tot_aug2 = $mon[0][0]['em_aug'];
        $tot_aug3 = $mon[0][0]['ex_aug'];
        $tot_sep1 = $mon[0][0]['c_sep'];
        $tot_sep2 = $mon[0][0]['em_sep'];
        $tot_sep3 = $mon[0][0]['ex_sep'];
        $tot_oct1 = $mon[0][0]['c_oct'];
        $tot_oct2 = $mon[0][0]['em_oct'];
        $tot_oct3 = $mon[0][0]['ex_oct'];
        $tot_nov1 = $mon[0][0]['c_nov'];
        $tot_nov2 = $mon[0][0]['em_nov'];
        $tot_nov3 = $mon[0][0]['ex_nov'];
        $tot_dec1 = $mon[0][0]['c_decem'];
        $tot_dec2 = $mon[0][0]['em_decem'];
        $tot_dec3 = $mon[0][0]['ex_decem'];
// *************************************************************************************************************************************
        $ene1 = array(intval($tot_jan1));
        $ene2 = array(intval($tot_jan2));
        $ene3 = array(intval($tot_jan3));
        $feb1 = array(intval($tot_feb1));
        $feb2 = array(intval($tot_feb2));
        $feb3 = array(intval($tot_feb3));
        $mar1 = array(intval($tot_mar1));
        $mar2 = array(intval($tot_mar2));
        $mar3 = array(intval($tot_mar3));
        $abr1 = array(intval($tot_apr1));
        $abr2 = array(intval($tot_apr2));
        $abr3 = array(intval($tot_apr3));
        $may1 = array(intval($tot_may1));
        $may2 = array(intval($tot_may2));
        $may3 = array(intval($tot_may3));
        $jun1 = array(intval($tot_jun1));
        $jun2 = array(intval($tot_jun2));
        $jun3 = array(intval($tot_jun3));
        $jul1 = array(intval($tot_jul1));
        $jul2 = array(intval($tot_jul2));
        $jul3 = array(intval($tot_jul3));
        $aug1 = array(intval($tot_aug1));
        $aug2 = array(intval($tot_aug2));
        $aug3 = array(intval($tot_aug3));
        $sep1 = array(intval($tot_sep1));
        $sep2 = array(intval($tot_sep2));
        $sep3 = array(intval($tot_sep3));
        $oct1 = array(intval($tot_oct1));
        $oct2 = array(intval($tot_oct2));
        $oct3 = array(intval($tot_oct3));
        $nov1 = array(intval($tot_nov1));
        $nov2 = array(intval($tot_nov2));
        $nov3 = array(intval($tot_nov3));
        $dec1 = array(intval($tot_dec1));
        $dec2 = array(intval($tot_dec2));
        $dec3 = array(intval($tot_dec3));
        // suma
        // promedio
        $prom1 = ($tot_jan1 + $tot_jan2 + $tot_jan3) / 3;
        $prom2 = ($tot_feb1 + $tot_feb2 + $tot_feb3) / 3;
        $prom3 = ($tot_mar1 + $tot_mar2 + $tot_mar3) / 3;
        $prom4 = ($tot_apr1 + $tot_apr2 + $tot_apr3) / 3;
        $prom5 = ($tot_may1 + $tot_may2 + $tot_may3) / 3;
        $prom6 = ($tot_jun1 + $tot_jun2 + $tot_jun3) / 3;
        $prom7 = ($tot_jul1 + $tot_jul2 + $tot_jul3) / 3;
        $prom8 = ($tot_aug1 + $tot_aug2 + $tot_aug3) / 3;
        $prom9 = ($tot_sep1 + $tot_sep2 + $tot_sep3) / 3;
        $prom10 = ($tot_oct1 + $tot_oct2 + $tot_oct3) / 3;
        $prom11 = ($tot_nov1 + $tot_nov2 + $tot_nov3) / 3;
        $prom12 = ($tot_dec1 + $tot_dec2 + $tot_dec3) / 3;

        $conData = array($ene1, $feb1, $mar1, $abr1, $may1, $jun1, $jul1, $aug1, $sep1, $oct1, $nov1, $dec1);
        $emeData = array($ene2, $feb2, $mar2, $abr2, $may2, $jun2, $jul2, $aug2, $sep2, $oct1, $nov2, $dec2);
        $extData = array($ene3, $feb3, $mar3, $abr3, $may3, $jun3, $jul3, $aug3, $sep3, $oct3, $nov3, $dec3);
        $avgData = array($prom1, $prom2, $prom3, $prom4, $prom5, $prom6, $prom7, $prom8, $prom9, $prom10, $prom11, $prom12);

        $sum_con = $tot_jan1 + $tot_feb1 + $tot_mar1 + $tot_apr1 + $tot_may1 + $tot_jun1 + $tot_jul1 + $tot_aug1 + $tot_sep1 + $tot_oct1 + $tot_nov1 + $tot_dec1;
        $sum_eme = $tot_jan2 + $tot_feb2 + $tot_mar2 + $tot_apr2 + $tot_may2 + $tot_jun2 + $tot_jul2 + $tot_aug2 + $tot_sep2 + $tot_oct2 + $tot_nov2 + $tot_dec2;
        $sum_ext = $tot_jan3 + $tot_feb3 + $tot_mar3 + $tot_apr3 + $tot_may3 + $tot_jun3 + $tot_jul3 + $tot_aug3 + $tot_sep3 + $tot_oct3 + $tot_nov3 + $tot_dec3;

    
        $chartName = 'Combination Chart';

        $mychart = $this->Highcharts->create($chartName, 'column');

        $this->Highcharts->setChartParams(
            $chartName,
            array(
                'renderTo' => 'combowrapper', // div to display chart inside
                'chartWidth' => 1300,
                'chartHeight' => 700,
                'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
                'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
                'title' => 'Atenciones Curativas - Anual',
                'subtitle' => 'Fuente: Simmow, Vigepes, Seps, Vacunas, Silin, Desastres',
                'xAxisLabelsEnabled' => TRUE,
                'xAxisCategories' => array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'),
                'yAxisTitleText' => 'Unidades',
                'yAxisMaxPadding' => '0.1',
                'enableAutoStep' => FALSE,
                'creditsEnabled' => FALSE,
                'plotOptionsColumnDataLabelsEnabled' => true,
                
            )
        );

        $conSeries = $this->Highcharts->addChartSeries();
        $conSeries->type = 'column';
        $conSeries->addName('Consulta Externa')
            ->addData($conData);

        $emeSeries = $this->Highcharts->addChartSeries();
        $emeSeries->type = 'column';
        $emeSeries->addName('Emergencia')
            ->addData($emeData);

        $extSeries = $this->Highcharts->addChartSeries();
        $extSeries->type = 'column';
        $extSeries->addName('Extramural')
            ->addData($extData);

        $avgSeries = $this->Highcharts->addChartSeries();
        $avgSeries->type = 'spline';
        $avgSeries->addName('Promedio')
            ->addData($avgData);

        

        $mychart->addSeries($conSeries);
        $mychart->addSeries($emeSeries);
        $mychart->addSeries($extSeries);

        $mychart->addSeries($avgSeries);

        $this->set(compact('chartName'));

        // **********************************************************************************************************************************************************************************************************************************************************************

        $mont = $this->Hcxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Hcxestablishment.year =' => $yer,
                    'Hcxestablishment.regions_id' => $reg
                )
            )
        );
// echo "<pre>";
// print_r($mont);
// echo 'hola a todos'.$mont[20]['Establishment']['establishment_name'];
// echo "</pre>";
        $tot = $sum_con + $sum_eme + $sum_ext;

        $p1 = ($sum_con * 100)/$tot;
        $p2 = ($sum_eme * 100)/$tot;
        $p3 = ($sum_ext * 100)/$tot;
        $p11 = number_format($p1, 2, '.', '');
        $p22 = number_format($p2, 2, '.', '');
        $p33 = number_format($p3, 2, '.', '');

        $chartData = array(
            array(
                'name' => 'Consulta Externa '. $p11. '%',
                'y' => doubleval($p11),
                'sliced' => false,
                'selected' => false,
            ),
            array(
                'name' => 'Emergencias '. $p22. '%', 
                'y' => doubleval($p22)
            ),
            array(
                'name' => 'Extramural '.$p33. '%', 
                'y' => doubleval($p33)
            ),
            
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
                'title' => 'Atenciones Curativas - Consultas Externas, Emergencias y Extramural',
                'subtitle' => 'Fuente: Simmow, Vigepes, Seps, Vacunas, Silin, Desastres',
                'creditsEnabled' => false,
                'tooltipEnabled' => true,
                'tooltipValueSuffix' => '%'
                
            )
        );

        $series = $this->Highcharts->addChartSeries();

        $series->addName('Porcentaje')
        ->addData($chartData);

        $pie3dChart->addSeries($series);
        $this->set(compact('chartName2'));

        // **********************************************************************************************************************************************************************************************************************************************************************
        $chartName3 = 'Stacked Column Chart';

        $Mychart = $this->Highcharts->create(
            $chartName3,
            array(
                'type' => 'column',
                'exporting' => TRUE
            )
        );

        $this->Highcharts->setChartParams(
            $chartName3,
            array(
                'renderTo' => 'columnwrapper', // div to display chart inside
                'chartWidth' => 1300,
                'chartHeight' => 750,
                'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
                'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
                'title' => 'Stacked Column Chart',
                'subtitle' => 'Source: World Bank',
                'xAxisLabelsEnabled' => TRUE,
                'yAxisTitleText' => 'Total Fruit Consumption',
                'enableAutoStep' => false,
                'creditsEnabled' => FALSE,
                'plotOptionsSeriesStacking' => 'normal', // other options is 'percent'
                'plotOptionsColumnDataLabelsEnabled' => true,
            )
        );

        // Consulta sql la cual devuelve todos los establecimientos de la region en la variable "reg"
        $hcxesta = $this->Hcxestablishment->Establishment->find(
            'list',
            array(
                'fields' => array('Establishment.establishment_name'),
                'conditions' => array(
                    'Establishment.regions_id' => $reg
                )
            )
        );

        //hace que empiece el array en 0
        $hcxesta = array_values($hcxesta);

        // se encarga de realizar un foreach y mostrar todos los establecimientos de esa region        
            foreach ($hcxesta as $valo) {
                $this->Highcharts->setChartParams(
                    $chartName3, array(
                        'xAxisCategories' => $hcxesta
                    )    
                );
            }

        // consulta sql que devuelve toda la tabla Hcxestablishments
        $mes = $this->Hcxestablishment->query("SELECT con_january + eme_january + ext_january as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes2 = $this->Hcxestablishment->query("SELECT con_february + eme_february + ext_february as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes3 = $this->Hcxestablishment->query("SELECT con_march + eme_march + ext_march as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes4 = $this->Hcxestablishment->query("SELECT con_april + eme_april + ext_april as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes5 = $this->Hcxestablishment->query("SELECT con_may + eme_may + ext_may as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes6 = $this->Hcxestablishment->query("SELECT con_june + eme_june + ext_june as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes7 = $this->Hcxestablishment->query("SELECT con_july + eme_july + ext_july as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes8 = $this->Hcxestablishment->query("SELECT con_august + eme_august + ext_august as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes9 = $this->Hcxestablishment->query("SELECT con_september + eme_september + ext_september as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes10 = $this->Hcxestablishment->query("SELECT con_october + eme_october + ext_october as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes11 = $this->Hcxestablishment->query("SELECT con_november + eme_november + ext_november as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");

        $mes12 = $this->Hcxestablishment->query("SELECT con_december + eme_december + ext_december as suma FROM hcxestablishments WHERE regions_id = $reg && year = $yer");
            
        function getSuma($arreglo)
        {
            $a_temp = array();

            foreach ($arreglo as $arr) {
                $a_temp[] = $arr[0]["suma"];
                
            }
            return $a_temp;
        }

        $mes = getSuma($mes);
        $mes = array_map('intval', $mes);

        $mes2 = getSuma($mes2);
        $mes2 = array_map('intval', $mes2);

        $mes3 = getSuma($mes3);
        $mes3 = array_map('intval', $mes3);

        $mes4 = getSuma($mes4);
        $mes4 = array_map('intval', $mes4);

        $mes5 = getSuma($mes5);
        $mes5 = array_map('intval', $mes5);

        $mes6 = getSuma($mes6);
        $mes6 = array_map('intval', $mes6);

        $mes7 = getSuma($mes7);
        $mes7 = array_map('intval', $mes7);

        $mes8 = getSuma($mes8);
        $mes8 = array_map('intval', $mes8);

        $mes9 = getSuma($mes9);
        $mes9 = array_map('intval', $mes9);

        $mes10 = getSuma($mes10);
        $mes10 = array_map('intval', $mes10);

        $mes11 = getSuma($mes11);
        $mes11 = array_map('intval', $mes11);

        $mes12 = getSuma($mes12);
        $mes12 = array_map('intval', $mes12);

        foreach ($mes as $valor) {

            $data = $mes;

            $enero = $this->Highcharts->addChartSeries();
            $enero->type = 'column';
            $enero->addName('Enero')
            ->addData($mes);

            $febrero = $this->Highcharts->addChartSeries();
            $febrero->type = 'column';
            $febrero->addName('Febrero')
            ->addData($mes2);

            $marzo = $this->Highcharts->addChartSeries();
            $marzo->type = 'column';
            $marzo->addName('Marzo')
            ->addData($mes3);

            $abril = $this->Highcharts->addChartSeries();
            $abril->type = 'column';
            $abril->addName('Abril')
            ->addData($mes4);

            $mayo = $this->Highcharts->addChartSeries();
            $mayo->type = 'column';
            $mayo->addName('Mayo')
            ->addData($mes5);

            $junio = $this->Highcharts->addChartSeries();
            $junio->type = 'column';
            $junio->addName('Junio')
            ->addData($mes6);

            $julio = $this->Highcharts->addChartSeries();
            $julio->type = 'column';
            $julio->addName('Julio')
            ->addData($mes7);

            $agosto = $this->Highcharts->addChartSeries();
            $agosto->type = 'column';
            $agosto->addName('Agosto')
            ->addData($mes8);

            $septiembre = $this->Highcharts->addChartSeries();
            $septiembre->type = 'column';
            $septiembre->addName('Septiembre')
            ->addData($mes9);

            $octubre = $this->Highcharts->addChartSeries();
            $octubre->type = 'column';
            $octubre->addName('Octubre')
            ->addData($mes10);

            $noviembre = $this->Highcharts->addChartSeries();
            $noviembre->type = 'column';
            $noviembre->addName('Noviembre')
            ->addData($mes11);

            $diciembre = $this->Highcharts->addChartSeries();
            $diciembre->type = 'column';
            $diciembre->addName('Diciembre')
            ->addData($mes12);

            
        }
    
        $Mychart->addSeries($enero);
        $Mychart->addSeries($febrero);
        $Mychart->addSeries($marzo);
        $Mychart->addSeries($abril);
        $Mychart->addSeries($mayo);
        $Mychart->addSeries($junio);
        $Mychart->addSeries($julio);
        $Mychart->addSeries($agosto);
        $Mychart->addSeries($septiembre);
        $Mychart->addSeries($octubre);
        $Mychart->addSeries($noviembre);
        $Mychart->addSeries($diciembre);

        $this->set(compact('chartName3'));





        // $chartName3 = 'Bar Chart';
        // $Mychart = $this->Highcharts->create($chartName3, 'bar');

        // $this->Highcharts->setChartParams(
        //     $chartName3,
        //     array(
        //         'renderTo' => 'barwrapper', // div to display chart inside
        //         'chartWidth' => 1300,
        //         'chartHeight' => 1500,
        //         'chartMarginTop' => 60,
        //         'chartMarginLeft' => 90,
        //         'chartMarginRight' => 30,
        //         'chartMarginBottom' => 110,
        //         'chartSpacingRight' => 10,
        //         'chartSpacingBottom' => 15,
        //         'chartSpacingLeft' => 0,
        //         'chartAlignTicks' => FALSE,
        //         'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
        //         'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
        //         'title' => 'Monthly Sales Summary',
        //         'titleAlign' => 'left',
        //         'titleFloating' => TRUE,
        //         'titleStyleFont' => '18px Metrophobic, Arial, sans-serif',
        //         'titleStyleColor' => '#0099ff',
        //         'titleX' => 20,
        //         'titleY' => 20,
        //         'legendEnabled' => TRUE,
        //         'legendLayout' => 'horizontal',
        //         'legendAlign' => 'center',
        //         'legendVerticalAlign ' => 'bottom',
        //         'legendItemStyle' => array('color' => '#222'),
        //         'legendBackgroundColorLinearGradient' => array(0, 0, 0, 25),
        //         'legendBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
        //         'tooltipEnabled' => FALSE,
        //         // 'tooltipBackgroundColorLinearGradient' => array(0,0,0,50),   // triggers js error
        //         // 'tooltipBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
        //         //'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
        //         //'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,
        //         //'xAxisType' 				=> 'datetime',
        //         //'xAxisTickInterval' 			=> 10,
        //         //'xAxisStartOnTick' 			=> TRUE,
        //         //'xAxisTickmarkPlacement' 		=> 'on',
        //         //'xAxisTickLength' 			=> 10,
        //         //'xAxisMinorTickLength' 		=> 5,
        //         'xAxisLabelsEnabled' => TRUE,
        //         'xAxisLabelsAlign' => 'right',
        //         'xAxisLabelsStep' => 1,
        //         //'xAxisLabelsRotation' 		=> -35,
        //         'xAxislabelsX' => -10,
        //         'xAxisLabelsY' => 20,
        //         'xAxisCategories' => array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
        //         //'yAxisMin' 				=> 0,
        //         //'yAxisMaxPadding'			=> 0.2,
        //         //'yAxisEndOnTick'			=> FALSE,
        //         //'yAxisMinorGridLineWidth' 		=> 0,
        //         //'yAxisMinorTickInterval' 		=> 'auto',
        //         //'yAxisMinorTickLength' 		=> 1,
        //         //'yAxisTickLength'			=> 2,
        //         //'yAxisMinorTickWidth'			=> 1,
        //         'yAxisTitleText' => 'Units',
        //         //'yAxisTitleAlign' 		=> 'high',
        //         //'yAxisTitleStyleFont' 	=> '14px Metrophobic, Arial, sans-serif',
        //         //'yAxisTitleRotation' 		=> 0,
        //         //'yAxisTitleX' 		=> 0,
        //         //'yAxisTitleY' 		=> -10,
        //         //'yAxisPlotLines' 		=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),
        //         // autostep options
        //         'exportingEnabled' => FALSE,
        //         'enableAutoStep' => FALSE,
        //         'plotOptionsColumnDataLabelsEnabled' => true
        //     )
        // );
        // $hcxestablishments = $this->Hcxestablishment->find(
        //     'all',
        //     array(
        //         'fields' => array(),
        //         'conditions' => array(
        //             'Hcxestablishment.year =' => $yer,
        //             'Hcxestablishment.regions_id' => $reg
        //         ),
        //     )
        // );

        // foreach ($hcxestablishments as $valor) {
        //     $t1 = (intval($valor['Hcxestablishment']['con_january']) + intval($valor['Hcxestablishment']['eme_january']) + intval($valor['Hcxestablishment']['ext_january']));

        //     $t2 = ($valor['Hcxestablishment']['con_february'] + $valor['Hcxestablishment']['eme_february'] + $valor['Hcxestablishment']['ext_february']);

        //     $t3 = ($valor['Hcxestablishment']['con_march'] + $valor['Hcxestablishment']['eme_march'] + $valor['Hcxestablishment']['ext_march']);

        //     $t4 = ($valor['Hcxestablishment']['con_april'] + $valor['Hcxestablishment']['eme_april'] + $valor['Hcxestablishment']['ext_april']);

        //     $t5 = ($valor['Hcxestablishment']['con_may'] + $valor['Hcxestablishment']['eme_may'] + $valor['Hcxestablishment']['ext_may']);

        //     $t6 = ($valor['Hcxestablishment']['con_june'] + $valor['Hcxestablishment']['eme_june'] + $valor['Hcxestablishment']['ext_june']);

        //     $t7 = ($valor['Hcxestablishment']['con_july'] + $valor['Hcxestablishment']['eme_july'] + $valor['Hcxestablishment']['ext_july']);

        //     $t8 = ($valor['Hcxestablishment']['con_august'] + $valor['Hcxestablishment']['eme_august'] + $valor['Hcxestablishment']['ext_august']);

        //     $t9 = ($valor['Hcxestablishment']['con_september'] + $valor['Hcxestablishment']['eme_september'] + $valor['Hcxestablishment']['ext_september']);

        //     $t10 = ($valor['Hcxestablishment']['con_october'] + $valor['Hcxestablishment']['eme_october'] + $valor['Hcxestablishment']['ext_october']);

        //     $t11 = ($valor['Hcxestablishment']['con_november'] + $valor['Hcxestablishment']['eme_november'] + $valor['Hcxestablishment']['ext_november']);

        //     $t12 = ($valor['Hcxestablishment']['con_december'] + $valor['Hcxestablishment']['eme_decem'] + $valor['Hcxestablishment']['ext_decem']);

        //     $dati = array($t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12);

        //     $estaSeries = $this->Highcharts->addChartSeries();
        //     $estaSeries->type = 'column';
        //     $estaSeries->addName($valor['Establishment']['establishment_name'])
        //     ->addData($dati);

        //     $Mychart->addSeries($estaSeries);

        //     echo "<pre>";
        //     var_dump($valor);
        //     echo "</pre>";
        // }

        // $conSeries = $this->Highcharts->addChartSeries();
        // $conSeries->type = 'column';
        // $conSeries->addName('Consulta Externa')
        // ->addData($conData);

        // $emeSeries = $this->Highcharts->addChartSeries();
        // $emeSeries->type = 'column';
        // $emeSeries->addName('Emergencia')
        // ->addData($emeData);

        // $extSeries = $this->Highcharts->addChartSeries();
        // $extSeries->type = 'column';
        // $extSeries->addName('Extramural')
        // ->addData($extData);

        // $Mychart->addSeries($conSeries);
        // $Mychart->addSeries($emeSeries);
        // $Mychart->addSeries($extSeries);
        // $this->set(compact('chartName3'));
        // // *********************************************************************************************************************************************************************************************************************************************************************
    
        $chartName4 = 'Line Chart';

        $michart = $this->Highcharts->create($chartName4, 'line');
        if ($reg == 1 || $reg == 2 || $reg == 3 || $reg == 4) {
            $e = 200;
        }else {
            $e = 300;
        }
        $this->Highcharts->setChartParams(
            $chartName4,
            array(
                'renderTo' => 'linewrapper', // div to display chart inside
                'chartWidth' => 700,
                'chartHeight' => 600,
                'chartMarginTop' => 60,
                'chartMarginLeft' => 90,
                'chartMarginRight' => 30,
                'chartMarginBottom' => $e,
                'chartSpacingRight' => 10,
                'chartSpacingBottom' => 50,
                'chartSpacingLeft' => 0,
                'chartAlignTicks' => FALSE,
                'chartBackgroundColorLinearGradient' => array(0, 0, 0, 300),
                'chartBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
                'title' => 'Establecimientos por Mes',
                'titleAlign' => 'left',
                'titleFloating' => TRUE,
                'titleStyleFont' => '18px Metrophobic, Arial, sans-serif',
                'titleStyleColor' => '#0099ff',
                'titleX' => 20,
                'titleY' => 20,
                'legendEnabled' => true,
                'legendLayout' => 'horizontal',
                'legendAlign' => 'center',
                'legendY' => '',
                'legendVerticalAlign ' => 'bottom',
                'legendItemStyle' => array('color' => '#222'),
                'legendBackgroundColorLinearGradient' => array(0, 0, 0, 25),
                'legendBackgroundColorStops' => array(array(0, 'rgb(217, 217, 217)'), array(1, 'rgb(255, 255, 255)')),
                'tooltipEnabled' => FALSE,
                //'tooltipBackgroundColorLinearGradient' 	=> array(0,0,0,50),   // triggers js error
                //'tooltipBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),
                //'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
                //'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,
                //'xAxisType' 				=> 'datetime',
                //'xAxisTickInterval' 			=> 10,
                //'xAxisStartOnTick' 			=> TRUE,
                //'xAxisTickmarkPlacement' 		=> 'on',
                //'xAxisTickLength' 			=> 10,
                //'xAxisMinorTickLength' 		=> 5,
                'xAxisLabelsEnabled' => TRUE,
                'xAxisLabelsAlign' => 'right',
                'xAxisLabelsStep' => 1,
                //'xAxisLabelsRotation' 		=> -35,
                'xAxislabelsX' => 5,
                'xAxisLabelsY' => 10,

                'xAxisCategories' => array(
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ),
                //'yAxisMin' 				=> 0,
                //'yAxisMaxPadding'			=> 0.2,
                //'yAxisEndOnTick'			=> FALSE,
                //'yAxisMinorGridLineWidth' => 0,
                //'yAxisMinorTickInterval' 		=> 'auto',
                //'yAxisMinorTickLength' 		=> 1,
                //'yAxisTickLength'			=> 2,
                //'yAxisMinorTickWidth'			=> 1,
                'yAxisTitleText' => 'Units Sold',
                //'yAxisTitleAlign' 			=> 'high',
                //'yAxisTitleStyleFont' 		=> '14px Metrophobic, Arial, sans-serif',
                //'yAxisTitleRotation' 			=> 0,
                //'yAxisTitleX' 			=> 0,
                //'yAxisTitleY' 			=> -10,
                //'yAxisPlotLines' 			=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),

                /* autostep options */
                'enableAutoStep' => FALSE
            )
        );
        
            // $hcxestablishments = $this->Hcxestablishment->find(
            //     'all',
            //     array(
            //         'fields' => array('SUM(Hcxestablishment.con_january) as c_jan, SUM(Hcxestablishment.eme_january) as em_jan, SUM(Hcxestablishment.con_february) as c_feb, SUM(Hcxestablishment.eme_february) as em_feb, SUM(Hcxestablishment.con_march) as c_mar, SUM(Hcxestablishment.eme_march) as em_mar, SUM(Hcxestablishment.con_april) as c_apr, SUM(Hcxestablishment.eme_april) as em_apr, SUM(Hcxestablishment.con_may) as c_may, SUM(Hcxestablishment.eme_may) as em_may, SUM(Hcxestablishment.con_june) as c_jun, SUM(Hcxestablishment.eme_june) as em_jun, SUM(Hcxestablishment.con_july) as c_jul, SUM(Hcxestablishment.eme_july) as em_jul,  SUM(Hcxestablishment.con_august) as c_aug, SUM(Hcxestablishment.eme_august) as em_aug, SUM(Hcxestablishment.con_september) as c_sep, SUM(Hcxestablishment.eme_september) as em_sep, SUM(Hcxestablishment.con_october) as c_oct, SUM(Hcxestablishment.eme_october) as em_oct, SUM(Hcxestablishment.con_november) as c_nov, SUM(Hcxestablishment.eme_november) as em_nov, SUM(Hcxestablishment.con_december) as c_decem, SUM(Hcxestablishment.eme_december) as em_decem, SUM(Hcxestablishment.ext_january) as ex_jan, SUM(Hcxestablishment.ext_february) as ex_feb, SUM(Hcxestablishment.ext_march) as ex_mar, SUM(Hcxestablishment.ext_april) as ex_apr, SUM(Hcxestablishment.ext_may) as ex_may, SUM(Hcxestablishment.ext_june) as ex_jun, SUM(Hcxestablishment.ext_july) as ex_jul, SUM(Hcxestablishment.ext_august) as ex_aug, SUM(Hcxestablishment.ext_september) as ex_sep, SUM(Hcxestablishment.ext_october) as ex_oct, SUM(Hcxestablishment.ext_november) as ex_nov, SUM(Hcxestablishment.ext_december) as ex_decem, sibase_name'),
            //         'conditions' => array(
            //             'Hcxestablishment.year =' => $yer,
            //             'Hcxestablishment.regions_id' => $reg
            //         ),
            //         'group' => 'Hcxestablishment.sibases_id'
            //     )
            // );
        
            // foreach ($hcxestablishments as $valor) {
                
            //     $t1 = (intval($valor[0]['c_jan']) + intval($valor[0]['em_jan']) + intval($valor[0]['ex_jan']));

            //     $t2 = ($valor[0]['c_feb'] + $valor[0]['em_feb'] + $valor[0]['ex_feb']);

            //     $t3 = ($valor[0]['c_march'] + $valor[0]['em_mar'] + $valor[0]['ex_mar']);

            //     $t4 = ($valor[0]['c_april'] + $valor[0]['em_apr'] + $valor[0]['ex_apr']);

            //     $t5 = ($valor[0]['c_may'] + $valor[0]['em_may'] + $valor[0]['ex_may']);

            //     $t6 = ($valor[0]['c_june'] + $valor[0]['em_jun'] + $valor[0]['ex_jun']);

            //     $t7 = ($valor[0]['c_july'] + $valor[0]['em_jul'] + $valor[0]['ex_jul']);

            //     $t8 = ($valor[0]['c_august'] + $valor[0]['em_aug'] + $valor[0]['ex_aug']);

            //     $t9 = ($valor[0]['c_sep'] + $valor[0]['em_sep'] + $valor[0]['ext_sep']);

            //     $t10 = ($valor[0]['c_october'] + $valor[0]['em_oct'] + $valor[0]['ex_oct']);

            //     $t11 = ($valor[0]['c_nov'] + $valor[0]['em_nov'] + $valor[0]['ex_nov']);

            //     $t12 = ($valor[0]['c_decem'] + $valor[0]['em_decem'] + $valor[0]['ex_decem']);

            //     $dati = array($t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12);
            //     $dati2 = array(1,2);

                // $siries1 = $this->Highcharts->addChartSeries();
                // $siries1->type = 'line';
                // $siries1->addName($valor['Sibase']['sibase_name'])
                // ->addData($dati);

                // $michart->addSeries($siries1);
                
            // echo "<pre>";
            // $pru = $t1;
            // $pru += $t1;
            // var_dump($valor);
            // echo "</pre>";

            // }
        
        $this->set(compact('chartName4'));
    }
}
