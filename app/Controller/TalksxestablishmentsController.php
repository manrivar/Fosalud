<?php
App::uses('AppController', 'Controller');
/**
 * Maternalhcxestablishments Controller
 *
 * @property Talksxestablishment $Talksxestablishment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TalksxestablishmentsController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $layout = 'default';
    public $components = array('Paginator', 'Session', 'Flash');

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
                'talksxestablishment.year =' => $yir,
                'talksxestablishment.regions_id' => $reg
            ];
            $this->paginate = [
                'conditions' => [
                    'talksxestablishment.year =' => $yir,
                    'talksxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yir));
        } else {
            //EL RANGO DE FECHAS DEBE SER CAMBIADO AL DEL AÑO ACTUAL
            $this->paginate = [
                'conditions' => [
                    'talksxestablishment.year =' => $yer,
                    'talksxestablishment.regions_id' => $reg
                ]
            ];
            $this->set(array('yer' => $yer));
        }

        // index
        $this->Talksxestablishment->recursive = 0;
        $this->set('talksxestablishments', $this->Paginator->paginate());

        //query para suma de totales en el footer de la tabla 
        $yir = $this->request->query('yir');

        $conditions = [];
        if ($yir) {
            $months = $this->Talksxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Talksxestablishment.med_january) as m_jan, SUM(Talksxestablishment.nur_january) as n_jan, SUM(Talksxestablishment.med_february) as m_feb, SUM(Talksxestablishment.nur_february) as n_feb, SUM(Talksxestablishment.med_march) as m_mar, SUM(Talksxestablishment.nur_march) as n_mar, SUM(Talksxestablishment.med_april) as m_apr, SUM(Talksxestablishment.nur_april) as n_apr, SUM(Talksxestablishment.med_may) as m_may, SUM(Talksxestablishment.nur_may) as n_may, SUM(Talksxestablishment.med_june) as m_jun, SUM(Talksxestablishment.nur_june) as n_jun, SUM(Talksxestablishment.med_july) as m_jul, SUM(Talksxestablishment.nur_july) as n_jul,  SUM(Talksxestablishment.med_august) as m_aug, SUM(Talksxestablishment.nur_august) as n_aug, SUM(Talksxestablishment.med_september) as m_sep, SUM(Talksxestablishment.nur_september) as n_sep, SUM(Talksxestablishment.med_october) as m_oct, SUM(Talksxestablishment.nur_october) as n_oct, SUM(Talksxestablishment.med_november) as m_nov, SUM(Talksxestablishment.nur_november) as n_nov, SUM(Talksxestablishment.med_december) as m_decem, SUM(Talksxestablishment.nur_december) as n_decem, SUM(Talksxestablishment.ot_january) as o_jan, SUM(Talksxestablishment.ot_february) as o_feb, SUM(Talksxestablishment.ot_march) as o_mar, SUM(Talksxestablishment.ot_april) as o_apr, SUM(Talksxestablishment.ot_may) as o_may, SUM(Talksxestablishment.ot_june) as o_jun, SUM(Talksxestablishment.ot_july) as o_jul, SUM(Talksxestablishment.ot_august) as o_aug, SUM(Talksxestablishment.ot_september) as o_sep, SUM(Talksxestablishment.ot_october) as o_oct, SUM(Talksxestablishment.ot_november) as o_nov, SUM(Talksxestablishment.ot_december) as o_decem'),
                    'conditions' => array(
                        'Talksxestablishment.year =' => $yir,
                        'Talksxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['n_jan'];
            
            $mostrar_total_jan4 = $months[0][0]['o_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['n_feb'];
            
            $mostrar_total_feb4 = $months[0][0]['o_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['n_mar'];
            
            $mostrar_total_mar4 = $months[0][0]['o_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['n_apr'];
            
            $mostrar_total_apr4 = $months[0][0]['o_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['n_may'];
            
            $mostrar_total_may4 = $months[0][0]['o_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['n_jun'];
            
            $mostrar_total_jun4 = $months[0][0]['o_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['n_jul'];
            
            $mostrar_total_jul4 = $months[0][0]['o_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['n_aug'];
            
            $mostrar_total_aug4 = $months[0][0]['o_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['n_sep'];
            
            $mostrar_total_sep4 = $months[0][0]['o_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['n_oct'];
            
            $mostrar_total_oct4 = $months[0][0]['o_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['n_nov'];
            
            $mostrar_total_nov4 = $months[0][0]['o_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['n_decem'];
            
            $mostrar_total_dec4 = $months[0][0]['o_decem'];
            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'n_jan' => $mostrar_total_jan2, 'n_feb' => $mostrar_total_feb2, 'n_mar' => $mostrar_total_mar2, 'n_apr' => $mostrar_total_apr2, 'n_may' => $mostrar_total_may2, 'n_jun' => $mostrar_total_jun2, 'n_jul' => $mostrar_total_jul2, 'n_aug' => $mostrar_total_aug2, 'n_sep' => $mostrar_total_sep2, 'n_oct' => $mostrar_total_oct2, 'n_nov' => $mostrar_total_nov2, 'n_decem' => $mostrar_total_dec2, 'o_jan' => $mostrar_total_jan4, 'o_feb' => $mostrar_total_feb4, 'o_mar' => $mostrar_total_mar4, 'o_apr' => $mostrar_total_apr4, 'o_may' => $mostrar_total_may4, 'o_jun' => $mostrar_total_jun4, 'o_jul' => $mostrar_total_jul4, 'o_aug' => $mostrar_total_aug4, 'o_sep' => $mostrar_total_sep4, 'o_oct' => $mostrar_total_oct4, 'o_nov' => $mostrar_total_nov4, 'o_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                     $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] +
                    
                     $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                     $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] + 
                    
                     $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                     $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                    
                     $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] + 
                     $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                     
                     $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'];

            $this->loadModel('Talk');
            $this->Talk->query("UPDATE talks SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE talks.regions_id = $region && talks.year = $yir");
        } else {
            // Talksxestablishment.year debe ser cambiado al año actual, igual que en el filtro
            $months = $this->Talksxestablishment->find(
                'all',
                array(
                    'fields' => array('SUM(Talksxestablishment.med_january) as m_jan, SUM(Talksxestablishment.nur_january) as n_jan, SUM(Talksxestablishment.med_february) as m_feb, SUM(Talksxestablishment.nur_february) as n_feb, SUM(Talksxestablishment.med_march) as m_mar, SUM(Talksxestablishment.nur_march) as n_mar, SUM(Talksxestablishment.med_april) as m_apr, SUM(Talksxestablishment.nur_april) as n_apr, SUM(Talksxestablishment.med_may) as m_may, SUM(Talksxestablishment.nur_may) as n_may, SUM(Talksxestablishment.med_june) as m_jun, SUM(Talksxestablishment.nur_june) as n_jun, SUM(Talksxestablishment.med_july) as m_jul, SUM(Talksxestablishment.nur_july) as n_jul,  SUM(Talksxestablishment.med_august) as m_aug, SUM(Talksxestablishment.nur_august) as n_aug, SUM(Talksxestablishment.med_september) as m_sep, SUM(Talksxestablishment.nur_september) as n_sep, SUM(Talksxestablishment.med_october) as m_oct, SUM(Talksxestablishment.nur_october) as n_oct, SUM(Talksxestablishment.med_november) as m_nov, SUM(Talksxestablishment.nur_november) as n_nov, SUM(Talksxestablishment.med_december) as m_decem, SUM(Talksxestablishment.nur_december) as n_decem, SUM(Talksxestablishment.ot_january) as o_jan, SUM(Talksxestablishment.ot_february) as o_feb, SUM(Talksxestablishment.ot_march) as o_mar, SUM(Talksxestablishment.ot_april) as o_apr, SUM(Talksxestablishment.ot_may) as o_may, SUM(Talksxestablishment.ot_june) as o_jun, SUM(Talksxestablishment.ot_july) as o_jul, SUM(Talksxestablishment.ot_august) as o_aug, SUM(Talksxestablishment.ot_september) as o_sep, SUM(Talksxestablishment.ot_october) as o_oct, SUM(Talksxestablishment.ot_november) as o_nov, SUM(Talksxestablishment.ot_december) as o_decem'),
                    'conditions' => array(
                        'Talksxestablishment.year =' => $yer,
                        'Talksxestablishment.regions_id' => $reg
                    )
                )
            );
            $mostrar_total_jan1 = $months[0][0]['m_jan'];
            $mostrar_total_jan2 = $months[0][0]['n_jan'];
            
            $mostrar_total_jan4 = $months[0][0]['o_jan'];
            $mostrar_total_feb1 = $months[0][0]['m_feb'];
            $mostrar_total_feb2 = $months[0][0]['n_feb'];
            
            $mostrar_total_feb4 = $months[0][0]['o_feb'];
            $mostrar_total_mar1 = $months[0][0]['m_mar'];
            $mostrar_total_mar2 = $months[0][0]['n_mar'];
            
            $mostrar_total_mar4 = $months[0][0]['o_mar'];
            $mostrar_total_apr1 = $months[0][0]['m_apr'];
            $mostrar_total_apr2 = $months[0][0]['n_apr'];
            
            $mostrar_total_apr4 = $months[0][0]['o_apr'];
            $mostrar_total_may1 = $months[0][0]['m_may'];
            $mostrar_total_may2 = $months[0][0]['n_may'];
            
            $mostrar_total_may4 = $months[0][0]['o_may'];
            $mostrar_total_jun1 = $months[0][0]['m_jun'];
            $mostrar_total_jun2 = $months[0][0]['n_jun'];
            
            $mostrar_total_jun4 = $months[0][0]['o_jun'];
            $mostrar_total_jul1 = $months[0][0]['m_jul'];
            $mostrar_total_jul2 = $months[0][0]['n_jul'];
            
            $mostrar_total_jul4 = $months[0][0]['o_jul'];
            $mostrar_total_aug1 = $months[0][0]['m_aug'];
            $mostrar_total_aug2 = $months[0][0]['n_aug'];
            
            $mostrar_total_aug4 = $months[0][0]['o_aug'];
            $mostrar_total_sep1 = $months[0][0]['m_sep'];
            $mostrar_total_sep2 = $months[0][0]['n_sep'];
            
            $mostrar_total_sep4 = $months[0][0]['o_sep'];
            $mostrar_total_oct1 = $months[0][0]['m_oct'];
            $mostrar_total_oct2 = $months[0][0]['n_oct'];
            
            $mostrar_total_oct4 = $months[0][0]['o_oct'];
            $mostrar_total_nov1 = $months[0][0]['m_nov'];
            $mostrar_total_nov2 = $months[0][0]['n_nov'];
            
            $mostrar_total_nov4 = $months[0][0]['o_nov'];
            $mostrar_total_dec1 = $months[0][0]['m_decem'];
            $mostrar_total_dec2 = $months[0][0]['n_decem'];
            
            $mostrar_total_dec4 = $months[0][0]['o_decem'];

            $this->set(array('m_jan' => $mostrar_total_jan1, 'm_feb' => $mostrar_total_feb1, 'm_mar' => $mostrar_total_mar1, 'm_apr' => $mostrar_total_apr1, 'm_may' => $mostrar_total_may1, 'm_jun' => $mostrar_total_jun1, 'm_jul' => $mostrar_total_jul1, 'm_aug' => $mostrar_total_aug1, 'm_sep' => $mostrar_total_sep1, 'm_oct' => $mostrar_total_oct1, 'm_nov' => $mostrar_total_nov1, 'm_decem' => $mostrar_total_dec1, 'n_jan' => $mostrar_total_jan2, 'n_feb' => $mostrar_total_feb2, 'n_mar' => $mostrar_total_mar2, 'n_apr' => $mostrar_total_apr2, 'n_may' => $mostrar_total_may2, 'n_jun' => $mostrar_total_jun2, 'n_jul' => $mostrar_total_jul2, 'n_aug' => $mostrar_total_aug2, 'n_sep' => $mostrar_total_sep2, 'n_oct' => $mostrar_total_oct2, 'n_nov' => $mostrar_total_nov2, 'n_decem' => $mostrar_total_dec2, 'o_jan' => $mostrar_total_jan4, 'o_feb' => $mostrar_total_feb4, 'o_mar' => $mostrar_total_mar4, 'o_apr' => $mostrar_total_apr4, 'o_may' => $mostrar_total_may4, 'o_jun' => $mostrar_total_jun4, 'o_jul' => $mostrar_total_jul4, 'o_aug' => $mostrar_total_aug4, 'o_sep' => $mostrar_total_sep4, 'o_oct' => $mostrar_total_oct4, 'o_nov' => $mostrar_total_nov4, 'o_decem' => $mostrar_total_dec4));

            // UPDATE PARA LA TABLA TALKS
            $trim1 = $months[0][0]['m_jan'] + $months[0][0]['m_feb'] + $months[0][0]['m_mar'] +
                $months[0][0]['n_jan'] + $months[0][0]['n_feb'] + $months[0][0]['n_mar'] +
                $months[0][0]['o_jan'] + $months[0][0]['o_feb'] + $months[0][0]['o_mar'];
            $trim2 = $months[0][0]['m_apr'] + $months[0][0]['m_may'] + $months[0][0]['m_jun'] +
                $months[0][0]['n_apr'] + $months[0][0]['n_may'] + $months[0][0]['n_jun'] +
                $months[0][0]['o_apr'] + $months[0][0]['o_may'] + $months[0][0]['o_jun'];
            $trim3 = $months[0][0]['m_jul'] + $months[0][0]['m_aug'] + $months[0][0]['m_sep'] +
                $months[0][0]['n_jul'] + $months[0][0]['n_aug'] + $months[0][0]['n_sep'] +
                $months[0][0]['o_jul'] + $months[0][0]['o_aug'] + $months[0][0]['o_sep'];
            $trim4 = $months[0][0]['m_oct'] + $months[0][0]['m_nov'] + $months[0][0]['m_decem'] +
                $months[0][0]['n_oct'] + $months[0][0]['n_nov'] + $months[0][0]['n_decem'] +
                $months[0][0]['o_oct'] + $months[0][0]['o_nov'] + $months[0][0]['o_decem'];

            $this->loadModel('Talk');
            $this->Talk->query("UPDATE talks SET trimester1 = $trim1, trimester2 = $trim2, trimester3 = $trim3, trimester4 = $trim4 WHERE talks.regions_id = $region && talks.year = $yer");
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
        if (!$this->Talksxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        $options = array('conditions' => array('Talksxestablishment.' . $this->Talksxestablishment->primaryKey => $id));
        $this->set('talksxestablishment', $this->Talksxestablishment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Talksxestablishment->create();
            if ($this->Talksxestablishment->save($this->request->data)) {
                $this->Flash->success(__('The talksxestablishment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The talksxestablishment could not be saved. Please, try again.'));
            }
        }
        $establishments = $this->Talksxestablishment->Establishment->find('list');
        $sibases = $this->Talksxestablishment->Sibase->find('list');
        $regions = $this->Talksxestablishment->Region->find('list');
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
        $establishments = $this->Talksxestablishment->Establishment->find('list');
        $sibases = $this->Talksxestablishment->Sibase->find('list');
        $regions = $this->Talksxestablishment->Region->find('list');
        $reg = $region;
        if (!$this->Talksxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Talksxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de charlas del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);
                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Talksxestablishment.' . $this->Talksxestablishment->primaryKey => $id));
            $this->request->data = $this->Talksxestablishment->find('first', $options);
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
        $this->Talksxestablishment->id = $id;
        if (!$this->Talksxestablishment->exists()) {
            throw new NotFoundException(__('Invalid talksxestablishment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Talksxestablishment->delete()) {
            $this->Flash->success(__('The talksxestablishment has been deleted.'));
        } else {
            $this->Flash->error(__('The talksxestablishment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    //*****************************************/ prueba de excel *************************************************


    public function cargar_Evaluacion($yer)
    {
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        $regions = $this->Talksxestablishment->Region->find('list');
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
        $existe = $this->Talksxestablishment->find(
            'all',
            array(
                'conditions' => array(
                    'Talksxestablishment.regions_id' => $reg,
                    'Talksxestablishment.year' => $year
                ),

                'fields' => array('count(*) as total')
            )
        );
        $exi = $this->Talksxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Talksxestablishment.regions_id' => $reg,
                    'Talksxestablishment.year' => $year
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
            echo "Nose pudo guardar la informacion";
           
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
                $e_enero = trim($excelObj->getActiveSheet()->getCell('F' . $i)->getValue());
                $ot_enero = trim($excelObj->getActiveSheet()->getCell('G' . $i)->getValue());
                $m_febrero = trim($excelObj->getActiveSheet()->getCell('H' . $i)->getValue());
                $e_febrero = trim($excelObj->getActiveSheet()->getCell('I' . $i)->getValue());
                $ot_febrero = trim($excelObj->getActiveSheet()->getCell('J' . $i)->getValue());
                $m_marzo = trim($excelObj->getActiveSheet()->getCell('K' . $i)->getValue());
                $e_marzo = trim($excelObj->getActiveSheet()->getCell('L' . $i)->getValue());
                $ot_marzo = trim($excelObj->getActiveSheet()->getCell('M' . $i)->getValue());
                $m_abril = trim($excelObj->getActiveSheet()->getCell('N' . $i)->getValue());
                $e_abril = trim($excelObj->getActiveSheet()->getCell('O' . $i)->getValue());
                $ot_abril = trim($excelObj->getActiveSheet()->getCell('P' . $i)->getValue());
                $m_mayo = trim($excelObj->getActiveSheet()->getCell('Q' . $i)->getValue());
                $e_mayo = trim($excelObj->getActiveSheet()->getCell('R' . $i)->getValue());
                $ot_mayo = trim($excelObj->getActiveSheet()->getCell('S' . $i)->getValue());
                $m_junio = trim($excelObj->getActiveSheet()->getCell('T' . $i)->getValue());
                $e_junio = trim($excelObj->getActiveSheet()->getCell('U' . $i)->getValue());
                $ot_junio = trim($excelObj->getActiveSheet()->getCell('V' . $i)->getValue());
                $m_julio = trim($excelObj->getActiveSheet()->getCell('W' . $i)->getValue());
                $e_julio = trim($excelObj->getActiveSheet()->getCell('X' . $i)->getValue());
                $ot_julio = trim($excelObj->getActiveSheet()->getCell('Y' . $i)->getValue());
                $m_agosto = trim($excelObj->getActiveSheet()->getCell('Z' . $i)->getValue());
                $e_agosto = trim($excelObj->getActiveSheet()->getCell('AA' . $i)->getValue());
                $ot_agosto = trim($excelObj->getActiveSheet()->getCell('AB' . $i)->getValue());
                $m_septiembre = trim($excelObj->getActiveSheet()->getCell('AC' . $i)->getValue());
                $e_septiembre = trim($excelObj->getActiveSheet()->getCell('AD' . $i)->getValue());
                $ot_septiembre = trim($excelObj->getActiveSheet()->getCell('AE' . $i)->getValue());
                $m_octubre = trim($excelObj->getActiveSheet()->getCell('AF' . $i)->getValue());
                $e_octubre = trim($excelObj->getActiveSheet()->getCell('AG' . $i)->getValue());
                $ot_octubre = trim($excelObj->getActiveSheet()->getCell('AH' . $i)->getValue());
                $m_noviembre = trim($excelObj->getActiveSheet()->getCell('AI' . $i)->getValue());
                $e_noviembre = trim($excelObj->getActiveSheet()->getCell('AJ' . $i)->getValue());
                $ot_noviembre = trim($excelObj->getActiveSheet()->getCell('AK' . $i)->getValue());
                $m_diciembre = trim($excelObj->getActiveSheet()->getCell('AL' . $i)->getValue());
                $e_diciembre = trim($excelObj->getActiveSheet()->getCell('AM' . $i)->getValue());
                $ot_diciembre = trim($excelObj->getActiveSheet()->getCell('AN' . $i)->getValue());


                if ($establishments_id != "") {

                    $page['Talksxestablishment']['establishments_id'] = $establishments_id;
                    $page['Talksxestablishment']['med_january'] = $m_enero;
                    $page['Talksxestablishment']['nur_january'] = $e_enero;
        
                    $page['Talksxestablishment']['ot_january'] = $ot_enero;
                    $page['Talksxestablishment']['med_february'] = $m_febrero;
                    $page['Talksxestablishment']['nur_february'] = $e_febrero;
                    
                    $page['Talksxestablishment']['ot_february'] = $ot_febrero;
                    $page['Talksxestablishment']['med_march'] = $m_marzo;
                    $page['Talksxestablishment']['nur_march'] = $e_marzo;
                    
                    $page['Talksxestablishment']['ot_march'] = $ot_marzo;
                    $page['Talksxestablishment']['med_april'] = $m_abril;
                    $page['Talksxestablishment']['nur_april'] = $e_abril;
                    
                    $page['Talksxestablishment']['ot_april'] = $ot_abril;
                    $page['Talksxestablishment']['med_may'] = $m_mayo;
                    $page['Talksxestablishment']['nur_may'] = $e_mayo;
                    
                    $page['Talksxestablishment']['ot_may'] = $ot_mayo;
                    $page['Talksxestablishment']['med_june'] = $m_junio;
                    $page['Talksxestablishment']['nur_june'] = $e_junio;
                    
                    $page['Talksxestablishment']['ot_june'] = $ot_junio;
                    $page['Talksxestablishment']['med_july'] = $m_julio;
                    $page['Talksxestablishment']['nur_july'] = $e_julio;
                    
                    $page['Talksxestablishment']['ot_july'] = $ot_julio;
                    $page['Talksxestablishment']['med_august'] = $m_agosto;
                    $page['Talksxestablishment']['nur_august'] = $e_agosto;
                    
                    $page['Talksxestablishment']['ot_august'] = $ot_agosto;
                    $page['Talksxestablishment']['med_septiembre'] = $m_septiembre;
                    $page['Talksxestablishment']['nur_septiembre'] = $e_septiembre;
                    
                    $page['Talksxestablishment']['ot_septiembre'] = $ot_septiembre;
                    $page['Talksxestablishment']['med_october'] = $m_octubre;
                    $page['Talksxestablishment']['nur_october'] = $e_octubre;
                    
                    $page['Talksxestablishment']['ot_october'] = $ot_octubre;
                    $page['Talksxestablishment']['med_november'] = $m_noviembre;
                    $page['Talksxestablishment']['nur_november'] = $e_noviembre;
                    
                    $page['Talksxestablishment']['ot_november'] = $ot_noviembre;
                    $page['Talksxestablishment']['med_december'] = $m_diciembre;
                    $page['Talksxestablishment']['nur_december'] = $e_diciembre;
                    
                    $page['Talksxestablishment']['ot_december'] = $ot_diciembre;
                    $page['EvaluacionObjetivo']['user_reg_id'] = $user_id_reg;

                    try {
                        $this->Talksxestablishment->query("UPDATE talksxestablishments SET med_january = '$m_enero', med_february = '$m_febrero', med_march = '$m_marzo', med_april = '$m_abril', med_may = '$m_mayo', med_june = '$m_junio', med_july = '$m_julio', med_august = '$m_agosto', med_september = '$m_septiembre', med_october = '$m_octubre', med_november = '$m_noviembre', med_december = '$m_diciembre', nur_january = '$e_enero', nur_february = '$e_febrero', nur_march = '$e_marzo', nur_april = '$e_abril', nur_may = '$e_mayo', nur_june = '$e_junio', nur_july = '$e_julio', nur_august = '$e_agosto', nur_september = '$e_septiembre', nur_october = '$e_octubre', nur_november = '$e_noviembre', nur_december = '$e_diciembre',ot_january = '$ot_enero', ot_february = '$ot_febrero', ot_march = '$ot_marzo', ot_april = '$ot_abril', ot_may = '$ot_mayo', ot_june = '$ot_junio', ot_july = '$ot_julio', ot_august = '$ot_agosto', ot_september = '$ot_septiembre', ot_october = '$ot_octubre', ot_november = '$ot_noviembre', ot_december = '$ot_diciembre' WHERE establishments_id = '$establishments_id' && regions_id = '$reg' && year = '$year'");
                        // insertar
                        // $this->Talksxestablishment->create();
                        // $this->Talksxestablishment->save($page);


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
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Charlas de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);  

        $this->redirect([
            'controller' => 'Talksxestablishments',
            'action' => 'index', $reg, $year, $layout
        ]);
    }



    public function import()
    {
        $regions = $this->Talksxestablishment->Region->find('list');
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