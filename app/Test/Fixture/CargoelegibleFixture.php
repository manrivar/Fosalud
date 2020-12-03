<?php
/**
 * Cargoelegible Fixture
 */
class CargoelegibleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'solicitudpersonal_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechagrupo' => array('type' => 'date', 'null' => false, 'default' => null),
		'porcentaje_psicologico' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'porcentaje_tecnico' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'porcentaje_entrevista' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'porcentaje_entrevista_profunda' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_mod' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cargo_id' => array('column' => array('cargo_id', 'solicitudpersonal_id'), 'unique' => 0)
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
			'cargo_id' => 1,
			'solicitudpersonal_id' => 1,
			'fechagrupo' => '2016-08-09',
			'porcentaje_psicologico' => 1,
			'porcentaje_tecnico' => 1,
			'porcentaje_entrevista' => 1,
			'porcentaje_entrevista_profunda' => 1,
			'user_id_reg' => 1,
			'fechahora_reg' => 1470758593,
			'user_id_mod' => 1,
			'fechahora_mod' => '2016-08-09 11:03:13'
		),
	);

}
