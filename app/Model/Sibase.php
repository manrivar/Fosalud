<?php
App::uses('AppModel', 'Model');
/**
 * Sibase Model
 *
 * @property Regions $Regions
 */
class Sibase extends AppModel
{
    public $displayField = 'sibase_name';


    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Regions' => array(
            'className' => 'Regions',
            'foreignKey' => 'regions_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
