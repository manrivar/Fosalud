<?php
/**
 * MdeportivaCompetidor Fixture
 */
class MdeportivaCompetidorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'edad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aerobicos' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'atletismo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'ajedrez' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'torneo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'anio' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'edad' => 1,
			'sexo' => '',
			'aerobicos' => 1,
			'atletismo' => 1,
			'ajedrez' => 1,
			'torneo' => 1,
			'fechahora_reg' => 1507831947,
			'anio' => 1,
			'user_reg_id' => 1
		),
	);

}
