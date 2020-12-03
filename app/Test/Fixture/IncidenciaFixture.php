<?php
/**
 * Incidencia Fixture
 */
class IncidenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'incidencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
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
			'incidencia' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1504202867,
			'user_reg_id' => 1,
			'persona_id' => 1,
			'cargo_id' => 1,
			'establecimiento_id' => 1
		),
	);

}
