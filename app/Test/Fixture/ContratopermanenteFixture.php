<?php
/**
 * Contratopermanente Fixture
 */
class ContratopermanenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => false, 'default' => null),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cifrado_presupestario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_firma' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'numero' => 'Lorem ipsum d',
			'persona_id' => 1,
			'cargo_id' => 1,
			'establecimiento_id' => 1,
			'fecha_inicio' => '2017-03-02',
			'fecha_fin' => '2017-03-02',
			'expediente_id' => 1,
			'cifrado_presupestario' => 'Lorem ipsum dolor sit amet',
			'fecha_firma' => '2017-03-02',
			'fechahora_reg' => 1488478699,
			'user_reg_id' => 1
		),
	);

}
