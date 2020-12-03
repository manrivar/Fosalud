<?php
/**
 * Tratamiento Fixture
 */
class TratamientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'historiaclinica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tratamiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'recomendaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'historiaclinica_id' => 1,
			'tratamiento' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'recomendaciones' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'fechahora_reg' => 1589907359
		),
	);

}
