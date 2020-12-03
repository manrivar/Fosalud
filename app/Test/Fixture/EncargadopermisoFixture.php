<?php
/**
 * Encargadopermiso Fixture
 */
class EncargadopermisoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'unsigned' => false),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'estado_id' => 1,
			'fechahora_reg' => '2015-10-26 10:39:17',
			'fechahora_mod' => '2015-10-26 10:39:17'
		),
	);

}
