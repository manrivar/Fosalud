<?php
App::uses('AppModel', 'Model');
/**
 * Familyplanning Model
 *
 * @property Regions $Regions
 */
class Familyplanning extends AppModel
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
