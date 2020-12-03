<?php
App::uses('Vialidad', 'Model');

/**
 * Vialidad Test Case
 */
class VialidadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vialidad',
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
		'app.cargo',
		'app.funcionesxcargo',
		'app.cargofuncional',
		'app.evaluacion_objetivo',
		'app.resultadoxobjetivo',
		'app.nombre_plaza',
		'app.historico_cargo',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.estudio',
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
		$this->Vialidad = ClassRegistry::init('Vialidad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vialidad);

		parent::tearDown();
	}

}
