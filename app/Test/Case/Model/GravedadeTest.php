<?php
App::uses('Gravedade', 'Model');

/**
 * Gravedade Test Case
 */
class GravedadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gravedade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gravedade = ClassRegistry::init('Gravedade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gravedade);

		parent::tearDown();
	}

}
