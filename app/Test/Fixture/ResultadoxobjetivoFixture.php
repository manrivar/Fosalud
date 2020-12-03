<?php
/**
 * Resultadoxobjetivo Fixture
 */
class ResultadoxobjetivoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'evaluacionobjetivo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'resultado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'medio_verificacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'meta_acordada' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'evaluacionobjetivo_id' => 1,
			'resultado' => 'Lorem ipsum dolor sit amet',
			'medio_verificacion' => 'Lorem ipsum dolor sit amet',
			'meta_acordada' => 1,
			'fechahora_reg' => 1500667403,
			'user_id_reg' => 1
		),
	);

}
