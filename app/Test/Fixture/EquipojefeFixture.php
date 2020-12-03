<?php
/**
 * Equipojefe Fixture
 */
class EquipojefeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'equipojefes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'jefe_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'index'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'persona_id', 'unique' => 0)
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
			'jefe_id' => 1,
			'persona_id' => 1,
			'estado_id' => 1,
			'fechahora_reg' => '2017-07-04 16:26:44',
			'fechahora_mod' => '2017-07-04 16:26:44'
		),
	);

}
