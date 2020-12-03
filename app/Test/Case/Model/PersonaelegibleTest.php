<?php
App::uses('Personaelegible', 'Model');

/**
 * Personaelegible Test Case
 */
class PersonaelegibleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personaelegible',
		'app.cargoelegible',
		'app.cargo',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.expediente',
		'app.estado',
		'app.factura',
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
		$this->Personaelegible = ClassRegistry::init('Personaelegible');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personaelegible);

		parent::tearDown();
	}

}
