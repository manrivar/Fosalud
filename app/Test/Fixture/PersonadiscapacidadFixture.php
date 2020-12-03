<?php
/**
 * Personadiscapacidad Fixture
 */
class PersonadiscapacidadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'tipodiscapacidad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_Reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'persona_id' => array('column' => 'persona_id', 'unique' => 0)
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
			'tipodiscapacidad_id' => 1,
			'fechahora_Reg' => 1476380619,
			'user_id_reg' => 1
		),
	);

}
