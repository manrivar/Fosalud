<?php
App::uses('Emergencium', 'Model');

/**
 * Emergencium Test Case
 */
class EmergenciumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Emergencium = ClassRegistry::init('Emergencium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Emergencium);

		parent::tearDown();
	}

}
