<?php
/**
 * CapacitacionGrupo Fixture
 */
class CapacitacionGrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'capacitacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'persona_id' => 1,
			'capacitacion_id' => 1,
			'fechahora_reg' => 1506098442,
			'user_reg_id' => 1
		),
	);

}
