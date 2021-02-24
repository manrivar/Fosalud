<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 * @property Persona $Persona
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */ 
    public $components = array('Paginator', 'Flash', 'Session');
    public $helpers = array('Html', 'Form', 'Time', 'Csv');
     

    function download() { 
        $this->set('orders', $this->Order->find('all')); 
        $this->layout = null; 
        $this->autoLayout = false; 
        Configure::write('debug', '0'); 
    } 




    public function Autorizacion() {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        if ($nivel_acceso > 2) {
            $this->Flash->error("Error: No cuenta con permisos para ingresar a esta pagina.");
            $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
        }
    }

    public function login() {
        //return $this->redirect("http://intranet.fosalud.gob.sv/?oid=".  session_id());
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if($this->Session->read('Auth.User.estado')!=1):
                 
                    $this->Flash->error(__('Usuario o contraseña incorrecta. Intentelo nuevamente'));
                    return $this->redirect(array('controller' => 'users', 'action' => 'logout'));
                endif;

                // Periodo en que se cambio el password por ultima vez
                $ultimoPassword = $this->Session->read('Auth.User.fechahorapassword');
                $datetime1 = date_create($ultimoPassword);
                $datetime2 = date_create(date('Y-m-d H:i:s'));
                $interval = date_diff($datetime1, $datetime2);
                $periodo = $interval->format("%a");
                // Actualizacion de contraseña obligatoria

                if ($periodo >= 90 && $this->Session->read('Auth.User.id') != 1) {
                    return $this->redirect(array('controller' => 'users', 'action' => 'actualizarpassword', $this->Session->read('Auth.User.id'), $this->Session->read('Auth.User.nombre_usuario')));
                } else {
                    if ($this->Session->read('Auth.User.id') != 1) {
                        $this->loadModel('Bitacora');
                        $persona_id = 0;
                        $descripcion = "Inicio de Session  DEL USUARIO " . $this->Session->read('Auth.User.username') . " " . $this->Session->read('Auth.User.nombre_usuario');
                        $Bitacora["Bitacora"]["descripcion"] = $descripcion;
                        $Bitacora["Bitacora"]["persona_id"] = $persona_id;
                        $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                        $this->Bitacora->save($Bitacora);
                    }

                    return $this->redirect(array('controller' => 'users', 'action' => 'confidencialidad'));
                }
            }
            $this->Flash->error(__('Usuario o contraseña incorrecta. Intentelo nuevamente'));
        }
    }

    public function confidencialidad() {

        if ($this->request->is(array('post', 'put'))) {
            $this->Session->write('confidencial', $this->request->data['respuesta']);
            $this->redirect('bienvenida');
        }

        $this->layout = "acuerdo";
    }

    public function actualizarpassword($UserId = NULL, $usuario = NULL) { 
        if ($UserId == NULL || $usuario == NULL) {
            $this->Flash->error(__('Error: Usuario no valido.')); 
            return $this->redirect(array('controller' => 'users', 'action' => 'logout'));
        }

        $this->set(compact('UserId', 'usuario'));
    }

    public function validalogin() {
        $this->autoRender = false;
        $this->loadModel('Persona');
        $username = $_POST["username"];

        $resp = $this->User->find('all', array(
            'conditions' => array(
                'username' => $username,
                'estado' => 1
            ),
            'recursive' => -1
        ));

        $persona = $this->Persona->find('first', array(
            'conditions' => array(
                'Persona.nit' => $username
            )
        ));

        $img = '<img alt="" src="../img/perfil-neutro.png">';

        /* if (!empty($persona)) {
          if ($persona['Persona']['foto_dir'] != NULL && $persona['Persona']['foto_dir'] != "" && $persona['Persona']['foto'] != NULL && $persona['Persona']['foto'] != "") {
          $img = '<img alt="" src="../files/persona/foto/' . $persona['Persona']['foto_dir'] . '/thumb_lista_' . $persona['Persona']['foto'] . '" width="200px" height="224px">';
          }
          } */
        if (!empty($persona)) {
            switch ($persona['Persona']['sexo']) {
                case 'F':
                    $img = '<img alt="" src="../img/perfil-limpio_f.png">';
                    break;
                case 'M':
                    $img = '<img alt="" src="../img/perfil-limpio_m.png">';
                    break;
                default :
                    $img = '<img alt="" src="../img/perfil-neutro.png">';
                    break;
            }

            /* if ($persona['Persona']['sexo']=='F') {
              $img = '<img alt="" src="../img/perfil-limpio_f.png">';
              }
              else
              {
              $img = '<img alt="" src="../img/perfil-limpio_m.png">';
              } */
        }


        if (!empty($resp))
            return true . "~" . $img;
        else
            return false . "~" . $img;
    }

    public function logout() {
        print_r($this->data);
        //die();

        $this->Auth->logout();
        $this->redirect($this->Auth->logout());
    }

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('recuperacion', 'procesorecuperacion', 'validalogin');
    }

    public function recuperacion() {
        
    }

    public function procesorecuperacion() {
        $this->autoRender = false;
        $this->loadModel("Fijo");
        $this->loadModel("Interino");
        $this->loadModel("Vacacion");

        if (isset($_POST["bandera"])):
            switch ($_POST["bandera"]):
                case 1:
                    $dui = $_POST["dui"];
                    $nit = $_POST["nit"];

                    $respFijo = $this->User->find("first", array(
                        'filds' => array(
                            'Fijo.nit', 'Fijo.dui', 'User.id'
                        ),
                        'joins' => array(
                            array(
                                'table' => 'fijos',
                                'alias' => 'Fijo',
                                'type' => 'inner',
                                'conditions' => array(
                                    'User.username = Fijo.nit'
                                )
                            )
                        ),
                        'conditions' => array(
                            'Fijo.dui' => $dui,
                            'Fijo.nit' => $nit
                        ),
                    ));


                    $respInterino = $this->User->find("first", array(
                        'filds' => array(
                            'Interino.nit', 'Interino.dui', 'User.id'
                        ),
                        'joins' => array(
                            array(
                                'table' => 'interinos',
                                'alias' => 'Interino',
                                'type' => 'inner',
                                'conditions' => array(
                                    'User.username = Interino.nit'
                                )
                            )
                        ),
                        'conditions' => array(
                            'Interino.dui' => $dui,
                            'Interino.nit' => $nit
                        )
                    ));


                    $respVacacion = $this->User->find("first", array(
                        'filds' => array(
                            'Vacacion.nit', 'Vacacion.dui', 'User.id'
                        ),
                        'joins' => array(
                            array(
                                'table' => 'vacacions',
                                'alias' => 'Vacacion',
                                'type' => 'inner',
                                'conditions' => array(
                                    'User.username = Vacacion.nit'
                                )
                            )
                        ),
                        'conditions' => array(
                            'Vacacion.dui' => $dui,
                            'Vacacion.nit' => $nit
                        )
                    ));

                    $UserId = "";

                    if (!empty($respFijo)) {
                        $UserId = $respFijo["User"]["id"];
                    }

                    if (!empty($respInterino) && $UserId == "") {
                        $UserId = $respInterino["User"]["id"];
                    }

                    if (!empty($respVacacion) && $UserId == "") {
                        $UserId = $respVacacion["User"]["id"];
                    }

                    if ($UserId == "") {
                        return -1;
                    }


                    $salida = ''
                            . ' <div id="loginModal" class="" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="text-center">Actualizar Contraseña</h1>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form col-md-12 center-block" name="UserEditForm" 
                                                  role="form" accept-charset="utf-8" method="post" id="UserEditForm" 
                                                  action="' . $this->base . '/users/procesorecuperacion/' . $UserId . '">
                                                  
                                                <div class="form-group">
                                                    <input type="hidden" id="base" name="base" value="' . $this->base . '" />

                                                    <div class="input text required form-group">
                                                        <label for="UserUsername">Usuario</label>
                                                        <input class="form-control" type="text" id="UserUsername" value="' . $nit . '" maxlength="255" disabled="disabled" name="data[User][username]"/>
                                                            
                                                    </div>

                                                    <div class="input password required form-group">
                                                        <label for="UserPassword">Contraseña</label>
                                                        <input class="form-control" type="password" required="required" id="UserPassword" value="" name="data[User][password]"/>
                                                        <input class="form-control" type="hidden"  id="UserId" value="' . $UserId . '" name="data[User][id]"/>
                                                    </div> 

                                                </div>
                                                <div class="">
                                                    <div><button onclick="window.UserEditForm.submit();" class="btn-block btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Actualizar</button></div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div style="text-align: center;" class="span5">
                                            <u><i>Aplicacion compatible con FireFox y Google Chrome</i></u>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-md-12">Ver. 2.0</div>	
                                        </div>
                                    </div>
                                </div>
                            </div>'
                            . '';

                    echo $salida;

                    break;
            endswitch;
        endif;

        if (isset($this->request->data["User"]["id"]) && $this->request->data["User"]["id"] != "") {

            $this->request->data["User"]["fechahorapassword"] = date('Y-m-d H:i:s');
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Contraseña actualizada.'));

                if (!isset($this->request->data["User"]["normal"])) {
                    return $this->redirect(array('action' => 'login'));
                } else {
                    //Si proviene del cambio de password obligatorio valida hcia donde redireccionar
                    if ($this->Session->read('Auth.User.acceso_id') != 3)
                        return $this->redirect(array('controller' => 'users', 'action' => 'Bienvenida'));
                    else
                        return $this->redirect("http://intranet.fosalud.gob.sv/?oid=" . session_id());
                }
            } else {
                $this->Flash->error(__('La contraseña no se actualizo. Intente nuevamente.'));
            }
        }
    }

    /**
     * index method
     *
     * @return void
     */
    public function Bienvenida() {

    }
    public function normativa() {

    }
    public function estadistica_y_epidemiologia(){
       
    }
    public function programas_especiales(){
    
    }
    public function informe(){
    
    }
    public function new(){
    
    }
    public function Atenmenu(){

    }
    public function Atenmenu2(){

    }
    /**
     * index method
     *
     * @return void
     */
    public $option = array();

    public function index() {
        $this->Autorizacion();
        $this->option = array(
                'User.id<>1 '
            );
        if (isset($_POST["q"])) {
            $q = $_POST["q"];
            $this->Session->write("q", trim($q)); 

            $this->option = array(
                '(User.nombre_usuario like "%' . $this->Session->read("q") . '%" OR User.username like "%' . $this->Session->read("q") . '%") and User.id<>1 '
            );
        } elseif ($this->Session->read("q") != "") {
            $this->option = array(
                '(User.nombre_usuario like "%' . $this->Session->read("q") . '%" OR User.username like "%' . $this->Session->read("q") . '%") and User.id<>1 '
            );
        }


        $this->Paginator->settings = $this->paginate;
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate(null, array($this->option)));
            $this->set('q', $this->Session->read('q'));
            /*
        if ($this->Session->read('Auth.User.unidadorganizativa_id') == 0) {
            $this->set('users', $this->Paginator->paginate(null, array($this->option)));
            $this->set('q', $this->Session->read('q'));
        } else {
            $this->set('users', $this->Paginator->paginate(null, array("User.unidadorganizativa_id" => $this->Session->read('Auth.User.unidadorganizativa_id'), $this->option)));
            $this->set('q', $this->Session->read('q'));
        }
             * */
             
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Autorizacion();
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $this->loadmodel('Acceso');
        $this->Autorizacion();
        if ($this->request->is(array('post', 'put'))) {
            $this->User->create();

            /* print_r($this->request->data); 
              die(); */
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));
                //bitacora
                $this->loadModel('Bitacora');
                $Bitacora["Bitacora"]["descripcion"] = "CREACION DE USUARIO CON ACCESO de  PARA: " .$this->request->data['User']['nombre_usuario'] ;
                $Bitacora["Bitacora"]["empleado_id"] = 0;
                $Bitacora["Bitacora"]["medico_id"] = 0;
                $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                $this->Bitacora->save($Bitacora); 
                
                //*************ENVIO DE CORREO A USUARIO CREADO*******************************************************************
                $casilla = $this->request->data['User']['email'];
                //$casilla = $encargados['MedicoEnlace']['email'];
                $asunto = "Creacion de Usuario";
                $cabeceras = "From: " . strip_tags("siug@servApp.fosalud.gob.sv") . "\r\n";
                //$cabeceras .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
                $cabeceras .= "CCO: williamrivera@fosalud.gob.sv\r\n"; 
                //$cabeceras .= "CC: napoleonramirez@fosalud.gob.sv,alvaroortiz@fosalud.gob.sv,dsap@fosalud.gob.sv\r\n"; 
                $cabeceras .= "MIME-Version: 1.0\r\n";
                $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
                $detalle = "Hola " . $this->request->data['User']['nombre_usuario'] . " Se le notifica que se ha creado un usuario para el <b>el Sistema Informatico de la Unidad de Genero SIUG </b>, con las siguientes credenciales de ingreso:<br><br>";
                $detalle .= "<b>Usuario: " . $this->request->data['User']['username'] . "</b><br>";
                $detalle .= "<b>Password: 123456</b><br><br>";
                $detalle .= "El password es temporal y puede cambiarlo a la hora de ingresar al sistema.";
                $mensaje = $this->User->mail_msj($detalle);
                //mail($casilla, $asunto, $mensaje, $cabeceras);
                //***************************************************************************************************************


                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('El usuario no se guardo. Intentelo nuevamente.'));
            }
        }

        if ($this->request->is(array("get")) and isset($id)) {
            $grupos = $this->User->Group->findById($id);
            $this->set("id", $grupos["Group"]["id"]);
            $this->set("group_name", $grupos["Group"]["name"]);
        } else {
            //Carga de combo Grupo de accesos

            $accesos = $this->User->Acceso->find('list');
            $this->set(compact('accesos'));


            //Carga de combo para las unidades presupuestarias
            $comp = "";
            if ($this->Session->read('Auth.User.acceso_id') != 0) {
                $comp = " where uo.id=" . $this->Session->read('Auth.User.acceso_id');
            }
            $groups = $this->User->query('select uo.id, uo.descripcion from accesos uo ' . $comp);

            $combo_organizativo = '<div class="input select required"><label for="UserAccesoId">Nivel de Acceso</label>
                        <select name="acceso_id" id="UserAccesoId" required="true">';
            if ($this->Session->read('Auth.User.acceso_id') == 0) {
                $combo_organizativo .= '<option value="">[Seleccione ...]</option>';
            }

            foreach ($groups as $grupos):
                $combo_organizativo .= '<option value="' . $grupos["uo"]["id"] . '">' . $grupos["uo"]["descripcion"] . '</option>';
            endforeach;
            $combo_organizativo .= '</select></div>';
            $this->set("combo_organizativo", $combo_organizativo);
        }
    }

    public function Autorizacion_modificacion($id) {
        $nivel_acceso = $this->Session->read('Auth.User.acceso_id');
        $user_id=$this->Session->read('Auth.User.id');
        if ($nivel_acceso == 3 or $nivel_acceso==9) {
            $id=$user_id;
            
        }

        return $id;
    }
    
    /** 
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void 
     */
    public function edit($id = null) {
        $id=$this->Autorizacion_modificacion($id);
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data["User"]["fechahorapassword"] = date('Y-m-d H:i:s');

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Contraseña actualizada.'));
                return $this->redirect(array('action' => 'edit', $id));
            } else {
                $this->Flash->error(__('La contraseña no se actualizo. Intente nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }

        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }
    
    public function edit_gral($id = null) {

        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data["User"]["fechahorapassword"] = date('Y-m-d H:i:s');

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Datos Actualziados.'));
                return $this->redirect(array('action' => 'index', $id));
            } else {
                $this->Flash->error(__('La contraseña no se actualizo. Intente nuevamente.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }

        $groups = $this->User->Group->find('list');
        $accesos = $this->User->Acceso->find('list');
        $this->set(compact('accesos'));
    }

    

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Autorizacion();
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Flash->success(__('Usuario eliminado'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('El usuario no puede ser eliminado'));
        return $this->redirect(array('action' => 'index'));
    }

    
    
    





}



