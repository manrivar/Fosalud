<?php
/**
 * Capacitacion Fixture
 */
class CapacitacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'objetivo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => false, 'default' => null),
		'jornada' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_horas' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'costo' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'porcentaje_insaforp' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'apoyo_insaforp' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'porcentaje_empresarial' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'cosoto_beca' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'escuela' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'diploma' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'codigo' => 'Lorem ip',
			'tema' => 'Lorem ipsum dolor sit amet',
			'objetivo' => 'Lorem ipsum dolor sit amet',
			'fecha_inicio' => '2017-09-21',
			'fecha_fin' => '2017-09-21',
			'jornada' => 'Lorem ipsum dolor sit amet',
			'total_horas' => '',
			'costo' => '',
			'porcentaje_insaforp' => '',
			'apoyo_insaforp' => '',
			'porcentaje_empresarial' => '',
			'cosoto_beca' => '',
			'escuela' => 'Lorem ipsum dolor sit amet',
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'diploma' => 'Lorem ipsum dolor sit amet',
			'fechahora_reg' => 1506015870,
			'user_reg_id' => 1
		),
	);

}
