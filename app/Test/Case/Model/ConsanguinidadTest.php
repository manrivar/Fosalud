<?php
App::uses('Consanguinidad', 'Model');

/**
 * Consanguinidad Test Case
 */
class ConsanguinidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consanguinidad',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.tipo_establecimiento',
		'app.th_referente',
		'app.enlace_referente',
		'app.expediente',
		'app.estado',
		'app.factura',
		'app.historico_cargo',
		'app.cargo',
		'app.funcionesxcargo',
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
		$this->Consanguinidad = ClassRegistry::init('Consanguinidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consanguinidad);

		parent::tearDown();
	}

}
