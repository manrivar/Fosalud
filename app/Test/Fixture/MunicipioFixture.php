<?php
/**
 * Municipio Fixture
 */
class MunicipioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'departamento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'index'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TN_IdPais' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'FechaHoraReg' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'FechaHoraMod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'IdUsuarioReg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'IdUsuarioMod' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'departamento_id' => array('column' => 'departamento_id', 'unique' => 0)
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
			'departamento_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'TN_IdPais' => 1,
			'FechaHoraReg' => '2016-04-11 13:14:18',
			'FechaHoraMod' => '2016-04-11 13:14:18',
			'IdUsuarioReg' => 1,
			'IdUsuarioMod' => 1
		),
	);

}
