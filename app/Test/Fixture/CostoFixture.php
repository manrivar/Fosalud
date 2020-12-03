<?php
/**
 * Costo Fixture
 */
class CostoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'adicional' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'afp' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'isss' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'ipsfa' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'insaforp' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'inpep' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'periodo' => array('type' => 'date', 'null' => false, 'default' => null),
		'eliminado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'nr' => 'Lorem ipsum dolo',
			'salario' => '',
			'adicional' => '',
			'afp' => '',
			'isss' => '',
			'ipsfa' => '',
			'insaforp' => '',
			'inpep' => '',
			'periodo' => '2019-08-19',
			'eliminado' => 1,
			'fechahora_reg' => 1566236618,
			'user_reg_id' => 1
		),
	);

}
