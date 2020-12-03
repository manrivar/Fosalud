<?php
/**
 * Nombramiento Fixture
 */
class NombramientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'acuerdo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_nombramiento' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora_nombramiento' => array('type' => 'time', 'null' => false, 'default' => null),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'up' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lt' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo_presupuestario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'partida' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subpartida' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_hora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'acuerdo' => 'Lorem ipsum d',
			'fecha_nombramiento' => '2017-03-23',
			'hora_nombramiento' => '14:55:09',
			'persona_id' => 1,
			'cargo_id' => 1,
			'up' => 'Lo',
			'lt' => 'Lo',
			'codigo_presupuestario' => 'Lorem ipsum dolor sit amet',
			'partida' => 'Lo',
			'subpartida' => 'Lo',
			'salario' => 1,
			'fecha_hora_reg' => 1490298909,
			'user_reg_id' => 1
		),
	);

}
