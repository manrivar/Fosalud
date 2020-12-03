<?php
/**
 * TurnoComplementario Fixture
 */
class TurnoComplementarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'salario' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'horas_turno' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'motivo' => array('type' => 'string', 'null' => false, 'default' => 'Turno Complementario', 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_pagar' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'total_pagar' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_reg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_mod_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_mod' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'reporte' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'fecha_reporte' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'genera_reporte' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'documentado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'nombreplaza_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'salario' => '',
			'expediente_id' => 1,
			'horas_turno' => 1,
			'motivo' => 'Lorem ipsum dolor sit amet',
			'mes' => 'Lorem ipsum d',
			'horas_pagar' => '',
			'total_pagar' => '',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'user_reg' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1521645885,
			'user_mod_id' => 1,
			'user_mod' => 'Lorem ipsum dolor sit amet',
			'fechahora_mod' => '2018-03-21 10:24:45',
			'reporte' => 1,
			'fecha_reporte' => '2018-03-21 10:24:45',
			'genera_reporte' => 1,
			'documentado' => 1,
			'nombreplaza_id' => 1,
			'establecimiento_id' => 1
		),
	);

}
