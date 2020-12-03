<?php
/**
 * BitacoraCobertura Fixture
 */
class BitacoraCoberturaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'expediente_cubrir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_cubrir' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'fechas_cubrir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_cubrir' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'motivo_cubrir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_mod' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'expediente_cubrir' => 'Lorem ipsum d',
			'establecimiento_cubrir' => 1,
			'fechas_cubrir' => 'Lorem ipsum dolor sit amet',
			'horas_cubrir' => 1,
			'motivo_cubrir' => 'Lorem ipsum dolor sit amet',
			'user_id_reg' => 1,
			'fechahora_reg' => 1466629724,
			'user_id_mod' => 1,
			'fechahora_mod' => '2016-06-22 16:08:44'
		),
	);

}
