<?php
/**
 * CatalogoPuesto Fixture
 */
class CatalogoPuestoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false, 'key' => 'primary'),
		'depuesto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 65, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 17, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idprogpre' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 16, 'unsigned' => false),
		'Línea' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'formapago' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'partida' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'subpart' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'estadopla' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idservicio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salarioesc' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'Codigo Programa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Codigo de Actividad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'anio' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'eliminado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'depuesto' => 'Lorem ipsum dolor sit amet',
			'nr' => 'Lorem ipsum dol',
			'idprogpre' => '',
			'Línea' => 1,
			'formapago' => 'Lorem ipsum dolor sit ame',
			'partida' => 1,
			'subpart' => 1,
			'estadopla' => 'Lo',
			'idservicio' => 'Lore',
			'salarioesc' => '',
			'Codigo Programa' => 'Lorem ipsum dolor sit ame',
			'Codigo de Actividad' => 'L',
			'anio' => 1,
			'eliminado' => 1
		),
	);

}
