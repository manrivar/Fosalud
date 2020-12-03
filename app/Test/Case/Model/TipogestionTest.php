<?php
App::uses('Tipogestion', 'Model');

/**
 * Tipogestion Test Case
 */
class TipogestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipogestion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipogestion = ClassRegistry::init('Tipogestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipogestion);

		parent::tearDown();
	}

}
