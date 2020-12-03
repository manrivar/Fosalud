<?php
App::uses('ExperienciaLaboral', 'Model');

/**
 * ExperienciaLaboral Test Case
 */
class ExperienciaLaboralTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.experiencia_laboral',
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
		$this->ExperienciaLaboral = ClassRegistry::init('ExperienciaLaboral');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExperienciaLaboral);

		parent::tearDown();
	}

}
