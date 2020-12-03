<?php 

	class Atencurativa extends AppModel 
	{
	    public $belongsTo = array(
	        'Regione' => array(
	            'classname' => 'Regione',
	            'foreignKey' => 'regiones_id'
	        )
	    );
	}
?>