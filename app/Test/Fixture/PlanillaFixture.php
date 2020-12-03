<?php
/**
 * Planilla Fixture
 */
class PlanillaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'liquid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empleado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50, 'unsigned' => false),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'importe' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'n_referencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'eliminado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'periodo' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'liquid' => 'Lorem ipsum dolor ',
			'nr' => 'Lorem ipsum dolor sit a',
			'empleado' => 'Lorem ipsum dolor sit amet',
			'codigo' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'importe' => '',
			'n_referencia' => 'Lorem ipsum dolor sit amet',
			'eliminado' => 1,
			'fechahora_reg' => 1547748950,
			'periodo' => '2019-01-17',
			'user_reg_id' => 1
		),
	);

}
