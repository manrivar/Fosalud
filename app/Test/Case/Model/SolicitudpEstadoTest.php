<?php
App::uses('SolicitudpEstado', 'Model');

/**
 * SolicitudpEstado Test Case
 */
class SolicitudpEstadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitudp_estado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudpEstado = ClassRegistry::init('SolicitudpEstado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudpEstado);

		parent::tearDown();
	}

}
