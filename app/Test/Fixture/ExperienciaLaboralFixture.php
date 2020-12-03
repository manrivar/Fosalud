<?php
/**
 * ExperienciaLaboral Fixture
 */
class ExperienciaLaboralFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'empresa' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'desde' => array('type' => 'date', 'null' => false, 'default' => null),
		'hasta' => array('type' => 'date', 'null' => false, 'default' => null),
		'causa_retiro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario_inicial' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'salario_final' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'sector' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'experiencia_laborals_ibfk_1' => array('column' => 'persona_id', 'unique' => 0)
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
			'empresa' => 'Lorem ipsum dolor sit amet',
			'cargo' => 1,
			'desde' => '2016-05-02',
			'hasta' => '2016-05-02',
			'causa_retiro' => 'Lorem ipsum dolor sit amet',
			'salario_inicial' => 1,
			'salario_final' => 1,
			'sector' => 'Lorem ip'
		),
	);

}
