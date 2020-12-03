<?php
/**
 * Descuentoxomision Fixture
 */
class DescuentoxomisionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'motivo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahoras_descuento' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_horas' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'total_descuento' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'observacion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_mod_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_mod' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'cargo_id' => 1,
			'establecimiento_id' => 1,
			'expediente_id' => 1,
			'motivo' => 'Lorem ipsum dolor sit amet',
			'fechahoras_descuento' => 'Lorem ipsum dolor sit amet',
			'total_horas' => '',
			'total_descuento' => '',
			'observacion' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'user_reg' => 1,
			'fechahora_reg' => 1517344162,
			'user_mod_id' => 1,
			'user_mod' => 1,
			'fechahora_mod' => '2018-01-30 14:29:22'
		),
	);

}
