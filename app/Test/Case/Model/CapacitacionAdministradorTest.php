<?php
App::uses('CapacitacionAdministrador', 'Model');

/**
 * CapacitacionAdministrador Test Case
 */
class CapacitacionAdministradorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.capacitacion_administrador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CapacitacionAdministrador = ClassRegistry::init('CapacitacionAdministrador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CapacitacionAdministrador);

		parent::tearDown();
	}

}
