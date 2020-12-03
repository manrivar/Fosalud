<?php
/**
 * Compromiso Fixture
 */
class CompromisoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false, 'key' => 'primary'),
		'compromiso' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 380, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'perfiles' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'competencia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'compromiso' => 'Lorem ipsum dolor sit amet',
			'perfiles' => 1,
			'competencia_id' => 1,
			'fechahora_reg' => 1499201685,
			'user_id_reg' => 1
		),
	);

}
