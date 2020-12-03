<?php
/**
 * TardiaGeneral Fixture
 */
class TardiaGeneralFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mes' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'anio' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comentario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'turnos_mes' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_mod_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'mes' => 1,
			'anio' => 1,
			'comentario' => 'Lorem ipsum dolor sit amet',
			'turnos_mes' => 1,
			'user_reg_id' => 1,
			'fechahora_reg' => 1535664347,
			'user_mod_id' => 1,
			'fechahora_mod' => '2018-08-30 16:25:47',
			'establecimiento_id' => 1
		),
	);

}
