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
        $this->Autorizacion();
        $establishments = $this->Hcxestablishment->Establishment->find('list');
        $sibases = $this->Hcxestablishment->Sibase->find('list');
        $regions = $this->Hcxestablishment->Region->find('list');
        $reg = $region;

        if (!$this->Hcxestablishment->exists($id)) {
            throw new NotFoundException(__('Invalid hcxestablishment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Hcxestablishment->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado con exito.'));

                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " edito registros de atencion curativa del establecimiento ". $establishments[$id];
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora);

                return $this->redirect(array('action' => 'index', $region, '?yir=' . $yer));
            } else {
                $this->Flash->error(__('El registro no se pudo actualizar, favor intente de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Hcxestablishment.' . $this->Hcxestablishment->primaryKey => $id));
            $this->request->data = $this->Hcxestablishment->find('first', $options);
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
    

    public function cargar_Evaluacion($yer)
    {
        
        //llamada a funcion de autorizacion para validar acceso a funcion
        $this->Autorizacion();
        
        $regions = $this->Hcxestablishment->Region->find('list');
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

        $exi = $this->Hcxestablishment->find(
            'first',
            array(
                'conditions' => array(
                    'Hcxestablishment.regions_id' => $reg,
                    'Hcxestablishment.year' => $year
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
        } 
        //fin de la comprobacion
        unlink($fileName);
        $layout = 1;
        
        $this->loadModel('Bitacora');
        $Bitacora["Bitacora"]["descripcion"] = "El usuario ".$this->Session->read('Auth.User.nombre_usuario'). " Cargo Plantilla de Excel de Atenciones Curativas de la ". $exi['Region']['region_name']. " del año ". $year;;
        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
        $this->Bitacora->save($Bitacora);

        $this->redirect([
            'controller' => 'Hcxestablishments',
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

    public function chart($yer, $reg)
    {
        $this->set(array('yer' => $yer));
        $this->set(array('reg' => $reg));

        $mon = $this->Hcxestablishment->find(
            'all',
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

        $to1 = ($tot_jan1 + $tot_jan2 + $tot_jan3);
        $to2 = ($tot_feb1 + $tot_feb2 + $tot_feb3);
        $to3 = ($tot_mar1 + $tot_mar2 + $tot_mar3);
        $to4 = ($tot_apr1 + $tot_apr2 + $tot_apr3);
        $to5 = ($tot_may1 + $tot_may2 + $tot_may3);
        $to6 = ($tot_jun1 + $tot_jun2 + $tot_jun3);
        $to7 = ($tot_jul1 + $tot_jul2 + $tot_jul3);
        $to8 = ($tot_aug1 + $tot_aug2 + $tot_aug3);
        $to9 = ($tot_sep1 + $tot_sep2 + $tot_sep3);
        $to10 = ($tot_oct1 + $tot_oct2 + $tot_oct3);
        $to11 = ($tot_nov1 + $tot_nov2 + $tot_nov3);
        $to12 = ($tot_dec1 + $tot_dec2 + $tot_dec3);

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


        function getSuma($arreglo)
        {
            $a_temp = array();

            foreach ($arreglo as $arr) {
                $a_temp[] = $arr[0];
            }
            return $a_temp;
        }

        $conData = array($ene1, $feb1, $mar1, $abr1, $may1, $jun1, $jul1, $aug1, $sep1, $oct1, $nov1, $dec1);

        $emeData = array($ene2, $feb2, $mar2, $abr2, $may2, $jun2, $jul2, $aug2, $sep2, $oct2, $nov2, $dec2);

        $extData = array($ene3, $feb3, $mar3, $abr3, $may3, $jun3, $jul3, $aug3, $sep3, $oct3, $nov3, $dec3);

        $avgData = array($prom1, $prom2, $prom3, $prom4, $prom5, $prom6, $prom7, $prom8, $prom9, $prom10, $prom11, $prom12);

        $totData = array($to1, $to2, $to3, $to4, $to5, $to6, $to7, $to8, $to9, $to10, $to11, $to12);

        $conData = getSuma($conData);
        $conData = array_map('intval', $conData);

        $emeData = getSuma($emeData);
        $emeData = array_map('intval', $emeData);

        $extData = getSuma($extData);
        $extData = array_map('intval', $extData);

        $sum_con = $tot_jan1 + $tot_feb1 + $tot_mar1 + $tot_apr1 + $tot_may1 + $tot_jun1 + $tot_jul1 + $tot_aug1 + $tot_sep1 + $tot_oct1 + $tot_nov1 + $tot_dec1;
        $sum_eme = $tot_jan2 + $tot_feb2 + $tot_mar2 + $tot_apr2 + $tot_may2 + $tot_jun2 + $tot_jul2 + $tot_aug2 + $tot_sep2 + $tot_oct2 + $tot_nov2 + $tot_dec2;
        $sum_ext = $tot_jan3 + $tot_feb3 + $tot_mar3 + $tot_apr3 + $tot_may3 + $tot_jun3 + $tot_jul3 + $tot_aug3 + $tot_sep3 + $tot_oct3 + $tot_nov3 + $tot_dec3;

        $this->set(array('conData' => $conData, 'emeData' => $emeData, 'extData' => $extData, 'avgData' => $avgData, 'totData' => $totData, 'sum_con' => $sum_con, 'sum_eme' => $sum_eme, 'sum_ext' => $sum_ext));

        //mostrar todos las sibasis por region

        // Consulta sql la cual devuelve todos los establecimientos de la region en la variable "reg"
        $siba = $this->Hcxestablishment->Sibase->find(
            'list',
            array(
                'fields' => array('Sibase.sibase_name'),
                'conditions' => array(
                    'Sibase.regions_id' => $reg
                )
            )
        );
        // devuelve el id de las sibasis
        $sibaid = $this->Hcxestablishment->Sibase->find(
            'list',
            array(
                'fields' => array('Sibase.id'),
                'conditions' => array(
                    'Sibase.regions_id' => $reg
                )
            )
        );

        //hace que empiece el array en 0
        $siba = array_values($siba);
        $sibaid = array_values($sibaid);
        
        if ($reg == 1) {
            $tot1 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");

            $tot2 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]");

            $tot3 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");

            $sibas = array($tot1, $tot2, $tot3);

            $estasib1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estasib2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );
            $estasib3 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[2]
                    )
                )
            );
            $estas1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estas2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );
            $estas3 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[2]
                    )
                )
            );

            // query para que traer informacion de cada mes por establecimiento filtrado por sibasi

            $estas1 = array_values($estas1);
            $estas2 = array_values($estas2);
            $estas3 = array_values($estas3);
            
            $this->set(array('estasib1' => $estasib1, 'estasib2' => $estasib2, 'estasib3' => $estasib3,'estas1' => $estas1, 'estas2' => $estas2, 'estas3' => $estas3));

        } elseif ($reg == 2) {
            $tot1 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");

            $tot2 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]");

            $sibas = array($tot1, $tot2);

            $estasib1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estasib2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );
            $estas1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estas2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );

            $estas1 = array_values($estas1);
            $estas2 = array_values($estas2);
           
            $this->set(array('estasib1' => $estasib1, 'estasib2' => $estasib2,'estas1' => $estas1, 'estas2' => $estas2));

        } elseif ($reg == 3 or $reg == 4 or $reg == 5) {
            $tot1 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");

            $tot2 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]");

            $tot3 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");

            $tot4 = $this->Hcxestablishment->query("SELECT SUM(con_january) + SUM(con_february) + SUM(con_march) + SUM(con_april) + SUM(con_may) + SUM(con_june) + SUM(con_july) + SUM(con_august) + SUM(con_september) + SUM(con_october) + SUM(con_november) + SUM(con_december) + SUM(eme_january) + SUM(eme_february) + SUM(eme_march) + SUM(eme_april) + SUM(eme_may) + SUM(eme_june) + SUM(eme_july) + SUM(eme_august) + SUM(eme_september) + SUM(eme_october) + SUM(eme_november) + SUM(eme_december) + SUM(ext_january) + SUM(ext_february) + SUM(ext_march) + SUM(ext_april) + SUM(ext_may) + SUM(ext_june) + SUM(ext_july) + SUM(ext_august) + SUM(ext_september) + SUM(ext_october) + SUM(ext_november) + SUM(ext_december) as sib1 FROM hcxestablishments WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");

            $sibas = array($tot1, $tot2, $tot3, $tot4); // Array con totales de cada sibasi

            $estasib1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estasib2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );
            $estasib3 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[2]
                    )
                )
            );
            $estasib4 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[3]
                    )
                )
            );
            $estas1 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[0]
                    )
                )
            );
            $estas2 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[1]
                    )
                )
            );
            $estas3 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[2]
                    )
                )
            );
            $estas4 = $this->Hcxestablishment->Establishment->find(
                'list',
                array(
                    'fields' => array('Establishment.establishment_name'),
                    'conditions' => array(
                        'Establishment.regions_id' => $reg,
                        'Establishment.sibases_id' => $sibaid[3]
                    )
                )
            );
            $estas1 = array_values($estas1);
            $estas2 = array_values($estas2);
            $estas3 = array_values($estas3);
            $estas4 = array_values($estas4);

            
           
            $this->set(array('estasib1' => $estasib1, 'estasib2' => $estasib2, 'estasib3' => $estasib3, 'estasib4' => $estasib4, 'estas1' => $estas1, 'estas2' => $estas2, 'estas3' => $estas3, 'estas4' => $estas4));
        }

        function getSuma2($arreglo)
        {
            $a_temp = array();

            foreach ($arreglo as $arr) {
                $a_temp[] = $arr[0][0]["sib1"];
            }
            return $a_temp;
        }

        function getSuma3($arreglo)
        {
            $a_temp = array();

            foreach ($arreglo as $arr) {
                $a_temp[] = $arr[0]['sum'];
            }
            return $a_temp;
        }
        

        switch($reg){
            case 1:
                $sum_ene1 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ene2 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_ene3 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]"); 
                // cambio de mes 
                $sum_feb1 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_feb2 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_feb3 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_mar1 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_mar2 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_mar3 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_abr1 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_abr2 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_abr3 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_may1 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_may2 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_may3 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_jun1 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jun2 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_jun3 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_jul1 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jul2 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_jul3 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_ago1 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ago2 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_ago3 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_sep1 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_sep2 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_sep3 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_oct1 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_oct2 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_oct3 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_nov1 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_nov2 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_nov3 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                // cambio de mes 
                $sum_dic1 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_dic2 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_dic3 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  

                $sum_ene3 = getSuma3($sum_ene3);
                $sum_ene3 = array_map('intval', $sum_ene3);
                $sum_feb3 = getSuma3($sum_feb3);
                $sum_feb3 = array_map('intval', $sum_feb3);
                $sum_mar3 = getSuma3($sum_mar3);
                $sum_mar3 = array_map('intval', $sum_mar3);
                $sum_abr3 = getSuma3($sum_abr3);
                $sum_abr3 = array_map('intval', $sum_abr3);
                $sum_may3 = getSuma3($sum_may3);
                $sum_may3 = array_map('intval', $sum_may3);
                $sum_jun3 = getSuma3($sum_jun3);
                $sum_jun3 = array_map('intval', $sum_jun3);
                $sum_jul3 = getSuma3($sum_jul3);
                $sum_jul3 = array_map('intval', $sum_jul3);
                $sum_ago3 = getSuma3($sum_ago3);
                $sum_ago3 = array_map('intval', $sum_ago3);
                $sum_sep3 = getSuma3($sum_sep3);
                $sum_sep3 = array_map('intval', $sum_sep3);
                $sum_oct3 = getSuma3($sum_oct3);
                $sum_oct3 = array_map('intval', $sum_oct3);
                $sum_nov3 = getSuma3($sum_nov3);
                $sum_nov3 = array_map('intval', $sum_nov3);
                $sum_dic3 = getSuma3($sum_dic3);
                $sum_dic3 = array_map('intval', $sum_dic3);

                $this->set(array('sum_ene3' => $sum_ene3, 'sum_feb3' => $sum_feb3, 'sum_mar3' => $sum_mar3, 'sum_abr3' => $sum_abr3, 'sum_may3' => $sum_may3, 'sum_jun3' => $sum_jun3, 'sum_jul3' => $sum_jul3, 'sum_ago3' => $sum_ago3, 'sum_sep3' => $sum_sep3, 'sum_oct3' => $sum_oct3, 'sum_nov3' => $sum_nov3, 'sum_dic3' => $sum_dic3));
            break;  

            case 2:
                $sum_ene1 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ene2 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_feb1 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_feb2 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_mar1 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_mar2 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_abr1 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_abr2 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_may1 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_may2 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_jun1 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jun2 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_jul1 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jul2 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_ago1 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ago2 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_sep1 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_sep2 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_oct1 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_oct2 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_nov1 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_nov2 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                  
                // cambio de mes 
                $sum_dic1 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_dic2 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]");                 
    
            break;
            case 3:
            case 4:
            case 5:
                $sum_ene1 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ene2 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_ene3 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_ene4 = $this->Hcxestablishment->query("SELECT `con_january` + `eme_january` + `ext_january` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]"); 
                // cambio de mes 
                $sum_feb1 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_feb2 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_feb3 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                $sum_feb4 = $this->Hcxestablishment->query("SELECT `con_february` + `eme_february` + `ext_february` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");  
                // cambio de mes 
                $sum_mar1 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_mar2 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_mar3 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                $sum_mar4 = $this->Hcxestablishment->query("SELECT `con_march` + `eme_march` + `ext_march` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");  
                // cambio de mes 
                $sum_abr1 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_abr2 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_abr3 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_abr4 = $this->Hcxestablishment->query("SELECT `con_april` + `eme_april` + `ext_april` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");
                // cambio de mes 
                $sum_may1 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_may2 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_may3 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]"); 
                $sum_may4 = $this->Hcxestablishment->query("SELECT `con_may` + `eme_may` + `ext_may` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]"); 
                // cambio de mes 
                $sum_jun1 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jun2 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_jun3 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_jun4 = $this->Hcxestablishment->query("SELECT `con_june` + `eme_june` + `ext_june` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");
                // cambio de mes 
                $sum_jul1 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_jul2 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_jul3 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_jul4 = $this->Hcxestablishment->query("SELECT `con_july` + `eme_july` + `ext_july` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");  
                // cambio de mes 
                $sum_ago1 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_ago2 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_ago3 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");  
                $sum_ago4 = $this->Hcxestablishment->query("SELECT `con_august` + `eme_august` + `ext_august` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");  
                // cambio de mes 
                $sum_sep1 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_sep2 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_sep3 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_sep4 = $this->Hcxestablishment->query("SELECT `con_september` + `eme_september` + `ext_september` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");
                // cambio de mes 
                $sum_oct1 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_oct2 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_oct3 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]"); 
                $sum_oct4 = $this->Hcxestablishment->query("SELECT `con_october` + `eme_october` + `ext_october` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]"); 
                // cambio de mes 
                $sum_nov1 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_nov2 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_nov3 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_nov4 = $this->Hcxestablishment->query("SELECT `con_november` + `eme_november` + `ext_november` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");
                // cambio de mes 
                $sum_dic1 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[0]");
                $sum_dic2 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[1]"); 
                $sum_dic3 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[2]");
                $sum_dic4 = $this->Hcxestablishment->query("SELECT `con_december` + `eme_december` + `ext_december` as sum FROM `hcxestablishments` WHERE regions_id = $reg && year = $yer && sibases_id = $sibaid[3]");

                $sum_ene3 = getSuma3($sum_ene3);
                $sum_ene3 = array_map('intval', $sum_ene3);
                $sum_feb3 = getSuma3($sum_feb3);
                $sum_feb3 = array_map('intval', $sum_feb3);
                $sum_mar3 = getSuma3($sum_mar3);
                $sum_mar3 = array_map('intval', $sum_mar3);
                $sum_abr3 = getSuma3($sum_abr3);
                $sum_abr3 = array_map('intval', $sum_abr3);
                $sum_may3 = getSuma3($sum_may3);
                $sum_may3 = array_map('intval', $sum_may3);
                $sum_jun3 = getSuma3($sum_jun3);
                $sum_jun3 = array_map('intval', $sum_jun3);
                $sum_jul3 = getSuma3($sum_jul3);
                $sum_jul3 = array_map('intval', $sum_jul3);
                $sum_ago3 = getSuma3($sum_ago3);
                $sum_ago3 = array_map('intval', $sum_ago3);
                $sum_sep3 = getSuma3($sum_sep3);
                $sum_sep3 = array_map('intval', $sum_sep3);
                $sum_oct3 = getSuma3($sum_oct3);
                $sum_oct3 = array_map('intval', $sum_oct3);
                $sum_nov3 = getSuma3($sum_nov3);
                $sum_nov3 = array_map('intval', $sum_nov3);
                $sum_dic3 = getSuma3($sum_dic3);
                $sum_dic3 = array_map('intval', $sum_dic3);

                $sum_ene4 = getSuma3($sum_ene4);
                $sum_ene4 = array_map('intval', $sum_ene4);
                $sum_feb4 = getSuma3($sum_feb4);
                $sum_feb4 = array_map('intval', $sum_feb4);
                $sum_mar4 = getSuma3($sum_mar4);
                $sum_mar4 = array_map('intval', $sum_mar4);
                $sum_abr4 = getSuma3($sum_abr4);
                $sum_abr4 = array_map('intval', $sum_abr4);
                $sum_may4 = getSuma3($sum_may4);
                $sum_may4 = array_map('intval', $sum_may4);
                $sum_jun4 = getSuma3($sum_jun4);
                $sum_jun4 = array_map('intval', $sum_jun4);
                $sum_jul4 = getSuma3($sum_jul4);
                $sum_jul4 = array_map('intval', $sum_jul4);
                $sum_ago4 = getSuma3($sum_ago4);
                $sum_ago4 = array_map('intval', $sum_ago4);
                $sum_sep4 = getSuma3($sum_sep4);
                $sum_sep4 = array_map('intval', $sum_sep4);
                $sum_oct4 = getSuma3($sum_oct4);
                $sum_oct4 = array_map('intval', $sum_oct4);
                $sum_nov4 = getSuma3($sum_nov4);
                $sum_nov4 = array_map('intval', $sum_nov4);
                $sum_dic4 = getSuma3($sum_dic4);
                $sum_dic4 = array_map('intval', $sum_dic4);

                $this->set(array('sum_ene3' => $sum_ene3, 'sum_feb3' => $sum_feb3, 'sum_mar3' => $sum_mar3, 'sum_abr3' => $sum_abr3, 'sum_may3' => $sum_may3, 'sum_jun3' => $sum_jun3, 'sum_jul3' => $sum_jul3, 'sum_ago3' => $sum_ago3, 'sum_sep3' => $sum_sep3, 'sum_oct3' => $sum_oct3, 'sum_nov3' => $sum_nov3, 'sum_dic3' => $sum_dic3, 'sum_ene4' => $sum_ene4, 'sum_feb4' => $sum_feb4, 'sum_mar4' => $sum_mar4, 'sum_abr4' => $sum_abr4, 'sum_may4' => $sum_may4, 'sum_jun4' => $sum_jun4, 'sum_jul4' => $sum_jul4, 'sum_ago4' => $sum_ago4, 'sum_sep4' => $sum_sep4, 'sum_oct4' => $sum_oct4, 'sum_nov4' => $sum_nov4, 'sum_dic4' => $sum_dic4));
            break;
        }
        
        $sum_ene1 = getSuma3($sum_ene1);
        $sum_ene1 = array_map('intval', $sum_ene1);

        $sum_ene2 = getSuma3($sum_ene2);
        $sum_ene2 = array_map('intval', $sum_ene2);

        
        
        // cambio de mes
        $sum_feb1 = getSuma3($sum_feb1);
        $sum_feb1 = array_map('intval', $sum_feb1);

        $sum_feb2 = getSuma3($sum_feb2);
        $sum_feb2 = array_map('intval', $sum_feb2);

        
        // cambio de mes
        $sum_mar1 = getSuma3($sum_mar1);
        $sum_mar1 = array_map('intval', $sum_mar1);

        $sum_mar2 = getSuma3($sum_mar2);
        $sum_mar2 = array_map('intval', $sum_mar2);

        
        // cambio de mes
        $sum_abr1 = getSuma3($sum_abr1);
        $sum_abr1 = array_map('intval', $sum_abr1);

        $sum_abr2 = getSuma3($sum_abr2);
        $sum_abr2 = array_map('intval', $sum_abr2);

        
        // cambio de mes
        $sum_may1 = getSuma3($sum_may1);
        $sum_may1 = array_map('intval', $sum_may1);

        $sum_may2 = getSuma3($sum_may2);
        $sum_may2 = array_map('intval', $sum_may2);

        
        // cambio de mes
        $sum_jun1 = getSuma3($sum_jun1);
        $sum_jun1 = array_map('intval', $sum_jun1);

        $sum_jun2 = getSuma3($sum_jun2);
        $sum_jun2 = array_map('intval', $sum_jun2);

        
        // cambio de mes
        $sum_jul1 = getSuma3($sum_jul1);
        $sum_jul1 = array_map('intval', $sum_jul1);

        $sum_jul2 = getSuma3($sum_jul2);
        $sum_jul2 = array_map('intval', $sum_jul2);

        
        // cambio de mes
        $sum_ago1 = getSuma3($sum_ago1);
        $sum_ago1 = array_map('intval', $sum_ago1);

        $sum_ago2 = getSuma3($sum_ago2);
        $sum_ago2 = array_map('intval', $sum_ago2);

        
        // cambio de mes
        $sum_sep1 = getSuma3($sum_sep1);
        $sum_sep1 = array_map('intval', $sum_sep1);

        $sum_sep2 = getSuma3($sum_sep2);
        $sum_sep2 = array_map('intval', $sum_sep2);

        
        // cambio de mes
        $sum_oct1 = getSuma3($sum_oct1);
        $sum_oct1 = array_map('intval', $sum_oct1);

        $sum_oct2 = getSuma3($sum_oct2);
        $sum_oct2 = array_map('intval', $sum_oct2);

        
        // cambio de mes
        $sum_nov1 = getSuma3($sum_nov1);
        $sum_nov1 = array_map('intval', $sum_nov1);

        $sum_nov2 = getSuma3($sum_nov2);
        $sum_nov2 = array_map('intval', $sum_nov2);

        
        // cambio de mes
        $sum_dic1 = getSuma3($sum_dic1);
        $sum_dic1 = array_map('intval', $sum_dic1);

        $sum_dic2 = getSuma3($sum_dic2);
        $sum_dic2 = array_map('intval', $sum_dic2);


        $this->set(array('sum_ene1' => $sum_ene1, 'sum_ene2' => $sum_ene2, 'sum_feb1' => $sum_feb1, 'sum_feb2' => $sum_feb2, 'sum_mar1' => $sum_mar1, 'sum_mar2' => $sum_mar2, 'sum_abr1' => $sum_abr1, 'sum_abr2' => $sum_abr2, 'sum_may1' => $sum_may1, 'sum_may2' => $sum_may2, 'sum_jun1' => $sum_jun1, 'sum_jun2' => $sum_jun2, 'sum_jul1' => $sum_jul1, 'sum_jul2' => $sum_jul2, 'sum_ago1' => $sum_ago1, 'sum_ago2' => $sum_ago2, 'sum_sep1' => $sum_sep1, 'sum_sep2' => $sum_sep2, 'sum_oct1' => $sum_oct1, 'sum_oct2' => $sum_oct2, 'sum_nov1' => $sum_nov1, 'sum_nov2' => $sum_nov2, 'sum_dic1' => $sum_dic1, 'sum_dic2' => $sum_dic2));

        // print_r($sum_ene1);
        $sibas = getSuma2($sibas);
        $sibas = array_map('intval', $sibas);
        $this->set(array('siba' => $siba, 'sibas' => $sibas));



    
    }


}
