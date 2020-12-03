<?php
App::uses('Cargoelegible', 'Model');

/**
 * Cargoelegible Test Case
 */
class CargoelegibleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cargoelegible',
		'app.cargo',
		'app.solicitudpersonal',
		'app.personaelegible'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cargoelegible = ClassRegistry::init('Cargoelegible');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cargoelegible);

		parent::tearDown();
	}

}
