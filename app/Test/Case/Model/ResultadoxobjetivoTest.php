<?php
App::uses('Resultadoxobjetivo', 'Model');

/**
 * Resultadoxobjetivo Test Case
 */
class ResultadoxobjetivoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.resultadoxobjetivo',
		'app.evaluacion_objetivo',
		'app.cargofuncional',
		'app.expediente',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.tipo_establecimiento',
		'app.th_referente',
		'app.enlace_referente',
		'app.estudio',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal',
		'app.estado',
		'app.factura',
		'app.cargo',
		'app.funcionesxcargo',
		'app.historico_cargo',
		'app.incapacidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Resultadoxobjetivo = ClassRegistry::init('Resultadoxobjetivo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resultadoxobjetivo);

		parent::tearDown();
	}

}
