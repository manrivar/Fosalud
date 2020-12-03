<?php
	class AtenmatcurativasController extends AppController{
	    public $helpers = array('Html', 'Form', 'Flash');
	    public $components = array( 'Flash');
	    public $name = 'Atenmatcurativas';
	    
	    public function index(){
	        $this->set('atenmatcurativas', $this->Atenmatcurativa->find('all'));
	    }
	    
	    public function search(){
	        $this->set('atenmatcurativas', $this->Atenmatcurativa->find('all'));
	    }
	}
?>