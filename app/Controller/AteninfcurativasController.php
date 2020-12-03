<?php
	class AteninfcurativasController extends AppController{
	    public $helpers = array('Html', 'Form', 'Flash');
	    public $components = array( 'Flash');
	    public $name = 'Ateninfcurativas';
	    
	    public function index(){
	        $this->set('ateninfcurativas', $this->Ateninfcurativa->find('all'));
		}
	}
?>