<?php
/**
 * CapacitacionPersonal Fixture
 */
class CapacitacionPersonalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'tipo_evento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alcance' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'especialidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre_evento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pais' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'patrocinador' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_invertidas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'costo' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'finalizacion' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'capacitacion_personals_ibfk_1' => array('column' => 'persona_id', 'unique' => 0)
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
			'fecha' => '2016-05-02',
			'tipo_evento' => 'Lorem ipsum dolor sit amet',
			'alcance' => 'Lorem ipsum dolor sit amet',
			'especialidad' => 'Lorem ipsum dolor sit amet',
			'nombre_evento' => 'Lorem ipsum dolor sit amet',
			'pais' => 'Lorem ipsum dolor sit a',
			'patrocinador' => 'Lorem ipsum dolor sit amet',
			'horas_invertidas' => 1,
			'costo' => 1,
			'finalizacion' => '2016-05-02'
		),
	);

}
