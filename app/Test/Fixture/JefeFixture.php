<?php
/**
 * Jefe Fixture
 */
class JefeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jefes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'user_id' => 1,
			'estado_id' => 1,
			'fechahora_reg' => '2015-10-23 12:48:48',
			'fechahora_mod' => '2015-10-23 12:48:48'
		),
	);

}
