<?php
    class AcinfxestasController extends AppController{
        public $helpers = array('Html', 'Form', 'Time');
        public $components = array('Session');

         public function index($regiones_id){   
            //Region Occidente
            if($regiones_id == 1){
                $this->set('acinfxestas', $this->Acinfxesta->find('all', array(
                    'conditions' => array('Acinfxesta.regiones_id' => '1')
                )));
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Centro
            if($regiones_id == 2){
                $this->set('acinfxestas', $this->Acinfxesta->find('all', array(
                    'conditions' => array('Acinfxesta.regiones_id' => '2')
                )));
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $this->set('acinfxestas', $this->Acinfxesta->find('all', array(
                    'conditions' => array('Acinfxesta.regiones_id' => '3')
                )));
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Paracentral
            if($regiones_id == 4){
                $this->set('acinfxestas', $this->Acinfxesta->find('all', array(
                    'conditions' => array('Acinfxesta.regiones_id' => '4')
                )));
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
            //Region Oriente
            if($regiones_id == 5){
                $this->set('acinfxestas', $this->Acinfxesta->find('all', array(
                    'conditions' => array('Acinfxesta.regiones_id' => '5')
                )));
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);
            }
        }

        public function edit($establecimientos_id = null, $regiones_id) {
            //Region Occidente
            if($regiones_id == 1){
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acinfxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acinfxesta->id = $establecimientos_id;
                    if ($this->Acinfxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acinfxestas', 'action' => 'index', 1));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Centro
            if($regiones_id == 2){
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acinfxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acinfxesta->id = $establecimientos_id;
                    if ($this->Acinfxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acinfxestas', 'action' => 'index', 2));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Metropolitana
            if($regiones_id == 3){
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acinfxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acinfxesta->id = $establecimientos_id;
                    if ($this->Acinfxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acinfxestas', 'action' => 'index', 3));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Paracentral
            if($regiones_id == 4){
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acinfxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acinfxesta->id = $establecimientos_id;
                    if ($this->Acinfxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acinfxestas', 'action' => 'index', 4));
                    }
                    $this->Flash->error(__('No se puede modificar la atencion curativa'));
                }
            
                if (!$this->request->data) {
                    $this->request->data = $aten;
                }
            }
            //Region Oriente
            if($regiones_id == 5){
                $regiones_id = $this->Acinfxesta->findByRegiones_id($regiones_id);
                $this->set('regiones_id', $regiones_id);

                if (!$establecimientos_id) {
                    throw new NotFoundException(__('Datos Invalidos'));
                }
            
                $aten = $this->Acinfxesta->findByEstablecimientos_id($establecimientos_id);
                $this->set('aten', $aten);
                if (!$aten) {
                    throw new NotFoundException(__('La atencion curativa o fue encontrada'));
                }
            
                if ($this->request->is(array('post', 'put'))) {
                    $this->Acinfxesta->id = $establecimientos_id;
                    if ($this->Acinfxesta->save($this->request->data)) {
                        $this->Flash->success(__('La atencion curativa se modifico con exito'));
                        return $this->redirect(array('controller' => 'acinfxestas', 'action' => 'index', 5));
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