<?php
App::uses('AppModel', 'Model');
/**
 * Violence Model
 *
 * @property Regions $Regions
 */
class Violence extends AppModel
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
