<?php
App::uses('ArchivoMarcacion', 'Model');

/**
 * ArchivoMarcacion Test Case
 */
class ArchivoMarcacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.archivo_marcacion',
		'app.establecimiento',
		'app.departamento',
		'app.zonageografica',
		'app.municipio',
		'app.persona',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.estudio',
		'app.expediente',
		'app.estado',
		'app.cargo',
		'app.funcionesxcargo',
		'app.cargofuncional',
		'app.evaluacion_objetivo',
		'app.resultadoxobjetivo',
		'app.nombre_plaza',
		'app.historico_cargo',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal',
		'app.tipo_establecimiento',
		'app.th_referente',
		'app.enlace_referente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArchivoMarcacion = ClassRegistry::init('ArchivoMarcacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArchivoMarcacion);

		parent::tearDown();
	}

}
