<?php
/**
 * BitacoraCoberturasFecha Fixture
 */
class BitacoraCoberturasFechaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'bitacora_cobertura_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'bitacora_cobertura_id' => 1,
			'fecha' => '2016-06-23',
			'fechahora_reg' => 1466714475
		),
	);

}
