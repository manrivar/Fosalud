<?php
/**
 * Personaenfermedad Fixture
 */
class PersonaenfermedadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'enfermedad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tiempo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tratamiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'persona_id' => array('column' => 'persona_id', 'unique' => 0)
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
			'enfermedad' => 'Lorem ipsum dolor sit amet',
			'tiempo' => 'Lorem ipsum dolor sit amet',
			'tratamiento' => 'Lorem ipsum dolor sit amet'
		),
	);

}
