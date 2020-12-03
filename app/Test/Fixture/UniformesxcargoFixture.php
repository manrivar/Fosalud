<?php
/**
 * Uniformesxcargo Fixture
 */
class UniformesxcargoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cargofuncional_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'uniform_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'activo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'cargofuncional_id' => 1,
			'uniform_id' => 1,
			'activo' => 1,
			'user_reg_id' => 1,
			'fechahora_reg' => 1538152236
		),
	);

}
