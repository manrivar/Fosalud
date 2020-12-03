<?php 
	class Atenmatcurativa extends AppModel 
	{
        public $belongsTo = array(
            'Regione' => array(
                'classname' => 'Regione',
                'foreignKey' => 'regiones_id'
            ),
        );
	}
?>