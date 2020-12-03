<?php
/**
 * Estudio Fixture
 */
class EstudioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'municipio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'nivel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pais' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'institucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'area_formacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'especialidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'titulo_obtenido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'anio_inicio' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'anio_fin' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'municipio_id', 'unique' => 1),
			'estudios_ibfk_1' => array('column' => 'persona_id', 'unique' => 0)
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
			'municipio_id' => 1,
			'persona_id' => 1,
			'nivel' => 'Lorem ipsum d',
			'pais' => 'Lorem ipsum d',
			'institucion' => 'Lorem ipsum dolor sit a',
			'area_formacion' => 'Lorem ipsum dolor sit amet',
			'especialidad' => 'Lorem ipsum dolor sit amet',
			'titulo_obtenido' => 'Lorem ipsum dolor sit amet',
			'anio_inicio' => 1,
			'anio_fin' => 1
		),
	);

}
