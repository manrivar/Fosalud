<?php
App::uses('AppModel', 'Model');
/**
 * Healing Model
 *
 * @property Regions $Regions
 */
class Healing extends AppModel
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
