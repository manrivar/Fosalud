<?php
App::uses('HistoricoCargo', 'Model');

/**
 * HistoricoCargo Test Case
 */
class HistoricoCargoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historico_cargo',
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
		'app.incapacidade',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HistoricoCargo = ClassRegistry::init('HistoricoCargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoricoCargo);

		parent::tearDown();
	}

}
