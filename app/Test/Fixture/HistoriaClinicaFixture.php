<?php
/**
 * HistoriaClinica Fixture
 */
class HistoriaClinicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_reg_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_atiende_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'id de usuario medico que atiende la consulta'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => 'Ingresado', 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'empleado_id' => 1,
			'fechahora_reg' => 1,
			'user_reg_id' => 1,
			'user_atiende_id' => 1,
			'estado' => 'Lorem ipsum dolor sit a'
		),
	);

}
