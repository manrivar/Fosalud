<?php
/**
 * Departamento Fixture
 */
class DepartamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IdPais' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'zonageografica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FechaHoraReg' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'FechaHoraMod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'IdUsuarioReg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'IdUsuarioMod' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'zonageografica_id' => array('column' => 'zonageografica_id', 'unique' => 0)
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
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'IdPais' => 1,
			'zonageografica_id' => 1,
			'FechaHoraReg' => '2016-04-25 10:56:24',
			'FechaHoraMod' => '2016-04-25 10:56:24',
			'IdUsuarioReg' => 1,
			'IdUsuarioMod' => 1
		),
	);

}
