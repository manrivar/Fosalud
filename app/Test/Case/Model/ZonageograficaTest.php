<?php
App::uses('Zonageografica', 'Model');

/**
 * Zonageografica Test Case
 */
class ZonageograficaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zonageografica',
		'app.departamento',
		'app.municipio',
		'app.establecimiento',
		'app.expediente',
		'app.estudio',
		'app.persona',
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
		$this->Zonageografica = ClassRegistry::init('Zonageografica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zonageografica);

		parent::tearDown();
	}

}
