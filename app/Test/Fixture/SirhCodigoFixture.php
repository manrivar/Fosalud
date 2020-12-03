<?php
/**
 * SirhCodigo Fixture
 */
class SirhCodigoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'concepto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 31, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'codigo' => 'Lo',
			'concepto' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ips'
		),
	);

}
