<?php
App::uses('Votacion', 'Model');

/**
 * Votacion Test Case
 */
class VotacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.votacion',
		'app.candidato',
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
		'app.referencia_personal',
		'app.user',
		'app.group',
		'app.acceso',
		'app.diasgocesalario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Votacion = ClassRegistry::init('Votacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Votacion);

		parent::tearDown();
	}

}
