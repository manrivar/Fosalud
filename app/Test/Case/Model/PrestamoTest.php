<?php
App::uses('Prestamo', 'Model');

/**
 * Prestamo Test Case
 */
class PrestamoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.prestamo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Prestamo = ClassRegistry::init('Prestamo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prestamo);

		parent::tearDown();
	}

}
