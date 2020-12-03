<?php
/**
 * Tardia Fixture
 */
class TardiaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimeinto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_tardia' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'minutos' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'descuento' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'comentarios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_mod_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reporte' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'user_reporte' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'expediente_id' => 1,
			'establecimeinto_id' => 1,
			'cargo_id' => 1,
			'fecha_tardia' => 1534175905,
			'minutos' => 1,
			'descuento' => '',
			'comentarios' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'fechahora_reg' => 1534175905,
			'user_mod_id' => 1,
			'fechahora_mod' => 1,
			'reporte' => 1,
			'user_reporte' => 1
		),
	);

}
