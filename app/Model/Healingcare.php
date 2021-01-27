<?php
App::uses('AppModel', 'Model');
/**
 * Healingcare Model
 *
 * @property Regions $Regions
 */
class Healingcare extends AppModel
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
