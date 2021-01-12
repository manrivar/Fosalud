<?php
    class EcxestasController extends AppController{
        public $helpers = array('Html', 'Form', 'Time');
        public $components = array('Session');

        public function index($regiones_id){
            //Region Occidente
            if($regiones_id == 1){
                $this->set('ecxestas', $this->Ecxesta->find('all', array('conditions' => array('Ecxesta.regiones_id' => '1'))));
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Centro
            if($regiones_id == 2){
                $this->set('ecxestas', $this->Ecxesta->find('all', array('conditions' => array('Ecxesta.regiones_id' => '2'))));
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $this->set('ecxestas', $this->Ecxesta->find('all', array('conditions' => array('Ecxesta.regiones_id' => '3'))));
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Paracentral
            if($regiones_id == 4){
                $this->set('ecxestas', $this->Ecxesta->find('all', array('conditions' => array('Ecxesta.regiones_id' => '4'))));
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Oriente
            if($regiones_id == 5){
                $this->set('ecxestas', $this->Ecxesta->find('all', array('conditions' => array('Ecxesta.regiones_id' => '5'))));
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
        }
        
        public function edit($establecimientos_id = null, $regiones_id){
            //Region Occidente
            if($regiones_id == 1){
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Ecxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('El examen clinico no se encontro'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Ecxesta->id = $establecimientos_id;
                    if ($this->Ecxesta->save($this->request->data)) {
                        $this->Flash->success(__('El examen clinico se modifico con exito'));
                        return $this->redirect(array('controller' => 'ecxestas', 'action' => 'index', 1));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Edicion de region centro 
            //Region Centro
            if($regiones_id == 2){
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Ecxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Ecxesta->id = $establecimientos_id;
                    if ($this->Ecxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'ecxestas', 'action' => 'index', 2));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Ecxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Ecxesta->id = $establecimientos_id;
                    if ($this->Ecxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'ecxestas', 'action' => 'index', 3));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Paracentral
            if($regiones_id == 4){
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Ecxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('El examen clinico no se encontro'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Ecxesta->id = $establecimientos_id;
                    if ($this->Ecxesta->save($this->request->data)) {
                        $this->Flash->success(__('El examen clinico se modifico con exito'));
                        return $this->redirect(array('controller' => 'ecxestas', 'action' => 'index', 4));
                    }
                    $this->Flash->error(__('No se puede modificar el examen clinico'));
                }
             
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
                //Region Oriente
            if($regiones_id == 5){
                $regiones_id = $this->Ecxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Ecxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('El examen clinico no fue encontrado'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Ecxesta->id = $establecimientos_id;
                    if ($this->Ecxesta->save($this->request->data)) {
                        $this->Flash->success(__('El examen clinico se modifico con exito'));
                        return $this->redirect(array('controller' => 'ecxestas', 'action' => 'index', 5));
                    }
                    $this->Flash->error(__('No se puede modificar el examen clinico'));
                }
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            }
        }
    }
?>