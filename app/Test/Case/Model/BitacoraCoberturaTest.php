<?php
App::uses('BitacoraCobertura', 'Model');

/**
 * BitacoraCobertura Test Case
 */
class BitacoraCoberturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bitacora_cobertura',
		'app.establecimiento',
		'app.departamento',
		'app.zonageografica',
		'app.municipio',
		'app.estudio',
		'app.persona',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.expediente',
		'app.estado',
		'app.factura',
		'app.historico_cargo',
		'app.incapacidade',
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
		$this->BitacoraCobertura = ClassRegistry::init('BitacoraCobertura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BitacoraCobertura);

		parent::tearDown();
	}

}
