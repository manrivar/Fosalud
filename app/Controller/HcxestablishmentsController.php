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
            $estanum = 12;
        } elseif ($reg == 2) {
            $estanum = 19;
        } elseif ($reg == 3) {
            $estanum = 20;
        } elseif ($reg == 4) {
            $estanum = 13;
        } elseif ($reg == 5) {
            $estanum = 19;
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
        $this->redirect([
            'controller' => 'Hcxestablishments',
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
