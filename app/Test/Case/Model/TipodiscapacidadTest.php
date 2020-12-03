<?php
App::uses('Tipodiscapacidad', 'Model');

/**
 * Tipodiscapacidad Test Case
 */
class TipodiscapacidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipodiscapacidad',
		'app.personadiscapacidad',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.expediente',
		'app.estado',
		'app.factura',
		'app.historico_cargo',
		'app.cargo',
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
		$this->Tipodiscapacidad = ClassRegistry::init('Tipodiscapacidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipodiscapacidad);

		parent::tearDown();
	}

}
