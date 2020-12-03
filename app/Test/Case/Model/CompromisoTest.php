<?php
App::uses('Compromiso', 'Model');

/**
 * Compromiso Test Case
 */
class CompromisoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compromiso',
		'app.competencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compromiso = ClassRegistry::init('Compromiso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compromiso);

		parent::tearDown();
	}

}
