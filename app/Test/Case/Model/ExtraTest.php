<?php
App::uses('Extra', 'Model');

/**
 * Extra Test Case
 */
class ExtraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.extra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Extra = ClassRegistry::init('Extra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Extra);

		parent::tearDown();
	}

}
