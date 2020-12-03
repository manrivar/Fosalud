<?php
App::uses('Solicitudpersonal', 'Model');

/**
 * Solicitudpersonal Test Case
 */
class SolicitudpersonalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitudpersonal',
		'app.cargo',
		'app.dependencia',
		'app.rotacion',
		'app.expediente',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
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
		'app.historico_cargo',
		'app.incapacidade',
		'app.situacion',
		'app.motivo',
		'app.cargoelegible',
		'app.personaelegible'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Solicitudpersonal = ClassRegistry::init('Solicitudpersonal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Solicitudpersonal);

		parent::tearDown();
	}

}
