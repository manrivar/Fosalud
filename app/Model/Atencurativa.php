<?php 
	class Atencurativa extends AppModel 
	{
	    public $belongsTo = array(
	        'Regione' => array(
	            'className' => 'Regione',
	            'foreignKey' => 'regiones_id'
	        )
	    );
	}
?>