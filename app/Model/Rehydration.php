<?php
App::uses('AppModel', 'Model');
/**
 * Rehydration Model
 *
 * @property Regions $Regions
 */
class Rehydration extends AppModel
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
