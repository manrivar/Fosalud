<?php
/**
 * CambioTurno Fixture
 */
class CambioTurnoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'personasolicita_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre_solicita' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_solicita' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_solicita' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'motivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'documentacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'personacambio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre_cambio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_cambio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_cambio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'jefe_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre_jefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_jefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechajefe_vobo' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_cambio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_cobertura' => array('type' => 'date', 'null' => false, 'default' => null),
		'total_horas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'autorizado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comentarios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'personasolicita_id' => 1,
			'nombre_solicita' => 'Lorem ipsum dolor sit amet',
			'cargo_solicita' => 'Lorem ipsum dolor sit amet',
			'establecimiento_solicita' => 'Lorem ipsum dolor sit amet',
			'mes' => 'Lorem ipsum dolor sit a',
			'motivo' => 'Lorem ipsum dolor sit amet',
			'documentacion' => 'L',
			'personacambio_id' => 1,
			'nombre_cambio' => 'Lorem ipsum dolor sit amet',
			'cargo_cambio' => 'Lorem ipsum dolor sit amet',
			'establecimiento_cambio' => 'Lorem ipsum dolor sit amet',
			'jefe_id' => 1,
			'nombre_jefe' => 'Lorem ipsum dolor sit amet',
			'cargo_jefe' => 'Lorem ipsum dolor sit amet',
			'fechajefe_vobo' => '2017-02-06',
			'fecha_cambio' => '2017-02-06',
			'fecha_cobertura' => '2017-02-06',
			'total_horas' => 1,
			'autorizado' => 'L',
			'comentarios' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1486416152,
			'user_reg_id' => 1
		),
	);

}
