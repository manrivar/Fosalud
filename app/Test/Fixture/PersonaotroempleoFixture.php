<?php
/**
 * Personaotroempleo Fixture
 */
class PersonaotroempleoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'institucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_laborales' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'desde' => array('type' => 'date', 'null' => false, 'default' => null),
		'hasta' => array('type' => 'date', 'null' => true, 'default' => null),
		'activo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'institucion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'horas_laborales' => 1,
			'desde' => '2016-10-17',
			'hasta' => '2016-10-17',
			'activo' => '',
			'fecha_hora_reg' => 1476721190,
			'user_id_reg' => 1
		),
	);

}
