<?php
App::uses('IsssOficio', 'Model');

/**
 * IsssOficio Test Case
 */
class IsssOficioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.isss_oficio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IsssOficio = ClassRegistry::init('IsssOficio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IsssOficio);

		parent::tearDown();
	}

}
