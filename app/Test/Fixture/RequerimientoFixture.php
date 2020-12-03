<?php
/**
 * Requerimiento Fixture
 */
class RequerimientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'notificacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'notificacion a usuario'),
		'medio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'medio en que entrega informacion'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
		'foto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foto_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 800, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'notificacion_id' => 1,
			'medio_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'persona_id' => 1,
			'fechahora_reg' => 1583770284,
			'estado' => 1,
			'foto' => 'Lorem ipsum dolor sit amet',
			'foto_dir' => 'Lorem ipsum dolor sit amet'
		),
	);

}
