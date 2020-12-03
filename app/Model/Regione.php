<?php
    class Regione extends AppModel
    {
        public $hasOne = array(
            'Atencurativa' => array(
                'className' => 'Atencurativa',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'depend' => false
            ),
            'Ateninfcurativa' => array(
                'className' => 'Ateninfcurativa',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'depend' => false
            ),
            'Atenmatcurativa' => array(
            'className' => 'Atenmatcurativa',
            'foreignKey' => 'regiones_id',
            'conditions' => '',
            'depend' => false
            ),
            'Tabaquismo' => array(
            'className' => 'Tabaquismo',
            'foreignKey' => 'regiones_id',
            'conditions' => '',
            'depend' => false
            ),
        );  
        
        public $hasMany = array(
            'Acxesta' => array(
                'className' => 'Acxesta',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Acinfxesta' => array(
                'className' => 'Acinfxesta',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Acmatxesta' => array(
                'className' => 'Acmatxesta',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Tabxesta' => array(
                'className' => 'Acmatxesta',
                'foreignKey' => 'regiones_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
        );  
    }
?>