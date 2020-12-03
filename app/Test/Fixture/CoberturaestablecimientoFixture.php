<?php
/**
 * Coberturaestablecimiento Fixture
 */
class CoberturaestablecimientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'nit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'nit' => array('column' => 'nit', 'unique' => 0)
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
			'nit' => 'Lorem ipsum dolor ',
			'establecimiento_id' => 1,
			'fechahora_reg' => 1464361177,
			'fechahora_mod' => '2016-05-27 09:59:37'
		),
	);

}
