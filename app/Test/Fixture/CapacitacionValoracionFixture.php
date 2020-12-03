<?php
/**
 * CapacitacionValoracion Fixture
 */
class CapacitacionValoracionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'capacitaciongrupo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'ev_facilitador' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'criterio1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'criterio2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'criterio3' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'criterio4' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'criterio5' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ev_capacitacion' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'comentarios' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'capacitaciongrupo_id' => 1,
			'estado' => 1,
			'ev_facilitador' => 1,
			'criterio1' => 1,
			'criterio2' => 1,
			'criterio3' => 1,
			'criterio4' => 1,
			'criterio5' => 1,
			'ev_capacitacion' => 1,
			'comentarios' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1506612803,
			'fechahora_mod' => 1,
			'user_mod_id' => 1
		),
	);

}
