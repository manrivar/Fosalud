<?php
/**
 * Accionpersonal Fixture
 */
class AccionpersonalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'accionreportar_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargoactual_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimientoactual_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'salario_actual' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'comentarios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargopropuesto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimientopropuesto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'salario' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'beneficios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'numero' => 'Lorem ipsum d',
			'persona_id' => 1,
			'accionreportar_id' => 1,
			'cargoactual_id' => 1,
			'establecimientoactual_id' => 1,
			'salario_actual' => 1,
			'comentarios' => 'Lorem ipsum dolor sit amet',
			'cargopropuesto_id' => 1,
			'establecimientopropuesto_id' => 1,
			'salario' => 1,
			'beneficios' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1476734997
		),
	);

}
