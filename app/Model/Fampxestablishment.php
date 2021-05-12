<?php
App::uses('AppModel', 'Model');
/**
 * Fampxestablishment Model
 *
 * @property Establishments $Establishments
 * @property Sibases $Sibases
 * @property Regions $Regions
 */
class Fampxestablishment extends AppModel
{
<<<<<<< HEAD
=======


>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
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
        'Sibase' => array(
            'className' => 'Sibase',
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
