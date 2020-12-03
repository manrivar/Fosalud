<?php
/**
 * SolicitudConstancia Fixture
 */
class SolicitudConstanciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correlativo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_constancia' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechora_mod' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
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
			'fechahora_reg' => 1493236845,
			'user_reg_id' => 1,
			'correlativo' => 'Lorem ip',
			'persona_id' => 1,
			'nit' => 'Lorem ipsum dolor ',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'tipo_constancia' => 1,
			'estado' => 'Lorem ipsum dolor sit amet',
			'fechora_mod' => 1493236845,
			'user_mod_id' => 1
		),
	);

}
