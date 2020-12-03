<?php
App::uses('CambioTurno', 'Model');

/**
 * CambioTurno Test Case
 */
class CambioTurnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cambio_turno'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CambioTurno = ClassRegistry::init('CambioTurno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CambioTurno);

		parent::tearDown();
	}

}
