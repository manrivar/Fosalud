<?php
/**
 * Grupoestablecimiento Fixture
 */
class GrupoestablecimientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'horario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grupo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'establecimiento_id' => array('column' => 'establecimiento_id', 'unique' => 0)
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
			'establecimiento_id' => 1,
			'horario' => 'Lorem ipsum dolor sit amet',
			'grupo' => 'Lorem ipsum dolor sit amet',
			'estado_id' => 1
		),
	);

}
