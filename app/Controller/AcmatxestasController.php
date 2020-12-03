<?php
    class AcmatxestasController extends AppController{
        public $helpers = array('Html', 'Form', 'Time');
        public $components = array('Session');

         public function index($regiones_id){
            //Region Occidente
            if($regiones_id == 1){
                $this->set('acmatxestas', $this->Acmatxesta->find('all', array(
                    'conditions' => array('Acmatxesta.regiones_id' => '1')
                )));
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Centro
            if($regiones_id == 2){
                $this->set('acmatxestas', $this->Acmatxesta->find('all', array(
                    'conditions' => array('Acmatxesta.regiones_id' => '2')
                )));
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $this->set('acmatxestas', $this->Acmatxesta->find('all', array(
                    'conditions' => array('Acmatxesta.regiones_id' => '3')
                )));
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Paracentral
            if($regiones_id == 4){
                $this->set('acmatxestas', $this->Acmatxesta->find('all', array(
                    'conditions' => array('Acmatxesta.regiones_id' => '4')
                )));
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Oriente
            if($regiones_id == 5){
                $this->set('acmatxestas', $this->Acmatxesta->find('all', array(
                    'conditions' => array('Acmatxesta.regiones_id' => '5')
                )));
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
        }

        public function edit($establecimientos_id = null, $regiones_id) {
            //Region Occidente
            if($regiones_id == 1){
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acmatxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acmatxesta->id = $establecimientos_id;
                    if ($this->Acmatxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acmatxestas', 'action' => 'index', 1));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Centro
            if($regiones_id == 2){
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acmatxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acmatxesta->id = $establecimientos_id;
                    if ($this->Acmatxesta->save($this->request->data)) {
                         //bitacora
                         
                         $this->loadModel('Bitacora', 'Establecimiento');
                         $Bitacora["Bitacora"]["descripcion"] = "SE EDITO LA ATENCION MATERNA";
                         $Bitacora["Bitacora"]["user_id"] = $this->Session->read('Auth.User.id');
                         $this->Bitacora->save($Bitacora);
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acmatxestas', 'action' => 'index', 2));  
                        }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acmatxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acmatxesta->id = $establecimientos_id;
                    if ($this->Acmatxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acmatxestas', 'action' => 'index', 3));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Paracentral
            if($regiones_id == 4){
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acmatxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acmatxesta->id = $establecimientos_id;
                    if ($this->Acmatxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acmatxestas', 'action' => 'index', 4));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Oriente
            if($regiones_id == 5){
                $regiones_id = $this->Acmatxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acmatxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acmatxesta->id = $establecimientos_id;
                    if ($this->Acmatxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acmatxestas', 'action' => 'index', 5));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
        }
    }
?>