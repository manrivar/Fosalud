<?php 
    class Establecimiento extends AppModel
    {
        public $hasMany = array(
            'Acxesta' => array(
                'className' => 'Acxesta',
                'foreignKey' => 'establecimientos_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Acinfxesta' => array(
                'className' => 'Acinfxesta',
                'foreignKey' => 'establecimientos_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Acmatxesta' => array(
                'className' => 'Acmatxesta',
                'foreignKey' => 'establecimientos_id',
                'conditions' => '',
                'order' => '',
                'depend' => false
            ),
            'Tabxesta' => array(
            'className' => 'Tabxesta',
            'foreignKey' => 'establecimientos_id',
            'conditions' => '',
            'order' => '',
            'depend' => false
            ),
        );

        public $belongsTo = array(
            'Sibasi' => array(
                'className' => 'Sibasi',
                'foreignKey' => 'sibasis_id'
            ),
        );
    }
?>