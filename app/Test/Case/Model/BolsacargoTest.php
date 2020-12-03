<?php
App::uses('Bolsacargo', 'Model');

/**
 * Bolsacargo Test Case
 */
class BolsacargoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsacargo',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bolsacargo = ClassRegistry::init('Bolsacargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bolsacargo);

		parent::tearDown();
	}

}
