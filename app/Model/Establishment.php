<?php
App::uses('AppModel', 'Model');
/**
 * Establishment Model
 *
 * @property Sibases $Sibases
 */
class Establishment extends AppModel
{

    public $displayField = 'establishment_name';
    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Sibases' => array(
            'className' => 'Sibases',
            'foreignKey' => 'sibases_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
