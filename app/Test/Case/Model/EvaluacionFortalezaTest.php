<?php
App::uses('EvaluacionFortaleza', 'Model');

/**
 * EvaluacionFortaleza Test Case
 */
class EvaluacionFortalezaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluacion_fortaleza',
		'app.evaluaciongeneral',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.tipo_establecimiento',
		'app.th_referente',
		'app.enlace_referente',
		'app.expediente',
		'app.estado',
		'app.factura',
		'app.cargo',
		'app.funcionesxcargo',
		'app.historico_cargo',
		'app.incapacidade',
		'app.estudio',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EvaluacionFortaleza = ClassRegistry::init('EvaluacionFortaleza');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EvaluacionFortaleza);

		parent::tearDown();
	}

}
