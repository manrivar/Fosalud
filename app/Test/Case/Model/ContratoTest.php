<?php
App::uses('Contrato', 'Model');

/**
 * Contrato Test Case
 */
class ContratoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contrato',
		'app.funcion',
		'app.personacompensaciones',
		'app.solicitudpersonal',
		'app.cargo',
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
		'app.referencia_personal',
		'app.rotacion',
		'app.situacion',
		'app.motivo',
		'app.personaenlace'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contrato = ClassRegistry::init('Contrato');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contrato);

		parent::tearDown();
	}

}
