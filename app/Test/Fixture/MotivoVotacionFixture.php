<?php
/**
 * MotivoVotacion Fixture
 */
class MotivoVotacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
		'fechahora_mod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_mod_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'user_reg_id' => 1,
			'fechahora_reg' => 1530122545,
			'estado' => 1,
			'fechahora_mod' => 1,
			'user_mod_id' => 1
		),
	);

}
