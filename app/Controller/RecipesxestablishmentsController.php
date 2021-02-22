<?php
App::uses('AppController', 'Controller');
/**
 * Recipesxestablishments Controller
 *
 * @property Recipesxestablishment $Recipesxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class RecipesxestablishmentsController extends AppController
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
                'recipesxestablishment.year =' => $yir,
                'recipesxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'recipesxestablishment.year =' => $yir,
                    'recipesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'recipesxestablishment.year =' => $yer,
                    'recipesxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Recipesxestablishment->recursive = 0;
        $this->set('recipesxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Recipesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Recipesxestablishment.med_january) as m_jan, SUM(Recipesxestablishment.den_january) as d_jan, SUM(Recipesxestablishment.med_february) as m_feb, SUM(Recipesxestablishment.den_february) as d_feb, SUM(Recipesxestablishment.med_march) as m_mar, SUM(Recipesxestablishment.den_march) as d_mar, SUM(Recipesxestablishment.med_april) as m_apr, SUM(Recipesxestablishment.den_april) as d_apr, SUM(Recipesxestablishment.med_may) as m_may, SUM(Recipesxestablishment.den_may) as d_may, SUM(Recipesxestablishment.med_june) as m_jun, SUM(Recipesxestablishment.den_june) as d_jun, SUM(Recipesxestablishment.med_july) as m_jul, SUM(Recipesxestablishment.den_july) as d_jul,  SUM(Recipesxestablishment.med_august) as m_aug, SUM(Recipesxestablishment.den_august) as d_aug, SUM(Recipesxestablishment.med_september) as m_sep, SUM(Recipesxestablishment.den_september) as d_sep, SUM(Recipesxestablishment.med_october) as m_oct, SUM(Recipesxestablishment.den_october) as d_oct, SUM(Recipesxestablishment.med_november) as m_nov, SUM(Recipesxestablishment.den_november) as d_nov, SUM(Recipesxestablishment.med_december) as m_decem, SUM(Recipesxestablishment.den_december) as d_decem, SUM(Recipesxestablishment.nur_january) as n_jan, SUM(Recipesxestablishment.nur_february) as n_feb, SUM(Recipesxestablishment.nur_march) as n_mar, SUM(Recipesxestablishment.nur_april) as n_apr, SUM(Recipesxestablishment.nur_may) as n_may, SUM(Recipesxestablishment.nur_june) as n_jun, SUM(Recipesxestablishment.nur_july) as n_jul, SUM(Recipesxestablishment.nur_august) as n_aug, SUM(Recipesxestablishment.nur_september) as n_sep, SUM(Recipesxestablishment.nur_october) as n_oct, SUM(Recipesxestablishment.nur_november) as n_nov, SUM(Recipesxestablishment.nur_december) as n_decem'),
                    'conditions' => array(
                        'Recipesxestablishment.year =' => $yir,
                        'Recipesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_jan3 = $months[0][0]['n_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_feb3 = $months[0][0]['n_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_mar3 = $months[0][0]['n_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_apr3 = $months[0][0]['n_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_may3 = $months[0][0]['n_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jun3 = $months[0][0]['n_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_jul3 = $months[0][0]['n_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_aug3 = $months[0][0]['n_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_sep3 = $months[0][0]['n_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_oct3 = $months[0][0]['n_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_nov3 = $months[0][0]['n_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $mostrar_total_dec3 = $months[0][0]['n_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2,'n_jan' => $mostrar_total_jan3, 'n_feb' => $mostrar_total_feb3, 'n_mar' => $mostrar_total_mar3, 'n_apr' => $mostrar_total_apr3, 'n_may' => $mostrar_total_may3, 'n_jun' => $mostrar_total_jun3, 'n_jul' => $mostrar_total_jul3, 'n_aug' => $mostrar_total_aug3, 'n_sep' => $mostrar_total_sep3, 'n_oct' => $mostrar_total_oct3, 'n_nov' => $mostrar_total_nov3, 'n_decem' => $mostrar_total_dec3));

            // UPDATE PARA LA TABLA HEALINGCARES
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                     $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                     $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                     $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] + 
                     $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] +
                     $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'];

            $this->loadModel('Recipe');
            $this->Recipe->query("UPDATE recipes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE recipes.regions_id = $region && recipes.year = $yir");
        } else {
            // Recipesxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Recipesxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Recipesxestablishment.med_january) as m_jan, SUM(Recipesxestablishment.den_january) as d_jan, SUM(Recipesxestablishment.med_february) as m_feb, SUM(Recipesxestablishment.den_february) as d_feb, SUM(Recipesxestablishment.med_march) as m_mar, SUM(Recipesxestablishment.den_march) as d_mar, SUM(Recipesxestablishment.med_april) as m_apr, SUM(Recipesxestablishment.den_april) as d_apr, SUM(Recipesxestablishment.med_may) as m_may, SUM(Recipesxestablishment.den_may) as d_may, SUM(Recipesxestablishment.med_june) as m_jun, SUM(Recipesxestablishment.den_june) as d_jun, SUM(Recipesxestablishment.med_july) as m_jul, SUM(Recipesxestablishment.den_july) as d_jul,  SUM(Recipesxestablishment.med_august) as m_aug, SUM(Recipesxestablishment.den_august) as d_aug, SUM(Recipesxestablishment.med_september) as m_sep, SUM(Recipesxestablishment.den_september) as d_sep, SUM(Recipesxestablishment.med_october) as m_oct, SUM(Recipesxestablishment.den_october) as d_oct, SUM(Recipesxestablishment.med_november) as m_nov, SUM(Recipesxestablishment.den_november) as d_nov, SUM(Recipesxestablishment.med_december) as m_decem, SUM(Recipesxestablishment.den_december) as d_decem, SUM(Recipesxestablishment.nur_january) as n_jan, SUM(Recipesxestablishment.nur_february) as n_feb, SUM(Recipesxestablishment.nur_march) as n_mar, SUM(Recipesxestablishment.nur_april) as n_apr, SUM(Recipesxestablishment.nur_may) as n_may, SUM(Recipesxestablishment.nur_june) as n_jun, SUM(Recipesxestablishment.nur_july) as n_jul, SUM(Recipesxestablishment.nur_august) as n_aug, SUM(Recipesxestablishment.nur_september) as n_sep, SUM(Recipesxestablishment.nur_october) as n_oct, SUM(Recipesxestablishment.nur_november) as n_nov, SUM(Recipesxestablishment.nur_december) as n_decem'),
                    'conditions' => array(
                        'Recipesxestablishment.year =' => $yer,
                        'Recipesxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['d_jan'];
            $mostrar_total_jan3 = $months[0][0]['n_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['d_feb'];
            $mostrar_total_feb3 = $months[0][0]['n_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['d_mar'];
            $mostrar_total_mar3 = $months[0][0]['n_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['d_apr'];
            $mostrar_total_apr3 = $months[0][0]['n_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['d_may'];
            $mostrar_total_may3 = $months[0][0]['n_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['d_jun'];
            $mostrar_total_jun3 = $months[0][0]['n_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['d_jul'];
            $mostrar_total_jul3 = $months[0][0]['n_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['d_aug'];
            $mostrar_total_aug3 = $months[0][0]['n_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['d_sep'];
            $mostrar_total_sep3 = $months[0][0]['n_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['d_oct'];
            $mostrar_total_oct3 = $months[0][0]['n_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['d_nov'];
            $mostrar_total_nov3 = $months[0][0]['n_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['d_decem'];
            $mostrar_total_dec3 = $months[0][0]['n_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'd_jan' => $mostrar_total_jan2, 'd_feb' => $mostrar_total_feb2, 'd_mar' => $mostrar_total_mar2, 'd_apr' => $mostrar_total_apr2, 'd_may' => $mostrar_total_may2, 'd_jun' => $mostrar_total_jun2, 'd_jul' => $mostrar_total_jul2, 'd_aug' => $mostrar_total_aug2, 'd_sep' => $mostrar_total_sep2, 'd_oct' => $mostrar_total_oct2, 'd_nov' => $mostrar_total_nov2, 'd_decem' => $mostrar_total_dec2, 'n_jan' => $mostrar_total_jan3, 'n_feb' => $mostrar_total_feb3, 'n_mar' => $mostrar_total_mar3, 'n_apr' => $mostrar_total_apr3, 'n_may' => $mostrar_total_may3, 'n_jun' => $mostrar_total_jun3, 'n_jul' => $mostrar_total_jul3, 'n_aug' => $mostrar_total_aug3, 'n_sep' => $mostrar_total_sep3, 'n_oct' => $mostrar_total_oct3, 'n_nov' => $mostrar_total_nov3, 'n_decem' => $mostrar_total_dec3));


            // UPDATE PARA LA TABLA MATERNALHEALINGCARES "El AÑO EN SMOKES.YEAR DEBE SER CAMBIADO AL AÑO ACTUAL"
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['d_jan'] + $months[0][0]['d_feb'] + $months[0][0]['d_mar'] +
                     $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['d_apr'] + $months[0][0]['d_may'] + $months[0][0]['d_jun'] +
                     $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['d_jul'] + $months[0][0]['d_aug'] + $months[0][0]['d_sep'] +
                     $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] + 
                     $months[0][0]['d_oct'] + $months[0][0]['d_nov'] + $months[0][0]['d_decem'] +
                     $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'];

            $this->loadModel('Recipe');
            $this->Recipe->query("UPDATE recipes SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE recipes.regions_id = $region && recipes.year = $yer");
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
        if (!$this->Recipesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        $options = array('conditions' => array('Recipesxestablishment.' . $this->Recipesxestablishment->primaryKey => $id));
        $this->set('recipesxestablishment', $this->Recipesxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Recipesxestablishment->create();
            if ($this->Recipesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The recipesxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The recipesxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Recipesxestablishment->Establishment->find('list');
        $sibases = $this->Recipesxestablishment->Sibase->find('list');
        $regions = $this->Recipesxestablishment->Region->find('list');
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
        if (!$this->Recipesxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Recipesxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Recipesxestablishment.' . $this->Recipesxestablishment->primaryKey => $id));
            $this->request->data = $this->Recipesxestablishment->find('first', $options);
        }
        $establishments = $this->Recipesxestablishment->Establishment->find('list');
        $sibases = $this->Recipesxestablishment->Sibase->find('list');
        $regions = $this->Recipesxestablishment->Region->find('list');
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
        $this->Recipesxestablishment->id = $id;
        if (!$this->Recipesxestablishment->exists()) {
            throw new NotFoundException(__('Invalid recipesxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Recipesxestablishment->delete()) {
            $this->Flash->success(__('The recipesxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The recipesxestablishment could not be deleted. Please, try again.'));
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
        $regions = $this->Recipesxestablishment->Region->find('list');
        $this->set(compact('regions'));
        $this->set(array('yer' => $yer));
    }

    public function cargar()
    {

        $this->autoRender = false;

        $reg = $this->request->data['regions'];
        $year = $this->request->data['year'];



        //corroborar que no existe informaciona sociada a ese regions
        $existe = $this->Recipesxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Recipesxestablishment.regions_id' => $reg,
                    'Recipesxestablishment.year' => $year
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
                $m_enero = trim($excelObj->getActiveSheet()->getCell('E' . $i)->getValue());
                $d_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $n_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $m_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $d_febrero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $n_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $m_marzo = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $d_marzo = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $n_marzo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $m_abril = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $d_abril = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $n_abril = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $m_mayo = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $d_mayo = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $n_mayo = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $m_junio = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $d_junio = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $n_junio = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $m_julio = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $d_julio = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $n_julio = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $m_agosto = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $d_agosto = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $n_agosto = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $m_septiembre = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());
                $d_septiembre = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $n_septiembre = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $m_octubre = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $d_octubre = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $n_octubre = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());
                $m_noviembre = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $d_noviembre = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $n_noviembre = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $m_diciembre = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $d_diciembre = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());
                $n_diciembre = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Recipesxestablishment']['establishments_id'] = $establishments_id;
                    $page['Recipesxestablishment']['med_january'] = $m_enero;
                    $page['Recipesxestablishment']['den_january'] = $d_enero;
                    $page['Recipesxestablishment']['nur_january'] = $n_enero;
                    $page['Recipesxestablishment']['med_february'] = $m_febrero;
                    $page['Recipesxestablishment']['den_february'] = $d_febrero;
                    $page['Recipesxestablishment']['nur_february'] = $n_febrero;
                    $page['Recipesxestablishment']['med_march'] = $m_marzo;
                    $page['Recipesxestablishment']['den_march'] = $d_marzo;
                    $page['Recipesxestablishment']['nur_march'] = $n_marzo;
                    $page['Recipesxestablishment']['med_april'] = $m_abril;
                    $page['Recipesxestablishment']['den_april'] = $d_abril;
                    $page['Recipesxestablishment']['nur_april'] = $n_abril;
                    $page['Recipesxestablishment']['med_may'] = $m_mayo;
                    $page['Recipesxestablishment']['den_may'] = $d_mayo;
                    $page['Recipesxestablishment']['nur_may'] = $n_mayo;
                    $page['Recipesxestablishment']['med_june'] = $m_junio;
                    $page['Recipesxestablishment']['den_june'] = $d_junio;
                    $page['Recipesxestablishment']['nur_june'] = $n_junio;
                    $page['Recipesxestablishment']['med_july'] = $m_julio;
                    $page['Recipesxestablishment']['den_july'] = $d_julio;
                    $page['Recipesxestablishment']['nur_july'] = $n_julio;
                    $page['Recipesxestablishment']['med_august'] = $m_agosto;
                    $page['Recipesxestablishment']['den_august'] = $d_agosto;
                    $page['Recipesxestablishment']['nur_august'] = $n_agosto;
                    $page['Recipesxestablishment']['med_septiembre'] = $m_septiembre;
                    $page['Recipesxestablishment']['den_septiembre'] = $d_septiembre;
                    $page['Recipesxestablishment']['nur_septiembre'] = $n_septiembre;
                    $page['Recipesxestablishment']['med_october'] = $m_octubre;
                    $page['Recipesxestablishment']['den_october'] = $d_octubre;
                    $page['Recipesxestablishment']['nur_october'] = $n_octubre;
                    $page['Recipesxestablishment']['med_november'] = $m_noviembre;
                    $page['Recipesxestablishment']['den_november'] = $d_noviembre;
                    $page['Recipesxestablishment']['nur_november'] = $n_noviembre;
                    $page['Recipesxestablishment']['med_december'] = $m_diciembre;
                    $page['Recipesxestablishment']['den_december'] = $d_diciembre;
                    $page['Recipesxestablishment']['nur_december'] = $n_diciembre;

                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {

                        $this->Recipesxestablishment->query("UPDATE recipesxestablishments SET med_january = '$m_enero', med_february = '$m_febrero', med_march = '$m_marzo', med_april = '$m_abril', med_may = '$m_mayo', med_june = '$m_junio', med_july = '$m_julio', med_august = '$m_agosto', med_september = '$m_septiembre', med_october = '$m_octubre', med_november = '$m_noviembre', med_december = '$m_diciembre', den_january = '$d_enero', den_february = '$d_febrero', den_march = '$d_marzo', den_april = '$d_abril', den_may = '$d_mayo', den_june = '$d_junio', den_july = '$d_julio', den_august = '$d_agosto', den_september = '$d_septiembre', den_october = '$d_octubre', den_november = '$d_noviembre', den_december = '$d_diciembre', nur_january = '$n_enero', nur_february = '$n_febrero', nur_march = '$n_marzo', nur_april = '$n_abril', nur_may = '$n_mayo', nur_june = '$n_junio', nur_july = '$n_julio', nur_august = '$n_agosto', nur_september = '$n_septiembre', nur_october = '$n_octubre', nur_november = '$n_noviembre', nur_december = '$n_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Recipesxestablishment->create();
                        // $this->Recipesxestablishment->save($page);


                    } catch (Exception $ex) {
                        var_dump($ex->getMessage());
                        $i = $tope;
                    }
                }
            }
        } //fin de la comprobacion
        $this->redirect([
            'controller' => 'Recipesxestablishments',
            'action' => 'index', $reg, $year
        ]);
    }



    public function import()
    {
        $regions = $this->Recipesxestablishment->Region->find('list');
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
