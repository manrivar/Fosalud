<?php
App::uses('AppModel', 'Model');
/**
 * Region Model
 *
 */
class Region extends AppModel
{
    public $displayField = 'region_name';

    public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'regions_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
