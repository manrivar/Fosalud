<?php
/**
 * ArchivoPlanilla Fixture
 */
class ArchivoPlanillaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'archivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'archivo_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'anio' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mes' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'eliminado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'unsigned' => false),
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
			'user_reg_id' => 1,
			'fechahora_reg' => 1547754196,
			'archivo' => 'Lorem ipsum dolor sit amet',
			'archivo_dir' => 'Lorem ipsum dolor sit amet',
			'anio' => 1,
			'mes' => 1,
			'eliminado' => 1
		),
	);

}
