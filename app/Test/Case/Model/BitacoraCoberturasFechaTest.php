<?php
App::uses('BitacoraCoberturasFecha', 'Model');

/**
 * BitacoraCoberturasFecha Test Case
 */
class BitacoraCoberturasFechaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bitacora_coberturas_fecha',
		'app.bitacora_cobertura',
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
		'app.referencia_personal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BitacoraCoberturasFecha = ClassRegistry::init('BitacoraCoberturasFecha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BitacoraCoberturasFecha);

		parent::tearDown();
	}

}
