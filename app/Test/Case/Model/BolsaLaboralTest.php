<?php
App::uses('BolsaLaboral', 'Model');

/**
 * BolsaLaboral Test Case
 */
class BolsaLaboralTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsa_laboral',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.establecimiento',
		'app.expediente',
		'app.estudio',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaLaboral = ClassRegistry::init('BolsaLaboral');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaLaboral);

		parent::tearDown();
	}

}
