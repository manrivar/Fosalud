<?php
App::uses('DetallePermiso', 'Model');

/**
 * DetallePermiso Test Case
 */
class DetallePermisoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detalle_permiso',
		'app.tipopermiso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetallePermiso = ClassRegistry::init('DetallePermiso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetallePermiso);

		parent::tearDown();
	}

}
