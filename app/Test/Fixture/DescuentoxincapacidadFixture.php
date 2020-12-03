<?php
/**
 * Descuentoxincapacidad Fixture
 */
class DescuentoxincapacidadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'incapacidad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'total_dias' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'dias_pendientes' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false, 'comment' => '1:ingresado,2:finalizado'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_mod' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'persona_id' => 1,
			'incapacidad_id' => 1,
			'total_dias' => 1,
			'dias_pendientes' => 1,
			'estado' => 1,
			'fechahora_reg' => 1535388016,
			'user_reg_id' => 1,
			'fechahora_mod' => '2018-08-27 11:40:16',
			'user_mod_id' => 1
		),
	);

}
