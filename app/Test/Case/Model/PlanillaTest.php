<?php
App::uses('Planilla', 'Model');

/**
 * Planilla Test Case
 */
class PlanillaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.planilla'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Planilla = ClassRegistry::init('Planilla');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planilla);

		parent::tearDown();
	}

}
