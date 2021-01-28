<?php
App::uses('AppModel', 'Model');
/**
 * Maternalhcxestablishment Model
 *
 * @property Establishments $Establishments
 * @property Sibases $Sibases
 * @property Regions $Regions
 */
class Recipesxestablishment extends AppModel
{


    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Establishment' => array(
            'className' => 'Establishment',
            'foreignKey' => 'establishments_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Sibases' => array(
            'className' => 'Sibases',
            'foreignKey' => 'sibases_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Region' => array(
            'className' => 'Region',
            'foreignKey' => 'regions_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
