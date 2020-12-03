<?php
/**
 * Amonestacion Fixture
 */
class AmonestacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tiposancion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'gravedad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'clasificacionfalta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_imposicion' => array('type' => 'date', 'null' => false, 'default' => null),
		'dias_suspencion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'referencia_normativa' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_mod' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_mod_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'persona_id' => 1,
			'expediente_id' => 1,
			'cargo' => 'Lorem ipsum dolor sit amet',
			'establecimiento' => 'Lorem ipsum dolor sit amet',
			'tiposancion_id' => 1,
			'gravedad_id' => 1,
			'clasificacionfalta_id' => 1,
			'fecha_imposicion' => '2018-06-07',
			'dias_suspencion' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'referencia_normativa' => 'Lorem ipsum dolor sit amet',
			'user_reg' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'fechahora_reg' => 1528387624,
			'user_mod' => 'Lorem ipsum dolor sit amet',
			'user_mod_id' => 1,
			'fechahora_mod' => '2018-06-07 11:07:04'
		),
	);

}
