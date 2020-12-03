<?php
App::uses('ThReferente', 'Model');

/**
 * ThReferente Test Case
 */
class ThReferenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.th_referente',
		'app.persona',
		'app.municipio',
		'app.departamento',
		'app.zonageografica',
		'app.establecimiento',
		'app.tipo_establecimiento',
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
		$this->ThReferente = ClassRegistry::init('ThReferente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ThReferente);

		parent::tearDown();
	}

}
