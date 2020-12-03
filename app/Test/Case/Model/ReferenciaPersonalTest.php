<?php
App::uses('ReferenciaPersonal', 'Model');

/**
 * ReferenciaPersonal Test Case
 */
class ReferenciaPersonalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.referencia_personal',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.expediente',
		'app.estudio',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReferenciaPersonal = ClassRegistry::init('ReferenciaPersonal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReferenciaPersonal);

		parent::tearDown();
	}

}
