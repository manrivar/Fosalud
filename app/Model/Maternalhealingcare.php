<?php
App::uses('AppModel', 'Model');
/**
 * Maternalhealingcare Model
 *
 * @property Regions $Regions
 */
class Maternalhealingcare extends AppModel
{


    // The Associations below have been created with all possible keys, those that are not needed can be removed

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
