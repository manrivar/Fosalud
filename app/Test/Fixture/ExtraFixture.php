<?php
/**
 * Extra Fixture
 */
class ExtraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'motivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechas' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horasextras' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'totalpago' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'periodo' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahora_reg' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
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
			'id' => '',
			'nit' => 'Lorem ipsum dolor ',
			'motivo' => 'Lorem ipsum dolor sit amet',
			'fechas' => 'Lorem ipsum dolor sit amet',
			'horasextras' => 1,
			'totalpago' => '',
			'periodo' => '2016-04-28',
			'fechahora_reg' => '2016-04-28 12:26:17',
			'user_id_reg' => 1
		),
	);

}
