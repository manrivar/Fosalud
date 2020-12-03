<?php
	class TabaquismosController extends AppController{
	    public $helpers = array('Html', 'Form', 'Flash');
	    public $components = array( 'Flash');
	    public $name = 'Tabaquismos';
	    
	    public function index(){
	        $this->set('tabaquismo', $this->Tabaquismo->find('all'));
		}
	}
?>