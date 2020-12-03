<?php
/**
 * Expediente Fixture
 */
class ExpedienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'horario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grupo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'establecimiento_id' => array('column' => 'establecimiento_id', 'unique' => 0),
			'expedientes_ibfk_1' => array('column' => 'persona_id', 'unique' => 0)
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
			'numero' => 'Lorem ip',
			'persona_id' => 1,
			'establecimiento_id' => 1,
			'horario' => 'Lorem ipsum dolor sit amet',
			'grupo' => 'Lorem ipsum dolor sit amet',
			'estado_id' => 1
		),
	);

}
