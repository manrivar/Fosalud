<?php
App::uses('SignosVital', 'Model');

/**
 * SignosVital Test Case
 */
class SignosVitalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.signos_vital',
		'app.historia_clinica',
		'app.empleado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SignosVital = ClassRegistry::init('SignosVital');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SignosVital);

		parent::tearDown();
	}

}
