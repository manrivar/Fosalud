<?php
    class Ecxesta extends AppModel{
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
                'classsName' => 'Regione',
                'foreignKey' => 'regiones_id'
            )
        );
    }
?>