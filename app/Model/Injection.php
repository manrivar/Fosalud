<?php
App::uses('AppModel', 'Model');
/**
 * Injection Model
 *
 * @property Regions $Regions
 */
class Injection extends AppModel
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
