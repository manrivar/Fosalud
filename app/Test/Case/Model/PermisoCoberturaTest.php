<?php
App::uses('PermisoCobertura', 'Model');

/**
 * PermisoCobertura Test Case
 */
class PermisoCoberturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permiso_cobertura',
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
		'app.cargo',
		'app.funcionesxcargo',
		'app.historico_cargo',
		'app.incapacidade',
		'app.estudio',
		'app.capacitacion_personal',
		'app.destreza',
		'app.emergencia',
		'app.experiencia_laboral',
		'app.idioma',
		'app.referencia_familiar',
		'app.referencia_personal',
		'app.permisopersonal',
		'app.tipopermiso',
		'app.detalle_permiso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PermisoCobertura = ClassRegistry::init('PermisoCobertura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PermisoCobertura);

		parent::tearDown();
	}

}
