<?php
/**
 * Prestamo Fixture
 */
class PrestamoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'referencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'institucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cuota' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
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
			'referencia' => 'Lorem ipsum dolor sit amet',
			'institucion' => 'Lorem ipsum dolor sit amet',
			'cuota' => '',
			'periodo' => '2016-04-29',
			'fechahora_reg' => '2016-04-29 10:10:49',
			'user_id_reg' => 1
		),
	);

}
