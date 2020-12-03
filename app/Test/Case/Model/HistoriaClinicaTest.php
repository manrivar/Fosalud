<?php
App::uses('HistoriaClinica', 'Model');

/**
 * HistoriaClinica Test Case
 */
class HistoriaClinicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->HistoriaClinica = ClassRegistry::init('HistoriaClinica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoriaClinica);

		parent::tearDown();
	}

}
