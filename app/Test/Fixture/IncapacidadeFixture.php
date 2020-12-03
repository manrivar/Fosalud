<?php
/**
 * Incapacidade Fixture
 */
class IncapacidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha_digitacion' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'n_acuerdo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_acuerdo' => array('type' => 'date', 'null' => false, 'default' => null),
		'riesgo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_incapacidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mes_inicio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_fin' => array('type' => 'date', 'null' => false, 'default' => null),
		'total_dias' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'costo_isss' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'total_horas' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'costo_fosalud' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'diagnostico' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'diasnostico_generico' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subsidio' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'observacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'destino_acuerdo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'color_incapacidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'emitida_en' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'medico_emisor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'legalizada' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'expediente_id' => 1,
			'fecha_digitacion' => 1466618892,
			'n_acuerdo' => 'Lorem ipsum dolor sit amet',
			'fecha_acuerdo' => '2016-06-22',
			'riesgo' => 'Lorem ipsum dolor sit amet',
			'tipo_incapacidad' => 'Lorem ipsum dolor sit amet',
			'mes_inicio' => 'Lorem ipsum dolor sit a',
			'fecha_inicio' => '2016-06-22',
			'fecha_fin' => '2016-06-22',
			'total_dias' => 1,
			'costo_isss' => 1,
			'total_horas' => 1,
			'costo_fosalud' => 1,
			'diagnostico' => 'Lorem ipsum dolor sit amet',
			'diasnostico_generico' => 'Lorem ipsum dolor sit amet',
			'subsidio' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet',
			'destino_acuerdo' => 'Lorem ipsum dolor sit amet',
			'color_incapacidad' => 'Lorem ipsum dolor sit a',
			'emitida_en' => 'Lorem ipsum dolor sit amet',
			'medico_emisor' => 'Lorem ipsum dolor sit amet',
			'legalizada' => 'L'
		),
	);

}
