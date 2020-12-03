<?php
/**
 * CoberturaVacacion Fixture
 */
class CoberturaVacacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'caso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id_reg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechahora' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'nombre_reporta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_reporta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'problema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'motivocobertura_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'persona_cubrir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_cubrir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_cubrir_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'establecimiento_cubir' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_cubrir_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'departamento_cubrir' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'turnos_afectados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipogestion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comentario_gestion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'persona_cubre' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'persona_cubre_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cargo_cubre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_cubre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establecimiento_cubre_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'departamento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechar_cobertura' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_pagar' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado_cobertura' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'coberturavacaciones_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'caso' => 'Lorem ip',
			'user_id_reg' => 1,
			'fechahora' => 1491337995,
			'nombre_reporta' => 'Lorem ipsum dolor sit amet',
			'cargo_reporta' => 'Lorem ipsum dolor sit amet',
			'problema' => 'Lorem ipsum dolor sit amet',
			'motivocobertura_id' => 1,
			'persona_cubrir' => 'Lorem ipsum dolor sit amet',
			'cargo_cubrir' => 'Lorem ipsum dolor sit amet',
			'persona_cubrir_id' => 1,
			'establecimiento_cubir' => 'Lorem ipsum dolor sit amet',
			'establecimiento_cubrir_id' => 1,
			'departamento_cubrir' => 1,
			'turnos_afectados' => 'Lorem ipsum dolor sit amet',
			'tipogestion_id' => 1,
			'comentario_gestion' => 1,
			'persona_cubre' => 1,
			'persona_cubre_id' => 1,
			'cargo_cubre' => 'Lorem ipsum dolor sit amet',
			'establecimiento_cubre' => 'Lorem ipsum dolor sit amet',
			'establecimiento_cubre_id' => 'Lorem ipsum dolor sit amet',
			'departamento' => 'Lorem ipsum dolor sit amet',
			'fechar_cobertura' => 'Lorem ipsum dolor sit amet',
			'horas_pagar' => 1,
			'estado_cobertura' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'coberturavacaciones_id' => 1
		),
	);

}
