<?php
/**
 * Solicitudpersonal Fixture
 */
class SolicitudpersonalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false, 'key' => 'primary'),
		'no_solicitud' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'dependencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'horario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rotacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'expediente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'comment' => 'persona a ser cubierta'),
		'situacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'comment' => 'tipo de permiso: temporal o permanente'),
		'motivo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'comment' => 'motivo de la cobertura'),
		'detalle_temporal' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_inicio_temporal' => array('type' => 'date', 'null' => true, 'default' => null),
		'fecha_fin_temporal' => array('type' => 'date', 'null' => true, 'default' => null),
		'ultimo_dia_laboral_permanente' => array('type' => 'date', 'null' => true, 'default' => null),
		'vacante_legalizada_permanente' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false),
		'fechahora_reg' => array('type' => 'timestamp', 'null' => false, 'default' => null),
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
			'no_solicitud' => 'Lorem ipsum dolor sit amet',
			'cargo_id' => 1,
			'dependencia_id' => 1,
			'horario' => 'Lorem ipsum dolor sit amet',
			'rotacion_id' => 1,
			'expediente_id' => 1,
			'situacion_id' => 1,
			'motivo_id' => 1,
			'detalle_temporal' => 'Lorem ipsum dolor sit amet',
			'fecha_inicio_temporal' => '2016-08-09',
			'fecha_fin_temporal' => '2016-08-09',
			'ultimo_dia_laboral_permanente' => '2016-08-09',
			'vacante_legalizada_permanente' => 1,
			'user_id_reg' => 1,
			'fechahora_reg' => 1470764949
		),
	);

}
