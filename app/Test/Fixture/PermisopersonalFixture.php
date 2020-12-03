<?php
/**
 * Permisopersonal Fixture
 */
class PermisopersonalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'persona quien solicita el permiso'),
		'nombreempleado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimeinto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipopermiso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'detallepermiso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => false, 'default' => null),
		'horas_solicitadas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'jefe_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'nombrejefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_jefe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechavobo_jefe' => array('type' => 'date', 'null' => false, 'default' => null),
		'documentacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_documentacion' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'fecha en que se entrego documentacion completa'),
		'vobo_gth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechavobo_gth' => array('type' => 'date', 'null' => false, 'default' => null),
		'autorizado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahorareg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'comentarios' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'nombreempleado' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'establecimeinto' => 'Lorem ipsum dolor sit amet',
			'tipopermiso_id' => 1,
			'detallepermiso_id' => 1,
			'fecha_inicio' => '2017-01-27',
			'fecha_fin' => '2017-01-27',
			'horas_solicitadas' => 1,
			'jefe_id' => 1,
			'nombrejefe' => 'Lorem ipsum dolor sit amet',
			'cargo_jefe' => 'Lorem ipsum dolor sit amet',
			'fechavobo_jefe' => '2017-01-27',
			'documentacion' => 'Lorem ipsum d',
			'fecha_documentacion' => '2017-01-27',
			'vobo_gth' => '',
			'fechavobo_gth' => '2017-01-27',
			'autorizado' => '',
			'user_reg_id' => 1,
			'fechahorareg' => 1485548013,
			'comentarios' => 'Lorem ipsum dolor sit amet'
		),
	);

}
