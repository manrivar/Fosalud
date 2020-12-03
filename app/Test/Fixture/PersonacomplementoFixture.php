<?php
/**
 * Personacomplemento Fixture
 */
class PersonacomplementoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'afianzado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cantidad_fianza' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'anio' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'nombre_banco' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'coordinador' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'consanguinidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fecha_hora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'afianzado' => '',
			'cantidad_fianza' => '',
			'anio' => 1,
			'nombre_banco' => 'Lorem ipsum dolor sit amet',
			'coordinador' => '',
			'consanguinidad' => 'Lorem ipsum dolor sit amet',
			'user_id_reg' => 1,
			'fecha_hora_reg' => 1476475671
		),
	);

}
