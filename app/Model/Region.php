<?php
App::uses('AppModel', 'Model');
/**
 * Region Model
 *
 */
class Region extends AppModel
{
    public $displayField = 'region_name';
<<<<<<< HEAD

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
=======
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
}
