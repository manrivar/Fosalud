<?php
App::uses('Grupoestablecimiento', 'Model');

/**
 * Grupoestablecimiento Test Case
 */
class GrupoestablecimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grupoestablecimiento',
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
		$this->Grupoestablecimiento = ClassRegistry::init('Grupoestablecimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupoestablecimiento);

		parent::tearDown();
	}

}
