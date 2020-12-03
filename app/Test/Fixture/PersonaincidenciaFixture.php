<?php
/**
 * Personaincidencia Fixture
 */
class PersonaincidenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'dui' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'via' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'asunto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_hora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
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
			'dui' => 'Lorem ip',
			'fecha' => '2016-10-17',
			'via' => 'Lorem ipsum dolor sit amet',
			'asunto' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'fecha_hora_reg' => 1476734715,
			'user_id_reg' => 1
		),
	);

}
