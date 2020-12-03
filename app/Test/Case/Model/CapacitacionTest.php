<?php
App::uses('Capacitacion', 'Model');

/**
 * Capacitacion Test Case
 */
class CapacitacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.capacitacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Capacitacion = ClassRegistry::init('Capacitacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Capacitacion);

		parent::tearDown();
	}

}
