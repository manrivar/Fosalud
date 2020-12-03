<?php
App::uses('AppModel', 'Model');
/**
 * Acceso Model
 *
 * @property User $User
 */
class Acceso extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

    public $displayField = 'descripcion';
    
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'acceso_id',
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
