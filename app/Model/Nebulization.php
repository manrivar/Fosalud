<?php
App::uses('AppModel', 'Model');
/**
 * Nebulization Model
 *
 * @property Regions $Regions
 */
class Nebulization extends AppModel
{



    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Region' => array(
            'className' => 'Region',
            'foreignKey' => 'regions_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
