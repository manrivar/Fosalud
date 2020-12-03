<?php
App::uses('CapacitacionEscuela', 'Model');

/**
 * CapacitacionEscuela Test Case
 */
class CapacitacionEscuelaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.capacitacion_escuela'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CapacitacionEscuela = ClassRegistry::init('CapacitacionEscuela');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CapacitacionEscuela);

		parent::tearDown();
	}

}
