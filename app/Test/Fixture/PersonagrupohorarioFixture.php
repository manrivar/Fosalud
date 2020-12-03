<?php
/**
 * Personagrupohorario Fixture
 */
class PersonagrupohorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'nit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grupohorario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechainicio' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'fechafin' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'nit' => 'Lorem ipsum dolor ',
			'grupohorario_id' => 1,
			'fechainicio' => 1464361787,
			'fechafin' => '2016-05-27 10:09:47'
		),
	);

}
