<?php
/**
 * Contrato Fixture
 */
class ContratoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sol_carnet' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'oficio_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'funcion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_inicio' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'fechahora_firma' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'personacompensaciones_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'solicitudpersonal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'n_paginas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'personaenlace_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'sol_carnet' => 'Lorem ipsum d',
			'oficio_no' => 'Lorem ipsum d',
			'funcion_id' => 1,
			'fecha_inicio' => 1476392255,
			'fecha_fin' => 1476392255,
			'fechahora_firma' => 1476392255,
			'personacompensaciones_id' => 1,
			'solicitudpersonal_id' => 1,
			'n_paginas' => 1,
			'personaenlace_id' => 1
		),
	);

}
