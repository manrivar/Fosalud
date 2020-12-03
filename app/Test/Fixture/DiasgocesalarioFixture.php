<?php
/**
 * Diasgocesalario Fixture
 */
class DiasgocesalarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'diasgoce' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
		'diasgoceusados' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'diassingoce' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'diassingoceusados' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'unsigned' => false),
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
			'id' => '',
			'user_id' => 1,
			'diasgoce' => 1,
			'diasgoceusados' => 1,
			'diassingoce' => 1,
			'diassingoceusados' => 1,
			'fechahora_reg' => '2015-11-10 13:48:27',
			'fechahora_mod' => '2015-11-10 13:48:27'
		),
	);

}
