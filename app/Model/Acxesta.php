<?php
    class Acxesta extends AppModel
    {
        public $belongsTo = array(
            'Establecimiento' => array(
                'className' => 'Establecimiento',
                'foreignKey' => 'establecimientos_id'
            ),
            'Sibasi' => array(
                'className' => 'Sibasi',
                'foreignKey' => 'sibasis_id',
                'order' => 'sibasi.id'
            ),
            'Regione' => array(
                'className' => 'Regione',
                'foreignKey' => 'regiones_id'
            )
        );
    }
?>