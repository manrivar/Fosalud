<?php
App::uses('Uniformesxestablecimiento', 'Model');

/**
 * Uniformesxestablecimiento Test Case
 */
class UniformesxestablecimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uniformesxestablecimiento',
		'app.cargofuncional',
		'app.evaluacion_objetivo',
		'app.resultadoxobjetivo',
		'app.expediente',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.tipo_establecimiento',
		'app.th_referente',
		'app.enlace_referente',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.estudio',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal',
		'app.estado',
		'app.cargo',
		'app.funcionesxcargo',
		'app.nombre_plaza',
		'app.historico_cargo',
		'app.uniform'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uniformesxestablecimiento = ClassRegistry::init('Uniformesxestablecimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uniformesxestablecimiento);

		parent::tearDown();
	}

}
