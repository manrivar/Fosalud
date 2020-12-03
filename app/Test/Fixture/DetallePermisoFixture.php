<?php
/**
 * DetallePermiso Fixture
 */
class DetallePermisoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tipopermiso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'tipopermiso_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'user_id_reg' => 1,
			'fechahora_reg_reg' => 1485546079
		),
	);

}
