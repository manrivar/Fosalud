<?php
/**
 * Bolsacargo Fixture
 */
class BolsacargoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahorareg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'habilitado' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
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
			'cargo_id' => 1,
			'fechahorareg' => 1473182587,
			'habilitado' => 1
		),
	);

}
