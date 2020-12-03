<?php
/**
 * Compensatorio Fixture
 */
class CompensatorioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre_empleado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_empleado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'personajefe_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre_jefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_jefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_solicitud' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahorareg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => false, 'default' => null),
		'mes' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'horas_laboradas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechashoras_solicitadas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'autorizado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_autorizado' => array('type' => 'date', 'null' => false, 'default' => null),
		'informacion_complementaria' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_mod' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'user_mod_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'persona_id' => 1,
			'nombre_empleado' => 'Lorem ipsum dolor sit amet',
			'cargo_empleado' => 'Lorem ipsum dolor sit amet',
			'establecimiento' => 'Lorem ipsum dolor sit amet',
			'personajefe_id' => 1,
			'nombre_jefe' => 'Lorem ipsum dolor sit amet',
			'cargo_jefe' => 'Lorem ipsum dolor sit amet',
			'fecha_solicitud' => '2017-02-08',
			'fechahorareg' => 1486576397,
			'fecha_inicio' => '2017-02-08',
			'fecha_fin' => '2017-02-08',
			'mes' => 1,
			'horas_laboradas' => 1,
			'fechashoras_solicitadas' => 'Lorem ipsum dolor sit amet',
			'autorizado' => 'L',
			'user_reg_id' => 1,
			'fecha_autorizado' => '2017-02-08',
			'informacion_complementaria' => 'Lorem ipsum dolor sit amet',
			'fechahora_mod' => 1486576397,
			'user_mod_id' => 1
		),
	);

}
