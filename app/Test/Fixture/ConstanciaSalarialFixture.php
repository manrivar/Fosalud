<?php
/**
 * ConstanciaSalarial Fixture
 */
class ConstanciaSalarialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'numero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'solicitudconstancia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechai_letras' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaf_letras' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario_letras' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'afp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cuota_afp' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'cuota_isss' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'renta' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'persona_id' => 1,
			'numero' => 'Lorem ipsum dolor ',
			'solicitudconstancia_id' => 1,
			'fechai_letras' => 'Lorem ipsum dolor sit amet',
			'fechaf_letras' => 'Lorem ipsum dolor sit amet',
			'salario_letras' => 'Lorem ipsum dolor sit amet',
			'salario' => '',
			'afp' => 'Lorem ipsum dolor sit amet',
			'cuota_afp' => '',
			'cuota_isss' => '',
			'renta' => '',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'establecimiento' => 'Lorem ipsum dolor sit amet'
		),
	);

}
