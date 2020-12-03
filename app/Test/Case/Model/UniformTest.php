<?php
App::uses('Uniform', 'Model');

/**
 * Uniform Test Case
 */
class UniformTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uniform'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uniform = ClassRegistry::init('Uniform');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uniform);

		parent::tearDown();
	}

}
