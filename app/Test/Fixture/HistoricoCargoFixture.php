<?php
/**
 * HistoricoCargo Fixture
 */
class HistoricoCargoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'historico_cargos_ibfk_1' => array('column' => 'expediente_id', 'unique' => 0),
			'cargo_id' => array('column' => 'cargo_id', 'unique' => 0)
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
			'expediente_id' => 1,
			'cargo_id' => 1,
			'fecha_inicio' => '2016-08-23',
			'fecha_fin' => '2016-08-23'
		),
	);

}
