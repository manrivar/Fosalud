<?php
App::uses('ReferenciaFamiliar', 'Model');

/**
 * ReferenciaFamiliar Test Case
 */
class ReferenciaFamiliarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.referencia_familiar',
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
		'app.referencia_personal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReferenciaFamiliar = ClassRegistry::init('ReferenciaFamiliar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReferenciaFamiliar);

		parent::tearDown();
	}

}
